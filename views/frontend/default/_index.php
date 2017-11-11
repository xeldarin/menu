<?php
use diginova\theme\helpers\Html;
use diginova\theme\widgets\Portlet;

use diginova\sample\Module;

$this->title = Module::t('sample', 'Index Sample');
$data['title'] = Html::encode($this->title);
$this->params['breadcrumbs'][] = $this->title;

$this->params['pageTitle'] 	= $this->title;
$this->params['pageDesc'] 	= Module::t('sample', 'describes the sample features');


Portlet::begin(['title' => $this->title, 'icon' => 'icon-plus font-blue-hoki', 'tools' => [Portlet::TOOL_RELOAD,Portlet::TOOL_MINIMIZE,Portlet::TOOL_CLOSE,]]);

    echo $this->render('index');

Portlet::end();



