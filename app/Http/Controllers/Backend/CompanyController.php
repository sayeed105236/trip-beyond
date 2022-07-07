<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Company;
use App\Models\Backend\CompanyType;
use App\Models\Backend\Country;
use App\Models\Backend\CompanyDocument;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Exceptions\GeneralException;
use DB;

class CompanyController extends Controller
{
    public function index()
    {
      $companies=Company::get();
      $status='All';
      return view('backend.superadmin.pages.company.companies', compact('companies','status'));
    }

    public function indexActive()
    {
      $companies=Company::where('status', '=', 'Active')->get();
      $status="Active";
      return view('backend.superadmin.pages.company.companies', compact('companies','status'));
    }

    public function indexInactive()
    {
      $companies=Company::where('status', '=', 'Inactive')->get();
      $status="Inactive";
      return view('backend.superadmin.pages.company.companies', compact('companies','status'));
    }

    public function indexPending()
    {
      $companies=Company::where('status', '=', 'Pending')->get();
      $status="Pending";
      return view('backend.superadmin.pages.company.pending-companies', compact('companies','status'));
    }

    public function newCompany()
    {
      $users=User::get();
      $countries=Country::get();
      $types=CompanyType::get();
      return view('backend.superadmin.pages.company.new-company', compact('users','countries','types'));
    }

    public function storeCompany(Request $request)
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
      $notification=array(
        'message'=>'New company has been added successfully!!!',
        'alert-type'=>'success'
      );
      $companies=Company::get();
      $status="All";
      return redirect('/admin/companies')->with(compact('companies','status'))->with($notification);
    }

    public function companyDetails($id, $id1, $id2)
    {
      $company=Company::where('id', $id)->first();
      $user=User::where('id', $id1)->first();
      $type=CompanyType::where('id', $id2)->first();
      return view('backend.superadmin.pages.company.company-details', compact('company','user','type'));
    }

    public function editCompany($id)
    {
      $company=Company::where('id', $id)->first();
      return view('backend.superadmin.pages.company.edit-company', compact('company'));
    }
    // public function updateCompany(Request $request)
    // {
    //   $req= Company::find($request->id);
    //   if($request->file('file1')!=null)
    //   {
    //     $filename=null;
    //     $uploadedFile = $request->file('file1');
    //     $oldfilename = $req['logo'] ?? 'demo.jpg';
    //     $oldfileexists = Storage::disk('public')->exists('company-logos/' . $oldfilename);
    //     if ($uploadedFile !== null)
    //     {
    //       if ($oldfileexists && $oldfilename != $uploadedFile)
    //       {
    //         //Delete old file
    //         Storage::disk('public')->delete('company-logos/' . $oldfilename);
    //       }
    //       $filename_modified = str_replace(' ', '_', $uploadedFile->getClientOriginalName());
    //       $filename = time() . '_' . $filename_modified;
    //       Storage::disk('public')->putFileAs(
    //           'company-logos/',
    //           $uploadedFile,
    //           $filename
    //         );
    //         $req['logo'] = $filename;
    //       }
    //       elseif (empty($oldfileexists))
    //       {
    //         throw new GeneralException('Image not found!');
    //         //return redirect()->back()->with(['flash_danger' => 'User image not found!']);
    //         //file check in storage
    //       }
    //     }
    //   }
    //   if ($request->file('file1')!= null) {
    //     $req->logo= $filename;
    //   }
    //   $req->user= $request->user;
    //   $req->title= $request->title;
    //   $req->description= $request->description;
    //   $req->username= $request->username;
    //   $req->commission= $request->commission;
    //   $req->mobile= $request->mobile;
    //   $req->email= $request->email;
    //   $req->address= $request->address;
    //   $req->zip= $request->zip;
    //   $req->country= $request->country;
    //   $req->is_active= $request->is_active;
    //   $req->status= $request->status;
    //   $req->save();
    //   $notification=array(
    //     'message'=>'Company information has been updated successfully!!!',
    //     'alert-type'=>'success'
    //   );
    //   $companies=Company::get();
    //   return view('backend.superadmin.pages.company.companies', compact('companies'))->with($notification);
    // }
    public function deleteCompany($id)
    {
      $req = Company::find($id);
      $req->delete();
      $notification=array(
        'message'=>'Company information has been deleted successfully!!!',
        'alert-type'=>'success'
      );
      $companies=Company::get();
      $status="All";
      return redirect('/admin/companies')->with(compact('companies','status'))->with($notification);
    }
}
