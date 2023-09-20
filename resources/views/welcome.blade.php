<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIPUSAT EXAM</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ url('assets/css/style.min.css')}}">

    <!-- Additional styling for animation -->
    <style>
        .btn-custom {
            transform: scale(1);
            transition: transform 0.2s ease-in-out;
        }

        .btn-custom:hover {
            transform: scale(1.1);
        }
        .white {
          background-color: rgb(255, 255, 255) !important;
          padding: 20px !important;
          box-shadow: -25px 0px 39px 12px rgba(252, 252, 252, 0.933) !important;
        }
        .white1 {
          background-color: rgb(255, 255, 255) !important;
        }
        .text {
          color: rgb(95, 95, 95);
        }
        .love {
          color: red;
          font-weight: bold;
        }
    </style>
</head>
<body class="antialiased" id="body" data-spy="scroll" data-target=".navbar" data-offset="100">

    <header class="white1" id="header-section">
        <nav class="white1 navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
            <!-- Navbar content here -->
        </nav>
    </header>

    <div class="banner white">
        <div class="container ">
          <img src="{{ asset('asset/st.png') }}" alt="" class="img-fluid">
            <h3 class="font-weight-semibold">system informasi penilaian ujian sekolah Anti-Cheating</h3>
            <h6 class="font-weight-normal text-muted pb-3">"Discover the Future of Fair Assessments with our cutting-edge School Exam Evaluation System - Anti-Cheating!."</h6>
            <div class="d-flex justify-content-center">
                <a href="{{ url('/admin/login') }}" class="btn btn-info btn-custom mr-2"><b>Admin</b></a>
                <a href="{{ url('/login') }}" class="btn btn-success btn-custom mx-2"><b>Student</b></a>
                <a href="{{ route('register') }}" class="btn btn-success btn-custom ml-2"><b>Register</b></a> 
              </div>
              <br>
              <a href="documentasi" class="btn btn-outline-danger"><b>Documentasi -></b></a> 
        </div> <br>
        <p class="text">Build with <span class="love">♥</span> from SIPUSAT PKM UBSI Tegal</p>
    </div>

    
    <!-- jQuery -->
    <script src="{{ url('assets/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{ url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Additional scripts -->
    <script>
        // You can add any additional scripts here if needed
    </script>
</body>
</html>
