<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use App\Models\Company;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CompanyformRequest;
use Illuminate\Support\Facades\Validator;
use Notification;
use App\Notifications\SendEmailNotification;
// use Illuminate\Support\Facades\Notification;

 
class CompanyController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        return view('company.index');
    }
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function notify()
    {
        $company = Company::all();
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
        $company =new Company;
        
        $company            ->  cnm=$request->cnm;
        $company            ->  email=$request->email;
        $logo               =   $request->file('logo');
        $path               =   'storage/';
        $image              =   date('YmdHis').".".$logo->getClientOriginalExtension();
        $logo               ->  move($path,$image);
        $company['logo']    =   "$image";            
        $company -> website =   $request->website;
        Notification::send($company,new SendEmailNotification($company));    
        $company            ->  save();
        return redirect()   ->  back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        $company=Company::all();
        return view('company.table' , compact('company'));
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
        $CompanyResource->website=$request->website;
        $qry=$CompanyResource->save();
        return redirect()->route('CompanyResource.show',app() -> getLocale());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company, $CompanyResource)
    {
        Company::destroy($CompanyResource);
        return redirect()->back()->with('sucess','delete Successfully');
    }
}
