<?php
use frontend\models\NewsCategory;
use  yii\helpers\ArrayHelper;
use yii\helpers\Html;
?>
<div class="col-md-12 col-lg-6">
    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">
                <h3>Cấu hình danh mục bài viết</h3>
                <div class="panel-actions panel-actions-keep">
                    <a class="panel-action icon wb-minus" aria-expanded="true" data-toggle="panel-collapse"
                       aria-hidden="true"></a>
                    <a class="panel-action icon wb-expand" data-toggle="panel-fullscreen" aria-hidden="true"></a>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <?php

            foreach ($data as $key_parent => $item){
                if(empty($item['name'])) continue;
                ?>
                <div class="form-group">
                    <label class="col-sm-4 control-label form-label"><?php echo $item['name'] ?>:</label>
                    <div class="col-sm-8">
                        <?php
                        $bannerCategory = NewsCategory::find()->where(['active' => 1])->all();
                        $listdata = ArrayHelper::map($bannerCategory, 'id', 'name');
                        ?>
                        <select name="Custom[CUSTOM_NEWS_CATEGORY][<?php echo $key_parent ?>][data]" class="form-control">
                            <?php
                            foreach ($listdata as $key => $name){
                                $selected = $key == $item['data'] ? $selected = 'selected' : '';
                                ?>
                                <option <?php echo $selected ?> value="<?php echo $key ?>">  <?php echo $name ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            <?php } ?>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <?php echo Html::submitButton('Lưu dữ liệu',['class' => 'btn btn-primary float-right']); ?>
                </div>
            </div>
        </div>
    </div>
</div>