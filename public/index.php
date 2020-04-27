<!DOCTYPE html>
<?php 
	$title = "МАФы&nbsp;из&nbsp;мытого бетона <span>и&nbsp;крошки натуральных камней</span>"; 
	if(isset($_GET['utm_campaign'])){ 
	if($_GET['utm_campaign'] == 'beton'){ 
	$title = "Вазоны&nbsp;из&nbsp;мытого бетона <span>и&nbsp;крошки натуральных камней</span>"; 
	} 
	else if($_GET['utm_campaign'] == 'parkovka'){ 
	$title = "Органичители парковки </br> <span>из&nbsp;мытого бетона и&nbsp;крошки камней</span>"; 
	} 
	else if($_GET['utm_campaign'] == 'skam'){ 
	$title = "Скамейки&nbsp;из&nbsp;мытого бетона <span>и&nbsp;крошки натуральных камней</span>"; 
	}
	else if($_GET['utm_campaign'] == 'urn'){ 
	$title = "Урны&nbsp;из&nbsp;мытого бетона <span>и&nbsp;крошки натуральных камней</span>"; 
	}
	else if($_GET['utm_campaign'] == 'arch'){ 
	$title = "Архитектурный бетон <span>из&nbsp;крошки натуральных камней</span>"; 
	}
	} 
	?>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>УралМаф, малые архитектурные формы из мытого бетона с доставкой по России и СНГ</title>
		<meta name="description" content="Производим вазоны, парапет, ограничители парквовки, скамейки, урны из мытого бетона">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=no">
		<link rel="shortcut icon" type="image/png" href="img/favicon/favicon.png"><meta name="format-detection" content="telephone=no">
		<link rel="image_src" href="http://uralmaf.ru/img/soc-logo.png">
		<meta property="og:type" content="website">
		<meta property="og:site_name" content="УралМаф">
		<meta property="og:title" content="УралМаф, малые архитектурные формы из мытого бетона с доставкой по России и СНГ">
		<meta property="og:description" content="Производим вазоны, парапет, ограничители парквовки, скамейки, урны из мытого бетона">
		<meta property="og:url" content="content">
		<meta property="og:locale" content="ru_RU">
		<meta property="og:image" content="img/image.jpg">
		<meta property="og:image:width" content="968">
		<meta property="og:image:height" content="504">
		<meta name="yandex-verification" content="ca730c759c1facf4">
		<!-- Custom Browsers Color-->
		<meta name="theme-color" content="#3361d8">
		<link rel="stylesheet" href="libs/@fancyapps/fancybox/jquery.fancybox.min.css"/>
		<link rel="stylesheet" href="css/main.min.css"/>
	</head>
	<body><!--[if lt IE 11]><p   class="browsehappy container">К сожалению, вы используете устаревший браузер. Пожалуйста, <a href="http://browsehappy.com/" target="_blank">обновите ваш браузер</a>, чтобы улучшить производительность, качество отображаемого материала и повысить безопасность.</p><![endif]-->
		<div class="main-wrapper">
			<!-- start header-->
			<div class="header" id="header">
				<div class="container">
					<!-- picture-->
					<picture class="lazy picture-bg"> 
						<source srcset="#" data-srcset="img/@2x/webp/header-bg.webp" type="image/webp" media="(min-width:576px)"/>
						<source srcset="#" data-srcset="img/@1x/webp/header-bg.webp" type="image/webp"/>
						<source srcset="#" data-srcset="img/@2x/header-bg.jpg" type="image/jpg" media="(min-width:576px)"/>
						<source srcset="#" data-srcset="img/@1x/header-bg.jpg" type="image/jpg"/><img class="object-fit-js" src="#" data-src="img/@2x/header-bg.jpg" alt=""/>
					</picture>
					<!-- /picture-->
					<!-- start topLine-->
					<div class="topLine" id="topLine">
						<div class="container">
							<div class="row justify-content-between">
								<div class="col-auto"><a class="topLine__logo" href="/">
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
										<div class="topLine__messengers d-none d-sm-flex"><a class="topLine__whatsapp" href="https://wa.me/73519454515" target="_blank">
											<svg class="icon icon-whatsapp ">
												<use xlink:href="img/svg/sprite.svg#whatsapp"></use>
											</svg></a><a class="topLine__viber" href="viber://add?number=73519454515" data-desktop="viber://chat?number=73519454515" target="_blank">
											<svg class="icon icon-viber ">
												<use xlink:href="img/svg/sprite.svg#viber"></use>
											</svg></a>
										</div><a class="topLine__tel" href="tel:+73519454515">7 (912) 805-45-15</a>
									</div><a class="topLine__call link-modal" href="#modal-call" data-order="Заказать  звонок менеджера">Заказать  звонок <span class="d-none d-lg-inline">менеджера</span></a>
								</div>
								<div class="col-lg d-flex">
									<div class="topLine__imgWrap d-none d-lg-block"><img class="res-i lazy" src="#" data-src="img/@2x/semiprecious-stones.png" alt=""/>
									</div>
									<div class="topLine__text"><a class="topLine__concrete link-modal" href="#modalConcrete" data-order="Что за бетон с полудрагоценными камнями?">Что за&nbsp;бетон с&nbsp;полудрагоценными камнями?</a>
									</div>
								</div>
								<div class="topLine__col col-lg-auto order-lg-3">
									<div class="topLine__delivery"><a class="link-modal" href="#modalDelivery">Доставка</a>
									</div>
									<div class="topLine__about"><a class="link-modal" href="#modalAbout" data-order="О компании">О компании</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end topLine-->
					<!-- start headerBlock-->
					<section class="headerBlock section" id="headerBlock">
						<div class="container">
							<div class="row">
								<div class="col-lg-7 col-xl-6">
									<h1>
										 <?php echo $title;?></h1>
									<div class="headerBlock__subtitle">Для ландшафтного дизайна улиц и&nbsp;парков, школ и&nbsp;детских садов, торговых и&nbsp;бизнес-центров, жилых комплексов и&nbsp;загородных домов
									</div>
								</div>
								<div class="col-lg">
									<picture class="headerBlock__imgWrap">
										<source media="(min-width: 576px)" srcset="img/@2x/webp/banner.webp" type="image/webp"/>
										<source media="(min-width: 576px)" srcset="img/@2x/banner.png" type="image/png"/>
										<source srcset="img/@1x/webp/banner.webp" type="image/webp"/><img src="img/@1x/banner.png" alt=""/>
									</picture>
								</div>
							</div>
							<div class="headerBlock__advantages d-none d-lg-flex">
								<div class="headerBlock__item">
									<svg class="icon icon-verificado ">
										<use xlink:href="img/svg/sprite.svg#verificado"></use>
									</svg>
									<div class="h6">Антивандальные:</div>
									<p>изделие массой 100-500&nbsp;кг не&nbsp;унесут&nbsp;и&nbsp;не&nbsp;перевернут</p>
								</div>
								<div class="headerBlock__item">
									<svg class="icon icon-verificado ">
										<use xlink:href="img/svg/sprite.svg#verificado"></use>
									</svg>
									<div class="h6">Срок службы более 10 лет:</div>
									<p>мороз, жара, солнце и&nbsp;вода камень&nbsp;не&nbsp;разрушат</p>
								</div>
								<div class="headerBlock__item">
									<svg class="icon icon-verificado ">
										<use xlink:href="img/svg/sprite.svg#verificado"></use>
									</svg>
									<div class="h6">Фактура и&nbsp;форма под заказ:</div>
									<p>помогут реализовать оптимальное решение для любого дизайн-проекта</p>
								</div>
							</div>
							<div class="headerBlock__btnWrap"><img class="lazy" src="#" data-src="img/@2x/catalog.png" alt=""/><a class="headerBlock__btn btn link-modal" href="#modalCatalog" data-order="Получить каталог"> <span class="bg">Получить каталог с ценами</span></a>
							</div>
						</div>
					</section>
					<!-- end headerBlock-->
				</div>
			</div>
			<!-- end header-->
			<!-- start sAdvantages-->
			<div class="sAdvantages d-flex d-lg-none" id="sAdvantages">
				<div class="container">
					<div class="sAdvantages__item">
						<svg class="icon icon-verificado ">
							<use xlink:href="img/svg/sprite.svg#verificado"></use>
						</svg>
						<div class="sAdvantages__textWrap">
							<div class="h6">Антивандальные:</div>
							<p>изделие массой 100-500&nbsp;кг не&nbsp;унесут&nbsp;и&nbsp;не&nbsp;перевернут</p>
						</div>
					</div>
					<div class="sAdvantages__item">
						<svg class="icon icon-verificado ">
							<use xlink:href="img/svg/sprite.svg#verificado"></use>
						</svg>
						<div class="sAdvantages__textWrap">
							<div class="h6">Срок службы более 10 лет:</div>
							<p>мороз, жара, солнце и&nbsp;вода камень&nbsp;не&nbsp;разрушат</p>
						</div>
					</div>
					<div class="sAdvantages__item">
						<svg class="icon icon-verificado ">
							<use xlink:href="img/svg/sprite.svg#verificado"></use>
						</svg>
						<div class="sAdvantages__textWrap">
							<div class="h6">Фактура и&nbsp;форма под заказ:</div>
							<p>помогут реализовать оптимальное решение для&nbsp;любого дизайн-проекта</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end sAdvantages-->
			<!-- start sCatalog-->
			<section class="sCatalog section" id="sCatalog">
				<div class="container">
					<div class="section-title text-center">
						<h2>Благодаря собственному производству реализуем&nbsp;в&nbsp;камне <strong>любые фактуры, формы и&nbsp;цвета</strong></h2>
						<h4>Все изделия покрываем лаком для дополнительной защиты, который&nbsp;придает насыщенный цвет изделию</h4>
					</div>
					<div class="tabs">
						<div class="tabs__caption">
							<div class="tabs__btn active">Вазоны бетонные цветочные
							</div>
							<div class="tabs__btn">Парапет
							</div>
							<div class="tabs__btn">Ограничитель парковки
							</div>
							<div class="tabs__btn">Скамейки
							</div>
							<div class="tabs__btn">Плитка фасадная
							</div>
						</div>
						<div class="tabs__wrap">
							<div class="tabs__content vazons active">
								<div class="tabs__vazons">
									<svg class="icon icon-info ">
										<use xlink:href="img/svg/sprite.svg#info"></use>
									</svg>
									<p>Во&nbsp;всех вазонах делаем дренажные отверстия для&nbsp;воды</p>
								</div>
								<div class="slider-wrap">
									<div class="slider--js">
										<div class="slide">
											<div class="itemProd">
												<div class="itemProd__availability">В наличии
												</div><a class="itemProd__imgWrap" href="img/@2x/afina-x.jpg" data-fancybox="gal-afina"> <img src="#" data-lazy="img/@2x/afina.jpg" alt="Флораль"/></a>
												<div class="h4">«Флораль»<span>вазон бетонный </span>
												</div>
												<table>
													<tr>
														<td>Высота: </td>
														<td>300 мм</td>
													</tr>
													<tr>
														<td>Ширина: </td>
														<td>400 мм</td>
													</tr>
													<tr>
														<td>Вес: </td>
														<td>55 кг</td>
													</tr>
												</table>
												<div class="itemProd__materials">
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-1.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-1.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-2.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-2.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-3.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-3.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-4.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-4.jpg" alt="фактура"/></a>
													</div>
												</div>
												<div class="h5 text-center">3.000 руб.*</div><a class="itemProd__btn btn link-modal" href="#modalOrder"> <span class="bg">Заказать</span></a>
											</div>
										</div>
										<div class="slide">
											<div class="itemProd">
												<div class="itemProd__availability">В наличии
												</div><a class="itemProd__imgWrap" href="img/@2x/baleno-x.jpg" data-fancybox="gal-baleno"> <img src="#" data-lazy="img/@2x/baleno.jpg" alt="миллениум"/></a>
												<div class="h4">«Миллениум»<span>вазон бетонный </span>
												</div>
												<table>
													<tr>
														<td>ВхШ: </td>
														<td>400х400 мм</td>
													</tr>
													<tr>
														<td>Длина: </td>
														<td>1200 мм</td>
													</tr>
													<tr>
														<td>Вес: </td>
														<td>265 кг</td>
													</tr>
												</table>
												<div class="itemProd__materials">
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-1.jpg" data-fancybox="materials-2"><img class="res-i" src="#" data-lazy="img/@0.5x/material-1.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-2.jpg" data-fancybox="materials-2"><img class="res-i" src="#" data-lazy="img/@0.5x/material-2.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-3.jpg" data-fancybox="materials-2"><img class="res-i" src="#" data-lazy="img/@0.5x/material-3.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-4.jpg" data-fancybox="materials-2"><img class="res-i" src="#" data-lazy="img/@0.5x/material-4.jpg" alt="фактура"/></a>
													</div>
												</div>
												<div class="h5 text-center">10.000 руб.*</div><a class="itemProd__btn btn link-modal" href="#modalOrder"> <span class="bg">Заказать</span></a>
											</div>
										</div>
										<div class="slide">
											<div class="itemProd">
												<div class="itemProd__availability">В наличии
												</div><a class="itemProd__imgWrap" href="img/@2x/venza-x.jpg" data-fancybox="gal-venza"> <img src="#" data-lazy="img/@2x/venza.jpg" alt="Богемия"/></a>
												<div class="h4">«Богемия»<span>вазон бетонный </span>
												</div>
												<table>
													<tr>
														<td>Высота: </td>
														<td>1000 мм</td>
													</tr>
													<tr>
														<td>Ширина: </td>
														<td>530 мм</td>
													</tr>
													<tr>
														<td>Вес: </td>
														<td>252 кг</td>
													</tr>
												</table>
												<div class="itemProd__materials">
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-1.jpg" data-fancybox="materials-3"><img class="res-i" src="#" data-lazy="img/@0.5x/material-1.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-2.jpg" data-fancybox="materials-3"><img class="res-i" src="#" data-lazy="img/@0.5x/material-2.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-3.jpg" data-fancybox="materials-3"><img class="res-i" src="#" data-lazy="img/@0.5x/material-3.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-4.jpg" data-fancybox="materials-3"><img class="res-i" src="#" data-lazy="img/@0.5x/material-4.jpg" alt="фактура"/></a>
													</div>
												</div>
												<div class="h5 text-center">11.000 руб.*</div><a class="itemProd__btn btn link-modal" href="#modalOrder"> <span class="bg">Заказать</span></a>
											</div>
										</div>
										<div class="slide">
											<div class="itemProd">
												<div class="itemProd__availability">В наличии
												</div><a class="itemProd__imgWrap" href="img/@2x/shar-x.jpg" data-fancybox="gal-shar"> <img src="#" data-lazy="img/@2x/shar.jpg" alt="кассандра"/></a>
												<div class="h4">«Кассандра»<span>вазон бетонный </span>
												</div>
												<table>
													<tr>
														<td>Высота: </td>
														<td>450 мм</td>
													</tr>
													<tr>
														<td>Ширина: </td>
														<td>600 мм</td>
													</tr>
													<tr>
														<td>Вес: </td>
														<td>210 кг</td>
													</tr>
												</table>
												<div class="itemProd__materials">
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-1.jpg" data-fancybox="materials-4"><img class="res-i" src="#" data-lazy="img/@0.5x/material-1.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-2.jpg" data-fancybox="materials-4"><img class="res-i" src="#" data-lazy="img/@0.5x/material-2.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-3.jpg" data-fancybox="materials-4"><img class="res-i" src="#" data-lazy="img/@0.5x/material-3.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-4.jpg" data-fancybox="materials-4"><img class="res-i" src="#" data-lazy="img/@0.5x/material-4.jpg" alt="фактура"/></a>
													</div>
												</div>
												<div class="h5 text-center">6.000 руб.*</div><a class="itemProd__btn btn link-modal" href="#modalOrder"> <span class="bg">Заказать</span></a>
											</div>
										</div>
									</div>
									<div class="control-wrap"></div>
								</div>
								<div class="h6">*Стоимость указана при покупке со&nbsp;склада производителя в&nbsp;Магнитогорске.<br> Стоимость не&nbsp;включает дополнительную упаковку, доставку и&nbsp;погрузо-разгрузочные работы.</div>
							</div>
							<div class="tabs__content">
								<div class="slider-wrap">
									<div class="slider--js">
										<div class="slide">
											<div class="itemProd">
												<div class="itemProd__availability">В наличии
												</div><a class="itemProd__imgWrap" href="img/@2x/krishka-x.jpg" data-fancybox="gal-krishka"> <img src="#" data-lazy="img/@2x/krishka.jpg" alt="krishka"/></a>
												<div class="h4">«Крышка на забор»<span>парапет бетонный </span>
												</div>
												<table>
													<tr>
														<td>Высота: </td>
														<td>55 мм</td>
													</tr>
													<tr>
														<td>Ширина: </td>
														<td>270 мм</td>
													</tr>
													<tr>
														<td>Длина: </td>
														<td>400 мм</td>
													</tr>
													<tr>
														<td>Вес: </td>
														<td>10 кг</td>
													</tr>
												</table>
												<div class="itemProd__materials">
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-1.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-1.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-2.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-2.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-3.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-3.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-4.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-4.jpg" alt="фактура"/></a>
													</div>
												</div>
												<div class="h5 text-center">250 руб.*</div><a class="itemProd__btn btn link-modal" href="#modalOrder"> <span class="bg">Заказать</span></a>
											</div>
										</div>
										<div class="slide">
											<div class="itemProd">
												<div class="itemProd__availability">В наличии
												</div><a class="itemProd__imgWrap" href="img/@2x/navershie-x.jpg" data-fancybox="gal-navershie"> <img src="#" data-lazy="img/@2x/navershie.jpg" alt="navershie"/></a>
												<div class="h4">«Навершие на забор»<span>парапет бетонный </span>
												</div>
												<table>
													<tr>
														<td>Высота: </td>
														<td>120 мм</td>
													</tr>
													<tr>
														<td>Ширина: </td>
														<td>450 мм</td>
													</tr>
													<tr>
														<td>Длина: </td>
														<td>450 мм</td>
													</tr>
													<tr>
														<td>Вес: </td>
														<td>16 кг</td>
													</tr>
												</table>
												<div class="itemProd__materials">
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-1.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-1.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-2.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-2.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-3.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-3.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-4.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-4.jpg" alt="фактура"/></a>
													</div>
												</div>
												<div class="h5 text-center">750 руб.*</div><a class="itemProd__btn btn link-modal" href="#modalOrder"> <span class="bg">Заказать</span></a>
											</div>
										</div>
									</div>
									<div class="control-wrap"></div>
								</div>
								<div class="h6">*Стоимость указана при покупке со&nbsp;склада производителя в&nbsp;Магнитогорске.<br> Стоимость не&nbsp;включает дополнительную упаковку, доставку и&nbsp;погрузо-разгрузочные работы.</div>
							</div>
							<div class="tabs__content">
								<div class="slider-wrap">
									<div class="slider--js">
										<div class="slide">
											<div class="itemProd">
												<div class="itemProd__availability">В наличии
												</div><a class="itemProd__imgWrap" href="img/@2x/polusfera-x.jpg" data-fancybox="gal-polusfera"> <img src="#" data-lazy="img/@2x/polusfera.jpg" alt="polusfera"/></a>
												<div class="h4">«Полусфера»<span>ограничитель парковки </span>
												</div>
												<table>
													<tr>
														<td>Высота: </td>
														<td>250 мм</td>
													</tr>
													<tr>
														<td>Диаметр: </td>
														<td>500 мм</td>
													</tr>
													<tr>
														<td>Вес: </td>
														<td>75 кг</td>
													</tr>
												</table>
												<div class="itemProd__materials">
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-1.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-1.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-2.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-2.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-3.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-3.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-4.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-4.jpg" alt="фактура"/></a>
													</div>
												</div>
												<div class="h5 text-center">3.500 руб.*</div><a class="itemProd__btn btn link-modal" href="#modalOrder"> <span class="bg">Заказать</span></a>
											</div>
										</div>
										<div class="slide">
											<div class="itemProd">
												<div class="itemProd__availability">В наличии
												</div><a class="itemProd__imgWrap" href="img/@2x/sfera-x.jpg" data-fancybox="gal-sfera"> <img src="#" data-lazy="img/@2x/sfera.jpg" alt="sfrea"/></a>
												<div class="h4">«Сфера»<span>ограничитель парковки </span>
												</div>
												<table>
													<tr>
														<td>Высота: </td>
														<td>550 мм</td>
													</tr>
													<tr>
														<td>Диаметр: </td>
														<td>600 мм</td>
													</tr>
													<tr>
														<td>Вес: </td>
														<td>150 кг</td>
													</tr>
												</table>
												<div class="itemProd__materials">
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-1.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-1.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-2.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-2.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-3.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-3.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-4.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-4.jpg" alt="фактура"/></a>
													</div>
												</div>
												<div class="h5 text-center">5.500 руб.*</div><a class="itemProd__btn btn link-modal" href="#modalOrder"> <span class="bg">Заказать</span></a>
											</div>
										</div>
									</div>
									<div class="control-wrap"></div>
								</div>
								<div class="h6">*Стоимость указана при покупке со&nbsp;склада производителя в&nbsp;Магнитогорске.<br> Стоимость не&nbsp;включает дополнительную упаковку, доставку и&nbsp;погрузо-разгрузочные работы.</div>
							</div>
							<div class="tabs__content">
								<div class="slider-wrap">
									<div class="slider--js">
										<div class="slide">
											<div class="itemProd">
												<div class="itemProd__availability">В наличии
												</div><a class="itemProd__imgWrap" href="img/@2x/kirat-x.jpg" data-fancybox="gal-kirat"> <img src="#" data-lazy="img/@2x/kirat.jpg" alt="sonata"/></a>
												<div class="h4">«Соната» (комплект)<span>Скамейка </span>
												</div>
												<table>
													<tr>
														<td>Высота: </td>
														<td>450 мм</td>
													</tr>
													<tr>
														<td>Ширина: </td>
														<td>400 мм</td>
													</tr>
													<tr>
														<td>Длина: </td>
														<td>400 мм</td>
													</tr>
													<tr>
														<td>Вес: </td>
														<td>190 кг (без досок)</td>
													</tr>
												</table>
												<div class="itemProd__materials">
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-1.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-1.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-2.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-2.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-3.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-3.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-4.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-4.jpg" alt="фактура"/></a>
													</div>
												</div>
												<div class="h5 text-center">11.000 руб.*</div><a class="itemProd__btn btn link-modal" href="#modalOrder"> <span class="bg">Заказать</span></a>
											</div>
										</div>
									</div>
									<div class="control-wrap"></div>
								</div>
								<div class="h6">*Стоимость указана при покупке со&nbsp;склада производителя в&nbsp;Магнитогорске.<br> Стоимость не&nbsp;включает дополнительную упаковку, доставку и&nbsp;погрузо-разгрузочные работы.</div>
							</div>
							<div class="tabs__content"> 
								<div class="slider-wrap">
									<div class="slider--js">
										<div class="slide">
											<div class="itemProd">
												<div class="itemProd__availability">В наличии
												</div><a class="itemProd__imgWrap" href="img/@2x/plitka-x.jpg" data-fancybox="gal-plitka"> <img src="#" data-lazy="img/@2x/plitka.jpg" alt="Плитка фасадная"/></a>
												<div class="h4">«Плитка»<span>Плитка фасадная</span>
												</div>
												<table>
													<tr></tr>
													<tr>
														<td>Длина:  </td>
														<td>400 мм</td>
													</tr>
													<tr>
														<td>Ширина:  </td>
														<td>200 мм </td>
													</tr>
												</table>
												<div class="itemProd__materials">
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-1.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-1.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-2.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-2.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-3.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-3.jpg" alt="фактура"/></a>
													</div>
													<div class="itemProd__materialsWrap"><a href="img/@2x/material-4.jpg" data-fancybox="materials-1"><img class="res-i" src="#" data-lazy="img/@0.5x/material-4.jpg" alt="фактура"/></a>
													</div>
												</div>
												<div class="h5 text-center">1400 руб.*</div><a class="itemProd__btn btn link-modal" href="#modalOrder"> <span class="bg">Заказать</span></a>
											</div>
										</div>
									</div>
									<div class="control-wrap"></div>
								</div>
								<div class="h6">*Стоимость указана при покупке со&nbsp;склада производителя в&nbsp;Магнитогорске.<br> Стоимость не&nbsp;включает дополнительную упаковку, доставку и&nbsp;погрузо-разгрузочные работы.</div>
							</div>
						</div>
						<div class="tabs__caption2 d-md-none">
							<div class="tabs__btn active">Вазоны бетонные цветочные
							</div>
							<div class="tabs__btn">Парапет
							</div>
							<div class="tabs__btn">Ограничитель парковки
							</div>
							<div class="tabs__btn">Скамейки
							</div>
							<div class="tabs__btn">Плитка фасадная
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end sCatalog-->
			<!-- start sForm-->
			<div class="sForm">
				<!-- picture-->
				<picture class="lazy picture-bg"> 
					<source srcset="#" data-srcset="img/@2x/webp/formBg.webp" type="image/webp" media="(min-width:576px)"/>
					<source srcset="#" data-srcset="img/@1x/webp/formBg.webp" type="image/webp"/>
					<source srcset="#" data-srcset="img/@2x/formBg.jpg" type="image/jpg" media="(min-width:576px)"/>
					<source srcset="#" data-srcset="img/@1x/formBg.jpg" type="image/jpg"/><img class="object-fit-js" src="#" data-src="img/@2x/formBg.jpg" alt=""/>
				</picture>
				<!-- /picture-->
				<div class="container">
					<div class="h2">Если вы&nbsp;не&nbsp;нашли&nbsp;то, что нужно, мы&nbsp;изготовим формы и&nbsp;<span>сделаем изделия специально&nbsp;для&nbsp;вас</span></div>
					<div class="h4">Расскажите о&nbsp;задаче&nbsp;&mdash; рассчитаем стоимость&nbsp;изготовления изделий&nbsp;и&nbsp;подготовим коммерческое&nbsp;предложение</div>
					<div class="row">
						<div class="sForm__col col-lg-6">
							<div class="sForm__imgWrap d-none d-lg-block"><picture class=" sForm__founder"> 
<source srcset="#" data-srcset="img/@2x/webp/founder.webp" type="image/webp">
<img src="#" data-src="img/@2x/founder.png" alt="">
</picture>
								<div class="sForm__label">
									<div class="sForm__name">Михаил Паламарчук
									</div>
									<div class="sForm__position">Сооснователь компании ООО «УралМаф»
									</div>
								</div>
							</div>
							<picture class="sForm__founderSm d-lg-none lazy">
								<source media="(min-width: 576px)" srcset="#" data-srcset="img/@2x/webp/founder-sm.webp" type="image/webp"/><img class="sForm__founderImg" src="#" data-src="img/@2x/founder-sm.png" alt="" role="presentation"/>
								<div class="sForm__nameWrap">
									<div class="sForm__nameSm">Михаил Паламарчук
									</div>
									<div class="sForm__positionSm">Сооснователь компании ООО&nbsp;«УралМаф»
									</div>
								</div>
							</picture>
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
										<button class="form-wrap__btn btn" type="submit"> <span class="bg d-none d-lg-flex">обсудить задачу</span><span class="bg d-lg-none">заказать</span>
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
					</div>
				</div>
			</div>
			<!-- end sForm-->
			<!-- start sDelivery-->
			<div class="sDelivery" id="sDelivery">
				<div class="container">
					<div class="sDelivery__advantages">
						<div class="sDelivery__item">
							<svg class="icon icon-verificado ">
								<use xlink:href="img/svg/sprite.svg#verificado"></use>
							</svg>
							<div class="sDelivery__textWrap">
								<div class="h6">доставка</div>
								<p>по России, Казахстану, СНГ</p>
							</div>
						</div>
						<div class="sDelivery__item">
							<svg class="icon icon-verificado ">
								<use xlink:href="img/svg/sprite.svg#verificado"></use>
							</svg>
							<div class="sDelivery__textWrap">
								<div class="h6">Отсутствие ограничения</div>
								<p>на минимальное количество заказа</p>
							</div>
						</div>
						<div class="sDelivery__item">
							<svg class="icon icon-verificado ">
								<use xlink:href="img/svg/sprite.svg#verificado"></use>
							</svg>
							<div class="sDelivery__textWrap">
								<div class="h6">Компенсируем до 50%</div>
								<p>от стоимости доставки оптовым покупателям</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end sDelivery-->
			<footer class="footer block-with-lazy">
				<div class="container">
					<div class="row">
						<div class="mobileOrder-1 col-md-4 col-lg-4"><a class="footer__logo" href="/">
							<svg class="icon icon-logo ">
								<use xlink:href="img/svg/sprite.svg#logo"></use>
							</svg>
							<div class="footer__brand">Урал Маф
							</div>
							<div class="footer__descr d-none d-lg-block">Малые архитектурные формы: производим в&nbsp;Магнитогорске, реализуем по&nbsp;России и&nbsp;СНГ
							</div></a>
						</div>
						<div class="mobileOrder-2 col-md-4 col-lg-2 col-xl">
							<ul class="footer__map">
								<li><a class="link-modal" href="#modalAbout" data-order="О компании">О компании</a></li>
								<li><a class="link-modal" href="#modalDelivery">Доставка</a></li>
								<li><a class="borderBottom link-modal" href="#modalCatalog" data-order="Получить каталог">Получить каталог</a></li>
							</ul>
						</div>
						<div class="mdOrder col-4 d-none d-md-block d-lg-none">
							<div class="footer__descr footer__descr--md">Малые архитектурные формы: производим в&nbsp;Магнитогорске, реализуем по&nbsp;России и&nbsp;СНГ
							</div>
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
								<div class="footer__messengers d-none d-lg-flex"><a class="footer__whatsapp" href="https://wa.me/73519454515" target="_blank">
									<svg class="icon icon-whatsapp ">
										<use xlink:href="img/svg/sprite.svg#whatsapp"></use>
									</svg></a><a class="footer__viber" href="viber://add?number=73519454515" data-desktop="viber://chat?number=73519454515" target="_blank">
									<svg class="icon icon-viber ">
										<use xlink:href="img/svg/sprite.svg#viber"></use>
									</svg></a>
								</div><a class="footer__tel" href="tel:+73519454515">7 (3519) 45-45-15</a>
							</div><a class="footer__call link-modal" href="#modal-call" data-order="Заказать  звонок менеджера">Заказать звонок менеджера</a>
						</div>
						<div class="mobileOrder-5 col-md-5 col-lg-4">
							<div class="footer__adres">Юридический адерс и реквизиты
							</div>
							<p>455026, Челябинская область, г.&nbsp;Магнитогорск, ул. Клары Цеткин,&nbsp;д.12/1 </p>
						</div>
						<div class="col-lg-2"></div>
						<div class="mobileOrder-6 col-md-4 col-lg-3">
							<ul class="footer__polite"> 
								<li><a href="privacy-policy.pdf" target="_blank">Политика конфиденциальности</a></li>
								<li><a href="processing-conditions.pdf" target="_blank">Пользовательское соглашение</a></li>
							</ul>
						</div>
						<div class="mobileOrder-7 col-md-7 col-lg-3">
							<div class="footer__develop">Разработка и продвижение сайта: <a href="https://studiobars.ru" target="_blank">Веб-студия «Барс»</a>
							</div><a class="develop-link" href="https://studiobars.ru" target="_blank"><span class="develop-link__panel"><img class="img-1 lazy" src="#" data-src="img/svg/hand.svg" alt=""/><img class="img-2 lazy" src="#" data-src="img/svg/logo-text.svg" alt=""/></span></a>
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
						<div class="h3">Укажите контактные данные для звонка</div>
						<div class="h5">Менеджер компании позвонит вам в&nbsp;течение&nbsp;рабочего дня:<br>мы&nbsp;работаем: пн-пт&nbsp;с&nbsp;7:00 до&nbsp;19:00 (Мск)</div>
					</div>
					<div class="form-wrap__input-wrap form-group">
						<label><span class="form-wrap__title">Как к вам обращаться?</span><input class="form-wrap__input form-control" type="text" placeholder="Иван" name="name" required="required"/> 
						</label> 
					</div>
					<!-- +e.input-wrap-->
					<div class="form-wrap__input-wrap form-group">
						<label><span class="form-wrap__title">Введите телефон</span><input class="form-wrap__input form-control" type="tel" placeholder="+7 (999) 444-44-44" name="tel" required="required"/>
						</label>
					</div>
					<!-- +e.input-wrap-->
					<button class="form-wrap__btn btn" type="submit"><span class="bg">Заказать звонок</span>
					</button>
					<div class="form-wrap__polite">
						<label class="custom-input"><input class="custom-input__input" type="checkbox" name="checkbox" checked="checked"/><span class="custom-input__lab"></span><span class="custom-input__text"></span>
						</label>
						<div class="form-wrap__text">Нажимая на&nbsp;кнопку, вы&nbsp;даете согласие<br>на&nbsp;обработку своих персональных данных и&nbsp;соглашаетесь&nbsp;с&nbsp;<a href="privacy-policy.pdf" target="_blank">Политикой конфиденциальности</a>
						</div>
					</div>
				</form>
			</div>
			<div class="form-wrap modal-win modal-win--catalog modal-form" id="modalCatalog">
				<form>
					<input type="hidden" name="example-input-field"/>
					<input class="order" type="hidden" name="order" value="Заявка  с сайта"/>
					<input class="utm_source" type="hidden" name="utm_source"/>
					<input class="utm_term" type="hidden" name="utm_term"/>
					<input class="utm_medium" type="hidden" name="utm_medium"/>
					<input class="utm_campaign" type="hidden" name="utm_campaign"/>
					<div class="text-center">
						<div class="h3">Получите каталог малых архитектурных форм</div>
						<div class="h5">С&nbsp;их&nbsp;помощью вы&nbsp;создадите уютную атмосферу мест, куда гости захотят вернуться</div>
					</div>
					<input type="hidden" name="catalog" value="catalog"/>
					<div class="form-wrap__input-wrap form-group">
						<label><span class="form-wrap__title">Как к вам обращаться?</span><input class="form-wrap__input form-control" type="text" placeholder="Иван" name="name" required="required"/> 
						</label> 
					</div>
					<!-- +e.input-wrap-->
					<div class="tabs tabsModal">
						<div class="form-wrap__group">
							<div class="form-wrap__group-title">Какой способ связи вам удобен?
							</div>
							<div class="tabs__caption">
								<div class="tabs__btn active">Email </div>
								<div class="tabs__btn">WhatsApp</div>
								<div class="tabs__btn">Viber</div>
								<div class="tabs__btn">Telegram</div>
							</div>
						</div>
						<div class="tabs__wrap">
							<div class="tabs__content active">
								<div class="form-wrap__input-wrap form-group">
									<label><span class="form-wrap__title">Введите Email</span><input class="form-wrap__input form-control" type="email" placeholder="Email" name="mail" required="required"/>
									</label>
								</div>
								<!-- +e.input-wrap-->
							</div>
							<div class="tabs__content">
								<div class="form-wrap__input-wrap form-group">
									<label><span class="form-wrap__title">Введите Whatsapp</span><input class="form-wrap__input form-control" type="tel" placeholder="+7 (999) 444-44-44" name="whatsapp"/>
									</label>
								</div>
								<!-- +e.input-wrap-->
							</div>
							<div class="tabs__content">
								<div class="form-wrap__input-wrap form-group">
									<label><span class="form-wrap__title">Введите Viber</span><input class="form-wrap__input form-control" type="tel" placeholder="+7 (999) 444-44-44" name="viber"/>
									</label>
								</div>
								<!-- +e.input-wrap-->
							</div>
							<div class="tabs__content">
								<div class="form-wrap__input-wrap form-group">
									<label><span class="form-wrap__title">Введите Telegram</span><input class="form-wrap__input form-control" type="tel" placeholder="+7 (999) 444-44-44" name="Telegram"/>
									</label>
								</div>
								<!-- +e.input-wrap-->
							</div>
						</div>
					</div>
					<div class="form-wrap__btnWrap">
						<button class="form-wrap__btn btn" type="submit"><span class="bg">Получить каталог</span>
						</button><img class="d-none d-lg-block lazy-modal--js" src="#" data-src="img/@2x/catalog.png" alt=""/>
					</div>
					<div class="form-wrap__polite">
						<label class="custom-input"><input class="custom-input__input" type="checkbox" name="checkbox" checked="checked"/><span class="custom-input__lab"></span><span class="custom-input__text"></span>
						</label>
						<div class="form-wrap__text">Нажимая на&nbsp;кнопку, вы&nbsp;даете согласие<br>на&nbsp;обработку своих персональных данных и&nbsp;соглашаетесь&nbsp;с&nbsp;<a href="privacy-policy.pdf" target="_blank">Политикой конфиденциальности</a>
						</div>
					</div>
				</form>
			</div>
			<div class="form-wrap modal-win modal-win--order modal-form" id="modalOrder">
				<form>
					<input type="hidden" name="example-input-field"/>
					<input class="order" type="hidden" name="order" value="Заявка  с сайта"/>
					<input class="utm_source" type="hidden" name="utm_source"/>
					<input class="utm_term" type="hidden" name="utm_term"/>
					<input class="utm_medium" type="hidden" name="utm_medium"/>
					<input class="utm_campaign" type="hidden" name="utm_campaign"/> 
					<div class="text-center">
						<div class="h3">Для оформления заказа оставьте ваши контакты</div>
					</div>
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
					<div class="form-wrap__input-wrapper">
						<div class="form-wrap__comment form-wrap__comment--js text-center">Напишите, комментарии, если хотите
						</div>
						<div class="form-wrap__toggle-block form-wrap__toggle-block--js">
							<div class="form-wrap__input-wrap form-group"><textarea class="form-wrap__input form-control" placeholder="Текст сообщения" name="textarea"></textarea>
							</div>
							<!-- +e.input-wrap-->
						</div>
					</div>
					<div class="form-wrap__specialist h5 text-center">Специалист компании &laquo;УралМаф&raquo; позвонит вам прямо сейчас или в&nbsp;другое рабочее время: мы&nbsp;работаем&nbsp;пн-пт с&nbsp;07:00 до&nbsp;19:00&nbsp;(Мск)
					</div>
					<button class="form-wrap__btn btn" type="submit"><span class="bg">оформить заказ</span>
					</button>
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
							<source srcset="#" data-srcset="img/@2x/webp/bgModal.webp" type="image/webp" media="(min-width:576px)"/>
							<source srcset="#" data-srcset="img/@1x/webp/bgModal.webp" type="image/webp"/>
							<source srcset="#" data-srcset="img/@2x/bgModal.jpg" type="image/jpg" media="(min-width:576px)"/>
							<source srcset="#" data-srcset="img/@1x/bgModal.jpg" type="image/jpg"/><img class="object-fit-js" src="#" data-src="img/@2x/bgModal.jpg" alt=""/>
						</picture>
						<!-- /picture-->
						<div class="row">
							<div class="col-lg-5">
								<div class="modalAbout__imgWrap d-none d-lg-block">
									<picture class="modalAbout__founder imgWrap lazy-modal lazy-modal--js">
										<source media="(min-width: 576px)" data-srcset="img/@2x/webp/founder.webp" type="image/webp" srcset="#"/>
										<source media="(min-width: 576px)" data-srcset="img/@2x/founder.png" type="image/png" srcset="#"/>
										<source data-srcset="img/@1x/webp/founder.webp" type="image/webp" srcset="#"/><img src="#" data-src="img/@1x/founder.png" alt=""/>
									</picture>
								</div>
								<div class="modalAbout__founderSm d-lg-none"><img class="modalAbout__founderImg lazy-modal lazy-modal--js" src="#" data-src="img/@2x/founder-sm.png" alt="" role="presentation"/>
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
						</div>
						<picture class="modalAbout__clouds imgWrap lazy-modal lazy-modal--js">
							<source media="(min-width: 576px)" data-srcset="img/@2x/webp/clouds.webp" type="image/webp" srcset="#"/>
							<source media="(min-width: 576px)" data-srcset="img/@2x/clouds.png" type="image/png" srcset="#"/>
							<source data-srcset="img/@1x/webp/clouds.webp" type="image/webp" srcset="#"/><img src="#" data-src="img/@1x/clouds.png" alt=""/>
						</picture>
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
									<button class="form-wrap__btn btn" type="button"> <span class="bg">обсудить заказ</span>
									</button>
								</div>
							</form>
						</div>
						<h2>Наше производство находится в Магнитогорске</h2>
						<div class="modalAbout__mapWrap">
							<div class="modalAbout__frameWrap" data-map="&lt;script type=&quot;text/javascript&quot; charset=&quot;utf-8&quot; async src=&quot;https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A15f21b25c515e780d425c521af82a8ce28902637b1a59ec706a7c145a1f2bb50&amp;amp;width=100%25&amp;amp;lang=ru_RU&amp;amp;scroll=false&amp;amp;&quot;&gt;&lt;/script&gt;">
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
										<li> <img class="res-i lazy-modal--js" src="#" data-src="img/@2x/map.png" alt=""/>
											<div class="form-wrap__mapDescr">
												<div class="h6">адрес:</div>
												<p>г. Магнитогорск, ул.Клары Цеткин, 12/1</p>
											</div>
										</li>
										<li> <img class="res-i lazy-modal--js" src="#" data-src="img/@2x/phone.png" alt=""/>
											<div class="form-wrap__mapDescr">
												<div class="h6">Телефон:</div><a href="tel:+7(3519)45-45-15">+7 (3519) 45-45-15</a>
											</div>
										</li>
										<li> <img class="res-i lazy-modal--js" src="#" data-src="img/@2x/mail.png" alt=""/>
											<div class="form-wrap__mapDescr">
												<div class="h6">email:</div><a href="mailto:info@uralmaf.ru ">info@uralmaf.ru </a>
											</div>
										</li>
										<li> <img class="res-i lazy-modal--js" src="#" data-src="img/@2x/clock.png" alt=""/>
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
						<div class="col-lg-6">
							<picture class="modalDelivery__car imgWrap lazy-modal lazy-modal--js">
								<source media="(min-width: 576px)" data-srcset="img/@2x/webp/car.webp" type="image/webp" srcset="#"/>
								<source media="(min-width: 576px)" data-srcset="img/@2x/car.jpg" type="image/jpg" srcset="#"/>
								<source data-srcset="img/@1x/webp/car.webp" srcset="#" type="image/webp"/><img src="#" data-src="img/@1x/car.jpg" alt=""/>
							</picture>
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
						<div class="col-lg-7 order-lg-last">
							<picture class="modalDelivery__packaging imgWrap lazy-modal lazy-modal--js">
								<source media="(min-width: 576px)" data-srcset="img/@2x/webp/packaging.webp" type="image/webp" srcset="#"/>
								<source media="(min-width: 576px)" data-srcset="img/@2x/packaging.png" type="image/png" srcset="#"/>
								<source data-srcset="img/@1x/webp/packaging.webp" srcset="#" type="image/webp"/><img src="#" data-src="img/@1x/packaging.png" alt=""/>
							</picture>
						</div>
						<div class="col-lg-5 align-self-center">
							<div class="h5">Перед отправкой проверяем на&nbsp;брак&nbsp;и&nbsp;<strong>надежно упаковываем</strong></div>
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
							<div class="col-md-6">
								<picture class="modalDelivery__cement imgWrap lazy-modal lazy-modal--js">
									<source media="(min-width: 576px)" data-srcset="img/@2x/webp/cement.webp" type="image/webp" srcset="#"/>
									<source media="(min-width: 576px)" data-srcset="img/@2x/cement.png" type="image/png" srcset="#"/>
									<source data-srcset="img/@1x/webp/cement.webp" type="image/webp" srcset="#"/><img src="#" data-src="img/@1x/cement.png" alt=""/>
								</picture>
							</div>
							<div class="modalDelivery__pt col-md-6">
								<div class="h5"><strong>При круглогодичной эксплуатации срок службы изделий 5, 10&nbsp;и&nbsp;даже 20&nbsp;лет</strong></div>
								<div class="h5">Используем цемент B42,5 (М500) и&nbsp;выше&nbsp;&mdash; оптимальную марку, благодаря которой изделиям нипочем снег, дождь, мороз и&nbsp;палящие лучи. Для дополнительной защиты все изделия покрываем лаком.</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 order-md-last">
								<picture class="modalDelivery__karcher imgWrap lazy-modal lazy-modal--js">
									<source media="(min-width: 576px)" data-srcset="img/@2x/webp/karcher.webp" type="image/webp" srcset="#"/>
									<source media="(min-width: 576px)" data-srcset="img/@2x/karcher.png" type="image/png" srcset="#"/>
									<source data-srcset="img/@1x/webp/karcher.webp" type="image/webp" srcset="#"/><img src="#" data-src="img/@1x/karcher.png" alt=""/>
								</picture>
							</div>
							<div class="modalDelivery__pt col-md-6">
								<div class="h5"><strong>Можно мыть водой и&nbsp;при необходимости очищать моющими и&nbsp;дезинфицирующими средствами</strong></div>
								<div class="h5">А&nbsp;также проводить легкую очистку некоторыми растворителями. Так как изделия предназначены для эксплуатации вне помещений, их&nbsp;можно чистить системами типа &laquo;Karcher&raquo;</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<picture class="modalDelivery__vazons imgWrap lazy-modal lazy-modal--js">
									<source media="(min-width: 576px)" data-srcset="img/@2x/webp/banner.webp" type="image/webp" srcset="#"/>
									<source media="(min-width: 576px)" data-srcset="img/@2x/banner.png" type="image/png" srcset="#"/>
									<source data-srcset="img/@1x/webp/banner.webp" type="image/webp" srcset="#"/><img src="#" data-src="img/@1x/banner.png" alt=""/>
								</picture>
							</div>
							<div class="modalDelivery__pt col-md-6">
								<div class="h5"><strong>Поверхность из&nbsp;натурального камня любой фактуры</strong></div>
								<div class="h5">Изготавливаем материал по&nbsp;технологии &laquo;мытый бетон&raquo; &mdash; в&nbsp;результате наполнитель из&nbsp;камней выступает на&nbsp;поверхность и&nbsp;создает особую фактуру изделию.</div>
							</div>
						</div>
						<div class="modalDelivery__type">Можете выбрать <strong>любой вариант</strong> поверхности
						</div>
						<div class="modalDelivery__materials row text-center">
							<div class="col-6 col-md-3"><a href="img/@2x/material-1.jpg" data-fancybox="materials">
									<picture class="modalDelivery__imgWrap lazy-modal lazy-modal--js">
										<source media="(min-width: 576px)" srcset="#" data-srcset="img/@2x/webp/material-1.webp" type="image/webp"/>
										<source media="(min-width: 576px)" srcset="#" data-srcset="img/@2x/material-1.png" type="image/png"/>
										<source srcset="#" data-srcset="img/@1x/webp/material-1.webp" type="image/webp"/><img src="#" data-src="img/@1x/material-1.png" alt=""/>
									</picture></a>
								<div class="h5">Микс</div>
							</div>
							<div class="col-6 col-md-3"><a href="img/@2x/material-2.jpg" data-fancybox="materials">
									<picture class="modalDelivery__imgWrap lazy-modal lazy-modal--js">
										<source media="(min-width: 576px)" srcset="#" data-srcset="img/@2x/webp/material-2.webp" type="image/webp"/>
										<source media="(min-width: 576px)" srcset="#" data-srcset="img/@2x/material-2.png" type="image/png"/>
										<source srcset="#" data-srcset="img/@1x/webp/material-2.webp" type="image/webp"/><img src="#" data-src="img/@1x/material-2.png" alt=""/>
									</picture></a>
								<div class="h5">Златолит</div>
							</div>
							<div class="col-6 col-md-3"><a href="img/@2x/material-3.jpg" data-fancybox="materials">
									<picture class="modalDelivery__imgWrap lazy-modal lazy-modal--js">
										<source media="(min-width: 576px)" srcset="#" data-srcset="img/@2x/webp/material-3.webp" type="image/webp"/>
										<source media="(min-width: 576px)" srcset="#" data-srcset="img/@2x/material-3.png" type="image/png"/>
										<source srcset="#" data-srcset="img/@1x/webp/material-3.webp" type="image/webp"/><img data-src="img/@1x/material-3.png" alt="" src="#"/>
									</picture></a>
								<div class="h5">Красная яшма</div>
							</div>
							<div class="col-6 col-md-3"><a href="img/@2x/material-4.jpg" data-fancybox="materials">
									<picture class="modalDelivery__imgWrap lazy-modal lazy-modal--js">
										<source media="(min-width: 576px)" srcset="#" data-srcset="img/@2x/webp/material-4.webp" type="image/webp"/>
										<source media="(min-width: 576px)" srcset="#" data-srcset="img/@2x/material-4.png" type="image/png"/>
										<source srcset="#" data-srcset="img/@1x/webp/material-4.webp" type="image/webp"/><img src="#" data-src="img/@1x/material-4.png" alt=""/>
									</picture></a>
								<div class="h5">Пейзажная яшма</div>
							</div>
						</div>
					</div>
				</div>
				<!-- start sForm-->
				<div class="sForm">
					<picture class="sForm__imgWrap sForm__imgWrap--bg lazy-modal lazy-modal--js picture-bg">
						<source media="(min-width: 576px)" data-srcset="img/@2x/webp/formBg.webp" type="image/webp" srcset="#"/>
						<source media="(min-width: 576px)" data-srcset="img/@2x/formBg.jpg" type="image/jpg" srcset="#"/>
						<source data-srcset="img/@1x/webp/formBg.webp" type="image/webp" srcset="#"/><img src="#" data-src="img/@1x/formBg.jpg" alt=""/>
					</picture>
					<div class="container">
						<div class="h2">Расскажите о задаче — мы рассчитаем стоимость изготовления изделий </div>
						<div class="h4">И подготовим коммерческое предложение</div>
						<div class="row">
							<div class="sForm__col col-lg-6">
								<div class="sForm__imgWrap d-none d-lg-block">
									<picture class="sForm__founder imgWrap lazy-modal lazy-modal--js">
										<source media="(min-width: 576px)" data-srcset="img/@2x/webp/founder.webp" type="image/webp" srcset="#"/>
										<source media="(min-width: 576px)" data-srcset="img/@2x/founder.png" type="image/png" srcset="#"/>
										<source data-srcset="img/@1x/webp/founder.webp" type="image/webp" srcset="#"/><img src="#" data-src="img/@1x/founder.png" alt=""/>
									</picture>
									<div class="sForm__label">
										<div class="sForm__name">Михаил Паламарчук
										</div>
										<div class="sForm__position">Сооснователь компании ООО «УралМаф»
										</div>
									</div>
								</div>
								<div class="sForm__founderSm d-lg-none"><img class="sForm__founderImg lazy-modal lazy-modal--js" src="#" data-src="img/@2x/founder-sm.png" alt="" role="presentation"/>
									<div class="sForm__nameWrap">
										<div class="sForm__nameSm">Михаил Паламарчук
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
											<button class="form-wrap__btn btn" type="submit"> <span class="bg d-none d-lg-flex">обсудить задачу</span><span class="bg d-lg-none">заказать</span>
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
						</div>
					</div>
					<picture class="sForm__clouds imgWrap lazy-modal lazy-modal--js">
						<source media="(min-width: 576px)" data-srcset="img/@2x/webp/clouds.webp" type="image/webp" srcset="#"/>
						<source media="(min-width: 576px)" data-srcset="img/@2x/clouds.png" type="image/png" srcset="#"/>
						<source data-srcset="img/@1x/webp/clouds.webp" type="image/webp" srcset="#"/><img src="#" data-src="img/@1x/clouds.png" alt=""/>
					</picture>
				</div>
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
		<script src="js/common.js"></script><!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(62036422, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/62036422" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
	</body>
</html>