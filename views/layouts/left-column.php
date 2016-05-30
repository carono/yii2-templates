<?php
/**
 * @var \yii\web\View $this
 * @var string        $content
 */

$this->beginContent('@app/views/layouts/main.php'); ?>
<div class="col-lg-2">
    <?php
    echo \yii\bootstrap\Nav::widget(
        [
            'options' => ['class' => ' nav nav-pills nav-stacked'],
            'items'   => $this->context->getMenu()
        ]
    );
    ?>
</div>
<div id="content">
    <?php echo $content; ?>
</div>
<?php $this->endContent(); ?>
