@if ($sort_by == "course_id")
    @foreach ($courses as $course)
    @if ($listOfStudents->contains('course_id', $course->course_id))
    <div class="row sub-container-box mt-5 pt-4 pb-4">
        <div class="col-12">
            <h3 class="mt-3 text-center">{{ $course->course_Desc }}</h3>
            <h4 class="mb-5 text-center">PUP Taguig Alumni Batch of {{ $batch }}</h4>
            <table class="table table-striped align-middle">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th style="width: 20%;">Full Name</th>
                        <th style="width: 10%;">Email</th>
                        <th style="width: 10%;">Number</th>
                        <th style="width: 20%;">Date of Birth</th>
                        <th style="width: 40%;">Address</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($listOfStudents as $student)
                    @if ($student->course_id == $course->course_id)
                        <tr>
                            <td class="text-uppercase">
                                {{ $student->last_name }}, {{ $student->first_name }} {{ $student->suffix }} {{ $student->middle_name }}
                            </td>
                            <td class="text-center">{{ $student->email }}</td>
                            <td class="text-center">{{ $student->number }}</td>
                            <td class="text-center">{{ date("F d, Y", strtotime($student->number)) }}</td>
                            <td class="text-center">{{ $student->city_address }}</td>
                        </tr>
                    @endif
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    {{-- @else
        <div class="row sub-container-box mt-5 pt-4 pb-4">
            <div class="col-12">
                <h3 class="mt-3 text-center">{{ $course->course_Desc }}</h3>
                <h4 class="mb-5 text-center">PUP Taguig Alumni Batch of {{ $batch }}</h4>
                <div class="alert alert-warning mb-0 text-center fs-5">
                    No data
                </div>
            </div>
        </div> --}}
    @endif
    @endforeach

@elseif ($sort_by == "gender")
    @foreach ($genders as $gender)
    @if ($listOfStudents->contains('gender', $gender))
    <div class="row sub-container-box mt-5 pt-4 pb-4">
        <div class="col-12">
            <h3 class="mt-3 text-center">PUP Taguig Alumni Batch of {{ $batch }}</h3>
            <h4 class="mb-5 text-center text-uppercase">{{ $gender }}</h4>
            <table class="table table-striped align-middle">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th style="width: 20%;">Full Name</th>
                        <th style="width: 10%;">Email</th>
                        <th style="width: 10%;">Number</th>
                        <th style="width: 20%;">Date of Birth</th>
                        <th style="width: 40%;">Address</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($listOfStudents as $student)
                    @if ($student->gender == $gender)
                        <tr>
                            <td class="text-uppercase">
                                {{ $student->last_name }}, {{ $student->first_name }} {{ $student->suffix }} {{ $student->middle_name }}
                            </td>
                            <td class="text-center">{{ $student->email }}</td>
                            <td class="text-center">{{ $student->number }}</td>
                            <td class="text-center">{{ date("F d, Y", strtotime($student->number)) }}</td>
                            <td class="text-center">{{ $student->city_address }}</td>
                        </tr>
                    @endif
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    @endif
    @endforeach

@endif

