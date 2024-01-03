<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
class BlogsController extends Controller
{
    public function index( Request $request)
    {
       
        $blogs = DB::table('blogs')->paginate(10);

        $pageName = 'Tên Trang - News';
        return view('/blogs.index', compact('blogs', 'pageName'),[
            '/blogs' => $blogs
        ]);
    }
    public function show(Request $request, $id)
    {
        $blogs = Blog::where('id', '=', $id)->select('*')->first();
        return view('/blogs.detail', compact('blogs'));
    } 
    public function create()
    {
        //Hiển thị trang thêm blog
        return view('blogs.create');
    }
    public function store(Request $request)
    {
        $newblog = new Blog;
        $newblog->title = $request->title;
        $newblog->images = $request->images;
        $newblog->images_2 = $request->images_2;
        $newblog->synopsis = $request->synopsis;
        $newblog->content = $request->content;
        $newblog->external_link = $request->external_link;
        
        $newblog->save();
        if($newblog instanceof Blog) {
            toastr()->success('Data add success');
            return redirect('/blogs');
        } 
        toastr()->error('Data add fail');
        return back();   
    }
    public function edit($id)
    {
        $blogs = Blog::findOrFail($id);
        $pageName = 'Blogs - Update';
        return view('blogs.Update', compact('blogs', 'pageName'));
    }
    public function update(Request $request, $id)
    {
        $blogs = Blog::find($id);
        $blogs->title = $request->title;
        $blogs->images = $request->images;
        $blogs->images_2 = $request->images_2;
        $blogs->synopsis = $request->synopsis;
        $blogs->content = $request->content;
        $blogs->external_link = $request->external_link;

        $blogs->save();
        if($blogs instanceof Blog) {
            toastr()->success('Data update success');
            return redirect('/blogs');
        } 
        toastr()->error('Data update fail');
        return back();
    }
    public function destroy($id)
    {
        $banners = Blog::find($id);

        $banners->delete();
        if($banners instanceof Blog) {
            toastr()->success('Data delete success');
            return redirect('/blogs');
        } 
        toastr()->error('Data delete fail');
        return back();
    }
    public function viewblog(Request $request, $id)
    {
        $blogs = Blog::where('id', '=', $id)->select('*')->first();
        return view('/frontend.viewblog', compact('blogs'));
    } 
}
