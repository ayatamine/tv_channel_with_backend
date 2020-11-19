<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Session;
class SliderController extends Controller
{
    public function _construct(){
        $this->middleware('auth:admin');
       // $this->middleware('role:supervisor');
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sliders = Slider::paginate(10);
      return view('admin.sliders.index',compact('sliders'));
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
        $this->validate($request, [
            'image' => 'required',
        ]);
        $image = $request->image;

        $filename = time() . '.' . $image->getClientOriginalName();

        $image->move(public_path('img/sliders/'), $filename);

        $slider = new Slider();
        $slider->title = '';
        $slider->description = '';
        $slider->image = $filename;
        $slider->save();

        $request->session()->flash('success', 'تم بنجاح');

        return redirect()->back();
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::findorfail($id);
        return view('admin.sliders.create',compact('slider'));
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
        $slider = Slider::findorfail($id);
        $filename = $slider->image;

         if($image = $request->image){
             $filename = time() . '.' . $image->getClientOriginalName();
             $image->move(public_path('img/sliders/'), $filename);
         }
        $slider->title = '';
        $slider->description = '';
        $slider->image = $filename;
        $slider->save();

        $request->session()->flash('success', 'تم التحديث بنجاح');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findorfail($id);
        $slider->delete();
        Session::flash('success', 'تم حدف السلايدر بنجاح');

        return redirect()->back();
    }
}
