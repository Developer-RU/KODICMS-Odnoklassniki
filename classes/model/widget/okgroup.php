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

class Model_Widget_Okgroup extends Model_Widget_Decorator{

	public function fetch_data()
	{
		$plugin = Plugins::get_registered('Okgroup');
		
		return array(
			'plugin' => $plugin
		);
	}

}
