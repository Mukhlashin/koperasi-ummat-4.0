@include('sweetalert::alert')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="uikit.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="assets/css/icons.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
    <script>
      function openNav() {
            
            var myNav = document.getElementById("navbarToggleExternalContent");
            
            myNav.style.display = myNav.style.display === 'none' ? '' : 'none';
            
            document.getElementById("demo").onclick = closeNav;
      
            var element = document.getElementById("uiNavbar");
      
            var x = window.matchMedia("(max-width: 700px)");
      
            if (x.matches) {
      
                  element.classList.remove("col-12");
      
                  element.classList.remove("col-md-12");
      
                  element.classList.add("col-6");
      
                  element.classList.add("col-6");
      
            } else{
      
                  element.classList.remove("col-md-12");
                 
                  element.classList.remove("col-12");
      
                  element.classList.add("col-md-10");
                  
                  element.classList.add("col-6");
            }
      }
      
      function closeNav() {
      
            document.getElementById("navbarToggleExternalContent").style.display = "none";
            
            document.getElementById("demo").onclick = openNav;
      
            var element = document.getElementById("uiNavbar");
      
            var x = window.matchMedia("(max-width: 700px)");
      
            if (x.matches) {
      
                  element.classList.remove("col-md-10");
      
                  element.classList.remove("col-6");
      
                  element.classList.add("col-12");
      
                  element.classList.add("col-md-12");
      
            } else{
      
                  element.classList.remove("col-sm-10");
      
                  element.classList.remove("col-md-10");
      
                  element.classList.add("col-md-12");
                  
                  element.classList.add("col-12");
            }
      }
      
    </script>
</head>
<body>
</body>
@section('styleDashboard')
<style>
      *{
        font-family: inter, sans-serif;
      }
      .nav-link{
        font-size: 18px;
      }
      .fa-house{
        font-size: 27px;
        color: white;
      }
      .fa-cubes{
        font-size: 27px;
        color: white;
      }
      .fa-clipboard{
        font-size: 27px;
        color: white;
      }
      .fa-user-large{
        font-size: 27px;
        color: white;
      }
      @media (max-width: 767.98px) { 
        .nav-icon{
          width: 20%;
        }
        .nav-text{
          width: 80%;
        }
        .left-content-card{
          text-align: left !important;
          width: 80%;
        }
        .right-content-card{
          width: 20%;
        }
        .height-content{
          height: 982px !important;
        }
      }
    </style>
@endsection
@section('styleJournal')
<style>
      *{
        font-family: inter, sans-serif;
      }
      .nav-link{
        font-size: 18px;
      }
      .fa-house{
        font-size: 27px;
        color: white;
      }
      .fa-cubes{
        font-size: 27px;
        color: white;
      }
      .fa-clipboard{
        font-size: 27px;
        color: white;
      }
      .fa-user-large{
        font-size: 27px;
        color: white;
      }
      @media (max-width: 767.98px) { 
        .nav-icon{
          width: 20%;
        }
        .nav-text{
          width: 80%;
        }
        .left-content-card{
          text-align: left !important;
          width: 80%;
        }
        .right-content-card{
          width: 20%;
        }
        .height-content{
          height: 982px !important;
        }
        .header-card{
         width: 70% !important;
       }
       .header-btn{
         width: 30% !important;
       }
       .navbar-right{
         justify-content: end !important;
         display: flex;
       }
      }
    </style>
@endsection
</html>