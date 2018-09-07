<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\admin\cource;
use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = User::where('value',1)->orderBy('created_at','DESC')->paginate(50);
        return view('admin.student.view',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cources = cource::all();
        return view('admin.student.student',compact('cources'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{ 
        $user = Sentinel::registerAndActivate($request->all());
        return redirect()->back()->with(['success'=>'Students Added Successfully']);
        }catch (QueryException $e){
            return redirect()->back()->with(['error'=>'Email Allready Exist.']);
        }
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
        $students = User::find($id);
        $cources = cource::all();
        return view('admin.student.edit',compact('students','cources'));
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

            'username' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|string|',
            'image' => 'required',
            'value' => 'required',
        ]);

        if ($request->hasFile('image')){
            $image=$request->file('image');
            $student_img_name=$image->getClientOriginalName();
            $ext1 = $request->image->getClientOriginalExtension();
            $student_img_name=time().'.'.$ext1;
            $upload_path_for_student_img='uploaded_files/student-img/';
            $image->move( $upload_path_for_student_img,$student_img_name);
            }

        $students = User::find($id);
        $students->username = $request->username;
        $students->name = $request->name;
        $students->email = $request->email;
        $students->image = $student_img_name;
        $students->department = $request->department;
        $students->value = $request->value;
        $students->save();
        return redirect(route('student.index'))->with(['success'=>'Students Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->back()->with(['success'=>'Students Deleted Successfully']);
    }
}
