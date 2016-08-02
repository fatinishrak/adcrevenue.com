<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MonitoringchokSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="monitoringchok-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kromikNong') ?>

    <?= $form->field($model, 'noticeReceivedDate') ?>

    <?= $form->field($model, 'upazilaNam') ?>

    <?= $form->field($model, 'mamlaNong') ?>

    <?= $form->field($model, 'mamlarBochor') ?>

    <?php // echo $form->field($model, 'biggAdaloterNam') ?>

    <?php // echo $form->field($model, 'emailSendingDate') ?>

    <?php // echo $form->field($model, 'sfReceiptDate') ?>

    <?php // echo $form->field($model, 'sfReceiptOriginalDate') ?>

    <?php // echo $form->field($model, 'sfSendToJusticeDate') ?>

    <?php // echo $form->field($model, 'montobo') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
