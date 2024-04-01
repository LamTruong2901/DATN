
<?php $__env->startSection('slide'); ?>
<?php echo $__env->make('pages.inc.slide', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sibar_left'); ?>
<?php echo $__env->make('pages.inc.sibar_left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Sản phẩm nổi bật</h2>
							<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						
						<div class="col-sm-4">
							<form>
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											
												<?php echo e(csrf_field()); ?>

												<input type="hidden" value="<?php echo e($pro->product_id); ?>" class="cart_product_id_<?php echo e($pro->product_id); ?>">
												<input type="hidden" value="<?php echo e($pro->product_name); ?>" class="cart_product_name_<?php echo e($pro->product_id); ?>">
												<input type="hidden" value="<?php echo e($pro->product_image); ?>" class="cart_product_image_<?php echo e($pro->product_id); ?>">
												<input type="hidden" value="<?php echo e($pro->product_price); ?>" class="cart_product_price_<?php echo e($pro->product_id); ?>">
												<input type="hidden" value="1" class="cart_product_qty_<?php echo e($pro->product_id); ?>">
												<input name="productid_hidden" type="hidden"  value="<?php echo e($pro->product_id); ?>" />
											<a href="/show-detail/<?php echo e($pro->product_id); ?>">
											<img src="/uploads/product/<?php echo e($pro->product_image); ?>" alt="" />
											<h2><?php echo e(number_format($pro->product_price).' '.'VND'); ?></h2>
											<p><?php echo e($pro->product_name); ?></p>
											</a>
											<button type="button" class="btn btn-default add-to-cart" data-id_product="<?php echo e($pro->product_id); ?>" name="add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</button>
											
										</div>
										
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><button type="button" class="btn btn-default add-to-wishlist" data-id_product="<?php echo e($pro->product_id); ?>" name="add-to-wishlist"><i class="fa fa-plus-square"></i>Yêu thích</button></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
									</ul>
								</div>
							</div>
							</form>
						</div>
						
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						
			
						
						
					</div><!--features_items-->
					
				
					
					
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\smartpoint\resources\views/pages/home.blade.php ENDPATH**/ ?>