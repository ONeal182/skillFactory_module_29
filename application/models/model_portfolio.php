<?php
class Model_Portfolio extends Model
{
	public function get_data()
	{
		// Здесь мы просто симулируем реальные данные.
		return array(
			array(
				'Year' => '2012',
				'Site' => 'http://DunkelBeer.ru',
				'Description' => 'Промо-сайт темного пива Dunkel от немецкого производителя Löwenbraü выпускаемого в России пивоваренной компанией "CАН ИнБев".',
				'img' => '/assets/images/1.jpeg'
			),
			array(
				'Year' => '2012',
				'Site' => 'http://ZopoMobile.ru',
				'Description' => 'Русскоязычный каталог китайских телефонов компании Zopo на базе Android OS и аксессуаров к ним.',
				'img' => '/assets/images/2.jpg'
			),
		);
	}
}
