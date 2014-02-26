Php-form-builder
================

This form builder generates the form &amp; the inputs and validates 'em

=================
Example of usage so far:

	<?php
		require("class/class.form_builder.php");

	$form1 = new form("index.php", "post");	// Action File, Method

	$form1->create( $form1->input("text", "username", 32, "Type in your username") );
	// 			     Type, input name, maxlength, label \ placeholder

	$form1->create( $form1->textarea("message", 4, 250, "Your message...") );
	//	                     Textarea name, rows, maxlength, label \ placeholder

	$form1->create( $form1->radio( "rank", 4, "Rank:") );	// Radio name, value, label

	$form1->create( $form1->checkbox( "rank", 4, "Rank:") );		// Checkbox name, value, label

	$form1->create( $form1->select( "mod", "Are you happy?", array("No" => 0, "Yes" => 1, "Maybe" => 2) ) );
	//		Select input name ^	Label ^ 		^ Option text => Value ^

	$form1->create( $form1->button("submit", "mybutton", "Continue") );
	// 		        	Button type, button name, button text
	$form1->create( $form1->button("reset", "mybutton", "Reset") );

	$form1->build()->render();	// Build & Display the form
