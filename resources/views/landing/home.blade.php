@extends('landing.index')

@section('content')
<div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="{{ asset('landing/img/services/service-1.svg')}}" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Docter Consultancy</h5>
              <p>Kami membantu kalian para pelanggan untuk berkonsultasi terkait layanan internet kami serta menjadi bantuan bagi anda yang mengalami masalah dalam layanan kami</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="{{ asset('landing/img/services/service-2.svg')}}" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Layanan Pembayaran</h5>
              <p>Kami membantu anda para costumer kami untuk mempermudah proses pembayaran untuk menghubungi kami terlebih dahulu agar tidak ada kesalahan dalam proses pembayaran</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="{{ asset('landing/img/services/service-3.svg')}}" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Support CS</h5>
              <p>Kami siap membantu anda para pengguna yang mengalami permasalahan dalam layanan kami berupa bantuan komunikasi atau terjun langsung ke tempat bila ada permasalahan di router atau kabel</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section" id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3 wow fadeInUp">
          <span class="subhead">About us</span>
          <h2 class="title-section">The number #1 SEO Service Company</h2>
          <div class="divider"></div>

          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
          <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
          <a href="about.html" class="btn btn-primary mt-3">Read More</a>
        </div>
        <div class="col-lg-6 py-3 wow fadeInRight">
          <div class="img-fluid py-3 text-center">
            <img src="landing/img/about_frame.png" alt="">
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead">Our services</div>
        <h2 class="title-section">How SEO Team Can Help</h2>
        <div class="divider mx-auto"></div>
      </div>

        <div class="row">
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>OnSite SEO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>OnSite SEO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>OnSite SEO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>OnSite SEO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>OnSite SEO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>OnSite SEO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>OnSite SEO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>OnSite SEO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
        </div>

    </div> <!-- .container -->
  </div> <!-- .page-section -->

{{-- @if($internet->isEmpty())
<div></div>
@else
<div class="page-section" id="paket">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead">Paket Internet</div>
        <h2 class="title-section">Pilih paket internet sesuai dengan yang kamu inginkan</h2>
        <div class="divider mx-auto"></div>
      </div>
      <div class="row mt-5">
        @foreach ($internet as $net)
        <div class="col-lg-4 py-3 wow zoomIn">
          <div class="card-pricing">
            <div class="header">
              <div class="pricing-type">Paket {{ $net->paket }}</div>
              <div class="price">
                <span class="dollar">RP</span>
                <h1>{{ number_format($net->harga) }}</h1>
              </div>
              <h5>Per {{$net->lama_penggunaan}}</h5>
            </div>
            <div class="body">
              <p>Social Media <span class="suffix">Reviews</span></p>
              <p>1 Free <span class="suffix">router</span></p>
              <p>24/7 <span class="suffix">Support</span></p>
            </div>
            <div class="footer">
              <a href="#" class="btn btn-pricing btn-block">Langganan</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div> <!-- .container -->
</div>
@endif <!-- .page-section --> --}}

      {{-- contact section --}}
    <div class="page-section" id="contact">
        <div class="container">
            <div class="text-center wow fadeInUp">
                <div class="subhead">Contact Kami</div>
                <h2 class="title-section">Selalu Terhubung dengan kami</h2>
                <div class="divider mx-auto"></div>
              </div>
        <div class="row text-center align-items-center">
        <div class="col-lg-4 py-3">
          <div class="display-4 text-center text-primary"><span class="mai-pin"></span></div>
          <p class="mb-3 font-weight-medium text-lg">Address</p>
          <p class="mb-0 text-secondary">Jl. Pasirkuya No.88-47, Cipacing, Kec. Jatinangor, Kabupaten Sumedang, Jawa Barat 45363</p>
        </div>
        <div class="col-lg-4 py-3">
          <div class="display-4 text-center text-primary"><span class="mai-call"></span></div>
          <p class="mb-3 font-weight-medium text-lg">Phone</p>
          <p class="mb-0"><a href="#" class="text-secondary">+62 8515 6101 271</a></p>
          <p class="mb-0"><a href="#" class="text-secondary">+62 8999 0994 340</a></p>
        </div>
        <div class="col-lg-4 py-3">
          <div class="display-4 text-center text-primary"><span class="mai-mail"></span></div>
          <p class="mb-3 font-weight-medium text-lg">Email Address</p>
          <p class="mb-0"><a href="#" class="text-secondary">pugudbenjapu19@gmail.com</a></p>
        </div>
      </div>
        </div>

        <div class="container-fluid mt-4">
          <div class="row">
            {{-- <div class="col-lg-6 mb-5 mb-lg-0">
              <form action="#" class="contact-form py-5 px-lg-5">
                <h2 class="mb-4 font-weight-medium text-secondary">Get in touch</h2>
                <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="fname">First Name</label>
                    <input type="text" id="fname" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label class="text-black" for="lname">Last Name</label>
                    <input type="text" id="lname" class="form-control">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="email">Email</label>
                    <input type="email" id="email" class="form-control">
                  </div>
                </div>

                <div class="row form-group">

                  <div class="col-md-12">
                    <label class="text-black" for="subject">Subject</label>
                    <input type="text" id="subject" class="form-control">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                  </div>
                </div>

                <div class="row form-group mt-4">
                  <div class="col-md-12">
                    <input type="submit" value="Send Message" class="btn btn-primary">
                  </div>
                </div>
              </form>
            </div> --}}
            <div class="col-lg-12 px-5">
              <div class="maps-container"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2643.3603797982364!2d107.76382419206385!3d-6.942415141021439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c5c55b11c079%3A0xf5c5e20565dd4e9d!2sAMRETA%20REPAIR%20(%20Service%20Hp%20jatinangor)!5e0!3m2!1sid!2sid!4v1658042165430!5m2!1sid!2sid" width="100%" height="700px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            </div>
          </div>
        </div>
   </div>
    {{-- end contact section --}}
@endsection
