<?php

namespace App\Imports;

use App\Models\AlumniList;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new AlumniList([
            'stud_number'    => $row['studnumber'],
            'last_name'      => $row['lastname'],
            'first_name'     => $row['firstname'],
            'middle_name'    => $row['middlename'],
            'suffix'        => $row['suffix'],
            'course_id'        => $row['course'],
        ]);
    }
}
