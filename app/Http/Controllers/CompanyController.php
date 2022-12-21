<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\CompanyformRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $com=Company::paginate(5);
        return view('company.index')->with('com',$com);
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
     * @param  \Illuminate\Http\CompanyformRequest  $request
     * @return \Illuminate\Http\Response
     */

    public function store(CompanyformRequest $request)
    {

        $com=new Company;
        $com->cnm=$request->cnm;
        $com->email=$request->email;

        $logo = $request->file('logo');
        $path='storage/';
        $image=date('YmdHis').".".$logo->getClientOriginalExtension();
        $logo->move($path,$image);
        $com['logo'] = "$image";

        $com->website=$request->website;
        $com->save();

         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $CompanyResource)
    {
        return view('company.edit')->with('com',$CompanyResource);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\CompanyformRequest $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyformRequest  $request, Company $CompanyResource)
    {
        $CompanyResource->cnm=$request->cnm;
        $CompanyResource->email=$request->email;

        $logo = $request->file('logo');
        $path='storage/';
        $image=date('YmdHis').".".$logo->getClientOriginalExtension();
        $logo->move($path,$image);
        $CompanyResource['logo'] = "$image";

        // $CompanyResource->logo=$request->logo;
        $CompanyResource->website=$request->website;
        $qry=$CompanyResource->save();

        if($qry)
        {
         return redirect()->route('CompanyResource.index')->with('sucess','updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $CompanyResource)
    {
        $qry=$CompanyResource->delete();
        if($qry){
            return redirect()->route('CompanyResource.index')->with('sucess','delete Successfully');
        }
    }
}
