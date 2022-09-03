<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\CompanyDocumentType;
use DB;

class CompanyDocumentTypeController extends Controller
{
  function viewTypes()
  {
      $data=DB::table('company_document_types')->get();
      return view('backend.superadmin.pages.company.document-type.document-types',['types'=>$data]);
  }
  function store(Request $req)
  {
      $type=$req->input('type');
      $detail=$req->input('detail');

      $result=DB::table('company_document_types')->insert([
          'type'=>$type,
          'detail'=>$detail,
      ]);

      if($result==true)
      {
          return Redirect()->route('company-document-types');
      }
  }
  public function viewEditType($id)
  {
      $type=CompanyDocumentType::where('id', $id)->first();
      return view('backend.superadmin.pages.company.document-type.edit-document-types', compact('type'));
  }

  public function editType(Request $request)
  {
     $type= CompanyDocumentType::find($request->id);
     $type->type= $request->type;
     $type->detail= $request->detail;
     $type->save();
     $data=DB::table('company_document_types')->get();
     return view('backend.superadmin.pages.company.document-type.document-types',['types'=>$data]);
  }

  public function deleteType($id)
  {
      $type = CompanyDocumentType::find($id);
      $type->delete();
      $data=DB::table('company_document_types')->get();
      return view('backend.superadmin.pages.company.document-type.document-types',['types'=>$data]);
  }
}
