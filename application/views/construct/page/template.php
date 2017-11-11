<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8">

    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->

	<title><?php echo (isset($page_title))? $page_title : 'X' ; ?></title>

	<!-- <meta content='user-scalable=0' name='viewport' /> -->

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="description" content="<?php echo (isset($meta_description))? $meta_description : '' ?>">
	<meta name="keywords" content="<?php echo (isset($meta_keywords))? $meta_keywords : '' ?>">

	<!-- <link rel="icon" href="<?php echo assets_url() ?>images/x.png" type="image/x-icon"/> -->

	<!-- Stylesheets -->

	<?php if($styles AND is_array($styles) AND count($styles) > 0): ?>

		<?php foreach($styles AS $style): ?>

			<?php echo link_tag($style); ?>

		<?php endforeach; ?>

	<?php endif; ?>
	
</head>



<body>

	<!--[if lt IE 8]>
	    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please upgrade your browser to improve your experience.</p>
	<![endif]-->

	<div class="content">

		<?php echo $header;?>

		<?php if(isset($content)): ?>

			<?php echo $content;?>

		<?php endif; ?>

		<?php echo $footer;?>

	</div>

</body>

</html>

