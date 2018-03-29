<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Import Excel</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />
</head>
<body>
	<div class="container">
		<div class="col-md-offset-4 col-md-4 jumbotron">
			<?= form_open_multipart('excel', 'class="form-horizontal" id="myform"'); ?>
				<div class="form-group">
					<label for="" class="label-control"></label>
					<input type="file" name="result_file" id="" class="form-control">
				</div>
				<div class="form-group">

					<input type="submit" name="submit" id="" value="Import" class="btn btn-default">
				</div>
			</form>
		</div>
	</div>

	<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>