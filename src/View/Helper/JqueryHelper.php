<?php
namespace App\View\Helper;

use Cake\View\Helper;

class JqueryHelper extends Helper{
    public $helpers = ['Html'];

    public function jqueryLoad($html){
        return '<script type="text/javascript">' . $html . '</script>';
    }
}