<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Quicknotice */

$this->title = 'Update Quicknotice: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Quicknotices', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="quicknotice-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
