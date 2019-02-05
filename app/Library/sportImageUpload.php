<?php
	if (isset($_FILES["file"])) {

		$rightUploaded = false;

		$errors = array();
		$file_name = $_FILES['image']['name'];
		$file_size = $_FILES['image']['size'];
		$file_tmp = $_FILES['image']['tmp_name'];
		$file_type = $_FILES['image']['type'];

		$file_ext = strtolower($file_name);
		$file_ext = explode(".", $file_name);
		$file_ext = end($file_ext);
		$file_name = $postId.".".$file_ext;

		$extensions= array("jpeg","jpg","png");

		if (in_array($file_ext, $extensions)=== false) {
			array_push($errors, "extension not allowed, please choose a JPEG or PNG file.");
		}

		if ($file_size > 2097152) {
			array_push($errors, 'File size must be excately 2 MB');
		}

		if (empty($errors)==true) {
			$now = new DateTime();
			$path = "../images/".$now->format("Y")."/".$now->format('F');
			createDirectory($path);

			move_uploaded_file($file_tmp, $path."/".$file_name);
			$rightUploaded = true;
			$imagePath = "images/".$now->format("Y")."/".$now->format('F')."/".$file_name;
			$_SESSION['imagePath'] = $imagePath;

		} else {
			$rightUploaded = false;
		}

		return $rightUploaded;
	}
?>
