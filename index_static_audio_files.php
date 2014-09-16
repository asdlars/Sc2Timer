<!DOCTYPE html>
<html>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<style type="text/css">
	.body,html {
		background :#060a27 url("http://static.websimages.com/static/finchTemplates/backgrounds/textures/4.png") center top repeat;
	}
	.body {
		text-align: center;
	}
	.reminder{
		width: 70%;
		margin: 20px 15%;
		font-size: 2.2em
	}
	h1 {
		text-align: center;
	}
	h1,h2,h3 {
		color:white;
	}
	</style>

	<script type="text/javascript">


	$( document ).ready(function() {

	var faster = 0.725;

	var interMule = null;
	$("#btn-mule").click(function() {

	    var rep = 90000*faster;

	    if (interMule) {
	        $(this).removeClass("btn-success");
	        $(this).addClass("btn-danger");
	        clearInterval(interMule);
	        interMule = null;
	    } else {
	        interMule = setInterval(function () {
				$("#mule").trigger("play")
	        }, rep);
	        $(this).removeClass("btn-danger");
	        $(this).addClass("btn-success");
	    }
	});

	var interWorker = null;
	$("#btn-worker").click(function() {

	    var rep = 17000*faster;

	    if (interWorker) {
			$(this).removeClass("btn-success");
	        $(this).addClass("btn-danger");
	        clearInterval(interWorker);
	        interWorker = null;
	    } else {
			$(this).removeClass("btn-danger");
	        $(this).addClass("btn-success");
	        interWorker = setInterval(function () {
				$("#worker").trigger("play")
	        }, rep);
	    }
	});

	var interLarva = null;
	$("#btn-larva").click(function() {

	    var rep = 45000*faster;

	    if (interLarva) {
			$(this).removeClass("btn-success");
	        $(this).addClass("btn-danger");
	        clearInterval(interLarva);
	        interLarva = null;
	    } else {
			$(this).removeClass("btn-danger");
	        $(this).addClass("btn-success");
	        interLarva = setInterval(function () {
				$("#larva").trigger("play")
	        }, rep);
	    }
	});

	var interChrono = null;
	$("#btn-chrono").click(function() {

	    var rep = 45000*faster;

	    if (interChrono) {
			$(this).removeClass("btn-success");
	        $(this).addClass("btn-danger");
	        clearInterval(interChrono);
	        interChrono = null;
	    } else {
			$(this).removeClass("btn-danger");
	        $(this).addClass("btn-success");
	        interChrono = setInterval(function () {
				$("#chrono").trigger("play")
	        }, rep);
	    }
	});

	var interMarines = null;
	$("#btn-marines").click(function() {

	    var rep = 25000*faster;

	    if (interMarines) {
			$(this).removeClass("btn-success");
	        $(this).addClass("btn-danger");
	        clearInterval(interMarines);
	        interMarines = null;
	    } else {
			$(this).removeClass("btn-danger");
	        $(this).addClass("btn-success");
	        interMarines = setInterval(function () {
				$("#marines").trigger("play")
	        }, rep);
	    }
	});

});
</script>
	
	<div class="body">
		<h1>Manten tu econom&iacute;a saludable!</h1>
		<h3>Activa las unidades en las que quieres ayuda para macrear mientras juegas y listo. Recibir&aacutes aviso cada vez que puedas/debas hacer alguna de las acciones activas, GLHF.</h3>
		<audio id="worker">
		  <source src="audio/build_worker.mp3" type="audio/mpeg">
		</audio>
		<audio id="larva">
		  <source src="audio/inject_larva.mp3" type="audio/mpeg">
		</audio>
		<audio id="mule">
		  <source src="audio/calldown_mule.mp3" type="audio/mpeg">
		</audio>
		<audio id="chrono">
		  <source src="audio/chronoboost_time.mp3" type="audio/mpeg">
		</audio>
		<audio id="marines">
		  <source src="audio/more marines.mp3" type="audio/mpeg">
		</audio>

		<button voice="Calldown mule" repeat="1000" valor="E.M.U.L.E" target="mule" type="button" class="btn btn-danger reminder" id="btn-mule"><img src="img/Calldown_mule.gif" style="margin:5px 15px 5px 5px;"/>Calldown E.M.U.L.E</button>
		<button voice="Build worker" repeat="17000" valor="Workers" target="worker" type="button" class="btn btn-danger reminder" id="btn-worker"><img src="img/Gather.png" style="margin:5px 15px 5px 5px;"/>Build Workers</button>
		<button voice="Inject larva" repeat="4000" valor="Larvas" target="larva" type="button" class="btn btn-danger reminder" id="btn-larva"><img src="img/Spawn_larva.gif" style="margin:5px 15px 5px 5px;"/>Inject Larva</button>
		<button voice="Chronoboost time" repeat="5000" valor="Chronoboost" target="chrono" type="button" class="btn btn-danger reminder" id="btn-chrono"><img src="img/62px-Chrono_boost.png" style="margin:5px 15px 5px 5px;"/>Chronoboost</button>
		
		<h2>Tambien puedes activar los siguientes recordatorios</h2>
		<button voice="More marines" repeat="25000" valor="Marines" target="marines" type="button" class="btn btn-danger reminder" id="btn-marines"><img src="img/60px-Combat_Shield.png" style="margin:5px 15px 5px 5px;"/>Marines</button>
	</div>


</html>