<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Company;
use App\Models\Backend\CompanyType;
use App\Models\Backend\Country;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Exceptions\GeneralException;
use DB;

class UserController extends Controller
{
  public function store(Request $request)
  {
    $req= new Company();
    $logo =$request->file('logo');
    $filename=null;
    if ($logo) {
        $filename = time() . $logo->getClientOriginalName();

        Storage::disk('public')->putFileAs(
            'company-logos/',
            $logo,
            $filename
        );

    }
    $req->logo= $filename;
    $req->manager= $request->manager;
    $req->type= $request->type;
    $req->name= $request->name;
    $req->address_l1= $request->address_l1;
    $req->address_l2= $request->address_l2;
    $req->city= $request->city;
    $req->zip= $request->zip;
    $req->country= $request->country;
    $req->email= $request->email;
    $req->phone_code= $request->phone_code;
    $req->phone= $request->phone;
    $req->preferred_currency= $request->preferred_currency;
    $req->status= $request->status;
    $req->does_agree= $request->does_agree;
    $req->save();

    $user= User::find($request->manager);
    $user->type=2;
    $user->save();

    $notification=array(
      'message'=>'New company has been added successfully!!!',
      'alert-type'=>'success'
    );
    return redirect('/manager/home')->with($notification);
  }
}
