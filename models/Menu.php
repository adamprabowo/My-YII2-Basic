<?php
/**
 * Created by
 * User: Adam
 * Date: 09/02/2020
 * Time: 3:55 PM
 */

namespace app\models;

use app\smartadmin\SideBar;
use Yii;
use yii\base\Model;

/**
 * Class Menu
 * @package app\models
 *
 * @property array $listMenu
 */
class Menu extends Model
{

    public static function listMenu()
    {
        $self = new self();
        return $self->listMenu;
    }

    /**
     * @return $this|array
     */
    public function getListMenu()
    {
        return [
            'options' => ['class' => 'sidebar-menu'],
            'items' => [
                ['label' => 'Dashboard', 'icon' => 'fa fa-dashboard', 
                    'items' => [
                        ['label' => 'Home ', 'url' => ['/site/index']],
                    ],
                ],

                ['label' => 'Inventory', 'icon' => 'fa fa-cubes',
                    'items' => [
                        ['label' => 'Barang Masuk', 'url' => ['/inventory/incoming']],
                    ],
                ],
                
            ],

        ];
    }
}