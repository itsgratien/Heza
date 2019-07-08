<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;
use Illuminate\Support\Str;
use App\Story as Story;
class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
      $this->middleware('auth')->except(['show']);
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('story.create');
    }

    public function uploadImage(){

        Cloudder::upload(request()->image, null,[
            "folder"=>'blogging',
            "chunk_size"=>10000
            ]);
        $imageUpload=Cloudder::getResult();
        return response()->JSON(['data'=>$imageUpload]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $attributes= $request->validate([
            'title'=>'required|min:5',
            'story'=>'required|min:10',
        ]);
        $attributes['image']=$request->image;
        $attributes['slug']=Str::slug($request->slug).'-'.Str::uuid();
        $data=auth()->user()->story()->create($attributes);
        return response()->JSON(['data'=>$data->slug, 'message'=>'Your story has been published.'], 200);
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
        $story = Story::where(['slug'=>$id])->
        join('users','users.id', '=','stories.owner_id')->first();
        abort_if(!$story, 404);
        return view('story.show', ['story'=>$story]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
