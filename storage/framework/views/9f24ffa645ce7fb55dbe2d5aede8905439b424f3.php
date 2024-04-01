
<?php $__env->startSection('content'); ?>
<div class="features_items"><!--features_items-->
                           
                            <h2 class="title text-center">Từ khóa: " <?php echo e($keywords); ?> "</h2>
                        
						
							<?php $__currentLoopData = $search; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<a href="/show-detail/<?php echo e($pro->product_id); ?>">
						<div class="col-sm-4">
						
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="/uploads/product/<?php echo e($pro->product_image); ?>" alt="" />
											<h2><?php echo e(number_format($pro->product_price).' '.'VND'); ?></h2>
											<p><?php echo e($pro->product_name); ?></p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
										</div>
										
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
									</ul>
								</div>
							</div>
							
						</div>
						</a>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						
			
						
						
					</div><!--features_items-->
					
					
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\smartpoint\resources\views/pages/product/search.blade.php ENDPATH**/ ?>