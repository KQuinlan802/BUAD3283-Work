<!DOCTYPE html>
<html>
<head>
<title>Check Out</title>

</head>
<body>
<div class="container col-sm-6">
	<form action="endpoint.php">
		<div class="form-group">
			  <label>Payment amount</label>
			  <input id="PaymentAmount" class="form-control" type="text" ></input>
		</div>
		<div class="form-group">
			  <label>Name on card</label>
			  <input id="NameOnCard" class="form-control" type="text" ></input>
		</div>
		<div class="form-group">
			  <label>Card number</label>
			  <input id="CreditCardNumber" class="form-control" type="text"></input>
		</div>
		<div class="form-group">
			  <label>Expiry date</label>
			  <input id="ExpiryDate" class="form-control" type="text" placeholder="MM / YY" ></input>
		</div>
		<div class="form-group">
			  <label>Security code</label>
			  <input id="SecurityCode" class="form-control" type="text" ></input>
		</div>
		<div class="form-group">
			  <label>ZIP Code</label>
			  <input id="ZIPCode" class="form-control" type="text" ></input>
		</div>
			  <button id="PayButton" class="btn btn-block btn-success submit-button" type="submit">Pay</button>
	</form>
</div>
</body>
</html>
