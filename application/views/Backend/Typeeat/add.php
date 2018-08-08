

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
					<h3 class="panel-title">Thêm mới loại món ăn</h3>
				</div>
				<div class="panel-body">
					<form action="<?php echo base_url()?>index.php/Backend/TypeEatController/add" method="POST" role="form">
						<div class="form-group <?php echo form_error('name') ? 'has-error' : ''; ?>">
							<label for="">Tên</label>
							 <?php echo form_error('title');  ?>
							<input type="text" name="name" value="<?php echo set_value('name')?>" class="form-control" id="" placeholder="Nhập vào tiêu đề">
						</div>
						<div class="form-group <?php echo form_error('order') ? 'has-error' : ''; ?>">
							<label for="">Thứ tự</label>
							 <?php echo form_error('order');  ?>
							<input type="text" name="order" value="<?php echo set_value('order')?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						
						<div class="form-group ">
							<label for="">Trạng thái Ẩn / Hiện</label>

						</div>
						<div class="form-group">
								<input type="checkbox" name="status" id="" placeholder="Input field">
						</div>
						<button type="submit" class="btn btn-primary">Thêm</button>
								<a href="<?php echo base_url()?>index.php/Backend/TypeEatController/"><span class="btn btn-info">Quay lại</span></a>
					</form>
					
				</div>

			</div>
		</div>
		
	</div>
</div>
