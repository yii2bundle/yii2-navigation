<?php

namespace yii2lab\navigation\domain\interfaces\services;

use yii2rails\domain\interfaces\services\CrudInterface;

interface BreadcrumbsInterface extends CrudInterface {
	
	public function create($title, $url = null, $options = null);
	
}