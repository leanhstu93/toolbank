<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Product;
/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="panel">
        <?= $this->render('//element/panel-heading', array_pop($menu)) ?>
        <div class="panel-body container-fluid">
            <?= $form->errorSummary($model); ?>
            <div class="css-tab-language js-tab-language js-tab-language-vi" data-code="vi">
                <?= $form->field($model, 'name')->textInput(['class' => 'js__title form-control','required'])->label('Tiêu đề',['class' => 'required']) ?>

                <div class="form-group">
                    <label class="required control-label">
                        Đường dẫn
                    </label>
                    <div class="input-group input-group-icon">
                        <?= Html::textInput('SinglePage[seo_name]',$model->seo_name,array('class'=>'js__alias form-control')) ?>

                        <span class="input-group-addon">
                          <span class="checkbox-custom checkbox-default">
                            <input type="checkbox" id="inputCheckbox" class="js__toggle-auto-get-alias" name="inputCheckbox" checked="">
                            <label for="inputCheckbox"></label>
                              Lấy đường dẫn tự động
                          </span>
                        </span>
                    </div>
                    <span class="help-block" id="helpBlock"><?= Html::error($model,'seo_name'); ?></span>
                </div>

                <?= $form->field($model, 'desc')->textarea(['rows' => 3]) ?>

                <?= $form->field($model, 'content')->textarea(['class' => 'js-editor' ,
                    'rows' => 3]);
                ?>
                <?= $form->field($model, 'tags')->textInput(['maxlength' => true]) ?>
            </div>
            <?php
            $dataFieldLang = [
                [
                    'type' => 'text',
                    'name' => 'name',
                    'required' => 'required',
                    'class' => 'required'
                ],
                [
                    'type' => 'textarea',
                    'name' => 'desc',
                    'required' => '',
                    'class' => ''
                ],
                [
                    'type' => 'textarea',
                    'name' => 'content',
                    'required' => '',
                    'class' => ''
                ],
            ] ;
            ?>
            <?= $this->render('_form-lang',['model' => $dataLang,'dataFieldLang' => $dataFieldLang,'form' => $form])  ?>

        </div>
        <?= $this->render('//element/panel-heading',array_pop($menu)) ?>
        <div class="panel-body container-fluid">
            <?php

            ?>
        </div>
        <?= $this->render('//element/panel-heading',array_pop($menu)) ?>
        <div class="panel-body container-fluid">
            <?= $form->field($model, 'order')->textInput() ?>

            <?= $form->field($model, 'active')->dropDownList(Product::listActive()) ?>
        </div>
        <?= $this->render('//element/panel-heading', array_pop($menu)) ?>
        <div class="panel-body container-fluid">
            <div class="css-tab-language js-tab-language js-tab-language-vi">
                <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'meta_desc')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'meta_keyword')->textInput(['maxlength' => true]) ?>
            </div>
            <?php
            $dataFieldLang = [
                [
                    'type' => 'text',
                    'name' => 'meta_title',
                    'required' => '',
                    'class' => ''
                ],
                [
                    'type' => 'text',
                    'name' => 'meta_desc',
                    'required' => '',
                    'class' => ''
                ],
                [
                    'type' => 'text',
                    'name' => 'meta_keyword',
                    'required' => '',
                    'class' => ''
                ],
            ] ;
            ?>
            <?= $this->render('_form-lang',['model' => $dataLang,'dataFieldLang' => $dataFieldLang,'form' => $form])  ?>
        </div>
        <?= $this->render('//element/panel-heading', array_pop($menu)) ?>
        <div class="panel-body container-fluid">

            <div class="form-group">
                <?= Html::submitButton('Lưu', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>

</div>
