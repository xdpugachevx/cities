<?php

use yii\helpers\Html;


/* @var yii\web\View $this */
/* @var common\models\City $model */
/* @var array $regionsList */

$this->title = 'Create City';
$this->params['breadcrumbs'][] = ['label' => 'Cities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'regionsList' => $regionsList,
    ]) ?>

</div>
