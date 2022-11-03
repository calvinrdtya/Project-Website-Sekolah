<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Webku | {{ $title }}</title>
    <!-- <link href="public/css/final.css" rel="stylesheet" /> -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/final.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"> -->
    <script>
      if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
      } else {
        document.documentElement.classList.remove('dark');
      }
    </script>
  </head>
  <body>


    @include ('partials.navbar-tailwind')

    @yield('container')

    @include ('partials.footer-without')
      
  <script src="{{ asset('/js/script.js') }}"></script> 
  </body>
</html>