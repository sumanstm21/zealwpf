<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\search\AcademicsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Academics';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academics-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Academics', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'email:email',
            'title',
            'created_at',
            [ 'attribute' => 'image',
                'format' => 'html',
                'label' => 'Image',
                'value' => function ($data) {
                return Html::img(Yii::$app->request->BaseUrl.'/web/images/' . $data['image'],
                    ['width' => '90px']);
                },
                ],
//            'image',
//            'short_description:ntext',
            //'description:ntext',
            //'admission_description:ntext',
            //'file',
            
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
