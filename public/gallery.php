<!-- Segurança de login na página -->
<?php
session_start();
if (!isset($_SESSION["user_portal"])) {
	header("location:login.php");
}?>
<?php include_once "incluir/header.php";?>
<!-- banner -->
<div class="banner">
		<div class="bnr2">
	   </div>
</div>
<!---->
<div class="gallery">
		<div class="container">
			<h2>Gallery</h2>
			<div class="gallery-bottom">
				<div class="gallery-1">
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/r4.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/r4.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/gl7.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/gl7.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/gl4.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/gl4.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/gl5.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/gl5.jpg" alt=""/></a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="gallery-1">
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/gl6.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/gl6.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/gl2.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/gl2.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/r6.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/r6.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/gl7.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/gl7.jpg" alt=""/></a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="gallery-1">
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/gl4.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/gl4.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/r3.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/r3.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/r4.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/r4.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/gl11.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/gl11.jpg" alt=""/></a>
					</div>
					<div class="clearfix"></div>
				</div>

		 </div>
	 </div>
</div>
<script src="js/lightbox-plus-jquery.min.js"></script>
<!-- footer -->
<?php include_once "incluir/footer.php"?>