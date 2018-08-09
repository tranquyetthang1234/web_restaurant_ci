

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
					<form action="<?php echo base_url()?>index.php/Backend/ServiceController/edit/<?php echo $item->id?>" method="POST" role="form">
						<div class="form-group <?php echo form_error('title') ? 'has-error' : ''; ?>">
							<label for="">Tiêu đề</label>
							 <?php echo form_error('title');  ?>
							<input type="text" name="title" value="<?php echo  $item->title?>" class="form-control" id="" placeholder="Nhập vào tiêu đề">
						</div>
						<div class="form-group <?php echo form_error('content') ? 'has-error' : ''; ?>">
							<label for="">Nội dung</label>
							 <?php echo form_error('content');  ?>
							<input type="text" name="content" value="<?php echo $item->content?>" class="form-control" id="" placeholder="Nhập vào nội dung ..">
						</div>
						<div class="form-group <?php echo form_error('icon') ? 'has-error' : ''; ?>">
							<label for="">Icon hiển thị</label>
							 <?php echo form_error('icon');  ?>
							<input type="text" name="icon" value="<?php echo $item->icon?>" class="form-control" id="" placeholder="fa fa-fb">
						</div>
						<div class="form-group ">
							<label for="">Trạng thái Ẩn / Hiện</label>

						</div>
						<div class="form-group">
								<input type="checkbox"<?php echo  ($item->status) == 1 ? 'checked':'' ?> name="status" id="" placeholder="Input field">
						</div>
						<button type="submit" class="btn btn-primary">Sửa</button>
								<a href="<?php echo base_url()?>index.php/Backend/ServiceController/"><span class="btn btn-info">Quay lại</span></a>
					</form>
					
				</div>

			</div>
		</div>
		
	</div>
</div>
