<?php

namespace app\modules\inventory;
use yii\base\Application;
use yii\base\BootstrapInterface;

/**
 * inventory module definition class
 */
class Module extends \yii\base\Module implements BootstrapInterface
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\inventory\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
     /**
     * Bootstrap method to be called during application bootstrap stage.
     * @param Application $app the application currently running
     */
    public function bootstrap($app)
    {
        if ($app instanceof Application) {
            $app->getUrlManager()->addRules([
                ['class' => 'yii\web\UrlRule', 'pattern' => $this->id, 'route' => $this->id . '/default/index'],
                ['class' => 'yii\web\UrlRule', 'pattern' => $this->id . '/add', 'route' => $this->id . '/add/index'],
                ['class' => 'yii\web\UrlRule', 'pattern' => $this->id . '/<id:\d+>/<action:(edit|del|print)>', 'route' => $this->id . '/add/<action>'],
                ['class' => 'yii\web\UrlRule', 'pattern' => $this->id . '/<id:\d+>', 'route' => $this->id . '/add/view'],
                ['class' => 'yii\web\UrlRule', 'pattern' => $this->id . '/<controller:[\w\-]+>/<action:[\w\-]+>', 'route' => $this->id . '/<controller>/<action>'],
            ], false);
        }
    }
}
