<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section class="scheme" id="scheme">
	<h2 class="scheme__title">Схемы финансирования</h2>
	<div class="scheme__inner">
		<div class="scheme__item">
			<img src="img/methods/ros-lizing.png" class="scheme__item-photo" alt="">
			<div class="scheme__item-title">
				Росагролизинг
			</div>
			<ol class="scheme__item-props">
				<li class="scheme__item-prop">от&nbsp;0%</li>
				<li class="scheme__item-prop">до&nbsp;8&nbsp;лет</li>
				<li class="scheme__item-prop">Первоначальный взнос от&nbsp;0%</li>
			</ol>
			<div class="scheme__item-content">
				<p class="scheme__item-text">
					Предлагает предприятиям АПК&nbsp;универсальные лизинговые решения для&nbsp;обновления парка техники.
				</p>
				<p class="scheme__item-text">
					Есть&nbsp;возможность выбора сезонного графика платежей. Рассмотрение по&nbsp;двум документам
				</p>
			</div>
			<a class="ways-link-to-form" href="#feedback">Нужна помощь с выбором</a>
		</div>
		<div class="scheme__item">
			<div class="scheme__item-photo">
				<img src="img/methods/credit.png" class="scheme__item-photo" alt="">
			</div>
			<div class="scheme__item-title">
				Льготный кредит
			</div>
			<ol class="scheme__item-props">
				<li class="scheme__item-prop">от&nbsp;0%</li>
				<li class="scheme__item-prop">&nbsp;до 5 лет</li>
				<li class="scheme__item-prop">Первоначальный взнос от&nbsp;0%</li>
			</ol>
			<div class="scheme__item-content">
				<p class="scheme__item-text">
					Программа от&nbsp;МСХ&nbsp;по&nbsp;субсидированию части стоимости новой техники.
				</p>
				<p class="scheme__item-text">
					Индивидуальный график платежей (оплата по&nbsp;основному долгу 1&nbsp;раз&nbsp;в&nbsp;год,
					в&nbsp;течении года оплата процентов).
				</p>
			</div>
			<a class="ways-link-to-form" href="#feedback">Нужна помощь с выбором</a>
		</div>
		<div class="scheme__item">
			<img src="img/methods/com-lizing.png" class="scheme__item-photo" alt="">
			<div class="scheme__item-title">
				Коммерческий лизинг
			</div>
			<ol class="scheme__item-props">
				<li class="scheme__item-prop">от 11% годовых</li>
				<li class="scheme__item-prop">&nbsp;до 5 лет</li>
				<li class="scheme__item-prop">Cезонный график</li>
			</ol>
			<div class="scheme__item-content">
				<p class="scheme__item-text">
					Платите “аренду” и пользуетесь техникой, спустя время - техника переходит к вам в собственность
				</p>
			</div>
			<a class="ways-link-to-form" href="#feedback">Нужна помощь с выбором</a>
		</div>
	</div>
	<div class="scheme__center-link-keeper">
		<a class="scheme__center-link" href="#feedback">Нужна помощь с выбором</a>
	</div>
</section>