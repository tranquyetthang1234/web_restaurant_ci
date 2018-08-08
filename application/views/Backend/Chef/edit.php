

<div class="container" >
	<div class="row">
		<div class="col-xs-11">
			<ol class="breadcrumb">
						<li>
							<a href="">Trang chủ</a>
						</li>
						<li class="active">
							<a href="#">Sửa </a>
						</li>
						
					</ol>
		</div>
		<div class="col-xs-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Sửa</h3>
				</div>
				<div class="panel-body">
					<form action="<?php echo base_url()?>index.php/Backend/ChefController/edit/<?php echo $item->id?>" enctype="multipart/form-data" method="POST" role="form">
						
						<div class="form-group <?php echo form_error('name') ? 'has-error' : ''; ?>">
							<label for="">Tên</label>
							 <?php echo form_error('name');  ?>
							<input type="text" name="name" value="<?php echo  $item->name?>" class="form-control" id="" placeholder="Nhập vào tiêu đề">
						</div>
						<div class="form-group <?php echo form_error('major') ? 'has-error' : ''; ?>">
							<label for="">Chuyên ngành</label>
							 <?php echo form_error('major');  ?>
							<input type="text" name="major" value="<?php echo  $item->major?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						<div class="form-group <?php echo form_error('fa') ? 'has-error' : ''; ?>">
							<label for="">Facebook</label>
							 <?php echo form_error('fa');  ?>
							<input type="text" name="fa" value="<?php echo  $item->fa?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						
						<div class="form-group <?php echo form_error('tw') ? 'has-error' : ''; ?>">
							<label for="">Twiter</label>
							 <?php echo form_error('tw');  ?>
							<input type="text" name="tw" value="<?php echo  $item->tw?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						<div class="form-group <?php echo form_error('googlel') ? 'has-error' : ''; ?>">
							<label for="">Google</label>
							 <?php echo form_error('googlel');  ?>
							<input type="text" name="googlel" value="<?php echo  $item->googlel?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						
						<div class="form-group ">
							<label for="">Hình ảnh</label>
							
							<input type="file" name="imgs" class="form-control">
							<img src="<?php echo  base_url()?>/upload/chef/<?=$item->img?>" width="120px" alt="">	
						</div>
						
						<div class="form-group ">
							<label for="">Trạng thái Ẩn / Hiện</label>
						</div>
						<div class="form-group">
								<input type="checkbox" name="status" id="" placeholder="Input field">
						</div>
						<button type="submit" class="btn btn-primary">Cập nhật</button>
								<a href="<?php echo base_url()?>index.php/Backend/ChefController/"><span class="btn btn-info">Quay lại</span></a>
					</form>
					
				</div>

			</div>
		</div>
		
	</div>
</div>
