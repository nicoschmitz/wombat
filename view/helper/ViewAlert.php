<?php

/**
 * wombat
 * 
 * LICENCE
 * 
 * This work is licensed under the Creative Commons Attribution-NonCommercial-NoDerivs 3.0 Unported License. 
 * To view a copy of this license, visit http://creativecommons.org/licenses/by-nc-nd/3.0/ or send a letter to Creative Commons, 
 * 444 Castro Street, Suite 900, Mountain View, California, 94041, USA.
 * 
 * @name wombat
 * @author Nico Schmitz - mail@nicoschmitz.eu
 * @copyright  Copyright (c) 2010-2012 Nico Schmitz
 * @license http://creativecommons.org/licenses/by-nc-nd/3.0/ Creative Commons Attribution-NonCommercial-NoDerivs 3.0 Unported License
 */
require_once('library/Zend/View/Helper/Abstract.php');

class View_Helper_ViewAlert extends Zend_View_Helper_Abstract {

    public function viewAlert($type, $title, $msg) {
        $this->view->type = $type;
        $this->view->title = $title;
        $this->view->msg = $msg;

        return $this->view->render('alert.phtml');
    }

}