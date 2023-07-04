  <!DOCTYPE html>
  <html class=" ">

  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
      <title>DKamar</title>
      <meta content="DKamar by Lgarin211" name="description" />
      <meta content="Lgarin211" name="author" />
      <link rel="manifest" href="{{ url('/vendor') }}/assets/images/icons/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="{{ url('/vendor') }}/assets/images/icons/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">
      <link href="{{ url('/vendor') }}/assets/css/preloader.css" type="text/css" rel="stylesheet"
          media="screen,projection" />
      <link href="{{ url('/vendor') }}/modules/materialize/materialize.min.css" type="text/css" rel="stylesheet"
          media="screen,projection" />
      <link href="{{ url('/vendor') }}/modules/fonts/mdi/materialdesignicons.min.css" type="text/css" rel="stylesheet"
          media="screen,projection" />
      <link href="{{ url('/vendor') }}/modules/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet"
          media="screen,projection" />
      <link href="{{ url('/vendor') }}/assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"
          id="main-style" />
  </head>

  <body class="isfullscreen html" data-header="light" data-footer="dark" data-header_align="center"
      data-menu_type="left" data-menu="light" data-menu_icons="on" data-footer_type="left" data-site_mode="light"
      data-footer_menu="show" data-footer_menu_style="light" data-theme="blue">
      {{-- <div class="preloader-background">
        <div class="preloader-wrapper">
          <div id="preloader"></div>
        </div>
      </div> --}}
      @yield('content')
      <script src="{{ url('/vendor') }}/modules/jquery/jquery-2.2.4.min.js"></script>
      <script src="{{ url('/vendor') }}/modules/materialize/materialize.js"></script>
      <script src="{{ url('/vendor') }}/modules/perfect-scrollbar/perfect-scrollbar.min.js"></script>
      <script src="{{ url('/vendor') }}/assets/js/variables.js"></script>
      <script type="text/javascript">
          $(document).ready(function() {
              $(".carousel-fullscreen.carousel-slider").carousel({
                  fullWidth: true,
                  indicators: true,
              }).css("height", $(window).height());
              setTimeout(autoplay, 3500);

              function autoplay() {
                  $(".carousel-fullscreen.carousel-slider").carousel("next");
                  setTimeout(autoplay, 3500);
              }
          });
      </script>
      <script src="{{ url('/vendor') }}/modules/app/init.js"></script>
      <script src="{{ url('/vendor') }}/modules/app/settings.js"></script>
      <script src="{{ url('/vendor') }}/modules/app/scripts.js"></script>
      <script type="text/javascript">
          document.addEventListener("DOMContentLoaded", function() {
              $('.preloader-background').delay(10).fadeOut('slow');
          });
      </script>

      <script type="text/javascript">
          $("select").formSelect();
      </script>
      <script type="text/javascript">
          $(document).ready(function() {
              $(".carousel-fullscreen.carousel-slider").carousel({
                  fullWidth: true,
                  indicators: true,
              }).css("height", $(window).height());
              setTimeout(autoplay, 3500);

              function autoplay() {
                  $(".carousel-fullscreen.carousel-slider").carousel("next");
                  setTimeout(autoplay, 3500);
              }
          });
      </script>
      <script type="text/javascript">
          $(".modal").modal();
      </script>
  </body>

  </html>
