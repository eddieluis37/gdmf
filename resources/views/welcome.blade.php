<html>
	<head>
		<title>Bienvenidos a Guías</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Guias de Movilización de Frutas</div>

                        <canvas id="myCanvas" width="655" height="600"></canvas>
                            <script>
                              var canvas = document.getElementById('myCanvas');
                              var context = canvas.getContext('2d');
                              var imageObj = new Image();

                              imageObj.onload = function() {
                                context.drawImage(imageObj, 69, 50);
                              };
                              imageObj.src = 'frutas-y-verduras-vida.jpg';
                            </script>

                 <div class="quote">{{ Inspiring::quote() }}</div>

			</div>
		</div>
	</body>
</html>
