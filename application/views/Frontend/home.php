<!-- banner -->
	<?php print_r($custumer);?>
	<div class="banner jarallax">
		<div class="agileinfo-dot">
			<div class="header">
				<div class="container-fluid">
					<div class="header-left">
						<div class="w3layouts-logo grid__item">
							<h1>
								<a class="link link--ilin" href="#"><span>Fresh</span><span>Food</span></a>
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
					<span>Food tastes better, eat with your </span>
					<div class="rw-words rw-words-1">
						<span>Family</span>
						<span>Friends</span>
						<span>happiness</span>
						<span>Love</span>
						<span>Gratefulness</span>
						<span>happiness</span>
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
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Tên" required=""/>
						<input type="tel" name="number" placeholder="Số điện thoại " required=""/>
						<input type="email" name="Email" class="email" placeholder="Email" required=""/>
						<div class="select-block1">
							<select required="">
								<option value="">--Chọn số người đặt bàn--</option>
								<option value="">1 Người</option>
								<option value="">2 Người</option>
								<option value="">3 Người</option>
								<option value="">4 Người</option>
								<option value="">5 Người</option>
								<option value="">Nhiều Hơn  5</option>
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
										<h3>ONLY FRESH AND HEALTHY FOOD FOR YOUR FAMILY </h3>
										<p>Integer sed blandit nisi, eget tempor nulla. Vivamus ut mi nec quam iaculis ultricies. 
										Maecenas at placerat metus. Curabitur arcu purus, eleifend ut massa at, fringilla sagittis quam. 
										Nulla volutpat tellus orci, id laoreet ante pretium id.
										</p>
										<a href="#myModal" data-toggle="modal"> Read More About Our Recipes</a>
									</div>
									<div class="ser-img1">
										<img src="<?php echo public_url()?>images/about.png" alt="" />
									</div>
									<div class="ser-info">
										<p>Integer sed blandit nisi, eget tempor nulla. Vivamus ut mi nec quam iaculis ultricies. 
										Maecenas at placerat metus. Curabitur arcu purus, eleifend ut massa at, fringilla sagittis quam. 
										Nulla volutpat tellus orci, id laoreet ante pretium id.
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
										<h3 class="title ab">Our Menu</h3>
								<div class="services-grids">
									<div class="col-md-6 menugrid">
											<img src="<?php echo public_url()?>images/b1.jpg" alt="" />
									</div>
									<div class="col-md-6 menugrid1 innergrid">
											<h3>Món Ăn</h3>
											<ul class="list ins1">
												<li>prawns toast - <p>served with soup</p><span>$13.00</span></li>
												<li>fish and chips - <p>Seasoned with sprinkling pepper</p><span>$16.09</span></li>
												<li>boneless meat - <p>served with Onion sprinkled lemon</p><span>$11.69</span></li>
												<li>Tasty rib meat - <p>Best quality product of herb</p><span>$12.00</span></li>
												<li>congrio fish - <p>served with butter Cheese</p><span>$5.00</span></li>
											</ul>
									</div>
									<div class="clearfix"></div>
										<div class="col-md-6 innergrid">
											<h3>Đồ uống</h3>
											<ul class="list ins1">
												<li>Chocolate Cake - <p>served with Creamy popins</p><span>$9.00</span></li>
												<li>Classic delight - <p>soft better delighted coke</p><span>$14.69</span></li>
												<li>Holiday special - <p>Splitting mix</p><span>$11.50</span></li>
												<li>Mix fruit club - <p>served with soup</p><span>$10.00</span></li>
												<li>Milk shake - <p>served with Ice cubes</p><span>$8.00</span></li>
											</ul>
										</div>
										<div class="col-md-6 innergrid">
											<h3>Đồ uống</h3>
											<ul class="list ins1">
												<li>Chocolate Cake - <p>served with Creamy popins</p><span>$9.00</span></li>
												<li>Classic delight - <p>soft better delighted coke</p><span>$14.69</span></li>
												<li>Holiday special - <p>Splitting mix</p><span>$11.50</span></li>
												<li>Mix fruit club - <p>served with soup</p><span>$10.00</span></li>
												<li>Milk shake - <p>served with Ice cubes</p><span>$8.00</span></li>
											</ul>
										</div>
										<div class="col-md-6 innergrid">
												<h3>Loại khác</h3>
											<ul class="list ins1">
												<li>Fruit salad - <p>Served with mix fruits</p><span>$7.00</span></li>
												<li>Honeymoon - <p>served with Icecream corner slide</p><span>$19.09</span></li>
												<li>Choconuts - <p>served with melting candies</p><span>$11.69</span></li>
												<li>Mixed fruit with almond - <p>served with Almond pieces</p><span>$13.00</span></li>
												<li>cocoa salad - <p>served with nuts and cream</p><span>$16.50</span></li>
											
											</ul>
										</div>
								<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
				
							<!--  search -->
							<div class="bhoechie-tab-content">
										<h3 class="title ab1">Why Visit Us?</h3>
								<div class="services-grids">
									<div class="about-2">
										<h3>We select fresh and natural products</h3>
										<img src="<?php echo public_url()?>images/burger.jpg" alt="" />
									</div>
									<div class="about-info2">
										<div class="top-grid">
											<div class="col-md-6 grid">
												<i class="fa fa-cutlery" aria-hidden="true"></i>
												<h3>Healthy food</h3>
												<p>Pellentesque finibus dapibus volutpat. Curabitur imperdiet vulputate rhoncus. Nullam. 
												</p>
											</div>
											<div class="col-md-6 grid">
												<i class="fa fa-apple" aria-hidden="true"></i>
												<h3>Fresh fruits</h3>
												<p>Pellentesque finibus dapibus volutpat. Curabitur imperdiet vulputate rhoncus. Nullam. 
												</p>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="bottom-grid">
											<div class="col-md-6 grid">
												<i class="fa fa-glass" aria-hidden="true"></i>
												<h3>Drink diet</h3>
												<p>Pellentesque finibus dapibus volutpat. Curabitur imperdiet vulputate rhoncus. Nullam. 
												</p>
											</div>
											<div class="col-md-6 grid">
												<i class="fa fa-spoon" aria-hidden="true"></i>
												<h3>Tasty snacks</h3>
												<p>Pellentesque finibus dapibus volutpat. Curabitur imperdiet vulputate rhoncus. Nullam. 
												</p>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="bhoechie-tab-content">
										<h3 class="title ab2">why choose us</h3>
								<div class="services-grids">
									<div class="about-2 lastgrid">
										<h3>delicious dishes</h3>
										<h3>great place to enjoy</h3>
										<p>Integer sed blandit nisi, eget tempor nulla. Vivamus ut mi nec quam iaculis ultricies. 
										Maecenas at placerat metus. Curabitur arcu purus, eleifend ut massa at, fringilla sagittis quam. 
										Nulla volutpat tellus orci, id laoreet ante pretium id. Ut iaculis quis eros ac bibendum.
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
				<div class="col-md-4  services-w3-grid1 ser-left icon1 hi-icon-wrap hi-icon-effect-6">
					<i class="fa fa-cutlery hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Bữa sáng</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin  vestibulum velit.Lorem ipsum ultricies vestibulum velit adipisc elit Proin.</p>
				</div>
				<div class="col-md-4  services-w3-grid1 ser-left icon2 hi-icon-wrap hi-icon-effect-6">
					<i class="fa fa-spoon hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Bữa trưa</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum Lorem ipsum velit vestibulum velit adipisc elit Proin.</p>
				</div>
				<div class="col-md-4 services-w3-grid1 ser-left icon3 hi-icon-wrap hi-icon-effect-6">
					<i class="fa fa-glass hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Bữa Tối</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum Lorem ipsum velit vestibulum velit adipisc elit Proin.</p>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-3 services-w3-grid2 ser-left icon4 hi-icon-wrap hi-icon-effect-6">
					<i class="fa fa-apple hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Các món đặc biệt </h4>
					<p>Lorem ipsum dolor sit amet adipisc elit. Proin ultricies vestibulum Loremipsum velit.</p>
				</div>
				<div class="col-md-3 services-w3-grid2 ser-left icon5 hi-icon-wrap hi-icon-effect-6">
					<i class="fa fa-glass hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Pasta ravioli</h4>
					<p>Lorem ipsum dolor sit amet adipisc elit. Proin ultricies vestibulum velitLorem ipsum.</p>
				</div>
				<div class="col-md-3 services-w3-grid2 ser-left icon6 hi-icon-wrap hi-icon-effect-6"  data-wow-duration=".8s" data-wow-delay=".2s">
					<i class="fa fa-leaf hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Salads & Desserts</h4>
					<p>Lorem ipsum dolor sit amet adipisc elit. Proin ultricies vestibulum velitdolor sit.</p>
				</div>
				<div class="col-md-3 services-w3-grid2 ser-left icon6 hi-icon-wrap hi-icon-effect-6"  data-wow-duration=".8s" data-wow-delay=".2s">
					<i class="fa fa-gift hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>daily presents</h4>
					<p>Lorem ipsum dolor sit amet adipisc elit. Proin ultricies vestibulum velitdolor sit.</p>
				</div>
				<div class="clearfix"></div>
			</div>	
		</div>
</div>
<!-- /services -->

<!-- our chefs -->
<div class="ourchefs" id="chefs">
	<div class="container">
		<div class="w3ls-heading">
			<h3>Các Đầu Bếp Hàng Đầu</h3>
		</div>
		<div class="col-md-3 chef agile_team_grid">
			<div class="agileits_w3layouts_team_grid">
				<ul class="agileinfo_social_icons">
					<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
				<img src="<?php echo public_url()?>images/chef1.jpg" alt=" " class="img-responsive">
			</div>
			<h3>Jenny beck</h3>
			<p>Pantry chef</p>
		</div>
		<div class="col-md-3 chef agile_team_grid">
			<div class="agileits_w3layouts_team_grid">
				<ul class="agileinfo_social_icons">
					<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
				<img src="<?php echo public_url()?>images/chef2.jpg" alt=" " class="img-responsive">
			</div>
			<h3>elvis rich</h3>
			<p>western chef</p>
		</div>
		<div class="col-md-3 chef agile_team_grid">
			<div class="agileits_w3layouts_team_grid">
				<ul class="agileinfo_social_icons">
					<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
				<img src="<?php echo public_url()?>images/chef3.jpg" alt=" " class="img-responsive">
			</div>
			<h3>steve mark</h3>
			<p>Master chef</p>
		</div>
		<div class="col-md-3 chef agile_team_grid">
			<div class="agileits_w3layouts_team_grid">
				<ul class="agileinfo_social_icons">
					<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
				<img src="<?php echo public_url()?>images/chef4.jpg" alt=" " class="img-responsive">
			</div>
			<h3>jewel cher</h3>
			<p>gravy specialist</p>
		</div>
	</div>
</div>
<!-- //our chefs -->

	
<!-- gallery -->
	<div class="gallery" id="gallery">
			<div class="agileits_w3layouts_head">
			<h3>Thư viện hình ảnh</h3>
			</div>
			<div class="w3layouts_gallery_grids">	
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="<?php echo public_url()?>images/p1.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="<?php echo public_url()?>images/p1.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>Butter pizza</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="<?php echo public_url()?>images/p2.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="<?php echo public_url()?>images/p2.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>Pasta</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="<?php echo public_url()?>images/p13.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="<?php echo public_url()?>images/p13.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>Lemon cheese</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="<?php echo public_url()?>images/p4.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="<?php echo public_url()?>images/p4.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>Toasted puff</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="<?php echo public_url()?>images/p6.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="<?php echo public_url()?>images/p6.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>Burger Cheese</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="<?php echo public_url()?>images/p5.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="<?php echo public_url()?>images/p5.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>fried broccoli</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="<?php echo public_url()?>images/p7.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="<?php echo public_url()?>images/p7.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>Apple almond salad</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="<?php echo public_url()?>images/p8.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="<?php echo public_url()?>images/p8.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>Roasted meat</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="<?php echo public_url()?>images/p9.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="<?php echo public_url()?>images/p9.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>Pasta rolls</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="<?php echo public_url()?>images/p10.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="<?php echo public_url()?>images/p10.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>fruits</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="<?php echo public_url()?>images/p11.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="<?php echo public_url()?>images/p11.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>Meat Pizza</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="<?php echo public_url()?>images/p12.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="<?php echo public_url()?>images/p12.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>Boiled eggs</h3></div>
							</div>
						</div>
					</a>
				</div>
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
							<img src="<?php echo public_url()?>images/t1.jpg" alt="" />
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
				<form action="#" method="post">
					<div class="col-md-5 col-sm-5 contact-left agileits-w3layouts">
					
						<div class="form-control"> 
							<label class="header">Tên <span>:</span></label>
							<input type="text" name="First Name" placeholder="Tên" required="">
						</div>
						
						<div class="form-control"> 
							<label class="header">Email <span>:</span></label>
							<input type="email"  class="email" name="Email" placeholder="Email" required="">
						</div>
						
						<div class="form-control">
							<label class="header">Số điện thoại <span>:</span></label>
							<input type="text" name="Vui lòng nhập sô điện thoại liên hệ" placeholder="Mobile Number" required="">
						</div>	
						<!-- <input type="text" class="email" name="Last Name" placeholder="Last Name" required=""> -->
					</div> 
					<div class="col-md-7 col-sm-7 contact-right agileits-w3layouts">
						<div class="form-control">
							<label class="header">Nội dung <span>:</span></label>
							<textarea name="Message" placeholder="Nhập nội dung cần liên hệ" required=""></textarea>
						</div>	
					<div class="clearfix"> </div> 
					</div>
						<input type="submit" value="GIỬI">
				</form>
		</div>  
	</div>  
<!-- //contact form -->

<!-- map -->
<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56801282.36779669!2d-131.48418691999598!3d29.66539724812115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6dc13a009bba0319!2sPret+A+Manger!5e0!3m2!1sen!2sin!4v1491030489371"></iframe>
		<div class="agile_map_grid">
			<div class="agile_map_grid1">
				<h3>Thông tin liên hệ</h3>
				<ul>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i><span>Địa chỉ :</span> 507 Boylston St,Boston USA.</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><span>email :</span> <a href="mailto:info@example.com">info@example.com</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i><span>Số điện thoại :</span> (+020) 142 3246 918</li>
				</ul>
			</div>
		</div>
	</div>
<!-- //map -->
<!-- footer -->
<div class="footer">
		<div class="col-md-6 footer-left">
			<h3>Fresh Food</h3>
			<p>Morbi eget mollis erat, sit amet feugiat nulla. In hac habitasse platea dictumst. Sed ac fermentum eros.Pellentesque tincidunt nisi sit amet dui lobortis.Pulvinar pellentesque dui tempor</p>
			<p>Sed iaculis, nisl a eleifend porttitor, diam mauris gravida arcu, suscipit ullamcorper nulla diam vitae lorem..</p>
		</div>
		<div class="col-md-6 footer-right">
			<section class="subscribe" id="subscribe">
					<h3>Đăng kí nhận tin mới</h3>
				<form action="#" method="post" class="newsletter">
					<input class="email" type="email" placeholder="Your email..." required="">
					<input type="submit" class="submit" value="">
				</form>
			</section>
			<h4>Follow us</h4>
				<div class="wthree-icon">
					<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
					<a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
					<a href="#" class="google"><i class="fa fa-google-plus"></i></a> 
					<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> 
				</div>  
		</div>
		<div class="clearfix"></div>
</div>
<!-- //footer -->

<!-- copyright -->
<div class="copyright-agile">
	<p>&copy; 2017 Fresh Food. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
</div>