	<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh mục</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<?php $__currentLoopData = $cate_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$cate_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="/show-category/<?php echo e($cate_pro->category_id); ?>"><?php echo e($cate_pro->category_name); ?></a></h4>
								</div>
							</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
							
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Thương hiệu</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<?php $__currentLoopData = $brand_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$brand_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<li><a href="/show-brand/<?php echo e($brand_pro->brand_id); ?>"> <span class="pull-right">(50)</span><?php echo e($brand_pro->brand_name); ?></a></li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									
								
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="<?php echo e(asset('frontend/images/mau-thiet-ke-giam-gia-iphone-400x400.jpg')); ?>" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div><?php /**PATH C:\xampp\htdocs\smartpoint\resources\views/pages/inc/sibar_left.blade.php ENDPATH**/ ?>