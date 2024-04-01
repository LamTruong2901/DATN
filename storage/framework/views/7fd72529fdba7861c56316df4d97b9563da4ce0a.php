
<?php $__env->startSection('admin_content'); ?>
     <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhật sản phẩm
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
                                <?php $__currentLoopData = $edit_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$edit_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                
                                <form role="form" action="/update-product/<?php echo e($edit_pro->product_id); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo e(csrf_field()); ?>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" name="product_name" value="<?php echo e($edit_pro->product_name); ?>" class="form-control" id="exampleInputEmail1" >
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Giá sản phẩm</label>
                                    <input type="text" name="product_price" value="<?php echo e($edit_pro->product_price); ?>" class="form-control" id="exampleInputEmail1" >
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                                    <input type="file"name="product_image" value="<?php echo e($edit_pro->product_image); ?>" class="form-control" id="exampleInputEmail1" >
                                    <img src="/uploads/product/<?php echo e($edit_pro->product_image); ?>" width="100px" >
                                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                    <textarea  style="resize: none " rows="5"  class="form-control" name="product_desc" id="exampleInputPassword1" >
                                        <?php echo e($edit_pro->product_desc); ?>

                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Từ khóa sản phẩm</label>
                                    <textarea  style="resize: none " rows="5"  class="form-control" name="product_keywords" id="exampleInputPassword1" >
                                        <?php echo e($edit_pro->product_keywords); ?>

                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                                    <textarea id="hidden_snippet" style="resize: none " rows="5"  class="form-control" name="product_content" id="exampleInputPassword1" >
                                        <?php echo e($edit_pro->product_content); ?>

                                    </textarea>
                                </div>
                                <div class="form-group">
                                     <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                                   <select name="product_cate" class="form-control input-sm m-bot15">
                                    <?php $__currentLoopData = $cate_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$cate_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($cate_pro->category_id==$edit_pro->category_id): ?>
                                        <option selected value="<?php echo e($cate_pro->category_id); ?>"><?php echo e($cate_pro->category_name); ?></option>
                                        <?php else: ?>
                                        <option value="<?php echo e($cate_pro->category_id); ?>"><?php echo e($cate_pro->category_name); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   </select>
                                </div>
                                    <div class="form-group">
                                     <label for="exampleInputPassword1">Thương hiệu</label>
                                   <select name="product_brand" class="form-control input-sm m-bot15">
                                    <?php $__currentLoopData = $brand_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $brand_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <?php if($brand_pro->brand_id==$edit_pro->brand_id): ?>
                                        <option selected value="<?php echo e($brand_pro->brand_id); ?>"><?php echo e($brand_pro->brand_name); ?></option>
                                        <?php else: ?>
                                        <option value="<?php echo e($brand_pro->brand_id); ?>"><?php echo e($brand_pro->brand_name); ?></option>
                                        <?php endif; ?>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   </select>
                                </div>
                               
                                <button type="submit" name="update_product" class="btn btn-info">Cập nhật sản phẩm</button>
                                
                            </form>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                        </div>
                    </section>

            </div>
         
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\smartpoint\resources\views/admin/edit_product.blade.php ENDPATH**/ ?>