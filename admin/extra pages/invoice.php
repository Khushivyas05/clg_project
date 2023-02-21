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
  <h1 class="head"><b>Invoice</b></h1>
	<div class="invoice">
		<div class="company-address">
			Main branch:
			<br />
		    F/F-4,Tarak Appartment,
			<br />
			Punitnagar, Ghodasar,
			<br />
			Ahmedabad-380050
			<br />
			Branch Name:
			<br />
			<?php echo $fetch->branch_name;?>
		</div>
		<div class="invoice-details">
			Invoice No:<?php echo $fetch->invoice_id;?>
			<br />
			Date: <?php echo $fetch->invoice_date;?>
		</div>
		<div class="customer-address">
			To:
			<br />
			<?php echo $f->cust_add;?>
			<br />
			<br />
			Payment Type: <?php echo $fetch->payment_type;?>
			<br />
		</div>
		
		<div class="clear-fix"></div>
			<table border='1' class="table table-stripped" cellspacing='0'>
				<tr>
					<th width=250>Goods Type</th>
					<th width=250>Parcel Quantity</th>
					<th width=250>Price</th>
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
				echo("<td class='text-center'>$fetch->quantity</td>");
				//echo("<td class='text-right'></td>");
				echo("<td class='text-right'>₹".number_format($fetch->price)."</td>");
				echo("</tr>");
			
			
			
				echo("<tr>");
				echo("<td colspan='2' class='text-right'>Sub total</td>");
				echo("<td class='text-right'>₹" . number_format($fetch->price) . "</td>");
				echo("</tr>");
				echo("<tr>");
				echo("<td colspan='2' class='text-right'>Charges</td>");
				echo("<td class='text-right'>₹" . number_format($fetch->charges) . "</td>");
				echo("</tr>");
				echo("<tr>");
				echo("<td colspan='2' class='text-right'><b>TOTAL</b></td>");
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