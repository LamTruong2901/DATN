
<?php $__env->startSection('sibar_left'); ?>
<?php echo $__env->make('pages.inc.sibar_left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
                        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                        
						<div class="col-sm-5">
							<div class="view-product">
								<img src="/uploads/product/<?php echo e($pro->product_image); ?>" alt="" />
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>

						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?php echo e($pro->product_name); ?></h2>
								<p> Mã ID: <?php echo e($pro->product_id); ?></p>
								<img src="images/product-details/rating.png" alt="" />
								<form action="/save-cart" method="post">
									<?php echo e(csrf_field()); ?>

								<span>
									<span><?php echo e(number_format($pro->product_price).' '.'VND'); ?></span>
									<label>Số lượng:</label>
									<input name="qty" type="number" min="1" value="1" />
									<input name="productid_hidden" type="hidden"  value="<?php echo e($pro->product_id); ?>" />
									<a href="/save-cart">
									<button type="submit" class="btn btn-fefault cart">
										<i  class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
									</a>
								</span>
								</form>
								<p><b>Tình trạng:</b> Còn hàng</p>
								<p><b>Điều kiện:</b> Mới 100%</p>
								<p><b>Thương hiệu:</b> <?php echo e($pro->brand_name); ?></p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#details" data-toggle="tab">Chi tiết</a></li>
								<li ><a href="#reviews" data-toggle="tab">Đánh giá (0)</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="details" >
								
									<p><?php echo $pro->product_content; ?></p>
							</div>
							
							
							
							
							<div class="tab-pane fade " id="reviews" >
								<div class="col-sm-12">
									<div class="fb-comments" data-href="https://firstphpweb.000webhostapp.com/" data-width="" data-numposts="5"></div>
								
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<?php $__currentLoopData = $related_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$rel_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<div class="col-sm-4">
											<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<a href="/show-detail/<?php echo e($rel_pro->product_id); ?>">
													<img src="/uploads/product/<?php echo e($rel_pro->product_image); ?>" alt="" />
													<h2><?php echo e(number_format($rel_pro->product_price).' '.'VND'); ?></h2>
													<p><?php echo e($rel_pro->product_name); ?></p>
													</a>
												</div>
											</div>
										</div>
									</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									
								
								</div>
							<div class="item">	
									<?php $__currentLoopData = $related_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$rel_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<div class="col-sm-4">
											<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<a href="/show-detail/<?php echo e($rel_pro->product_id); ?>">
													<img src="/uploads/product/<?php echo e($rel_pro->product_image); ?>" alt="" />
													<h2><?php echo e(number_format($rel_pro->product_price).' '.'VND'); ?></h2>
													<p><?php echo e($rel_pro->product_name); ?></p>
													</a>
												</div>
											</div>
										</div>
									</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									
								
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\smartpoint\resources\views/pages/product/show_details.blade.php ENDPATH**/ ?>