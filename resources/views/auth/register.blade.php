@include('sweetalert::alert')

<!DOCTYPE html>
<html lang="en" class="bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="assets/images/favicon.png" rel="icon" type="image/png">

    <!-- Basic Page Needs
        ================================================== -->
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Socialite is - Professional A unique and beautiful collection of UI elements">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="assets/css/icons.css">

    <!-- CSS 
    ================================================== --> 
    <link rel="stylesheet" href="assets/css/uikit.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> 

</head> 
<body>

    <body class="bg-gray-100">


        <div id="wrapper" class="flex flex-col justify-between h-screen">
    
            <!-- Content-->
            <div id="app">
                <section class="section">
                  <div class="d-flex flex-wrap align-items-stretch">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                      <div class="p-4 m-3">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Logo_of_Ministry_of_Communication_and_Information_Technology_of_the_Republic_of_Indonesia.svg/1030px-Logo_of_Ministry_of_Communication_and_Information_Technology_of_the_Republic_of_Indonesia.svg.png" alt="logo" width="150" class="shadow-light mb-5 mt-2">
                        <form method="POST" action="{{ route('post-register') }}" class="needs-validation" novalidate="">
                        {{ csrf_field()}}
                            <div class="max-w-xl lg:my-0 my-12 mx-auto">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 form-group">
                                            <label for="email">Nama</label>
                                            <input id="email" type="email" class="form-control border" name="username" tabindex="1" required autofocus>
                                            <div class="invalid-feedback">
                                              Please fill in your name
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control border" name="email" tabindex="1" required autofocus>
                                        <div class="invalid-feedback">
                                          Please fill in your email
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Password</label>
                                        <input id="password" type="password" class="form-control border" name="password" tabindex="1" required autofocus>
                                        <div class="invalid-feedback">
                                          Please fill in your password
                                        </div>
                                    </div>
                                    <div class="checkbox">
                                        <input  class="border" type="checkbox" id="chekcbox1" checked="">
                                        <label for="chekcbox1"><span class="checkbox-icon"></span> I agree to the <a href="pages-terms.html" target="_blank" class="uk-text-bold uk-text-small uk-link-reset"> Terms and Conditions </a>
                                        </label>
                                    </div>
                            </div>
                          <div class="form-group text-right">
                            <a href="auth-forgot-password.html" class="float-left mt-3">
                              Forgot Password?
                            </a>
                            <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                              Get started
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12 background-walk-y image-login">
                      <img src="assets/images/plant.jpg" alt="" class="darkened-image2">
                    </div>
                  </div>
                </section>
              </div>
            
              <!-- General JS Scripts -->
              <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
              <script src="../assets/js/stisla.js"></script>
            
              <!-- JS Libraies -->
            
              <!-- Template JS File -->
              <script src="../assets/js/scripts.js"></script>
              <script src="../assets/js/custom.js"></script>
            
              <!-- Page Specific JS File -->

        
   
    <!-- For Night mode -->
    <script>
        (function (window, document, undefined) {
            'use strict';
            if (!('localStorage' in window)) return;
            var nightMode = localStorage.getItem('gmtNightMode');
            if (nightMode) {
                document.documentElement.className += ' night-mode';
            }
        })(window, document);
    
        (function (window, document, undefined) {
    
            'use strict';
    
            // Feature test
            if (!('localStorage' in window)) return;
    
            // Get our newly insert toggle
            var nightMode = document.querySelector('#night-mode');
            if (!nightMode) return;
    
            // When clicked, toggle night mode on or off
            nightMode.addEventListener('click', function (event) {
                event.preventDefault();
                document.documentElement.classList.toggle('dark');
                if (document.documentElement.classList.contains('dark')) {
                    localStorage.setItem('gmtNightMode', true);
                    return;
                }
                localStorage.removeItem('gmtNightMode');
            }, false);
    
        })(window, document);
    </script>
  
    <!-- Javascript
    ================================================== -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="assets/js/tippy.all.min.js"></script>
    <script src="assets/js/uikit.js"></script>
    <script src="assets/js/simplebar.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

</body>
</html>