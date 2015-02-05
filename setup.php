<?php

require "model.php";
require 'libs/Smarty.class.php';

class Model_Smarty extends Smarty {
    function __construct() {
        parent::__construct();
        $this->setTemplateDir('templates');
        $this->setCompileDir('templates_c');
        $this->setConfigDir('configs');
        $this->setCacheDir('cache');
    }
}
