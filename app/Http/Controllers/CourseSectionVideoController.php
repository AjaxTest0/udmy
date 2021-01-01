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
    public function store(Request $request)
    {
        $request->validate([
            'lecture_video' => 'required'
        ]);
        
        // dd($request->all(), $request->file('video_file')->getClientOriginalName(),$request->video_file);
        // echo "fjkbkjb";
        //echo "before";

        if($request->hasfile('lecture_video')){
            $file       = $request->file('lecture_video');    
            $filename   = time().'.'.$file->getClientOriginalExtension();
            $path       = public_path().'/uploads/'.auth()->id().'/lectures/';
            $file->move($path, $filename);
            echo $path;
        }
    }




    //     $file = $request['file'];
    //     
    //     $extenion = \File::extension($file);
    //     if ($extenion == "x-flv" || $extenion == "mp4" || $extenion == "x-mpegURL" || $extenion == "MP2T" || $extenion == "3gpp" || $extenion == "quicktime" || $extenion == "x-msvideo" || $extenion == "x-ms-wmv") 
    //     {    
    //         $file = request::file('file');
    //         $filename = $file->getClientOriginalName();
    //         $path = public_path().'/uploads/';   
    //         $file->move($path, $file);
        
    //     }
    //     else
    //         echo "not";
    // }

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
        
    }
}