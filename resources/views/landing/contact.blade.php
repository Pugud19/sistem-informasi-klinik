@extends('landing.index')

@section('content')
  <div class="page-section">
    <div class="container">
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
        <div class="col-lg-6 mb-5 mb-lg-0">
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
        </div>
        <div class="col-lg-6 px-0">
          <div class="maps-container"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2643.3603797982364!2d107.76382419206385!3d-6.942415141021439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c5c55b11c079%3A0xf5c5e20565dd4e9d!2sAMRETA%20REPAIR%20(%20Service%20Hp%20jatinangor)!5e0!3m2!1sid!2sid!4v1658042165430!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </div>
      </div>
    </div>
  </div>
@endsection


