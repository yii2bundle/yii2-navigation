<?php

namespace yii2lab\navigation\domain;

use yii2rails\domain\enums\Driver;

/**
 * Class Domain
 * 
 * @package yii2lab\navigation\domain
 * @property-read \yii2lab\navigation\domain\interfaces\services\AlertInterface $alert
 * @property-read \yii2lab\navigation\domain\interfaces\services\BreadcrumbsInterface $breadcrumbs
 * @property-read \yii2lab\navigation\domain\interfaces\repositories\RepositoriesInterface $repositories
 */
class Domain extends \yii2rails\domain\Domain {
	
	public function config() {
		return [
			'repositories' => [
				'breadcrumbs' => Driver::MEMORY,
				'alert' => Driver::SESSION,
			],
			'services' => [
				'breadcrumbs',
				'alert',
			],
		];
	}
	
}