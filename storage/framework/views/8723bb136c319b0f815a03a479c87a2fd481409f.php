
<?php $__env->startSection('admin_content'); ?>
 <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Thông tin người mua
    </div>
    
    <?php
	$message = Session()->get('message');
	if($message){
		echo '<span class="tex-aler">'.$message.'</span>';
		Session()->put('message',null);
	}
	?>
    
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            
            <th>Tên khách hàng </th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          
          <tr>
            
          
            <td><?php echo e($customer->customer_name); ?></td>
           <td><?php echo e($customer->customer_phone); ?></td>
           <td><?php echo e($customer->customer_email); ?></td>
            
           
          </tr>
         
        
        </tbody>
      </table>
    </div>
    
  </div>
</div>
        
         
        </div>
 <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Thông tin người vận chuyển
    </div>
  
    <?php
	$message = Session()->get('message');
	if($message){
		echo '<span class="tex-aler">'.$message.'</span>';
		Session()->put('message',null);
	}
	?>
    
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
           
           <th>Tên shipper </th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Ghi chú</th>
            <th>Hình thức thanh toán</th>
            
            
          </tr>
        </thead>
        <tbody>
         
        
                <td><?php echo e($shipping->shipping_name); ?></td>
                <td><?php echo e($shipping->shipping_address); ?></td>
                <td><?php echo e($shipping->shipping_phone); ?></td>
                 <td><?php echo e($shipping->shipping_email); ?></td>
                  <td><?php echo e($shipping->shipping_message); ?></td>
                  
                <?php if($shipping->shipping_method==0): ?>
                    <td>Chuyển khoản</td>
                <?php else: ?>
                      <td>Tiền mặt</td>
                <?php endif; ?>
          
           
        </tbody>
      </table>
    </div>
   
  </div>
</div>
        
         
        </div>
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê đơn hàng
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <?php
	$message = Session()->get('message');
	if($message){
		echo '<span class="tex-aler">'.$message.'</span>';
		Session()->put('message',null);
	}
	?>
    
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:250px;">
              STT
            </th>
            <th>Tên sản phẩm </th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Tổng tiền</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
         <?php
             $i=1;
             $total=0;
         ?>
          <?php $__currentLoopData = $order_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <?php
              
              
              $subtotal= $detail->product_sales_quantity*$detail->product_price;
              $total+=$subtotal;
          ?>
          <tr>
            <td><?php echo e($i++); ?></td>
            <td><?php echo e($detail->product_name); ?></td>
           <td><?php echo e($detail->product_sales_quantity); ?></td>
            <td><?php echo e($detail->product_price); ?></td>
            <td><?php echo e(number_format($detail->product_sales_quantity*$detail->product_price).' '.'VND'); ?></td>
           
          </tr>
          
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         
          
          
       
        <tr>
          
       <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$ord): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <td>Tổng: <?php echo e(number_format($ord->order_total).' '.'VND'); ?>(đã bao gồm phí phận chuyển)<br>
                  
                  <?php if($ord->order_total_after==0): ?>
                       Tiền sau giảm: <?php echo e(number_format($ord->order_total).' '.'VND'); ?>

                  <?php else: ?>
                      Tiền sau giảm: <?php echo e(number_format($ord->order_total_after).' '.'VND'); ?>

                  <?php endif; ?>
              </td>
        
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
          
          
        </tr>
        </tbody>
        
      </table>
      
    </div>
    <footer class="panel-footer">
      <div class="row">
        <?php $__currentLoopData = $order_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <a target="blank" href="\print-order\<?php echo e($detail->order_code); ?>">In ra PDF</a>
       
      </div>
    </footer>
  </div>
</div>
        
         
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\smartpoint\resources\views/admin/view_order.blade.php ENDPATH**/ ?>