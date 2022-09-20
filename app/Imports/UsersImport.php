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
            'studnumber'    => $row['studnumber'],
            'lastname'      => $row['lastname'],
            'firstname'     => $row['firstname'],
            'middlename'    => $row['middlename'],
            'suffix'        => $row['suffix'],
            'course'        => $row['course'],
        ]);
    }
}
