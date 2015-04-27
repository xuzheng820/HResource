<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="language" content="en">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Bootstrap core CSS -->
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- jPages core CSS -->
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/lib/js/jpages/css/jPages.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/lib/js/jpages/css/animate.css" rel="stylesheet">

	<!-- jQuery -->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/lib/js/jquery-1.11.2.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/lib/js/jpages/js/jPages.min.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div id="page" style="padding-top: 60px">

	<div id="header" class="navbar navbar-fixed-top navbar-inverse" role="navigation" >
		<div class="container-fluid">
			<div id="logo" class="navbar-header">
				<a class="navbar-brand" href="<?php echo Yii::app()->homeUrl?>"><span class="glyphicon glyphicon-home"></span> <?php echo CHtml::encode(Yii::app()->name); ?></a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="glyphicon glyphicon-question-sign"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">在线帮助</a></li>
							<li><a href="#">研发团队</a></li>
							<li><a href="#">关于</a></li>
						</ul>
					</li>
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="glyphicon glyphicon-user"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">用户信息</a></li>
							<li class="divider"></li>
							<li><a href="/logout.php">注销</a></li>
						</ul>
					</li>
				</ul>
				<form class="navbar-form navbar-right">
					<div class="form-group has-feedback">
						<span class="glyphicon glyphicon-search form-control-feedback"></span>
						<input type="text" class="form-control" placeholder="Search...">
					</div>
				</form>
				<div class="navbar-form navbar-right"></div>
			</div>
		</div>
	</div><!-- header -->
	<div id="mainmenu" class="container-fluid">
		<div class="row">
			<div id = "leftmenu" class="col-sm-3 col-md-2 col-lg-2 sidebar">
				<ul class="nav nav-pills nav-stacked has-feedback">
					<li><a href="#"><span class="glyphicon glyphicon-gift"></span> 雇员管理</a>
						<ul class="unstyled">
							<li><a href="<?php echo Yii::app()->createUrl('employee/ListEmp')?>">雇员查询</a></li>
						</ul>
					</li>
					<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> 假期管理</a>
						<ul class="unstyled">
							<li><a href="<?php echo Yii::app()->createUrl('employee/Index')?>">假期查询</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav nav-pills nav-stacked">
					<li><a class="back-to-top" href="#top">返回顶部</a></li>
				</ul>
			</div>
			<div id = "content" class="col-sm-9 col-md-10 col-lg-10 main">
				<?php if(isset($this->breadcrumbs)):?>
					<?php $this->widget('zii.widgets.CBreadcrumbs', array(
						'links'=>$this->breadcrumbs,
					)); ?><!-- breadcrumbs -->
				<?php endif?>

				<?php echo $content; ?>
			</div>
		</div>
	</div><!-- mainmenu -->
	<div id="footer">
		<p class="text-center">Copyright &copy; <?php echo date('Y'); ?> by Jingle Company. All Rights Reserved.</p>
		<p class="text-center"><?php echo Yii::powered(); ?></p>
	</div><!-- footer -->

</div><!-- page -->

<!-- Bootstrap core JavaScript -->
<!-- Bootstrap core JavaScript -->
<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>
