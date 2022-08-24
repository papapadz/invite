<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ben & Steff</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </head>
    <body style="margin: 0 auto;">
      <iframe frameborder="0" 
      style="overflow:hidden; 
      display:block; position: absolute; height: 100%; width: 100%" src="{{ asset('res/vid/SavetheDate.mp4') }}"></iframe>
    </body>
    <script src="{{ asset('js/app.js') }}" ></script>
</html>
