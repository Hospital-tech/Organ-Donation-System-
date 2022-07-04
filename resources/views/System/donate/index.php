<?php
require('config.php');
?>
<form action="submit.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="200"
		data-name="Donate Us"
		data-description="Blood & Organ Donation Management System"
		data-image="https://media.istockphoto.com/vectors/blood-donation-concept-vector-id1256555401?k=20&m=1256555401&s=612x612&w=0&h=We4Ckw72r8-RSK_TOVG2jWtui1ntlQNgYeDo1lLi1qg="
		data-currency="MYR"
		data-email="prottoy.2897@gmail.com"
	>
	</script>

</form>