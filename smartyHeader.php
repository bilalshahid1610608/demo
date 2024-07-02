<?php
use Smarty\Smarty;
require_once('./smarty-master/libs/Smarty.class.php');

class CustomSmarty extends Smarty
{
    function __construct()
    {
        parent::__construct();

        $this->caching = false;
        $this->cache_lifetime = 120;
        $this->setTemplateDir('./templates');
        $this->setCompileDir('./compile');
    }
}
?>


