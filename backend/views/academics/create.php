<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Academics */

$this->title = 'Create Academics';
$this->params['breadcrumbs'][] = ['label' => 'Academics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academics-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
