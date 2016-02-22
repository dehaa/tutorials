<?php
$baseUrl = \core\App::getInstance()->config->get('app.baseUrl');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Narrow Jumbotron Template for Bootstrap</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Bootstrap core CSS -->
	<link href="<?= $baseUrl ?>/tutorials/facade/asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= $baseUrl ?>/tutorials/facade/asset/front/style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>


<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
					aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?= $baseUrl ?>/tutorials"><span class="glyphicon glyphicon-pencil"
																				aria-hidden=true></span>dehaa.com</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li>
					<a href="?type=altinGram">
						<span class="glyphicon glyphicon-phone" aria-hidden=true></span>
						Mobile
					</a>
				</li>
				<li>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href=""><span class="glyphicon glyphicon-asterisk" aria-hidden=true></span>&nbsp;Yazarlar</a>
				</li>
				<li><a href=""><span class="glyphicon glyphicon-book" aria-hidden=true></span>&nbsp;Kütüphane</a></li>
				<li><a href=""><span class="glyphicon glyphicon-tags" aria-hidden=true></span>&nbsp;Etiketler</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-leaf" aria-hidden=true></span>&nbsp;Makale Yaz</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
					   aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden=true></span>&nbsp;Üyelik<span
							class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="login.html">Giriş</a></li>
						<li><a href="register.html">Kayıt</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Çıkış</a></li>
					</ul>
				</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-xs-6 col-lg-3">
			<ul class="list-group">
				<li class="list-group-item active">Cras justo odio</li>
				<li class="list-group-item">Dapibus ac facilisis in</li>
				<li class="list-group-item">Morbi leo risus</li>
				<li class="list-group-item">Porta ac consectetur ac</li>
				<li class="list-group-item">Vestibulum at eros</li>
			</ul>
		</div>
		<div class="col-xs-12 col-sm-6 col-lg-9">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Library</a></li>
				<li class="active">Data</li>
			</ol>

			<div style="margin:0 auto;font-size:18px;">
				<a href="">
					Yazı başlığı
				</a>
			</div>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id tortor volutpat, ullamcorper nisl
			sed, malesuada nunc. Maecenas efficitur erat ut neque dapibus, sit amet egestas tellus finibus. Integer at
			massa sed sapien lobortis ultricies. Praesent finibus placerat leo a molestie. Curabitur risus mi, porta eu
			libero in, scelerisque laoreet velit. Nam sagittis malesuada sapien in pulvinar. Aliquam accumsan, nibh in
			aliquet convallis, tellus purus ornare tortor, vel consectetur metus arcu sit amet tortor. Nam efficitur
			aliquet nisl, sit amet semper est efficitur ut. Sed rhoncus ante neque, nec placerat ex molestie in.

			Nulla non condimentum arcu, non auctor tortor. In facilisis est et sodales consectetur. Fusce ut justo
			neque. Cras finibus purus quis tellus bibendum molestie. Vestibulum finibus lacus ut erat egestas, in
			rhoncus neque aliquet. Etiam accumsan ligula vitae arcu fermentum finibus. Suspendisse vestibulum ante
			cursus, finibus nunc eu, pulvinar felis.

			Vestibulum convallis eleifend justo, id ornare leo auctor pretium. Fusce sodales dictum ligula, ac feugiat
			enim posuere eu. Cras ac mi ullamcorper, ullamcorper sapien sed, varius elit. Praesent sollicitudin sem sed
			turpis egestas, at sollicitudin libero auctor. Quisque sed varius nibh, iaculis blandit nulla. Vivamus eget
			pulvinar urna, nec finibus risus. Quisque porta in eros vitae elementum. Class aptent taciti sociosqu ad
			litora torquent per conubia nostra, per inceptos himenaeos. Vivamus sollicitudin eros non blandit lobortis.
			Fusce erat turpis, dictum a feugiat sed, semper eu quam. In tincidunt at magna ac volutpat. Sed ac dapibus
			nisl.

			Quisque iaculis lectus nisi, pulvinar fringilla dolor efficitur sit amet. Praesent mi ex, aliquet eget
			ligula hendrerit, bibendum imperdiet augue. Pellentesque nec mauris quis nibh egestas mattis. Etiam ornare
			viverra laoreet. Ut convallis mollis interdum. Aenean porttitor fermentum orci ac aliquam. Nulla facilisi.
			Suspendisse in iaculis libero.

			Suspendisse sit amet rhoncus mauris. Praesent sed ipsum vel erat luctus iaculis. Sed nec tortor porttitor,
			auctor felis vel, faucibus nisl. Proin posuere consectetur leo, eget pellentesque tortor blandit a. Aenean
			sed finibus est. Sed quis dui id dui sodales porttitor ac sed justo. Pellentesque nec iaculis ex. Vestibulum
			urna purus, consectetur ut enim eu, pellentesque sodales leo. Phasellus in nunc gravida, laoreet neque vel,
			dignissim felis. Donec euismod nulla at eros tristique, eu consectetur elit suscipit.
		</div>
	</div>

	<footer class="footer">
		<p>&copy; 2008 <a href="www.dehaa.com">www.dehaa.com</a></p>
	</footer>

</div> <!-- /container -->
<script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?= $baseUrl ?>/tutorials/facade/asset/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>