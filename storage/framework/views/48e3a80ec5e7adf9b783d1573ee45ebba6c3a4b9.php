
<?php $__env->startSection('admin_content'); ?>
     <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm vận chuyển
                        </header>
                        <?php
	$message = Session()->get('message');
	if($message){
		echo '<span class="tex-aler">'.$message.'</span>';
		Session()->put('message',null);
	}
	?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" id="formValidation" action="insert-delivery" method="post">
                                    <?php echo e(csrf_field()); ?>

                               
                                <div class="form-group">
                                    <label  for="exampleInputEmail1">Chọn thành phố</label>
                                     <select name="city" id="city" class="form-control input-sm m-bot15 choose city">
                                    <option value="0">-Chọn tỉnh thành phố-</option>
                                    <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ci): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($ci->matp); ?>">-<?php echo e($ci->name_city); ?>-</option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                   </select>
                                </div>
                                <div class="form-group">
                                    <label  for="exampleInputEmail1">Chọn quận huyện</label>
                                     <select name="province" id="province" class="form-control input-sm m-bot15 province choose">
                                        
                                    <option value="0">-Chọn quận huyện-</option>

                                    
                                   </select>
                                </div>
                                  <div class="form-group">
                                    <label  for="exampleInputEmail1">Chọn xã phường</label>
                                     <select name="wards" id="wards" class="form-control input-sm m-bot15 wards ">
                                    <option value="0">-Chọn xã phường-</option>

                                    
                                   </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phí Vận Chuyển</label>
                                    <input type="text"  name="delivery_pice" class="form-control fee_ship" id="delivery_price" >
                                </div>
                                <button type="button" name="add_delivery" class="btn btn-info add_delivery">Thêm phí vận chuyển</button>
                                
                            </form>
                            </div>
                            <div id="load_delivery"></div>
                        </div>
                    </section>

            </div>
         
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\smartpoint\resources\views/admin/delivery/add_delivery.blade.php ENDPATH**/ ?>