<!-- banner -->

	<style type="text/css"><?php echo $filestyle; ?></style>
	<div class="banner jarallax">
		<div class="agileinfo-dot">
			<div class="header">
				<div class="container-fluid">
					<div class="header-left">
						<div class="w3layouts-logo grid__item">
							<h1>
								<a class="link link--ilin" href="#"><span><?=$config->txtlog1?></span><span><?=$config->txtlog2?></span></a>
							</h1>
						</div>
					</div>
					<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a class="active" href="index.html">Trang chủ</a></li>
									
									<li><a href="#services" class="scroll">Dịch Vụ</a></li>
									<li><a href="#chefs" class="scroll">Đầu Bếp</a></li>
									<li><a href="#gallery" class="scroll">Thư Viện</a></li>	
									<li><a href="#customer" class="scroll">Khách Hàng</a></li>
									<li><a href="#contact" class="scroll">Liên Hệ</a></li>
									<li><a href="#about" class="scroll">About</a></li>
								</ul>
						
					<div class="clearfix"> </div>						
							</div>	
						</nav>
						<div class="agileinfo-social-grids">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
								<li><a href="#"><i class="fa fa-vk"></i></a></li>
							</ul>
						</div>
						
				</div>		
					</div>
					
			</div>
			<div class="agileits-banner-info">
				<h3>Chào mừng</h3>
					<h2 class="rw-sentence">
					<span>Món ăn ngon hơn, với những </span>
					<div class="rw-words rw-words-1">
						<span>Gia đình</span>
						<span>Bạn Bè</span>
						<span>Người thân</span>
						<span>Tình Yêu</span>
						<span>Doanh nghiêp</span>
						<span>Tổ chức</span>
					</div>
					</h2>
					<a href="#" data-toggle="modal" data-target="#myModal2">Đặt Bàn</a>
			</div>
		</div>
	</div>
<!-- //banner -->
	
	
<!-- popup for sign up form -->
<div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div id="small-dialog2" class="mfp-hide book-form">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3>Đặt Bàn Tại Đây</h3>
					<form action="<?php echo public_urls()?>index.php/Frontend/OrderTableController/orderTables" method="post">
						<input type="text" name="name" placeholder="Tên" required=""/>
						<input type="tel" name="phone" placeholder="Số điện thoại " required=""/>
						<input type="email" name="email" class="email" placeholder="Email" required=""/>
						<div class="select-block1">
							<select required="" name="order">
								<option value="0">--Chọn số người đặt bàn--</option>
								<option value="1">1 Người</option>
								<option value="2">2 Người</option>
								<option value="3">3 Người</option>
								<option value="4">4 Người</option>
								<option value="5">5 Người</option>
								<option value="more">Nhiều Hơn  5</option>
							</select>
						</div>
						<input class="date" type="text" id="datepicker2"  name="datepicker2" placeholder="Date Of Arrival" title="Vui lòng chọn ngày cần đặt" required=""/>
						<textarea name="Message" placeholder="Additional Information (Optional)" ></textarea>
						<input type="submit" value="Book table">
					</form>
			</div>
		</div>
	</div>
</div>
<!-- //popup for sign up form -->

<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						<h4 class="modal-title">Fresh Food</h4>
						<h5>1 april 2017</h5>
					</div> 
					<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="<?php echo public_url()?>images/s1.jpg" alt="" />
						<p>Morbi eget mollis erat, sit amet feugiat nulla. In hac habitasse platea dictumst. Sed ac fermentum eros. Pellentesque tincidunt nisi sit amet dui lobortis, pulvinar pellentesque dui tempor. Sed iaculis, nisl a eleifend porttitor, diam mauris gravida arcu, suscipit ullamcorper nulla diam vitae lorem..</p>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //modal -->
	
<!-- tabs -->	<!-- about -->
<div class="demo" id="about">    
	<div class="container"> 
		<div class="w3ls-heading">
			<h3>About us</h3>
		</div>
		<div class="horizontalTab" id="horizontalTab">
			<ul class="resp-tabs-list list-group">
				<li class="list-group-item text-center"></li>
				<li class="list-group-item text-center"></li>
				<li class="list-group-item text-center"></li>
				<li class="list-group-item text-center"></li>
			</ul>
				<div class="resp-tabs-container">
					<!-- section -->
							<div class="bhoechie-tab-content active">
										<h3 class="title">about</h3>
								<div class="services-grids">
									<div class="ser-img">
										<h3><?= $config->title?> </h3>
										<p><?= $config->Introduction1?>.
										</p>
										<a href="#myModal" data-toggle="modal"> Xem nhiều hơn tại đây !</a>
									</div>
									<div class="ser-img1">
										<img src="<?php echo public_url()?>images/about.png" alt="" />
									</div>
									<div class="ser-info">
										<p><?= $config->Introduction2?>.
										</p>
										<p>Pellentesque finibus dapibus volutpat. Curabitur imperdiet vulputate rhoncus. Nullam 
										scelerisque magna non turpis euismod bibendum. 
										</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<!--  section -->
							<div class="bhoechie-tab-content">
										<h3 class="title ab">Thực đơn mỗi ngày</h3>
								<div class="services-grids">
									<div class="col-md-6 menugrid">
											<img src="<?php echo public_url()?>images/b1.jpg" alt="" />
									</div>
									<?php $i = 0; foreach ($list as $key => $value) {
										$i++;
									?>
									<div class="col-md-6 menugrid1 innergrid">
											<h3><?=$key?></h3>
											<ul class="list ins1">
												<?php foreach ($value as $key => $value2) {
													# code...
												?>
												<li><?=$value2->name?> - <p><?=$value2->content?></p><span>$<?=$value2->price?></span></li>
												<?php }?>
											</ul>
									</div>
									<?php if($i ==1) echo '<div class="clearfix"></div>';  ?>
									<?php }?>
									<div class="clearfix"></div>
										
								<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
				
							<!--  search -->
							<div class="bhoechie-tab-content">
										<h3 class="title ab1">Đến với chúng tôi?</h3>
								<div class="services-grids">
									<div class="about-2">
										<h3>Những sản phẩm mới nhất và chất lượng nhất</h3>
										<img src="<?php echo public_url()?>images/burger.jpg" alt="" />
									</div>
									<div class="about-info2">
										 <?php foreach (array_chunk($service2,2) as $list){?>
										<div class="top-grid">
											  <?php foreach ($list as $value){?>
											<div class="col-md-6 grid">
												<i class="<?= $value->icon?>" aria-hidden="true"></i>
												<h3><?= $value->title?></h3>
												<p><?= $value->content?>. 
												</p>
											</div>
											
											<?php }?>
											<div class="clearfix"></div>
										</div>
										<?php }?>
									</div>
								</div>
							</div>
							<div class="bhoechie-tab-content">
										<h3 class="title ab2">why choose us</h3>
								<div class="services-grids">
									<div class="about-2 lastgrid">
										<h3><?=$config->titlechose?></h3>
										<h3><?=$config->title2?></h3>
										<p><?=$config->choose?>
										</p>
									</div>
									<div class="about-info2">
										<div class="col-md-6 last-grid">
											<img src="<?php echo public_url()?>images/b11.jpg" alt="" />
										</div>
										<div class="col-md-6 last-grid1">
											<h3>High quality restaurant</h3>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
				</div>
		</div>
	</div>
</div>



	

	
	
<!-- services -->
<div class="services" id="services">
		<div class="container">
			<div class="ser-top wthree-3 wow fadeInDown w3-service-head">
				<h3>Dịch Vụ Của Chúng Tôi </h3>
			</div>
			<div class="w3-service-grids set-6">


				<?php $i=0; foreach ($service as $key => $value) { $i++;?>
				<div class="col-md-4  services-w3-grid1 ser-left icon1 hi-icon-wrap hi-icon-effect-6">
					<i class="<?=  $value->icon?> hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4><?=  $value->title ;?></h4>
					<p><?=  $value->content?>.</p>
				</div>
				<?php if($i ==3 ){ echo "<div class='clearfix'></div>";}?>
				<?php }?>
				
				<div class="clearfix"></div>
			</div>	
		</div>
</div>
<!-- /services -->

<!-- our chefs -->
<div class="ourchefs" id="chefs">
	<div class="container">
		<div class="w3ls-heading">
			<h3>Đội ngũ nhân viên</h3>
		</div>
		<?php foreach ($chef as $key => $value) {
			# code...
		?>
		<div class="col-md-3 chef agile_team_grid">
			<div class="agileits_w3layouts_team_grid">
				<ul class="agileinfo_social_icons">
					<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
				<img src="<?php echo base_url()?>upload/chef/<?=$value->img?>" alt=" " class="img-responsive">
			</div>
			<h3><?= $value->name?></h3>
			<p><?= $value->major?></p>
		</div>
		<?php	}?>
		
	</div>
</div>
<!-- //our chefs -->

	
<!-- gallery -->
	<div class="gallery" id="gallery">
			<div class="agileits_w3layouts_head">
			<h3>Thư viện hình ảnh</h3>
			</div>
			<div class="w3layouts_gallery_grids">	
				<?php  foreach ($li as $key => $value) {
				
			?>	
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="<?php echo base_url()?>upload/lib/<?=$value->img?>" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="<?php echo base_url()?>upload/lib/<?=$value->img?>" alt=" " style="height:240px" class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3><?=$value->name?></h3></div>
							</div>
						</div>
					</a>
				</div>
			<?php
				}
			?>	
				
				<div class="clearfix"> </div>
			</div>
</div>
<!-- //gallery -->
<!-- gallery js -->
	<script src="<?php echo public_url()?>js/lsb.min.js"></script>
	<script>
	$(window).load(function() {
		  $.fn.lightspeedBox();
		});
	</script>
<!-- //gallery js -->

<!-- customer -->
	<div class="customer jarallax" id="customer">
		<div class="agileinfo-dot">
		<div class="container">
			<h3>Ý Kiến Đánh Giá Từ Khách Hàng</h3>
			<div class="customer-grids">
				<ul id="flexiselDemo1">	
				<?php 
					foreach ($custumer as $key => $value) {
				?>		
					<li>
						<div class="customer-grid">
							<p> <?= $value->content?>.</p>
							<h4> <?= $value->name?> <span> <?= $value->job?></span></h4>
						</div>
						<div class="client-img">
							<img src="<?php echo base_url()?>/upload/cus/<?=$value->img?>" alt="" />
						</div>
					</li>	
				
				<?php }?>
				</ul>
				<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:3
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="<?php echo public_url()?>js/jquery.flexisel.js"></script>
			</div>
		</div>
	</div>
</div>
<!-- //customer -->
	
<!-- contact form -->
	<div class="contact-w3ls" id="contact">
		<div class="container">
			<h3>FORM LIÊN HỆ</h3>
				<form action="<?php echo public_urls()?>index.php/Frontend/OrderTableController/orderTable" method="post">
					<div class="col-md-5 col-sm-5 contact-left agileits-w3layouts">
					
						<div class="form-control"> 
							<label class="header">Tên <span>:</span></label>
							<input type="text" name="name" placeholder="Tên" required="">
						</div>
						
						<div class="form-control"> 
							<label class="header">Email <span>:</span></label>
							<input type="email"  class="email" name="email" placeholder="Email" required="">
						</div>
						
						<div class="form-control">
							<label class="header">Số điện thoại <span>:</span></label>
							<input type="text" name="phone" placeholder="Mobile Number" required="">
						</div>	
						<!-- <input type="text" class="email" name="Last Name" placeholder="Last Name" required=""> -->
					</div> 
					<div class="col-md-7 col-sm-7 contact-right agileits-w3layouts">
						<div class="form-control">
							<label class="header">Nội dung <span>:</span></label>
							<textarea name="content" placeholder="Nhập nội dung cần liên hệ" required=""></textarea>
						</div>	
					<div class="clearfix"> </div> 
					</div>
						<input type="submit" value="GIỬI">
				</form>
		</div>  
	</div>  
<!-- //contact form -->

<!-- map -->
<div class="map" >
	<div id="googleMap" style="width:100%;height:400px;"></div>
		
		<div class="agile_map_grid">
			<div class="agile_map_grid1">
				<h3>Thông tin liên hệ</h3>
				<ul>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i><span>Địa chỉ :</span> <?=$config->address?>.</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><span>email :</span> <a href="mailto:info@example.com"><?=$config->email?></a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i><span>Số điện thoại :</span> <?=$config->phone1?></li>
				</ul>
			</div>
		</div>
	</div>
<!-- //map -->
<!-- footer -->
<div class="footer">
		<div class="col-md-6 footer-left">
			<h3>Fresh Food</h3>
			<?=$config->footer?>
		</div>
		<div class="col-md-6 footer-right">
			<section class="subscribe" id="subscribe">
					<h3>Đăng kí nhận tin mới</h3>
				<form action="#" method="post" class="newsletter">
					<input class="email" type="email" placeholder="Email của bạn..." required="">
					<input type="submit" class="submit" value="">
				</form>
			</section>
			<h4>Liên hệ </h4>
				<div class="wthree-icon">
					<a href="<?= $config->tw?>" data-target="__blank" class="twitter"><i class="fa fa-twitter"></i></a>
					<a href="<?= $config->fa?>" class="facebook"><i class="fa fa-facebook"></i></a> 
					<a href="<?= $config->google?>" class="google"><i class="fa fa-google-plus"></i></a> 
					<a href="<?= $config->zalo?>" class="linkedin"><i class="fa fa-linkedin"></i></a> 
				</div>  
		</div>
		<div class="clearfix"></div>
</div>
<!-- //footer -->

<!-- copyright -->
<div class="copyright-agile">
	<p>&copy; 2018 Restaurant. All rights reserved | Design by </a></p>
</div>
<h1>My First Google Map</h1>



<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(10.825586, 106.684878),
    zoom:15,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjY4TVX9QnkXw3Zkiayeh5i1aO_tnkk7o&callback=myMap"></script>