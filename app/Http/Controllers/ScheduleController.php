<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Tour;
use App\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedule = Schedule::latest()->paginate(30);
        return view('backend.schedule.index',[
            'data' =>  $schedule
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tours = Tour::all();

        return view('backend.schedule.create',[
            'tours' => $tours
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'tour_id' => 'required',
            'position' => 'required',
            'content' => 'required'
        ],[
            'title.required' => 'Bạn chưa nhập tiêu đề',
            'tour_id.required' => 'Bạn chưa chọn tour',
            'position.reqquired' => 'Bạn chưa chọn vị trí',
            'content.reqquired' => 'Bạn chưa nhập nội dung',
        ]);

        $title  = $request->input('title');
        $tour_id  = $request->input('tour_id');
        $position  = $request->input('position');
        $content = $request->input('content');

        $is_active = 0; // default
        if ($request->has('is_active')) {
            $is_active = (int)$request->input('is_active');
        }

        $schedule = new Schedule();
        $schedule->title = $title;
        $schedule->position = $position;
        $schedule->tour_id = $tour_id;
        $schedule->content = $content;
        $schedule->is_active = $is_active;
        $schedule->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.schedule.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Schedule::find($id);
        $tours = Tour::all();

        return view('backend.schedule.edit',[
            'data' => $data,
            'tours' => $tours
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'tour_id' => 'required',
            'position' => 'required',
            'content' => 'required'
        ],[
            'title.required' => 'Bạn chưa nhập tiêu đề',
            'tour_id.required' => 'Bạn chưa chọn tour',
            'position.reqquired' => 'Bạn chưa chọn vị trí',
            'content.reqquired' => 'Bạn chưa nhập nội dung',
        ]);

        $title  = $request->input('title');
        $tour_id  = $request->input('tour_id');
        $position  = $request->input('position');
        $content = $request->input('content');

        $is_active = 0; // default
        if ($request->has('is_active')) {
            $is_active = (int)$request->input('is_active');
        }

        $schedule = Schedule::find($id);
        $schedule->title = $title;
        $schedule->position = $position;
        $schedule->tour_id = $tour_id;
        $schedule->content = $content;
        $schedule->is_active = $is_active;
        $schedule->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.schedule.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDelete = Schedule::destroy($id);
        if ($isDelete) {
            return response()->json(['success' => 1, 'message' => 'Thành công']);
        } else {
            return response()->json(['success' => 0, 'message' => 'Thất bại']);
        }
    }
}
