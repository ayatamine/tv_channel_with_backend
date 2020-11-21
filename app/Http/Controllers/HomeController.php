<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\Lives;
use App\Slider;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware(['auth','verified','account_unlocked']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $programs1 = Program::latest()->take(3)->get();
        $programs2 = Program::latest()->skip(3)->take(3)->get();
        $programs3 = Program::latest()->skip(6)->take(3)->get();
        $live = Lives::findorfail(1);
        $sliders = Slider::get();
        return view('home',compact('programs1','programs2','programs3','live','sliders'));
    }
    public function live()
    {
        $live = Lives::findorfail(1);
        $title = 'البث المباشر';
        return view('live',compact('live','title'));
    }
    public function programs()
    {
        $programs = Program::latest()->take(6)->get();
        $title = 'البرامج';
        return view('programs',compact('programs','title'));
    }
    public function loadMorePrograms(Request $request)
    {
        if($request->ajax()){
          $programs = Program::latest()->skip($request->skip_number)->take(6)->get();
        }
        return response()->json($programs);
    }


}
