<!-- Segurança de login na página -->
<?php
session_start();
if (!isset($_SESSION["user_portal"])) {
	header("location:login.php");
}
// Determina localidade BR
setlocale(LC_ALL, 'pt_BR');
?>
<?php include_once "incluir/header.php";?>
<!-- banner -->
<div class="banner">
	<div class="bnr2">
	</div>
</div>
<!-- content -->
<div class="review">
	<div class="container">
		<h2 >Reviews</h2>
		<div class="review-md1">
			<div class="col-md-4 sed-md">
				<div class=" col-1">
					<a href="single.html"><img class="img-responsive" src="images/re7.jpg" alt=""></a>
					<h4><a href="single.html">Sed ut perspiciatis unde omnis</a></h4>
					<p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
				</div>
			</div>
			<div class="col-md-4 sed-md">
				<div class=" col-1">
					<a href="single.html"><img class="img-responsive" src="images/re1.jpg" alt=""></a>
					<h4><a href="single.html">Sed ut perspiciatis unde omnis</a></h4>
					<p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
				</div>
			</div>
			<div class="col-md-4 sed-md">
				<div class=" col-1">
					<a href="single.html"><img class="img-responsive" src="images/re2.jpg" alt=""></a>
					<h4><a href="single.html">Sed ut perspiciatis unde omnis</a></h4>
					<p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="review-md1">
			<div class="col-md-4 sed-md">
				<div class=" col-1">
					<a href="single.html"><img class="img-responsive" src="images/re3.jpg" alt=""></a>
					<h4><a href="single.html">Sed ut perspiciatis unde omnis</a></h4>
					<p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
				</div>
			</div>
			<div class="col-md-4 sed-md">
				<div class=" col-1">
					<a href="single.html"><img class="img-responsive" src="images/re4.jpg" alt=""></a>
					<h4><a href="single.html">Sed ut perspiciatis unde omnis</a></h4>
					<p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
				</div>
			</div>
			<div class="col-md-4 sed-md">
				<div class=" col-1">
					<a href="single.html"><img class="img-responsive" src="images/re5.jpg" alt=""></a>
					<h4><a href="single.html">Sed ut perspiciatis unde omnis</a></h4>
					<p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="review-md1">
			<div class="col-md-4 sed-md">
				<div class=" col-1">
					<a href="single.html"><img class="img-responsive" src="images/re6.jpg" alt=""></a>
					<h4><a href="single.html">Sed ut perspiciatis unde omnis</a></h4>
					<p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
				</div>
			</div>
			<div class="col-md-4 sed-md">
				<div class=" col-1">
					<a href="single.html"><img class="img-responsive" src="images/re7.jpg" alt=""></a>
					<h4><a href="single.html">Sed ut perspiciatis unde omnis</a></h4>
					<p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
				</div>
			</div>
			<div class="col-md-4 sed-md">
				<div class=" col-1">
					<a href="single.html"><img class="img-responsive" src="images/re2.jpg" alt=""></a>
					<h4><a href="single.html">Sed ut perspiciatis unde omnis</a></h4>
					<p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- footer -->
<?php include_once "incluir/footer.php";?>