<!DOCTYPE html> 
<html>
    <head>
	    <title>Project Stack</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=8" />
		<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/jquery-ui-1.8.10.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
		
		<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.10.min.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
    </head>
    <body class="c-index v-index">
		
		
		<div id="wrapper" class="container_12">
			<header>
				<h1>Project Stack ;)</h1>
			</header>
			<?php
			$stages = explode(',', 'Briefing,Layout,Aprovação,Desenvolvimento,Testes,Finalizado');
			?>
			<section class="stages alpha omega">
				<?php
				foreach ($stages as $x => $stage):
				?><div class="grid_2 column c<?php echo $x ?>">
					<h2><?php echo $stage ?></h2>
					<ul id="column<?php echo $x ?>">
						<li class="project">Project Title</li>
					</ul>
				</div>
				<?php
				endforeach;
				?>
				
			</section>
		</div>
    </body>
</html>

