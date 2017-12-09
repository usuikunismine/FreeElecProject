<?php
	/* functions.php */
	
	
	function get_all_products(){
		global $connection;
		$query = "SELECT * FROM products";
		$result_set = mysql_query($query,$connection);
		$feat_prods = mysql_fetch_array($result_set);
		
		if($feat_prods){
			return $feat_prods;
		}else{
			return NULL;
		}
	}

?>