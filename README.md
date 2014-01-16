Php-form-builder
================

This form builder generates the form &amp; the inputs and validates 'em

=================
Example of usage so far:

	<?php 
		$form = new Form("example.php", "test_form"); // action file , form name

		$form->inputs([
			'username' => 'Your username', // input name, label text
			'lastname' => 'Your lastname', // input name, label text
			'email'    => 'Your email',    // input name, label text
		]);

	$form->render("Next"); // Button text  <> Generates the form
	
	if($form->control()) { // If users clicks on button
		echo $_GET['username'];
	}
