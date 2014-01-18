Php-form-builder
================

This form builder generates the form &amp; the inputs and validates 'em

=================
Example of usage so far:

	<?php
		require("class/class.form_builder.php");
		
		$form = new Form("index.php", "contact_us");	// Action file, button name
		
		$form->inputs([
			'username' => 'Your username',	// Input name, label value
			'email'    => 'Your email'
		]);

	if($form->submitted()) {

		echo " Hello {$_POST['username']}, your email is <i>{$_POST['email']} ";
		echo " <button><a href='index.php'>Return</a></button> ";
	}
	else {
		$form->render("Continue");	// Button text\value
	}
 
