<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Company;
use App\Http\Requests\EmpformRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::all();
        return view('crud.index',compact('company'));
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
     * @param  \Illuminate\Http\EmpformRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpformRequest $request)
    {
        $employe = new Employe;
        $employe -> firstname  =$request ->firstname;
        $employe -> lastname   =$request ->lastname;
        $employe -> company_id =$request ->company_id;
        $employe -> email      =$request ->email;
        $employe -> phone      =$request ->phone;
        $employe -> save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function show(Employe $employe)
    {
        $employe = Employe::all();
        return view('crud.table' , compact('employe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function edit(Employe $EmpResource)
    {
        return view('crud.edit')->with('employe',$EmpResource);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\EmpformRequest $request
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(EmpformRequest $request, Employe $EmpResource)
    {
        $EmpResource->update($request->all());
        $EmpResource->save();
        return redirect()->route('EmpResource.show',app() -> getLocale());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employe $employe,$EmpResource)
    {
        Employe::destroy($EmpResource);
        return redirect()->back()->with('sucess','delete Successfully');
    }
}
