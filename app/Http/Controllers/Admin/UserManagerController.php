<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\UsersImport;
use App\Models\Alumni;
use App\Models\AlumniList;
use App\Models\Courses;
use App\Models\Forms\Eif\EifAnswers;
use App\Models\Forms\Pds\PdsAnswers;
use App\Models\Forms\Sas\SasAnswers;
use App\Models\User;
use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Rels;

class UserManagerController extends Controller
{
    public function getAlumniList(Request $request) {
        $data['batch'] = $request->get('batch');

        if($data['batch'] == null) {
            $data['alumni'] = AlumniList::orderBy('last_name', 'asc')->paginate(15)->withQueryString();
        }
        else {
            $data['alumni'] = AlumniList::where('batch', "=", $data['batch'])->paginate(15)->withQueryString();
        }
        $title = "List of Alumni";

        return view('admin.user_management.upload_list', compact(['title']), $data);
    }

    public function getAlumniManager(Request $request) {
        $data['q'] = $request->get('q');
        $data['alumni'] = Alumni::where('last_name', 'like', '%' . $data['q'] . '%')->paginate(15)->withQueryString();
        $courses = Courses::all();
        $title = "Alumni Manager";
        $PDS = PdsAnswers::all();
        $EIF = EifAnswers::all();
        $SAS = SasAnswers::all();
        return view('admin.user_management.alumni_manager', $data, compact(['title', 'courses', 'PDS', 'EIF', 'SAS']));
    }

    public function addAlumniList(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xlsx,csv',
        ]);

        try {
            Excel::import(new UsersImport, $request->file('excel_file'));
        } catch (\Throwable $th) {
            return back()->with(
                'failed',
                'An Error Occured. Check for duplications.'
            );

        }
        return back()->with(
            'success',
            'List Added.'
        );
    }

    public function removeAlumniAccount(Request $request) {

        $findUser = User::where('alumni_id', '=', $request->alumni_id)->value('user_id');
        $user = User::find($findUser);
        $user->delete();
        return back()->with('success', 'Alumni Account Successfully Deleted.');
    }

    public function downloadListTemplate() {
        return response()->download(public_path("files/list_template.xlsx"));
    }
}
