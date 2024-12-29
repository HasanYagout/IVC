@extends('layout.app')
@section('content')

    <h1 class="custom-primary text-center fw-bold mb-5">{{ __('words.IVC Services') }}</h1>

    <div class="row justify-content-center mx-2">
        <div class="col-11 col-md-10 col-lg-11 bg-white px-4 py-5 rounded shadow-lg">
            <section>
                <h1 class="custom-primary">{{ __('words.Business Advisory') }}</h1>
                <p class="custom-primary fs-5">
                    {{ __('words.Inspiring Vision for Consulting (IVC) is providing a range of consulting services that enhance business performance and needs.') }}
                </p>
                <div class="row justify-content-center px-3">
                    @foreach ([
                        __('words.Designing performance evaluation'),
                        __('words.Process mapping'),
                        __('words.Quality management & control'),
                        __('words.Business & market studies'),
                        __('words.Designing authority & responsibility matrices'),
                        __('words.Feasibility studies'),
                        __('words.Strategy development'),
                        __('words.Designing work manuals, policies and procedures'),
                        __('words.Designing job descriptions & details'),
                        __('words.Process Re-engineering'),
                        __('words.Structuring organizations'),
                    ] as $service)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <div class="custom-bg-primary d-flex align-items-center justify-content-center py-3 text-white rounded">
                                <h5 class="text-center">{{ $service }}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>

    <div class="row justify-content-center mx-2 mt-5">
        <div class="col-11 col-md-10 col-lg-11 bg-white shadow-lg px-4 py-5 rounded">
            <section>
                <h1 class="custom-primary">{{ __('words.Capacity Building') }}</h1>
                <p class="custom-primary fs-5">{{ __('words.IVC capacity building is on demand service and cover the following:') }}</p>
                <div class="row justify-content-center px-3">
                    <div class="col-lg-4 mb-3">
                        <div class="custom-bg-primary d-flex align-items-center justify-content-center p-2 text-white rounded">
                            <h5>{{ __('words.On job training') }}</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="custom-bg-primary d-flex align-items-center justify-content-center p-2 text-white rounded">
                            <h5>{{ __('words.Professional training') }}</h5>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="row justify-content-center mx-2 mt-5">
        <div class="col-11 col-md-10 col-lg-11 bg-white shadow-lg px-4 py-5 rounded">
            <section>
                <h1 class="custom-primary">{{ __('words.Humanitarian & Development Advisory') }}</h1>
                <p class="custom-primary fs-5">{{ __('words.IVC team has a field record on providing professional services to humanitarian and development programs and projects, that includes:') }}</p>
                <div class="row justify-content-center px-3">
                    @foreach ([
                        __('words.Monitoring and Evaluation M&E Services'),
                        __('words.Fundraising'),
                        __('words.Monitoring, Evaluation, Accountability, Learning MEAL'),
                        __('words.Post Distribution Monitoring PDM'),
                        __('words.Information, and Communication Technology for Development ICT4D'),
                        __('words.Grant/Project proposals'),
                        __('words.Occupational, Health and Safety OHS'),
                        __('words.Projects management & out sourcing'),
                        __('words.Policy management & manuals'),
                        __('words.Evaluation ( mid term, final, impact )'),
                        __('words.Gender issues'),
                        __('words.Environment and Social Framework ESF Assessment'),
                        __('words.Impact Assessment'),
                        __('words.Social accountability'),
                        __('words.Social responsibility'),
                        __('words.Third Party Monitoring TPM'),
                        __('words.Capacity Assessment'),
                        __('words.Need Assessment'),
                        __('words.Rapid Assessment'),
                        __('words.Grant management'),
                        __('words.Micro Assessment'),
                        __('words.Good Governance'),
                    ] as $service)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <div class="custom-bg-primary h-100 d-flex align-items-center justify-content-center p-2 text-white rounded">
                                <h5>{{ $service }}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>

@endsection
