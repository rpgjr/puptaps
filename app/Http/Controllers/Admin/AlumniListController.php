<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\UsersImport;
use App\Models\AlumniList;
use Illuminate\Http\Request;
use Excel;

class AlumniListController extends Controller
{
    public function alumniListIndex(Request $request) {
        $data['q'] = $request->get('q');
        $data['alumni'] = AlumniList::where('lastname', 'like', '%' . $data['q'] . '%')->paginate(15)->withQueryString();
        return view('admin.user_management.alumni_list', $data);
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
