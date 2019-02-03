<?php

namespace yii2lab\navigation\domain\entities;

use yii2rails\domain\BaseEntity;
use yii2rails\domain\values\LangValue;

class BreadcrumbsEntity extends BaseEntity {
	
	protected $label;
	protected $url;
	protected $options;

	public function rules() {
		return [
			[['label'], 'required'],
			[['label', 'url'], 'trim'],
		];
	}
	
	public function fieldType() {
		return [
			'label' => LangValue::class,
		];
	}
	
}