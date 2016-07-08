
<!-- index.html -->
<? include ("head.php") ;?>
<? include ("header.php");?>
    <section class="intro">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1 class="brand-heading">The Crew.</h1>
              <a href="#crew" id="view-more-link" class="explore-link">Check us out <i class="fa fa-chevron-down"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="crew" class="container content-section text-center text-content crew-section">
      <div class="row">
        <div class="col-xs-12 col-md-4 crew-image-box">
          <img class="img-responsive" src="http://i.imgur.com/8R5zKOo.jpg" alt="">
        </div>
        <div class="col-xs-12 col-md-4 crew-desc">
          <h3>Raghav Bhotika</h3>
          <p class="body-type">Raghav is a film-maker, he has directed numerous Plays & Films. He is a writer during day & a dreamer by night.</p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-xs-12 col-md-4 crew-image-box">
          <img class="img-responsive" src="http://i.imgur.com/0AU41Nn.jpg" alt="">
        </div>
        <div class="col-xs-12 col-md-4 crew-desc">
          <h3>Umang Srivastava</h3>
          <p class="body-type">Umang is the one who keeps things moving in the team. A productivity nerd and an actor, he puts the business in art.</p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-xs-12 col-md-4 crew-image-box">
          <img class="img-responsive" src="http://i.imgur.com/ThN1k3l.jpg" alt="">
        </div>
        <div class="col-xs-12 col-md-4 crew-desc">
          <h3>Anant Sharma</h3>
          <p class="body-type">Anant has worked the scene for many years as a musician, an actor as well as a writer. The Indie is strong with this one. </p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-xs-12 col-md-4 crew-image-box">
          <img class="img-responsive" src="http://i.imgur.com/k5rE5Gh.jpg" alt="">
        </div>
        <div class="col-xs-12 col-md-4 crew-desc">
          <h3>Akhil Sukumaran</h3>
          <p class="body-type">Akhil is the inhouse branding & design junkie. Has an eye for innovation everywhere & is the problem-solving machine.</p>
        </div>
      </div>
    </section>
  <section id="footer" class="content-section text-center container">
      <div class="row">
        <div class="container">
          <h2 class="secondary-heading footer-primary" style="color: #fff;margin: 0 0 25px 0;">Contact Us</h2>
        </div>
      </div>
      <div class="row footer-primary">
        <h4>Looking to tell your story? Want to collaborate on a project? Just want to get to know us?</h4>
        <section class="content bgcolor-3 contianer-fluid">
          <div id="contact-form-wrap" class="contact-form-wrap">
              <div class="row">
                <article class="col-xs-12 main-caps text-center">
                  <div class="contact-item pad-common ">
                    <div class="alert alert-error error color-bg" id="fname">
                      <p class="white">Name must not be empty</p>
                    </div>
                    <div class="alert alert-error  error color-bg" id="fmail">
                      <p class="white">Please provide a valid email</p>
                    </div>
                    <div class="alert alert-error  error color-bg" id="fmsg">
                       <p class="white">Message should not be empty</p>
                    </div>
                    <form name="myform" id="contactForm" action="contact.php" enctype="multipart/form-data" method="post"> 
                      <span class="input input--manami">
                        <input class="input__field input__field--manami" id="name" name="name" size="100" type="text"  />
                        <label class="input__label input__label--manami" for="name">
                          <span class="input__label-content input__label-content--manami">Name</span>
                        </label>
                      </span>
                      <span class="input input--manami">
                        <input class="input__field input__field--manami" type="text"  name="email" id="email" size="30" />
                        <label class="input__label input__label--manami" for="email">
                          <span class="input__label-content input__label-content--manami">Email</span>
                        </label>
                      </span>
                      <span class="input input--manami" style="max-width: 75%">
                        <textarea class="input__field input__field--manami" cols="40" rows="3" type="text" id="msg" /></textarea> 
                        <label class="input__label input__label--manami" for="msg" style="height: 130px">
                          <span class="input__label-content input__label-content--manami" style="margin-top: 75px">Your Message</span>
                        </label>
                      </span>
                      <div class="margin-top-20 text-center">
                        <button class="contact-send-btn cta-scroll" id="submit"  name="submit" type="submit">Get in Touch</button>
                      </div>
                    </form>
                  </div>
                </article>
              </div>
          </div>                                                                       
        </section>
      </div>
    </section>

<? include("footer.php") ; ?>
