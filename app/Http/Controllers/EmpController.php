<?php

namespace App\Http\Controllers;

use App\Models\Emp;
use App\Http\Requests\EmpformRequest;
use Illuminate\Http\Request;

class EmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emp=Emp::paginate(5);
        return view('crud.index')->with('emp',$emp);
    }
    public function __construct()
    {
        $this->middleware('auth');
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
    public function store(EmpformRequest $request)
    {
        // $request->validate([
        //     'fname'=>'required',
        //     'lname'=>'required',
        //     'company'=>'required',
        //     'email'=>'requried|email|unique:emps',
        //     'phone'=>'required|min:10|max:10',
        // ]);

        $emp= new Emp;
        $emp->fname=$request->fname;
        $emp->lname=$request->lname;
        $emp->company=$request->company;
        $emp->email=$request->email;
        $emp->phone=$request->phone;
        $emp->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emp  $emp
     * @return \Illuminate\Http\Response
     */
    public function show(Emp $emp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emp  $emp
     * @return \Illuminate\Http\Response
     */
    public function edit(Emp $EmpResource)
    {
        return view('crud.edit')->with('emp',$EmpResource);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emp  $emp
     * @return \Illuminate\Http\Response
     */
    public function update(EmpformRequest $request, Emp $EmpResource)
    {


           $EmpResource->fname=$request->fname;
           $EmpResource->lname=$request->lname;
           $EmpResource->company=$request->company;
           $EmpResource->email=$request->email;
           $EmpResource->phone=$request->phone;
           $qry=$EmpResource->save();

           if($qry)
           {
            return redirect()->route('EmpResource.index')->with('sucess','updated Successfully');
           }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emp  $emp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emp $EmpResource)
    {
        $qry=$EmpResource->delete();
        if($qry){
            return redirect()->route('EmpResource.index')->with('sucess','delete Successfully');
        }


    }
}
