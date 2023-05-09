<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>hola yiiframework</h1>
<?php 
if ($mensaje)
{
    echo(Html::tag('div',Html::encode($mensaje), ['class'=>'alert alert-danger']));
}
?>
<?php $formulario = ActiveForm::begin(); ?>
<?= $formulario->field($model, 'valora') ?>
<?= $formulario->field($model, 'valorb') ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>