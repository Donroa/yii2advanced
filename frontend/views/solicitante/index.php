<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\SolicitanteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Solicitantes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solicitante-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Solicitante', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'apellido',
            'numero_identificacion',
            'fecha_nacimiento',
            // 'nacionalidad',
            // 'estado_civil_id',
            // 'sexo_id',
            // 'email:email',
            // 'telefono_movil',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
