<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Company;
use App\Models\Backend\CompanyType;
use App\Models\Backend\Country;
use App\Models\Backend\CompanyDocument;
use App\Models\Backend\CompanyDocumentType;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Exceptions\GeneralException;
use DB;


class ManagerController extends Controller
{
  public function companyDetails($id)
  {
    $company=Company::where('manager', $id)->first();
    $user=User::where('id', $id)->first();
    $types=CompanyType::get();
    $documents=CompanyDocument::where('company', $company->id)->get();
    $doctypes=CompanyDocumentType::get();
    // $documents=CompanyDocument::where('id', $id)->get();
    return view('backend.business.pages.company.company-details', compact('company','user','documents','types','doctypes'));
  }

  public function newDocument(Request $request)
  {
    $req=new CompanyDocument();
    $req->company=$request->company;
    $req->type=$request->type;
    $document =$request->file('document');
    $filename=null;
    if ($document) {
        $filename = time() . $document->getClientOriginalName();

        Storage::disk('public')->putFileAs(
            'company-documents/',
            $document,
            $filename
        );

    }
    $req->document= $filename;
    $req->is_verified=$request->is_verified;

    $req->save();
    return back();
  }
}
