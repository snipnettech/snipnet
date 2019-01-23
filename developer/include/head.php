<?php
require_once "class/settings.class.php";
$page_title = $pt;
$page_desc = $ds;
$page_keyw = $kw;
?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<meta name="description" content="<?php echo $page_desc; ?>">
        <meta name="keywords" content="<?php echo $page_keyw; ?>">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $base_url; ?>/assets/img/favicon.png">
        <title><?php echo $page_title; ?> - <?php echo $site_title; ?></title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/assets/css/line-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/assets/plugins/morris/morris.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/assets/css/select2.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/assets/css/dataTables.bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/assets/css/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/assets/plugins/summernote/dist/summernote.css">
		<!--[if lt IE 9]>
			<script src="<?php echo $base_url; ?>/assets/js/html5shiv.min.js"></script>
			<script src="<?php echo $base_url; ?>/assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
