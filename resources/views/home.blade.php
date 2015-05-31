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
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="{{url('css/libs.css')}}" />
        <link rel="stylesheet" href="{{url('css/style.css')}}" />

        <title>Car rental project</title>
    </head>

    <body>
<div id="slides">
    <ul class="slides-container">
        @foreach(range(1, 5) as $row)
        <li>
            <div class="site-wrapper" style="background:url('{{ url("media/car ($row).jpg") }}')">

                <div class="site-wrapper-inner">

                    <div class="cover-container">

                        @include('partials.masterhead')
                        
                        <div class="inner cover">
                            <h1 class="cover-heading">CAR RENTAL</h1>
                            <p class="lead">Car Rental is one of the world’s leading car rental agencies.  Working with leading suppliers, we offer great prices on all car types,  including luxury cars, people carriers, minivans and automatic cars.</p>
                            <p class="lead">
                                <a href="#" class="btn btn-lg btn-default">RESERVE NOW</a>
                            </p>
                        </div>

                        <div class="mastfoot">
                            <div class="inner">
                                <p>all copyright reserved © {{ date('Y') }}</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </li>
        @endforeach
    </ul>

    <nav class="slides-navigation">
        <a href="#" class="next">
            <i class="fa fa-chevron-right"></i>
        </a>
        <a href="#" class="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
    </nav>
</div>





        @foreach($js as $file)
        <script src="{{ url('js/' . $file) }}"></script>
        @endforeach

        <script>
    $('#slides').superslides({
        animation: 'fade',
        play: 10000
    });
</script>
        
    </body>
</html>
