<?php 
session_start();
//session_destroy();

$page=__FILE__;

if(isset($_SESSION['juices'])) { 

	// a little message to say we have done it
	echo 'Putting array into a session variable'.PHP_EOL;

	echo "============================================"; 	
	print"<pre>";
	print_r($_SESSION['juices']);
	print"</pre>";
	echo "============================================"; 

}


?>
<!DOCTYPE>
<html>

	<head>
		<title>P.H.P Session</title>
		<link href="style.css" rel="stylesheet"  type="text/css">
<script type="text/javascript" src="javascript.js"></script>


	</head>
	
	<body>
		
		<div id="wrapper" >
			
					<h1>The Yum Juices Company</h1>
					
			<div id="intro">
				<h3>We are selling freshly made organic juices. we selling our juices by crates of 6 bottles.
				<strong>If you order more that 5 crates we will give you 12.5% discount on your order</strong>
				</h3>
			</div><!-- end of div intro -->
			
			<div id="product-holder">
				
				<form id="frm" name="product-selection" method="post" id="juices-select" action="">
					
					<div class="product">
						<img src="images/apple-mango.png" alt="apple-mango juice bottle">
						<label>Select this product</label>
						<a href="save.php?id_product=apple-mango&name_product=apple-mango&page=<?php echo $page;?>" id="apple-mango" onclick="return saveProduct();">apple-mango</a>
					</div>
						
					<div class="product">
						<img src="images/blackberries.jpg" alt="blackberries juice bottle">
						<label>Select this product</label>
						<a href="save.php?id_product=blackberries&name_product=blackberries&page=<?php echo $page;?>" id="blackberries" onclick="return saveProduct();">blackberries</a>
					</div>
					
					<div class="product">
						<img src="images/apple.jpg" alt="apple juice bottle">
						<label>Select this product</label>
						<a href="save.php?id_product=apple&name_product=apple&page=<?php echo $page;?>" id="apple" onclick="return saveProduct();">apple</a>
					</div>
					
					<div class="product">
						<img src="images/mango.png" alt="mango bottle">
						<label>Select this product</label>
						<a href="save.php?id_product=mango&name_product=mango&page=<?php echo $page;?>" id="mango" onclick="return saveProduct();">mango</a>
					</div>
					
				</form><!-- end of form juice-select-->
				
				<div id="menu">
					<a href="index.php"><button>page1</button>
					<a href="index2.php"><button>page2</button>	
				</div>

				</div><!-- end of div id product-holder -->
		
	</body>
	
</html>