<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>MD - Alert 1.0</title>
	
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

	<script src="js/mdalert.js?v=<?php echo time(); ?>"></script>
	<script src="js/example.js?v=<?php echo time(); ?>"></script>
</head>
<body>

	<div class="title">
		<h1>MD - Alert V1.0</h1>
	</div>

	<!-- Fondo, boton cerrar -->
	<div class="mdalert" id="md_alert_dom">
		<div class="md_alert_inside" id="md_alert_inside">
			<div class="md_alert_content" id="md_alert_content"></div>
			<div class="md_alert_footer" id="md_alert_footer">
				<div class="md_alert_footer_other_btns" id="md_alert_footer_other_btns"></div>
				<a href="#" class="md_alert_btn_close" id="md_alert_btn_close">CERRAR</a>
			</div>
		</div>
	</div>

	<!-- Botones, Acciones -->
	<div class="wrapper">
		<div class="row">
			<div class="col-4 col-md-2">
				<a href="#" id="only_show" class="btn btn-success w-100">mostrar</a>
			</div>

			<div class="col-4 col-md-2">
				<a href="#" id="alert_with_actions" class="btn btn-success w-100">acciones </a>
			</div>

			<div class="col-4 col-md-2">
				<a href="#" id="alert_confirm" class="btn btn-success w-100">Eliminar </a>
			</div>

			<div class="col-4 col-md-2">
				<a href="#" id="alert_callback" class="btn btn-success w-100">Callback</a>
			</div>

			<div class="col-4 col-md-2">
				<a href="#" id="alert_no_close" class="btn btn-success w-100">No close</a>
			</div>
		</div>
	</div>
</body>
	<!-- Mileer leon - mileerdubanleon@gmail.com -->
</html>