<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

?>
<h1>Libros a la venta</h1>
<div class="row">

    <?php foreach ($libros as $libro) : ?>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <?= Html::img($libro->img) ?>
                <div class="card-body">
                    <h5 class="card-title"><?= Html::encode("{$libro->titulo}") ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= LinkPager::widget(['pagination' => $paginacion]) ?>