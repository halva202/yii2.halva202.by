<?php


use skeeks\yii2\ckeditor\CKEditorWidget;
use skeeks\yii2\ckeditor\CKEditorPresets;

use yii\widgets\ActiveForm;

?>

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'text')->widget(CKEditorWidget::className(), [
        'options' => ['rows' => 6],
        'preset' => CKEditorPresets::FULL
    ]) ?>
	
	<?php ActiveForm::end(); ?>
