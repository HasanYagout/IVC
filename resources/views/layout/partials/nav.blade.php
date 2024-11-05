<nav class="navbar navbar-expand-lg p-5">
    <div class="container-fluid">
        <a class="navbar-brand mx-2" href="{{route('home')}}">
            <img src="{{asset('assets/images/logo.png')}}" alt="Logo" width="200">
        </a>
        <div style="height: 80px" class="border-black d-none d-xxl-block d-lg-block border-start">

        </div>
        <div class="mx-3">
            <h3>{{__("words.YEMEN-SANA'A")}}</h3>
            <a href="mailto:support@ivc-ye.com" class="text-decoration-underline text-black fs-3">
                <img src="{{asset('assets/images/mail.png')}}" alt="">support@ivc-ye.com
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
            <ul class="align-items-center bg-white d-flex flex-wrap gap-0 gap-2 gap-lg-3 mb-2 mb-lg-0 navbar-nav py-2 rounded-5">
                <li class="nav-item fs-4 mx-3 mx-lg-3 fw-bold">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">{{__('words.Home')}}</a>
                </li>
                <li class="nav-item fs-4 mx-3 mx-lg-3 fw-bold">
                    <a class="nav-link" href="{{route('about')}}">{{__('words.About')}}</a>
                </li>
                <li class="nav-item fs-4 mx-3 mx-lg-3 fw-bold">
                    <a class="nav-link" href="{{route('service')}}">{{__('words.IVC Services')}}</a>
                </li>
                <li class="nav-item d-flex justify-content-end mx-3 mx-lg-3">
                    <a style="width: 150px" href="#" class="btn fw-bold fs-4 text-white custom-bg-primary d-flex align-items-center justify-content-center">{{__('words.Contact Us')}}</a>
                </li>
                <li class="nav-item d-flex justify-content-end mx-3 mx-lg-3">
                    <div class="dropdown-center">
                        <button style="background: #D9D9D9" class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ app()->getLocale() == 'en' ? 'English' : 'العربية' }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                            </svg>
                        </button>
                        <ul class="dropdown-menu">
                            <form id="language-form" method="POST" action="{{ route('language') }}">
                                @csrf
                                <input type="hidden" name="locale" id="locale" value="{{ app()->getLocale() }}">
                            </form>
                            <li>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('locale').value = 'en'; document.getElementById('language-form').submit();">
                                    English
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('locale').value = 'ar'; document.getElementById('language-form').submit();">
                                    العربية
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>    </div>

</nav>
<div style="width: 90%" class="border-bottom border-2 mb-5 m-auto custom-border-secondary">

</div>
