<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Admission */

$this->title = 'Create Admission';
$this->params['breadcrumbs'][] = ['label' => 'Admissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admission-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
