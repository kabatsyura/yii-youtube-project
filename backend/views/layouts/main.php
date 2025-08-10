<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$this->beginContent('@backend/views/layouts/base.php');
?>
<main class="d-flex flex-row me-3 justify-content-start align-items-stretch">
    <?php echo $this->render('_sidebar') ?>

    <div class="content-wrapper p-4">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>
<?php $this->endContent(); ?>