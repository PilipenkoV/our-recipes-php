<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Lobster&family=Marmelad&family=Roboto:ital,wght@0,400;0,700;1,400&family=Rubik+Vinyl&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="./css/null-style.css">
	<link rel="stylesheet" href="./css/style.css">
	<title>Наши рецепты - Содержание</title>
</head>

<body>
	<div class="wrapper-page">

		<!-- ! ========== HEADER ========== -->
		<?php
		include_once "./templates/header-template.php";
		?>

		<main class="main">
			<div class="container">
				<div class="main__wrapper">

					<h1>Список<br>наших лучших рецептов</h1>

					<!-- ! ==================== Перші страви / first-courses ==================== -->
					<div class="first-courses box">

						<div class="dishes">

							<h3>Первые блюда</h3>

							<div class="dishes__icon-box">
								<img src="./logo/icon-food-060.png" alt="first courses list">
							</div>

							<div class="dishes__list-box">
								<ul class="dishes__list">
									<li class="dishes__list-item">
										<a class="dishes__list-link" href="#">Борщ (самый вкусный)</a>
									</li>
									<li class="dishes__list-item">
										<a class="dishes__list-link" href="#">Окрошка</a>
									</li>
									<li class="dishes__list-item">
										<a class="dishes__list-link" href="#">Солянка мясная</a>
									</li>
									<li class="dishes__list-item">
										<a class="dishes__list-link" href="#">Суп гороховый</a>
									</li>
									<li class="dishes__list-item">
										<a class="dishes__list-link" href="#">Уха</a>
									</li>

								</ul>
							</div>
						</div>

					</div>

					<!-- ! ==================== Другі страви / second-courses ==================== -->
					<div class="second-courses box">

						<div class="dishes">

							<h3>Вторые блюда</h3>

							<div class="dishes__icon-box">
								<img src="./logo/icon-food-061.png" alt="baking list">
							</div>

							<div class="dishes__list-box">
								<ul class="dishes__list">
									<li class="dishes__list-item">
										<a class="dishes__list-link" href="#">Гречка по купечески</a>
									</li>
									<li class="dishes__list-item">
										<a class="dishes__list-link" href="#">Плов</a>
									</li>
									<li class="dishes__list-item">
										<a class="dishes__list-link" href="#">Макароны по флотски</a>
									</li>
								</ul>
							</div>
						</div>

					</div>

					<!-- ! ==================== М'ясні страви / meat-dishes ==================== -->
					<div class="meat-dishes box">

						<div class="dishes">

							<h3>Мясные блюда</h3>

							<div class="dishes__icon-box">
								<img src="./logo/icon-food-042.png" alt="baking list">
							</div>

							<div class="dishes__list-box">
								<ul class="dishes__list">
									<li class="dishes__list-item">
										<a class="dishes__list-link" href="#">Котлеты (фарш свинина-говядина)</a>
									</li>
									<li class="dishes__list-item">
										<a class="dishes__list-link" href="#">Котлеты (из свинной печени)</a>
									</li>
									<li class="dishes__list-item">
										<a class="dishes__list-link" href="#">Шашлык</a>
									</li>
								</ul>
							</div>
						</div>

					</div>

					<!-- ! ==================== Випічка / baking ==================== -->
					<div class="baking box">

						<div class="dishes">

							<h3>Выпечка</h3>

							<div class="dishes__icon-box">
								<img src="./logo/icon-food-031.png" alt="baking list">
							</div>

							<div class="dishes__list-box">
								<ul class="dishes__list">
									<li class="dishes__list-item">
										<a class="dishes__list-link" href="#">Булочки для хотдога</a>
									</li>
									<li class="dishes__list-item">
										<a class="dishes__list-link" href="#">Печенье на рассоле</a>
									</li>
									<li class="dishes__list-item">
										<a class="dishes__list-link" href="#">Пицца (рецепт 1)</a>
									</li>
									<li class="dishes__list-item">
										<a class="dishes__list-link" href="./recipes-baking/recipes-baking-bread.php">Хлеб</a>
									</li>
								</ul>
							</div>
						</div>

					</div>

					<!-- ! ==================== Консервація / canning ==================== -->
					<div class="canning box">

						<div class="dishes">

							<h3>Консервация</h3>

							<div class="dishes__icon-box">
								<img src="./logo/icon-food-091.png" alt="baking list">
							</div>

							<div class="dishes__list-box">
								<ul class="dishes__list">
									<li class="dishes__list-item">
										<a class="dishes__list-link" href="#">Икра кабачковая</a>
									</li>
									<li class="dishes__list-item">
										<a class="dishes__list-link" href="#">Огурцы малосольные</a>
									</li>
									<li class="dishes__list-item">
										<a class="dishes__list-link" href="#">Огурцы соленые (рецепт Сыроватской)</a>
									</li>
									<li class="dishes__list-item">
										<a class="dishes__list-link" href="#">Ткемали</a>
									</li>
								</ul>
							</div>
						</div>

					</div>

					<!-- ! ==================== ? / ? ==================== -->

				</div>
			</div>
		</main>

		<!-- ! ========== FOOTER ========== -->
		<?php
		include_once "./templates/footer-template.php";
		?>

	</div>
</body>

</html>