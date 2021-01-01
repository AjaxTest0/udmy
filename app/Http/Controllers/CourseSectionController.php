<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseSection;
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
        //
        // dd(request()->all());
        // $sections = \DB::table('course_sections')->latest()->get();
        // //return view('courses\courses_section\create');
        
        // return view('courses\coursesSections\index', compact('sections'));

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
        $section = new CourseSection();
            $section->name = $request['section'];
            $section->course_id = $request['course'];   
            $section->save();  
        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\course_section  $course_section
     * @return \Illuminate\Http\Response
     */
    public function show(CourseSection $CourseSection)
    {
        //echo $CourseSection;
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
        //
        //dd($CourseSection);
    }
}
