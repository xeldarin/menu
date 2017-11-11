<?php
use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\ActiveForm;
use kouosl\theme\widgets\Portlet;

$this->title = 'Index Sample';
$data['title'] = Html::encode($this->title);
$this->params['breadcrumbs'][] = $this->title;

$data['form'] = ActiveForm::begin(['id' => 'form-create','class'=>'horizontal-form']);

$this->params['pageTitle'] 	= $this->title;
$this->params['pageDesc'] 	= Module::t('sample', 'describes the sample features');



Portlet::begin(['title' => $this->title,'subTitle' => 'samples data','icon' => 'glyphicon glyphicon-cog']);

echo $this->render('index');

Portlet::end();

ActiveForm::end();


