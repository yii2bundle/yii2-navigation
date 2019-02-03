<?php

namespace yii2lab\navigation\domain\repositories\session;

use yii2rails\extension\session\repositories\base\BaseActiveSessionRepository;
use yii2lab\navigation\domain\interfaces\repositories\AlertInterface;

class AlertRepository extends BaseActiveSessionRepository implements AlertInterface {
	
	public $isFlash = true;
	
}