<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="fonts/Roboto/roboto.css">
	<title>ProjectForm</title>
	
</head>

<body>
	<div class="main">
		<div class='title'>Мой кабинет</div>
		<div class="container">
			<div class="sait_bar">
				<div class="user_short">
					<div class="ellipse"><img src="accets/Icon.svg" alt=""></div>
					<div class="user_description">
						<span class="user_name">Михаил Мингалёв</span>
						<span class="user_type">Покупатель</span>
					</div>
				</div>
				<ul class="sait_bar_menu">
					<li class="sait_bar_menu_active_button">Мой профиль</li>
					<li>Statut Club</li>
					<li>Заказы</li>
					<li>Избранные товары</li>
					<li>Отзывы о товарах</li>
					<li>Выход</li>
				</ul>
			</div>

			<div class="form">
				<div class="form_title">Мой профиль</div>
				<div class="form_menu">
					<div class="nav_element form_menu_active_button">Личные данные</div>
					<div class="nav_element">Адреса доставки</div>
					<div class="nav_element">Пароль</div>
				</div>

				<form class="_form">
					<div class="container_flex_column">
						<label for="email">E-mail <span>*</span></label>
						<div class="input_check">
							<input maxlength="100" value="mingalyovuxcheck@gmail.com" class="full_input _input-val _email" type="email" required
								name="email">
							<img class="checker" src="accets/checker.svg">
						</div>
					</div>

					<div class="container_flex">
						<div class="container_flex_column form_short">
							<label for="phone">Номер телефона <span>*</span></label>
							<div class="input_check">
								<input maxlength="14" value="+79108322628" class="full_input _input-val" type="text" required name="phone">
								<img class="checker" src="accets/checker.svg">
							</div>
						</div>

						<div class="container_flex_column form_short">
							<label for="additional_phone">Дополнительный номер</label>
							<div class="input_check">
								<input maxlength="10" value="" class="full_input _input-val" type="text" name="additional_phone">
								<img class="checker" src="">
							</div>
						</div>
					</div>

					<div class="container_flex_column">
						<label for="surname">Фамилия <span>*</span></label>
						<div class="input_check">
							<input maxlength="50" value="Мингалёв" class="full_input _input-val" type="text" required name="surname">
							<img class="checker" src="accets/checker.svg">
						</div>
					</div>

					<div class="container_flex_column">
						<label for="name">Имя <span>*</span></label>
						<div class="input_check">
							<input maxlength="50" value="Михаил" class="full_input _input-val" type="text" required name="name">
							<img class="checker" src="accets/checker.svg">
						</div>
					</div>

					<div class="container_flex_column">
						<label for="patronymic">Отчество</label>
						<div class="input_check">
							<input maxlength="50" value="Михайлович" class="full_input _input-val" type="text" name="patronymic">
							<img class="checker" src="accets/checker.svg">
						</div>
					</div>

					<div class="container_flex_column">
						<label for="birthday">Дата рождения</label>
						<div class="flex_grow">
							<div class="select_birthday select_day">
								<span class="day">1</span>
								<img src="accets/select.svg" alt="">
								<div class="selected selected_day hiddend">
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</div>
							</div>
							<div class="select_birthday select_month grow">
								<span class="month">Декабрь</span>
								<img src="accets/select.svg" alt="">
								<div class="selected selected_month hiddend">
									<option>Декабрь</option>
									<option>Январь</option>
									<option>Февраль</option>
								</div>
							</div>
							<div class="select_birthday select_year">
								<span class="year">1993</span>
								<img src="accets/select.svg" alt="">
								<div class="selected selected_year hiddend">
									<option>1994</option>
									<option>1995</option>
									<option>1996</option>
								</div>
							</div>
						</div>
					</div>
					<input value="01/Январь/2022" class="input_birthday _input-val" type="hidden" name="birthday">
					<div class="container_flex_column">
						<label for="sex">Пол</label>
						<div class="flex_grow">
							<div class="container_sex man container_sex_active">
								<span class="_sex">Мужской</span>
								<img class="man_sex_img" src="accets/checker.svg" alt="">
							</div>

							<div class="container_sex woman">
								<span class="_sex ">Женский</span>
								<img class="woman_sex_img" src="accets/checker.svg" alt="">
							</div>
						</div>
						<input class="input_sex _input-val" type="hidden" name="sex" value="man">
					</div>

					<button class="form_submit_btn" type="submit" onclick="validate.send(this, event)">
						Сохранить изменения
					</button>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="main.js"></script>
	<script type="text/javascript" src="validator.js"></script>
</body>

</html>