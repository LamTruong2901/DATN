<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-11">
									<img width="100%" src="<?php echo e(asset('frontend/images/vivo-v25-pro-sliding-pre.jpg')); ?>"  />
								</div>
								
							</div>
							<?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$ban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="item">
								<div class="col-sm-11">
									<img width="100%" src="/uploads/product/<?php echo e($ban->banner_image); ?>" alt="" />
								</div>
								
							</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
							
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider--><?php /**PATH C:\xampp\htdocs\smartpoint\resources\views/pages/inc/slide.blade.php ENDPATH**/ ?>