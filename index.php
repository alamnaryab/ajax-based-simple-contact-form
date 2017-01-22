 <!DOCTYPE html>
 <html>
 <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ajax Based Contact Form| Demos by Alam</title>
	<meta name="Keywords" content="alam,  developer, demo, code, tests, links, fakhr-e-alam">
	<meta name="Description" content="Ajax based simple contact form demonstration.">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script
	  src="https://code.jquery.com/jquery-1.12.4.min.js"
	  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
	  crossorigin="anonymous"></script>
	<script type="text/javascript" src="myscript.js"></script>
 </head>
 <body>
	<div class="container">
		<h1 class="text-center">Ajax based simple contact form</h1>
		<p class="text-center small">This is Demo by Alam. Visit <a href="http://www.codingsips.com">Coding Sips</a> for more Coding tips</p>
		<div class="jumbotron">
			<a class="label label-info pull-right" href="http://www.codingsips.com/generate-qr-code-easily-one-line-php/" target="_blank">Tutorial: Ajax based contact form</a>
			<br>
				<form>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="txtName">Name</label>
								<input type="text" id="txtName" name="txtName" class="txt form-control" />
							</div>
						</div><!--.col-->
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="txtEmail">Email</label>
								<input type="email" id="txtEmail" name="txtEmail" class="txt form-control" />
							</div>
						</div><!--.col-->
					</div><!--.row-->
					
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="txtCompany">Company</label>
								<input type="text" id="txtCompany" name="txtCompany" class="txt form-control" />
							</div>
						</div><!--.col-->
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="txtPhone">Phone</label>
								<input type="text" id="txtPhone" name="txtPhone" class="txt form-control" />
							</div>
						</div><!--.col-->
					</div><!--.row-->
					
					<div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								<label for="txtMessage">Message</label>
								<textarea rows="5" id="txtMessage" name="txtMessage" class="txt form-control"></textarea>
							</div>
						</div><!--.col-->
					</div><!--.row-->
					
					
					<div class="row">
						<div class="col-xs12 col-sm-6">
							<input type="submit" value="Send Message" class="btn btn-success" />
						</div><!--.col-->
						<div class="col-xs12 col-sm-6">
							<div class="result"></div><!--.result-->
						</div><!--.col-->
					</div><!--.row-->
					
				</form>
		</div><!--.jumbotron-->
	</div><!--.container-->
</body>
</html>
 