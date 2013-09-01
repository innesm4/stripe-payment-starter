<form action="confined.php" method="post">
	<h3>Enter your details to purchase the Confined Space Awareness course</h3>
	<input type="text" name="email" placeholder="E-mail address" />
	<input type="password" name="password" placeholder="Password" />
    <script src="https://button.stripe.com/v1/button.js" class="stripe-button"
      data-key="<?php echo $stripe['publishable_key']; ?>"
      data-amount=2000
      data-description="Confined Space Awareness Course"
      data-label="Buy"></script>
</form>
<hr />
<?php require_once('./login_form.php'); ?>
