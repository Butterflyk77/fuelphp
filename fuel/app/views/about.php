<?php echo $header; ?>
<?php echo $navbar; ?>
	<div class="container blog-content">
		<div class="jumbotron">
			<h1>乳癌中西醫整合治療門診介紹</h1>
		</div>
		<div class="row">
			<div class="col-sm-8 blog-main">
				<section class="blog-post">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="blog-post-content">
								<h2 class="blog-post-title"><?php echo $title?></h2>
								<h4><?php echo $subtitle?></h4>
								<img src="assets/img/about.png" class="img-responsive" />
								<div class="blog-post-content ans">
								<h3><?php echo $name?></h3>
									<p><?php
										$var = $body;
										$pieces = explode("，", $var);
										foreach($pieces as $element)
										{
											echo $element."<br/>";
										}
										?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- /.blog-post -->
			
			</div>
			<!-- /.blog-main -->
			<div class="col-sm-3 col-sm-offset-1 blog-sidebar">

				<div class="sidebar-module">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
				</div>
				<!-- /.sidebar-module -->
				<div class="sidebar-module">
					<div class="panel panel-default">
						<div class="panel-body">
							<h4>Categories</h4>
							<ul class="categories list-unstyled">
								<li>
									<a class="label label-light label-primary" href="contactus.html">聯絡我們</a>
								</li>
								<li>
									<a class="label label-light label-warning" href="Link.html">相關連結</a>
								</li>
								<li>
									<a class="label label-light label-info" href="story.html">網路小故事</a>
								</li>
								<li>
									<a class="label label-light label-success" href="Q&amp;A.html">網路問答</a>
								</li>
								<li>
									<a class="label label-light label-default" href="information.html">最新消息</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /.sidebar-module -->
				<!-- /.sidebar-module -->
			</div>
			<!-- /.blog-sidebar -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
    <?php echo $footer; ?>