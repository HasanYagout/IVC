@extends('layout.app')
@section('content')
    <section class="p-5">
        <h1 class="custom-primary text-center fw-bold mb-5">{{__('words.About IVC')}}</h1>
        <div class="row gap-5">
            <div class="col-lg-10 m-auto">
                <x-box title="{{__('words.IVC Vision')}}" description="{{__('words.The vision of Inspiring Vision for Consulting is to have a world class, well recognized and remarkable fingerprint in the field of consulting and advisory services industry locally and regionally.')}}"></x-box>
            </div>
            <div class="col-lg-10 m-auto">
                <x-box title="{{__('words.IVC Mission')}}" description="{{__('words.Our mission is to be innovative and providing high quality services that exceed our clients expectations, add values to their organizations and thrive their development prosperity.')}}"></x-box>
            </div>
            <div class="col-lg-10 m-auto">
                <x-box title="{{__('words.IVC Value')}}" description="">
                    <h4 class="fw-bold">{{__('words.provide and apply the concept of the fair value to:')}}</h4>
                    <ul class="list-unstyled">
                        <li>- {{__('words.Our Clients')}}</li>
                        <li>- {{__('words.Our Team')}}</li>
                        <li>- {{__('words.Our Community')}}</li>
                        <li>- {{__('words.Our Environment')}}</li>

                    </ul>
                    <h4 class="fw-bold">{{__('words.in terms of :')}}</h4>
                    <ul class="list-unstyled">
                        <li>- {{__('words.Time and effort paid')}}</li>
                        <li>- {{__('words.Quality of work')}}</li>
                        <li>- {{__('words.Learning and knowledge sharing')}}</li>
                        <li>- {{__('words.Using ICT where applicable')}}</li>
                    </ul>
                </x-box>
            </div>
        </div>
    </section>
@endsection
