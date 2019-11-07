<!DOCTYPE html>
<html lang="en">

<!-- meta tags and bootstrap stylesheet with jQueries scripts-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>The Gino Files</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="stylesheetIndex.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>

<!-- body of The-Gino-Files contents -->
<body>

<!-- nav bar with icon image, a header with name and an icon for the menu that shows on small screens -->
<section>
<div class="container-fluid p-0 text-white">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">
			<img src="imagesIndex/navbarIcon.png" width="64" height="64" class="d-inline-block align-top mr-5" alt="Nav bar Icon" />
			<h4 class="d-inline-block text-center display-4">Gino</h4> <h4 class="d-lg-none d-inline-block text-center display-4">V.</h4> <h4 class="d-none d-lg-inline-block text-center display-4">Villalpando</h4></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

<!-- nav items aligned to the right and is shown in the menu after pressing -->
		<div class="collapse navbar-collapse text-right" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link mx-4" href="#professionalBackground">Background<hr/> <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link mx-4" href="#">Features<hr/></a>
				</li>
				<li class="nav-item">
					<a class="nav-link mx-4" href="#">Pricing<hr/></a>
				</li>
				<li class="nav-item">
					<a class="nav-link mx-4" href="#" tabindex="-1" aria-disabled="true">Disabled<hr/></a>
				</li>
			</ul>
		</div>
	</nav>
</div>
</section>

<!-- jumbotron with background image, title, more information and learn more button-->
<a id="landingPage">
<section>
	<div class="jumbotron-fluid py-5 px-5 intro-background bg-dark mx-auto d-block text-white">
		<h1 class="display-4">Visionary Developer Of The Future.</h1>
		<p class="lead">Compassionate learner of programming with a genuine interest in technological advances.</p>
		<hr class="my-4" />
		<a class="btn btn-secondary btn-lg" href="#professionalBackground" role="button">Learn more</a>
	</div>
</section>
</a>

<!-- vertical pill navs with professional background links and projects for fullscreen-->
<a id="professionalBackground"></a>
<section class="d-none d-lg-block mx-2">
	<div class="row mx-auto">
		<div class="col-4 my-5">
			<div class="nav flex-column nav-pills bg-dark" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<a class="nav-link active bg-dark py-4 text-white" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
				<a class="nav-link bg-dark py-4 text-white" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
				<a class="nav-link bg-dark py-4 text-white" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
				<a class="nav-link bg-dark py-4 text-white" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
			</div>
		</div>
		<div class="col-8 my-5 px-2 d-block">
			<div class="tab-content" id="v-pills-tabContent">
				<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive
					technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the
					content itself (e.g. the visible text), or is included through alternative means, such as additional text
					hidden with the .sr-only class.</div>
				<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
				<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
				<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
			</div>
		</div>
	</div>
</section>


<!-- horizontal nav pills with the content of professional background and links to projects -->
<section class="d-lg-none my-5">
	<ul class="nav nav-pills my-2 ml-3" id="pills-tab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active bg-dark px-4 mx-3 text-white" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link px-4 mr-3 bg-dark text-white" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
		</li>
		<li class="nav-item">
			<a class="nav-link px-4 bg-dark text-white" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
		</li>
	</ul>
	<div class="tab-content my-4 mx-4" id="pills-tabContent">
		<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
			Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive
			technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the
			content itself (e.g. the visible text), or is included through alternative means, such as additional text
			hidden with the .sr-only class.</div>
		<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
		<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
	</div>
</section>


</body>
</html>
