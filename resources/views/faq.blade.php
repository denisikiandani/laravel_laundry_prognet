
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/faq.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
      img{
        display: block;
        margin-left: auto;
        margin-right: auto;
      }
    </style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS Link -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <!-- Title dan Icon -->
    <title>Our FAQs</title>
    <link rel="icon" href="img/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>FAQ Section</title>

  </head>

  <body>
    <!-- NavBar -->
    <div style="width:100%;" data-aos="fade-down">
      <nav class="navbar navbar-expand-lg navbar-light navigasi" style="width: 100%;">
            <div class="container cnav" style="width: 100%;">
                <img src="img/logo.png" alt="Bootstrap" width="" height="76">
                <a class="navbar-brand nav-b ms-4" style="color: #0455c0" href="#">Tadika Laundry</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" >
                  <li class="nav-item nav-i">
                    <a class="nav-link  nav-l active" aria-current="page" href="/" style="color: #0455c0">Home</a>
                  </li>
                  <li class="nav-item mx-0.1">
                    <a class="nav-link nav-l " href="/login" style="color: #0455c0">Service</a>
                  </li>
                  <li class="nav-item mx-0.1">
                    <a class="nav-link nav-l " href="/pricing" style="color: #0455c0">Pricing</a>
                  </li>
                  <li class="nav-item mx-0.1">
                    <a class="nav-link nav-l " href="/faq" style="color: #0455c0">FAQs</a>
                  </li>
                  <li class="nav-item mx-0.1">
                    <a class="nav-link nav-l " href="/contact-create" style="color: #0455c0">Contact</a>
                  </li>
                  <li class="nav-item mx-0.1">
                    {{-- @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth --}}
    
    
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="btn btn-primary tombol px-4 mx-5" class="nav-link nav-l " >LOGIN</a>
                            @endif
                        {{-- @endauth
                    </div>
                @endif --}}
                    {{-- <a class="btn btn-primary tombol px-4" style="margin-left: 50px" href="/register">REGIS</a> --}}
                  </li>
                </ul>
    
        
              </div>
            </div>
          </nav>
      </div>

    <div class="text-center" data-aos="fade-up">
      <h1 class="mt-5 mb-5" data-aos="zoom-in"><strong>Frequently Asked Questions (FAQs)</strong></h1>
    </div>
    <img src="img/faq.png" alt="FAQ Illustration" style="width:450px;width:450px;" data-aos="zoom-in">
    <section class="container my-5" id="maincontent">
      <section id="accordion">
        <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary border-top" aria-controls="faq-17" aria-expanded="false" data-toggle="collapse" href="#faq-17" role="button">
          <div class="position-relative" data-aos="fade-up">
            <h2 class="h4 m-0 pr-3">
              How's our background?
            </h2>
            <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
              <i class="fa fa-plus"></i>
            </div>
          </div>
        </a>
        <div class="collapse" id="faq-17" style="">
          <div class="card card-body border-0 p-0" style="color: #0455c0">
            <p><strong>Tadika Laundry</strong> is a part of IT module integrated with the hotel main system 
              <strong> Tadika Mesra</strong> which established since October 2022.
            </p>
  
          </div>
        </div>
  
        <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary border-top" aria-controls="faq-18" aria-expanded="false" data-toggle="collapse" href="#faq-18" role="button">
          <div class="position-relative" data-aos="fade-up" style="text-decoration: none">
            <h2 class="h4 m-0 pr-3">
              What is our main goal?
            </h2>
            <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
              <i class="fa fa-plus"></i>
            </div>
          </div>
        </a>
        <div class="collapse" id="faq-18" style="">
          <div class="card card-body border-0 p-0" style="color: #0455c0">
            <p>Our official mission is to provide an end to end cleaning for every guests' sheets in form of any clothes you'd like to clean.</p>
            <p>
            </p>
          </div>
        </div>
  
        <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary border-top" style="color: #0455c0" aria-controls="faq-19" aria-expanded="false" data-toggle="collapse" href="#faq-19" role="button" >
          <div class="position-relative" data-aos="fade-up">
            <h2 class="h4 m-0 pr-3">
              What services we present to you?
            </h2>
            <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
              <i class="fa fa-plus"></i>
            </div>
          </div>
        </a>
        <div class="collapse" id="faq-19" style="">
          <div class="card card-body border-0 p-0" style="color: #0455c0">
            <p>In order to reach our purpose, we offer you various services such as <strong>laundry</strong>, <strong> dry cleaning </strong>, <strong>wash-only</strong>, <strong>dry-only</strong> and <strong>iron-only</strong> etc.</p>
            <p>
            </p>
          </div>
        </div>
  
        <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary  border-top" aria-controls="faq-20" aria-expanded="false" data-toggle="collapse" href="#faq-20" role="button">
          <div class="position-relative" data-aos="fade-up">
            <h2 class="h4 m-0 pr-3">
              What is the best email to reach you at?
            </h2>
            <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
              <i class="fa fa-plus"></i>
            </div>
          </div>
        </a>
        <div class="collapse" id="faq-20">
          <div class="card card-body border-0 p-0" style="color: #0455c0">
            <p>The best email for any inquiries is <strong>laundry@tadika.com.</strong></p>
            <p>
            </p>
          </div>
        </div>
  
        <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary  border-top" aria-controls="faq-21" aria-expanded="false" data-toggle="collapse" href="#faq-21" role="button">
          <div class="position-relative" data-aos="fade-up">
            <h2 class="h4 m-0 pr-3">
              Where can I read more about this company?
            </h2>
            <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
              <i class="fa fa-plus"></i>
            </div>
          </div>
        </a>
        <div class="collapse" id="faq-21">
          <div class="card card-body border-0 p-0" style="color: #0455c0">
            <p>Our team will be glad if you check out more about us right through our website <strong>www.laundry.tadika.com</strong> kindly chat us via DM.</p>
            <p>
            </p>
          </div>
        </div>
  
        <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary  border-top" aria-controls="faq-22" aria-expanded="false" data-toggle="collapse" href="#faq-22" role="button">
          <div class="position-relative" data-aos="fade-up">
            <h2 class="h4 m-0 pr-3" >
              What is the best time to call?
            </h2>
            <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
              <i class="fa fa-plus"></i>
            </div>
          </div>
        </a>
        <div class="collapse" id="faq-22">
          <div class="card card-body border-0 p-0">
            <p>The best time to call is 24/7! We are always available to answer any questions.</p>
            <p>
            </p>
          </div>
        </div>
      </section>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
  </body>
</html>
