<?php

namespace App\Http\Livewire;

use App\Models\Courses;
use Livewire\Component;
use App\Models\FormPDS;

class PersonalDataSheet extends Component
{
    public $alumni_ID;
    public $lastName;
    public $firstName;
    public $middleName;
    public $suffix;
    public $gender;
    public $age;
    public $bday;
    public $number;
    public $email;
    public $religion;
    public $courseID;
    public $batch;
    public $cityAddress;
    public $provincialAddress;
    public $fathersName;
    public $fathersNumber;
    public $mothersName;
    public $mothersNumber;
    public $office;
    public $position;
    public $officeDates;
    public $seminar1;
    public $seminar1Date;
    public $seminar2;
    public $seminar2Date;
    public $seminar3;
    public $seminar3Date;

    public $totalSteps = 3;
    public $currentStep = 2;

    public function mount() {
        $this->currentStep = 1;
    }

    public function render()
    {
        $courses = Courses::all();
        view()->share('courses', $courses);
        return view('livewire.personal-data-sheet');
    }

    public function decreaseStep() {
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }

    public function increaseStep() {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
    }

    public function validateData() {

        if($this->currentStep == 1) {
            $this->validate([
                'email' => 'required',
                'lastName' => 'required',
                'firstName' => 'required',
                'gender' => 'required',
                'bday' => 'required',
                'age' => 'required',
                'courseID' => 'required',
                'batch' => 'required',
                'cityAddress' => 'required',
                'number' => 'required',
            ]);
        }
        elseif($this->currentStep == 2) {
            $this->validate([
                'office' => 'required',
                'position' => 'required',
                'officeDates' => 'required',
            ]);
        }
        elseif($this->currentStep == 3) {
            $this->validate([
                'seminar1' => 'required',
                'seminar1Date' => 'required',
            ]);
        }

    }

    public function answerPDS() {
        $values = array(
            'alumni_ID' => $this->alumni_ID,
            'lastName' => $this->lastName,
            'firstName' => $this->firstName,
            'middleName' => $this->middleName,
            'suffix' => $this->suffix,
            'gender' => $this->gender,
            'age' => $this->age,
            'bday' => $this->bday,
            'number' => $this->number,
            'email' => $this->email,
            'religion' => $this->religion,
            'courseID' => $this->courseID,
            'batch' => $this->batch,
            'cityAddress' => $this->cityAddress,
            'provincialAddress' => $this->provincialAddress,
            'fathersName' => $this->fathersName,
            'fathersNumber' => $this->fathersNumber,
            'mothersName' => $this->mothersName,
            'mothersNumber' => $this->mothersNumber,
            'office' => $this->office,
            'position' => $this->position,
            'officeDates' => $this->officeDates,
            'seminar1' => $this->seminar1,
            'seminar1Date' => $this->seminar1Date,
            'seminar2' => $this->seminar2,
            'seminar2Date' => $this->seminar2Date,
            'seminar3' => $this->seminar3,
            'seminar3Date' => $this->seminar3Date,
        );

        FormPDS::insert($values);
        $this->reset();
        $this->currentStep = 1;
    }

}
