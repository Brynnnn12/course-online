<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SubscribeTransaction;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreSubscribeTransactionRequest;

class FrontController extends Controller
{

    //
    public function index(){
        $courses = Course::with('teacher', 'category','students')->orderByDesc('id')->get();

        return view('front.index', compact('courses'));
    }
    public function details(Course $course){
        return view('front.details', compact('course'));
    }
    public function learning(Course $course, $courseVideoId)
    {
        $user = Auth::user();

        
        if (!$user->hasActiveSubscription()) {
            return redirect()->route('front.pricing');
        }
    
        $video = $course->course_videos->firstWhere('id', $courseVideoId);

        $user->courses()->syncWithoutDetaching($course->id);

    
        
        return view('front.learning', compact('course', 'video'));
    }

    public function pricing(){
        return view('front.pricing');
    }
    public function checkout(){
        return view('front.checkout');
    }
    
    public function checkout_store(StoreSubscribeTransactionRequest $request){
        $user = Auth::user();
        if(Auth::user()->hasActiveSubscription()){
            return redirect()->route('front.index');
        }
    
        DB::transaction(function () use($request, $user) {
            $validated = $request->validated();
            if ($request->hasFile('proof')) {
                $proofPath = $request->file('proof')->store('proofs', 'public');
                $validated['proof'] = $proofPath;
            } 
            $validated['user_id'] = $user->id;
            $validated['is_paid'] = false;
            $validated['total_amount'] = 429000;
    
            // dd($validated); // Debugging output
    
            $transaction = SubscribeTransaction::create($validated);
        });
    
        return redirect()->route('dashboard')->with('success', 'Subscribe successfully.');
    }
    
}
