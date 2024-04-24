<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TSS</title>
  <link rel="icon" type="image/webp" href="img/fav.webp" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.min.js"></script>
</head>

<body>
  <!-- Preloader -->
  <div class="loader-mask">
    <div class="spinnerContainer">
      <img src="img/fav.webp" class="img-fluid logo-rotate-center">
      <div class="rotate-preloader">
        <img src="img/reloader.webp" class="img-fluid">
      </div>
    </div>
  </div>
  <!-- Preloader -->
  <div class="inner-banner">
    <div class="banner-overlay">
    <?php include 'header.php';?>
    <?php include 'dark-mode.php';?>
      <div class="inner-banner-center">
        <h2 class="banner-head">Reveal the power of <br> your brand</h2>
        <div class="d-flex justify-content-center aos-init aos-animate" data-aos="zoom-in" data-aos-duration="3000">
        <a href="about.php">
        <button type="button" class="main-home-btn">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <g clip-path="url(#clip0_402_13827)">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.0259 2.26989C13.2408 2.19835 13.4691 2.17641 13.6938 2.20573C13.9184 2.23505 14.1335 2.31487 14.3228 2.43919C14.5122 2.56351 14.6709 2.72911 14.7872 2.92355C14.9034 3.11799 14.9741 3.33623 14.9939 3.56189L14.9999 3.69389V9.17989L18.7939 9.93989C19.11 10.0029 19.3975 10.1661 19.6136 10.4053C19.8298 10.6445 19.9631 10.947 19.9939 11.2679L19.9999 11.4099V18.9999H20.9999C21.2547 19.0002 21.4999 19.0978 21.6852 19.2727C21.8706 19.4477 21.9821 19.6868 21.997 19.9413C22.012 20.1957 21.9292 20.4463 21.7656 20.6417C21.602 20.8372 21.37 20.9628 21.1169 20.9929L20.9999 20.9999H2.99987C2.74499 20.9996 2.49984 20.902 2.3145 20.727C2.12916 20.5521 2.01763 20.3129 2.0027 20.0585C1.98776 19.8041 2.07054 19.5535 2.23413 19.3581C2.39772 19.1626 2.62977 19.037 2.88287 19.0069L2.99987 18.9999H3.99987V6.35989C3.99987 5.75989 4.35587 5.22389 4.89787 4.98589L5.02587 4.93689L13.0259 2.26989ZM12.9999 4.38789L5.99987 6.72089V18.9999H12.9999V4.38789ZM14.9999 11.2209V18.9999H17.9999V11.8199L14.9999 11.2209Z" fill="white"/>
            </g>
            <defs>
            <clipPath id="clip0_402_13827">
            <rect width="24" height="24" fill="white"/>
            </clipPath>
            </defs>
            </svg><span>who we are</span>
        </button>
        </a>
        <a href="portfolio.php">
        <button type="button" class="white-btn">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="btn-svg-icon" >
            <path d="M21 11.5C21.0034 12.8199 20.6951 14.1219 20.1 15.3C19.3944 16.7118 18.3098 17.8992 16.9674 18.7293C15.6251 19.5594 14.0782 19.9994 12.5 20C11.1801 20.0035 9.87812 19.6951 8.7 19.1L3 21L4.9 15.3C4.30493 14.1219 3.99656 12.8199 4 11.5C4.00061 9.92179 4.44061 8.37488 5.27072 7.03258C6.10083 5.69028 7.28825 4.6056 8.7 3.90003C9.87812 3.30496 11.1801 2.99659 12.5 3.00003H13C15.0843 3.11502 17.053 3.99479 18.5291 5.47089C20.0052 6.94699 20.885 8.91568 21 11V11.5Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          <span>our works</span> 
        </button>
        </a>
        </div>
      </div>
    </div>
  </div>
  <section class="section-padding">
    <div class="container">
      <ul class="nav nav-tabs mb-3 d-flex justify-content-center aos-animate" data-aos="fade-up" data-aos-duration="1000" id="ex1" role="tablist">
        <li class="nav-item portfolio-tab" role="presentation">
          <a class="nav-link active" id="ex1-tab-1" data-bs-toggle="tab" href="#ex1-tabs-1" role="tab"
            aria-controls="ex1-tabs-1" aria-selected="true">All</a>
        </li>
        <li class="nav-item portfolio-tab" role="presentation">
          <a class="nav-link" id="ex1-tab-2" data-bs-toggle="tab" href="#ex1-tabs-2" role="tab"
            aria-controls="ex1-tabs-2" aria-selected="false">Events</a>
        </li>
        <li class="nav-item portfolio-tab" role="presentation">
          <a class="nav-link" id="ex1-tab-3" data-bs-toggle="tab" href="#ex1-tabs-3" role="tab"
            aria-controls="ex1-tabs-3" aria-selected="false">Exhibition Booths</a>
        </li>
        <li class="nav-item portfolio-tab" role="presentation">
          <a class="nav-link" id="ex1-tab-4" data-bs-toggle="tab" href="#ex1-tabs-4" role="tab"
            aria-controls="ex1-tabs-4" aria-selected="false">Display Stands</a>
        </li>
        <li class="nav-item portfolio-tab" role="presentation">
          <a class="nav-link" id="ex1-tab-5" data-bs-toggle="tab" href="#ex1-tabs-5" role="tab"
            aria-controls="ex1-tabs-5" aria-selected="false">Mall Activations</a>
        </li>
        <li class="nav-item portfolio-tab" role="presentation">
          <a class="nav-link" id="ex1-tab-6" data-bs-toggle="tab" href="#ex1-tabs-6" role="tab"
            aria-controls="ex1-tabs-6" aria-selected="false">Vehicle Branding</a>
        </li>
        <li class="nav-item portfolio-tab" role="presentation">
          <a class="nav-link" id="ex1-tab-7" data-bs-toggle="tab" href="#ex1-tabs-7" role="tab"
            aria-controls="ex1-tabs-3" aria-selected="false">premium Podiums</a>
        </li>
      </ul>
      <div class="tab-content" id="ex1-content">
        <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
          <div class="row portfolio-mt">
            <div class="col-lg-4 aos-animate" data-aos="fade-right" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-1.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Gondola</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-8 aos-animate" data-aos="fade-left" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-2.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
          </div>
          <div class="row portfolio-mt">
            <div class="col-lg-4 aos-animate" data-aos="zoom-in" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-3.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Gondola</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-4 aos-animate" data-aos="zoom-in" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-4.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-4 aos-animate" data-aos="zoom-in" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-5.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
          </div>
          <div class="row portfolio-mt">
            <div class="col-lg-8 aos-animate" data-aos="fade-right" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-6.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-4 aos-animate" data-aos="fade-left" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-7.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Gondola</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
           
          </div>
        </div>
        <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
          <div class="row portfolio-mt">
            <div class="col-lg-4 aos-animate" data-aos="fade-right" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-1.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Gondola</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-8 aos-animate" data-aos="fade-left" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-2.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
          </div>
          <div class="row portfolio-mt">
            <div class="col-lg-4 aos-animate" data-aos="zoom-in" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-3.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Gondola</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-4 aos-animate" data-aos="zoom-in" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-4.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-4 aos-animate" data-aos="zoom-in" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-5.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
          </div>
          <div class="row portfolio-mt">
            <div class="col-lg-8 aos-animate" data-aos="fade-right" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-6.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-4 aos-animate" data-aos="fade-left" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-7.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Gondola</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
           
          </div>
        </div>
        <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
          <div class="row portfolio-mt">
            <div class="col-lg-4 aos-animate" data-aos="fade-right" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-1.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Gondola</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-8 aos-animate" data-aos="fade-left" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-2.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
          </div>
          <div class="row portfolio-mt">
            <div class="col-lg-4 aos-animate" data-aos="zoom-in" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-3.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Gondola</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-4 aos-animate" data-aos="zoom-in" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-4.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-4 aos-animate" data-aos="zoom-in" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-5.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
          </div>
          <div class="row portfolio-mt">
            <div class="col-lg-8 aos-animate" data-aos="fade-right" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-6.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-4 aos-animate" data-aos="fade-left" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-7.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Gondola</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
           
          </div>
        </div>
        <div class="tab-pane fade" id="ex1-tabs-4" role="tabpanel" aria-labelledby="ex1-tab-4">
          <div class="row portfolio-mt">
            <div class="col-lg-4 aos-animate" data-aos="fade-right" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-1.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Gondola</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-8 aos-animate" data-aos="fade-left" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-2.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
          </div>
          <div class="row portfolio-mt">
            <div class="col-lg-4 aos-animate" data-aos="zoom-in" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-3.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Gondola</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-4 aos-animate" data-aos="zoom-in" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-4.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-4 aos-animate" data-aos="zoom-in" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-5.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
          </div>
          <div class="row portfolio-mt">
            <div class="col-lg-8 aos-animate" data-aos="fade-right" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-6.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-4 aos-animate" data-aos="fade-left" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-7.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Gondola</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
           
          </div>
        </div>
        <div class="tab-pane fade" id="ex1-tabs-5" role="tabpanel" aria-labelledby="ex1-tab-5">
          <div class="row portfolio-mt">
            <div class="col-lg-4 aos-animate" data-aos="fade-right" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-1.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Gondola</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-8 aos-animate" data-aos="fade-left" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-2.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
          </div>
          <div class="row portfolio-mt">
            <div class="col-lg-4 aos-animate" data-aos="zoom-in" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-3.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Gondola</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-4 aos-animate" data-aos="zoom-in" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-4.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-4 aos-animate" data-aos="zoom-in" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-5.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
          </div>
          <div class="row portfolio-mt">
            <div class="col-lg-8 aos-animate" data-aos="fade-right" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-6.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-4 aos-animate" data-aos="fade-left" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-7.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Gondola</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
           
          </div>
        </div>
        <div class="tab-pane fade" id="ex1-tabs-6" role="tabpanel" aria-labelledby="ex1-tab-6">
          <div class="row portfolio-mt">
            <div class="col-lg-4 aos-animate" data-aos="fade-right" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-1.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Gondola</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-8 aos-animate" data-aos="fade-left" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-2.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
          </div>
          <div class="row portfolio-mt">
            <div class="col-lg-4 aos-animate" data-aos="zoom-in" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-3.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Gondola</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-4 aos-animate" data-aos="zoom-in" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-4.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-4 aos-animate" data-aos="zoom-in" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-5.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
          </div>
          <div class="row portfolio-mt">
            <div class="col-lg-8 aos-animate" data-aos="fade-right" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-6.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-4 aos-animate" data-aos="fade-left" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-7.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Gondola</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
           
          </div>
        </div>
        <div class="tab-pane fade" id="ex1-tabs-7" role="tabpanel" aria-labelledby="ex1-tab-7">

          <div class="row portfolio-mt">
            <div class="col-lg-4 aos-animate" data-aos="fade-right" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-1.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Gondola</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-8 aos-animate" data-aos="fade-left" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-2.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
          </div>
          <div class="row portfolio-mt">
            <div class="col-lg-4 aos-animate" data-aos="zoom-in" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-3.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Gondola</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-4 aos-animate" data-aos="zoom-in" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-4.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-4 aos-animate" data-aos="zoom-in" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-5.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
          </div>
          <div class="row portfolio-mt">
            <div class="col-lg-8 aos-animate" data-aos="fade-right" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-6.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Display Stand</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
            <div class="col-lg-4 aos-animate" data-aos="fade-left" data-aos-duration="1000">
              <div class="portfolio-box-img container__img-holder">
                <img src="img/portfolio/portfolio-7.png" alt="" class="img-fluid">
              </div>
              <div class="porflio-cntnt">
                <h5>Gondola</h5>
                <h6>Hasbro Gaming</h6>
              </div>
            </div>
           
          </div>
        </div>
      </div>
  

    </div>
  </section>

  <div class="img-popup">
    <img src="" alt="Popup Image">
    <div class="close-btn">
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
  </div>
  <?php include 'footer.php';?>

  <script src="https://kit.fontawesome.com/16b0815225.js" crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/script.js"></script>
  <script>
    AOS.init({
      disable: 'mobile'
    });
  </script>
  <script>
    $(function () {
      setTimeout(function () {
        $(".loader-mask").hide();
      }, 2000)

    })
  </script>
  <script>
    $(document).ready(function () {
      $(".owl-carousel").owlCarousel();
    });

    $('.test-carousel').owlCarousel({
      autoplay: true,
      autoplayTimeout: 3000,
      loop: true,
      margin: 10,
      nav: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
    $('.blog-carousel').owlCarousel({
      autoplay: true,
      autoplayTimeout: 3000,
      loop: true,
      margin: 10,
      nav: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 6
        }
      }
    })
    $('.loc-carousel').owlCarousel({
      autoplay: true,
      autoplayTimeout: 3000,
      loop: true,
      margin: 10,
      nav: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    })
  </script>
  <script>
    let count = document.querySelectorAll(".count")
    let arr = Array.from(count)



    arr.map(function (item) {
      let startnumber = 0

      function counterup() {
        startnumber++
        item.innerHTML = startnumber


        if (startnumber == item.dataset.number) {
          clearInterval(stop)
        }
      }

      let stop = setInterval(function () {
        counterup()
      }, 50)

    })
  </script>
    <script>
    $(function(){
 var pageScroll = 100;
  $(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= pageScroll ) {
           $('.nav-box').addClass('fixed');
        }
        else {
            $('.nav-box').removeClass('fixed');
        }
  });
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
});
  </script>
  <script>
    $(document).ready(function() {

// required elements
var imgPopup = $('.img-popup');
var imgCont  = $('.container__img-holder');
var popupImage = $('.img-popup img');
var closeBtn = $('.close-btn');

// handle events
imgCont.on('click', function() {
  var img_src = $(this).children('img').attr('src');
  imgPopup.children('img').attr('src', img_src);
  imgPopup.addClass('opened');
});

$(imgPopup, closeBtn).on('click', function() {
  imgPopup.removeClass('opened');
  imgPopup.children('img').attr('src', '');
});

popupImage.on('click', function(e) {
  e.stopPropagation();
});

});
  </script>
  <script>
  $(document).on('change','.sccope-work',function()
  {
    $('#hidden_div').hide();
    var id = $(this).val();
    
    if(id ==5)
    {
      $('#hidden_div').show();
    }
  })
</script>
</body>

</html>