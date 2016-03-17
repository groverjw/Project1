<?php

/*

Template Name: Survey

*/

/**

 * The template for displaying all Surevey pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package CoursePress
 */
get_header(); ?>
<?php
$user_id = $current_user->ID;
$key = 'thoughts_counter';
$lives = get_user_meta($user_id, $key);
$hasLives = $lives[0];
if ( is_user_logged_in()){// && isset($hasLives)) {
?>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 <link rel="stylesheet" href="/wp-content/themes/coursepress-child/survey-types/surveyStyle.css">

<?php
 global $current_user;
	get_currentuserinfo();

$output ="";
if (isset($_POST["submit"])) {
require_once('survey-types/process.php');
}else {
  $output ="Post not set";


 if (isset($_GET["quiz"])){

	if($_GET["quiz"] === "idea1"){
		$user_id = $current_user->ID;
		$key = 'idea1_counter';
		$livesLeft = get_user_meta($user_id, $key);
		$lives = $livesLeft[0];
		if($lives < 2){
		$type ="idea1";
		} else {
		$type="resultsIdea1";
		}



  }elseif($_GET["quiz"] === "idea2"){

			$user_id = $current_user->ID;
		$key = 'idea2_counter';
		$livesLeft = get_user_meta($user_id, $key);
		$lives = $livesLeft[0];
		if($lives < 2){
		$type ="idea2";
		} else {
		$type="resultsIdea2";
		}



  }elseif($_GET["quiz"] === "idea3"){

					$user_id = $current_user->ID;
		$key = 'idea3_counter';
		$livesLeft = get_user_meta($user_id, $key);
		$lives = $livesLeft[0];
		if($lives < 2){
		$type ="idea3";
		} else {
		$type="resultsIdea3";
		}

			}elseif($_GET["quiz"] === "results"){
				$type="results";
				}elseif($_GET["quiz"] === "reset"){
				$type="reset";
				}else{

					$type="error";

					}

	}else{
		$type = "pick";

	}




}




 ?>



<?php

global $post;


?>


	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">
<div class="container">

 </div>




				<?php get_template_part( 'survey', $type ); ?>
	</main><!-- #main -->

	</div><!-- #primary -->

<?php } else {

	echo 'You must be logged in and have access to this course to view this page';


	?>
	<hr />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <div class="container col-xs-12 col-md-6 col-md-offset-3">
    <style>
#loginform > p.login-username > label{
	display:none;}
#loginform > p.login-password > label{
	display:none;}
#user_pass{
	width:95%;}
</style>
<script>// <![CDATA[
jQuery(document).ready(function(){
    jQuery('#user_login').attr('placeholder', 'User Name');
    jQuery('#user_email').attr('placeholder', 'User Email');
    jQuery('#user_pass').attr('placeholder', 'User Password');
});
// ]]></script>
    <?php


	$redirect_url = "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	$args = array(
	'echo'           => true,
	'remember'       => true,
	'redirect'       => $redirect_url,
	'form_id'        => 'loginform',
	'label_username' => __( '' ),
	'label_password' => __( '' ),
	'label_remember' => __( 'Remember Me' ),
	'label_log_in'   => __( 'Log In' ),
	'value_username' => '',
	'value_remember' => false
);

	wp_login_form($args); ?>
    </div>

	<?php




}?>

<?php get_sidebar( 'footer' ); ?>

<?php get_footer(); ?>
