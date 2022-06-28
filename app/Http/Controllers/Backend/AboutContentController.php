<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\AboutContent;
use Illuminate\Support\Facades\Storage;
use App\Exceptions\GeneralException;
use DB;


class AboutContentController extends Controller
{
    public function Index()
    {
        $data=AboutContent::first();
        return view('backend.superadmin.pages.about.edit-about', compact('data'));
    }
    public function Update(Request $request)
    {
      $content= AboutContent::find($request->id);
      
      if($request->file('file1')!=null)
      {
        $filename=null;
      $uploadedFile = $request->file('file1');
      $oldfilename = $content['image'] ?? 'demo.jpg';

      $oldfileexists = Storage::disk('public')->exists('banner/' . $oldfilename);

      if ($uploadedFile !== null) {

          if ($oldfileexists && $oldfilename != $uploadedFile) {
              //Delete old file
              Storage::disk('public')->delete('banner/' . $oldfilename);
          }
          $filename_modified = str_replace(' ', '_', $uploadedFile->getClientOriginalName());
          $filename = time() . '_' . $filename_modified;

          Storage::disk('public')->putFileAs(
              'banner/',
              $uploadedFile,
              $filename
          );

          $data['image'] = $filename;
      } elseif (empty($oldfileexists)) {
          throw new GeneralException('Image not found!');
          //return redirect()->back()->with(['flash_danger' => 'User image not found!']);
          //file check in storage

      }
      $content->image= $filename;
      }
      $content->story= $request->story;
      $content->mission= $request->mission;
      $content->values=$request->values;

        $content->save();
        $notification=array(
            'message'=>'Course record has been updated successfully!!!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);

    }
}
