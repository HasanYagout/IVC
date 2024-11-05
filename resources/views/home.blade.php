@extends('layout.app')
@section('content')
    <section class="mx-5">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <section class="">
                    <div class="gap-5 gap-sm-5 gap-xl-0 row">
                        <div class="col-xl-6 col-lg-12 col-sm-12 flex-grow-1">
                            <h1 class="custom-primary fw-bold mb-5">{{__('words.Inspiring Vision for Consulting')}}</h1>
                            <p class="fs-3 fw-bold">{{__('words.A group of entrepreneurs and professionals with diverse expertise across public and private sectors. With decades of experience, they provide consulting and advisory services to public entities, industries, NGOs, INGOs, and UN agencies, focusing on development and humanitarian actions.')}}</p>
                            <button style="width: 130px" class="border-0 custom-bg-primary fw-bold p-2 rounded text-white">
                                {{__('words.Contact Us')}}</button>
                        </div>
                        <div class="col-xl-6 col-lg-12 c0l-sm-12 flex-grow-1">
                            <img class=" w-100" src="{{asset('assets/images/hero_section_image.png')}}" alt="">
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-11">
                <section style="margin-top: 150px">
                    <h1 class="custom-primary fw-bold mb-5">{{ __('words.About IVC') }}</h1>
                    <div class="row gap-5 justify-content-center">
                        <div class="col-xl-3 col-lg-4 d-flex align-items-stretch px-4">
                            <x-box title="{{ __('words.IVC Vision') }}" description="{{ __('words.The vision of Inspiring Vision for Consulting is to have a world class.') }}"></x-box>
                        </div>
                        <div class="col-xl-3 col-lg-4 d-flex align-items-stretch px-4">
                            <x-box title="{{ __('words.IVC Mission') }}" description="{{__('words.Our mission is to be innovative and providing high quality services that exceed our clients expectations')}}"></x-box>
                        </div>
                        <div class="col-xl-3 col-lg-4 d-flex align-items-stretch px-4">
                            <x-box title="{{__('words.IVC Value')}}" description="{{__('words.Provide and apply the concept of the fair value for Our Clients and Our Team')}}"></x-box>
                        </div>
                        <div style="width: 80%" class="d-flex justify-content-end">
                            <button style="width: 150px" class="border-0 fs-4 custom-bg-primary fw-bold p-2 rounded text-white">
                                {{__('words.Read More')}}</button>
                        </div>
                    </div>

                </section>

            </div>
            <div class="col-lg-11">
                <section style="margin-top: 150px">
                    <h1 class="custom-primary fw-bold mb-5">{{__('words.IVC Services')}}</h1>
                    <div class="row gap-5 justify-content-center">

                        <div class="col-lg-10 border flex-column border-3 custom-border-primary px-4 py-5 rounded-5 d-flex align-items-stretch" style="box-shadow: inset 0 0 10px rgba(128, 128, 128, 0.7);">
                            <h3 class="fw-bold">{{__('words.Business Advisory')}}</h3>
                            <p class="fs-5">{{__('words.Inspiring Vision for Consulting (IVC) is providing a range of consulting services that enhance business performance and needs.')}}</p>
                            <h3 class="fw-bold">{{__('words.Humanitarian & Development Advisory')}}</h3>
                            <p class="fs-5">{{__('words.IVC team has a field record on providing professional services to humanitarian and development programs and projects.')}}</p>
                            <h3 class="fw-bold">{{__('words.Capacity Building')}}</h3>
                            <p class="fs-5">{{__('words.IVC capacity building is on demand service and cover')}}</p>
                            <div style="width: 95%" class="d-flex justify-content-end">
                                <button style="width: 150px" class="border-0 fs-4 custom-bg-primary fw-bold p-2 rounded text-white">
                                    {{__('words.Read More')}}</button>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <div class="col-lg-12">
                <section style="margin-top: 150px">
                    <h1 class="custom-primary fw-bold mb-5">{{__('words.IVC Previous Work')}}</h1>
                    <hr>
                    <div class="row">
                        <div class="col-lg-8 m-auto py-5 rounded-5" style="background-color: #1075B9;" id="work_carousel">
                            <div class="owl-carousel  owl-theme work-carousel">
                                @foreach($previousWork as $work)
                                    <div class="item" style="width: fit-content">
                                        <img id="work_carousel_img"  class="rounded-3 w-100" src="{{asset('storage'.'/'.$work->path)}}" alt="">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </section>
            </div>
            <div class="col-lg-12">
                <section style="margin-top: 150px">
                    <h1 class="custom-primary fw-bold mb-5">{{__('words.IVC Clients')}}</h1>
                    <hr>
                    <div class="row my-5 py-5">
                        <div class="col-xl-8 col-lg-10 col-sm-10 m-auto ">
                            <div class="owl-carousel owl-theme clients-carousel">
                                @foreach($clients as $client)
                                    <div class="item">
                                        <img id="clients_carousel_img" class="rounded-circle w-100" src="{{asset('storage'.'/'.$client->image)}}" alt="">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>


    </section>
    </section>
@endsection
@push('script')
    <script>
        $(document).ready(function(){
            $('.work-carousel').owlCarousel({
                loop: true,
                nav: true,
                dots: false,
                {{app()->getLocale()=='ar'?'rtl:true,':''}}
                margin: 20,
                responsive: {
                    0: { items: 1,dots:true,nav:false }, // For smaller screens
                    768: { items: 1,dots:false,nav:true },
                    900: { items: 2,dots:false,nav:true },
                    1400: { items: 2,dots:false,nav:true }
                }
            });

            $('.clients-carousel').owlCarousel({
                loop: true,
                nav: true,
                dots: true,
                {{app()->getLocale()=='ar'?'rtl:true,':''}}
                margin: 10,
                responsive: {
                    0: { items: 2,dots:true,nav:false }, // For smaller screens
                    400: { items: 3,dots:true,nav:false }, // For smaller screens
                    768: { items: 4,dots:false,nav:true },
                    900: { items: 5,dots:false,nav:true },
                    1400: { items: 5,dots:false,nav:true }
                }
            });
        });
    </script>
@endpush
