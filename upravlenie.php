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
		<link rel="stylesheet" href="css/Gotham.css">
		<!-- slider -->
		<link rel="stylesheet" href="slick/slick.css">
		<link rel="stylesheet" href="slick/slick-theme.css">
		<!-- google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,900&display=swap" rel="stylesheet">
		<!-- icon -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
		<div class="no-select">
			<?php
				include('menu-mobile.php');
			?>
			<?php
				include('header-item.php');
			?>
			<header class="section-block">
				<div class="header-bg" id="header">
					<div class="container">
						<?php
							include('header-top.php');
						?>
						<?php
							include('header-text-upravlenie.php');
						?>
					</div>
				</div>	
				<?php
					include('main.php');
				?>
			</header>
			<section class="triggers">
				<div class="container">
					<div class="triggers-blocks">
						<div class="row">
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="triggers-block">
									<div class="triggers-block__icon"><i class="fas fa-sync-alt"></i></div>
									<div class="triggers-block__info">Быстрая обработка данных</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="triggers-block">
									<div class="triggers-block__icon"><i class="far fa-list-alt"></i></div>
									<div class="triggers-block__info">Достоверная отчетность</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="triggers-block">
									<div class="triggers-block__icon"><i class="fas fa-clipboard-check"></i></div>
									<div class="triggers-block__info">Принятие эффективных решений</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="triggers-block">
									<div class="triggers-block__icon"><i class="fas fa-hand-holding-usd"></i></div>
									<div class="triggers-block__info">Повышение доходности в 2 раза</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="triggers-block">
									<div class="triggers-block__icon"><i class="fas fa-lock"></i></div>
									<div class="triggers-block__info">Ваши данные под надёжной защитой!</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="triggers-block">
									<div class="triggers-block__icon"><i class="far fa-check-circle"></i></div>
									<div class="triggers-block__info">Будьте уверены в своих решениях с Money Manager!</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="info">
				<div class="container">
					<div class="block">
						<div class="info-block__title section-title">Управленческий учет</div>
						<div class="info-block__descr">
						Без точных данных невозможно развитие бизнеса. Для роста требуется оперативный учет всех операций и детальный анализ деятельности компании. Скажите ”НЕТ” сложным программам 1С и ненадежным таблицам в Excel! <b>Money Manager</b> - программа, разработанная специально для малого бизнеса. Владейте информацией, управляйте прибылью!  <br>
						<ul>
							<li>Автоматизированный учет обеспечивает сокращение времени на обработку данных на 60%.</li>
							<li>Грамотное планирование и составление бюджета помогают избежать кассовых разрывов.</li>
							<li>Актуальная информация о состоянии компании в любой момент обеспечивает надежный контроль за всеми бизнес-процессами. </li>
							<li>Анализ доходов и расходов способствует формированию стоимости товаров и услуг для достижения максимальной рентабельности. </li>
						</ul>
						</div>
					</div>
				</div>
			</section>
			<?php
				include('forwho.php');
			?>
			<?php
				include('advantages-upravlenie.php');
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