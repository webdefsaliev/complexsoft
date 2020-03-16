<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="complexsoft">
		<meta name="author" content="Abdumalik Saliev">
		<link rel="icon" href="img/favicon.ico">
		<title>Komplexsoft.uz</title>
		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="css/style.css">
		<link href="css/bootstrap-grid.min.css" rel="stylesheet">
		<link href="css/Gotham.css" rel="stylesheet">
		<!-- slider -->
		<link rel="stylesheet" href="slick/slick.css">
		<link rel="stylesheet" href="slick/slick-theme.css">
		<!-- google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,900&display=swap" rel="stylesheet">
		<!-- icon -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<!-- wow -->
		<link rel="stylesheet" href="css/animate.css">
		<!-- Custom styles for this template -->
		<link href="starter-template.css" rel="stylesheet">
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-101102113-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-101102113-1');
		</script>
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript" >
		   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
		   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
		   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		   ym(53358733, "init", {
		        clickmap:true,
		        trackLinks:true,
		        accurateTrackBounce:true,
		        webvisor:true
		   });
		</script>
		<noscript><div><img src="https://mc.yandex.ru/watch/53358733" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->
	</head>

	<body>
		<div class="no-select no-select__sklad_uzbkiril">
			<?php
				include('menu-mobile.php');
			?>
			<?php
				include('menu-desktop.php');
			?>
			<?php
				include('header-item.php');
			?>
			<header class="section-block">
				<div class="header-bg" id="header">
					<div class="container-fluid">
						<?php
							include('header-top.php');
						?>
						<div class="header-wrap">
							<?php
								include('header-text-sklad.php');
							?>
							<?php
								include('main.php');
							?>
						</div>
					</div>
				</div>	
			</header>
			<?php
				include('triggers-sklad.php');
			?>
			<?php
				include('info-sklad.php');
			?>
			<?php
				include('forwho.php');
			?>
			<?php
				include('advantages-sklad.php');
			?>
			<?php
				include('video.php');
			?>
			<?php
				include('howitworks.php');
			?>
			<?php
				include('reviews.php');
			?>
			<?php
				include('offer.php');
			?>
			<?php
				include('footer.php');
			?>
		</div><!-- no-select -->
		<!-- Bootstrap core JavaScript ================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootcode.js"></script>
		<!-- slider -->
		<script type="text/javascript" src="slick/slick.min.js"></script>
		<?php
			include('javascript.php');
		?>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>