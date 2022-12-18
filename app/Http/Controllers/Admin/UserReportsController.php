<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Courses;
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

class UserReportsController extends Controller
{
    public function generateUserReport(Request $request) {
        $request->validate(
            [
            "type"      => "required",
            "batch"     => "required",
            "sort_by"   => "required",
            ],

            [
                "*.required" => "This is required.",
            ]
        );

        $title = "User Generated Reports";
        $type = $request->type;
        $batch = $request->batch;
        $sort_by = $request->sort_by;
        $courses = Courses::all();
        $genders = collect(["Male", "Female"]);

        if($type == 1) {
            $list = Alumni::where("batch", "=", $batch)->get();
            $listOfStudents = $list->sortBy($sort_by);
        }

        return view("admin.reports.user-report", compact(["genders", "title", 'courses', "type", "batch", "sort_by", "listOfStudents"]));
    }

    public function USER_REPORT_PDF(Request $request) {
        $pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetTitle('USER REPORT');

        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP + 15, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER );

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        // ---------------------------------------------------------

        $type = $request->type;
        $batch = $request->batch;
        $sort_by = $request->sort_by;

        if($sort_by == "course_id") {
            $this->List_Course($request);
            // $courses = Courses::all();
            // $list = Alumni::where("batch", "=", $batch)->get();
            // $listOfStudents = $list->sortBy($sort_by);

            // foreach($courses as $course) {
            //     if ($listOfStudents->contains('course_id', $course->course_id)) {
            //         $pdf->AddPage();

            //         $pdf->SetFont('helvetica', 'B', 15);
            //         $pdf->Write(0, $course->course_Desc, '', 0, 'C', true, 0, false, false, 0);
            //         $pdf->Ln(2);
            //         $pdf->SetFont('helvetica', 'B', 12);
            //         $pdf->Write(0, 'List of Alumni from Batch ' . $batch, '', 0, 'C', true, 0, false, false, 0);

            //         $pdf->SetFont('helvetica', '', 11);

            //         $pdf->Ln(10);
            //         $table = '<style>
            //             table, th, td {
            //                     border: 1px solid black;
            //                     border-collapse: collapse;
            //                     padding-top: 8px;
            //                     padding-bottom: 8px;
            //                     text-align: center;
            //             }
            //             .table-data {
            //                 padding-right: 10px;
            //             }
            //             .table-head {

            //                 font-weight: bold;
            //                 padding: 20px;
            //             }
            //             .tr-th {
            //                 padding: 10px;
            //                 background-color: #5D6D7E;
            //                 color: #ffffff;
            //             }
            //         </style>
            //         <table>
            //             <thead>
            //                 <tr class="tr-th">
            //                     <th style="width: 25%; height: 30%;" class="table-head"><span>Full Name</span></th>
            //                     <th style="width: 18%; height: 30%;" class="table-head">Email</th>
            //                     <th style="width: 17%; height: 30%;" class="table-head">Number</th>
            //                     <th style="width: 15%; height: 30%;" class="table-head">Date of Birth</th>
            //                     <th style="width: 25%; height: 30%;" class="table-head">Address</th>
            //                 </tr>
            //             </thead>
            //             <tbody>';

            //         foreach($listOfStudents as $student) {
            //             if ($student->course_id == $course->course_id) {
            //                 $table .= '<tr>
            //                                 <td style="width: 25%;" class="table-data">'
            //                                     . $student->last_name . ', ' . $student->first_name . ' ' . $student->suffix . ' ' . $student->middle_name .
            //                                 '</td>
            //                                 <td style="width: 18%;" class="table-data">' . $student->email . '</td>
            //                                 <td style="width: 17%;" class="table-data">' . $student->number . '</td>
            //                                 <td style="width: 15%;" class="table-data">' . date("F d, Y", strtotime($student->birthday)) . '</td>
            //                                 <td style="width: 25%;" class="table-data">' .  $student->city_address . '</td>
            //                             </tr>';
            //             }
            //         }

            //         $table .= '</tbody>
            //         </table>';

            //         $pdf->writeHTML($table, true, false, false, false, '');

            //     }
            // }

            // //Close and output PDF document
            // $pdf->Output('Batch_' . $batch . '_sortedBy_' . $sort_by . '_List.pdf', 'I');
        }
        elseif($sort_by == "gender") {
            $this->List_Gender($request);
        }
    }

    public function List_Course($request) {
        $pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetTitle('USER REPORT');

        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP + 15, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER );

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        // ---------------------------------------------------------

        $type = $request->type;
        $batch = $request->batch;
        $sort_by = $request->sort_by;

        $courses = Courses::all();
        $list = Alumni::where("batch", "=", $batch)->get();
        $listOfStudents = $list->sortBy($sort_by);

        foreach($courses as $course) {
            if ($listOfStudents->contains('course_id', $course->course_id)) {
                $pdf->AddPage();

                $pdf->SetFont('helvetica', 'B', 15);
                $pdf->Write(0, $course->course_Desc, '', 0, 'C', true, 0, false, false, 0);
                $pdf->Ln(2);
                $pdf->SetFont('helvetica', 'B', 12);
                $pdf->Write(0, 'List of Alumni from Batch ' . $batch, '', 0, 'C', true, 0, false, false, 0);

                $pdf->SetFont('helvetica', '', 11);

                $pdf->Ln(10);
                $table = '<style>
                    table, th, td {
                            border: 1px solid black;
                            border-collapse: collapse;
                            padding-top: 8px;
                            padding-bottom: 8px;
                            text-align: center;
                    }
                    .table-data {
                        padding-right: 10px;
                    }
                    .table-head {

                        font-weight: bold;
                        padding: 20px;
                    }
                    .tr-th {
                        padding: 10px;
                        background-color: #5D6D7E;
                        color: #ffffff;
                    }
                </style>
                <table>
                    <thead>
                        <tr class="tr-th">
                            <th style="width: 25%; height: 30%;" class="table-head"><span>Full Name</span></th>
                            <th style="width: 18%; height: 30%;" class="table-head">Email</th>
                            <th style="width: 17%; height: 30%;" class="table-head">Number</th>
                            <th style="width: 15%; height: 30%;" class="table-head">Date of Birth</th>
                            <th style="width: 25%; height: 30%;" class="table-head">Address</th>
                        </tr>
                    </thead>
                    <tbody>';

                foreach($listOfStudents as $student) {
                    if ($student->course_id == $course->course_id) {
                        $table .= '<tr>
                                        <td style="width: 25%;" class="table-data">'
                                            . $student->last_name . ', ' . $student->first_name . ' ' . $student->suffix . ' ' . $student->middle_name .
                                        '</td>
                                        <td style="width: 18%;" class="table-data">' . $student->email . '</td>
                                        <td style="width: 17%;" class="table-data">' . $student->number . '</td>
                                        <td style="width: 15%;" class="table-data">' . date("F d, Y", strtotime($student->birthday)) . '</td>
                                        <td style="width: 25%;" class="table-data">' .  $student->city_address . '</td>
                                    </tr>';
                    }
                }

                $table .= '</tbody>
                </table>';

                $pdf->writeHTML($table, true, false, false, false, '');
            }
        }

        //Close and output PDF document
        $pdf->Output('Batch_' . $batch . '_sortedBy_' . $sort_by . '_List.pdf', 'I');
    }

    public function List_Gender($request) {
        $pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetTitle('USER REPORT');

        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP + 15, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER );

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        // ---------------------------------------------------------

        $type = $request->type;
        $batch = $request->batch;
        $sort_by = $request->sort_by;

        $courses = Courses::all();
        $list = Alumni::where("batch", "=", $batch)->get();
        $listOfStudents = $list->sortBy($sort_by);

        foreach($courses as $course) {
            if ($listOfStudents->contains('course_id', $course->course_id)) {
                $pdf->AddPage();

                $pdf->SetFont('helvetica', 'B', 15);
                $pdf->Write(0, $course->course_Desc, '', 0, 'C', true, 0, false, false, 0);
                $pdf->Ln(2);
                $pdf->SetFont('helvetica', 'B', 12);
                $pdf->Write(0, 'List of Alumni from Batch ' . $batch, '', 0, 'C', true, 0, false, false, 0);

                $pdf->SetFont('helvetica', '', 11);

                $pdf->Ln(10);
                $table = '<style>
                    table, th, td {
                            border: 1px solid black;
                            border-collapse: collapse;
                            padding-top: 8px;
                            padding-bottom: 8px;
                            text-align: center;
                    }
                    .table-data {
                        padding-right: 10px;
                    }
                    .table-head {

                        font-weight: bold;
                        padding: 20px;
                    }
                    .tr-th {
                        padding: 10px;
                        background-color: #5D6D7E;
                        color: #ffffff;
                    }
                </style>
                <table>
                    <thead>
                        <tr class="tr-th">
                            <th style="width: 25%; height: 30%;" class="table-head"><span>Full Name</span></th>
                            <th style="width: 18%; height: 30%;" class="table-head">Email</th>
                            <th style="width: 17%; height: 30%;" class="table-head">Number</th>
                            <th style="width: 15%; height: 30%;" class="table-head">Date of Birth</th>
                            <th style="width: 25%; height: 30%;" class="table-head">Address</th>
                        </tr>
                    </thead>
                    <tbody>';

                foreach($listOfStudents as $student) {
                    if ($student->course_id == $course->course_id) {
                        $table .= '<tr>
                                        <td style="width: 25%;" class="table-data">'
                                            . $student->last_name . ', ' . $student->first_name . ' ' . $student->suffix . ' ' . $student->middle_name .
                                        '</td>
                                        <td style="width: 18%;" class="table-data">' . $student->email . '</td>
                                        <td style="width: 17%;" class="table-data">' . $student->number . '</td>
                                        <td style="width: 15%;" class="table-data">' . date("F d, Y", strtotime($student->birthday)) . '</td>
                                        <td style="width: 25%;" class="table-data">' .  $student->city_address . '</td>
                                    </tr>';
                    }
                }

                $table .= '</tbody>
                </table>';

                $pdf->writeHTML($table, true, false, false, false, '');
            }
        }

        //Close and output PDF document
        $pdf->Output('Batch_' . $batch . '_sortedBy_' . $sort_by . '_List.pdf', 'I');
    }
}
