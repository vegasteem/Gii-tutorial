<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Appliances */

$this->title = 'Update Appliances: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Appliances', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="appliances-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
