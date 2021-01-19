<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseSection;
use App\Models\CourseSectionVideo;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;

class CourseSectionController extends Controller
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
        $courses = Course::where('teacher_id', auth()->id())->latest()->get();
        return view('courses\coursesSections\create', compact('courses'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Saving Topic/section
        $section = new CourseSection();
            $section->name = $request['topic_name'];
            $section->course_id =  $request['course_id'];
            $section->save();
        // Saving Videos and topic    
        dd($section->id);
           
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\course_section  $course_section
     * @return \Illuminate\Http\Response
     */
    public function show(CourseSection $CourseSection)
    {
        
        return view('courses.coursesSections.coursesSectionsVideos.index',compact('CourseSection'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\course_section  $course_section
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseSection $CourseSection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\course_section  $course_section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseSection $CourseSection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course_section  $course_section
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseSection $CourseSection)
    {
        $CourseSection->delete();    
        return redirect()->route('myCourses.index');
    }
}
