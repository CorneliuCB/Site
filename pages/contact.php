<div class="container">

  <div class="section-title">
    <h2>Contactează-ne</h2>
  </div>

  <div class="row mt-2">

    <div class="col-md-6 d-flex align-items-stretch">
      <div class="info-box">
        <i class="bx bx-map"></i>
        <h3>Adresa noastră</h3>
        <p>Strada Studenților 9/7, Chișinău</p>
      </div>
    </div>

    <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
      <div class="info-box">
        <i class="bx bx-share-alt"></i>
        <h3>Profiluri sociale</h3>
        <div class="social-links">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>

    <div class="col-md-6 mt-4 d-flex align-items-stretch">
      <div class="info-box">
        <i class="bx bx-envelope"></i>
        <h3>Email</h3>
        <p>ForceRM@example.com</p>
      </div>
    </div>
    <div class="col-md-6 mt-4 d-flex align-items-stretch">
      <div class="info-box">
        <i class="bx bx-phone-call"></i>
        <h3>Sună-ne</h3>
        <p>+373 XXXXXXXX</p>
      </div>
    </div>
  </div>

  <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
    <div class="row">
      <div class="col-md-6 form-group">
        <input type="text" name="name" class="form-control" id="name" placeholder="Numele" required>
      </div>
      <div class="col-md-6 form-group mt-3 mt-md-0">
        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
      </div>
    </div>
    <div class="form-group mt-3">
      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subiectul" required>
    </div>
    <div class="form-group mt-3">
      <textarea class="form-control" name="message" rows="5" placeholder="Mesajul" required></textarea>
    </div>
    <div class="my-3">
      <div class="loading">Loading</div>
      <div class="error-message"></div>
      <div class="sent-message">Mesajul dumneazoastră a fost trimis. Vă mulțumim!</div>
    </div>
    <div class="text-center">
      <button type="submit">Trimite mesaj</button>
    </div>
  </form>

</div>