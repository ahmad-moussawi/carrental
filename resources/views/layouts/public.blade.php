<?php
$js = [
    'jquery.min.js',
    'jquery.superslides.js',
];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="{{url('css/libs.css')}}" />
        <link rel="stylesheet" href="{{url('css/style.css')}}" />

        <title>Car rental project</title>
    </head>

    <body class="inverse">

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

            @include('partials.masterhead')
            @yield('content')

          <div class="mastfoot">
            <div class="inner">
              <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
          </div>

        </div>
      </div>
    </div>

        @foreach($js as $file)
        <script src="{{ url('js/' . $file) }}"></script>
        @endforeach
        
        @yield('scripts')
    </body>
</html>



