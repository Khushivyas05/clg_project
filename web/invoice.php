<?php
include_once('header.php');
?>
<html>

	<head>
	<title>Invoice</title>

		<style type="text/css">
		body {	
      	    
			font-family: Verdana;
		}
		
		div.invoice {
		border:1px solid #ccc;
		padding:10px;
		height:740pt;
		width:570pt;
		}

		div.company-address {
			border:1px solid #ccc;
			float:left;
			width:200pt;
		}
		
		div.invoice-details {
			border:1px solid #ccc;
			float:right;
			width:200pt;
		}
		
		div.customer-address {
			border:1px solid #ccc;
			float:right;
			margin-bottom:50px;
			margin-top:100px;
			width:200pt;
		}
		
		div.clear-fix {
			clear:both;
			float:none;
		}
		
		table {
			width:100%;
		}
		
		th {
			text-align: left;
		}
		
		td {
		}
		
		.text-left {
			text-align:left;
		}
		
		.text-center {
			text-align:center;
		}
		
		.text-right {
			text-align:right;
		}
		
		</style>
	</head>

	<body>
  <h1><b>Invoice</b></h1>
	<div class="invoice">
		<div class="company-address">
			ACME ltd
			<br />
			489 Road Street
			<br />
			London, AF3Z 7BP
			<br />
		</div>
		<div class="invoice-details">
			Invoice No:<?php echo $fetch->invoice_id;?>
			<br />
			Date: <?php echo $fetch->invoice_date;?>
		</div>
		<div class="customer-address">
			To:
			<br />
			Mr. Bill Terence
			<br />
			123 Long Street
			<br />
			London, DC3P F3Z 
			<br />
		</div>
		
		<div class="clear-fix"></div>
			<table border='1' cellspacing='0'>
				<tr>
					<th width=250>Description</th>
					<th width=250>Price</th>
					<th width=250>Total price</th>
				</tr>

			<?php
			$total = 0;

			
				/*$description = $articles[0][$a];
				$amount = $articles[1][$a];
				$unit_price = number_format( $articles[2][$a], 2);*/
				$total_price = $fetch->charges+$fetch->price;
				$total += $total_price;
				echo("<tr>");
				echo("<td>$fetch->goods_type</td>");
				//echo("<td class='text-center'>₹".number_format($fetch->charges)."</td>");
				//echo("<td class='text-right'>₹".number_format($fetch->price)."</td>");
				echo("<td class='text-right'>₹".number_format($fetch->price)."</td>");
				echo("</tr>");
			
			
			
				echo("<tr>");
				echo("<td colspan='3' class='text-right'>Sub total</td>");
				echo("<td class='text-right'>₹" . number_format($fetch->price) . "</td>");
				echo("</tr>");
				echo("<tr>");
				echo("<td colspan='3' class='text-right'>Charges</td>");
				echo("<td class='text-right'>₹" . number_format($fetch->charges) . "</td>");
				echo("</tr>");
				echo("<tr>");
				echo("<td colspan='3' class='text-right'><b>TOTAL</b></td>");
				echo("<td class='text-right'><b>₹" . number_format($total) . "</b></td>");
				echo("</tr>");
			?>
			</table>
		</div>
	</body>

</html>
<?php
include_once('footer.php');
?>