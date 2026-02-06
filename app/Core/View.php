<?php

namespace App\Core;

use Smarty;

class View
{
    public static function render(string $template, array $data = [])
    {
        $smarty = new Smarty();

        $smarty->setTemplateDir(__DIR__ . '/../../resources/views');
        $smarty->setCompileDir(__DIR__ . '/../../storage/views');

        foreach ($data as $key => $value) {
            $smarty->assign($key, $value);
        }

        $smarty->display($template . '.tpl');
    }
}
