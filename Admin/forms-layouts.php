<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from appstack.bootlab.io/forms-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Aug 2021 05:07:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Form_Layouts</title>

	<link rel="canonical" href="forms-layouts.html" />
	<link rel="shortcut icon" href="img/favicon.ico">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">

	<!-- Choose your prefered color scheme -->
	<link href="css/light.css" rel="stylesheet">
	<!-- <link href="css/dark.css" rel="stylesheet"> -->

	<!-- BEGIN SETTINGS -->
	<!-- Remove this after purchasing -->
	<link class="js-stylesheet" href="css/light.css" rel="stylesheet">
	<script src="js/settings.js"></script>
	<!-- END SETTINGS -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2120269,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script><script async src="https://www.googletagmanager.com/gtag/js?id=G-Q3ZYEKLQ68"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q3ZYEKLQ68');
</script></head>
<!--
  HOW TO USE: 
  data-theme: default (default), dark, light
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-behavior: sticky (default), fixed, compact
-->

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
	<div class="wrapper">
		<?php include'common/sidebar.php';?>
		<div class="main">
			<?php include'common/header.php';?>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Form Layouts</h1>

					<div class="row">
						<div class="col-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Basic form</h5>
									<h6 class="card-subtitle text-muted">Default Bootstrap form layout.</h6>
								</div>
								<div class="card-body">
									<form>
										<div class="mb-3">
											<label class="form-label">Email address</label>
											<input type="email" class="form-control" placeholder="Email">
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input type="password" class="form-control" placeholder="Password">
										</div>
										<div class="mb-3">
											<label class="form-label">Textarea</label>
											<textarea class="form-control" placeholder="Textarea" rows="1"></textarea>
										</div>
										<div class="mb-3">
											<label class="form-label w-100">File input</label>
											<input type="file">
											<small class="form-text text-muted">Example block-level help text here.</small>
										</div>
										<div class="mb-3">
											<label class="form-check m-0">
              <input type="checkbox" class="form-check-input">
              <span class="form-check-label">Check me out</span>
            </label>
										</div>
										<button type="submit" class="btn btn-primary">Submit</button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Horizontal form</h5>
									<h6 class="card-subtitle text-muted">Horizontal Bootstrap layout.</h6>
								</div>
								<div class="card-body">
									<form>
										<div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right">Email</label>
											<div class="col-sm-10">
												<input type="email" class="form-control" placeholder="Email">
											</div>
										</div>
										<div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right">Password</label>
											<div class="col-sm-10">
												<input type="password" class="form-control" placeholder="Password">
											</div>
										</div>
										<div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right">Textarea</label>
											<div class="col-sm-10">
												<textarea class="form-control" placeholder="Textarea" rows="3"></textarea>
											</div>
										</div>
										<fieldset class="mb-3">
											<div class="row">
												<label class="col-form-label col-sm-2 text-sm-right pt-sm-0">Radios</label>
												<div class="col-sm-10">
													<label class="form-check">
                  <input name="radio-3" type="radio" class="form-check-input" checked>
                  <span class="form-check-label">Default radio</span>
                </label>
													<label class="form-check">
                  <input name="radio-3" type="radio" class="form-check-input">
                  <span class="form-check-label">Second default radio</span>
                </label>
													<label class="form-check">
                  <input name="radio-3" type="radio" class="form-check-input" disabled>
                  <span class="form-check-label">Disabled radio</span>
                </label>
												</div>
											</div>
										</fieldset>
										<div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right pt-sm-0">Checkbox</label>
											<div class="col-sm-10">
												<label class="form-check m-0">
                <input type="checkbox" class="form-check-input">
                <span class="form-check-label">Check me out</span>
              </label>
											</div>
										</div>
										<div class="mb-3 row">
											<div class="col-sm-10 ml-sm-auto">
												<button type="submit" class="btn btn-primary">Submit</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Form row</h5>
									<h6 class="card-subtitle text-muted">Bootstrap column layout.</h6>
								</div>
								<div class="card-body">
									<form>
										<div class="row">
											<div class="mb-3 col-md-6">
												<label class="form-label" for="inputEmail4">Email</label>
												<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
											</div>
											<div class="mb-3 col-md-6">
												<label class="form-label" for="inputPassword4">Password</label>
												<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label" for="inputAddress">Address</label>
											<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
										</div>
										<div class="mb-3">
											<label class="form-label" for="inputAddress2">Address 2</label>
											<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
										</div>
										<div class="row">
											<div class="mb-3 col-md-6">
												<label class="form-label" for="inputCity">City</label>
												<input type="text" class="form-control" id="inputCity">
											</div>
											<div class="mb-3 col-md-4">
												<label class="form-label" for="inputState">State</label>
												<select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
											</div>
											<div class="mb-3 col-md-2">
												<label class="form-label" for="inputZip">Zip</label>
												<input type="text" class="form-control" id="inputZip">
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label" class="form-check m-0">
              <input type="checkbox" class="form-check-input">
              <span class="form-check-label">Check me out</span>
            </label>
										</div>
										<button type="submit" class="btn btn-primary">Submit</button>
									</form>
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Inline form</h5>
									<h6 class="card-subtitle text-muted">Single horizontal row.</h6>
								</div>
								<div class="card-body">
									<form class="row row-cols-md-auto align-items-center">
										<div class="col-12">
											<label class="sr-only" for="inlineFormInputName2">Name</label>
											<input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">
										</div>

										<div class="col-12">
											<label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
											<div class="input-group mb-2 mr-sm-2">
												<div class="input-group-text">@</div>
												<input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
											</div>
										</div>

										<div class="col-12">
											<div class="form-check mb-1 mr-sm-2">
												<input type="checkbox" class="form-check-input" id="customControlInline">
												<label class="form-check-label" for="customControlInline">Remember me</label>
											</div>
										</div>

										<div class="col-12">
											<button type="submit" class="btn btn-primary mb-2">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

			<?php include'common/footer.php';?>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>


<!-- Mirrored from appstack.bootlab.io/forms-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Aug 2021 05:07:27 GMT -->
</html>