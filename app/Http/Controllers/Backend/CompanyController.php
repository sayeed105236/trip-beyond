<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Company;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Exceptions\GeneralException;
use DB;

class CompanyController extends Controller
{
    public function index()
    {
      $companies=Company::get();
      return view('backend.superadmin.pages.company.companies', compact('companies'));
    }

    public function indexActive()
    {
      $companies=Company::where('is_active', '=', '1')->get();
      return view('backend.superadmin.pages.about.view-services', compact('companies'));
    }

    public function indexInactive()
    {
      $companies=Company::where('is_active', '=', '0')->get();
      return view('backend.superadmin.pages.company.companies', compact('companies'));
    }

    public function newCompany()
    {
      $users=User::get();
      return view('backend.superadmin.pages.company.new-company', compact('users'));
    }

    public function storeCompany()
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
      $req->user= $request->user;
      $req->title= $request->title;
      $req->description= $request->description;
      $req->username= $request->username;
      $req->commission= $request->commission;
      $req->mobile= $request->mobile;
      $req->email= $request->email;
      $req->address= $request->address;
      $req->zip= $request->zip;
      $req->country= $request->country;
      $req->is_active= $request->is_active;
      $req->status= 1;
      $req->save();
      $notification=array(
        'message'=>'New company has been added successfully!!!',
        'alert-type'=>'success'
      );
      $companies=Company::get();
      return view('backend.superadmin.pages.company.companies', compact('companies'))->with($notification);
    }

    public function editCompany($id)
    {
      $company=Company::where('id', $id)->first();
      return view('backend.superadmin.pages.company.edit-company', compact('company'));
    }
    public function updateCompany(Request $request)
    {
      $req= Company::find($request->id);
      if($request->file('file1')!=null)
      {
        $filename=null;
        $uploadedFile = $request->file('file1');
        $oldfilename = $req['logo'] ?? 'demo.jpg';
        $oldfileexists = Storage::disk('public')->exists('company-logos/' . $oldfilename);
        if ($uploadedFile !== null)
        {
          if ($oldfileexists && $oldfilename != $uploadedFile)
          {
            //Delete old file
            Storage::disk('public')->delete('company-logos/' . $oldfilename);
          }
          $filename_modified = str_replace(' ', '_', $uploadedFile->getClientOriginalName());
          $filename = time() . '_' . $filename_modified;
          Storage::disk('public')->putFileAs(
              'company-logos/',
              $uploadedFile,
              $filename
            );
            $req['logo'] = $filename;
            $req->logo= $filename;
          }
          elseif (empty($oldfileexists))
          {
            throw new GeneralException('Image not found!');
            //return redirect()->back()->with(['flash_danger' => 'User image not found!']);
            //file check in storage
          }
        }
      }
      $req->user= $request->user;
      $req->title= $request->title;
      $req->description= $request->description;
      $req->username= $request->username;
      $req->commission= $request->commission;
      $req->mobile= $request->mobile;
      $req->email= $request->email;
      $req->address= $request->address;
      $req->zip= $request->zip;
      $req->country= $request->country;
      $req->is_active= $request->is_active;
      $req->status= $request->status;
      $req->save();
      $notification=array(
        'message'=>'Company information has been updated successfully!!!',
        'alert-type'=>'success'
      );
      $companies=Company::get();
      return view('backend.superadmin.pages.company.companies', compact('companies'))->with($notification);
    }
    public function deleteCompany($id)
    {
      $req = Company::find($id);
      $req->delete();
      $notification=array(
        'message'=>'Company information has been deleted successfully!!!',
        'alert-type'=>'success'
      );
      $companies=Company::get();
      return view('backend.superadmin.pages.company.companies', compact('companies'))->with($notification);
    }
}
