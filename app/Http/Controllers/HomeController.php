<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Backend\Notice;
use App\Models\Backend\FeaturedContent;
use App\Models\Backend\Company;
use App\Models\User;
use App\Models\Backend\CompanyType;
use App\Models\Backend\Country;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $notice_data=Notice::orderBy('id','desc')->first();
      $feature_data=FeaturedContent::get();
      $countries=Country::get();
      $types=CompanyType::get();
      return view('home', compact('notice_data', 'feature_data', 'countries', 'types'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function superAdminHome()
    {
        return view('backend.superadmin.pages.index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome()
    {
      // $company=Company::where('manager', Auth::id())->first();
      return view('backend.business.pages.index');
    }
}
