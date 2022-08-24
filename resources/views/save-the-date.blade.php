<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ben & Steff</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            div.lockscreen {
                position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 375px;
  height: 667px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  overflow: hidden;
            }
            html {
  box-sizing: border-box;
}

*, *::after, *::before {
  box-sizing: inherit;
}

*,
*:before,
*:after {
  box-sizing: border-box;
  outline: none;
}

html {
  font-family: "Roboto", sans-serif;
  font-size: 16px;
  font-smooth: auto;
  font-weight: 300;
  line-height: 1.5;
  color: #444;
}

body {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100vh;
}

figure {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 375px;
  height: 667px;
  border-radius: 10px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  overflow: hidden;
}
figure:hover {
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
}
figure:hover img {
  transform: scale(1.25);
}
figure:hover figcaption {
  bottom: 0;
}
figure span {
    width: 100%;
    text-align: right;
    color: white;
    position: absolute;
    padding: 5px; 
}
figure h1 {
    top:10vh;
    width: 100%;
  position: absolute;
  margin: 0;
  padding: 0;
  text-align: center;
  color: white;
  font-size: 80px;
  line-height: 1;
  text-shadow: 0 0 3px #5ba9f1, 0 0 5px #000000;
}
figure h2 {
    width: 100%;
    top:19vh;
    position: absolute;
    text-align: center;
  color: white;
  font-size: 70px;
  text-shadow: 0 0 3px #5ba9f1, 0 0 5px #000000;
}
span.icon {
    width: 100%;
    top:30vh;
    position: absolute;
    text-align: center;
}
button.audio {
    width: 100%;
    top:50vh;
    position: absolute;
    text-align: center;
}
figure img {
  height: 100%;
  transition: 0.75s;
}
figure figcaption {
  position: absolute;
  bottom: -55%;
  left: 0;
  width: 100%;
  margin: 0;
  padding: 30px;
  background-color: rgba(0, 0, 0, 0.85);
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
  color: white;
  line-height: 1;
  transition: 0.25s;
}
figure figcaption h3 {
  padding: 0;
  text-align: center;
}
figure figcaption p {
  font-size: 14px;
  line-height: 1.75;
}
figure figcaption button {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 10px 0 0;
  padding: 10px 30px;
  background-color: #1abc9c;
  border: none;
  border-radius: 5px;
  color: white;
  font-size: 14px;
}
        </style>
    </head>
    <body class="bg-dark">
        <div id="app" class="d-flex align-items-center flex-column justify-content-center">
          <video controls>
            <source src="{{ asset('res/vid/SavetheDate.mp4') }}" type="video/mp4">
          </video>
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}" ></script>
</html>
