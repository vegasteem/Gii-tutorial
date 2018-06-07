<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Appliances */

$this->title = 'Create Appliances';
$this->params['breadcrumbs'][] = ['label' => 'Appliances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appliances-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
