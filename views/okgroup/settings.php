<?php
/**
 * @Описание файла: "okgroup 2.0"
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

                    <div class="input-group">
                        <div class="input-group-addon">Group</div>
                        <?php echo Form::input('setting[group]', $plugin->get('group'), array('id' => 'setting_group', 'class' => 'form-control', 'placeholder' => Arr::get($plugin->labels(), 'group'))); ?>
                    </div>

                    <hr class="divider">

                    <div class="btn-wiz_size">
                        <div class="btn-wiz_t">
                            Ширина
                        </div>
                        <div class="btn-wiz_size_list_w">
                            <div class="btn-wiz_width  btn-wiz_size_list">

                                <?php for ($i = 1; $i <= 8; $i++): ?>
                                    <div id="w<?php echo $i ?>" class="btn-wiz_size_i_w btn-wiz_size_i<?= $i ?>">
                                        <div onclick="add('width', '<?php echo $i?>');" class="btn-wiz_size_i"></div>
                                    </div>
                                <?php endfor; ?>
                                <!--   btn-wiz_size_i_w__active   -->

                            </div>
                        </div>
                    </div>

                    <br><br>

                    <div class="input-group">
                        <?php echo Form::input('setting[width]', $plugin->get('width'), array('id' => 'setting_width', 'class' => 'form-control', 'placeholder' => Arr::get($plugin->labels(), 'manual'))); ?>
                        <div class="input-group-addon">.px</div>
                    </div>

                    <br><br>

                    <div class="btn-wiz_size">
                        <div class="btn-wiz_t">
                            Высота
                        </div>
                        <div class="btn-wiz_size_list_w">
                            <div class="btn-wiz_height btn-wiz_size_list">                                

                                <?php for ($i = 1; $i <= 8; $i++): ?>
                                    <div id="h<?php echo $i ?>" class="btn-wiz_size_i_w btn-wiz_size_i<?= $i ?>">
                                        <div onclick="add('height', '<?php echo $i ?>');" class="btn-wiz_size_i"></div>
                                    </div>
                                <?php endfor; ?>
                                <!--   btn-wiz_size_i_w__active   -->

                            </div>
                        </div>
                    </div>

                    <br><br>

                    <div class="input-group">
                        <?php echo Form::input('setting[height]', $plugin->get('height'), array('id' => 'setting_height', 'class' => 'form-control', 'placeholder' => Arr::get($plugin->labels(), 'manual'))); ?>
                        <div class="input-group-addon">.px</div>
                    </div>

                </div>
                <?php echo Form::close(); ?>
            </div>
        </div>
    </div> 

    <div class="col-sm-9">	
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title"><?php echo __('Preview'); ?></span>
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
                    }(document, "ok_group_widget", "<?php echo $plugin->get('group'); ?>", "{width:<?php echo $plugin->get('width'); ?>,height:<?php echo $plugin->get('height'); ?>}");
                </script>
                <noscript>Please enable JavaScript to view the widget Okgroup.</a></noscript>

            </div>
        </div>
    </div>

</div>

<link href="/cms/plugins/okgroup/vendor/okgroup.css" rel="stylesheet">
<script type="text/javascript">
    var id = null;
    var inp = null;
    function add(inp, id) {
        $("#setting_"+inp).attr("value",id+'00');
        if(inp == 'height')
            $( "#h" + id ).addClass( "btn-wiz_size_i_w__active" );
        else
            $( "#w" + id ).addClass( "btn-wiz_size_i_w__active" );
    }
</script>

