<?php

use yii\helpers\Html;

$lang = \app\models\Lang::getCurrent()->url;

?>

<div class="module bg-dark-60 pt-0 pb-0 parallax-bg testimonial" data-background="/assets/images/slider-2.jpg">
    <div class="testimonials-slider pt-140 pb-140">
        <ul class="slides">
            <?php if (!empty($model)) { ?>
                <?php foreach ($model as $item) { ?>
                    <li>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="module-icon"><span class="icon-quote"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <blockquote
                                            class="testimonial-text font-alt">
                                        <?= $item->{'content_' . $lang} ?>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-sm-offset-4">
                                    <div class="testimonial-author">
                                        <div class="testimonial-caption font-alt">
                                            <div class="testimonial-title"><?= $item->{'author_' . $lang} ?></div>
                                            <div class="testimonial-descr"><?= $item->product ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>
</div>
