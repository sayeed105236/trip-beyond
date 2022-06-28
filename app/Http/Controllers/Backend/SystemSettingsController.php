<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\SystemSettings;
use App\Exceptions\GeneralException;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
class SystemSettingsController extends Controller
{
    public function index()
    {
      $settings= SystemSettings::first();
    //  dd($settings);
      return view('backend.superadmin.pages.settings.systemSettings',compact('settings'));
    }
    public Function UpdateSettings(Request $request)
    {
      if($request->file('file1')!= null)
      {
        $filename1=null;
        $uploadedFile1 = $request->file('file1');
        $oldfilename1 = $settings['frontend_logo'] ?? 'demo.jpg';

        $oldfileexists1 = Storage::disk('public')->exists('settings/' . $oldfilename1);

        if ($uploadedFile1 !== null) {

            if ($oldfileexists1 && $oldfilename1 != $uploadedFile1) {
                //Delete old file
                Storage::disk('public')->delete('settings/' . $oldfilename1);
            }
            $filename_modified1 = str_replace(' ', '_', $uploadedFile1->getClientOriginalName());
            $filename1 = time() . '_' . $filename_modified1;

            Storage::disk('public')->putFileAs(
                'settings/',
                $uploadedFile1,
                $filename1
            );

            $data['frontend_logo'] = $filename1;
        } elseif (empty($oldfileexists1)) {
            throw new GeneralException('Image not found!');
            //return redirect()->back()->with(['flash_danger' => 'User image not found!']);
            //file check in storage

        }
      }
      if($request->file('file2')!= null)
      {
        $filename2=null;
        $uploadedFile2 = $request->file('file2');
        $oldfilename2 = $settings['backend_logo'] ?? 'demo.jpg';

        $oldfileexists2 = Storage::disk('public')->exists('settings/' . $oldfilename2);

        if ($uploadedFile2 !== null) {

            if ($oldfileexists2 && $oldfilename2 != $uploadedFile2) {
                //Delete old file
                Storage::disk('public')->delete('settings/' . $oldfilename2);
            }
            $filename_modified2 = str_replace(' ', '_', $uploadedFile2->getClientOriginalName());
            $filename2 = time() . '_' . $filename_modified2;

            Storage::disk('public')->putFileAs(
                'settings/',
                $uploadedFile2,
                $filename2
            );

            $data['backend_logo'] = $filename2;
        } elseif (empty($oldfileexists2)) {
            throw new GeneralException('Image not found!');
            //return redirect()->back()->with(['flash_danger' => 'User image not found!']);
            //file check in storage

        }
      }
        if($request->file('file3')!= null)
        {
          $filename3=null;
          $uploadedFile3 = $request->file('file3');
          $oldfilename3 = $settings['alt_logo'] ?? 'demo.jpg';

          $oldfileexists3 = Storage::disk('public')->exists('settings/' . $oldfilename3);

          if ($uploadedFile3 !== null) {

              if ($oldfileexists3 && $oldfilename3 != $uploadedFile3) {
                  //Delete old file
                  Storage::disk('public')->delete('settings/' . $oldfilename3);
              }
              $filename_modified3 = str_replace(' ', '_', $uploadedFile3->getClientOriginalName());
              $filename3 = time() . '_' . $filename_modified3;

              Storage::disk('public')->putFileAs(
                  'settings/',
                  $uploadedFile3,
                  $filename3
              );

              $data['alt_logo'] = $filename3;
          } elseif (empty($oldfileexists3)) {
              throw new GeneralException('Image not found!');
              //return redirect()->back()->with(['flash_danger' => 'User image not found!']);
              //file check in storage

          }
        }

        if($request->file('file4')!= null)
        {
          $filename4=null;
          $uploadedFile4 = $request->file('file4');
          $oldfilename4 = $settings['favicon'] ?? 'demo.jpg';

          $oldfileexists4 = Storage::disk('public')->exists('settings/' . $oldfilename4);

          if ($uploadedFile4 !== null) {

              if ($oldfileexists4 && $oldfilename4 != $uploadedFile4) {
                  //Delete old file
                  Storage::disk('public')->delete('settings/' . $oldfilename4);
              }
              $filename_modified4 = str_replace(' ', '_', $uploadedFile4->getClientOriginalName());
              $filename4 = time() . '_' . $filename_modified4;

              Storage::disk('public')->putFileAs(
                  'settings/',
                  $uploadedFile4,
                  $filename4
              );

              $data['favicon'] = $filename4;
          } elseif (empty($oldfileexists4)) {
              throw new GeneralException('Image not found!');
              //return redirect()->back()->with(['flash_danger' => 'User image not found!']);
              //file check in storage

          }
            if($request->file('file5')!= null)
            {
              $filename5=null;
              $uploadedFile5 = $request->file('file5');
              $oldfilename5 = $settings['banner'] ?? 'demo.jpg';

              $oldfileexists5 = Storage::disk('public')->exists('settings/' . $oldfilename5);

              if ($uploadedFile5 !== null) {

                  if ($oldfileexists5 && $oldfilename5 != $uploadedFile5) {
                      //Delete old file
                      Storage::disk('public')->delete('settings/' . $oldfilename5);
                  }
                  $filename_modified5 = str_replace(' ', '_', $uploadedFile5->getClientOriginalName());
                  $filename5 = time() . '_' . $filename_modified5;

                  Storage::disk('public')->putFileAs(
                      'settings/',
                      $uploadedFile5,
                      $filename5
                  );

                  $data['banner'] = $filename5;
              } elseif (empty($oldfileexists5)) {
                  throw new GeneralException('Image not found!');
                  //return redirect()->back()->with(['flash_danger' => 'User image not found!']);
                  //file check in storage

              }


            }

            }



      $settings= SystemSettings::find($request->id);
      $settings->website_title= $request->website_title;
      $settings->slogan= $request->slogan;
      $settings->google_analytics=$request->google_analytics;
      $settings->facebook_pixel=$request->facebook_pixel;
      $settings->google_map=$request->google_map;
      $settings->meta_author=$request->meta_author;
      $settings->meta_description=$request->meta_description;
      $settings->meta_keywords=$request->meta_keywords;
      $settings->footer_copyright=$request->footer_copyright;
      $settings->facebook_url=$request->facebook_url;
      $settings->youtube_url=$request->youtube_url;
      $settings->instagram_url=$request->instagram_url;
      $settings->mobile=$request->mobile;
      $settings->linkedin_url=$request->linkedin_url;
      $settings->twitter_url=$request->twitter_url;
      $settings->contact_email=$request->contact_email;
      if ($request->file('file1')!= null) {
        $settings->frontend_logo= $filename1;
      }
      if ($request->file('file2')!= null) {
          $settings->backend_logo= $filename2;
      }
      if ($request->file('file3')!= null) {
        $settings->alt_logo= $filename3;
      }
      if ($request->file('file4')!= null) {
          $settings->favicon= $filename4;
      }
      if ($request->file('file4')!= null) {
        $settings->banner= $filename5;
      }

      $settings->save();
    //   $notification=array(
    //     'message'=>'System Settings has been Updated Successfully!!! !!!',
    //     'alert-type'=>'success'
    // );
    Alert::success('Success', 'System Settings has been Updated Successfully!!!');
    return Redirect()->back();


    }
}
