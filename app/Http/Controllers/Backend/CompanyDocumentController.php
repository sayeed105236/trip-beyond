<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\CompanyDocument;
use DB;

class CompanyDocumentController extends Controller
{
  function viewDocuments()
  {
      $data=DB::table('company_documents')->get();
      return view('backend.superadmin.pages.company.documents.company-documents',['documents'=>$data]);
  }
  function store(Request $req)
  {
      $company=$req->input('company');
      $type=$req->input('type');
      $document =$request->file('document');
      $filename=null;
      if ($document) {
          $filename = time() . $document->getClientOriginalName();

          Storage::disk('public')->putFileAs(
              'company-logos/',
              $logo,
              $filename
          );

      }
      $req->document= $filename;

      $result=DB::table('company_documents')->insert([
          'company'=>$company,
          'type'=>$type,
          'document'=>$document,
      ]);

      if($result==true)
      {
          return Redirect()->route('company-documents');
      }
  }
  public function viewEditDocument($id)
  {
      $document=CompanyDocument::where('id', $id)->first();
      return view('backend.superadmin.pages.company.documents.edit-company-documents', compact('document'));
  }

  // public function editDocument(Request $request)
  // {
  //    $document= CompanyDocument::find($request->id);
  //    $document->company= $request->company;
  //    $document->type= $request->type;
  //    $document->description= $request->description;
  //    $document->save();
  //    $data=DB::table('company_types')->get();
  //    return view('backend.superadmin.pages.company.type.company-types',['types'=>$data]);
  // }

  public function deleteDocument($id)
  {
      $document = CompanyDocument::find($id);
      $document->delete();
      $data=DB::table('company_documents')->get();
      return view('backend.superadmin.pages.company.documents.company-documents',['documents'=>$data]);
  }
}
