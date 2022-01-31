<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Examen Blog</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="/css/main.css" />
</head>

<body class="is-preload">
	<div id="page-wrapper">

		<!-- Header -->
		<div id="header">

			<!-- Logo -->
			<div class="row">
				<section class="col-6 col-12-narrower">
					<img src="/Img/logo.png" alt="LKImagen" width="200" height="200">
				</section>
				<section class="col-6 col-12-narrower">
					<h1><a href="/" id="logo">Examen Blog <br> <em>Programaci&oacute;n Cliente/Servidor</em></a></h1>
					<h3><a href="/" id="logo"> <em>Universidad Politécnica de Tecámac</em></a></h3>
				</section>
			</div>

			<!-- Nav -->
			<nav id="nav">
				<ul>
					<li ><a href="/">Inicio</a></li>
					<li class="current">
						<a href="#">Temas</a>
						<ul>
							<li><a href="/Tema1">Conceptos de sistemas de información</a></li>
							<li><a href="/Tema2">Evolución de los sistemas de información</a></li>
							<li><a href="/Tema3">Conceptos de cliente y servidor</a></li>
							<li><a href="/Tema4">Sistemas de computadoras centrales y dedicadas</a></li>
							<li><a href="/Tema5">Sistemas de conexión libre y a través de redes</a></li>
							<li><a href="/Tema6">Sistemas con arquitectura Cliente/Servidor</a></li>
							<li><a href="/Tema7">Protocolos de comunicación en red</a></li>
							<li><a href="/Tema8">Sistemas de información de acuerdo a su arquitectura</a></li>
							<li><a href="/Tema9">Proceso de diagramación de componentes de la arquitectura Cliente/Servidor</a></li>
						</ul>
					</li>
					<li><a href="/Conclusion">Conclusi&oacute;n</a></li>
					<li><a href="/Referencias">Cibergraf&iacute;a</a></li>
				</ul>
			</nav>
		</div>

		<!-- Main -->
		<section class="wrapper style1">
			<div class="container">
				<div class="row gtr-200">
					<div class="col-12 col-12-narrower">
						<div id="content">

							<!-- Content -->

							<article>
								<header>
									<h2>Clasificar los sistemas de información de acuerdo a su arquitectura</h2>
									<img src="/Img/08.png" alt="LKImagen" width="400" height="150">
								</header>
								
                                <p>Los sistemas de dos niveles: </p>
								<p>
								Archivo — servidor. Las funciones de servidor en este caso se limitan habitualmente por el almacenamiento de datos (es posible también el almacenamiento de archivos ejecutados), y el procesamiento de datos tiene lugar solamente de parte de cliente. El número de clientes está limitado a causa de imposibilidad de acceso simultáneo para grabar un archivo. Las fallas principales de tal sistema son: la ausencia de integridad garantizada de la base de datos, el bajo nivel de protección, la baja productividad del sistema.

								</p>

								

								<br>

								<p>Los sistemas de dos niveles:  </p>
								<p>
								Cliente/Servidor, donde todos los cálculos se realizan en el servidor con los medios del Sistema de Gestión de Bases de Datos bajo la protección del sistema operativo del servidor. Las fallas principales de tal tipo son la velocidad insuficiente de funcionamiento y la incapacidad de realizar los algoritmos complejos de cálculo. Aquí también es necesario señalar numerosas decisiones donde el sistema en la realidad funciona como archivo — servidor a pesar de uso de los medios instrumentales cliente — servidor con todas las consecuencias negativas derivadas. Tal decisión se crea por lo habitual a causa de dificultad de realizar los algoritmos complejos de cálculo con los medios del Sistema de Gestión de Bases de Datos de servidor y de transferir los cálculos al puesto de trabajo del cliente.
								</p>
						

								<br>
								<p>Los sistemas de muchos niveles: </p>
								<p>
								Las funciones de procesamiento de datos son pasados a uno o varios servidores especiales, lo que permite dividir las funciones de almacenamiento, de procesamiento y de presentación de datos para el uso más efectivo. En dicha etapa las realizaciones de tal clase son más convenientes para la realización de funcionalidad requerida.

								</p>



								<br>
								

							</article>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Footer -->
		<div id="footer">
			<!-- Icons -->
			<ul class="icons">
				<li><a href="" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
				<li><a href="" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
				<li><a href="" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
				<li><a href="" class="icon brands fa-google-plus-g"><span class="label">Google+</span></a></li>
			</ul>

			<!-- Copyright -->
			<div class="copyright">
				<ul class="menu">
					<li>&copy; Ingeniería en Software</li>
					<li>Diseñado con la tecnología de: <a href="http://html5up.net">HTML5</a></li>
				</ul>
			</div>

		</div>

	</div>

	<!-- Scripts -->
	<script src="/js/jquery.min.js"></script>
	<script src="/js/jquery.dropotron.min.js"></script>
	<script src="/js/browser.min.js"></script>
	<script src="/js/breakpoints.min.js"></script>
	<script src="/js/util.js"></script>
	<script src="/js/main.js"></script>
</body>

</html>