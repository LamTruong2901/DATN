
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="/trang-chu">Trang chủ</a></li>
				  <li class="active">Thanh toán giỏ hàng</li>
				</ol>
			</div><!--/breadcrums-->
            <?php
				$content = Cart::content();
			?>
<form method="post">
           <?php echo csrf_field(); ?>
<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-8">
						<div class="shopper-info">
							<p>Điền thông tin gửi hàng</p>
							
								<input type="email" name="shipping_email" class="shipping_email" placeholder="Email" required>
								<input type="text" name="shipping_name" class="shipping_name" placeholder="Họ và tên" required>
								<input type="text" name="shipping_address" class="shipping_address" placeholder="Địa chỉ" required>
								<input type="text" name="shipping_phone" class="shipping_phone" placeholder="Phone" required>
                                <textarea name="shipping_message" class="shipping_message"  placeholder="Ghi chú đơn hàng của bạn" rows="5"></textarea>

								<?php if(Session()->get('fee')): ?>
									<input type="hidden" name="order_fee" class="order_fee" value="<?php echo e(Session()->get('fee')); ?>">
								<?php else: ?>
									<input type="hidden" name="order_fee" class="order_fee" value="10000">
								<?php endif; ?>
								<?php if(Session()->get('voucher')): ?>
									<?php $__currentLoopData = Session()->get('voucher'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$vou): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<input type="hidden" name="order_voucher" class="order_voucher" value="<?php echo e($vou['voucher_code']); ?>">
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php else: ?>
									<input type="hidden" name="order_voucher" class="order_voucher" value="không có">
								<?php endif; ?>
								

								<label  for="exampleInputEmail1">Chọn hình thức thanh toán</label>
								 <select name="payment_select" class="form-control input-sm m-bot15 payment_select">
                                        
                                    <option value="0">Thanh toán bằng chuyển khoản</option>
									 <option value="1">Thanh toán bằng tiền mặt</option>
									

                                    
                                   </select>
                               
							 <form role="form" id="formValidation" action="insert-delivery" method="post">
                                    <?php echo e(csrf_field()); ?>

                               
                                <div class="form-group">
                                    <label  for="exampleInputEmail1">Chọn thành phố</label>
                                     <select name="city" id="city" class="form-control input-sm m-bot15 choose city">
                                    <option value="">-Chọn tỉnh thành phố-</option>
                                    <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ci): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($ci->matp); ?>">-<?php echo e($ci->name_city); ?>-</option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                   </select>
                                </div>
                                <div class="form-group">
                                    <label  for="exampleInputEmail1">Chọn quận huyện</label>
                                     <select name="province" id="province" class="form-control input-sm m-bot15 province choose">
                                        
                                    <option value="">-Chọn quận huyện-</option>

                                    
                                   </select>
                                </div>
                                  <div class="form-group">
                                    <label  for="exampleInputEmail1">Chọn xã phường</label>
                                     <select name="wards" id="wards" class="form-control input-sm m-bot15 wards ">
                                    <option value="">-Chọn xã phường-</option>

                                    
                                   </select>
                                </div>
                                
                                <input type="button" value="Tính phí vận chuyển" name="caculate_order" id="" class="btn btn-primary btn-sm calculate_delivery">
                                
                            </form>
							
						</div>
					</div>
			
									
				</div>
			</div>
			<div class="table-responsive cart_info">
                <form action="update-cart" method="post">
					<?php echo e(csrf_field()); ?>

				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Hình ảnh</td>
							<td class="description">Tên sp</td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Thành tiền</td>
							<td></td>
						</tr>
					</thead>
				
					<tr>
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
						<td>
							<?php if(Session()->get('fee')): ?>
							<li>
								<a class="cart_quantity_delete" href="del-fee"><i class="fa fa-times"></i></a>
								Phí vận chuyển: <span class="delivery"><?php echo e(number_format(Session()->get('fee')).' '.'vnđ'); ?></span></li>
								<li>Tổng: <span><?php echo e(number_format($total+ Session()->get('fee')).' '.'vnđ'); ?></span></li>
								<input type="hidden" name="order_total" class="order_total" value="<?php echo e($total+ Session()->get('fee')); ?>">
							    <?php else: ?> 
								<li>Tổng: <span><?php echo e(number_format($total).' '.'vnđ'); ?></span></li>
								<input type="hidden" name="order_total" class="order_total" value="<?php echo e($total); ?>">
						         <?php endif; ?>
						        <li>
								Mã giảm : 
								<?php if(Session()->get('voucher')): ?>
									<?php $__currentLoopData = Session()->get('voucher'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$vou): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php if($vou['voucher_condition']==1): ?>
											<span><?php echo e($vou['voucher_number']); ?>%</span>
											<?php if(Session()->get('fee')): ?>
											<p>
												<?php
												$total_voucher = (($total+ Session()->get('fee'))*$vou['voucher_number'])/100;
												echo '<li>Tổng giảm: <span>'.number_format($total_voucher).' '.'vnđ'.'</span></li>'
												?>
											</p>
											<?php else: ?>
											<p>
												<?php
												$total_voucher = ($total*$vou['voucher_number'])/100;
												echo '<li>Tổng giảm: <span>'.number_format($total_voucher).' '.'vnđ'.'</span></li>'
												?>
											</p>
											<?php endif; ?>	
											
										<?php else: ?>
											<span><?php echo e($vou['voucher_number']); ?>vnđ</span>
											<p>
												<?php
												$total_voucher = ($vou['voucher_number']);
												echo '<li>Tổng giảm: <span>'.number_format($total_voucher).' '.'vnđ'.'</span></li>'
												?>
											</p>
										<?php endif; ?>
										<li>Tiền sau giảm <span><?php echo e(number_format($total+Session()->get('fee')-$total_voucher).' '.'vnđ'); ?></span></li>
										<input type="hidden" name="order_total_after" class="order_total_after" value="<?php echo e($total+Session()->get('fee')-$total_voucher); ?>">
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php else: ?>
								
										<input type="hidden" name="order_total_after" class="order_total_after" value="<?php echo e($total+Session()->get('fee')); ?>">
								<?php endif; ?>
							</li>
							<form action="check-voucher" method="post">
								<?php echo csrf_field(); ?>
							<li><input type="text" name="voucher" placeholder="Nhập voucher...">
								<span><input type="submit" value="Tính mã giảm giá"></span>
							</li>
							</form>
							
						</td>
						
					</tr>
					
					</form>
					
				</table>
			</div>
   <input type="button" value="Xác nhận đơn hàng" name="send_oder" class="btn btn-primary btn-sm confirm">
							</form>
		<div class="container">
			
			
		</div>
	</section><!--/#do_action-->
          <?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\smartpoint\resources\views/pages/checkout/checkout.blade.php ENDPATH**/ ?>