<div class="main">
	<div class="offer-form" id="offer-form">
		<!-- <form id="formgetcode" action="" class="main-form">
			<p>Скачайте программу <span>БЕСПЛАТНО</span> прямо сейчас</p> -->
			<!-- <input id="name" type="name" class="main-form-input" placeholder="Введите ваше имя">
			<input id="email" type="e-mail" class="main-form-input" placeholder="Введите ваш E-mail"> -->
			<!-- <input id="phone" type="number" class="main-form-input main-form-input-telephone main-form-input-telephone__first " placeholder="Введите ваш номер">
			<select id="prephone" name="" class="main-form-select">
				<option value="+998"> <img src="../img/logo.pnh" alt="logo"> +998</option>
				<option value="+7">+7</option>
				<option value="+380">+380</option>
			</select>
			<button class="main-form-btn btn" onclick="getForm(1);">Скачать</button>
		</form>
	</div> -->  
	<div class="offer-form offer-form__footer wow fadeInUp" data-wow-delay="0.8s" id="offer-form">
		<form  id="formgetcode2" action="OnSubmit" class="main-form">
			<p>Скачайте программу <span>БЕСПЛАТНО</span> прямо сейчас</p>
			<p class="main-form__descr">на 30дней</p>
			<input id="name2" type="name" class="main-form-input" placeholder="Введите ваше имя">
			<input id="email2" type="e-mail" class="main-form-input" placeholder="Введите ваш E-mail">
			<input id="phone2" type="number" class="main-form-input main-form-input-telephone" placeholder="Введите ваш номер">
			<select id="prephone2" name="" class="main-form-select">
				<option value="+998">+998</option>
				<option value="+7">+7</option>
				<option value="+380">+380</option>
			</select>
			<button class="main-form-btn" onclick="getForm(2);">Получить код</button>
			<input id="code2" type="number" class="main-form-input" placeholder="Введите код подтверждения">
			<span style="font-size: 14px; color: red; position: relative; top: -12px; font-family: Roboto;">введите код, который мы отправили на Ваш номер</span>
			<button class="main-form-btn btn" type="submit" onclick="getForm(3);">Скачать</button>
		</form>
	</div>
	<?php
		include('header-icon.php');
	?>
</div>