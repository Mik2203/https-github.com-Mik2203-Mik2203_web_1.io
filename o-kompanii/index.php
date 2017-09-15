<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?>

<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.fancybox.pack.js');?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/jquery.fancybox.css');?>

    <div class="main_kom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_kom_menu">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:breadcrumb",
                            "",
                            Array(
                                "PATH" => "",
                                "SITE_ID" => "s1",
                                "START_FROM" => "0"
                            )
                        );?>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="bd_blocks">
                        <div class="col-lg-9">
                            <div class="main_kom_block_1">
                                <div class="text_1_block_1">
                                    <div class="Zagolovok">О нас</div>
                                    <p>В России интересы IKEA представляют её дочерние компании. ООО «ИКЕА МОС (Торговля и Недвижимость)»
                                        развивает сеть торговых центров «Мега», закупками занимается ООО «ИКЕА Торг» (представлена офисами
                                        в Москве и Новосибирске), а непосредственно продажей ООО «ИКЕА Дом». Первый комплекс IKEA
                                        открылся в Химках в марте 2000 года, первая «Мега» (площадь — 150 тыс. м², объём инвестиций —
                                        $200 млн) — в декабре 2002 года рядом с южной окраиной Москвы.</p>
                                    <br>
                                    <p>На первое января 2016 года в России действует четырнадцать магазинов сети (в том числе три в Москве,
                                        два в Санкт-Петербурге и по одному в Екатеринбурге, Казани, Краснодаре, Нижнем Новгороде,
                                        Новосибирске, Омске, Ростове-на-Дону, Самаре, Уфе).</p>
                                    <br>
                                    <p>В октябре 2010 года новый генеральный директор IKEA в России Пер Вендшлаг заявил, что в течение
                                        ближайших трёх-пяти лет компания не собирается строить новых объектов, а будет поддерживать
                                        и обновлять имеющиеся[18].</p>
                                    <br>
                                    <p>В январе 2016 года компания IKEA приобрела в аренду землю для строительства крупнейшего торгового
                                        комплекса в Красноярске[19].</p>
                                    <br>
                                    <p>В Тихвинском районе Ленинградской области дочерней компании IKEA — ООО «Сведвуд-Тихвин»
                                        принадлежит мебельная фабрика, лесопильный цех и цех склейки, построенные в 2002 году.
                                        Кроме того, у IKEA в Карелии есть лесопильное производство; в деревне Есипово
                                        (Солнечногорский район Московской области) открыта в 2006 году вторая мебельная
                                        фабрика ООО «Сведвуд Есипово». Поставщиками мебели также являются такие компании,
                                        как «Шатура» и ОАО «ВКДП».</p>
                                    <br>
                                    <p>7 сентября 2016 года IKEA открыла крупнейшую в России мебельную фабрику, стоимость которой
                                        составляет €50 млн. Расположена она в Новгородской области – в деревне Подберезье.</p>
                                </div>
                            </div>

                            <div class="main_kom_block_1">
                                <div class="text_1_block_1">
                                    <div class="Zagolovok">Сертификаты</div>
                                    <div style="width:100%; text-align:center;">
                                        <a href="<?=SITE_TEMPLATE_PATH?>/images/img_001.jpg" class="fancybox">
                                            <img alt="Фото" src="<?=SITE_TEMPLATE_PATH?>/images/img_001.jpg" title=""
                                                 style="margin:0 auto 10px; width: 90%; float: none;">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            $(document).ready(function() {

                                $(".fancybox").fancybox();
                            });
                        </script>

                        <div class="col-lg-3">
                            <div class="main_kom_block_2">
                                <div class="text_1_block_2">
                                    <div class="Zagolovok">На производстве</div>
                                    <div style="width:100%;text-align:center;">
                                        <a href="<?=SITE_TEMPLATE_PATH?>/images/img_01.jpg" class="fancybox">
                                            <img alt="Фото" src="<?=SITE_TEMPLATE_PATH?>/images/img_01.jpg" title="" style="margin:0 auto 10px;width: 90%;float: none;">
                                        </a>
                                    </div>

                                    <div class="col-lg-6">
                                        <div style="width:100%;text-align:center;">
                                            <a href="<?=SITE_TEMPLATE_PATH?>/images/img_06.jpg" class="fancybox">
                                                <img alt="Фото" src="<?=SITE_TEMPLATE_PATH?>/images/img_06.jpg" title="" style="margin:0 auto 10px;width: 90%;float: none;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div style="width:100%;text-align:center;">
                                            <a href="<?=SITE_TEMPLATE_PATH?>/images/img_05.jpg" class="fancybox">
                                                <img alt="Фото" src="<?=SITE_TEMPLATE_PATH?>/images/img_05.jpg" title="" style="margin:0 auto 10px;width: 90%;float: none;">
                                            </a>
                                        </div>
                                    </div>

                                    <div style="width:100%;text-align:center;">
                                        <a href="<?=SITE_TEMPLATE_PATH?>/images/img_02.jpg" class="fancybox">
                                            <img alt="Фото" src="<?=SITE_TEMPLATE_PATH?>/images/img_02.jpg" title="" style="margin:0 auto 10px;width: 90%;float: none;">
                                        </a>
                                    </div>

                                    <div style="width:100%;text-align:center;">
                                        <a href="<?=SITE_TEMPLATE_PATH?>/images/img_03.jpg" class="fancybox">
                                            <img alt="Фото" src="<?=SITE_TEMPLATE_PATH?>/images/img_03.jpg" title="" style="margin:0 auto 10px;width: 90%;float: none;">
                                        </a>
                                    </div>

                                    <div class="col-lg-6">
                                        <div style="width:100%;text-align:center;">
                                            <a href="<?=SITE_TEMPLATE_PATH?>/images/img_06.jpg" class="fancybox">
                                                <img alt="Фото" src="<?=SITE_TEMPLATE_PATH?>/images/img_06.jpg" title="" style="margin:0 auto 10px;width: 90%;float: none;">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div style="width:100%;text-align:center;">
                                            <a href="<?=SITE_TEMPLATE_PATH?>/images/img_05.jpg" class="fancybox">
                                                <img alt="Фото" src="<?=SITE_TEMPLATE_PATH?>/images/img_05.jpg" title="" style="margin:0 auto 10px;width: 90%;float: none;">
                                            </a>
                                        </div>
                                    </div>

                                    <div style="width:100%;text-align:center;">
                                        <a href="<?=SITE_TEMPLATE_PATH?>/images/img_02.jpg" class="fancybox">
                                            <img alt="Фото" src="<?=SITE_TEMPLATE_PATH?>/images/img_02.jpg" title="" style="margin:0 auto 10px;width: 90%;float: none;">
                                        </a>
                                    </div>

                                    <div style="width:100%;text-align:center;">
                                        <a href="<?=SITE_TEMPLATE_PATH?>/images/img_01.jpg" class="fancybox">
                                            <img alt="Фото" src="<?=SITE_TEMPLATE_PATH?>/images/img_01.jpg" title="" style="margin:0 auto 10px;width: 90%;float: none;">
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>