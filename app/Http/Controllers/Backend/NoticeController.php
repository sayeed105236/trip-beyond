<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Notice;
use DB;

class NoticeController extends Controller
{
    function viewNotices()
    {
        $data=DB::table('notices')->get();
        return view('backend.superadmin.pages.notices.notices',['notices'=>$data]);
    }
    function store(Request $req)
    {
        $title=$req->input('title');
        $notice=$req->input('notice');

        $result=DB::table('notices')->insert([
            'title'=>$title,
            'notice'=>$notice,
        ]);

        if($result==true)
        {
            return Redirect()->route('notices');
        }
    }

    public function viewEditNotice($id)
    {
        $notice=Notice::where('id', $id)->first();
        return view('backend.superadmin.pages.notices.edit-notice', compact('notice'));
    }

    public function editNotice(Request $request)
    {
       $notice= Notice::find($request->id);
       $notice->title= $request->title;
       $notice->notice= $request->notice;
       $notice->save();
       $data=DB::table('notices')->get();
       return view('backend.superadmin.pages.notices.notices',['notices'=>$data]);
    }

    public function deleteNotice($id)
    {
        $notice = Notice::find($id);
        $notice->delete();
        $data=DB::table('notices')->get();
        return view('backend.superadmin.pages.notices.notices',['notices'=>$data]);
    }
}
