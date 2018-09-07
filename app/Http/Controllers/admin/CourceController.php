<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\admin\cource;
use Illuminate\Http\Request;

class CourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cources = cource::all();
        return view('admin.cource.view',compact('cources'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cource.cource');
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
            'courcename'     => 'required',
       ]);

        $cource = new cource;
        $cource->courcename = $request->courcename;
        $cource->save();
        return redirect()->back()->with(['success'=>'Cource Added Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $cource = cource::find($id);
        return view('admin.cource.edit',compact('cource'));
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

            'courcename' => 'required',
       ]);

        $cource = cource::find($id);
        $cource->courcename = $request->courcename;
        $cource->save();
        return redirect(route('cource.index'))->with(['success'=>'Cource Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        cource::where('id',$id)->delete();
       return redirect()->back()->with(['success'=>'Cource Deleted Successfully']);
    }
}
