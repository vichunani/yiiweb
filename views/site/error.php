<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="banner">

    <?= $this->render('//layouts/inc/sidebar') ?>

    <div class="w31_banner_nav_right">
        <div style="padding: 6em 5em;">
            <h2><?= Html::encode($this->title)?></h2>
            <div>
                <?= nl2br(Html:: encode($message))?>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

  

</div>
