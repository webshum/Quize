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

	<title>Vac</title>
</head>
<body>

<div class="quize">
	<form action="amo/amo.php" method="POST">
		<!-- START -->
		<div class="quize-start step-1 quize-fade quize-animation">
			<div class="row">
				<div class="bg">
					<img src="img/bg.webp" alt="">
				</div>

				<div class="text">
					<!-- body -->
					<div class="text-body">
						<h1>Пройди тест и оставь заявку на работу!</h1>
						<p>Работа! (не курсы и не обучение)</p>
						<a href="#" class="quize-btn quize-next"><span>Пройти тест</span></a>
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
						<h2>Хочешь зарабатывать от 2000$ в месяц?</h2>
					</div>

					<div class="quize-body" data-title="Крок 1">
						<div class="row-2">
							<label class="radio checked">
								<input type="radio" name="step-1" value="Да" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>Да</p>
								</div>							
							</label>

							<label class="radio">
								<input type="radio" name="close" value="Нет" class="quize-close">
								<div class="inner">
									<div class="input"></div>
									<p>Нет</p>
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

				<!-- <aside>
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
				</aside> -->
			</div>
		</div>
		<!-- // STEP 2 -->

		<!-- STEP 3 -->
		<div class="quize-main step step-3 quize-animation">
			<div class="wrap">
				<div class="content">
					<div class="quize-head">
						<h2>Хочешь переехать в Киев?(Переезд и проживание оплачивается)</h2>
					</div>

					<div class="quize-body" data-title="Крок 2">
						<div class="row-2">
							<label class="radio checked">
								<input type="radio" name="step-2" value="Да" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>Да</p>
								</div>							
							</label>

							<label class="radio">
								<input type="radio" name="close" value="Нет" class="quize-close">
								<div class="inner">
									<div class="input"></div>
									<p>Нет</p>
								</div>								
							</label>

							<label class="radio">
								<input type="radio" name="close" value="Хочу жить с мамой" class="quize-close">
								<div class="inner">
									<div class="input"></div>
									<p>Хочу жить с мамой</p>
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

				<!-- <aside>
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
				</aside> -->
			</div>
		</div>
		<!-- // STEP 3 -->

		<!-- STEP 4 -->
		<div class="quize-main step step-4 quize-animation">
			<div class="wrap">
				<div class="content">
					<div class="quize-head">
						<h2>Сколько полных лет?</h2>
					</div>

					<div class="quize-body" data-title="Крок 3">
						<div class="row-2">
							<label class="radio checked">
								<input type="radio" name="step-3" value="18" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>18</p>
								</div>							
							</label>

							<label class="radio">
								<input type="radio" name="step-3" value="20" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>20</p>
								</div>								
							</label>

							<label class="radio checked">
								<input type="radio" name="step-3" value="22" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>22</p>
								</div>							
							</label>

							<label class="radio">
								<input type="radio" name="step-3" value="19" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>19</p>
								</div>								
							</label>

							<label class="radio">
								<input type="radio" name="step-3" value="21" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>21</p>
								</div>								
							</label>

							<label class="radio">
								<input type="radio" name="step-3" value="23" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>23</p>
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

				<!-- <aside>
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
				</aside> -->
			</div>
		</div>
		<!-- // STEP 4 -->

		<!-- STEP 5 -->
		<div class="quize-main step step-5 checkbox-list quize-animation">
			<div class="wrap">
				<div class="content">
					<div class="quize-head">
						<h2>Какой есть опыт работы?</h2>
					</div>

					<div class="quize-body" data-title="Крок 4">
						<div class="row-2">
							<label class="checkbox checked">
								<input type="checkbox" name="step-4" value="Колл Центр" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>Колл Центр</p>
								</div>							
							</label>

							<label class="checkbox">
								<input type="checkbox" name="step-4" value="Форекс" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>Форекс</p>
								</div>							
							</label>

							<label class="checkbox">
								<input type="checkbox" name="step-4" value="Брачка" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>Брачка</p>
								</div>							
							</label>

							<label class="checkbox">
								<input type="checkbox" name="step-4" value="Банк" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>Банк</p>
								</div>							
							</label>

							<label class="checkbox">
								<input type="checkbox" name="step-4" value="Сбер" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>Сбер</p>
								</div>							
							</label>

							<label class="checkbox">
								<input type="checkbox" name="step-4" value="Нету опыта" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>Нету опыта</p>
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

						<a href="#" class="quize-forward">
							<svg viewBox="0 0 24 24"><path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z" stroke-width="0" fill-rule="nonzero"></path></svg>
						</a>
					</div>
				</div>

				<!-- <aside>
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
				</aside> -->
			</div>
		</div>
		<!-- // STEP 5 -->

		<!-- STEP 6 -->
		<div class="quize-main step step-6 quize-animation">
			<div class="wrap">
				<div class="content">
					<div class="quize-head">
						<h2>Холост или в отношениях?</h2>
					</div>

					<div class="quize-body" data-title="Крок 5">
						<div class="row-2">
							<label class="radio-image checked">
								<img src="img/holost.webp" alt="">
								<input type="radio" name="step-5" value="Холост" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>Холост</p>
								</div>							
							</label>

							<label class="radio-image">
								<img src="img/merige.webp" alt="">
								<input type="radio" name="step-5" value="В отношениях" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>В отношениях</p>
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

				<!-- <aside>
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
				</aside> -->
			</div>
		</div>
		<!-- // STEP 6 -->

		<!-- STEP 7 -->
		<div class="quize-main step step-7 checkbox-list quize-animation">
			<div class="wrap">
				<div class="content">
					<div class="quize-head">
						<h2>Вреденые привычки?</h2>
					</div>

					<div class="quize-body" data-title="Крок 6">
						<div class="row-2">
							<label class="checkbox checked">
								<input type="checkbox" name="step-6" value="Сигареты" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>Сигареты</p>
								</div>							
							</label>

							<label class="checkbox">
								<input type="checkbox" name="close" value="Наркотики" class="quize-close">
								<div class="inner">
									<div class="input"></div>
									<p>Наркотики</p>
								</div>							
							</label>

							<label class="checkbox">
								<input type="checkbox" name="step-6" value="Нету" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>Нету</p>
								</div>							
							</label>

							<label class="checkbox">
								<input type="checkbox" name="close" value="Мариванна" class="quize-close">
								<div class="inner">
									<div class="input"></div>
									<p>Мариванна</p>
								</div>							
							</label>

							<label class="checkbox">
								<input type="checkbox" name="step-6" value="Алкоголь" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>Алкоголь</p>
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

						<a href="#" class="quize-forward">
							<svg viewBox="0 0 24 24"><path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z" stroke-width="0" fill-rule="nonzero"></path></svg>
						</a>
					</div>
				</div>

				<!-- <aside>
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
				</aside> -->
			</div>
		</div>
		<!-- // STEP 7 -->

		<!-- STEP 8 -->
		<div class="quize-main step step-8 quize-animation">
			<div class="wrap">
				<div class="content">
					<div class="quize-head">
						<h2>Любишь общатся с людьми?</h2>
					</div>

					<div class="quize-body" data-title="Крок 7">
						<div class="row-2">
							<label class="radio checked">
								<input type="radio" name="step-7" value="Да" class="quize-next">
								<div class="inner">
									<div class="input"></div>
									<p>Да</p>
								</div>							
							</label>

							<label class="radio">
								<input type="radio" name="close" value="Нет" class="quize-close">
								<div class="inner">
									<div class="input"></div>
									<p>Нет</p>
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

				<!-- <aside>
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
				</aside> -->
			</div>
		</div>
		<!-- // STEP 8 -->

		<!-- FINISH -->
		<div class="quize-finish quize-animation">
			<div class="quize-main">
				<div class="wrap">
					<div class="content">
						<h3>Не втрачай свій шанс! Залишай свій контакт</h3>
						<p>Та ми зв'яжемось з вами протягом 10 хвилин</p>
					</div>

					<div action="#" class="form-style">
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
							<div class="label">ВВЕДІТЬ ТЕЛЕФОН</div>
							<div class="input tel">
								<input type="tel" name="tel" required placeholder="Введіть телефон *">
							</div>
						</label>

						<button class="quize-btn"><span>Відправити</span></button>
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
		<a href="/">На головну</a>
	</div>
	<!-- SUCCESS -->

	<!-- SUCCESS CLOSE -->
	<div class="quize-successclose quize-animation">
		<div class="wrap">
			<h2>Ты не подходишь</h2>
			<p>Удачи тебе в поиске работы! Ты нам не интересен!</p>
			<a href="/">На главную</a>
		</div>
	</div>
	<!-- // SUCCESS CLOSE -->
</div>

<script src="js/main.js"></script>
</body>
</html>