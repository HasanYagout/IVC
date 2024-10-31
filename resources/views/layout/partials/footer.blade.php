<footer class="bg-white mt-5" style="box-shadow: 0 -2rem 3rem rgba(0, 0, 0, 0.175);">
    <section class="row">
        <div class="col-lg-4 d-flex p-5 justify-content-between align-items-center">
            <img src="{{asset('assets/images/logo.png')}}" alt="">
            <section>
                <ul class="fs-5 list-unstyled">
                    <li><a class="text-decoration-none text-black" href="{{route('home')}}">Home</a></li>
                    <li><a class="text-decoration-none text-black" href="">About</a></li>
                    <li><a class="text-decoration-none text-black" href="">IVC Services</a></li>
                    <li><a class="text-decoration-none text-black" href="">Contact Us</a></li>
                </ul>
            </section>
        </div>

      <div class="align-items-center col-lg-2 d-flex justify-content-center">
          <div style="height: 130px" class="custom-border-primary border-start">

          </div>

      </div>
        <div class="col-lg-4 d-flex p-5 justify-content-between align-items-center flex-column">
            <a href="mailto:support@ivc-ye.com" class="text-decoration-underline text-black fs-3">
                <img src="{{asset('assets/images/mail.png')}}" alt="">support@ivc-ye.com
            </a>
            <p>Copyright &copy; {{date('Y')}} IVC | Powered by WarqaTech</p>
        </div>
    </section>
</footer>
