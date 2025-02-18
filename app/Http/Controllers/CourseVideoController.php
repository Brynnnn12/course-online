<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseVideo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreCourseVideoRequest;
use Illuminate\Contracts\Cache\Store;

class CourseVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Course $course)
    {
        //
        return view('admin.course_videos.create', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseVideoRequest $request, Course $course)
    {
        //

        DB::transaction(function () use ($request,  $course) {
            $validated = $request->validated();

            $validated['course_id'] = $course->id;

            $courseVideo = CourseVideo::create($validated);

        });

        return redirect()->route('admin.courses.show', $course->id)->with('success', 'Course  Video created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CourseVideo $courseVideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseVideo $courseVideo)
    {
        //
        return view('admin.course_videos.edit', compact('courseVideo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCourseVideoRequest $request, CourseVideo $courseVideo)
    {
        //
        DB::transaction(function () use ($request,  $courseVideo) {
            $validated = $request->validated();

            $courseVideo->update($validated);

        });

        return redirect()->route('admin.courses.show', $courseVideo->course->id)->with('success', 'Course  Video created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseVideo $courseVideo)
    {
        //
        DB::beginTransaction();
        try {
            $courseVideo->delete();
            DB::commit();
            return redirect()->route('admin.courses.index')->with('success', 'Courses deleted successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('admin.courses.index')->with('error', 'Courses deleted successfully.');
        }

    }
}
