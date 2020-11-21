<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PDF INVOICE</title>
	<style type="text/css">
		body {
			font-family: 'Calibri', serif;
			font-size: 12px;
		}
		.clearfix:after {
		  content: "";
		  display: table;
		  clear: both;
		}
		header {
		  padding: 10px 0;
		  margin-bottom: 20px;
		  border-bottom: 1px solid #AAAAAA;
		}
		#logo {
		  float: left;
		  margin-top: 8px;
		}

		#logo img {
		  height: 70px;
		}

		#company {
		  float: right;
		  text-align: right;
		}
		#details {
		  margin-bottom: 50px;
		}

		#client {
		  padding-left: 20px;
		  border-left: 8px solid #0087C3;
		  float: left;
		  font-size: 14px;
		}

		

		h2.name {
		  font-size: 1.4em;
		  font-weight: normal;
		  margin: 0;
		}

		#invoice {
		  float: right;
		  text-align: right;
		}

		#invoice h1 {
		  font-size: 2.4em;
		  line-height: 1em;
		  font-weight: normal;
		  margin: 0  0 10px 0;
		}

		.table {
		  width: 100%;
		  border-collapse: collapse;
		  border-spacing: 0;
		  border-color: #000;
		  margin-bottom: 20px;
		  border-left: 1px solid #111;
		  border-top: 1px solid #111;
		}

		.table th,
		.table td {
		  padding: 8px;
		  border-bottom: 1px solid #111;
		  border-right: 1px solid #111;
		}
		.table th:first-child,
		.table td:first-child{
			border-right:0; 
		}

		.table th {
		  white-space: nowrap;        
		  font-weight: bold;
		  text-align: center;
		  background: #8db3e2;
		}


		.table td h3{
		  color: #57B223;
		  font-size: 1.2em;
		  font-weight: normal;
		  margin: 0 0 0.2em 0;
		}
		.mb-4 {
			margin-bottom: 32px;
		}
		.td_right {
			text-align: right;
			font-weight: bold
		}
		ol li,li td,p{
			line-height: 210%;
		}
		.ttd {
			margin-left: 30px
		}
	</style>
</head>
<body>
	<div id="details" class="clearfix">
	    <div id="client">
	      <div class="title"><b>PROFORMA INVOICE</b></div>
	      <div class="invoice">Number : #<?=$invoice;?></div>
	      <div class="date">Date : November 20<sup>th</sup> 2019</div>
	    </div>
	    <div id="invoice">
	    </div>
	</div>
	<div class="container">
		
		<div class="row mb-4">
			<div class="col-6">
				<table width="100%" style="margin-left: 30px">
					<tr>
						<td width="15%">To</td>
						<td width="4%">:</td>
						<td><strong><?=$nama;?></strong></td>
					</tr>
					<tr>
						<td width="15%">Phone</td>
						<td width="4%">:</td>
						<td> <?=$telepon;?></td>
					</tr>
					<tr>
						<td width="15%">Email</td>
						<td width="4%">:</td>
						<td><?=$email;?></td>
					</tr>
					<tr>
						<td width="15%">Due date</td>
						<td width="4%">:</td>
						<td><strong>Before 10 Dec 2019</strong></td>
					</tr>
				</table>
			</div>
		</div>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Guest Name</th>
		      <th scope="col">Name of Package</th>
		      <th scope="col">Date</th>
		      <th scope="col">Price</th>
		      <th scope="col">Pax</th>
		      <th scope="col">Amount</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<tr>
		      <td><?=$nama;?></td>
		      <td><?=$nama_paket;?></td>
		      <td><?=$tanggal;?></td>
		      <td>Price</td>
		      <td>Pax</td>
		      <td>Amount</td>
		    </tr>
		    <tr>
		      <td colspan="5" class="td_right">DISCOUNT</td>
		      <td>Rp. 1.500.000</td>
		    </tr>
		    <tr>
		      <td colspan="5" class="td_right">TOTAL NET AMOUNT TO BE PAID</td>
		      <td>Rp. 1.500.000</td>
		    </tr>
		    <tr>
		      <td colspan="5" class="td_right">MINIMUM DOWN PAYMENT</td>
		      <td>Rp. 1.500.000</td>
		    </tr>
		  </tbody>
		</table>
		<br />
		<ol>
			<li>
				Please direct your inquires to the Accounting of Marigo Indonesia.
			</li>
			<li>
				Bank transfer should be paid upon receipt of this statement and made payable to Marigo Indonesia to the following accounts:
				<table width="100%" style="margin-left: 30px">
					<tr>
						<td width="23%">Account Name</td>
						<td width="4%">:</td>
						<td><strong>LAILATUL QODRI</strong></td>
					</tr>
					<tr>
						<td width="23%">Bank Name</td>
						<td width="4%">:</td>
						<td><strong>BANK CENTRAL ASIA</strong></td>
					</tr>
					<tr>
						<td width="23%">Account Number (IDR)</td>
						<td width="4%">:</td>
						<td><strong>041.107.3300</strong></td>
					</tr>
				</table>
			</li>
			<li>
				The Amounts should be net of any Bank Charge
			</li>
		</ol>
		<p>To ensure proper credit into your account, please state payer's name and invoice number clearlyOn the bank deposit slipand send it to email <b>lailatulqodri@marigo.id</b> or Whatsapp <b>+6282288060093</b>.</p><br>
		<div class="ttd">
			<p>Thank you for kind cooperation</p>
			<img src="http://localhost/marigo-trip/public/ttd.png" style="height: 60px; width: 100px">
			<p>Lailatul Qodri</p>
			Marigo Indonesia
		</div>
	</div>
</body>
</html>