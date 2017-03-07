<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <html>

        <head>
            <title>Socio</title>
            <meta name="description" content="website description" />
            <meta name="keywords" content="website keywords, website keywords" />
            <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
            <link rel="stylesheet" type="text/css" href="css/app.css" />
            <!-- modernizr enables HTML5 elements and feature detects -->
            <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('app.name', 'Laravel') }}</title>

            <!-- Styles -->
            <link href="/css/app.css" rel="stylesheet">

            <!-- Scripts -->
            <script>
                window.Laravel = {!! json_encode([
                        'csrfToken' => csrf_token(),
                ]) !!}
                ;
            </script>
        </head>

        <body>
            <div id="main">		

                @include ('layout\header')

                <div id="site_content">		  


                    @yield('content')

                </div><!--close site_content-->  	

                @include ('layout\footer')

            </div><!--close main-->

            <!-- javascript at the bottom for fast page loading -->
            <script type="text/javascript" src="js/jquery.min.js"></script>
            <script type="text/javascript" src="js/image_slide.js"></script>
            <!-- Latest compiled and minified CSS -->


            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

            <!-- Optional theme -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

            <!-- Latest compiled and minified JavaScript -->
            <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>!-->

        </body>
    </html>
