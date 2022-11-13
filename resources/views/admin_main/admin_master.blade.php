<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta name="csrf-token" content="6xXsZMvfDyzuaq7kUfuLazB5ywcMvaLrEsOIxn3C">
    <!-- Title -->
    <title>মবিঅ-ক্ষুদ্রঋণ-ড্যাশবোর্ড</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('admin_main')}}/logo.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('admin_main')}}/css/app.css">
    <!-- Icons css -->
    <link href="{{asset('admin_main')}}/assets/admin/css/icons.css" rel="stylesheet">
    <!--  Custom Scroll bar-->
    <link href="{{asset('admin_main')}}/assets/admin/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" />
    <!-- Sidemenu css -->
    <link rel="stylesheet" href="{{asset('admin_main')}}/assets/admin/css/sidemenu.css">
    <!-- Maps css -->
    <link href="{{asset('admin_main')}}/assets/admin/plugins/jqvmap/jqvmap.min.css" rel="stylesheet">
    <!-- style css -->
    <link href="{{asset('admin_main')}}/assets/admin/css/style.css" rel="stylesheet">
    <link href="{{asset('admin_main')}}/assets/admin/css/style-dark.css" rel="stylesheet">
    <!-- Livewire Styles -->
    <style>
      [wire\:loading],
      [wire\:loading\.delay],
      [wire\:loading\.inline-block],
      [wire\:loading\.inline],
      [wire\:loading\.block],
      [wire\:loading\.flex],
      [wire\:loading\.table],
      [wire\:loading\.grid] {
        display: none;
      }

      [wire\:offline] {
        display: none;
      }

      [wire\:dirty]:not(textarea):not(input):not(select) {
        display: none;
      }

      input:-webkit-autofill,
      select:-webkit-autofill,
      textarea:-webkit-autofill {
        animation-duration: 50000s;
        animation-name: livewireautofill;
      }

      @keyframes livewireautofill {
        from {}
      }
    </style>
  </head>
  <body class="main-body app sidebar-mini antialiased">
    <!-- Loader -->
    <div id="global-loader">
      <img src="{{asset('admin_main')}}/assets/admin/img/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->
    <!-- main-sidebar -->
    @include('admin_main.admin_sidbar')
    <!-- main-sidebar -->
    <!-- main-content -->
    <div class="main-content app-content">
      <!-- main-header -->
      @include('admin_main.admin_header')
      <!-- /main-header -->
      <!-- container -->
      @yield('admin_contant')
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
    <!-- Footer opened -->
    @include('admin_main.admin_footer')
    <!-- Footer closed -->
    <!-- Back-to-top -->
    <a href="#top" id="back-to-top">
      <i class="las la-angle-double-up"></i>
    </a>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{asset('admin_main')}}/js/app.js" defer></script>
    <!-- Bootstrap Bundle js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- Ionicons js -->
    <script src="{{asset('admin_main')}}/assets/admin/plugins/ionicons/ionicons.js"></script>
    <!-- Moment js -->
    <script src="{{asset('admin_main')}}/assets/admin/plugins/moment/moment.js"></script>
    <!-- Rating js-->
    <script src="{{asset('admin_main')}}/assets/admin/plugins/rating/jquery.rating-stars.js"></script>
    <script src="{{asset('admin_main')}}/assets/admin/plugins/rating/jquery.barrating.js"></script>
    <!--Internal  Perfect-scrollbar js -->
    <script src="{{asset('admin_main')}}/assets/admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{asset('admin_main')}}/assets/admin/plugins/perfect-scrollbar/p-scroll.js"></script>
    <!--Internal Sparkline js -->
    <script src="{{asset('admin_main')}}/assets/admin/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Scroll bar Js-->
    <script src="{{asset('admin_main')}}/assets/admin/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- right-sidebar js -->
    <script src="{{asset('admin_main')}}/assets/admin/plugins/sidebar/sidebar.js"></script>
    <script src="{{asset('admin_main')}}/assets/admin/plugins/sidebar/sidebar-custom.js"></script>
    <!-- Eva-icons js -->
    <script src="{{asset('admin_main')}}/assets/admin/js/eva-icons.min.js"></script>
    <!-- Sticky js -->
    <script src="{{asset('admin_main')}}/assets/admin/js/sticky.js"></script>
    <!-- custom js -->
    <script src="{{asset('admin_main')}}/assets/admin/js/custom.js"></script>
    <!-- Left-menu js-->
    <script src="{{asset('admin_main')}}/assets/admin/plugins/side-menu/sidemenu.js"></script>
    <!-- Livewire Scripts -->
    <script src="{{asset('admin_main')}}//vendor/livewire/livewire.js?id=936e5d0fb0b76b631ba7" data-turbo-eval="false" data-turbolinks-eval="false"></script>
    <script data-turbo-eval="false" data-turbolinks-eval="false">
      if (window.livewire) {
        console.warn('Livewire: It looks like Livewire\'s @livewireScripts JavaScript assets have already been loaded. Make sure you aren\'t loading them twice.')
      }
      window.livewire = new Livewire();
      window.livewire.devTools(true);
      window.Livewire = window.livewire;
      window.livewire_app_url = '';
      window.livewire_token = '6xXsZMvfDyzuaq7kUfuLazB5ywcMvaLrEsOIxn3C';
      /* Make sure Livewire loads first. */
      if (window.Alpine) {
        /* Defer showing the warning so it doesn't get buried under downstream errors. */
        document.addEventListener("DOMContentLoaded", function() {
          setTimeout(function() {
            console.warn("Livewire: It looks like AlpineJS has already been loaded. Make sure Livewire\'s scripts are loaded before Alpine.\n\n Reference docs for more info: http://laravel-livewire.com/docs/alpine-js")
          })
        });
      }
      /* Make Alpine wait until Livewire is finished rendering to do its thing. */
      window.deferLoadingAlpine = function(callback) {
        window.addEventListener('livewire:load', function() {
          callback();
        });
      };
      document.addEventListener("DOMContentLoaded", function() {
        window.livewire.start();
      });
    </script>
    <script src="{{asset('admin_main')}}/assets/admin/plugins/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="{{asset('admin_main')}}/assets/admin/js/app-calendar.js"></script>
  </body>
</html>