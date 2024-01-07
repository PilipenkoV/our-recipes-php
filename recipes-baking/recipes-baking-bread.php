<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Lobster&family=Marmelad&family=Roboto:ital,wght@0,400;0,700;1,400&family=Rubik+Vinyl&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="../css/null-style.css">
	<link rel="stylesheet" href="../css/swiper-bundle.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<title>Хлеб</title>
</head>

<body>
	<div class="wrapper-page">

		<!-- ! ========== HEADER ========== -->
		<?php
		include_once "../templates/header-template.php";
		?>

		<main class="main">
			<div class="container">
				<div class="main__wrapper">

					<!-- ! ========== BACK-TO-CONTENT ========== -->
					<?php
					include "../templates/back-to-content-template.php";
					?>

					<h2>Хлеб</h2>

					<section class="section photo-and-ingredients">

						<div class="photo-recipe general-block-styles">
							<div class="box-icon">
								<img src="../logo/icon-box-010.png" alt="logo icon-box">
							</div>

							<div class="photo-recipe-gallery">

								<div class="swiper">
									<!-- Additional required wrapper -->
									<div class="swiper-wrapper">
										<!-- Slides -->
										<div class="swiper-slide">
											<img src="./recipes-baking-foto/bread-01.png" alt="foto bread 1">
										</div>
										<div class="swiper-slide">
											<img src="./recipes-baking-foto/bread-02.png" alt="foto bread 2">
										</div>
										<div class="swiper-slide">
											<img src="./recipes-baking-foto/bread-03.png" alt="foto bread 3">
										</div>

									</div>
								</div>

								<div class="button-pagination-wrapper">
									<!-- navigation buttons prev -->
									<!-- <div class="swiper-button-prev">назад</div> -->
									<div class="my-button-prev">
										<img src="../logo/arrow-prev.png" alt="arrow prev">
									</div>
									<!-- pagination -->
									<div class="my-swiper-pagination"></div>
									<!-- navigation buttons next -->
									<!-- <div class="swiper-button-next">вперед</div> -->
									<div class="my-button-next">
										<img src="../logo/arrow-next.png" alt="arrow next">
									</div>
								</div>

							</div>
						</div>

						<div class="ingredients general-block-styles">

							<div class="box-icon">
								<img src="../logo/icon-box-020.png" alt="logo icon-box">
							</div>

							<h4>Ингридиенты:</h4>
							<!-- ! ==================== таблица ингридиентов ==================== -->
							<table class="table">
								<tr>
									<td>Сыворотка (или вода)</td>
									<td>500 мл.</td>
								</tr>
								<tr>
									<td>Дрожжи (сухие)</td>
									<td>10 г.</td>
								</tr>
								<tr>
									<td>Сахар</td>
									<td>2 ст.л.</td>
								</tr>
								<tr>
									<td>Соль</td>
									<td>1 ч.л.</td>
								</tr>
								<tr>
									<td>Мука</td>
									<td>960 г.</td>
								</tr>
								<tr>
									<td>Растительное масло</td>
									<td>100 мл.</td>
								</tr>
							</table>
						</div>

					</section>

					<section class="section description-and-video">
						<div class="description general-block-styles">

							<div class="box-icon">
								<img src="../logo/icon-box-030.png" alt="logo icon-box">
							</div>

							<h4>Описание:</h4>
							<!-- ! ==================== описание приготовления ==================== -->
							<ul class="description__list">
								<li class="description__item">
									Подогреть воду, примерно, до 30…40°С.
								</li>
								<li class="description__item">
									Добавить сахар, размешать до полного растворения.
								</li>
								<li class="description__item">
									Высыпать дрожжи в воду, оставить, примерно, на 10…15 мин.
								</li>
								<li class="description__item">
									Вылить воду с дрожжами в муку, начать замешивать.
								</li>
								<li class="description__item">
									Добавить постное масло, продолжить вымешивать, примерно, 5…10 мин.
								</li>
								<li class="description__item">
									Хорошо вымешанное тесто оставить в теплом месте на 45…60 мин.
								</li>
								<li class="description__item">
									Подошедшее тесто разложить по формам для выпекания и оставить в теплом месте на
									40…60 мин.
								</li>
								<li class="description__item">
									В разогретую духовку до 180…190°С поставить хлеб и емкость с водой.
								</li>
								<li class="description__item">
									Выпекать 50 мин.
								</li>
								<li class="description__item">
									Достать из духовки, накрыть кухонным полотенцем, оставить остывать 2…3 часа.
								</li>
							</ul>
						</div>

						<div class="video general-block-styles">

							<div class="box-icon">
								<img src="../logo/icon-box-040.png" alt="logo icon-box">
							</div>

							<!-- ! ==================== видео приготовления ==================== -->
							<div class="video-wrapper">
								<img src="../logo/iframe-background-default.png" alt="background default">
								<!-- <iframe></iframe> -->
							</div>

						</div>
					</section>

					<section class="section notation">
						<div class="notation-wrapper general-block-styles">

							<div class="box-icon">
								<img src="../logo/icon-box-050.png" alt="logo icon-box">
							</div>

							<h4>Заметки</h4>

							<div class="comment">
								<table class="table">
									<tr>
										<td>...</td>
									</tr>
									<tr>
										<td>...</td>
									</tr>
									<tr>
										<td>...</td>
									</tr>
									<tr>
										<td>...</td>
									</tr>
									<tr>
										<td>...</td>
									</tr>
								</table>
							</div>
						</div>
					</section>

					<!-- ! ========== BACK-TO-CONTENT ========== -->
					<?php
					include "../templates/back-to-content-template.php";
					?>

					<!-- END main__wrapper -->
				</div>
			</div>
		</main>

		<!-- ! ========== FOOTER ========== -->
		<?php
		include_once "../templates/footer-template.php";
		?>

	</div>

	<script src="../js/swiper-bundle.min.js"></script>
	<script src="../js/main.js"></script>
</body>

</html>