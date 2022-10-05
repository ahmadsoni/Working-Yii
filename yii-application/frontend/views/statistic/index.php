<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Statistic $model */
/** @var ActiveForm $form */
?>
<div class="Statistic">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'acces_time') ?>
        <?= $form->field($model, 'user_ip') ?>
        <?= $form->field($model, 'user_host') ?>
        <?= $form->field($model, 'path_info') ?>
        <?= $form->field($model, 'query') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- Statistic -->
