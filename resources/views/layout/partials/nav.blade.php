<nav class="navbar navbar-expand-lg p-5">
    <div class="container-fluid">
        <a class="navbar-brand mx-2" href="#">
            <img src="{{asset('assets/images/logo.png')}}" alt="Logo" width="200">
        </a>
        <div style="height: 80px" class="border-black border-start">

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
            <ul class="navbar-nav align-items-center mb-2 mb-lg-0 bg-white rounded-5 py-2">
                <li class="nav-item fs-4 mx-5 fw-bold">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">{{__('words.Home')}}</a>
                </li>
                <li class="nav-item fs-4 mx-5 fw-bold">
                    <a class="nav-link" href="{{route('about')}}">{{__('words.About')}}</a>
                </li>
                <li class="nav-item fs-4 mx-5 fw-bold">
                    <a class="nav-link" href="{{route('service')}}">{{__('words.IVC Services')}}</a>
                </li>
                <li class="nav-item fs-4 ms-5 me-4">
                    <a style="width: 150px" href="#" class="btn fw-bold fs-4 text-white custom-bg-primary d-flex align-items-center justify-content-center">{{__('words.Contact Us')}}</a>
                </li>
                <li class="nav-item fs-4 ms-5 me-4">
                    <div class="dropdown-center">
                        <button style="background: #D9D9D9" class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ app()->getLocale() == 'en' ? 'English' : 'العربية' }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                                <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z"/>
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
        </div>
    </div>

</nav>
<div style="width: 90%" class="border-bottom border-2 mb-5 m-auto custom-border-secondary">

</div>
