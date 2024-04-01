
<?php $__env->startSection('content'); ?>
<div class="features_items"><!--features_items-->
	<div class="fb-share-button" data-href="http://localhost:3000/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e($url_canonical); ?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
	
					<?php $__currentLoopData = $category_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<h2 class="title text-center"><?php echo e($name->category_name); ?></h2>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						
							<?php $__currentLoopData = $category_by_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$cate_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<a href="/show-detail/<?php echo e($cate_pro->product_id); ?>">
						<div class="col-sm-4">
						
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="/uploads/product/<?php echo e($cate_pro->product_image); ?>" alt="" />
											<h2><?php echo e(number_format($cate_pro->product_price).' '.'VND'); ?></h2>
											<p><?php echo e($cate_pro->product_name); ?></p>
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
						
						
						
						
					
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\smartpoint\resources\views/pages/category/show_category.blade.php ENDPATH**/ ?>