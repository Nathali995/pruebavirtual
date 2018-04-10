<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Votación</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		


        <!-- Styles -->
       <link rel="stylesheet" href="../css/principal.css" type="text/css">
    </head>
    <body>
        <div class="full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="">
                    <div class="col-md-9 ">
                    <img class="izquierda" alt="foto" src="../{{ $deportista->ruta_img }}" width="95%" height="445px">
					<img class="" alt="imag4" src="../images/imag4.png" width="95%" height="90%" style="margin-bottom:1px;">
                    </div>
					<div class="derecha full-height col-md-3">
                    <p style="font-family: Montserrat-ExtraBold; font-size:50px; margin-top:40px;"><strong>{{ $deportista->nombres }}</strong> <strong>{{ $deportista->apellidos }}</strong></p>
					<img style="float:left; padding-bottom:30px;" alt="nube1" src="../images/nube1.png" width="45%">
					<a class="btn linea-azul" style="font-size:24px; margin-right: 10px; padding: 19px 90px;" href="#"><strong>VOTAR</strong></a>
                    
					<img style="float:right; padding-top:30px;"alt="nube2" src="../images/nube2.png" width="60%">
					<div></div>
					<p style="font-family: Montserrat-Regular; font-size:50px;">compartir</p>
					<a href="https://www.facebook.com/sharer/sharer.php?u={{ url('/') }}" target="_blank"><img src="https://lh3.googleusercontent.com/-H8xMuAxM-bE/UefWwJr2vwI/AAAAAAAAEdY/N5I41q19KMk/s32-no/facebook.png"></a>
					<a href="http://www.twitter.com/home?status=http://www.tuweb.com/" target="_blank"><img src="https://lh5.googleusercontent.com/-xZVxH6CsUaQ/UefWwgi8o3I/AAAAAAAAEdk/reo5XS6z8-8/s32-no/twitter.png"></a>

					<img alt="nube3" src="../images/nube3.png" width="100%">
					</div>
                </div>

                
            </div>
        </div>
    </body>
</html>
