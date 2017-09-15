<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru" prefix="og: http://ogp.me/ns# article: http://ogp.me/ns/article# product: http://ogp.me/ns/product# profile: http://ogp.me/ns/profile# fb: http://ogp.me/ns/fb#">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=<?=LANG_CHARSET?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <title><?$APPLICATION->ShowTitle()?></title>

    <link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />

    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/jquery.bxslider.css"/>
    <link type="text/css" rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/jquery.fancybox.css"/>
    <link href="sticky-footer-navbar.css" rel="stylesheet">

    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/script.js"></script>
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>-->

    <![endif]-->
    <?$APPLICATION->ShowHead()?>
</head>
<body class="">

<!--/*------------------------------------------------------------------------------------------*/-->

<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<!--/*------------------------------------------------------------------------------------------*/-->

<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">

                <a class="bg_mob_menu hidden-lg" href="/"></a>
                <a class="bg_mob_basket hidden-lg" href="/basket"></a>

                <div class="header_row">
                    <div class="img_logo">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include",
                            "",
                            array("AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"), false);?>
                    </div>

                    <div class="header_menu_panel">
                        <div class="header_menu hidden-sm hidden-xs">
                            <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "horizontal_menu",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	),
	false
);?>
                        </div>
                        <div class="header_contacts">
                            <div class="phone shadow_text">
                                <a class="background_phone" href="tel:+74991107109">+7 (499) 110&bull;71&bull;09</a>
                            </div>
                            <div class="call_back shadow_text">
                                <a class="background_call_back" href="/request-call" data-toggle="modal" data-target="#myModal">заказать звонок</a>
                            </div>
                            <div class="mini_basket shadow_text_basket pull_right hidden-sm hidden-xs">
                                <a class="background_basket" href="/basket">Корзина</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--/*------------------------------------------------------------------------------------------*/-->

<div class="main_page_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <?$APPLICATION->IncludeComponent("bitrix:main.include",
                    "",
                    array("AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/background_main.php"), false);?>
            </div>
            <div class="col-lg-12 col-sm-12">
                <div class="block_banner_text row">
                    <?$APPLICATION->IncludeComponent("bitrix:main.include",
                        "",
                        array("AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH."/include_areas/banner_text.php"), false);?>
                </div>
            </div>
        </div>
    </div>
</div>


<!--/*------------------------------------------------------------------------------------------*/-->

<div class="main_content">
    <div class="container">
        <div class="footer_background">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    Заказать МДФ фасады
                </div>
            </div>
        </div>
    </div>
</div>
