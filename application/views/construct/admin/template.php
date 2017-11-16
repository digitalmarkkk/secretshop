<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8">

    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->

	<title><?php echo (isset($page_title))? $page_title : 'UServe' ; ?></title>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1"/>
	<meta name="msapplication-tap-highlight" content="no">
	<meta name="mobile-web-app-capable" content="yes">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="description" content="<?php echo (isset($meta_description))? $meta_description : '' ?>">
	<meta name="keywords" content="<?php echo (isset($meta_keywords))? $meta_keywords : '' ?>">

	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="UServe">

	<meta name="theme-color" content="#4C7FF0">

	<!-- <link rel="icon" href="<?php echo assets_url() ?>images/icon-iestimator.png" type="image/x-icon"/> -->

	<!-- Stylesheets -->

	<?php if($styles AND is_array($styles) AND count($styles) > 0): ?>

		<?php foreach($styles AS $style): ?>

			<?php echo link_tag($style); ?>

		<?php endforeach; ?>

	<?php endif; ?>
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/admin/app.css?<?php echo rand('200', '20000'); ?>" id="load_styles_before"/>
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/admin/app.skins.css"/>
	
</head>



<body>

	<div class="app">

		<div class="off-canvas-overlay" data-toggle="sidebar"></div>
		<?php echo $header;?>

		<div class="main-panel">
			<?php echo $navigation;?>

			<div class="main-content">
				<?php if(isset($content)): ?>

					<?php echo $content;?>

				<?php endif; ?>

				<?php echo $footer;?>

			</div>
		</div>

	</div>

	<script src="<?php echo assets_url();?>js/admin/jquery.js"></script>
	<script src="<?php echo assets_url();?>js/admin/pace.js"></script>
	<script src="<?php echo assets_url();?>js/admin/tether.js"></script>
	<script src="<?php echo assets_url();?>js/admin/bootstrap.min.js"></script>
	<script src="<?php echo assets_url();?>js/admin/fastclick.js"></script>
	<script src="<?php echo assets_url();?>js/admin/constants.js"></script>
	<script src="<?php echo assets_url();?>js/admin/main.js"></script>
	<script src="<?php echo assets_url();?>js/admin/jquery-ui-1.12.1.min.js"></script>	

	<script src="<?php echo assets_url();?>js/admin/dashboard.js"></script>
	<script src="<?php echo assets_url();?>js/admin/sweetalert.min.js"></script>
	<script src="<?php echo assets_url();?>js/admin/alert.js"></script>
	<script src="<?php echo assets_url();?>js/admin/custom.js"></script>

</body>

</html>

