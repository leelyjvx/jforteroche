<!DOCTYPE html>
<html>
<head>
	<title> <?= $title; ?> </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/intro.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/brands.css" integrity="sha384-BKw0P+CQz9xmby+uplDwp82Py8x1xtYPK3ORn/ZSoe6Dk3ETP59WCDnX+fI1XCKK" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/fontawesome.css" integrity="sha384-4aon80D8rXCGx9ayDt85LbyUHeMWd3UiBaWliBlJ53yzm9hqN21A+o1pqoyK04h+" crossorigin="anonymous">
	<link rel="icon" href="pictures/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="assets/css/admin/admin_template.css">
	<link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
	<script src="assets/tinymce/tinymce.min.js"></script>
	<script type="text/javascript">

		tinymce.init({
			selector: 'textarea',
			language: "fr_FR",
			plugins: "image, link, anchor, lists, table, textcolor colorpicker, charmap, contextmenu, help, hr, nonbreaking, preview, print, searchreplace, wordcount, visualblocks",
			toolbar: "undo redo | bold italic underline | forecolor backcolor | image | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | table anchor link image",
			contextmenu: "undo redo | bold italic underline | link image inserttable | cell row column deletetable",
			language: "fr_FR",
			skin: "oxide",
			image_dimensions: false,
			image_class_list: [
			{title: 'Responsive', value: 'img-responsive'}
			],
			forced_root_block: false,
			force_br_newlines: true,
			force_p_newlines: false
		});

	</script>

</head>