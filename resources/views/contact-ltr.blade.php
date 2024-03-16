<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGCC | Contact Us</title>
    <link rel="shortcut icon" href="{{asset('img/icon.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href=" {{ asset('img/icon.png') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
   <!-- ------- NAVEBAR ---------- -->
   <nav class="navbar inner_pages">
        <div class="menu">
            <ul class="d-none d-xl-flex">
                <li><a href="http://127.0.0.1:8000/LTR/index.html">home</a></li>
                <li><a href="http://127.0.0.1:8000/LTR/services.html">services</a></li>
                <li><a href="http://127.0.0.1:8000/LTR/about.html">about</a></li>
                <li><a href="http://127.0.0.1:8000/LTR/programs.html">programs</a></li>
                <li><a href="http://127.0.0.1:8000/LTR/news.html">news</a></li>
                <li><a href="../RTL/index.html">AR <img src="../img/eg.png" alt=""></a></li>
                <li><a href="http://127.0.0.1:8000/contact/en" class="contact_menu">contact us</a></li>
            </ul>
            <button id="open-nav" class="open-menu d-xl-none border-0">
                <i class="fa-solid fa-bars"></i>
            </button>
            <a href="../RTL/index.html" class="lang d-xl-none">AR <img src="../img/eg.png" alt=""></a>
        </div>
        <figure id="logo_menu">
            <a href="index.html">
                <img src="../img/logo-2.png" class="img-fluid" alt="" title="IGCC">
            </a>
        </figure>
    </nav>
    <!-- ------- RESPONSIVE SIDEBAR ---------- -->
    <nav id="sidenavResponsive" class="">
        <div class="d-flex justify-content-between align-items-center">
            <p class="title">MAIN NAVIGATION</p>
            <button class="border-0" id="close"><i class="fas fa-xmark"></i></button>
        </div>
        <ul class="menu">
            <li><a href="http://127.0.0.1:8000/LTR/index.html">home</a></li>
            <li><a href="http://127.0.0.1:8000/LTR/services.html">services</a></li>
            <li><a href="http://127.0.0.1:8000/LTR/about.html">about</a></li>
            <li><a href="http://127.0.0.1:8000/LTR/programs.html">programs</a></li>
            <li><a href="http://127.0.0.1:8000/LTR/news.html">news</a></li>
            <li><a href="http://127.0.0.1:8000/contact/en" class="contact_menu active_link">contact us</a></li>
            <li><a href="../RTL/index.html" class="lang">AR <img src="../img/eg.png" alt=""></a></li>
        </ul>
    </nav> 
    
    <main class="inner_page">
        <div id="background_overlay"></div>
        <section class="contact_page container">
            <div class="row">
                <div class="col-lg-6 fit_height">
                    <h6 class="section_title_sm">Contact Us</h6>
                    <h3 class="section_title">We <span>are always</span> ready to help you....</h3>
                    <p class="mt-2" style="color: #7B7B7B;">
                        Thank you for contacting us. We will contact you as soon as possible
                    </p>
                    <div class="form-horizontal form-label-left mt-4">
                        <form id="form_contactUS" class="row" action="{{route('contact.store')}}" method="post">
                            @csrf
                            <div class="form-group col-12 mb-4">
                                <label for="name_input" class="d-none"> Name </label>
                                <input type="text" name="name" class="form-control" id="name_input" placeholder="Name" required>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mb-4">
                                <label for="email_input" class="d-none"> Email </label>
                                <input type="email" name="email" class="form-control" id="email_input" placeholder="Email" required>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mb-4">
                                <label for="phone_input" class="d-none"> Phone </label>
                                <input type="number" name="phone" class="form-control" id="phone_input" placeholder="Phone">
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mb-4">
                                <label for="job_input" class="d-none"> Job title </label>
                                <input type="text" name="job" class="form-control" id="job_input" placeholder="Job title">
                            </div>
                            <div class="form-group col-md-6 mb-4">
                                <label for="program_input" class="d-none"> Traning Program </label>
                                <input type="text" name="program" class="form-control" id="program_input" placeholder="Traning Program" required>
                            </div>
                            <div class="form-group col-12">
                                <label for="msg_input" class="d-none">Message</label>
                                <textarea id="msg_input" name="body" class="py-2" placeholder="write your message there...."></textarea>
                                @error('body')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-12 buttons">
                                <button class="btn more_btn w-100 py-4" id="confirmContactBtn" style="margin-top: 20px;" type="submit" data-url="" data-type="">Send Message</button>
                            </div>
                        </form>
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0 d-lg-flex justify-content-end align-items-center text-center">
                    <img src="../img/about-us.png" class="img-fluid" alt="">
                </div>
            </div>
        </section>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.7/umd/popper.min.js" integrity="sha512-uaZ0UXmB7NHxAxQawA8Ow2wWjdsedpRu7nJRSoI2mjnwtY8V5YiCWavoIpo1AhWPMLiW5iEeavmA3JJ2+1idUg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>