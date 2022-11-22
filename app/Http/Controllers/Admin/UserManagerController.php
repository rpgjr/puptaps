<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\UsersImport;
use App\Models\AlumniList;
use Illuminate\Http\Request;
use Excel;

class UserManagerController extends Controller
{
    public function getAlumniManager(Request $request) {
        $data['q'] = $request->get('q');
        $data['alumni'] = AlumniList::where('last_name', 'like', '%' . $data['q'] . '%')->paginate(15)->withQueryString();
        $title = "Alumni Manager";
        return view('admin.user_management.user_manager',$data , compact(['title']));
    }

    public function addAlumniList(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xlsx,csv',
        ]);

        Excel::import(new UsersImport, $request->file('excel_file'));
        return redirect()->back();
    }

    // public function deleteAlumniList($studNumber) {
    //     $alumni = AlumniList::where('studnumber', '=', $studnumber);
    //     $alumni->delete();

    //     return redirect(route('admin.alumniList'));
    // }
}
