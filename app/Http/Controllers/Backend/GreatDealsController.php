<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Deals;
use Alert;
use Illuminate\Support\Facades\Storage;

class GreatDealsController extends Controller
{
    public function index()
    {
      $deals= Deals::all();
      return view('backend.superadmin.pages.great_deals.index',compact('deals'));
    }
    public function store(Request $request)
    {
    //   $validated = $request->validate([
    //     'title' => 'required|unique:deals|max:255',
    //     'description' => 'required',
    //       'image' => 'required',
    //         'button_title' => 'required',
    // ]);

      $deals= new Deals();
      $deals->title= $request->title;
      $deals->description=$request->description;
      $deals->button_title= $request->button_title;
      $deals->button_link= $request->button_link;

      $image =$request->file('file');
      $filename=null;
      if ($image) {
          $filename = time() . $image->getClientOriginalName();

          Storage::disk('public')->putFileAs(
              'deals/',
              $image,
              $filename
          );

      }
        $deals->image= $filename;
        $deals->status= $request->status;
        $deals->save();
        Alert::success('Success', 'Deals has been Added Successfully!!!');
        return Redirect()->back();
    }

    public function update(Request $request)
    {
      $deals= Deals::find($request->id);
      $deals->title= $request->title;
      $deals->description=$request->description;
      $deals->button_title= $request->button_title;
      $deals->button_link= $request->button_link;
      if ($request->file('file2') != null) {
        $filename=null;
        $uploadedFile = $request->file('file2');
        $oldfilename = $deals['image'] ?? 'demo.jpg';

        $oldfileexists = Storage::disk('public')->exists('deals/' . $oldfilename);

        if ($uploadedFile !== null) {

            if ($oldfileexists && $oldfilename != $uploadedFile) {
                //Delete old file
                Storage::disk('public')->delete('deals/' . $oldfilename);
            }
            $filename_modified = str_replace(' ', '_', $uploadedFile->getClientOriginalName());
            $filename = time() . '_' . $filename_modified;

            Storage::disk('public')->putFileAs(
                'deals/',
                $uploadedFile,
                $filename
            );

            $data['image'] = $filename;
        } elseif (empty($oldfileexists)) {
            throw new GeneralException('Image not found!');
            //return redirect()->back()->with(['flash_danger' => 'User image not found!']);
            //file check in storage

        }
      }
        if ($request->file('file2') != null)
        {
            $deals->image= $filename;
        }
      $deals->status= $request->status;
      $deals->save();
      Alert::success('Success', 'Deals has been Updated Successfully!!!');
      return Redirect()->back();

    }
    public function delete($id)
    {
      $deals = Deals::find($id);

      $deals->delete();
      Alert::error('Success', 'Deals has been Deleted Successfully!!!');
      return Redirect()->back();

    }
}
