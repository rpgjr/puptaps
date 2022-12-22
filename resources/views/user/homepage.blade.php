@extends('layouts.user')
@section('page-title', 'Homepage')
@section('home-active', 'active')
@section('content')


<section class="mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5">
    <div class="container-fluid my-3">
        <div class="row justify-content-center g-0">
            <div class="col-11 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                <div class="row">
                    <div class="col-12">
                        <div class="row sub-container-box py-2">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-5 my-2">
                                <img src="{{ asset("img/attention.jpg") }}" alt="" class="w-100 rounded">
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-7 my-2 pt-3">
                                <h4 class="mb-4"><i class="fa-solid fa-bullhorn me-1"></i> Announcement from the Admin</h4>
                                <p>
                                    It has come to our attention that some students have not yet answered their required forms for the upcoming graduation. Please be advised that the deadline for submission will be Monday next week, December 29. It is imperative that all students meet the deadline in order to keep the graduation ceremony on track and ensure its success. If you have not yet submitted your requirements, please do so as soon as possible. Thank you for your cooperation.
                                </p>
                            </div>
                        </div>

                        <div class="row sub-container-box py-2 mt-4">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-5 my-2">
                                <img src="{{ asset("img/news1.jpg") }}" alt="" class="w-100 rounded">
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-7 my-2 pt-3">
                                <h4 class="mb-4"><i class="fa-solid fa-newspaper me-1"></i> 𝗕𝗮𝗸𝗮𝘀𝘆𝗼𝗻 𝗻𝗮! 𝗬𝗲𝘆! 🥳</h4>
                                <p>
                                    Pasko na talaga sa Sinta as our Christmas vacation officially begins today! Mas mararamdaman na natin ang nalalapit na pasko🤗<br><br>

                                    Enjoy this time of the year, PUPTians! Unwind and relax because you deserve it 🫵😉Spend time with yourself and your family. But of course, please don't forget to value the true essence of Christmas.<br><br>

                                    According to the University Calendar, our Christmas vacation is from 𝐃𝐞𝐜𝐞𝐦𝐛𝐞𝐫 𝟐𝟏, 𝟐𝟎𝟐𝟐 - 𝐉𝐚𝐧𝐮𝐚𝐫𝐲 𝟑, 𝟐𝟎𝟐𝟑.<br><br>

                                    𝗛𝗮𝗽𝗽𝘆 𝗛𝗼𝗹𝗶𝗱𝗮𝘆𝘀 𝗺𝗴𝗮 𝗜𝘀𝗸𝗼 𝗮𝘁 𝗜𝘀𝗸𝗮! 🎄
                                </p>
                            </div>
                        </div>

                        <div class="row sub-container-box py-2 mt-4">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-5 my-2">
                                <img src="{{ asset("img/news2.jpg") }}" alt="" class="w-100 rounded">
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-7 my-2 pt-3">
                                <h4 class="mb-4"><i class="fa-solid fa-newspaper me-1"></i> Watch, Learn, and Share‼️</h4>
                                <p>
                                    Register thru this link: <a href="https://forms.gle/vLrKv5Y12tNvhdYt5" target="_blank">GOOGLE FORM LINK</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
