<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pelanggan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pelanggan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'judul_film')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'judul_buku')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'judul_lagu')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
