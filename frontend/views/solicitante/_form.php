<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Solicitante */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="solicitante-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numero_identificacion')->textInput(['maxlength' => true]) ?>

    <?php
        echo $form->field($model, 'fecha_nacimiento')->widget(DatePicker::className(),[
                                                                'dateFormat' => 'yyyy-MM-dd',
                                                                'clientOptions' => [
                                                                    'yearRange' => '-115:+0',
                                                                    'changeYear' => true],
                                                                    'options' => ['class' => 'form-control', 'style' => 'width:25%']
                                                        ])
    ?>

    <?= $form->field($model, 'nacionalidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado_civil_id')->dropDownList($model->listaEstadoCivil, ['prompt' => 'Seleccione Uno']); ?>

    <?= $form->field($model, 'sexo_id')->dropDownList($model->listaSexo, ['prompt' => 'Seleccione Uno']); ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono_movil')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
