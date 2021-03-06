<?php

namespace App\Views;

use Breadcrumb\Controllers\Breadcrumb;

class Animals extends View
{
    public function index($dataSet)
    {
        $json = json_encode($dataSet, true);
        $template = $this->getTemplateHelper(__METHOD__);
        $breadcrumb = Breadcrumb::getInstance();
        $this->setTemplate($template->getHTML())->setParam('headerTitle', 'Animals - Sample Application');
        // var_dump($json);exit;
        $this->setParam('dataSet', $json)->render();
    }
}
