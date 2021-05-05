<?php

namespace App\Http\Controllers;
use App\Article;
use App\Banner;
use App\Booktour;
use App\Category;
use App\Contact;
use App\Customer;
use App\Photo;
use App\Promotion;
use App\Review;
use App\Schedule;
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
        $list = []; // chứa danh sách sản phẩm  theo danh mục

        foreach($this->categories as $key => $parent) {
            if($parent->parent_id == 0 && $parent->type == 1) { // check danh mục cha
                $ids = [] ; // tạo chứa các id của danh cha + danh mục con trực thuộc

                $ids[] = $parent->id; // id danh mục cha

                foreach($this->categories as $child) {
                    if ($child->parent_id == $parent->id) {
                        $ids[] = $child->id; // thêm phần tử vào mảng

                    }
                } // ids = [1,7,8,9,..]

                $list[$key]['category'] = $parent; // điện thoại, tablet

                // SELECT * FROM `products` WHERE is_active = 1 AND is_hot = 0 AND category_id IN (1,7,9,11) ORDER BY id DESC LIMIT 10
                $list[$key]['hotTours'] = Tour::where(['is_active' => 1, 'is_hot' => 1])
                    ->limit(21)
                    ->orderBy('id', 'desc')
                    ->get();

                $list[$key]['tours'] = Tour::where(['is_active' => 1, 'is_hot' => 0])
                    ->whereIn('category_id' , $ids)
                    ->limit(21)
                    ->orderBy('id', 'desc')
                    ->get();
            }
        }

        $cateNews  = Category::where(['is_active'=>1,'parent_id'=>0,'type'=>3])->first();
        $listNews = [];
        foreach ($this->categories as $key => $item){
            if($item->parent_id == $cateNews->id) {
                $ids = [] ;

                $ids[] = $item->id;

                $listNews[$key]['cateNews'] = $item;

                $listNews[$key]['travelNews'] = Article::where(['is_active' => 1, 'position' => 2])
                    ->whereIn('category_id' , $ids)
                    ->limit(30)
                    ->orderBy('id', 'desc')
                    ->get();

                $listNews[$key]['mainNews'] = Article::where(['is_active' => 1, 'position' => 1])
                    ->whereIn('category_id' , $ids)
                    ->limit(1)
                    ->get();

                $listNews[$key]['othersNews'] = Article::where(['is_active' => 1])
                    ->whereIn('category_id' , $ids)
                    ->limit(4)
                    ->orderBy('id', 'desc')
                    ->get();
            }

        }

        $reviews = Review::all();

        return view('frontend.home.index', [
            //'cart' => $cart,
            'list' => $list,
            'listNews' => $listNews,
            'cateNews' => $cateNews,
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
    public function toursList(Request $request, $slug)
    {
        $filter_sort = $request->query('sap-xep');
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
                                ->paginate(10);

            $hot_tours = Tour::where(['is_active' => 1, 'is_hot' => 1])
                ->latest()
                ->paginate(10);


            $articles = Article::where(['is_active'=>1])
                ->orderBy('view','desc')
                ->limit(10)
                ->get();

            $query = DB::table('tours')->select('*')
                ->whereIn('category_id', $ids)
                ->where('is_active', '=', 1);

            if ($filter_sort) {
                if ($filter_sort == 'moi-nhat') {
                    $query->orderBy('updated_at', 'DESC');
                } elseif ($filter_sort == 'tu-a-den-z') {
                    $query->orderBy('name', 'ASC');
                } elseif ($filter_sort == 'gia-thap-den-cao') {
                    $query->orderBy('sale', 'ASC');
                } elseif ($filter_sort == 'gia-cao-den-thap') {
                    $query->orderBy('sale', 'DESC');
                }

            } else {
                $query->orderBy('id', 'DESC');
            }

            $list_tours = $query->paginate(10);;

            return view('frontend.toursList',[
                'category' => $category,
                'list_tours' => $list_tours,
                'hot_tours' => $hot_tours,
                'articles' => $articles,
                'filter_sort' => $filter_sort,
            ]);
        } else {
            return $this->notfound();
        }
    }

    public function detailTour($slug){
        $tour = Tour::where(['is_active' => 1,'slug' => $slug])->first();

        $category = Category::where([['id', '=' , $tour->category_id]])->first();

        $photos = Photo::where([
            ['is_active', '=', 1],
            ['tour_id','=',$tour->id]
        ])->orderBy('id','desc')
            ->orderBy('position','ASC')
            ->limit(12)
            ->get();

        $schedules  = Schedule::where(['is_active'=>1])
            ->orderBy('position','ASC')
            ->get();

        $articles = Article::where(['is_active'=>1])
            ->orderBy('view','desc')
            ->limit(10)
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
            'category' => $category,
            'schedules' => $schedules,
            'sameTours' => $sameTours,
            'photos' => $photos,
            'articles' => $articles,
        ]);
    }

    public function bookTour($slug){
        $tour = Tour::where(['is_active' => 1,'slug' => $slug])->first();

        $category = Category::where([['id', '=' , $tour->category_id]])->first();

        return view('frontend.bookTour',[
            'tour' => $tour,
            'category' => $category,
        ]);
    }

    public function postBookTour(Request $request, $slug)
    {
        $tour = Tour::where(['is_active' => 1,'slug' => $slug])->first();

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ],[
            'name.required' => 'Bạn chưa nhập họ tên',
            'phone.required' => 'Bạn chưa nhập số điện thoại',
        ]);

        $name  = $request->input('name');
        $phone  = $request->input('phone');
        $email  = $request->input('email');
        $address  = $request->input('address');
        $date  = $request->input('date');
        $amount  = $request->input('amount');
        $moreInfo  = $request->input('moreInfo');
        $tour_id = $tour->id;

        $bookTour = new Booktour();
        $bookTour->name = $name;
        $bookTour->phone = $phone;
        $bookTour->email = $email;
        $bookTour->address = $address;
        $bookTour->date = $date ;
        $bookTour->amount = $amount ;
        $bookTour->moreInfo = $moreInfo;
        $bookTour->tour_id = $tour_id;

        $bookTour->save();

        // chuyen dieu huong trang
        return redirect()->route('home.index')->with('msg', 'Bạn đã đặt tour thành công');
    }

    public function allNews()
    {
        $cateNews  = Category::where(['is_active'=>1,'parent_id'=>0,'type'=>3])->first();
        $listNews = [];
        foreach ($this->categories as $key => $item){
            if($item->parent_id == $cateNews->id) {
                $ids = [] ;

                $ids[] = $item->id;

                $listNews[$key]['cateNews'] = $item;

                $listNews[$key]['travelNews'] = Article::where(['is_active' => 1, 'position' => 2])
                    ->whereIn('category_id' , $ids)
                    ->limit(2)
                    ->orderBy('id', 'desc')
                    ->get();

                $listNews[$key]['mainTravelNews'] = Article::where(['is_active' => 1, 'position' => 1])
                    ->whereIn('category_id' , $ids)
                    ->limit(5)
                    ->orderBy('id', 'desc')
                    ->get();

                $listNews[$key]['mainNews'] = Article::where(['is_active' => 1, 'position' => 1])
                    ->whereIn('category_id' , $ids)
                    ->limit(1)
                    ->get();

                $listNews[$key]['othersNews'] = Article::where(['is_active' => 1, 'position' => 2])
                    ->whereIn('category_id' , $ids)
                    ->limit(4)
                    ->orderBy('id', 'desc')
                    ->get();

                $listNews[$key]['expNews'] = Article::where(['is_active' => 1])
                    ->whereIn('category_id' , $ids)
                    ->limit(6)
                    ->orderBy('id', 'desc')
                    ->get();
            }

        }

        return view('frontend.news',[
            'cateNews' => $cateNews,
            'listNews' => $listNews,

        ]);
    }

    public function newsList(Request $request, $slug)
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
            $list_news = Article::where(['is_active' => 1])
                ->whereIn('category_id' , $ids)
                ->latest()
                ->paginate(18);

            $query = DB::table('articles')->select('*')
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


            return view('frontend.newsList',[
                'category' => $category,
                'list_news' => $list_news,
                'filter_sort' => $filter_sort,
            ]);
        } else {
            return $this->notfound();
        }
    }

    public function newsDetail($slug){
        $news = Article::where(['is_active' => 1,'slug' => $slug])->first();

        $sameNews  = Article::where([
            ['is_active', '=', 1],
            ['id','<>',$news->id],
            ['category_id','=',$news->category_id]
        ])->orderBy('id','desc')
            ->orderBy('position','ASC')
            ->limit(10)
            ->get();

        return view('frontend.newsDetail',[
            'news' => $news,
            'sameNews' => $sameNews,
        ]);
    }

    public function search(Request $request)
    {
        // b1. Lấy từ khóa tìm kiếm
        $keyword = $request->input('tu-khoa');

        $slug = str_slug($keyword);

        //$sql = "SELECT * FROM products WHERE is_active = 1 AND slug like '%$keyword%'";

        $tours = Tour::where([
            ['slug', 'like', '%' . $slug . '%'],
            ['is_active', '=', 1]
        ])->paginate(10);

        $totalResult = $tours->total(); // số lượng kết quả tìm kiếm

        return view('frontend.search', [
            'tours' => $tours,
            'totalResult' => $totalResult,
            'keyword' => $keyword ? $keyword : ''
        ]);
    }

    public function info($slug){

        $category = Category::where(['is_active' => 1,'slug' => $slug])->first();

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
            $list_news = Article::where(['is_active' => 1])
                ->whereIn('category_id' , $ids)
                ->latest()
                ->paginate(18);

            $reviews = Review::all();


            return view('frontend.info',[
                'category' => $category,
                'list_news' => $list_news,
                'reviews' => $reviews,
            ]);

        }
        else {
            return $this->notfound();
        }

    }

    public function infoDetail($slug){
        $news = Article::where(['is_active' => 1,'slug' => $slug])->first();

        $category = Category::where([['id', '=' , $news->category_id]])->first();

        $sameNews  = Article::where([
            ['is_active', '=', 1],
            ['id','<>',$news->id],
            ['category_id','=',$news->category_id]
        ])->orderBy('id','desc')
            ->orderBy('position','ASC')
            ->limit(10)
            ->get();

        return view('frontend.infoDetail',[
            'news' => $news,
            'category' => $category,
            'sameNews' => $sameNews,
        ]);
    }

    public function reviewDetail($slug){
        $review = Review::where(['is_active' => 1,'slug' => $slug])->first();

        $category = Category::where([['id', '=' , $review->category_id]])->first();

        $customers = Customer::all();

        return view('frontend.reviewDetail',[
            'review' => $review,
            'category' => $category,
            'customers' => $customers,
        ]);
    }

    public function services() {
        $services = Category::where(['is_active' => 1,'parent_id'=>0, 'type'=>2])->first();
        return view('frontend.services',[
            'services'=>$services
        ]);
    }

    public function serviceDetail($slug){

        $category = Category::where(['is_active' => 1,'slug' => $slug])->first();

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
            $list_news = Article::where(['is_active' => 1])
                ->whereIn('category_id' , $ids)
                ->latest()
                ->paginate(18);




            return view('frontend.serviceDetail',[
                'category' => $category,
                'list_news' => $list_news,
            ]);

        }
        else {
            return $this->notfound();
        }

    }

    public function promotion(Request $request) {


        $phone  = $request->input('phone');
        $email  = $request->input('email');
        $note  = $request->input('note');

        $promotion = new Promotion();
        $promotion->phone = $phone;
        $promotion->email = $email;
        $promotion->note = $note;

        $promotion->save();

        // chuyen dieu huong trang
        return redirect()->route('home.index')->with('msg', 'Bạn đã gửi tin nhắn thành công');
    }

    public function introduce() {
        return view('frontend.intro');
    }
    public function partner() {
        return view('frontend.partner');
    }

    public function bookHotel() {
        return view('frontend.partner');
    }

    public function departureSchedule() {
        return view('frontend.departureSchedule');
    }

}
