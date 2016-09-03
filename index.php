<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 03/09/2016
 * Time: 01:46 PM
 */

use App\controllers\models\indexModel;

require_once "vendor/autoload.php";
$model = new indexModel();
echo $model->index();
