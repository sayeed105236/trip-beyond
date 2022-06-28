<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\AboutService;
use Illuminate\Support\Facades\Storage;
use App\Exceptions\GeneralException;
use DB;

class AboutServiceController extends Controller
{   
    public function StoreOne(Request $request)
    {
      $req= new AboutService();
      $image =$request->file('image');
      $filename=null;
      if ($image) {
          $filename = time() . $image->getClientOriginalName();

          Storage::disk('public')->putFileAs(
              'about-services/',
              $image,
              $filename
          );

      }
      $req->image= $filename;
      $req->title= $request->title;
      $req->content= $request->content;
      $req->is_service=1;
      $req->save();
      $notification=array(
        'message'=>'About service has been added successfully!!!',
        'alert-type'=>'success'
      );
      return Redirect()->back()->with($notification);
    }


    public function StoreTwo(Request $request)
    {
      $req= new AboutService();
      $image =$request->file('image');
      $filename=null;
      if ($image) {
          $filename = time() . $image->getClientOriginalName();

          Storage::disk('public')->putFileAs(
              'about-services/',
              $image,
              $filename
          );

      }
      $req->image= $filename;
      $req->title= $request->title;
      $req->content= $request->content;
      $req->is_service=0;
      $req->save();
      $notification=array(
        'message'=>'About service has been added successfully!!!',
        'alert-type'=>'success'
      );
      return Redirect()->back()->with($notification);
    }


    public function viewService()
    {
        $services=AboutService::where('is_service', '=', '1')->get();
        return view('backend.superadmin.pages.about.view-services', compact('services'));
    }


    public function viewWhy()
    {
        $whys=AboutService::where('is_service', '=', '0')->get();
        return view('backend.superadmin.pages.about.view-whys', compact('whys'));
    }


    public function viewEditService($id)
    {
        $service=AboutService::where('id', $id)->first();
        return view('backend.superadmin.pages.about.edit-service-content', compact('service'));
    }


    public function viewEditWhy($id)
    {
        $why=AboutService::where('id', $id)->first();
        return view('backend.superadmin.pages.about.edit-why-content', compact('why'));
    }


    public function editService(Request $request)
    {
      if($request->file('file1')!=null)
      {
        $filename=null;
      $uploadedFile = $request->file('file1');
      $oldfilename = $service['image'] ?? 'demo.jpg';

      $oldfileexists = Storage::disk('public')->exists('about-services/' . $oldfilename);

      if ($uploadedFile !== null) {

          if ($oldfileexists && $oldfilename != $uploadedFile) {
              //Delete old file
              Storage::disk('public')->delete('about-services/' . $oldfilename);
          }
          $filename_modified = str_replace(' ', '_', $uploadedFile->getClientOriginalName());
          $filename = time() . '_' . $filename_modified;

          Storage::disk('public')->putFileAs(
              'about-services/',
              $uploadedFile,
              $filename
          );

          $service['image'] = $filename;
      } elseif (empty($oldfileexists)) {
          throw new GeneralException('Image not found!');
          //return redirect()->back()->with(['flash_danger' => 'User image not found!']);
          //file check in storage
      }
       
      }
       $service= AboutService::find($request->id);
      if($request->file('file1')!=null)
      {
        $service->image= $filename;
      }
      $service->title= $request->title;
      $service->content= $request->content;

        $service->save();
        // $notification=array(
        //     'message'=>'Course record has been updated successfully!!!',
        //     'alert-type'=>'success'
        // );
        // return Redirect()->back()->with($notification);
        $services=AboutService::where('is_service', '=', '1')->get();
        return view('backend.superadmin.pages.about.view-services', compact('services'));
    }


    public function editWhy(Request $request)
    {
        if($request->file('file1')!=null)
      {
        $filename=null;
      $uploadedFile = $request->file('file1');
      $oldfilename = $why['image'] ?? 'demo.jpg';

      $oldfileexists = Storage::disk('public')->exists('about-services/' . $oldfilename);

      if ($uploadedFile !== null) {

          if ($oldfileexists && $oldfilename != $uploadedFile) {
              //Delete old file
              Storage::disk('public')->delete('about-services/' . $oldfilename);
          }
          $filename_modified = str_replace(' ', '_', $uploadedFile->getClientOriginalName());
          $filename = time() . '_' . $filename_modified;

          Storage::disk('public')->putFileAs(
              'about-services/',
              $uploadedFile,
              $filename
          );

          $why['image'] = $filename;
      } elseif (empty($oldfileexists)) {
          throw new GeneralException('Image not found!');
          //return redirect()->back()->with(['flash_danger' => 'User image not found!']);
          //file check in storage
      }
       
      }
       $why= AboutService::find($request->id);
      if($request->file('file1')!=null)
      {
        $why->image= $filename;
      }
      $why->title= $request->title;
      $why->content= $request->content;

        $why->save();
        // $notification=array(
        //     'message'=>'Course record has been updated successfully!!!',
        //     'alert-type'=>'success'
        // );
        // return Redirect()->back()->with($notification);
        $whys=AboutService::where('is_service', '=', '0')->get();
        return view('backend.superadmin.pages.about.view-whys', compact('whys'));
    }


    public function deleteServiceContent($id)
    {
        $service = AboutService::find($id);
        $service->delete();
        $services=AboutService::where('is_service', '=', '1')->get();
        return view('backend.superadmin.pages.about.view-services', compact('services'));
    }


    public function deleteWhyContent($id)
    {
        $why = AboutService::find($id);
        $why->delete();
        $whys=AboutService::where('is_service', '=', '1')->get();
        return view('backend.superadmin.pages.about.view-whys', compact('whys'));
    }
}
