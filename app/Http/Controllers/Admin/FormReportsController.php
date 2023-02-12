<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Courses;
use App\Models\Forms\Pds\PdsAnswers;
use Illuminate\Http\Request;
use TCPDF;
use DB;

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
            ],

            [
                "*.required" => "This is required.",
            ]
        );

        if ($request->form == 1) {
            if ($request->type == 1) {
                $this->PdfSummaryReport($request);
            }
        }
    }

    public function PdfSummaryReport($request) {
        if ($request->sex == null || empty($request->sex)) {
            $allAlumni = Alumni::where('course_id', 'like', '%' . $request->course_id . '%')
                ->whereBetween('batch', [$request->batch_from, $request->batch_to])
                ->orderBy('last_name', 'asc')
                ->get();

            $checkCount = Alumni::where('course_id', 'like', '%' . $request->course_id . '%')
                ->whereBetween('batch', [$request->batch_from, $request->batch_to])
                ->join('tbl_tracer_answers', 'tbl_alumni.alumni_id', '=', 'tbl_tracer_answers.alumni_id')
                ->select('tbl_alumni.alumni_id')
                ->get();
        }
        else {
            $allAlumni = Alumni::where('course_id', 'like', '%' . $request->course_id . '%')
                ->where('sex', '=', $request->sex)
                ->whereBetween('batch', [$request->batch_from, $request->batch_to])
                ->orderBy('last_name', 'asc')
                ->get();

            $checkCount = Alumni::where('course_id', 'like', '%' . $request->course_id . '%')
                ->where('sex', '=', $request->sex)
                ->whereBetween('batch', [$request->batch_from, $request->batch_to])
                ->join('tbl_tracer_answers', 'tbl_alumni.alumni_id', '=', 'tbl_tracer_answers.alumni_id')
                ->select('tbl_alumni.alumni_id')
                ->get();
        }

        $courses = Courses::where('course_id', 'like', '%' . $request->course_id . '%')->get();

        $pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetTitle('PDS_SUMMARY_REPORTS');
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        foreach ($courses as $checkCourse) {
            foreach ($allAlumni as $alumni) {
                $psdAnswers = PdsAnswers::where('alumni_id', '=', $alumni->alumni_id)->get();
                if ($checkCourse->course_id == $alumni->course_id) {
                    if (count($psdAnswers) > 0) {
                        $pdf->SetPrintHeader(true);
                        $pdf->AddPage();
                        $pdf->SetPrintHeader(false);
                        $pdf->SetFont('times', 'B', 13);
                        $pdf->ln(20);
                        $pdf->Cell(0, 0, 'PERSONAL DATA SHEET', 0, 1, 'C', 0, '', 0);

                        $pdf->ln(10);
                        $pdf->SetFont('times', '', 12);
                        $html = <<<EOF
                            <table style="width:100%">
                                <tr>
                                    <th colspan="1" style="width: 8%; font-weight: bold;">Name: </th>
                                    <td colspan="1" style="text-align: center; width: 30%">$alumni->last_name </td>
                                    <td colspan="1" style="text-align: center; width: 32%">$alumni->first_name $alumni->suffix </td>
                                    <td colspan="1" style="text-align: center; width: 30%">$alumni->middle_name </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td style="text-align: center; font-size:12px; border-top: 1px solid black;"><i>Surname</i></td>
                                    <td style="text-align: center; font-size:12px; border-top: 1px solid black;"><i>First Name</i></td>
                                    <td style="text-align: center; font-size:12px; border-top: 1px solid black;"><i>Middle Name</i></td>
                                    <td></td>
                                    <td></td>
                                    <td style="border-top: 1px solid black;"></td>
                                </tr>
                            </table>
                        EOF;
                        $pdf->writeHTML($html, true, 0, true, 0);

                        $pdf->Ln(-3);
                        $bday = date('F d, Y', strtotime($alumni->birthday));
                        $html = <<<EOF
                            <table style="width:100%; margin-top: 300px;">
                                <tr>
                                    <th colspan="1" style="width: 16%; font-weight: bold;">Date of Birth: </th>
                                    <td colspan="1" style="border-bottom: 1px solid black; width: 25%;"> $bday </td>
                                    <td colspan="1" style="width: 10%;"></td>
                                    <th colspan="1" style="width: 6%; font-weight: bold;">Age: </th>
                                    <td colspan="1" style="border-bottom: 1px solid black; width: 17%;"> $alumni->age years old</td>
                                </tr>
                            </table>
                        EOF;
                        $pdf->writeHTML($html, true, 0, true, 0);

                        $pdf->Ln(-1);
                        $bday = date('F d, Y', strtotime($alumni->birthday));
                        $html = <<<EOF
                            <table style="width:100%; margin-top: 300px;">
                                <tr>
                                    <th colspan="1" style="width: 11%; font-weight: bold;">Religion: </th>
                                    <td colspan="1" style="border-bottom: 1px solid black; width: 30%;"> $alumni->religion </td>
                                    <td colspan="1" style="width: 10%;"></td>
                                    <th colspan="1" style="width: 6%; font-weight: bold;">Sex: </th>
                                    <td colspan="1" style="border-bottom: 1px solid black; width: 17%;"> $alumni->sex </td>
                                </tr>
                            </table>
                        EOF;
                        $pdf->writeHTML($html, true, 0, true, 0);

                        $pdf->Ln(-1);
                        $course = Courses::where('course_id', '=', $alumni->course_id)->value('course_desc');
                        $html = <<<EOF
                            <table style="width:100%; margin-top: 10px;">
                                <tr>
                                    <th colspan="1" style="width: 17%; font-weight: bold;">Degree/Course: </th>
                                    <td colspan="1" style="border-bottom: 1px solid black; width: 83%;"> $course </td>
                                </tr>
                            </table>
                        EOF;
                        $pdf->writeHTML($html, true, 0, true, 0);

                        $pdf->Ln(-1);
                        $html = <<<EOF
                            <table style="width:100%; margin-top: 10px;">
                                <tr>
                                    <th colspan="1" style="width: 19%; font-weight: bold;">Year Graduated: </th>
                                    <td colspan="1" style="border-bottom: 1px solid black; width: 10%;"> $alumni->batch </td>
                                </tr>
                            </table>
                        EOF;
                        $pdf->writeHTML($html, true, 0, true, 0);

                        $pdf->Ln(-1);
                        $html = <<<EOF
                            <table style="width:100%; margin-top: 10px;">
                            <tr>
                                <th colspan="1" style="width: 16%; font-weight: bold;">City Address: </th>
                                <td colspan="1" style="border-bottom: 1px solid black; width: 84%;"> $alumni->city_address </td>
                            </tr>
                            </table>
                        EOF;
                        $pdf->writeHTML($html, true, 0, true, 0);

                        $pdf->Ln(-1);
                        $html = <<<EOF
                            <table style="width:100%; margin-top: 10px;">
                            <tr>
                                <th colspan="1" style="width: 22%; font-weight: bold;">Provincial Address: </th>
                                <td colspan="1" style="border-bottom: 1px solid black; width: 78%;"> $alumni->provincial_address </td>
                            </tr>
                            </table>
                        EOF;
                        $pdf->writeHTML($html, true, 0, true, 0);

                        $pdf->Ln(-1);
                        $html = '<table style="width:100%; margin-top: 10px;">
                                <tr>
                                    <th colspan="1" style="width: 17%; font-weight: bold;">Father\'s Name: </th>
                                    <td colspan="1" style="border-bottom: 1px solid black; width: 39%;">'. $psdAnswers[1]['answer'] . '</td>
                                    <td colspan="1" style="width: 6%;"></td>
                                    <th colspan="1" style="width: 15%; font-weight: bold;">Father\'s No.: </th>
                                    <td colspan="1" style="border-bottom: 1px solid black; width: 23%;">'. $psdAnswers[2]['answer'] . '</td>
                                </tr>
                            </table>';
                        $pdf->writeHTML($html, true, 0, true, 0);

                        $pdf->Ln(-1);
                        $html = '<table style="width:100%; margin-top: 10px;">
                                <tr>
                                    <th colspan="1" style="width: 18%; font-weight: bold;">Mother\'s Name: </th>
                                    <td colspan="1" style="border-bottom: 1px solid black; width: 38%;">'. $psdAnswers[3]['answer'] . '</td>
                                    <td colspan="1" style="width: 6%;"></td>
                                    <th colspan="1" style="width: 16%; font-weight: bold;">Mother\'s No.: </th>
                                    <td colspan="1" style="border-bottom: 1px solid black; width: 22%;">'. $psdAnswers[4]['answer'] . '</td>
                                </tr>
                            </table>';
                        $pdf->writeHTML($html, true, 0, true, 0);

                        $pdf->Ln(10);
                        $html = '<style>
                                table, th, td {
                                    text-align: left;
                                    border-collapse: collapse;
                                }
                                .table-work, .th-work, .td-work {
                                    border: 1px solid black;
                                    border-collapse: collapse;
                                    padding: 5px;
                                }
                            </style>
                            <h4 style="text-align: center;">Internship and Work Experience/s:</h4>
                            <table class="table-work" style="width:100%;">
                                <tr>
                                    <th class="th-work" colspan="1" style="font-weight: bold; text-align: center; width:50%">Department / Agency / Office</th>
                                    <th class="th-work" colspan="1" style="font-weight: bold; text-align: center; width: 25%">Position</th>
                                    <th class="th-work" colspan="1" style="font-weight: bold; text-align: center; width: 25%">Inclusive Dates</th>
                                </tr>
                                <tr>
                                    <td class="td-work">'. $psdAnswers[5]['answer'] . '</td>
                                    <td class="td-work">'. $psdAnswers[6]['answer'] . '</td>
                                    <td class="td-work">'. $psdAnswers[7]['answer'] . '</td>
                                </tr>
                            </table>';
                        $pdf->writeHTML($html, true, 0, true, 0);

                        $pdf->Ln(3);
                        $html = '<style>
                                table, th, td {
                                    text-align: left;
                                    border-collapse: collapse;
                                }
                                .table-work, .th-work, .td-work {
                                    border: 1px solid black;
                                    border-collapse: collapse;
                                    padding: 5px;
                                }
                            </style>
                            <h4 style="text-align: center;">Trainings / Seminars Attended:</h4>
                            <table class="table-work" style="width:100%;">
                                <tr>
                                    <th class="th-work" colspan="1" style="width: 70%; text-align: center; font-weight: bold;">Title of Seminar / Conference / Workshop</th>
                                    <th class="th-work" colspan="1" style="width: 30%; text-align: center; font-weight: bold;">Inclusive Dates</th>
                                </tr>
                                <tr>
                                    <td class="td-work">'. $psdAnswers[8]['answer'] . '</td>
                                    <td class="td-work">'. $psdAnswers[9]['answer'] . '</td>
                                </tr>';


                            if ($psdAnswers[10]['answer'] != 'N/A' && $psdAnswers[11]['answer'] != 'N/A') {
                                $html .= '<tr>
                                        <td class="td-work">'. $psdAnswers[10]['answer'] . '</td>
                                        <td class="td-work">'. $psdAnswers[11]['answer'] . '</td>
                                    </tr>';
                            }
                            if ($psdAnswers[12]['answer'] != 'N/A' && $psdAnswers[13]['answer'] != 'N/A') {
                                $html .= '<tr>
                                        <td class="td-work">'. $psdAnswers[10]['answer'] . '</td>
                                        <td class="td-work">'. $psdAnswers[11]['answer'] . '</td>
                                    </tr>';
                            }
                            $html .= '</table>';
                        $pdf->writeHTML($html, true, 0, true, 0);

                        $pdf->Ln(-10);
                        $html = '<div>
                                <p style="text-align: justify; text-justify: inter-word; line-height: 1.5;">I hereby certify that all information provided are true and correct to the best of my knowledge.
                                </p>
                                <table style="width:100%;">
                                    <tr>
                                        <td colspan="1" style="width: 25%; text-align: center; text-transform: uppercase;">' . date('F d, Y', strtotime($psdAnswers[14]['answer'])) . '</td>
                                        <td style="width: 20%"></td>
                                        <td colspan="1" style="width: 55%; text-align: center; text-transform: uppercase;">' . strtoupper($psdAnswers[15]['answer']) . '</td>
                                    </tr>
                                    <tr>
                                        <td colspan="1" style="font-size: 14px; width: 25%; text-align: center; border-top: 1px solid black;">
                                            <i>Date</i>
                                        </td>
                                        <td style="width: 20%"></td>
                                        <td colspan="1" style="font-size: 14px; width: 55%; text-align: center; border-top: 1px solid black;">
                                            <i>Signature</i>
                                        </td>
                                    </tr>
                                </table>
                            </div>';
                        $pdf->writeHTML($html, true, 0, true, 0);

                        $pdf->Ln(5);
                        $html = '<div>
                                <h4 style="text-align: center; text-decoration: underline;">WAIVER</h4>
                                <p style="text-align: justify; text-justify: inter-word; line-height: 1.5;">This is to signify that I am willing to be subjected to company calls for placement or employment purposes. This shall also authorize the Polytechnic University of The Philippines – Career Development and Placement Office (PUP-CDPO) to include my name and contact details in the directory of graduates.
                                </p>
                                <table style="width:100%;">
                                    <tr>
                                        <td colspan="1" style="width: 25%; text-align: center; text-transform: uppercase;">' . date('F d, Y', strtotime($psdAnswers[14]['answer'])) . '</td>
                                        <td style="width: 20%"></td>
                                        <td colspan="1" style="width: 55%; text-align: center; text-transform: uppercase;">' . strtoupper($psdAnswers[15]['answer']) . '</td>
                                    </tr>
                                    <tr>
                                        <td colspan="1" style="font-size: 14px; width: 25%; text-align: center; border-top: 1px solid black;">
                                            <i>Date</i>
                                        </td>
                                        <td style="width: 20%"></td>
                                        <td colspan="1" style="font-size: 14px; width: 55%; text-align: center; border-top: 1px solid black;">
                                            <i>Signature</i>
                                        </td>
                                    </tr>
                                </table>
                            </div>';
                        $pdf->writeHTML($html, true, 0, true, 0);

                        $pdf->lastPage();
                    }
                }
            }
        }
        $pdf->Output('PDS_Summary_Report_' . date('m-d-y') . '.pdf', 'I');
    }
}
