

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
					<h3 class="panel-title">Thêm mới  món ăn</h3>
				</div>
				<div class="panel-body">
					<form action="<?php echo base_url()?>index.php/Backend/BookTableController/add" method="POST" role="form">
						<div class="form-group <?php echo form_error('name') ? 'has-error' : ''; ?>">
							<label for="">Tên</label>
							 <?php echo form_error('name');  ?>
							<input type="text" name="name" value="<?php echo set_value('name')?>" class="form-control" id="" placeholder="Nhập vào tiêu đề">
						</div>
						<div class="form-group <?php echo form_error('phone') ? 'has-error' : ''; ?>">
							<label for="">Số điện thoại</label>
							 <?php echo form_error('phone');  ?>
							<input type="text" name="phone" value="<?php echo set_value('phone')?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						<div class="form-group <?php echo form_error('email') ? 'has-error' : ''; ?>">
							<label for="">Địa chỉ email</label>
							 <?php echo form_error('email');  ?>
							<input type="text" name="email" value="<?php echo set_value('email')?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						<div class="form-group <?php echo form_error('people') ? 'has-error' : ''; ?>">
							<label for="">Số người</label>
							 <?php echo form_error('people');  ?>
							<input type="text" name="people" value="<?php echo set_value('people')?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						<div class="form-group <?php echo form_error('date') ? 'has-error' : ''; ?>">
							<label for="">Ngày đặt</label>
							 <?php echo form_error('date');  ?>
							<input type="text" name="date" value="<?php echo set_value('date')?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						<div class="form-group <?php echo form_error('content') ? 'has-error' : ''; ?>">
							<label for="">Nội dung</label>
							 <?php echo form_error('content');  ?>
							<input type="text" name="content" value="<?php echo set_value('content')?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						
						
						<div class="form-group ">
							<label for="">Trạng thái Ẩn / Hiện</label>

						</div>
						<div class="form-group">
								<input type="checkbox" name="status" id="" placeholder="Input field">
						</div>
						<button type="submit" class="btn btn-primary">Thêm</button>
								<a href="<?php echo base_url()?>index.php/Backend/BookTableController/"><span class="btn btn-info">Quay lại</span></a>
					</form>
					
				</div>

			</div>
		</div>
		
	</div>
</div>
