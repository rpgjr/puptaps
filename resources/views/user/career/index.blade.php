@extends('layouts.user')
@section('page-title', 'Careers')
@section('career-active', 'user-active')
@section('content')

    <section class="mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5">
        <div class="container-fluid">

            <!-- Alert Status -->
            <livewire:components.alert-status-message :message="session()->get('success')" />

            <div class="row justify-content-center">
                <!-- Start: Body -->
                <div class="col-11 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                    <div class="row g-2 g-sm-2 g-md-2 g-lg-3 g-xl-3">

                        <!-- Career Search bar -->
                        <div class="col-12">
                            <livewire:career.career-searchbar :query="$query" :return_home="'userCareer.index'" />
                        </div>

                        <!-- Career Submenu - Left Side -->
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-3">
                            <livewire:career.career-submenu :subquery="$subquery" />
                        </div>

                        <!-- Career Contents -->
                        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">

                            <!-- If Post/Query has no data -->
                            @if (count($careers) == 0)
                                <div class="alert alert-danger fs-7" role="alert">
                                    There is no available data.
                                </div>

                                <!-- If Post/Query has data -->
                            @else
                                @foreach ($careers as $career)
                                    @if ($career->job_ad_image == null)
                                        <!-- If Post was Text -->
                                        <livewire:career.career-text :career="$career" :alumni="$alumni" :admin="$admin"
                                            :username="$username" />
                                    @elseif ($career->job_ad_image != null)
                                        <!-- If Post was Image -->
                                        <livewire:career.career-image-modal :career="$career" :alumni="$alumni"
                                            :admin="$admin" :username="$username" />
                                    @endif
                                @endforeach
                            @endif
                        </div>

                    </div>
                </div>
                <!-- End: Body -->
            </div>

        </div>
    </section>
@endsection
