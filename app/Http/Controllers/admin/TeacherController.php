<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\admin\cource;
use App\Model\admin\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = teacher::all();
        return view('admin.teacher.view',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cources = cource::all();
        return view('admin.teacher.teacher',compact('cources'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string',
            'email' => 'required|string|unique:teachers',
            'phone' => 'required|numeric',
            'image' => 'required',
        ]);
        if ($request->hasFile('image')){
            $image=$request->file('image');
            $teacher_img_name=$image->getClientOriginalName();
            $ext1 = $request->image->getClientOriginalExtension();
            $teacher_img_name=time().'.'.$ext1;
            $upload_path_for_teacher_img='uploaded_files/teacher-img/';
            $image->move( $upload_path_for_teacher_img,$teacher_img_name);
        }
        $teachers = new teacher;
        $teachers->name = $request->name;
        $teachers->email = $request->email;
        $teachers->phone = $request->phone;
        $teachers->image = $teacher_img_name;
        $teachers->department = $request->courcename;
        $teachers->save();
        return redirect()->back()->with(['success'=>'Teachers Added Successfully']);   
    
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
        $teachers = teacher::find($id);
        $cources = cource::all();
        return view('admin.teacher.edit',compact('teachers','cources'));
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
        $this->validate($request,[
            'name' => 'required|string',
            'email' => 'required|string|unique:teachers',
            'phone' => 'required|numeric',
            'image' => 'required',
        ]);
        
        if ($request->hasFile('image')){
            $image=$request->file('image');
            $teacher_img_name=$image->getClientOriginalName();
            $ext1 = $request->image->getClientOriginalExtension();
            $teacher_img_name=time().'.'.$ext1;
            $upload_path_for_teacher_img='uploaded_files/teacher-img/';
            $image->move( $upload_path_for_teacher_img,$teacher_img_name);
            }

            $teachers = teacher::find($id);
            $teachers->name  = $request->name;
            $teachers->email = $request->email;
            $teachers->phone = $request->phone;
            $teachers->image = $teacher_img_name;
            $teachers->department = $request->courcename;
            $teachers->save();
            return redirect(route('teacher.index'))->with(['success'=>'Teachers Updated Successfully']); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        teacher::destroy($id);
       return redirect()->back()->with(['success'=>'Teacher Deleted Successfully']);
    }
}
