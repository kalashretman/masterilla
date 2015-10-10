<?php
namespace app\rbac;

use Yii;
use yii\rbac\Rule;

class UserGroupRule extends Rule
{
    public $name = 'userGroup';

    public function execute($user, $item, $params)
    {
        if (!\Yii::$app->user->isGuest) {
            $group = \Yii::$app->user->identity->group;
            if ($item->name === 'admin') {
                return $group == 'admin';
            } elseif ($item->name === 'BUYER') {
                return $group == 'admin' || $group == 'BUYER';
            } elseif ($item->name === 'ARTISAN') {
                return $group == 'admin' || $group == 'ARTISAN';
            }
        }
        return true;
    }
}