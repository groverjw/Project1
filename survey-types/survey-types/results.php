<?php 


$type = $_GET['quiz'];

// gets all test results for user
$user_tests = get_user_meta($user_id, 'Quiz_Results');


// filter out for Quiz type
function my_filter_funk($user_tests, $type){
	$first_taken = null;
	$sec_taken = null;
	$third_taken = null;
	$data = array();	
	foreach ($user_tests as $user_test) {
		if($user_test['Survey_type'] != $type){
     	 continue;
		}
		 //we know thoughts
    if(!$first_taken){
      $first_taken = $user_test;
      $data['first'] = $first_taken;
      continue;
    }
		if(!$sec_taken){
      $sec_taken = $user_test;
      $data['sec'] = $sec_taken;
      continue;
    }	

		if(!$third_taken){
      $third_taken = $user_test;
      $data['third'] = $third_taken;

      continue;
    }	
    
	}
	return $data;
	
}


// Check which quiz was take first. 

function my_comp_funk($twoTests){

		$first_taken = null;
		$sec_taken = null;
		$third_taken = null;
		$data = array();	
		
		foreach ($twoTests as $twoTest){
			if(!$first_taken){
			  $first_taken = $twoTest;
			  $data['first'] = $first_taken;
			  continue;
			}	
			if(!$sec_taken){
			  $sec_taken = $twoTest;
			  $data['sec'] = $sec_taken;
			  continue;
			}	
			if(!$third_taken){
			  $third_taken = $twoTest;
			  $data['third'] = $third_taken;
			  continue;
			}	
			
		}
		
		return $data;
	
	}

// totals individual quiz score 
function my_total_funk($data){	
	$allQs = array_slice($data, 3);
	 $total = array_sum($allQs);
	 return $total;
	}


// Check % Change. 
function my_number_percent_chang_funk($num1,$num2){
	
	
	$x = (($num2 - $num1) / $num1)*100;
	$per_change = round($x).'%';
	return $per_change;
	
	}




?>