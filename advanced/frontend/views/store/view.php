<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Store */
?>
<div class="store-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'store_id',
            'manager_staff_id',
            'address_id',
            'last_update',
        ],
    ]) ?>

</div>
