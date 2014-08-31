<?php

defined('SYSPATH') or die('No direct access allowed.');

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

class Plugin_Okgroup extends Plugin_Decorator {


    public function rules() {
        return array(
            'group' => array(
                array('not_empty'),
                array('min_length', array(':value', 1)),
                array('max_length', array(':value', 50)),
                array('alpha_dash'),
            ),
            'width' => array(
                array('not_empty'),
                array('numeric'),
            ),
            'height' => array(
                array('not_empty'),
                array('numeric'),
            ),
            'btncolor' => array(
                array('color'),
            )
        );
    }

    public function default_settings() {
        return array(
        'width' => 220,
        'height' => 400,
        );
    }

    public function filters() {
        return array(
            'group' => array(
                array('trim')
            ),
            'width' => array(
                array('intval')
            ),
            'height' => array(
                array('intval')
            ),
            'btncolor' => array(
                array('trim')
            )
        );
    }

    public function labels() {
        return array(
            'group' => __('Group'),
            'users' => __('Users'),
            'news' => __('News'),
            'width' => __('Width'),
            'height' => __('Height'),            
            'manual' => __('Manual'),
            'btncolor' => __('Buttons'),
        );
    }
}
