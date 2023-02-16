<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Carbon\Carbon;

class NewsController extends Controller
{
    public function getNewsSettings() {
        $news = News::orderby('news_id', 'desc')->get();
        return view("super_admin.news_events.news", compact(["news"]));
    }

    public function postNews(Request $request) {
        $request->validate([
            'news_image'    => 'required|mimes:jpg,jpeg,png',
            'news_title'    => 'required',
            'news_text'     => 'required',
        ]);

        $news = new News();

        if($request->hasFile('news_image')) {

            $file       = $request->file('news_image');
            $extension  = $file->getClientOriginalExtension();
            date_default_timezone_set('Asia/Manila');
            $fileName   = date('m_d_Y [H-i-s]') . '.' . $extension;
            $file->move("Uploads/NewsAnnouncements/", $fileName);

            $news->news_image = $fileName;
        }
        $news->news_title   = $request->input("news_title");
        $news->news_text    = $request->input("news_text");
        $news->created_at = Carbon::now()->toDateTimeString();

        $news->save();

        if($news->save()) {
            return back()->with('success', 'News successfully posted.');
        }
        else {
            return back()
                   ->with(
                        'fail',
                        'There is an Error Occured'
                    );
        }
    }

    public function deleteNews(Request $request) {
        $new = News::where('news_id', '=', $request->news_id)->first();
        $new->delete();

        $news = News::orderby('news_id', 'desc')->get();

        return back()->with('success', 'News successfully deleted.');
    }
}
