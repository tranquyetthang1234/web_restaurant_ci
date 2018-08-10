
              <!-- page start-->
              <div class="row">
                <div class="col-sm-12">
              <section class="panel">
              <header class="panel-heading">
                 Danh sách các dịch vụ
             <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
              </header>
              
              <div class="panel-body">
               <form action="<?php echo base_url()?>index.php/Backend/ServiceController/check" method="POST">
               <div class="btn btn-shadow btn-success "><a href="<?php
                echo base_url();?>index.php/Backend/ServiceController/add"><i class="glyphicon glyphicon-plus"></i>Thêm mới</a></div>
                
        

               <div class="btn-group" id="check">
                  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle " type="button" aria-expanded="false">Tùy chọn <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><input type="submit" value="Xóa các mục đã chọn" name="delcheck"  onclick=" return confirm('Bạn đã chắc chắn ?')" class=" btn-block"></li>
                            <li><input type="submit" name="statuscheck" onclick="return confirm('Bạn chắc chắn đã chọn ?')" value="Thay đổi trạng thái ẩn hiện"  class=" btn-block"></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                    </ul>            
              </div>

             <?php if($this->session->flashdata('message')):?>
                <div class="col-xs-4 thang" style="z-index :99;position:fixed;right:10px;top:100px">
                  <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <strong><?php echo  $this->session->flashdata('message');?>  </strong>
                 </div>
                 <?php endif;?>
            </div>
              <div class="adv-table" style="margin-top:6px;">
              <table  style="" class="display table table-bordered table-striped" id="">
              <thead>
              <tr>
                  <th>STT</th>
                  <th style="width:25px"><input class="checksall" type="checkbox"></th>
                  <th style="width:130px">Tên </th>
                  <th class="hidden-phone" >Email</th>
                   <th class="hidden-phone" >Trang thái</th>
                  <th class="hidden-phone" >Quyền</th>
                   <th class="hidden-phone" >Ngày tạo</th>
                  <th class="hidden-phone" colspan="2">Chi tiết</th>
                  <th class="hidden-phone" colspan="2">Tùy Chọn</th>
                 
              </tr>
              </thead>
              <tbody>
		
             <?php $i= 1;foreach ($list as $key => $value) { ?>   
              <tr class="gradeX">
                  <td><?=$i++?></td>
                  <td><input type="checkbox" name="ids[]" class="checks"  value="<?=$value->id?>"></td>
                  <td><?=$value->name?></td>
                  <td><?=$value->emaill?></td>
                  <td><?= ($value->active) ==1 ? 'Kích hoạt' :'Tạm khóa';?></td>
                  
                  <td><?= ($value->role) ==1 ? 'Admin' :'Nhân viên';?></td>
                 <td><?= ($value->created_at)?></td>
                <td> <a class="btn btn-primary" data-toggle="modal" href='#modal-<?=$value->id?>'><i class="glyphicon glyphicon-pencil "></i></a></td>
                  <td ><a class="btn btn-info" href="<?php echo base_url()?>index.php/Backend/ServiceController/edit/<?php echo $value->id ?>"><i class="glyphicon glyphicon-pencil "></i> Sửa</a></td>
                   <td class=""> <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa ?')" href="<?php echo base_url()?>index.php/Backend/UserController/del/<?php echo $value->id ?>"><i class="glyphicon glyphicon-trash "></i> Xóa</a></td>
              </tr>
              <?php }?>
             
             
              </table>
             </form> 
              </div>
              </div>
              </section>
              </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
              <section class="panel">
              
              <div class="panel-body">
              <div class="adv-table">
             
              </div>
              </div>
              </section>
              </div>
              </div>

              <!-- page end-->

<div class="t">
    <form action="" method="POST" >
   <?php $i= 1;foreach ($list as $key => $value) { ?>   
  <div class="modal fade" id="modal-<?=$value->id?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Thông tin tài khoản</h4>
        </div>
      
        <div class="modal-body">
           <div class="form-group">
              <label class="col-md-12" for="">Tên</label>
              <input type="text" name="title" value="<?=$value->name ?>" class="form-control" id="" placeholder="Nhập vào tiêu đề">
            </div>
            <div class="form-group">
              <label class="col-md-12" for="">Email</label>
              <input type="text" name="title" value="<?=$value->emaill ?>" class="form-control" id="" placeholder="Nhập vào tiêu đề">
            </div>
            <div class="form-group">
              <label class="col-md-12" for="">Địa chỉ</label>
              <input type="text" name="title" value="<?=$value->address ?>" class="form-control" id="" placeholder="Nhập vào tiêu đề">
            </div>
           <div class="form-group ">
              <label for="">Quyền tài khoản</label>

            </div>
            <div class="form-group">
                <input type="checkbox"<?php echo  ($value->role) == 1 ? 'checked':'' ?> name="status" id="" placeholder="Input field">
            </div>
            <div class="form-group <?php echo form_error('icon') ? 'has-error' : ''; ?>">
              <label for="">Trạng thái tài khoản</label>
               <?php echo form_error('icon');  ?>
              <input type="checkbox"<?php echo  ($value->active) == 1 ? 'checked':'' ?> name="status" id="" placeholder="Input field">
            </div>
            <div class="form-group <?php echo form_error('fa') ? 'has-error' : ''; ?>">
              <label for="">Icon hiển thị</label>
               <?php echo form_error('fa');  ?>
              <input type="text" name="fa" value="<?php echo $value->fa?>" class="form-control" id="" placeholder="fa fa-fb">
            </div>
             <div class="form-group <?php echo form_error('birthday') ? 'has-error' : ''; ?>">
              <label for="">Icon hiển thị</label>
               <?php echo form_error('birthday');  ?>
              <input type="text" name="birthday" value="<?php echo $value->birthday?>" class="form-control" id="" placeholder="fa fa-fb">
            </div>
             <div class="form-group <?php echo form_error('google') ? 'has-error' : ''; ?>">
              <label for="">Icon hiển thị</label>
               <?php echo form_error('google');  ?>
              <input type="text" name="google" value="<?php echo $value->google?>" class="form-control" id="" placeholder="fa fa-fb">
            </div>
            <div class="form-group ">
              <label for="">Hình ảnh</label>
              <img src="" alt="" style="width:200px">
              <input type="file" name="google" value="<?php echo $value->avatar?>" class="form-control" id="" placeholder="fa fa-fb">
            </div>
         </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>

      </div>
    </div>
  </div>
   <?php }?>
</div> </form>