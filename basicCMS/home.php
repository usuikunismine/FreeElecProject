<?php
	include('controller.php');
	
	if(!isset($_SESSION['username'])){
		header('location: index.php');
	}
?>

	<div id="home-content" class="content-area">
		
		<?php
			$query = "SELECT * 
					FROM product_categories";
			$prod_cat_set = mysqli_query($connection,$query);
			$prod_cat_div = "";
			while($product_cat = mysqli_fetch_array($prod_cat_set)){
				$prod_cat_div .= "<div class=\"prod-cat-div\" id=\"";$prod_cat_div .= $product_cat['id'];
				$prod_cat_div .= "\">";
				$prod_cat_div .= "<div class=\"prod-cat-header\">";
				$prod_cat_div .= "<h4>";
				$prod_cat_div .= $product_cat['name'];
				$prod_cat_div .= "</h4>";
				$prod_cat_div .= "</div>";
				
				// for selecting and displaying products for each prod category
				$query = "SELECT * FROM
						products WHERE 
						category_id = " . $product_cat['id'];
				$prod_items_set = mysqli_query($connection,$query);
				
				while($prod_item = mysqli_fetch_array($prod_items_set)){
					$prod_item_div = "<div class=\"prod-item-div\" id=\"";
					$prod_item_div .= $prod_item['id'];
					$prod_item_div .= "\">";

					$query = "SELECT * FROM product_images
							WHERE prod_id = " . $prod_item['id'];

					$prod_image_set = mysqli_query($connection,$query);
					$prod_image = mysqli_fetch_array($prod_image_set);
					$prod_img_url = "prod_images/" . $prod_image['id'] . ".jpg";
					$prod_img_elem = "<img src=\"$prod_img_url\"  class=\"prod-img-thumb\"/>";
					$prod_item_div .= $prod_img_elem;
					$prod_item_div .= $prod_item['name'];
					$prod_item_div .= "\">";
					$query = "SELECT * FROM product_images
							WHERE prod_id = " . $prod_item['id'];
					$prod_item_div .= $prod_item['price'];
					
					$prod_item_div .= "<form method='POST' action='product.php'>";
					$prod_item_div .= "<input type='submit' value='Buy' />";
					$prod_item_div .= "</form>";
					$prod_item_div .= "</div>";
					$prod_cat_div .= $prod_item_div;
				}
				$prod_cat_div .= "</div>"; 
			}
			echo $prod_cat_div;
		?>
		
	</div>