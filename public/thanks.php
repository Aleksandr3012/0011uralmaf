<!DOCTYPE html>
<div class="d-none">
	<?php
		if(!empty($_POST)){
				ini_set( 'display_errors', 1 );
				require __DIR__ . '/vendor/autoload.php';
				// $to='trifectahealthnyc@gmail.com';
				$mail = new PHPMailer(true);
				$mail->IsMail();
				$mail->IsHTML(true);
				$mail->Priority = '1';
				$mail->Encoding = 'base64';
				$mail->CharSet = 'utf-8';
	
		///от кого письмо
				$mail->setFrom('info@info.com');
	
				$mail->addAddress('wol1414@gmail.com');
				// $mail->addAddress('spike.mgn@gmail.com');
				// $mail->addAddress('grouplend@mail.ru');
				// $mail->addAddress('rocketsstat@yandex.ru');
				// $mail->addAddress('455203@mail.ru');
	
	
		//Субъект
				$mail->Subject = 'Заявка с сайта groupv.ru (Верстаки)';
	
				$time = date('d.m.Y в H:i');
				$html = '
	
		<table style="width: 100%;">';
				if (!empty($_POST['order'])) {
						$html .= ' <tr style="background-color: #f8f8f8;">  <td style="padding: 10px; border: #e9e9e9 1px solid;">Вид формы:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['order'] . '</b></td></tr>';
				}
	
		 
		 
				if (!empty($_POST['price'])) {
						$html .= ' <tr style="background-color: #f8f8f8;">  <td style="padding: 10px; border: #e9e9e9 1px solid;">Стоимость:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['price'] . '</b></td></tr>';
				}
	
				
		 
				if (!empty($_POST['color'])) {
						$html .= ' <tr style="background-color: #f8f8f8;">  <td style="padding: 10px; border: #e9e9e9 1px solid;">Цвет:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['color'] . '</b></td></tr>';
				}
	
				if (!empty($_POST['name'])) {
						$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;">Имя:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['name'] . '</b></td></tr>';
				}
	
				if (!empty($_POST['tel'])) {
						$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Телефон:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['tel'] . '</b></td></tr>';
				}
				
				if (!empty($_POST['email'])) {
						$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Email:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['email'] . '</b></td></tr>';
				}
				
				if (!empty($_POST['whatsapp'])) {
						$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Whatsapp:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['whatsapp'] . '</b></td></tr>';
				}
				
				if (!empty($_POST['viber'])) {
						$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Viber:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['viber'] . '</b></td></tr>';
				}
				if (!empty($_POST['time'])) {
						$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Время для звонка:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['time'] . '</b></td></tr>';
				}
	
	
				if (!empty($_POST['choose-type'])) {
						$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Тип шлакоблок:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['choose-type'] . '</b></td></tr>';
				}
	
				if (!empty($_POST['result'])) {
						$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Объем:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['result'] . '</b></td></tr>';
				}
				if (!empty($_POST['comment'])) {
						$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Текст сообщения:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['comment'] . '</b></td></tr>';
				}
	
	
				if (!empty($_POST['type-company'])) {
						$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Вид компании: </td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . implode(", ",$_POST['type-company']) .  '</b></td>';
				}
	
				if (!empty($_POST['utm_source'])) {
						$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;">utm_source:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['utm_source'] . '</b></td>';
				}
	
				if (!empty($_POST['utm_term'])) {
						$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> utm_term:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['utm_term'] . '</b></td>';
				}
				
				if (!empty($_POST['utm_medium'])) {
						$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> utm_medium:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['utm_medium'] . '</b></td>';
				}
				if (!empty($_POST['utm_campaign'])) {
						$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> utm_campaign:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['utm_campaign'] . '</b></td>';
				}
	
				// if (!empty($_POST['tech'])) {
				//     $html .= ' <tr style="background-color: #f8f8f8;">  <td style="padding: 10px; border: #e9e9e9 1px solid;"> Техника:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . implode(", ",$_POST['tech']) . '</b></td></tr>';
				// }
	
	
				$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;">  Время отправки:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $time . '</b></td>
					<tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> IP:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_SERVER['REMOTE_ADDR'] . '</b></td> 
		</table>
		';
				$mail->Body = $html;
	
				$uploaddir = __DIR__ . '/upload/';
	
				// if ($_FILES['file']['tmp_name']) {
				// 		$mail->addAttachment($_FILES['file']['tmp_name'],$_FILES['file']['name']);
				// }
	
		// if ($_FILES['file2']['tmp_name']) {
		//  $mail->addAttachment($_FILES['file2']['tmp_name'],$_FILES['file2']['name']);
		// }
	
		//send the message, check for errors
			 
				if (!$mail->send()) {
		//        echo "Mailer Error: " . $mail->ErrorInfo;
				} else {
		//        echo "Message sent!";
				}
				if (isset($uploadfile))unlink($uploadfile);
				if (isset($uploadfile2))unlink($uploadfile2);
	 
		}
		?>
</div>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Урал Маф</title>
		<meta name="description" content="о чем страница">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=no">
		<link rel="shortcut icon" type="image/png" href="img/favicon/favicon.png"><meta name="format-detection" content="telephone=no">
		<link rel="image_src" href="http://genrif.ru/assets/i/soc-logo.png">
		<meta property="og:type" content="website">
		<meta property="og:site_name" content="content">
		<meta property="og:title" content="content">
		<meta property="og:description" content="content">
		<meta property="og:url" content="content">
		<meta property="og:locale" content="ru_RU">
		<meta property="og:image" content="path/to/image.jpg">
		<meta property="og:image:width" content="968">
		<meta property="og:image:height" content="504">
		<!-- Custom Browsers Color-->
		<meta name="theme-color" content="#3361d8">
		<link rel="stylesheet" href="libs/slick-carousel/slick/slick.css"/>
		<link rel="stylesheet" href="libs/@fancyapps/fancybox/jquery.fancybox.min.css"/>
		<link rel="stylesheet" href="css/main.min.css"/>
	</head>
	<body class="innerPage"><!--[if lt IE 11]><p   class="browsehappy container">К сожалению, вы используете устаревший браузер. Пожалуйста, <a href="http://browsehappy.com/" target="_blank">обновите ваш браузер</a>, чтобы улучшить производительность, качество отображаемого материала и повысить безопасность.</p><![endif]-->
		<div class="main-wrapper">
			<!-- start header-->
			<div class="header" id="header">
				<div class="container">
					<!-- picture-->
					<picture class="lazy picture-bg"> 
						<source srcset="#" data-srcset="img/@2x/header-bg.png" type="image/png" media="(min-width:576px)"/>
						<source srcset="#" data-srcset="img/@1x/header-bg.png" type="image/png"/><img class="object-fit-js" src="#" data-src="img/@2x/header-bg.png" alt=""/>
					</picture>
					<!-- /picture-->
					<!-- start topLine-->
					<div class="topLine" id="topLine">
						<div class="container">
							<div class="row justify-content-between">
								<div class="col-auto"><a class="topLine__logo" href="#">
									<svg class="icon icon-logo ">
										<use xlink:href="img/svg/sprite.svg#logo"></use>
									</svg>
									<div class="topLine__brand">Урал Маф
									</div>
									<div class="topLine__descr d-none d-lg-block">Малые архитектурные формы: производим в&nbsp;Магнитогорске, реализуем по&nbsp;России и&nbsp;СНГ
									</div></a>
								</div>
								<div class="col order-lg-last text-right">
									<div class="topLine__telephone">
										<div class="topLine__messengers d-none d-sm-flex"><a class="topLine__whatsapp" href="https://wa.me/73519454515">
											<svg class="icon icon-whatsapp ">
												<use xlink:href="img/svg/sprite.svg#whatsapp"></use>
											</svg></a><a class="topLine__viber" href="viber://add?number=73519454515" data-desktop="viber://chat?number=73519454515">
											<svg class="icon icon-viber ">
												<use xlink:href="img/svg/sprite.svg#viber"></use>
											</svg></a>
										</div><a class="topLine__tel" href="tel:+73519454515">7 (3519) 45-45-15</a>
									</div><a class="topLine__call link-modal" href="#modal-call">Заказать  звонок <span class="d-none d-lg-inline">менеджера</span></a>
								</div>
								<div class="col-lg d-flex">
									<div class="topLine__imgWrap d-none d-lg-block"><img class="res-i lazy" src="#" data-src="img/@2x/semiprecious-stones.png" alt=""/>
									</div>
									<div class="topLine__text"><a class="topLine__concrete link-modal" href="#modalConcrete">Что за&nbsp;бетон с&nbsp;полудрагоценными камнями?</a>
									</div>
								</div>
								<div class="topLine__col col-lg-auto order-lg-3">
									<div class="topLine__about"><a class="link-modal" href="#modalAbout">О компании</a>
									</div>
									<div class="topLine__delivery"><a class="link-modal" href="#modalDelivery">Доставка</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end topLine-->
				</div>
			</div>
			<!-- end header-->
			<div class="container"><a class="backToMain" href="#">Вернуться на сайт </a></div>
			<!-- start sThanks-->
			<section class="sThanks section" id="sThanks">
				<div class="container">
					<div class="section-title text-center">
						<svg class="icon icon-verificado ">
							<use xlink:href="img/svg/sprite.svg#verificado"></use>
						</svg>
						<h1>Спасибо, мы&nbsp;приняли вашу заявку!</h1><?php if(isset($_POST["catalog"])) { ?>
						<h3>Мы&nbsp;уже отправили ссылку на&nbsp;каталог по&nbsp;указанному&nbsp;адресу.</h3>
						<h4>Если вы&nbsp;не&nbsp;нашли&nbsp;то, что нужно, расскажите нам о&nbsp;задаче,&nbsp;мы рассчитаем стоимость изготовления изделий&nbsp;и подготовим коммерческое предложение.</h4><?php } else{	  ?>
						<h3>Менеджер компании перезвонит вам в&nbsp;течение рабочего дня и&nbsp;ответит на&nbsp;ваши вопросы.</h3><?php	} ?>
						<h4>Удачного дня!</h4>
					</div>
				</div>
			</section>
			<footer class="footer block-with-lazy">
				<div class="container">
					<div class="row">
						<div class="mobileOrder-1 col-md-4"><a class="footer__logo" href="#">
							<svg class="icon icon-logo ">
								<use xlink:href="img/svg/sprite.svg#logo"></use>
							</svg>
							<div class="footer__brand">Урал Маф
							</div>
							<div class="footer__descr d-none d-md-block">Малые архитектурные формы: производим в&nbsp;Магнитогорске, реализуем по&nbsp;России и&nbsp;СНГ
							</div></a>
						</div>
						<div class="mobileOrder-2 col-md-2 col-xl">
							<ul class="footer__map">
								<li><a href="#">О компании</a></li>
								<li><a href="#">Доставка</a></li>
								<li><a class="borderBottom" href="#">Получить каталог</a></li>
							</ul>
						</div>
						<div class="mobileOrder-4 col-md">
							<div class="footer__workWrap">
								<div class="footer__workTime">Звоните
								</div>
								<p>пн-пт: с 7:00 до 19:00 по МСК, выходной:&nbsp;сб-вс</p>
							</div>
						</div>
						<div class="mobileOrder-3 col-md-3 text-right">
							<div class="footer__telephone">
								<div class="footer__messengers d-none d-lg-flex"><a class="footer__whatsapp" href="https://wa.me/73519454515">
									<svg class="icon icon-whatsapp ">
										<use xlink:href="img/svg/sprite.svg#whatsapp"></use>
									</svg></a><a class="footer__viber" href="viber://add?number=73519454515" data-desktop="viber://chat?number=73519454515">
									<svg class="icon icon-viber ">
										<use xlink:href="img/svg/sprite.svg#viber"></use>
									</svg></a>
								</div><a class="footer__tel" href="tel:+73519454515">7 (3519) 45-45-15</a>
							</div><a class="footer__call link-modal" href="#">Заказать звонок менеджера</a>
						</div>
						<div class="mobileOrder-5 col-md-4">
							<div class="footer__adres">Юридический адерс и реквизиты
							</div>
							<p>455026, Челябинская область, г.&nbsp;Магнитогорск, ул. Клары Цеткин,&nbsp;д.12/1 ИНН&nbsp;XXXXXXXXXX ОГРН&nbsp;XXXXXXXXXXXXXX</p>
						</div>
						<div class="col-md-2"></div>
						<div class="mobileOrder-6 col-md-3">
							<ul class="footer__polite"> 
								<li><a href="">Политика конфиденциальности</a></li>
								<li><a href="">Пользовательское соглашение</a></li>
								<li><a href="">Карта сайта</a></li>
							</ul>
						</div>
						<div class="mobileOrder-7 col-md-3">
							<div class="footer__develop">Разработка и продвижение сайта: <a href="#">Веб-студия «Барс»</a>
							</div><a class="develop-link" href="#" target="_blank"><span class="develop-link__panel"><img class="img-1" src="img/svg/hand.svg" alt=""/><img class="img-2" src="img/svg/logo-text.svg" alt=""/></span></a>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<div class="d-none">
			<div class="form-wrap modal-win modal-form" id="modal-call">
				<form>
					<input type="hidden" name="example-input-field"/>
					<input class="order" type="hidden" name="order" value="Заявка  с сайта"/>
					<input class="utm_source" type="hidden" name="utm_source"/>
					<input class="utm_term" type="hidden" name="utm_term"/>
					<input class="utm_medium" type="hidden" name="utm_medium"/>
					<input class="utm_campaign" type="hidden" name="utm_campaign"/>
					<div class="text-center">
						<div class="form-wrap__title h2 ttu">Укажите контактные данные для звонка
						</div>
						<div class="h5">Менеджер компании позвонит вам в&nbsp;течение рабочего дня: мы&nbsp;работаем: пн-пт с&nbsp;7:00 до&nbsp;19:00 (Мск)</div>
					</div>
					<div class="form-wrap__input-wrap form-group"><input class="form-wrap__input form-control" type="text" placeholder="Как к вам обращаться?" name="text" required="required"/> 
					</div>
					<!-- +e.input-wrap-->
					<div class="form-wrap__input-wrap form-group"><input class="form-wrap__input form-control" type="tel" placeholder="Введите телефон" name="tel" required="required"/>
					</div>
					<!-- +e.input-wrap--><input class="form-wrap__btn btn" type="submit" value="Заказать звонок"/>
					<div class="form-wrap__polite">
						<label class="custom-input"><input class="custom-input__input" type="checkbox" name="checkbox" checked="checked"/><span class="custom-input__lab"></span><span class="custom-input__text"></span>
						</label>
						<div class="form-wrap__text">Нажимая на&nbsp;кнопку, вы&nbsp;даете согласие<br>на&nbsp;обработку своих персональных данных и&nbsp;соглашаетесь&nbsp;с&nbsp;<a href="privacy-policy.pdf" target="_blank">Политикой конфиденциальности</a>
						</div>
					</div>
				</form>
			</div>
			<div class="modalAbout" id="modalAbout">
				<div class="modalAbout__headBlock">
					<div class="container">
						<h2>Яшму и хризолит превращаем <strong>в&nbsp;вазоны&nbsp;и&nbsp;скамейки</strong></h2>
						<!-- picture-->
						<picture class="lazy picture-bg"> 
							<source srcset="#" data-srcset="img/@2x/bgModal.png" type="image/png" media="(min-width:576px)"/>
							<source srcset="#" data-srcset="img/@1x/bgModal.png" type="image/png"/><img class="object-fit-js" src="#" data-src="img/@2x/bgModal.png" alt=""/>
						</picture>
						<!-- /picture-->
						<div class="row">
							<div class="col-lg-5">
								<div class="modalAbout__imgWrap d-none d-lg-block"><img class="modalAbout__founder" src="img/@2x/founder.png" alt="#" title=""/>
								</div>
								<div class="modalAbout__founderSm d-lg-none"><img class="modalAbout__founderImg" src="img/@2x/founder-sm.png" alt="#" title=""/>
									<div class="modalAbout__nameWrap">
										<div class="modalAbout__nameSm">Михаил Геннадьевич
										</div>
										<div class="modalAbout__positionSm">Сооснователь компании ООО&nbsp;«УралМаф»
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg">
								<p>Здравствуйте. Меня зовут Михаил Паламарчук.<br>Я&nbsp;сооснователь ООО &laquo;УралМаф&raquo;.</p>
								<p>Компания основана в&nbsp;2008&nbsp;году. Кроме малых архитектурных форм мы&nbsp;производим тротуарную плитку, бордюры и&nbsp;фасадную термопанель. За&nbsp;эти годы научились минимизировать издержки, снижать себестоимость без потери качества и&nbsp;устанавливать комфортную цену для покупателя.</p>
								<p>Мы&nbsp;работаем напрямую с&nbsp;поставщиками крошки полудрагоценных камней с&nbsp;Южного Урала и&nbsp;Башкирии&nbsp;&mdash; это позволяет производить самые разные фактуры изделий.</p>
							</div>
						</div><img class="modalAbout__clouds lazy" src="#" data-src="img/@2x/clouds.png" alt="" role="presentation"/>
					</div>
				</div>
				<div class="modalAbout__body">
					<div class="container">
						<div class="form-wrap">
							<form>
								<input type="hidden" name="example-input-field"/>
								<input class="order" type="hidden" name="order" value="Заявка  с сайта"/>
								<input class="utm_source" type="hidden" name="utm_source"/>
								<input class="utm_term" type="hidden" name="utm_term"/>
								<input class="utm_medium" type="hidden" name="utm_medium"/>
								<input class="utm_campaign" type="hidden" name="utm_campaign"/>
								<div class="h5">Вы&nbsp;можете обсудить с&nbsp;нами <strong>любой дизайн вазонов, урн, скамеек, ограничителей или другой садово-парковой мебели из&nbsp;бетона.</strong></div>
								<div class="h5"><strong>Давайте обсудим ваш заказ прямо сейчас.</strong> <br> Оставьте свой номер, мы&nbsp;свяжемся с&nbsp;вами, ответим на&nbsp;любые вопросы и&nbsp;расскажем больше о&nbsp;наших возможностях, назовем сроки и&nbsp;цену исполнения вашего заказа.</div>
								<div class="form-wrap__inputWrap">
									<div class="form-wrap__input-wrap form-group"><input class="form-wrap__input form-control" type="tel" placeholder="+7 (999) 444-44-44" name="tel" required="required"/>
									</div>
									<!-- +e.input-wrap-->
									<button class="form-wrap__btn btn" type="button">обсудить заказ
									</button>
								</div>
							</form>
						</div>
						<h2>Наше производство находится в Магнитогорске</h2>
						<div class="modalAbout__mapWrap">
							<div class="modalAbout__frameWrap"><iframe src="https://yandex.ua/map-widget/v1/?um=constructor%3A85a137c287ff30c716c28d89b3cd2cf628478df1c00eaeeb052627868fb5247a&amp;source=constructor" frameborder="0"></iframe>
							</div>
							<div class="form-wrap form-wrap form-wrap--map">
								<form>
									<input type="hidden" name="example-input-field"/>
									<input class="order" type="hidden" name="order" value="Заявка  с сайта"/>
									<input class="utm_source" type="hidden" name="utm_source"/>
									<input class="utm_term" type="hidden" name="utm_term"/>
									<input class="utm_medium" type="hidden" name="utm_medium"/>
									<input class="utm_campaign" type="hidden" name="utm_campaign"/>
									<ul>
										<li> <img class="res-i" src="img/@2x/map.png" alt=""/>
											<div class="form-wrap__mapDescr">
												<div class="h6">адрес:</div>
												<p>г. Магнитогорск, ул.Клары Цеткин, 12/1</p>
											</div>
										</li>
										<li> <img class="res-i" src="img/@2x/phone.png" alt=""/>
											<div class="form-wrap__mapDescr">
												<div class="h6">Телефон:</div><a href="tel:+7(3519)45-45-15">+7 (3519) 45-45-15</a>
											</div>
										</li>
										<li> <img class="res-i" src="img/@2x/mail.png" alt=""/>
											<div class="form-wrap__mapDescr">
												<div class="h6">email:</div><a href="mailto:info@uralmaf.ru ">info@uralmaf.ru </a>
											</div>
										</li>
										<li> <img class="res-i" src="img/@2x/clock.png" alt=""/>
											<div class="form-wrap__mapDescr">
												<div class="h6">Работаем:</div>
												<p>с 7:00 до 19:00 (мск), без&nbsp;выходных</p>
											</div>
										</li>
									</ul>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modalDelivery" id="modalDelivery">
				<div class="container">
					<h2>Доставляем по России, Казахстану и СНГ</h2>
					<div class="modalDelivery__row row">
						<div class="col-lg-6"><img class="modalDelivery__car res-i lazy" src="#" data-src="img/@2x/car.png" alt="" role="presentation"/>
						</div>
						<div class="col-md-6 align-self-center">
							<div class="h5"><strong>Доставляем изделия</strong> транспортыми <strong>компаниями</strong></div>
							<div class="h5"> 
								<svg class="icon icon-info ">
									<use xlink:href="img/svg/sprite.svg#info"></use>
								</svg>Вы&nbsp;можете узнать предварительную <strong>стоимость доставки</strong> после согласования с&nbsp;нами веса &laquo;посылки&raquo;
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-7 order-lg-last"><img class="modalDelivery__packaging res-i lazy" src="#" data-src="img/@2x/packaging.png" alt="" role="presentation"/>
						</div>
						<div class="col-lg-5 align-self-center">
							<div class="h5">Перед отправкой проверяем на&nbsp;брак&nbsp;и&nbsp;надежно упаковываем</div>
							<div class="h5">Используем воздушно-пузырчатую пленку&nbsp;и&nbsp;несколько слоев стрейч-пленки. Габаритные изделия перевозятся на&nbsp;европоддонах.</div>
						</div>
					</div>
					<h3> 
						<svg class="icon icon-verificado ">
							<use xlink:href="img/svg/sprite.svg#verificado"></use>
						</svg>Оптовым покупателям компенсируем до&nbsp;50% от&nbsp;стоимости доставки
					</h3>
				</div>
			</div>
			<div class="modalDelivery modalDelivery--concrete" id="modalConcrete">
				<div class="modalDelivery__head">
					<div class="container">
						<h2>В&nbsp;составе наших изделий более&nbsp;80%&nbsp;крошки натуральных камней</h2>
						<h4>Это обеспечивает долговечность, прочность и&nbsp;красивый внешний вид</h4>
						<div class="row">
							<div class="col-lg-6"><img class="modalDelivery__cement res-i lazy" src="#" data-src="img/@2x/cement.png" alt="" role="presentation"/>
							</div>
							<div class="modalDelivery__pt col-lg-6">
								<div class="h5"><strong>При круглогодичной эксплуатации срок службы изделий 5, 10&nbsp;и&nbsp;даже 20&nbsp;лет</strong></div>
								<div class="h5">Используем цемент B42,5 (М500) и&nbsp;выше&nbsp;&mdash; оптимальную марку, благодаря которой изделиям нипочем снег, дождь, мороз и&nbsp;палящие лучи. Для дополнительной защиты все изделия покрываем лаком.</div>
							</div>
						</div>
						<div class="row">
							<div class="modalDelivery__pt col-lg-6">
								<div class="h5"><strong>Можно мыть водой и&nbsp;при необходимости очищать моющими и&nbsp;дезинфицирующими средствами</strong></div>
								<div class="h5">А&nbsp;также проводить легкую очистку некоторыми растворителями. Так как изделия предназначены для эксплуатации вне помещений, их&nbsp;можно чистить системами типа &laquo;Karcher&raquo;</div>
							</div>
							<div class="col-lg-6"><img class="modalDelivery__karcher res-i lazy" src="#" data-src="img/@2x/karcher.png" alt="" role="presentation"/>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6"><img class="modalDelivery__vazons img res-i lazy" src="#" data-src="img/@2x/banner.png" alt="" role="presentation"/>
							</div>
							<div class="modalDelivery__pt col-lg-6">
								<div class="h5"><strong>Поверхность из&nbsp;натурального камня любой фактуры</strong></div>
								<div class="h5">Изготавливаем материал по&nbsp;технологии &laquo;мытый бетон&raquo; &mdash; в&nbsp;результате наполнитель из&nbsp;камней выступает на&nbsp;поверхность и&nbsp;создает особую фактуру изделию.</div>
							</div>
						</div>
						<div class="modalDelivery__type">Можете выбрать <strong>любой вариант</strong> поверхности
						</div>
						<div class="modalDelivery__materials row text-center">
							<div class="col-6 col-lg-3"><img class="res-i lazy" src="#" data-src="img/@2x/mix.png" alt=""/>
								<div class="h5">Микс</div>
							</div>
							<div class="col-6 col-lg-3"><img class="res-i lazy" src="#" data-src="img/@2x/goldilith.png" alt=""/>
								<div class="h5">Златолит</div>
							</div>
							<div class="col-6 col-lg-3"><img class="res-i lazy" src="#" data-src="img/@2x/red-jasper.png" alt=""/>
								<div class="h5">Красная яшма</div>
							</div>
							<div class="col-6 col-lg-3"><img class="res-i lazy" src="#" data-src="img/@2x/landscape-jasper.png" alt=""/>
								<div class="h5">Пейзажная яшма</div>
							</div>
						</div>
					</div>
				</div>
				<!-- start sForm-->
				<div class="sForm" id="sForm">
					<!-- picture-->
					<picture class="lazy picture-bg"> 
						<source srcset="#" data-srcset="img/@2x/formBg.png" type="image/png" media="(min-width:576px)"/>
						<source srcset="#" data-srcset="img/@1x/formBg.png" type="image/png"/><img class="object-fit-js" src="#" data-src="img/@2x/formBg.png" alt=""/>
					</picture>
					<!-- /picture-->
					<div class="container">
						<div class="h2">Расскажите о задаче — мы рассчитаем стоимость изготовления изделий </div>
						<div class="h4">И подготовим коммерческое предложение</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="sForm__imgWrap d-none d-lg-block"><img class="sForm__founder" src="img/@2x/founder.png" alt="#" title=""/>
									<div class="sForm__label">
										<div class="sForm__name">Михаил Геннадьевич
										</div>
										<div class="sForm__position">Сооснователь компании ООО «УралМаф»
										</div>
									</div>
								</div>
								<div class="sForm__founderSm d-lg-none"><img class="sForm__founderImg" src="img/@2x/founder-sm.png" alt="#" title=""/>
									<div class="sForm__nameWrap">
										<div class="sForm__nameSm">Михаил Геннадьевич
										</div>
										<div class="sForm__positionSm">Сооснователь компании ООО&nbsp;«УралМаф»
										</div>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="sForm__head-text"> 
									<div class="form-wrap">
										<form>
											<input type="hidden" name="example-input-field"/>
											<input class="order" type="hidden" name="order" value="Заявка  с сайта"/>
											<input class="utm_source" type="hidden" name="utm_source"/>
											<input class="utm_term" type="hidden" name="utm_term"/>
											<input class="utm_medium" type="hidden" name="utm_medium"/>
											<input class="utm_campaign" type="hidden" name="utm_campaign"/>
											<div class="form-wrap__input-wrap form-group">
												<label><span class="form-wrap__title">Как к вам обращаться?</span><input class="form-wrap__input form-control" type="text" placeholder="Иван" name="name" required="required"/>
												</label>
											</div>
											<!-- +e.input-wrap-->
											<div class="tabs">
												<div class="form-wrap__group">
													<div class="form-wrap__group-title">Какой способ связи вам удобен?
													</div>
													<div class="tabs__caption">
														<div class="tabs__btn active">Звонок </div>
														<div class="tabs__btn">WhatsApp</div>
														<div class="tabs__btn">Viber</div>
													</div>
												</div>
												<div class="tabs__wrap">
													<div class="tabs__content active">
														<div class="form-wrap__input-wrap form-group">
															<label><span class="form-wrap__title">Введите телефон</span><input class="form-wrap__input form-control" type="tel" placeholder="+7 (999) 444-44-44" name="tel" required="required"/>
															</label>
														</div>
														<!-- +e.input-wrap-->
													</div>
													<div class="tabs__content">
														<div class="form-wrap__input-wrap form-group">
															<label><span class="form-wrap__title">Введите whatsapp</span><input class="form-wrap__input form-control" type="tel" placeholder="+7 (999) 444-44-44" name="whatsapp"/>
															</label>
														</div>
														<!-- +e.input-wrap-->
													</div>
													<div class="tabs__content">
														<div class="form-wrap__input-wrap form-group">
															<label><span class="form-wrap__title">Введите viber</span><input class="form-wrap__input form-control" type="tel" placeholder="+7 (999) 444-44-44" name="viber"/>
															</label>
														</div>
														<!-- +e.input-wrap-->
													</div>
												</div>
											</div>
											<button class="form-wrap__btn btn" type="submit">обсудить задачу
											</button>
											<div class="form-wrap__polite">
												<label class="custom-input"><input class="custom-input__input" type="checkbox" name="checkbox" checked="checked"/><span class="custom-input__lab"></span><span class="custom-input__text"></span>
												</label>
												<div class="form-wrap__text">Нажимая на&nbsp;кнопку, вы&nbsp;даете согласие<br>на&nbsp;обработку своих персональных данных и&nbsp;соглашаетесь&nbsp;с&nbsp;<a href="privacy-policy.pdf" target="_blank">Политикой конфиденциальности</a>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div><img class="sForm__clouds" src="img/@2x/clouds.png" alt="" role="presentation"/>
					</div>
				</div>
				<!-- end sForm-->
			</div>
			<!-- #modal-call-->
		</div>
		<!-- modal-->
		<script src="js/lazy.js"></script>
		<script src="libs/jquery/jquery.min.js"></script>
		<!-- полифил для picture-->
		<script src="libs/picturefill/picturefill.min.js"></script>
		<!-- полифил для object-fit-->
		<script src="libs/object-fit-images/ofi.min.js"></script>
		<!-- modal libs-->
		<script src="libs/@fancyapps/fancybox/jquery.fancybox.min.js"></script>
		<!-- modal libs-->
		<!-- slider libs-->
		<script src="libs/slick-carousel/slick/slick.min.js"></script>
		<!-- /slider libs-->
		<!-- for svg libs-->
		<script src="libs/svg4everybody/svg4everybody.min.js"></script>
		<!-- /for svg libs-->
		<script src="libs/inputmask/jquery.inputmask.min.js"></script>
		<script src="js/common.js"></script>
	</body>
</html>