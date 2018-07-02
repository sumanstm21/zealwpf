<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Quicknotice */

$this->title = 'Create Quicknotice';
$this->params['breadcrumbs'][] = ['label' => 'Quicknotices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quicknotice-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
