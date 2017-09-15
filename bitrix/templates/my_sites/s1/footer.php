
<!--/*----------------------------------------------------------------------------------------*/-->

<!--</div>-->

<footer class="footer" id="footer">
    <div class="container">
        <div class="footer_background">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-xs-12">
                <div class="footer_logo">
<!--                    <div class="position_logo">-->
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                            array("AREA_FILE_SHOW" => "file", "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"),
                            false);?>
<!--                    </div>-->
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-xs-12">
                <div class="footer_menu hidden-sm hidden-xs">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "horizontal_niz_menu",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "top",
                            "USE_EXT" => "N",
                            "COMPONENT_TEMPLATE" => "horizontal_niz_menu"
                        ),
                        false
                    );?>
                    <div class="clearfix"></div>
                </div>

                <div class="footer_block_call_back">
                    <div class="footer_call_back">
<!--                        <a class="background_call_back" href="/request-call" data-toggle="modal" data-target="#myModal">заказать звонок</a>-->
                        <a href="/request-call" data-toggle="modal" data-target="#myModal">заказать звонок</a>
                    </div>
                    <div class="footer_phone">
<!--                        <a class="background_phone" href="tel:+74991107109">+7 (499) 110&bull;71&bull;09</a>-->
                        <a href="tel:+74991107109">+7 (499) 110&bull;71&bull;09</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div class="line_row">
                <div class="copyright">
                    2017 BestMebelShop - лучший выбор в интернете
                </div>
                    <div class="footer_up">
                        <div class="footer_up_button pull_right">
                            <i class="fa fa-chevron-circle-up" aria-hidden="true"></i>
                        </div>
                    </div>
                <div class="clearfix"></div>
                </div>
            </div>
        </div>
        </div>
    </div>
</footer>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Заказать звонок</h4>
            </div>
            <div class="modal-body">
                Заказать звонок<br>
                <input type="text" data-provide="typeahead">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>