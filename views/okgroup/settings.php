<?php
/**
 * @Описание файла: "okgroup"
 * 
 * -------
 * 
 * Виджет Одноклассники - KodiCms
 * 
 * -------
 * @Разработчик Масюков Павел
 * @Дата создания 31.08.2014
 * @Email p.masyukov@yandex.ru
 * @URL https://github.com/Developer-RU
 * 
 */
?>
<div class="row">
    <div class="col-sm-3">
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title"><?php echo __('Settings'); ?></span>
            </div> 
            <div class="panel-body">
                <?php echo $form; ?>
                <div class="control-group">

                    <div class="controls">
                        <input class = 'form-control' id="setting_group" type="text" size="14" placeholder="Идентификатор">
                    </div>


                    <hr class="divider">

                    <div class="btn-wiz_size">
                        <div class="btn-wiz_t">
                            Ширина
                        </div>
                        <div class="btn-wiz_size_list_w">
                            <div class="btn-wiz_width  btn-wiz_size_list">
                                <div class="btn-wiz_size_i_w btn-wiz_size_i1">
                                    <div class="btn-wiz_size_i"></div>
                                </div>
                                <div class="btn-wiz_size_i_w btn-wiz_size_i2">
                                    <div class="btn-wiz_size_i"></div>
                                </div>
                                <div class="btn-wiz_size_i_w btn-wiz_size_i3">
                                    <div class="btn-wiz_size_i"></div>
                                </div>
                                <div class="btn-wiz_size_i_w btn-wiz_size_i4"> <!-- btn-wiz_size_i_w__active -->
                                    <div class="btn-wiz_size_i"></div>
                                </div>
                                <div class="btn-wiz_size_i_w btn-wiz_size_i5">
                                    <div class="btn-wiz_size_i"></div>
                                </div>
                                <div class="btn-wiz_size_i_w btn-wiz_size_i6">
                                    <div class="btn-wiz_size_i"></div>
                                </div>
                                <div class="btn-wiz_size_i_w btn-wiz_size_i7">
                                    <div class="btn-wiz_size_i"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br><br>
                    
                    <div class="controls">
                        <input class = 'form-control' id="width-num" type="text" size="11" value="Задать вручную (в px)">
                    </div>

                    <br><br>

                    <div class="btn-wiz_size">
                        <div class="btn-wiz_t">
                            Высота
                        </div>
                        <div class="btn-wiz_size_list_w">
                            <div class="btn-wiz_height btn-wiz_size_list">
                                <div class="btn-wiz_size_i_w btn-wiz_size_i1">
                                    <div class="btn-wiz_size_i"></div>
                                </div>
                                <div class="btn-wiz_size_i_w btn-wiz_size_i2">
                                    <div class="btn-wiz_size_i"></div>
                                </div>
                                <div class="btn-wiz_size_i_w btn-wiz_size_i3"> <!--   btn-wiz_size_i_w__active   -->
                                    <div class="btn-wiz_size_i"></div>
                                </div>
                                <div class="btn-wiz_size_i_w btn-wiz_size_i4">
                                    <div class="btn-wiz_size_i"></div>
                                </div>
                                <div class="btn-wiz_size_i_w btn-wiz_size_i5">
                                    <div class="btn-wiz_size_i"></div>
                                </div>
                                <div class="btn-wiz_size_i_w btn-wiz_size_i6">
                                    <div class="btn-wiz_size_i"></div>
                                </div>
                                <div class="btn-wiz_size_i_w btn-wiz_size_i7">
                                    <div class="btn-wiz_size_i"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br><br>
                    
                    <div class="controls">
                        <input class = 'form-control' id="height-num" type="text" size="11" value="Задать вручную (в px)">
                    </div>

                </div>
                <?php echo Form::close(); ?>
            </div>
        </div>
    </div> 

    <div class="col-sm-9">	
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title"><?php echo __('Тип виджета и внешний вид'); ?></span>
            </div> 
            <div class="panel-body">

                <div id="ok_group_widget"></div>
                <script>
                    !function(d, id, did, st) {
                        var js = d.createElement("script");
                        js.src = "http://connect.ok.ru/connect.js";
                        js.onload = js.onreadystatechange = function() {
                            if (!this.readyState || this.readyState == "loaded" || this.readyState == "complete") {
                                if (!this.executed) {
                                    this.executed = true;
                                    setTimeout(function() {
                                        OK.CONNECT.insertGroupWidget(id, did, st);
                                    }, 0);
                                }
                            }
                        }
                        d.documentElement.appendChild(js);
                    }(document, "ok_group_widget", "50582132228315", "{width:600,height:300}");
                </script>



                <noscript>Please enable JavaScript to view the widget Okgroup.</a></noscript><br>
                <hr class="divider">
                <p><b>Написать разработчику:  </b>   <a href="mailto:p.masyukov@yandex.ru" class="dsq-brlink">p.masyukov@yandex.ru</a></p>
                <p><b>Последняя версия с GitHub: </b>   <code>https://github.com/Developer-RU/Kodicms-plugin-vkgroup.git</code></p><br>
            </div>
        </div>
    </div>

</div>

<link href="/cms/plugins/okgroup/vendor/colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
<link href="/cms/plugins/okgroup/vendor/okgroup.css" rel="stylesheet">

<script>
    $(function() {
        // $('#setting_bgcolor').colorpicker();
    });
</script>
<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="/cms/plugins/okgroup/vendor/colorpicker/js/bootstrap-colorpicker.js"></script>