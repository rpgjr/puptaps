@extends('layouts.admin')
@section('page-title', 'Admin Dashboard')
@section('active-homepage', 'active')
@section('page-name', 'Dashboard')
@section('content')

    <section class="mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5 mb-5">
        <div class="container-fluid box-content">

            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row g-3">
                        <div class="col-8">
                            <div class="sub-container-box p-4">
                                <h5>Board Exam Passers</h5>
                                <div>
                                    <canvas id="alumni-per-exam"></canvas>
                                </div>
                                <script>
                                    var perBoardExam = @json($perBoardExam);
                                </script>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="sub-container-box p-4 h-100">
                                <h5>Employed Alumni</h5>
                                <div>
                                    <canvas id="employed-alumni"></canvas>
                                </div>
                                <script>
                                    var employedAlumni = @json($employedAlumni);
                                </script>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="sub-container-box p-4 h-100">
                                <h5>Civil Service Exam Passers</h5>
                                <div>
                                    <canvas id="alumni-per-civil"></canvas>
                                </div>
                                <script>
                                    var perCivilService = @json($perCivilService);
                                </script>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="sub-container-box p-4 h-100">
                                <h5>Latest Career Posting</h5>
                                @if ($career == null)
                                    <h4 class="text-center">There no post yet.</h4>
                                @else
                                    @include('admin.components.last-career')
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
