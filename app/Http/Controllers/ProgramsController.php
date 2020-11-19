<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Program;
class ProgramsController extends Controller
{
    public function _construct(){
        $this->middleware('auth:admin');
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::paginate(10);
        return view('admin.programs.index',compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'title'=>'string|required',
            'type'=>'string|required',
            'duration'=>'required|numeric',
            'delay_at'=>'required',
            'image' => 'required',
            'description' => 'required',
        ]);
        $image = $request->image;

        $filename = time() . '.' . $image->getClientOriginalName();

        $image->move(public_path('img/programs/'), $filename);

        $program = new Program();
        $program->title = $request->title;
        $program->type = $request->type;
        $program->duration = $request->duration;
        $program->delay_at = $request->delay_at;
        $program->description =$request->description;
        $program->thumbnail = $filename;
        $program->save();

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
        $program = Program::findorfail($id);
        return view('admin.programs.create',compact('program'));
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
        $program = Program::findorfail($id);
        $program->delete();
        Session::flash('success', 'تم حدف البرنامج بنجاح');

        return redirect()->back();
    }
}
