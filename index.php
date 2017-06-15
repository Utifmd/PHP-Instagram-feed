<?php 
	$title = "Personal Homepage";
	include_once "components/header.php"; 	
?>
<div class="body">
	<!-- Info Container -->
	<div class="item">
		<i style="font-size: 3em; font-family: 'Rock Salt', cursive;">Utif Milkedori</i>
		<h1>Full Stack Developer//Consultant</h1>
		<h1>Explorer//Innovator</h1>
		<span><a href="mailto:utif@gmail.com"><i class="fa fa-google-plus fa-2x"></i></a></span>
		<span><a href="https://github.com/Utifmd/" target="_blank"><i class="fa fa-github fa-2x"></i></a></span>
		<span><a href="https://medium.com/@utifmd/" target="_blank"><i class="fa fa-medium fa-2x"></a></i></span>
		
	</div>

	<!-- Transparent Container -->
	<div class="item"><img border="1" width="100%" src="images/obj.jpg" alt=""></div>
	<div class="item">
		<div class="child1-item">
			<b class="child1-child-item">INFO</b>
			<b class="child1-child-item">ABOUT <i class="fa fa-arrow-right"></i></b>
		</div>
		<div class="child1-item">
			<?php echo $lorem; ?>
		</div>
	</div>
	<div class="item">
	<i class="fa fa-twitter fa-5x"></i>
	<i class="fa fa-instagram fa-5x"></i>
		<div class="child2-item">
			<!-- Twitter Container -->
			<?php include_once "other/twitter.php"; ?>
		</div>
	</div> 
	
	<!-- Instagram -->
	<div class="item-wrap">
		<?php include "other/instagram.php"; ?>	
	</div>
</div>
<?php include_once "components/footer.php"; ?>