

<div class="container" >
	<div class="row">
		<div class="col-xs-11">
			<ol class="breadcrumb">
						<li>
							<a href="">Cấu hình websi</a>
						</li>
						<li class="active">
							<a href="#">Sửa </a>
						</li>
						
					</ol>
		</div>
		 <?php if($this->session->flashdata('message')):?>
                <div class="col-xs-4 thang" style="z-index :99;position:fixed;right:10px;top:100px">
                  <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <strong><?php echo  $this->session->flashdata('message');?>  </strong>
                 </div>
                 <?php endif;?>
            </div>
		<div class="col-xs-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Sửa</h3>
				</div>
				<div class="panel-body">
					<form action="<?php echo base_url()?>Backend/ConfigController/edit/<?php echo $item->id?>" enctype="multipart/form-data" method="POST" role="form">
						
						<div class="form-group <?php echo form_error('txtlog1') ? 'has-error' : ''; ?>">
							<label for="">Tên</label>
							 <?php echo form_error('txtlog1');  ?>
							<input type="text" name="txtlog1" value="<?php echo  $item->txtlog1?>" class="form-control" id="" placeholder="Nhập vào tiêu đề">
						</div>
						<div class="form-group <?php echo form_error('txtlog2') ? 'has-error' : ''; ?>">
							<label for="">Chuyên ngành</label>
							 <?php echo form_error('txtlog2');  ?>
							<input type="text" name="txtlog2" value="<?php echo  $item->txtlog2?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						<div class="form-group <?php echo form_error('fa') ? 'has-error' : ''; ?>">
							<label for="">Facebook</label>
							 <?php echo form_error('fa');  ?>
							<input type="text" name="fa" value="<?php echo  $item->fa?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						
						<div class="form-group <?php echo form_error('tw') ? 'has-error' : ''; ?>">
							<label for="">Liên kết Twiter</label>
							 <?php echo form_error('tw');  ?>
							<input type="text" name="tw" value="<?php echo  $item->tw?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						<div class="form-group <?php echo form_error('google') ? 'has-error' : ''; ?>">
							<label for="">Liên kết Google</label>
							 <?php echo form_error('google');  ?>
							<input type="text" name="google" value="<?php echo  $item->google?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						<div class="form-group <?php echo form_error('zalo') ? 'has-error' : ''; ?>">
							<label for=""> Liên kết Zalo</label>
							 <?php echo form_error('zalo');  ?>
							<input type="text" name="zalo" value="<?php echo  $item->zalo?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						<div class="form-group <?php echo form_error('title') ? 'has-error' : ''; ?>">
							<label for="">Title</label>
							 <?php echo form_error('title');  ?>
							<input type="text" name="title" value="<?php echo  $item->title?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						
						<div class="form-group <?php echo form_error('Introduction1') ? 'has-error' : ''; ?>">
							<label for="">Introduction1</label>
							
								<textarea class="form-control" name="Introduction1"><?php echo  $item->Introduction1?></textarea>
						</div>
						<div class="form-group <?php echo form_error('Introduction2') ? 'has-error' : ''; ?>">
							<label for="">Introduction2</label>
							
							<textarea class="form-control" name="Introduction2" ><?php echo  $item->Introduction2 ?></textarea>
						</div>
						<div class="form-group">
							<label for="">Footer</label>
							
							<textarea name="footer" id="footer" class="ckeditor"><?php echo  $item->footer?></textarea> 
							
						</div>
				</div>

			</div>
		</div>
		<div class="col-xs-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Sửa</h3>
				</div>
				<div class="panel-body">
					
						<div class="form-group <?php echo form_error('img') ? 'has-error' : ''; ?>">
							<label for="">img</label>
							 <?php echo form_error('img');  ?>
							<input type="text" name="img" value="<?php echo  $item->img?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
								<div class="form-group <?php echo form_error('choose') ? 'has-error' : ''; ?>">
							<label for="">Choose</label>
							 <?php echo form_error('choose');  ?>
							<input type="text" name="choose" value="<?php echo  $item->choose?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						<div class="form-group <?php echo form_error('titlechose') ? 'has-error' : ''; ?>">
							<label for="">Titlechose</label>
							 <?php echo form_error('titlechose');  ?>
							<input type="text" name="titlechose" value="<?php echo  $item->titlechose?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>

						<div class="form-group <?php echo form_error('address') ? 'has-error' : ''; ?>">
							<label for="">Address</label>
							 <?php echo form_error('address');  ?>
							<input type="text" name="address" value="<?php echo  $item->address?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						
						
						
						<div class="form-group <?php echo form_error('email') ? 'has-error' : ''; ?>">
							<label for="">Email</label>
							 <?php echo form_error('email');  ?>
							<input type="text" name="email" value="<?php echo  $item->email?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						<div class="form-group <?php echo form_error('phone1') ? 'has-error' : ''; ?>">
							<label for="">Số điện thoại 1</label>
							 <?php echo form_error('phone1');  ?>
							<input type="text" name="phone1" value="<?php echo  $item->phone1?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						<div class="form-group <?php echo form_error('phone2') ? 'has-error' : ''; ?>">
							<label for="">Số điện thoại 2</label>
							 <?php echo form_error('phone2');  ?>
							<input type="text" name="phone2" value="<?php echo  $item->phone2?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						<div class="form-group <?php echo form_error('youtube') ? 'has-error' : ''; ?>">
							<label for="">Youtube</label>
							 <?php echo form_error('youtube');  ?>
							<input type="text" name="youtube" value="<?php echo  $item->youtube?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						<div class="form-group <?php echo form_error('map') ? 'has-error' : ''; ?>">
							<label for="">Tạo độ google map</label>
							 <?php echo form_error('map');  ?>
							<input type="text" name="map" value="<?php echo  $item->map?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						<div class="form-group ">
							<label for="">Hình ảnh</label>
							
							<input type="file" name="imgs" class="form-control">
							<img src="<?php echo  base_url()?>/upload/chef/" width="120px" alt="">	
						</div>
						
						<button type="submit" class="btn btn-primary">Cập nhật</button>
								<a href="<?php echo base_url()?>Backend/ChefController/"><span class="btn btn-info">Quay lại</span></a>
					</form>
					
				</div>

			</div>
		</div>
	</div>
</div>
