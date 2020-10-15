<?php
	$brands = array_map(function($pro){return $pro['item_brand'];}, $products); // getting all brands name
	$unique = array_unique($brands); // creating array with unique brands
	sort($unique); // sorting array
?>
<section id="special-price">
			<div class="container py-3">
				<h4>Special Prices</h4>
				<div class="nav nav-tabs d-flex justify-content-around" id="myTab" role="tablist">
					<a class="nav-link active flex-fill" id="all-tab" href="#all" data-toggle="tab" role="tab" aria-controls="all" aria-selected="true" data-filter="*">
						All
					</a>
					<?php foreach ($unique as $brand): ?>
					<a class="nav-link flex-fill" id="<?php echo($brand);?>-tab" href="#<?php echo($brand);?>" data-toggle="tab" role="tab" aria-controls="<?php echo($brand);?>" aria-selected="false" data-filter=".<?php echo($brand);?>">
						<?php echo(ucfirst($brand)); ?>
					</a>
					<?php endforeach; ?>
					<!-- <a class="nav-link flex-fill" id="apple-tab" href="#apple" data-toggle="tab" role="tab" aria-controls="apple" aria-selected="false" data-filter=".apple">
						Apple
					</a>
					<a class="nav-link flex-fill" id="samsung-tab" href="#samsung" data-toggle="tab" role="tab" aria-controls="samsung" aria-selected="false" data-filter=".samsung">
						Samsung
					</a>
					<a class="nav-link flex-fill" id="mi-tab" href="#mi" data-toggle="tab" role="tab" aria-controls="mi" aria-selected="false" data-filter=".mi">
						Redmi
					</a> -->
				</div>
				<div class="container bg-white shadow-sm mb-4">
					<div id="myTabContent">
					<!-- special priced products -->
					<?php foreach ($products as $item): ?>
						<?php if ($item['item_special'] == 1): ?>
						<div class="item text-center border m-2 py-3 <?php echo($item['item_brand']);?>">
							<a href="product.php?item=<?php echo($item['item_id']); ?>">
								<img class="ts sp" src="<?php echo($item['item_image']);?>">
							</a>
							<h6 class="h6 text-center"><?php echo($item['item_name']);?></h6>
							<div class="price py-2">
								<span>$<?php echo($item['item_price']);?></span>
							</div>
							<form method="post">
								<input type="hidden" name="item_id" value="<?php echo($item['item_id']); ?>">
								<input type="hidden" name="user_id" value="<?php echo(1); ?>">
								<button type="submit" name="sp_price_submit" class="btn btn-info rounded-0 px-4">Add to Cart</button>
							</form>
						</div>
						<?php endif ?>
					<?php endforeach ?>
						
					</div>
				</div>
			</div>
		</section>