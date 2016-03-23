
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<hr/>
<?php
require_once('survey-types/results.php');
$current_user = wp_get_current_user();
$user_id = $current_user->ID; 
$key = 'Quiz_Results';
$user_tests = get_user_meta($user_id, $key);
// filter out for Quiz type
//$my_test_results = my_filter_funk($user_tests,$type);
// Check which quiz was take first. 
$t = my_comp_funk($user_tests);
// separate the arrays
$v = $t['first'];
$v1 = $t['sec'];
$v2 = $t['third'];
// total the arrays
$total = my_total_funk($v);
$total1 = my_total_funk($v1);
$total2 = my_total_funk($v2);

//	echo $vaz;
$q1_1 = $v['Q1'];
$q1_2 = $v1['Q1'] ;
$q1_3 = $v2['Q1'];

$q2_1 = $v['Q2'];
$q2_2 = $v1['Q2'] ;
$q2_3 = $v2['Q2'];

$q3_1 = $v['Q3'];
$q3_2 = $v1['Q3'] ;
$q3_3 = $v2['Q3'];

$q4_1 = $v['Q4'];
$q4_2 = $v1['Q4'] ;
$q4_3 = $v2['Q4'];

$q5_1 = $v['Q5'];
$q5_2 = $v1['Q5'] ;
$q5_3 = $v2['Q5'];

$q6_1 = $v['Q6'];
$q6_2 = $v1['Q6'] ;
$q6_3 = $v2['Q6'];

$q7_1 = $v['Q7'];
$q7_2 = $v1['Q7'] ;
$q7_3 = $v2['Q7'];


$Sumtotal = $q1_1 + $q2_1 + $q3_1 + $q4_1 + $q5_1 + $q6_1 + $q7_1;
$Sumtotal1 = $q1_2 + $q2_2 + $q3_2 + $q4_2 + $q5_2 + $q6_2 + $q7_2;
$Sumtotal2 = $q1_3 + $q2_3 + $q3_3 + $q4_3 + $q5_3 + $q6_3 + $q7_3;

?>
<div class="container">

<h2>Thought Results</h2>

<p>1. How significant is the customer benefit?</p>

    <table class="table table-striped table-condensed">
    
      <thead><tr>
        <th>First Answer</th>
        <th>Second Answer</th>
        <th>Third Answer</th>
            </tr>
      </thead>
    	<tbody>
        <tr>
          <td><?php print $q1_1;?></td>
          <td><?php print $q1_2;?></td>
          <td><?php print $q1_3;?></td>
        </tr>
      </tbody>
    </table>
<hr />


<p>2. Is this idea truly new?</p>

    <table class="table table-striped table-condensed">
    
      <thead><tr>
        <th>First Answer</th>
        <th>Second Answer</th>
        <th>Third Answer</th>
            </tr>
      </thead>
    	<tbody>
        <tr>
          <td><?php print $q2_1;?></td>
          <td><?php print $q2_2;?></td>
          <td><?php print $q2_3;?></td>
        </tr>
      </tbody>
    </table>
<hr />



<p>3. How big is the potential market?</p>

    <table class="table table-striped table-condensed">
    
      <thead><tr>
        <th>First Answer</th>
        <th>Second Answer</th>
        <th>Third Answer</th>
            </tr>
      </thead>
    	<tbody>
        <tr>
          
          <td><?php print $q3_1;?></td>
          <td><?php print $q3_2;?></td>
          <td><?php print $q3_3;?></td>
        </tr>
      </tbody>
    </table>
<hr />



<p>4. Can the benefit be delivered economically?</p>

    <table class="table table-striped table-condensed">
    
      <thead><tr>
        <th>First Answer</th>
        <th>Second Answer</th>
        <th>Third Answer</th>
            </tr>
      </thead>
    	<tbody>
        <tr>
          <td><?php print $q4_1;?></td>
          <td><?php print $q4_2;?></td>
          <td><?php print $q4_3;?></td>
        </tr>
      </tbody>
    </table>
<hr />



<p>5. How significant are the technical hurdles?</p>

    <table class="table table-striped table-condensed">
    
      <thead><tr>
        <th>First Answer</th>
        <th>Second Answer</th>
        <th>Third Answer</th>
            </tr>
      </thead>
    	<tbody>
        <tr>
          <td><?php print $q5_1;?></td>
          <td><?php print $q5_2;?></td>
          <td><?php print $q5_3;?></td>
        </tr>
      </tbody>
    </table>
<hr />


<p>6. Does this idea require a new ecosystem?</p>

    <table class="table table-striped table-condensed">
    
      <thead><tr>
        <th>First Answer</th>
        <th>Second Answer</th>
        <th>Third Answer</th>
            </tr>
      </thead>
    	<tbody>
        <tr>
          <td><?php print $q6_1;?></td>
          <td><?php print $q6_2;?></td>
          <td><?php print $q6_3;?></td>
        </tr>
      </tbody>
    </table>
<hr />


<p>7. Does this idea fit with our skills/assets?</p>

    <table class="table table-striped table-condensed">
    
      <thead><tr>
        <th>First Answer</th>
        <th>Second Answer</th>
        <th>Third Answer</th>
            </tr>
      </thead>
    	<tbody>
        <tr>
          <td><?php print $q7_1;?></td>
          <td><?php print $q7_2;?></td>
          <td><?php print $q7_3;?></td>
        </tr>
      </tbody>
    </table>
<hr />


 <table class="table table-striped table-condensed">
    
      <thead><tr>
        <th>Total First</th>
        <th>Total Second</th>
        <th>Total Third</th>
            </tr>
      </thead>
    	<tbody>
        <tr>
          <td><?php print $Sumtotal;?></td>
          <td><?php print $Sumtotal1;?></td>
          <td><?php print $Sumtotal2;?></td>
        </tr>
      </tbody>
    </table>




</div>



		</main><!-- #main -->

	</div><!-- #primary -->
