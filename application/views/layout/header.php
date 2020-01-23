<?php 

$home_menu = "";
$eco_menu = "";
$tec_menu = "";
$cien_menu = "";
$entre_menu = "";
$inter_menu = "";

if ( isset($active_home) ) {$home_menu = ' class="active" ';}
if ( isset($active_eco) ) {$eco_menu = ' class="active" ';}
if ( isset($active_tec) ) {$tec_menu = ' class="active" ';}
if ( isset($active_cien) ) {$cien_menu = ' class="active" ';}
if ( isset($active_entre) ) {$entre_menu = ' class="active" ';}
if ( isset($active_inter) ) {$inter_menu = ' class="active" ';}

?>

<!-- Header -->
<header id="header">
			
	<!-- Center Header -->
	<div id="center-header">
		<div class="container">
			<div class="header-logo">
			    <a href="#" class="logo"><img src="<?= base_url();?>public/img/logo.png" alt=""></a>
			</div>
                    
            <div class="header-ads">
				<!--img class="center-block" src="<?= base_url();?>public/img/ad-2.jpg" alt=""--> 
			</div>
		</div>
	</div>
	<!-- /Center Header -->
			
	<!-- Nav Header -->
	<div id="nav-header">
		<div class="container">
			<nav id="main-nav">
				<div class="nav-logo">
					<a href="#" class="logo"><img src="<?= base_url();?>public/img/logo-alt.png" alt=""></a>
				</div>
				<ul class="main-nav nav navbar-nav">
					<li <?=$home_menu;?> ><a href="#">Inicio</a></li>
					<li <?=$eco_menu;?> ><a href="#">Economía</a></li>
					<li <?=$tec_menu;?> ><a href="#">Tecnología</a></li>
					<li <?=$cien_menu;?> ><a href="#">Ciencia</a></li>
					<li <?=$entre_menu;?> ><a href="#">Entretenimiento</a></li>
					<li <?=$inter_menu;?> ><a href="#">Internacional</a></li>					
				</ul>
			</nav>
            
            <div class="button-nav">
				<!--button class="search-collapse-btn"><i class="fa fa-search"></i></button-->
				<button class="nav-collapse-btn"><i class="fa fa-bars"></i></button>
					<!--div class="search-form">
					    <form>
							<input class="input" type="text" name="search" placeholder="Search">
						</form>
					</div-->
			</div>
		</div>
	</div>
	<!-- /Nav Header -->
</header>
<!-- /Header -->