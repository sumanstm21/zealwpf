<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Gallery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gallery-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'image1')->fileInput() ?>

    <?= $form->field($model, 'image2')->fileInput() ?>

    <?= $form->field($model, 'image3')->fileInput() ?>

    <?= $form->field($model, 'image4')->fileInput() ?>

    <?= $form->field($model, 'image5')->fileInput() ?>

    <?= $form->field($model, 'image6')->fileInput() ?>

    <?= $form->field($model, 'image7')->fileInput() ?>

    <?= $form->field($model, 'image8')->fileInput() ?>

    <?= $form->field($model, 'image9')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
