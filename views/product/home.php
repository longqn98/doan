Dữ liệu biểu diễn từ model 
<?php
echo "<pre>";
print_r($data);

?>

<div id="order">
				<h2>Sản phẩm bán chạy nhất</h2>
				
	<?php
	$products = $data['products'];
	foreach($products as $k => $v){
	?>

			</div>
			<div style="clear: both;"></div>
			<div class="category">
				<h2>Thiết bị di động</h2>
								
				<a href="<?php echo PATH;?>?controller=product&action=detail&id=<?php echo $v['productID'];?>">
		<div class="item">
			<div class="image">
				<img src="assets/images/products/<?php echo $v['thumbnail'];?>" width="150px" height="150px">
			</div>
			<div class="name"><?php echo $v['productName'];?></div>
			<div class="price"><?php echo $v['unitPrice']-($v['unitPrice']*$v['discount'])/100;?></div>
			<div class="discount">
				<div class="percent"><?php echo $v['discount'];?>%</div>
				<div class="oldprice"><?php echo $v['unitPrice'];?>đ</div>
			</div>
		</div>
	</a>
	<?php
		}
		?>

					
			</div>
			<div style="clear:both;"></div>