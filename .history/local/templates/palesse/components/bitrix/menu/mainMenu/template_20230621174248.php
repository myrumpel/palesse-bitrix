<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>



<ul class='header__menu'>
<?
foreach($arResult as $arItem):
	
	;
?>
<?if($arItem["SELECTED"]):?>
                            <li class="header__menu-item">
                                <a href="/<?=$arItem["LINK"]?>" class="header__menu-link header__menu-link--active">
									<span class="header__menu-span">
									<?=$arItem["TEXT"]?>
									</span>
                                </a>
                            </li>
                            
														<?else:?>
															<li class="header__menu-item">
																	<a href="<?=$arItem["LINK"]?>" class="header__menu-link ">
										<span class="header__menu-span">
										<?=$arItem["TEXT"]?>
										</span>
																	</a>
															</li>
															
															<?endif?>
															
															<?endforeach?>
														</ul>


<?endif?>