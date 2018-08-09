
              <!-- page start-->
              <div class="row">
                <div class="col-sm-12">
              <section class="panel">
              <header class="panel-heading">
                 Danh sách các đầu bếp hàng đầu
             <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
          
              </header>
              
              <div class="panel-body">
               <form action="<?php echo base_url()?>index.php/Backend/CustumerController/check" method="POST">
               <div class="btn btn-shadow btn-success "><a href="<?php
                echo base_url();?>index.php/Backend/CustumerController/add"><i class="glyphicon glyphicon-plus"></i>Thêm mới</a></div>
                
        

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
                  <div class="table-reponsive">
                     <table  style="" class="display table table-bordered table-striped" id="">
               <thead>
              <tr>
                  <th>STT</th>
                  <th style="width:25px"><input class="checksall" type="checkbox"></th>
                  <th style="width:130px">Tên </th>
                  <th class="hidden-phone" >Hình ành</th>
                  <th class="hidden-phone" >Nghề nghiệp</th>
                 
                  <th class="hidden-phone" >Nội dung</th>
                   <th class="hidden-phone"style="witd:130px" >Trạng thái ẩn hiện</th>
                  
                  <th class="hidden-phone" colspan="2">Tùy Chọn</th>
                 
              </tr>
              </thead>
              <tbody>
    
             <?php $i= 1;foreach ($list as $key => $value) { ?>   
              <tr class="gradeX">
                  <td><?=$i++?></td>
                  <td><input type="checkbox" name="ids[]" class="checks"  value="<?=$value->id?>"></td>
                  <td><?=$value->name?></td>
                   <td>
                     <img src="<?= base_url()?>/upload/cus/<?=$value->img?>" class="img-thumbnail"  alt="" style="width:100px">
                   </td>
                   <td><?=$value->job?></td>
                  <td><?=$value->content?></td>
                  
                  <td><?= ($value->status) ==1 ? 'Đã xác nhận' :'Chưa xác nhận';?></td>
                  <td class=""><a class="btn btn-primary" href="<?php echo base_url()?>index.php/Backend/CustumerController/edit/<?php echo $value->id ?>"><i class="glyphicon glyphicon-pencil "></i> Sửa</a></td>
                   <td class=""> <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa ?')" href="<?php echo base_url()?>index.php/Backend/CustumerController/del/<?php echo $value->id ?>"><i class="glyphicon glyphicon-trash "></i> Xóa</a></td>
              </tr>
              <?php }?>
             
             
              </table>
                  </div>
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
