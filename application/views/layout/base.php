<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">		 

		<title><?= (isset($tittle))? $tittle : "WebSite"?></title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400" rel="stylesheet"> 
		
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="<?= base_url();?>public/css/bootstrap.min.css"/>

		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="<?= base_url();?>public/css/owl.carousel.css" />
		<link type="text/css" rel="stylesheet" href="<?= base_url();?>public/css/owl.theme.default.css" />
		
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="<?= base_url();?>public/css/font-awesome.min.css">        
        
		<!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="<?= base_url();?>public/css/style.css"/>


    </head>
    <body>

        
        <?php $this->load->view('layout/header'); ?>
               
        <!-- content page  -->
        <?php
            if( isset($view) ){
                $this->load->view($view);
            }
        ?>         

    
        <?php $this->load->view('layout/footer'); ?>

        <!-- Back to top -->
        <div id="back-to-top"></div>
        <!-- Back to top -->
            
        <!-- jQuery Plugins -->
        <script src="<?= base_url();?>public/js/jquery.min.js"></script>
        <script src="<?= base_url();?>public/js/bootstrap.min.js"></script>
        <script src="<?= base_url();?>public/js/owl.carousel.min.js"></script>
        <script src="<?= base_url();?>public/js/main.js"></script>

    </body>
</html>