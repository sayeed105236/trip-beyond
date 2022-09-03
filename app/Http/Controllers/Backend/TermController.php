<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Term;
use DB;

class TermController extends Controller
{
    public function index()
    {
      $data=DB::table('terms')->get();
      return view('backend.superadmin.pages.terms.terms',['terms'=>$data]);
    }

    public function storeTerm(Request $req)
    {
      $title=$req->input('title');
      $term=$req->input('term');

      $result=DB::table('terms')->insert([
          'title'=>$title,
          'term'=>$term,
      ]);

      if($result==true)
      {
          return Redirect()->route('term-index');
      }
    }

    public function viewEditTerm($id)
    {
      $term=Term::where('id', $id)->first();
      return view('backend.superadmin.pages.terms.edit-term', compact('term'));
    }

    public function editTerm(Request $request)
    {
      $term= Term::find($request->id);
      $term->title= $request->title;
      $term->term= $request->term;
      $term->save();
      $data=DB::table('terms')->get();
      return view('backend.superadmin.pages.terms.terms',['terms'=>$data]);
    }

    public function deleteTerm($id)
    {
      $term = Term::find($id);
      $term->delete();
      $data=DB::table('terms')->get();
      return view('backend.superadmin.pages.terms.terms',['terms'=>$data]);
    }
}
