<?php 


	echo 'ran';
	global $current_user;
      get_currentuserinfo();
	  $user = $current_user->ID;
	  $meta_value = 0;
	  $meta_key3 = "thoughts_counter";
	  $meta_key4 = "Quiz_Results";
	
	update_user_meta( $user, $meta_key3, $meta_value);
	
	 delete_user_meta( $user, $meta_key4);
	
	wp_redirect( 'survey/test'); exit;
	
	
	
									



?>