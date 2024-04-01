

<?php $__env->startSection('sibar_left'); ?>
<?php echo $__env->make('pages.inc.sibar_left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Danh Sách sản phẩm yêu thích</h2>
                                <?php
                                  
								  $wishlist =Session()->get('wishlist');
                              ?>
							<?php if($wishlist): ?>
								<?php $__currentLoopData = $wishlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						
						<div class="col-sm-4">
						
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<form>
												<?php echo e(csrf_field()); ?>

												<input type="hidden" value="<?php echo e($product->product_id); ?>" class="cart_product_id_<?php echo e($product->product_id); ?>">
												<input type="hidden" value="<?php echo e($product->product_name); ?>" class="cart_product_name_<?php echo e($product->product_id); ?>">
												<input type="hidden" value="<?php echo e($product->product_image); ?>" class="cart_product_image_<?php echo e($product->product_id); ?>">
												<input type="hidden" value="<?php echo e($product->product_price); ?>" class="cart_product_price_<?php echo e($product->product_id); ?>">
												<input type="hidden" value="1" class="cart_product_qty_<?php echo e($product->product_id); ?>">
												<input name="productid_hidden" type="hidden"  value="<?php echo e($product->product_id); ?>" />
											<a href="/show-detail/<?php echo e($product->product_id); ?>">
                                                
                                                    <img src="/uploads/product/<?php echo e($wish['product_image']); ?>" alt="" />
											        <h2><?php echo e(number_format($wish['product_price']).' '.'VND'); ?></h2>
											        <p><?php echo e($wish['product_name']); ?></p>
                                               
											
											</a>
											<button type="button" class="btn btn-default add-to-cart" data-id_product="<?php echo e($product->product_id); ?>" name="add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</button>
											</form>
										</div>
										
								</div>
							
							</div>
							
						</div>
						
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php else: ?>
								<span style="color: red; font-size:20px">Bạn chưa có sản phẩm yêu thích nào</span>
							<?php endif; ?>
							
                        
						

						
						
					</div><!--features_items-->
                    
					
				
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\smartpoint\resources\views/pages/wishlist.blade.php ENDPATH**/ ?>