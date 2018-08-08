

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
					<h3 class="panel-title">Sửa hình ảnh</h3>
				</div>
				<div class="panel-body">
					<form action="<?php echo base_url()?>index.php/Backend/LiController/edit/<?php echo $item->id?>" method="POST" role="form" enctype="multipart/form-data">
						
					
						<div class="form-group <?php echo form_error('name') ? 'has-error' : ''; ?>">
							<label for="">Tên</label>
							 <?php echo form_error('name');  ?>
							<input type="text" name="name" value="<?php echo  $item->name?>" class="form-control" id="" placeholder="Nhập vào tiêu đề">
						</div>
						<div class="form-group ">
							<label for="">Hình ảnh</label>
							
							<input type="file" name="imgs" class="form-control">
							<img src="<?php echo  base_url()?>/upload/lib/<?=$item->img?>" width="120px" alt="">	
						</div>
						
						<div class="form-group ">
							<label for="">Trạng thái Ẩn / Hiện</label>
						</div>
						<div class="form-group">
								<input type="checkbox" <?php echo  ($item->status) == 1 ? 'checked':'' ?> name="status" id="" placeholder="Input field">
						</div>
						
						<button type="submit" class="btn btn-primary">Cập nhật</button>
								<a href="<?php echo base_url()?>index.php/Backend/LiController/"><span class="btn btn-info">Quay lại</span></a>
					</form>
					
				</div>

			</div>
		</div>
		
	</div>
</div>
