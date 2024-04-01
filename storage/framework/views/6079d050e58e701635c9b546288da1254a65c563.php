
<?php $__env->startSection('sibar_left'); ?>
<?php echo $__env->make('pages.inc.sibar_left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
		<div class="blog-post-area">
						<h2 class="title text-center">Bài viết</h2>
						<?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="single-blog-post">
							<div class="post-meta">
								
								<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
								</span>
							</div>
							<a href="/blog-detail/<?php echo e($bl->blog_id); ?>">
								<img src="/uploads/product/<?php echo e($bl->blog_image); ?>" alt="" />
							</a>
							<p><b><?php echo e($bl->blog_title); ?></b></p>
							<a  class="btn btn-primary" href="/blog-detail/<?php echo e($bl->blog_id); ?>">Đọc thêm</a>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<div class="pagination-area">
							<ul class="pagination">
								  <span><?php echo e($blog->links()); ?></span>
								
							</ul>
						</div>
					</div>			
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\smartpoint\resources\views/pages/blog.blade.php ENDPATH**/ ?>