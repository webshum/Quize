<?php $success = (isset($_GET['success']) && !empty($_GET['success'])) ? 1 : 0; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">

	<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<title>Дізнайтеся чи допоможе кінезітерапія від болю в попереку?</title>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-161957781-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-161957781-2');
	</script>

	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '351124760159980');
		fbq('track', 'PageView');
	</script>
	<noscript>
	  	<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={351124760159980}&ev=PageView&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->
</head>
<body>

<div class="quize">
	<form action="amocrm.php" method="POST">
		<!-- START -->
		<div class="quize-start step-1 quize-fade quize-animation">
			<div class="row">
				<div class="bg">
					<img src="img/bg.webp" alt="">
				</div>

				<div class="text">
					<!-- body -->
					<div class="text-body">
						<h1>Потрібна робота?</h1>
						<p>Пройдіть короткий тест та отримайте можливість працювати в одному з найбільших дейтингових агенцій в Україні</p>

						<a href="#" class="quize-btn quize-next"><span>Пройти</span></a>

						<!-- <div class="bonus">
							<p><b>ПОДАРУНКИ</b> ПІСЛЯ ПРОХОДЖЕННЯ ТЕСТУ:</p>
							<div class="wrap">
								<div class="bonus-item">
									<img src="img/gift.png" alt="">
									<p>2 додаткових заняття при <b>купівлі</b> абонементу</p>
									<span class="ic-lock"></span>						
								</div>

								<div class="bonus-item">
									<img src="img/gift.png" alt="">
									<p>2 консультації <b>за ціною однієї.</b> Приходьте з рідними!</p>
									<span class="ic-lock"></span>
								</div>
							</div>					
						</div> -->
					</div>

					<!-- foot -->
					<div class="text-foot">
						<a href="tel:098 988 22 98">098 988 22 98</a>
					</div>
				</div>
			</div>			
		</div>
		<!-- // START -->

		<!-- STEP 2 -->
		<div class="quize-main step step-2 quize-animation">
			<div class="wrap">
				<div class="content">
					<div class="quize-head">
						<h2>Скільки вам років?</h2>
					</div>

					<div class="quize-body" data-title="Крок 1">
						<div class="row-2">
							<label class="radio checked">
								<input type="radio" name="step-1" value="18 - 23" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>18 - 23</p>
								</div>							
							</label>

							<label class="radio">
								<input type="radio" name="step-1" value="24 - 29" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>24 - 29</p>
								</div>								
							</label>

							<label class="radio">
								<input type="radio" name="step-1" value="30 - 33" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>30 - 33</p>
								</div>								
							</label>
						</div>
					</div>

					<div class="quize-foot">
						<div class="progress">
							<div class="progress-info">Готово: <span>0%</span></div>
							<div class="progress-bar">
								<div class="track" style="width: 0%;"></div>
							</div>
						</div>

						<a href="#" class="quize-back">
							<svg viewBox="0 0 24 24"><path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z" stroke-width="0" fill-rule="nonzero"></path></svg>
						</a>
					</div>
				</div>

				<aside>
					<div class="person">
						<div class="inner">
							<div class="avatar">
								<img src="img/avatar.jpg" alt="">
								<span></span>
							</div>
							<div>
								<div class="name">Олександр</div>
								<div class="profession">Ваш персональний менеджер</div>
							</div>						
						</div>

						<div class="talk">
							<div class="inner">
								<p>Беремо без досвіду роботи та всьому навчаємо</p>
							</div>						
						</div>
					</div>

					<!-- <div class="bonus">
						<div class="wrap">
							<div class="bonus-item">
								<img src="img/gift.png" alt="">
								<p>2 додаткових заняття при <b>купівлі</b> абонементу</p>
								<span class="ic-lock"></span>						
							</div>

							<div class="bonus-item">
								<img src="img/gift.png" alt="">
								<p>2 консультації <b>за ціною однієї.</b> Приходьте з рідними!</p>
								<span class="ic-lock"></span>
							</div>
						</div>					
					</div> -->
				</aside>
			</div>
		</div>
		<!-- // STEP 2 -->

		<!-- STEP 3 -->
		<div class="quize-main step step-3 quize-animation">
			<div class="wrap">
				<div class="content">
					<div class="quize-head">
						<h2>Чи є у вас досвід роботи у офісі?</h2>
					</div>

					<div class="quize-body" data-title="Крок 2">
						<div class="row-2">
							<label class="radio checked">
								<input type="radio" name="step-2" value="Так, є" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>Так, є</p>
								</div>							
							</label>

							<label class="radio">
								<input type="radio" name="step-2" value="Ні, немає" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>Ні, немає</p>
								</div>								
							</label>
						</div>
					</div>

					<div class="quize-foot">
						<div class="progress">
							<div class="progress-info">Готово: <span>20%</span></div>
							<div class="progress-bar">
								<div class="track" style="width: 20%;"></div>
							</div>
						</div>

						<a href="#" class="quize-back">
							<svg viewBox="0 0 24 24"><path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z" stroke-width="0" fill-rule="nonzero"></path></svg>
						</a>
					</div>
				</div>

				<aside>
					<div class="person">
						<div class="inner">
							<div class="avatar">
								<img src="img/avatar.jpg" alt="">
								<span></span>
							</div>
							<div>
								<div class="name">Олександр</div>
								<div class="profession">Ваш персональний менеджер</div>
							</div>						
						</div>

						<div class="talk">
							<div class="inner">
								<p>В нас сучасний, затишний офіс. Перевір сам!</p>
							</div>						
						</div>
					</div>

					<!-- <div class="bonus">
						<div class="wrap">
							<div class="bonus-item">
								<img src="img/gift.png" alt="">
								<p>2 додаткових заняття при <b>купівлі</b> абонементу</p>
								<span class="ic-lock"></span>						
							</div>

							<div class="bonus-item">
								<img src="img/gift.png" alt="">
								<p>2 консультації <b>за ціною однієї.</b> Приходьте з рідними!</p>
								<span class="ic-lock"></span>
							</div>
						</div>					
					</div> -->
				</aside>
			</div>
		</div>
		<!-- // STEP 3 -->

		<!-- STEP 4 -->
		<div class="quize-main step step-4 quize-animation">
			<div class="wrap">
				<div class="content">
					<div class="quize-head">
						<h2>Який графік роботи для вас зручний?</h2>
					</div>

					<div class="quize-body" data-title="Крок 3">
						<div class="row-2">
							<label class="radio checked">
								<input type="radio" name="step-3" value="Повний робочий день" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>Повний робочий день</p>
								</div>							
							</label>

							<label class="radio">
								<input type="radio" name="step-3" value="Не повний робочий день" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>Не повний робочий день</p>
								</div>								
							</label>

							<label class="radio checked">
								<input type="radio" name="step-3" value="Позмінно" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>Позмінно</p>
								</div>							
							</label>

							<label class="radio">
								<input type="radio" name="step-3" value="Індивідуальний робочий графік" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>Індивідуальний робочий графік</p>
								</div>								
							</label>
						</div>
					</div>

					<div class="quize-foot">
						<div class="progress">
							<div class="progress-info">Готово: <span>40%</span></div>
							<div class="progress-bar">
								<div class="track" style="width: 40%;"></div>
							</div>
						</div>

						<a href="#" class="quize-back">
							<svg viewBox="0 0 24 24"><path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z" stroke-width="0" fill-rule="nonzero"></path></svg>
						</a>
					</div>
				</div>

				<aside>
					<div class="person">
						<div class="inner">
							<div class="avatar">
								<img src="img/avatar.jpg" alt="">
								<span></span>
							</div>
							<div>
								<div class="name">Олександр</div>
								<div class="profession">Ваш персональний менеджер</div>
							</div>						
						</div>

						<div class="talk">
							<div class="inner">
								<p>Можливість кар’єрного росту та стабільна заробітня плата</p>
							</div>						
						</div>
					</div>

					<!-- <div class="bonus">
						<div class="wrap">
							<div class="bonus-item">
								<img src="img/gift.png" alt="">
								<p>2 додаткових заняття при <b>купівлі</b> абонементу</p>
								<span class="ic-lock"></span>						
							</div>

							<div class="bonus-item">
								<img src="img/gift.png" alt="">
								<p>2 консультації <b>за ціною однієї.</b> Приходьте з рідними!</p>
								<span class="ic-lock"></span>
							</div>
						</div>					
					</div> -->
				</aside>
			</div>
		</div>
		<!-- // STEP 4 -->

		<!-- STEP 5 -->
		<div class="quize-main step step-5 quize-animation">
			<div class="wrap">
				<div class="content">
					<div class="quize-head">
						<h2>Який рівень доходу для вас буде комфортним?</h2>
					</div>

					<div class="quize-body" data-title="Крок 4">
						<div class="row-2">
							<label class="radio checked">
								<input type="radio" name="step-4" value="20 000 - 25 000 грн" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>20 000 - 25 000 грн</p>
								</div>							
							</label>

							<label class="radio">
								<input type="radio" name="step-4" value="25 000 - 30 000 грн" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>25 000 - 30 000 грн</p>
								</div>								
							</label>

							<label class="radio checked">
								<input type="radio" name="step-4" value="35 000 - 40 000 грн" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>35 000 - 40 000 грн</p>
								</div>							
							</label>

							<label class="radio">
								<input type="radio" name="step-4" value="Більше 40 000 грн" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>Більше 40 000 грн</p>
								</div>								
							</label>
						</div>
					</div>

					<div class="quize-foot">
						<div class="progress">
							<div class="progress-info">Готово: <span>60%</span></div>
							<div class="progress-bar">
								<div class="track" style="width: 60%;"></div>
							</div>
						</div>

						<a href="#" class="quize-back">
							<svg viewBox="0 0 24 24"><path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z" stroke-width="0" fill-rule="nonzero"></path></svg>
						</a>
					</div>
				</div>

				<aside>
					<div class="person">
						<div class="inner">
							<div class="avatar">
								<img src="img/avatar.jpg" alt="">
								<span></span>
							</div>
							<div>
								<div class="name">Олександр</div>
								<div class="profession">Ваш персональний менеджер</div>
							</div>						
						</div>

						<div class="talk">
							<div class="inner">
								<p>Круті керівники, які завжди підтримують та допоможуть</p>
							</div>						
						</div>
					</div>

					<!-- <div class="bonus">
						<div class="wrap">
							<div class="bonus-item">
								<img src="img/gift.png" alt="">
								<p>2 додаткових заняття при <b>купівлі</b> абонементу</p>
								<span class="ic-lock"></span>						
							</div>

							<div class="bonus-item">
								<img src="img/gift.png" alt="">
								<p>2 консультації <b>за ціною однієї.</b> Приходьте з рідними!</p>
								<span class="ic-lock"></span>
							</div>
						</div>					
					</div> -->
				</aside>
			</div>
		</div>
		<!-- // STEP 4 -->

		<!-- STEP 6 -->
		<div class="quize-main step step-6 quize-animation">
			<div class="wrap">
				<div class="content">
					<div class="quize-head">
						<h2>Чи готові ви працювати більше 4-х годин на день?</h2>
					</div>

					<div class="quize-body" data-title="Крок 5">
						<div class="row-2">
							<label class="radio checked">
								<input type="radio" name="step-5" value="Так" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>Так</p>
								</div>							
							</label>

							<label class="radio">
								<input type="radio" name="step-5" value="Ні" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>Ні</p>
								</div>								
							</label>
						</div>
					</div>

					<div class="quize-foot">
						<div class="progress">
							<div class="progress-info">Готово: <span>80%</span></div>
							<div class="progress-bar">
								<div class="track" style="width: 80%;"></div>
							</div>
						</div>

						<a href="#" class="quize-back">
							<svg viewBox="0 0 24 24"><path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z" stroke-width="0" fill-rule="nonzero"></path></svg>
						</a>
					</div>
				</div>

				<aside>
					<div class="person">
						<div class="inner">
							<div class="avatar">
								<img src="img/avatar.jpg" alt="">
								<span></span>
							</div>
							<div>
								<div class="name">Олександр</div>
								<div class="profession">Ваш персональний менеджер</div>
							</div>						
						</div>

						<div class="talk">
							<div class="inner">
								<p>Кава, чай та PS4... Що може буди краще?</p>
							</div>						
						</div>
					</div>

					<!-- <div class="bonus">
						<div class="wrap">
							<div class="bonus-item">
								<img src="img/gift.png" alt="">
								<p>2 додаткових заняття при <b>купівлі</b> абонементу</p>
								<span class="ic-lock"></span>						
							</div>

							<div class="bonus-item">
								<img src="img/gift.png" alt="">
								<p>2 консультації <b>за ціною однієї.</b> Приходьте з рідними!</p>
								<span class="ic-lock"></span>
							</div>
						</div>					
					</div> -->
				</aside>
			</div>
		</div>
		<!-- // STEP 6 -->

		<!-- STEP 7 -->
		<div class="quize-main step step-7 quize-animation">
			<div class="wrap">
				<div class="content">
					<div class="quize-head">
						<h2>Чи готові ви працювати більше 4-х годин на день?</h2>
					</div>

					<div class="quize-body" data-title="Крок 6">
						<div class="row-2">
							<label class="radio checked">
								<input type="radio" name="step-6" value="Так" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>Так</p>
								</div>							
							</label>

							<label class="radio">
								<input type="radio" name="step-6" value="Ні" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>Ні</p>
								</div>								
							</label>
						</div>
					</div>

					<div class="quize-foot">
						<div class="progress">
							<div class="progress-info">Готово: <span>100%</span></div>
							<div class="progress-bar">
								<div class="track" style="width: 100%;"></div>
							</div>
						</div>

						<a href="#" class="quize-back">
							<svg viewBox="0 0 24 24"><path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z" stroke-width="0" fill-rule="nonzero"></path></svg>
						</a>
					</div>
				</div>

				<aside>
					<div class="person">
						<div class="inner">
							<div class="avatar">
								<img src="img/avatar.jpg" alt="">
								<span></span>
							</div>
							<div>
								<div class="name">Олександр</div>
								<div class="profession">Ваш персональний менеджер</div>
							</div>						
						</div>

						<div class="talk">
							<div class="inner">
								<p>Кава, чай та PS4... Що може буди краще?</p>
							</div>						
						</div>
					</div>
					
					<!-- <div class="bonus">
						<div class="wrap">
							<div class="bonus-item">
								<img src="img/gift.png" alt="">
								<p>2 додаткових заняття при <b>купівлі</b> абонементу</p>
								<span class="ic-lock"></span>						
							</div>

							<div class="bonus-item">
								<img src="img/gift.png" alt="">
								<p>2 консультації <b>за ціною однієї.</b> Приходьте з рідними!</p>
								<span class="ic-lock"></span>
							</div>
						</div>					
					</div> -->
				</aside>
			</div>
		</div>
		<!-- // STEP 7 -->

		<!-- FINISH -->
		<div class="quize-finish quize-animation">
			<div class="quize-main">
				<div class="wrap">
					<div class="content">
						<h3>Не втрачай свій шанс! Залишай свій контакт</h3>
						<p>Та ми зв'яжемось з вами протягом 10 хвилин</p>

						<!-- <div class="bonus">
							<p><b>ПОДАРУНКИ</b> ПІСЛЯ ПРОХОДЖЕННЯ ТЕСТУ:</p>
							<div class="wrap">
								<div class="bonus-item">
									<img src="img/gift.png" alt="">
									<p>2 додаткових заняття при <b>купівлі</b> абонементу</p>
									<span class="ic-lock"></span>						
								</div>

								<div class="bonus-item">
									<img src="img/gift.png" alt="">
									<p>2 консультації <b>за ціною однієї.</b> Приходьте з рідними!</p>
									<span class="ic-lock"></span>
								</div>
							</div>					
						</div> -->
					</div>

					<div class="form-style">
						<!-- ?utm_source=sourse&utm_medium=medium&utm_campaign=compaing&utm_term=term&utm_content=cotnent -->
						<?php if (isset($_GET['utm_source'])) : ?>
							<input type="hidden" name="utm_source" value="<?= $_GET['utm_source'] ?>">
						<?php endif; ?>

						<?php if (isset($_GET['utm_medium'])) : ?>
							<input type="hidden" name="utm_medium" value="<?= $_GET['utm_medium'] ?>">
						<?php endif; ?>

						<?php if (isset($_GET['utm_campaign'])) : ?>
							<input type="hidden" name="utm_campaign" value="<?= $_GET['utm_campaign'] ?>">
						<?php endif; ?>

						<?php if (isset($_GET['utm_term'])) : ?>
							<input type="hidden" name="utm_term" value="<?= $_GET['utm_term'] ?>">
						<?php endif; ?>

						<?php if (isset($_GET['utm_content'])) : ?>
							<input type="hidden" name="utm_content" value="<?= $_GET['utm_content'] ?>">
						<?php endif; ?>

						<label>
							<div class="label">ВВЕДІТЬ ІМ'Я</div>
							<div class="input name">
								<input type="text" name="name" required placeholder="Ім'я">
							</div>
						</label>

						<label>
							<div class="label">ВВЕДІТЬ EMAIL</div>
							<div class="input email">
								<input type="email" name="email" required placeholder="mail@example.com">
							</div>
						</label>

						<label>
							<div class="label">ВВЕДІТЬ ТЕЛЕФОН</div>
							<div class="input tel">
								<input type="tel" name="tel" required placeholder="Введіть телефон *">
							</div>
						</label>

						<button class="quize-btn"><span>Отримати</span></button>
					</div>
				</div>
			</div>
		</div>
		<!-- // FINISH -->
	</form>

	<!-- SUCCESS -->
	<div class="quize-success quize-animation <?= ($success) ? 'quize-fade' : ''; ?>">
		<h2>Дякуємо! 👏</h2>
		<p>Найближчим часом із вами зв'яжеться наш менеджер.</p>
		<!-- <div class="bonus">
			<p><b>ПОДАРУНКИ</b> ПІСЛЯ ПРОХОДЖЕННЯ ТЕСТУ:</p>
			<div class="wrap">
				<div class="bonus-item">
					<img src="img/gift.png" alt="">
					<p>2 додаткових заняття при <b>купівлі</b> абонементу</p>
					<span class="ic-lock"></span>						
				</div>

				<div class="bonus-item">
					<img src="img/gift.png" alt="">
					<p>2 консультації <b>за ціною однієї.</b> Приходьте з рідними!</p>
					<span class="ic-lock"></span>
				</div>
			</div>

			<a href="/">На головну</a>						
		</div> -->
	</div>
	<!-- SUCCESS -->
</div>

<script src="js/main.js"></script>
</body>
</html>