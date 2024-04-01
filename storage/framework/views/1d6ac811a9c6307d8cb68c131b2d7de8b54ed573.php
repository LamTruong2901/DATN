

<?php $__env->startSection('content'); ?>

<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
                <?php
                    $content =Cart::content();
					
                    ?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Hình ảnh</td>
							<td class="description">Tên sp</td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Tổng</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php
							$total=0;
						?>
						<?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$v_content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php
								$subtotal = $v_content->price * $v_content->qty;
								$total+=$subtotal;
							?>
						
						<tr>
							<td class="cart_product">
								<a href=""><img src="<?php echo e('/uploads/product/'.$v_content->options->image); ?>"  width="50px" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo e($v_content->name); ?></a></h4>
								<p>Mã ID:<?php echo e($v_content->id); ?></p>
							</td>
							<td class="cart_price">
								<p><?php echo e(number_format($v_content->price).' '.'vnđ'); ?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="/update-quantity-cart" method="post">
										<?php echo e(csrf_field()); ?>

									
									<input class="cart_quantity_input" type="number" name="cart_quantity" value="<?php echo e($v_content->qty); ?>" autocomplete="off" size="2">
										<input type="hidden" name="rowId_cart" value="<?php echo e($v_content->rowId); ?>" class="form-control">
									<input type="submit" value="Cập nhật"  class="btn btn-default btn-sm">
									
									</form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
									<?php echo e(number_format($subtotal).' '.'vnđ'); ?>

								</p>
							</td>

							<td class="cart_delete">
								<a class="cart_quantity_delete" href="/delete-cart/<?php echo e($v_content->rowId); ?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			
			<div class="row">
				
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							
							<li>Tổng <span><?php echo e(number_format($total).' '.'vnđ'); ?></span></li>
							<li>
								Mã giảm : 
								<?php if(Session()->get('voucher')): ?>
									<?php $__currentLoopData = Session()->get('voucher'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$vou): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php if($vou['voucher_condition']==1): ?>
											<span><?php echo e($vou['voucher_number']); ?>%</span>	
											<p>
												<?php
												$total_voucher = ($total*$vou['voucher_number'])/100;
												echo '<li>Tổng giảm: <span>'.number_format($total_voucher).' '.'vnđ'.'</span></li>'
												?>
											</p>
										<?php else: ?>  
											<span><?php echo e(number_format($vou['voucher_number']).' '.'vnđ'); ?></span>
											<p>
												<?php
												$total_voucher = ($vou['voucher_number']);
												echo '<li>Tổng giảm: <span>'.number_format($total_voucher).' '.'vnđ'.'</span></li>'
												?>
											</p>
										<?php endif; ?>
										<li>Tiền sau giảm <span><?php echo e(number_format($total-$total_voucher).' '.'vnđ'); ?></span></li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php endif; ?>
							</li>
							<form action="check-voucher" method="post">
								<?php echo csrf_field(); ?>
							<li><input type="text" name="voucher" placeholder="Nhập voucher...">
								<span><input type="submit" value="Tính mã giảm giá"></span>
							</li>
							</form>
							
						</ul>
							
							<?php
									$customer_id = Session()->get('customer_id');
									if($customer_id!=NULL){
								?>
								<a class="btn btn-default check_out" href="/checkout">Đặt hàng</a>
								<?php
								}else{
								?>
								<a class="btn btn-default check_out" href="/login-checkout">Đặt hàng</a>
								<?php
								}
								?>
							
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\smartpoint\resources\views/pages/cart/show_cart.blade.php ENDPATH**/ ?>