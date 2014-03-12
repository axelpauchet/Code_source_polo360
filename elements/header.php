
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Mon blog</title>
    <meta name="description" content="Démo de C5">
    <meta name="author" content="Axel Pauchet">
	<?php Loader::element('header_required'); ?>
	<link href="<?php echo $this->getThemePath();?>/assets/css/pure-min.css" rel="stylesheet">
	<link rel="stylesheet" media="screen" type="text/css" title="theme" href="<?php echo $this->getThemePath();?>/assets/css/grids.css">
	<link rel="stylesheet" media="screen" type="text/css"  title="theme" href="<?php echo $this->getThemePath();?>/assets/css/moncss.css">
    
	<style>
		body{ 
				background-image:url("<?php echo $this->getThemePath();?>/assets/images/bg.png");
				background-repeat:repeat-x;
				font-family: 'Actor', sans-serif;
			}
	</style>		
  </head>

  <body>
		
		<!-- Grille -->
		<div class="pure-g">
			
			<div class="container" id="bg">
				<!-- Logo -->
				<div class="pure-u-1">
					<div class="pure-u-1-3" id=logo>
						<img src="<?php echo $this->getThemePath();?>/assets/images/Logo.png" alt="bar">
					</div>
					<div class="pure-u-2-3">
			<?php		          
    		$a= new GlobalArea('menu');
			$a->display($c);
			?>
						<!--start menu
						<nav>
							<ul>
								<li><a href="#">HOME </a></li>
								<li><a href="#">PRODUCT </a></li>
								<li><a href="#">SERVICES </a></li>
								<li><a href="#">BLOG </a></li>
								<li><a href="#">CONTACT </a></li>
							</ul>
						</nav>
						end menu-->
					</div>
				</div>
			</div>
          
        