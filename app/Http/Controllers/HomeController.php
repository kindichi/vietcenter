<?php

namespace App\Http\Controllers;
use App\Article;
use App\Banner;
use App\Category;
use App\Contact;
use App\Photo;
use App\Review;
use App\Tour;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends GeneralController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $allTours  = Tour::where(['is_active'=>1])->limit(100)
            ->orderBy('id','desc')
            ->orderBy('position','ASC')
            ->get();

        $cateNews  = Category::where(['is_active'=>1,'parent_id'=>0,'type'=>3, 'position'=>1 ])->first();

        $travelNews  = Article::where(['is_active'=>1])->limit(100)
            ->orderBy('id','desc')
            ->orderBy('position','ASC')
            ->get();

//        $mainTravelNews  = Article::where(['is_active'=>1, 'category_id'=>177, 'position'=>2])->first();
//
//        $travelGuides  = Article::where(['is_active'=>1, 'category_id'=>178])->limit(30)
//            ->orderBy('id','desc')
//            ->orderBy('position','ASC')
//            ->get();
//
//        $travelExperiences  = Article::where(['is_active'=>1, 'category_id'=>179])->limit(30)
//            ->orderBy('id','desc')
//            ->orderBy('position','ASC')
//            ->get();
//
//        $travelInquiries  = Article::where(['is_active'=>1, 'category_id'=>180])->limit(30)
//            ->orderBy('id','desc')
//            ->orderBy('position','ASC')
//            ->get();

        $reviews = Review::all();

        return view('frontend.home.index', [
            //'cart' => $cart,
            'allTours' => $allTours,
            'cateNews' => $cateNews,
//            'travelNews' => $travelNews,
//            'mainTravelNews' => $mainTravelNews,
//            'travelGuides' => $travelGuides,
//            'travelExperiences' => $travelExperiences,
//            'travelInquiries' => $travelInquiries,
            'reviews' => $reviews,
        ]);

    }

    public function contact()
    {
        return view('frontend.home.contact');
    }

    public function postContact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'title' => 'required',
            'content' => 'required',

        ],[
            'name.required' => 'Bạn chưa nhập họ tên',
            'phone.required' => 'Bạn chưa nhập số điện thoại',
            'email.required' => 'Bạn chưa nhập email',
            'address.required' => 'Bạn chưa nhập địa chỉ',
            'title.required' => 'Bạn chưa nhập yêu cầu',
            'content.required' => 'Bạn chưa nhập nội dung',
        ]);

        $name  = $request->input('name');
        $phone  = $request->input('phone');
        $email  = $request->input('email');
        $address  = $request->input('address');
        $title  = $request->input('title');
        $content  = $request->input('content');

        $contact = new Contact();
        $contact->name = $name;
        $contact->phone = $phone;
        $contact->email = $email;
        $contact->address = $address;
        $contact->title = $title ;
        $contact->content = $content;

        $contact->save();

        // chuyen dieu huong trang
        return redirect()->route('home.contact')->with('msg', 'Bạn đã gửi tin nhắn thành công');
    }

    // lấy san phan theo danh mục
    public function getToursByCategory(Request $request, $slug)
    {
        $filter_sort = $request->query('sap-sep');

        // step 1 : lấy chi tiết thể loại
        $category = Category::where(['slug' => $slug])->first();

        if ($category) {
            // step 1.1 Check danh mục cha -> lấy toàn bộ danh mục con để where In
            $ids = []; // mảng lưu toàn id của danh mục cha + id - danh mục con

            $ids[] = $category->id; // 1
            $child_categories = []; // lưu danh mục con

            foreach ($this->categories as $child) {
                if ($child->parent_id == $category->id) {
                    $ids[] = $child->id; // thêm id của danh mục con vào mảng ids
                    $child_categories[] = $child;
                }
            } // ids = 1,7,8,9,11

            // step 2 : lấy list sản phẩm theo thể loại
            $list_tours = Tour::where(['is_active' => 1])
                                ->whereIn('category_id' , $ids)
                                ->latest()
                                ->paginate(8);

            $query = DB::table('tours')->select('*')
                ->whereIn('category_id', $ids)
                ->where('is_active', '=', 1);

            // Sắp sếp
            if ($filter_sort) {
                if ($filter_sort == 'noi-bat') {
                    $query->orderBy('is_hot', 'DESC');
                } elseif ($filter_sort == 'ban-chay-nhat') {
                    $query->orderBy('is_hot', 'DESC');
                } elseif ($filter_sort == 'gia-thap-den-cao') {
                    $query->orderBy('sale', 'ASC');
                } elseif ($filter_sort == 'gia-cao-den-thap') {
                    $query->orderBy('sale', 'DESC');
                }

            } else {
                $query->orderBy('id', 'DESC');
            }

            return view('frontend.toursList',[
                'category' => $category,
                'list_tours' => $list_tours,
                'filter_sort' => $filter_sort,
            ]);
        } else {
            return $this->notfound();
        }
    }
    public function toursList($slug){
        $toursList = Tour::where(['is_active' => 1,'slug' => $slug])->first();

        return view('frontend.toursList',[
            'toursList' => $toursList,
        ]);
    }
    public function detailTour($slug){
        $tour = Tour::where(['is_active' => 1,'slug' => $slug])->first();
        $photos = Photo::where([
            ['is_active', '=', 1],
            ['tour_id','=',$tour->id]
        ])->orderBy('id','desc')
            ->orderBy('position','ASC')
            ->limit(12)
            ->get();

        $sameTours  = Tour::where([
            ['is_active', '=', 1],
            ['id','<>',$tour->id],
            ['category_id','=',$tour->category_id]
        ])->orderBy('id','desc')
            ->orderBy('position','ASC')
            ->limit(12)
            ->get();

        return view('frontend.tourDetail',[
            'tour' => $tour,
            'sameTours' => $sameTours,
            'photos' => $photos
        ]);
    }
    public function bookTour($slug){
        $bookTour = Tour::where(['is_active' => 1,'slug' => $slug])->first();

        return view('frontend.bookTour',[
            'bookTour' => $bookTour
        ]);
    }

    public function news()
    {
        return view('frontend.news');
    }

    public function newsList($slug)
    {
        $newsList = Article::where(['is_active' => 1,'slug' => $slug])->first();

        return view('frontend.newsList',[
            'newsList' => $newsList,
        ]);
    }
}
