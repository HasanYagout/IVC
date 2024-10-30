@extends('layout.app')
@section('content')
    <section class="p-5">
        <section class="mb-5">
            <div class="row p-5">
                <div class="col-lg-6">
                    <h1 class="custom-primary fw-bold mb-5"> Inspiring Vision for Consulting</h1>
                    <p class="fs-3 fw-bold">A group of entrepreneurs and professionals with diverse expertise across public and private sectors. With decades of experience, they provide consulting and advisory services to public entities, industries, NGOs, INGOs, and UN agencies, focusing on development and humanitarian actions.</p>
                    <button style="width: 130px" class="border-0 custom-bg-primary fw-bold p-2 rounded text-white">Contact Us</button>
                </div>
                <div class="col-lg-6">
                    <img class="ms-5 ps-5" src="{{asset('assets/images/hero_section_image.png')}}" alt="">
                </div>
            </div>
        </section>
        <section class="ms-5" style="margin-top: 150px">
            <h1 class="custom-primary fw-bold mb-5">About IVC</h1>
            <div class="row gap-5 ms-5">
                <div class="col-lg-3 d-flex align-items-stretch px-4">
                    <x-box title="IVC Vision" description=" The vision of Inspiring Vision for Consulting is to have a world class."></x-box>
                </div>
                <div class="col-lg-3 d-flex align-items-stretch px-4">
                    <x-box title="IVC Mission" description="Our mission is to be innovative and providing high quality services that exceed our clients expectations"></x-box>
                </div>
                <div class="col-lg-3 d-flex align-items-stretch px-4">
                    <x-box title="IVC Value" description="Provide and apply the concept of the fair value for Our Clients and Our Team"></x-box>
                </div>
                <div style="width: 80%" class="d-flex justify-content-end">
                    <button style="width: 150px" class="border-0 fs-4 custom-bg-primary fw-bold p-2 rounded text-white">Read More</button>
                </div>
            </div>

        </section>
        <section class="ms-5" style="margin-top: 150px">
            <h1 class="custom-primary fw-bold mb-5">IVC Services</h1>
            <div class="row gap-5 ms-5">

                <div class="col-lg-10 border flex-column border-3 custom-border-primary px-4 py-5 rounded-5 d-flex align-items-stretch" style="box-shadow: inset 0 0 10px rgba(128, 128, 128, 0.7);">
                    <h3 class="fw-bold">Business Advisory</h3>
                    <p class="fs-5">Inspiring Vision for Consulting (IVC) is providing a range of consulting services that enhance business performance and needs.</p>
                    <h3 class="fw-bold">Humanitarian & Development Advisory</h3>
                    <p class="fs-5">IVC team has a field record on providing professional services to humanitarian and development programs and projects.</p>
                    <h3 class="fw-bold">Capacity Building</h3>
                    <p class="fs-5">IVC capacity building is on demand service and cover</p>
                    <div style="width: 95%" class="d-flex justify-content-end">
                        <button style="width: 150px" class="border-0 fs-4 custom-bg-primary fw-bold p-2 rounded text-white">Read More</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="ms-5" style="margin-top: 150px">
            <h1 class="custom-primary fw-bold mb-5">IVC Previous Work</h1>
            <hr>
            <div class="owl-carousel owl-theme">
                @foreach($previousWork as $work)
                    <div class="item">
                        <div class="card">
                            <div class="card-body">
                                <img height="300" src="{{asset('storage'.'/'.$work->path)}}" alt="">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <section>
            <h1 class="custom-primary fw-bold mb-5">IVC Clients</h1>
            <hr>
        </section>
    </section>
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop: true,
                nav: true,
                dots:true,
                rtl: true,
                margin:10,
                responsive: {
                    //X-Small
                    0: {
                        items: 3
                    },
                    360: {
                        items: 3
                    },
                    375: {
                        items: 3
                    },
                    540: {
                        items: 3
                    },

                    576: {
                        items: 3
                    },

                    768: {
                        items: 3
                    },
                    //Large
                    992: {
                        items: 3
                    },
                    //Extra large
                    1200: {
                        items: 3
                    },
                    //Extra extra large
                    1400: {
                        items: 3
                    }
                }
            });
        });
    </script>
@endsection
