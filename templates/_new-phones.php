<section id="new-phones">
			<div class="container py-5">
				<h3>New Phones</h3>
				<hr>
				<!-- Carousel -->
				<div class="owl-carousel owl-theme owl-loaded owl-3">
					<div class="owl-stage-outer">
						<div class="owl-stage">
							<?php foreach ($products as $item): ?>
							<div class="top-sales owl-item text-center bg-light">
								<a href="product.php?item=<?php echo($item['item_id']);?>">
									<img class="ts" src="<?php echo($item['item_image']?? 'assets/products/1.png');?>">
								</a>
								<div class="">
									<h6 class="h6 text-center"><?php echo($item['item_name']); ?></h6>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="far fa-star"></i>
								</div>
								<div class="price py-2">
									<span>$<?php echo($item['item_price']);?></span>
								</div>
								<form method="post">
									<input type="hidden" name="item_id" value="<?php echo($item['item_id']); ?>">
									<input type="hidden" name="user_id" value="<?php echo(1); ?>">
									<button type="submit" name="new_phone_submit" class="toCart btn btn-success rounded-0 px-4">Add to Cart</button>
								</form>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</section>