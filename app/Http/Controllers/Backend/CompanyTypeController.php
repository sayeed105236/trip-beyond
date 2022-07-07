<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\CompanyType;
use DB;

class CompanyTypeController extends Controller
{
  function viewTypes()
  {
      $data=DB::table('company_types')->get();
      return view('backend.superadmin.pages.company.type.company-types',['types'=>$data]);
  }
  function store(Request $req)
  {
      $type=$req->input('type');
      $description=$req->input('description');

      $result=DB::table('company_types')->insert([
          'type'=>$type,
          'description'=>$description,
      ]);

      if($result==true)
      {
          return Redirect()->route('company-types');
      }
  }
  public function viewEditType($id)
  {
      $type=CompanyType::where('id', $id)->first();
      return view('backend.superadmin.pages.company.type.edit-company-types', compact('type'));
  }

  public function editType(Request $request)
  {
     $type= CompanyType::find($request->id);
     $type->type= $request->type;
     $type->description= $request->description;
     $type->save();
     $data=DB::table('company_types')->get();
     return view('backend.superadmin.pages.company.type.company-types',['types'=>$data]);
  }

  public function deleteType($id)
  {
      $type = CompanyType::find($id);
      $type->delete();
      $data=DB::table('company_types')->get();
      return view('backend.superadmin.pages.company.type.company-types',['types'=>$data]);
  }
}
