<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Country;
use DB;

class CountryController extends Controller
{
  function viewCountries()
  {
      $data=DB::table('countries')->get();
      return view('backend.superadmin.pages.company.countries.countries',['countries'=>$data]);
  }
  function store(Request $req)
  {
      $country=$req->input('country');
      $phone_code=$req->input('phone_code');
      $currency=$req->input('currency');

      $result=DB::table('countries')->insert([
          'country'=>$country,
          'phone_code'=>$phone_code,
          'currency'=>$currency,
      ]);

      if($result==true)
      {
          return Redirect()->route('countries');
      }
  }
  public function viewEditCountry($id)
  {
      $country=Country::where('id', $id)->first();
      return view('backend.superadmin.pages.company.countries.edit-countries', compact('country'));
  }

  public function editCountry(Request $request)
  {
     $country= Country::find($request->id);
     $country->country= $request->country;
     $country->phone_code= $request->phone_code;
     $country->currency= $request->currency;
     $country->save();
     $data=DB::table('countries')->get();
     return view('backend.superadmin.pages.company.countries.countries',['countries'=>$data]);
  }

  public function deleteCountry($id)
  {
      $country = Country::find($id);
      $country->delete();
      $data=DB::table('countries')->get();
      return view('backend.superadmin.pages.company.countries.countries',['countries'=>$data]);
  }
}
