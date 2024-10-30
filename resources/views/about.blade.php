@extends('layout.app')
@section('content')
    <section class="p-5">
        <h1 class="custom-primary text-center fw-bold mb-5">About IVC</h1>
        <div class="row gap-5">
            <div class="col-lg-10 m-auto">
                <x-box title="IVC Vision" description="The vision of Inspiring Vision for Consulting is to have a world class, well recognized and remarkable fingerprint in the field of consulting and advisory services industry locally and regionally."></x-box>
            </div>
            <div class="col-lg-10 m-auto">
                <x-box title="IVC Mission" description="Our mission is to be innovative and providing high quality services that exceed our clients expectations, add values to their organizations and thrive their development prosperity."></x-box>
            </div>
            <div class="col-lg-10 m-auto">
                <x-box title="IVC Value" description="">
                    <h4 class="fw-bold">provide and apply the concept of the fair value to:</h4>
                    <ul class="list-unstyled">
                        <li>- our clients</li>
                        <li>- our team</li>
                        <li>- our community</li>
                        <li>- our Environment</li>
                    </ul>
                    <h4 class="fw-bold">in terms of :</h4>
                    <ul class="list-unstyled">
                        <li>- Time and effort paid</li>
                        <li>- Quality of work</li>
                        <li>- Learning and knowledge sharing </li>
                        <li>- Using ICT where applicable </li>
                    </ul>
                </x-box>
            </div>
        </div>
    </section>
@endsection
