<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="মহিলা বিষয়ক অধিদপ্তর, মহিলা ও শিশু বিষয়ক মন্ত্রণালয়">
    <meta name="keywords" content="মহিলা বিষয়ক অধিদপ্তর">
    <meta name="author" content="মহিলা বিষয়ক অধিদপ্তর">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>মহিলাদের আত্ম-কর্মসংস্থাপনের জন্য ক্ষুদ্রঋণ কার্যক্রম</title>
    <!-- Favicon  -->
    <link rel="icon" href="logo.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Style css -->
    <link rel="stylesheet" href="{{asset('fontand/assets')}}/style.css" />
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('fontand/assets')}}/responsive.css" />
    <!-- Livewire Styles -->
    <style>
      body {
        background-color: #f0f0f0;
      }

      .main>.container {
        padding: 30px;
      }

      .reg-form {
        -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
        -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
        box-shadow: 0px 8px 20px 0px rgba(214, 217, 219, 0.2);
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 5px;
        background-color: #fafafa;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ddd;
        font-family: Roboto, sans-serif;
        padding: 20px;
      }

      .main-content .container {
        padding: 15px;
      }

      .reg-form h3 {
        margin: 20px;
      }

      .form-control,
      .reg-form {
        font-size: 14px;
      }

      .form-control:focus {
        color: #1a1a1a;
        background-color: #edf9ee;
        border-color: #aec5e1;
        outline: 0;
        box-shadow: 0 0 0 .1rem rgba(235, 242, 249, 0.3);
      }

      .requred-field::after {
        content: '*';
        color: rgba(255, 0, 0, 1);
      }

      div#photo-container {
        position: relative;
      }

      .uploded-photo {
        width: 130px;
        height: 130px;
        background-color: #fff;
        border-radius: 50%;
        border: 3px solid #40a433;
        position: absolute;
        right: 0;
        top: 0;
        overflow: hidden;
      }

      .photo-uploading {
        font-size: 14px;
        position: absolute;
        width: 100%;
        height: 100%;
        background: #fff;
        overflow: hidden;
        z-index: 2;
        text-align: center;
        vertical-align: middle;
        padding-top: 50px;
      }

      @media (max-width: 720px) {
        .navbar-dark .navbar-text {
          font-size: 30px;
          left: 65px;
        }

        .site-description {
          font-size: 16px;
          font-weight: 400;
          display: flex;
          margin-top: 8px;
        }

        .navbar-dark .navbar-toggler {
          background-color: rgba(0, 0, 0, .2);
          width: 40px;
          height: 40px;
        }

        .reg-form h2 {
          margin-top: 20px;
        }

        .reg-form .col-sm-6 {
          margin-top: 20px;
        }
      }
    </style>
  </head>
  <body class="">
    <!--====== Preloader Area Start ======-->
    <div class="preloader-main">
      <div class="preloader-wapper">
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
        <div id="preloader">
          <img src="loader.svg" class="loader-img" alt="Loader">
        </div>
      </div>
    </div>
    <!--====== Header Start ======-->
    @include('fontand.header')
    <!--====== Main Content ======-->
      @yield('main_contant')
    <!--====== Footer Area Start ======-->
    @include('fontand.footer')
    <!--====== Scroll To Top Area Start ======-->
    <div id="scrollUp" title="Scroll To Top">
      <i class="fas fa-arrow-up"></i>
    </div>
    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="{{asset('fontand/assets')}}/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- Plugins js -->
    <script src="{{asset('fontand/assets')}}/plugins.min.js"></script>
    <!-- Active js -->
    <script src="{{asset('fontand/assets')}}/active.js"></script>
  </body>
</html>