<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("bootstrap/css/bootstrap.css") ?>">

	<title>Upload Form</title>

	<script type="text/javascript">
		function previewImage() {
			document.getElementById("pre-pict").style.display = "block";
			var reader_1301164203 = new FileReader();
			reader_1301164203.readAsDataURL(document.getElementById("image").files[0]);

			reader_1301164203.onload = function(event_1301164203) {
				document.getElementById("pre-pict").src = event_1301164203.target.result;
			};
		};
	</script>
</head>
<body style="background: gray;">
	<?php echo form_open_multipart('upload/do_upload'); ?>
	<div class="container" style="background: white; padding-bottom: 5px; padding-top: 12px; border-radius: 5px; box-shadow: inset 0px 3px silver;">
		<form action="" method="">
			<p><b>Image</b></p>
			<input id="image" type="file" name="userfile" size="20" onchange="previewImage()" /><br /><br />
			<div class="container-fluid text-center">
				<img id="pre-pict" class="thumbnail img-preview" alt="imagePreview" style="display: none; width: 300px; height: 300px; margin-right: auto; margin-left: auto;"><br>
				<input type="submit" class="btn btn-primary" name="upload" value="Save" /><br>
				<?php echo $error_1301164203; ?>
			</div>
		</form>
	</div>
</body>
</html>