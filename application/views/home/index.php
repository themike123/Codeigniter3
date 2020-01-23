
<div id="owl-carousel-1" class="owl-carousel owl-theme center-owl-nav">

	<?php foreach( $slider as $item ){  
		$item = (object)$item;
	?>

	<article class="article thumb-article">
		<div class="article-img">
			<img src="<?= $item->image_url?>" alt="">
		</div>
		<div class="article-body">
			<ul class="article-info">
				<li class="article-category"><a href="<?= $item->link?>"><?= $item->title?></a></li>
				<li class="article-type"><i class="fa fa-camera"></i></li>
			</ul>
			<h2 class="article-title"><a href="#"><?= substr($item->description,0,50); ?></a></h2>
			<ul class="article-meta">
				<li><i class="fa fa-clock-o"></i><?= $item->date?></li>
					<!--li><i class="fa fa-comments"></i> 33</li-->
			</ul>
		</div>
	</article>
	
	<?php } ?>
			
</div>	



<!-- SECTION -->
<div class="section">
	<!-- CONTAINER -->
	<div class="container">
		<!-- ROW -->
		<div class="row">
			<!-- Main Column -->
			<div class="col-md-12">
				<!-- section title -->
				<div class="section-title">
					<h2 class="title">Lo más visto</h2>
					<!-- tab nav -->

					<!-- /tab nav -->
				</div>
				<!-- /section title -->
						
				<!-- Tab content -->
				<div class="tab-content">
					<!-- tab1 -->
					<div id="tab1" class="tab-pane fade in active">
						<!-- row -->
						<div class="row">
							<?php 
								$i=1;
								foreach( $mas_vistas as $item ){  
									$item = (object)$item;

									if($i>4){
									break;
									}
								?>
								<div class="col-md-3 col-sm-6">

									<article class="article">
										<div class="article-img">
											<a href="<?= $item->link?>">
												<img src="<?= $item->image_url?>" alt="">
											</a>
											<ul class="article-info">
												<li class="article-type"><i class="fa fa-camera"></i></li>
											</ul>
										</div>
										<div class="article-body">
											<h4 class="article-title"><a href="<?= $item->link?>"><?= $item->title?></a></h4>
											<ul class="article-meta">
												<li><i class="fa fa-clock-o"></i><?= $item->date?></li>
												<!--li><i class="fa fa-comments"></i> 33</li-->
											</ul>
										</div>
									</article>		

								</div>
								
								<?php $i++; } ?>

						</div>
						<!-- /row -->
								
						<!-- row -->
						<div class="row">
							<!-- Column 1 -->


							<?php 
							$j=4;
							for ($i=0; $i < 2; $i++) { 
							?>

							<div class="col-md-4 col-sm-6">
							
								<article class="article widget-article">
									<div class="article-img">
										<a href="<?= $mas_vistas[$j]['link'] ?>">
											<img src="<?= $mas_vistas[$j]['image_url'] ?>" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="<?= $mas_vistas[$j]['link'] ?>"><?= $mas_vistas[$j]['title'] ?></a></h4>
											<ul class="article-meta">
												<li><i class="fa fa-clock-o"></i><?= $mas_vistas[$j]['date'] ?></li>
												<!--li><i class="fa fa-comments"></i> 33</li-->
											</ul>
										</div>
								</article>
								
								<?php $j++; ?>
																				
								<article class="article widget-article">
									<div class="article-img">
										<a href="<?= $mas_vistas[$j]['link'] ?>">
											<img src="<?= $mas_vistas[$j]['image_url'] ?>" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="<?= $mas_vistas[$j]['link'] ?>"><?= $mas_vistas[$j]['title'] ?></a></h4>
											<ul class="article-meta">
												<li><i class="fa fa-clock-o"></i><?= $mas_vistas[$j]['date'] ?></li>
												<!--li><i class="fa fa-comments"></i> 33</li-->
											</ul>
										</div>
								</article>										
							
							</div>

							<?php
								$j++;
							}

							?>
																
							<!-- /Column 3 -->
							<div class="col-md-4 hidden-sm">
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="<?= $mas_vistas[8]['link'] ?>">
											<img src="<?= $mas_vistas[8]['image_url'] ?>" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="<?= $mas_vistas[8]['link'] ?>"><?= $mas_vistas[8]['title'] ?></a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i><?= $mas_vistas[8]['date'] ?></li>
											<!--li><i class="fa fa-comments"></i> 33</li-->
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
										
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="<?= $mas_vistas[9]['link'] ?>">
											<img src="<?= $mas_vistas[9]['image_url'] ?>" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="<?= $mas_vistas[9]['link'] ?>"><?= $mas_vistas[9]['title'] ?></a></h4>
											<ul class="article-meta">
												<li><i class="fa fa-clock-o"></i><?= $mas_vistas[9]['date'] ?></li>
												<!--li><i class="fa fa-comments"></i> 33</li-->
											</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 3 -->
						</div>
						<!-- /row -->
					</div>
					<!-- /tab1 -->
				</div>
				<!-- /tab content -->
			</div>
			<!-- /Main Column -->
		</div>
		<!-- /ROW -->
	</div>
	<!-- /CONTAINER -->
</div>
<!-- /SECTION -->


<!-- SECTION -->
<div class="section">
	<!-- CONTAINER -->
	<div class="container">
		<!-- ROW -->
		<div class="row">
			<!-- Main Column -->
			<div class="col-md-8">
				<!-- section title -->
				<div class="section-title">
					<h2 class="title">Popular Posts</h2>
				</div>
				<!-- /section title -->
										
				<!-- ARTICLE -->
				<article class="article row-article">
					<div class="article-img">
						<a href="<?= $reforma[0]['link'] ?>">
							<img src="<?= $reforma[0]['image_url'] ?>" alt="">
						</a>
					</div>
					<div class="article-body">
						<ul class="article-info">
							<li class="article-category"><a href="#">News</a></li>
							<li class="article-type"><i class="fa fa-file-text"></i></li>
						</ul>
						<h3 class="article-title"><a href="<?= $reforma[0]['link'] ?>"><?= $reforma[0]['title'] ?></a></h3>
						<ul class="article-meta">
							<li><i class="fa fa-clock-o"></i><?= $reforma[0]['date'] ?></li>
							<!--li><i class="fa fa-comments"></i> 33</li-->
						</ul>
						<p><?= $reforma[0]['description'] ?></p>
					</div>
				</article>
				<!-- /ARTICLE -->


				<!-- ARTICLE -->
				<article class="article row-article">
					<div class="article-img">
						<a href="<?= $elpais[0]['link'] ?>">
							<img src="<?= $elpais[0]['image_url'] ?>" alt="">
						</a>
					</div>
					<div class="article-body">
						<ul class="article-info">
							<li class="article-category"><a href="#">News</a></li>
							<li class="article-type"><i class="fa fa-file-text"></i></li>
						</ul>
						<h3 class="article-title"><a href="<?= $elpais[0]['link'] ?>"><?= $elpais[0]['title'] ?></a></h3>
						<ul class="article-meta">
							<li><i class="fa fa-clock-o"></i><?= $elpais[0]['date'] ?></li>
							<!--li><i class="fa fa-comments"></i> 33</li-->
						</ul>
						<p><?= $elpais[0]['description'] ?></p>
					</div>
				</article>
				<!-- /ARTICLE -->

				<!-- ARTICLE -->
				<article class="article row-article">
					<div class="article-img">
						<a href="<?= $reforma[1]['link'] ?>">
							<img src="<?= $reforma[1]['image_url'] ?>" alt="">
						</a>
					</div>
					<div class="article-body">
						<ul class="article-info">
							<li class="article-category"><a href="#">News</a></li>
							<li class="article-type"><i class="fa fa-file-text"></i></li>
						</ul>
						<h3 class="article-title"><a href="<?= $reforma[1]['link'] ?>"><?= $reforma[2]['title'] ?></a></h3>
						<ul class="article-meta">
							<li><i class="fa fa-clock-o"></i><?= $reforma[1]['date'] ?></li>
							<!--li><i class="fa fa-comments"></i> 33</li-->
						</ul>
						<p><?= $reforma[1]['description'] ?></p>
					</div>
				</article>
				<!-- /ARTICLE -->


				<!-- ARTICLE -->
				<article class="article row-article">
					<div class="article-img">
						<a href="<?= $elpais[1]['link'] ?>">
							<img src="<?= $elpais[1]['image_url'] ?>" alt="">
						</a>
					</div>
					<div class="article-body">
						<ul class="article-info">
							<li class="article-category"><a href="#">News</a></li>
							<li class="article-type"><i class="fa fa-file-text"></i></li>
						</ul>
						<h3 class="article-title"><a href="<?= $elpais[1]['link'] ?>"><?= $elpais[1]['title'] ?></a></h3>
						<ul class="article-meta">
							<li><i class="fa fa-clock-o"></i><?= $elpais[1]['date'] ?></li>
							<!--li><i class="fa fa-comments"></i> 33</li-->
						</ul>
						<p><?= $elpais[1]['description'] ?></p>
					</div>
				</article>
				<!-- /ARTICLE -->
				
			</div>
			<!-- /Main Column -->
					
			<!-- Aside Column -->
			<div class="col-md-4">
				<!-- article widget -->
				<div class="widget">
					<div class="widget-title">
						<h2 class="title">Featured Posts</h2>
					</div>
							
					<!-- owl carousel 4 -->
					<div id="owl-carousel-4" class="owl-carousel owl-theme">
						
						<?php 
							$j=3;
							for ($i=0; $i < 4; $i++) { 
						?>
							
						<!-- ARTICLE -->
						<article class="article thumb-article">
							<div class="article-img">
								<img src="<?= $reforma[$j]['image_url'] ?>" alt="">
							</div>
							<div class="article-body">
								<ul class="article-info">
									<li class="article-category"><a href="#">News</a></li>
									<li class="article-type"><i class="fa fa-video-camera"></i></li>
								</ul>
								<h3 class="article-title"><a href="<?= $reforma[$j]['link'] ?>"><?= $reforma[$j]['title'] ?></a></h3>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i><?= $reforma[$j]['date'] ?></li>
									<!--li><i class="fa fa-comments"></i> 33</li-->
								</ul>
							</div>
						</article>
						<!-- /ARTICLE -->

						<?php 
							$j++;
							}
						?>							

					</div>
					<!-- /owl carousel 4 -->
				</div>
				<!-- /article widget -->
						
				<!-- galery widget -->
				<div class="widget galery-widget">
					<div class="widget-title">
						<h2 class="title">Flickr Photos</h2>
					</div>
					<ul>
						<?php 
							$j=2;
							for ($i=0; $i <8; $i++) { 
						?>
						<li><a href="<?= $elpais[$j]['link'] ?>"><img src="<?= $elpais[$j]['image_url'] ?>" alt=""></a></li>
						<?php 
							$j++;
							}
						?>
					</ul>
				</div>
				<!-- /galery widget -->
						
				<!-- tweets widget -->
				<div class="widget tweets-widget">
					<div class="widget-title">
						<h2 class="title">Tweets</h2>
					</div>
					<ul>
						<?php 								
							foreach( $twetts as $item ){  
							$item =  (object) $item; 
						?>					
							<li class="tweet">
								<i class="fa fa-twitter"></i>
								<div class="tweet-body">
									<p><?= $item->title ?><a href="<?= $item->link ?>"> Leer más</a></p>
								</div>
							</li>
						<?php 								
							}
						?>
					</ul>
				</div>
				<!-- /tweets widget -->

				<!-- article widget -->
				<div class="widget">
					<br>
					<div class="widget-title">
						<h2 class="title">Most Read</h2>
					</div>
							
					<?php 
						$j=7;
						for ($i=0; $i <3 ; $i++) {						
					?>

					<!-- ARTICLE -->
					<article class="article widget-article">
						<div class="article-img">
							<a href="<?= $reforma[$j]['link']?>">
								<img src="<?= $reforma[$j]['image_url']?>" alt="">
							</a>
						</div>
						<div class="article-body">
							<h4 class="article-title"><a href="<?= $reforma[$j]['link']?>"><?= $reforma[$j]['title']?></a></h4>
							<ul class="article-meta">
								<li><i class="fa fa-clock-o"></i><?= $reforma[$j]['date']?></li>
								<!--li><i class="fa fa-comments"></i> 33</li-->
							</ul>
						</div>
					</article>
					<!-- /ARTICLE -->

					<?php 
						$j++;
						}
					?>
						
				</div>
				<!-- /article widget -->
			</div>
			<!-- /Aside Column -->
		</div>
		<!-- /ROW -->
	</div>
	<!-- /CONTAINER -->
</div>
<!-- /SECTION -->
	

<!-- SECTION -->
<!--div class="section"-->
	<!-- CONTAINER -->
	<!--div class="container"-->
		<!-- ROW -->
		<!--div class="row"-->
			<!-- Main Column -->
			<!--div class="col-md-12"-->
				<!-- row -->
				<!--div class="row"-->
					<!-- Column 1 -->
					<!--div class="col-md-6 col-sm-6"-->
						
						<!--div class="section-title">
							<h2 class="title">Economía</h2>
						</div>

						<article class="article">
							<div class="article-img">
								<a href="#">
									<img src="<?= base_url();?>public/img/img-sm-1.jpg" alt="">
								</a>
								<ul class="article-info">
									<li class="article-type"><i class="fa fa-camera"></i></li>
								</ul>
							</div>
							<div class="article-body">
								<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
									<li><i class="fa fa-comments"></i> 33</li>
								</ul>
								<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui, ne accommodare theophrastus reprehendunt vel. Et commodo menandri eam.</p>
							</div>
						</article>

					</div-->
					<!-- /Column 1 -->
							
					<!-- Column 2 -->
					<!--div class="col-md-6 col-sm-6"-->
						<!-- section title -->
						<!--div class="section-title">
							<h2 class="title">Tecnología</h2>
						</div-->
						<!-- /section title -->
								
						<!-- ARTICLE -->
						<!--article class="article">
							<div class="article-img">
								<a href="#">
									<img src="<?= base_url();?>public/img/img-sm-2.jpg" alt="">
								</a>
								<ul class="article-info">
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>
							</div>
							<div class="article-body">
								<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
									<li><i class="fa fa-comments"></i> 33</li>
								</ul>
								<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui, ne accommodare theophrastus reprehendunt vel. Et commodo menandri eam.</p>
							</div>
						</article-->
						<!-- /ARTICLE -->																
					<!--/div-->
					<!-- /Column 2 -->
				<!--/div-->
				<!-- /row -->																	
			<!--/div>					
		</div-->
		<!-- /ROW -->

				
		<!--div class="row"-->
			<!-- Main Column -->
			<!--div class="col-md-12"-->
				<!-- row -->
				<!--div class="row"-->
					<!-- Column 1 -->
					<!--div class="col-md-6 col-sm-6">							

						<article class="article">
							<div class="article-img">
								<a href="#">
									<img src="<?= base_url();?>public/img/img-sm-1.jpg" alt="">
								</a>
								<ul class="article-info">
									<li class="article-type"><i class="fa fa-camera"></i></li>
								</ul>
							</div>
							<div class="article-body">
								<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
									<li><i class="fa fa-comments"></i> 33</li>
								</ul>
								<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui, ne accommodare theophrastus reprehendunt vel. Et commodo menandri eam.</p>
							</div>
						</article>
								
					</div-->
					<!-- /Column 1 -->
							
					<!-- Column 2 -->
					<!--div class="col-md-6 col-sm-6"-->
								
						<!-- ARTICLE -->
						<!--article class="article">
							<div class="article-img">
								<a href="#">
									<img src="<?= base_url();?>public/img/img-sm-2.jpg" alt="">
								</a>
								<ul class="article-info">
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>
							</div>
							<div class="article-body">
								<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
									<li><i class="fa fa-comments"></i> 33</li>
								</ul>
								<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui, ne accommodare theophrastus reprehendunt vel. Et commodo menandri eam.</p>
							</div>
						</article-->
						<!-- /ARTICLE -->									
					<!--/div-->
					<!-- /Column 2 -->
				<!--/div-->
				<!-- /row -->																	
			<!--/div-->					
		<!--/div-->
		<!-- /ROW -->

	<!--/div-->
	<!-- /CONTAINER -->
<!--/div-->
<!-- /SECTION -->

		
<!-- AD SECTION -->
	<!--div class="visible-lg visible-md">
		<img class="center-block" src="<?= base_url();?>public/img/ad-3.jpg" alt="">
	</div-->
<!-- /AD SECTION -->


		<!-- SECTION -->
<div class="section">
	<!-- CONTAINER -->
	<div class="container">
		<!-- ROW -->
		<div class="row">
			<!-- Main Column -->
			<div class="col-md-12">
				<!-- section title -->
				<div class="section-title">
					<h2 class="title">Internacional</h2>
					<!-- tab nav -->

					<!-- /tab nav -->
				</div>
				<!-- /section title -->
						
				<!-- Tab content -->
				<div class="tab-content">
					<!-- tab1 -->
					<div id="tab1" class="tab-pane fade in active">
						<!-- row -->
						<div class="row">
							<?php 
								$i=1;
								foreach( $internacional as $item ){  
									$item = (object)$item;

									if($i>4){
									break;
									}
								?>
								<div class="col-md-3 col-sm-6">

									<article class="article">
										<div class="article-img">
											<a href="<?= $item->link?>">
												<img src="<?= $item->image_url?>" alt="">
											</a>
											<ul class="article-info">
												<li class="article-type"><i class="fa fa-camera"></i></li>
											</ul>
										</div>
										<div class="article-body">
											<h4 class="article-title"><a href="<?= $item->link?>"><?= $item->title?></a></h4>
											<ul class="article-meta">
												<li><i class="fa fa-clock-o"></i><?= $item->date?></li>
												<!--li><i class="fa fa-comments"></i> 33</li-->
											</ul>
										</div>
									</article>		

								</div>
								
								<?php $i++; } ?>

						</div>
						
					</div>
					<!-- /tab1 -->
				</div>
				<!-- /tab content -->
			</div>
			<!-- /Main Column -->
		</div>
		<!-- /ROW -->
	</div>
	<!-- /CONTAINER -->
</div>
<!-- /SECTION -->
