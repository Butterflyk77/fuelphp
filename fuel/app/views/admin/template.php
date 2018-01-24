<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css(array(
		'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
		'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
		'admin/style.css',
		'admin/main.css',
		'admin/chartist-custom.css',
	));?>
	<style>
		body { margin: 50px; }
	</style>

</head>
<body>
	<div id="wrapper">
	<?php if ($current_user): ?>
	
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<h4>網站後端</h4>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo $current_user->username ?> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><?php echo Html::anchor('admin/logout', 'Logout') ?></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li class="<?php echo Uri::segment(2) == '' ? 'active' : '' ?>">
							<?php echo Html::anchor('admin', '<i class="lnr lnr-home"></i> <span>Dashboard</span>') ?>
						</li>
					<?php
						$files = new GlobIterator(APPPATH.'classes/controller/admin/*.php');
						foreach($files as $file)
						{
							$section_segment = $file->getBasename('.php');
							$section_title = Inflector::humanize($section_segment);
							?>
							<li class="<?php echo Uri::segment(2) == $section_segment ? 'active' : '' ?>">
								<?php echo Html::anchor('admin/'.$section_segment,'<i class="lnr lnr-chevron-right"></i>'.$section_title) ?>
							</li>

							<?php
						}
					?>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
	<?php endif; ?>
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="col-md-12">
						<hr>
						<?php if (Session::get_flash('success')): ?>
							<div class="alert alert-success alert-dismissable">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<p>
								<?php echo implode('</p><p>', (array) Session::get_flash('success')); ?>
								</p>
							</div>
						<?php endif; ?>
						<?php if (Session::get_flash('error')): ?>
							<div class="alert alert-danger alert-dismissable">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<p>
								<?php echo implode('</p><p>', (array) Session::get_flash('error')); ?>
								</p>
							</div>
						<?php endif; ?>
					</div>
					<div class="col-md-12">
						<?php echo $content; ?>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
	</div>
		<?php echo Asset::js(array(
		'http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js',
		'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
		'admin/jquery.slimscroll.min.js',
		'admin/jquery.easypiechart.min.js',
		'admin/chartist.min.js',
		'admin/klorofil-common.js',
	)); ?>
	<script>
		$(function(){ $('.topbar').dropdown(); });
	</script>
</body>
</html>
