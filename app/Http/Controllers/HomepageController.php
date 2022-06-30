<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Backend\Notice;
use App\Models\Backend\FeaturedContent;
use App\Models\Backend\AboutContent;
use App\Models\Backend\AboutService;
use App\Models\Backend\Term;
use DB;

class HomepageController extends Controller
{
    public function index()
    {
        $notice_data=Notice::orderBy('id','desc')->first();
        $feature_data=FeaturedContent::get();
        //dd($feature_data);
        return view('welcome', compact('notice_data', 'feature_data'));
    }
    public function hotels()
    {
        return view('hotels');
    }
    public function packages()
    {
        return view('packages');
    }
    function viewNotices()
    {
        $data=DB::table('notices')->get();
        return view('notices',['notices'=>$data]);
    }
    public function about()
    {
        $data=AboutContent::first();
        $services=AboutService::where('is_service', '=', '1')->get();
        $count_services = count($services);
        $whys=AboutService::where('is_service', '=', '0')->get();
        return view('about', compact('data', 'services', 'whys', 'count_services'));
    }
    public function terms()
    {
      $terms=Term::get();
      $count_terms = count($terms);
      return view('terms-and-conditions', compact('terms', 'count_terms'));
    }
}
