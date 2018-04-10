<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Reto</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
		<link rel="stylesheet" href="css/principal.css" type="text/css">
		  <script src="js/jquery.time-to.js"></script>
        <script>
        $('#countdown').timeTo({
		timeTo: new Date(new Date('Sat Apr 14 2018 09:00:00 GMT-0500 (Hora est. Pacífico, Sudamérica)')),
		displayDays: 2,
		theme: "black",
		displayCaptions: true,
		fontSize: 48,
		captionSize: 14
		});
		</script>
    </head>
    <body>
	<header >
		<nav  style="background-color:#00A1E4;">
		  <div class="container">
			<div class="navbar-header">
			  <a class="navbar-brand" href="#" >
				<img class="logo" alt="Brand" src="images/logo.png">
			  </a>
			</div>
			<div class="menu">
			<p class="navbar-text navbar-left"><a href="#votacion" class="blanco sub">Votación</a></p>
			<p class="navbar-text navbar-left"><a href="#1" class="blanco sub">Bases del concurso</a></p>
			<p class="navbar-text navbar-left"><a href="#2" class="blanco sub">Términos y condiciones</a></p>
			</div>
		  </div>
		</nav>

		 
	</header>
	
        <div class="full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(Auth::check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(url('/login')); ?>">Login</a>
                        <a href="<?php echo e(url('/register')); ?>">Register</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                
		<section class="cabecera" >
			<img alt="imagen1" src="images/header2.png" width="100%" height="100%" style="margin-top: 30px;">
		</section>
				<section class="sec1" id="1">
					<div class="col-md-6">
					<img class="centrar" alt="imagen1" src="images/sec1.png" width="100%" height="420px">
					</div>
					<div class="col-md-6 centrar" >
						<p style="font-size:34px; text-align:left;"><strong>Elije a tu deportista favorito y dale la oportunidad de poder subir al Cotopaxi con dos expertos de montaña.</strong></p>
					
					
						<p style="font-size:32px; text-align:left;">¡Vota y comparte tu publicación para que más amigos se sumen a tu apoyo!</p>
					
					<a class="btn linea-naranja" style="font-size:22px; margin-right: 400px; padding: 19px 10px;" href="<?php echo e(url('/')); ?>/#votacion"><strong>IR A VOTACIONES</strong></a>
					</div>
				</section>
				<section class="sec2" id="2">
					<div class="col-md-6">
						<p style="font-size:20px; color:#326b8e;">El tiempo para elegir a los ganadores termina en: </p>
						 <div id="countdown">
						 </div>
						 
					</div>
					<div class="col-md-6">
						<img class="centrar" alt="imagen2" src="images/imag2.png" width="90%" height="350px">
					</div>
				</section>
				<section class="votacion" id="votacion">
				<p class="col-md-12" style="color:#e6e7e8;font-size:40px;"><strong>Vota por tu deportista favorito</strong></p>
				 <hr width="90%"   style="border-top-width: 4px;">
				<div class="col-md-12" style="padding-left:50px; padding-right:50px;">
				
				<?php $__currentLoopData = $deportistas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deportista): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					
					<a class="listadoImagenes " style="background:url('<?php echo e($deportista->ruta_img); ?>'); background-size: contain;" href="<?php echo e(url('/deportista')); ?>/<?php echo e($deportista->id); ?>">
					<div class="transbox">
					<p style="padding-top:120px; font-size:40px; color:#fff;"><strong><?php echo e($deportista->nombres); ?></strong> </p>
					<p style="font-size:40px;"><strong><?php echo e($deportista->apellidos); ?></strong></p>
					</div>
					</a>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				
				<img alt="imagen3" src="images/imag3.png" width="100%">
				
				</section>
				
            </div>
        </div>
    </body>
</html>
