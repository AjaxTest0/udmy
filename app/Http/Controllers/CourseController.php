<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use App\Models\UserCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $courses = Course::where('teacher_id', auth()->id())->latest()->get();
        return view('courses/index', compact('courses'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('courses/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $course = new Course();
            $course->name = $request['name'];   
            $course->teacher_id = auth()->id();   
            $course->description = $request['description'];
            $course->price = $request['price'];
            $course->save();  
        // $usercourse = new UserCourse();
        //     $usercourse->uswe_id = $request['name'];   
        //     $usercourse->price = $request['price'];
        //     $usercourse->save(); 
        


        // $course = Course::create($request->all());
        // $course->teacher_id = Auth()->id();
        // $course->save(); 
        return redirect()->route('home');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(course $course)
    {
        $sections = $course->sections;
        return view('courses.coursesSections.index',compact('sections'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('courses.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();       
        return redirect()->route('myCourses.index');
    }

    public function updateStatus(Course $course, $status)
    {
        $course->update(['status' => $status]);
        return redirect()->route('myCourses.index');
        
    }
    public function view()
    {
        $courses = Course::latest()->get();
        $users = User::where('Type','1' )->latest()->get();
        return view('admin/viewCourses',compact('courses','users'));

        
    }
}
