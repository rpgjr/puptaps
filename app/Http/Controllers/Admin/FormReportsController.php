<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Courses;
use App\Models\Forms\Pds\PdsAnswers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use TCPDF;

class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        $image_file = public_path('/img/pupLogo.png');
        $this->Image($image_file, 15, 10, 20, '', 'PNG', '', 'C', false, 300, '', false, false, 0, false, false, false);
        // Title
        $this->Ln(3);
        $this->SetFont('times', '', 12);
        $this->Cell(95, 0,
                    'Republic of the Philippines',
                    0, 1, 'C', 0, '', 0, false, 'T', 'M');
        $this->SetFont('times', 'B', 15);
        $this->Cell(179, 0,
                    'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES',
                    0, 1, 'C', 0, '', 0, false, 'T', 'M');
        $this->SetFont('times', 'B', 12);
        $this->Cell(85, 0,
                    'TAGUIG BRANCH',
                    0, 1, 'C', 0, '', 0, false, 'T', 'M');
        $this->SetFont('times', '', 12);
        $this->Cell(185, 0,
                    'General Santos Avenue, Lower Bicutan, Taguig City, Metro Manila, Philippines',
                    0, 1, 'C', 0, '', 0, false, 'T', 'M');

        $style3 = array('width' => .5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));

        // Line
        $this->Line(10, 33, 200, 33, $style3);
    }

    // Page footer
    public function Footer() {
        // Position at 10 mm from bottom
        $this->SetY(-10);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $style3 = array('width' => .5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));

        // Line
        $this->Line(10, 288, 200, 288, $style3);
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}

class FormReportsController extends Controller
{
    public function generateFormReport(Request $request) {
        $request->validate(
            [
                "form"  => "required",
                "type"  => "required",
                "batch" => "required",
            ],

            [
                "*.required" => "This is required.",
            ]
        );

        $title = "Forms Generated Reports";
        $form = $request->form;
        $type = $request->type;
        $batch = $request->batch;
        $courses = Courses::all();
        $genders = collect(["Male", "Female"]);

        switch ($form) {
            case 1:
                switch ($type) {
                    case 4:
                        $PDSanswers = DB::table("form_pds_answers");
                        $list = Alumni::where("batch", "=", $batch)->get();
                        $listOfStudents = $list->sortBy("course_id");
                        $totalStudents = count($listOfStudents);

                        $alumniCourse = Alumni::select('course_id', DB::raw('count(alumni_id) as id'))->groupBy('course_id')->get();
                        $alumniPerCourses = $alumniCourse->mapWithKeys(function ($item, $key) {
                            return [$item ->course_id => $item->id];
                        });

                        $totalAgeofStudents = Alumni::select('age', DB::raw('count(alumni_id) as id'))->groupBy('age')->get();
                        $alumniPerAge = $totalAgeofStudents->mapWithKeys(function ($item, $key) {
                            return [$item ->age => $item->id];
                        });

                        $totalGenderofStudents = Alumni::select('gender', DB::raw('count(alumni_id) as id'))->groupBy('gender')->get();
                        $alumniPerGender = $totalGenderofStudents->mapWithKeys(function ($item, $key) {
                            return [$item ->gender => $item->id];
                        });

                        return view("admin.reports.form-report", compact(["listOfStudents", "totalStudents", "alumniPerCourses", "alumniPerAge", "alumniPerGender", "title", "courses", "form", "type", "batch"]));
                        break;
                    default:
                        return back();
                        break;
                }
                break;
            case 2:
                $list = Alumni::where("batch", "=", $batch)->get();
                $listOfStudents = $list->sortBy("course_id");
                return view("admin.reports.form-report", compact(["genders", "title", 'courses', "type", "batch", "listOfStudents"]));
                break;
            case 3:
                $list = Alumni::where("batch", "=", $batch)->get();
                $listOfStudents = $list->sortBy("gender");
                return view("admin.reports.form-report", compact(["genders", "title", 'courses', "type", "batch", "listOfStudents"]));
                break;

            default:
                echo"<alert>There is an error. Please try again.</alert>";
                break;
        }
    }
}
