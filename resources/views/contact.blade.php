@extends('layout/main')
@section('container')
  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Contact Me</h6>
            <h4>Get In Touch With Me <em>Now</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="assets/images/contact-dec-v2.png" alt="">
                </div>
              </div>
              <div class="col-lg-5">
                <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.799823389729!2d106.8957023147696!3d-6.245568295471257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f0594d1d5f4d%3A0x50388a71cc21e9e!2sEast%20Jakarta%2C%20East%20Jakarta%20City%2C%20Jakarta!5e0!3m2!1sen!2sid!4v1623835741256!5m2!1sen!2sid" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/phone-icon.png" alt="">
                          <a href="#">087771030559</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/email-icon.png" alt="">
                          <a href="#">nzwslsa@gmail.com</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/location-icon.png" alt="">
                          <a href="#">Jakarta Timur</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="name" id="name" placeholder="Name" autocomplete="on" required>
                      </fieldset>
                      <fieldset>
                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required>
                      </fieldset>
                      <fieldset>
                        <input type="text" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <textarea name="message" class="form-control" id="message" placeholder="Message" required></textarea>  
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="button" id="form-submit" class="main-button" onclick="sendMessage()">Kirim Pesan</button>
                      </fieldset>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<script>
  function sendMessage() {
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var subject = document.getElementById('subject').value;
  var message = document.getElementById('message').value;

  // Format pesan untuk WhatsApp
  var whatsappMessage = `Name: ${name}%0AEmail: ${email}%0ASubject: ${subject}%0AMessage: ${message}`;

  // URL WhatsApp Click to Chat
  var whatsappLink = `https://wa.me/6287771030559?text=${encodeURIComponent(whatsappMessage)}`;
  
  // Buka WhatsApp
  window.open(whatsappLink, '_blank');
}
</script>
@endsection