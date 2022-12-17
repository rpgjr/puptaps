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

    // Load table data from file
    public function LoadData($file) {
        // Read file lines
        $data = $file;
        return $data;
    }

    // Colored table
    public function ColoredTable($header,$data) {
        // Colors, line width and bold font
        $this->SetFillColor(255, 0, 0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128, 0, 0);
        $this->SetLineWidth(0.3);
        $this->SetFont('', 'B');
        // Header
        $w = array(45, 30, 30, 30, 45);
        $num_headers = count($header);
        for($i = 0; $i < $num_headers; ++$i) {
            $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
        }
        $this->Ln();
        // Color and font restoration
        $this->SetFillColor(224, 235, 255);
        $this->SetTextColor(0);
        $this->SetFont('');
        // Data
        $fill = 0;
        foreach($data as $row) {
            $this->Cell($w[0], 10, $row->last_name, 'LR', 0, 'L', $fill, '', 0);
            $this->Cell($w[1], 10, $row->last_name, 'LR', 0, 'L', $fill, '', 0);
            $this->Cell($w[2], 10, $row->course_id, 'LR', 0, 'L', $fill, '', 0);
            $this->Cell($w[3], 10, $row->city_address, 'LR', 0, 'L', $fill, '', 0);
            $this->Cell($w[4], 10, $row->city_address, 'LR', 0, 'L', $fill, '', 0);
            $this->Ln();
            $fill=!$fill;
        }
        $this->Cell(array_sum($w), 0, '', 'T');
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
        $genders = collect(["male", "female"]);

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
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        // ---------------------------------------------------------

        // set font
        // add a page
        $pdf->AddPage();

        $type = $request->type;
        $batch = $request->batch;
        $sort_by = $request->sort_by;

        if($type == 1) {
            $list = Alumni::where("batch", "=", $batch)->get();
            $listOfStudents = $list->sortBy($sort_by);
        }

        $data = $pdf->LoadData($listOfStudents);

        $pdf->ln(20);
        // print colored table
        $header = array('Full Name', 'Email', 'Number', 'Date of Birth', 'Address');
        $pdf->ColoredTable($header, $data);


        //Close and output PDF document
        $pdf->Output('PDS_.pdf', 'I');
    }
}
