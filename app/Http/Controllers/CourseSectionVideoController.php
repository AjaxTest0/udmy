<?php

namespace App\Http\Controllers;

use App\Models\CourseSectionVideo;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
// use Request;

class CourseSectionVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response    
     */   
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {  
        $request->validate([
            'lecture_video' => 'required'
        ]);
        if($request->hasfile('lecture_video')){
            $file       = $request->file('lecture_video');    
            $filename   = time().'.'.$file->getClientOriginalExtension();
            $path       = 'uploads/'.auth()->id().'/lectures/';
            $file->move($path, $filename);
            $video = new CourseSectionVideo();
            $video->name = $request["lecture_name"];    
            $video->video_path = $path;
            $video->lecture_name = $filename;
            $video->section_id = $id;
            $video->paid = ($request["lecture_free"] == null? 0:1 );
            $video->description = $request["lecture_description"];    
            $video->save();
            return redirect()->route('myCourses.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\course_section_video  $course_section_video
     * @return \Illuminate\Http\Response
     */
    public function show(CourseSectionVideo $CourseSectionVideo)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\course_section_video  $course_section_video
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseSectionVideo $CourseSectionVideo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\course_section_video  $course_section_video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseSectionVideo $CourseSectionVideo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course_section_video  $course_section_video
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseSectionVideo $CourseSectionVideo)
    {
        $CourseSectionVideo->delete();

        return redirect()->route('myCourses.index');
    }
}