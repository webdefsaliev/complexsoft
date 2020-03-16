<section class="offer" id="contacts">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-sm-12 col-lg-6">
				<div class="offer-block wow bounceInUp" data-wow-delay="0.4s">
					<div class="offer-block__title">
						<span>Контролируй</span> Финансы<br>
						<span>Экономь</span> Время<br>
						Оптимизируй <span>Бизнес</span>
					</div>
					<div class="offer-block__descr" id="slowly">
						Заполни форму - и получи Money<span>Manager</span> на 30 дней бесплатно<br>
						<!-- <a href="#offer-form" class="main-block__btn"><button class="btn-o">Бесплатно!</button></a> -->
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-lg-6" id="offer-form-footer">
				<div class="offer-form offer-form__footer wow bounceInUp" data-wow-delay="0.5s" id="offer-form">
					<form  id="formgetcode3" action="OnSubmit" class="main-form">
						<input id="name3" type="name" class="main-form-input main-form-input__none" placeholder="Введите ваше имя" >
						<input id="email3" type="e-mail" class="main-form-input main-form-input__none" placeholder="Введите ваш E-mail">
						<input id="phone3" type="number" class="main-form-input main-form-input-telephone" placeholder="Введите ваш номер">
						<select id="prephone3" name="" class="main-form-select">
							<option value="+998">+998</option>
							<option value="+7">+7</option>
							<option value="+380">+380</option>
						</select>
						<button class="main-form-btn" onclick="getForm(4);">Получить код</button>
						<input id="code2" type="number" class="main-form-input" placeholder="Введите код подтверждения">
						<span style="font-size: 12px; color: red; position: relative; top: -12px; font-family: Roboto;">введите код, который мы отправили на Ваш номер</span>
						<button class="main-form-btn btn" type="submit" onclick="getForm(5);"> получить бесплатно</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>