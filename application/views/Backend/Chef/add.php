

<div class="container" >
	<div class="row">
		<div class="col-xs-11">
			<ol class="breadcrumb">
						<li>
							<a href="<?php base_url()?>">Trang chủ</a>
						</li>
						<li class="active">
							<a href="#">Thêm mới</a>
						</li>
						
					</ol>
		</div>
		<div class="col-xs-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Thêm mới đầu bếp</h3>
				</div>
				<div class="panel-body">
					<form action="<?php echo base_url()?>Backend/ChefController/add" method="POST" role="form" enctype="multipart/form-data">
						<div class="form-group <?php echo form_error('name') ? 'has-error' : ''; ?>">
							<label for="">Tên</label>
							 <?php echo form_error('name');  ?>
							<input type="text" name="name" value="<?php echo set_value('name')?>" class="form-control" id="" placeholder="Nhập vào tiêu đề">
						</div>
						<div class="form-group <?php echo form_error('major') ? 'has-error' : ''; ?>">
							<label for="">Chuyên ngành</label>
							 <?php echo form_error('major');  ?>
							<input type="text" name="major" value="<?php echo set_value('major')?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						<div class="form-group <?php echo form_error('fa') ? 'has-error' : ''; ?>">
							<label for="">Facebook</label>
							 <?php echo form_error('fa');  ?>
							<input type="text" name="fa" value="<?php echo set_value('fa')?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						
						<div class="form-group <?php echo form_error('tw') ? 'has-error' : ''; ?>">
							<label for="">Twiter</label>
							 <?php echo form_error('tw');  ?>
							<input type="text" name="tw" value="<?php echo set_value('tw')?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						<div class="form-group <?php echo form_error('googlel') ? 'has-error' : ''; ?>">
							<label for="">Google</label>
							 <?php echo form_error('googlel');  ?>
							<input type="text" name="googlel" value="<?php echo set_value('googlel')?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						<div class="form-group <?php echo form_error('content') ? 'has-error' : ''; ?>">
							<label for="">Hình ảnh</label>
							<input type="file" name="imgs" class="form-control" id="">
						</div>
						
						<div class="form-group ">
							<label for="">Trạng thái Ẩn / Hiện</label>
						</div>
						<div class="form-group">
								<input type="checkbox" name="status" id="" placeholder="Input field">
						</div>
						<button type="submit" class="btn btn-primary">Thêm</button>
								<a href="<?php echo base_url()?>Backend/ChefController/"><span class="btn btn-info">Quay lại</span></a>
					</form>
					
				</div>

			</div>
		</div>
		
	</div>
</div>
