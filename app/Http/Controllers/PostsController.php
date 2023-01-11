<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use \Carbon\Carbon;

class PostsController extends Controller
{
    public function get_index_page(Request $request)
    {
        $search_content = $request->get('search_content');
        $data = DB::table('posts');
        if ($search_content) {
            $data->orwhere('title','like','%'. $search_content .'%');
            $data->orwhere('content','like','%'. $search_content .'%');
        }
        $data = $data->get();
        return view('pages.index',compact('data',$data));
    }

    public function get_create_page(){
        return view('pages.create');
    }

    public function store_create_data(Request $request)
    {
        $title = $request->get('title');
        $content = $request->get('content');
        $nowtime = Carbon::now()->addRealHour(8)->toDateTimeString();

        DB::table('posts')->insert([
            'title' => $title,
            'content' => $content,
            'created_at' => $nowtime,
            'updated_at' => $nowtime,
        ]);

        return redirect()->route('get_index_page');

    }

    public function get_content_page(Request  $request)
    {
        $id = $request->get('id');
        $data = DB::table('posts')
            ->where('id',$id)
            ->first();

        return view('pages.content', compact('data',$data));
    }

    public function get_update_page(Request  $request)
    {
        $id = $request->get('id');
        $data = DB::table('posts')
            ->where('id',$id)
            ->first();

        return view('pages.update', compact('data',$data));
    }

    public function store_update_data(Request $request)
    {
        $id = $request->get('id');
        $title = $request->get('title');
        $content = $request->get('content');
        $nowtime = Carbon::now()->addRealHour(8)->toDateTimeString();

        DB::table('posts')
            ->where('id',$id)
            ->update([
                'title' => $title,
                'content' => $content,
                'updated_at' => $nowtime,
            ]);

        $data = DB::table('posts')
            ->where('id',$id)
            ->first();

        return view('pages.content', compact('data',$data));

    }

    public  function  delete_data(Request  $request)
    {
        $id = $request->get('id');
        DB::table('posts')
            ->where('id',$id)
            ->delete();

        return redirect()->route('get_index_page');
    }
}
