<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Fornecedor */

$this->title = 'Visualização de dados cadastrados';
$this->params['breadcrumbs'][] = ['label' => 'Fornecedores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pull-right">       
    <?= Html::a('<b class="fa fa-arrow-left"></b> Voltar', ['index'], ['class' => 'btn btn-default','title' => 'Voltar', 'id' => 'modal-btn-voltar'])?>
</div>
<hr>
<div class="fornecedor-view">

    <div class="panel panel-success">
        <div class="panel-heading">
        <h5 class="panel-title">DADOS DO FORNECEDOR</h5>
        </div>
        <div class="box box-success"></div>
        <div class="panel-body">

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    //'id',
                    'nome',
                    'email:email',
                    'telefone',
                    'cnpj',
                    'rua',
                    'numero',
                    //'complemento',
                    'bairro',
                    'cidade',
                    'estado',
                ],
            ]) ?>
        </div>
    </div>
</div>
