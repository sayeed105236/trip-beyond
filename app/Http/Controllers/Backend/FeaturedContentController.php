<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\FeaturedContent;
use DB;

class FeaturedContentController extends Controller
{
    function viewFeatures()
    {
        $data=DB::table('featured_contents')->get();
        return view('backend.superadmin.pages.feature.feature',['features'=>$data]);
    }
    function store(Request $req)
    {
        $title=$req->input('title');
        $content=$req->input('content');

        $result=DB::table('featured_contents')->insert([
            'title'=>$title,
            'content'=>$content,
        ]);

        if($result==true)
        {
            return Redirect()->route('features');
        }
    }
    public function viewEditFeature($id)
    {
        $feature=FeaturedContent::where('id', $id)->first();
        return view('backend.superadmin.pages.feature.edit-feature', compact('feature'));
    }

    public function editFeature(Request $request)
    {
       $feature= FeaturedContent::find($request->id);
       $feature->title= $request->title;
       $feature->content= $request->content;
       $feature->save();
       $data=DB::table('featured_contents')->get();
       return view('backend.superadmin.pages.feature.feature',['features'=>$data]);
    }

    public function deleteFeature($id)
    {
        $feature = FeaturedContent::find($id);
        $feature->delete();
        $data=DB::table('featured_contents')->get();
        return view('backend.superadmin.pages.feature.feature',['features'=>$data]);
    }
}
