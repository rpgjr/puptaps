<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Announcements;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AnnouncementController extends Controller
{
    public function getAnnouncementSettings() {
        $announcements = Announcements::orderby('announcement_id', 'desc')->get();
        return view("super_admin.news_events.announcement", compact(["announcements"]));
    }

    public function postAnnouncement(Request $request) {
        $request->validate([
            'announcement_image'    => 'required|mimes:jpg,jpeg,png',
            'announcement_title'    => 'required',
            'announcement_text'     => 'required',
        ]);

        $announcement = new Announcements();

        if($request->hasFile('announcement_image')) {

            $file       = $request->file('announcement_image');
            $extension  = $file->getClientOriginalExtension();
            date_default_timezone_set('Asia/Manila');
            $fileName   = date('m_d_Y [H-i-s]') . '.' . $extension;
            $file->move("Uploads/NewsAnnouncements/", $fileName);

            $announcement->announcement_image = $fileName;
        }
        $announcement->announcement_title = $request->input("announcement_title");
        $announcement->announcement_text = $request->input("announcement_text");
        $announcement->created_at = Carbon::now()->toDateTimeString();

        $announcement->save();

        if($announcement->save()) {
            return back()->with('success', 'Announcement successfully posted.');
        }
        else {
            return back()
                   ->with(
                        'fail',
                        'There is an Error Occured'
                    );
        }
    }

    public function deleteAnnouncement(Request $request) {
        $announcement = Announcements::where('announcement_id', '=', $request->announcement_id)->first();
        $announcement->delete();

        $announcements = Announcements::orderby('announcement_id', 'desc')->get();

        return back()->with('success', 'Announcement successfully deleted!');
    }
}
