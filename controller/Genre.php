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
 * @copyright  Copyright (c) 2010-2011 Nico Schmitz
 * @since 01.04.2010
 * @version 0.1
 * @license http://creativecommons.org/licenses/by-nc-nd/3.0/ Creative Commons Attribution-NonCommercial-NoDerivs 3.0 Unported License
 */
require_once('controller/GenreAbstract.php');

class GenreShowController extends GenreAbstractController {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->overview();
    }

    public function overview() {

    }

    public function single() {

    }

    public function autocomplete() {
        if (!isset($_REQUEST['term']) || empty($_REQUEST['term'])) {
            $filter = 'type="movie"';
        } else {
            $filter = 'type="movie" AND name like "' . $_REQUEST['term'] . '%"';
        }
        $data = $this->genreRepository->fetch(array('name as label', 'id as value'), $filter);
        if (!empty($data)) {
            require_once('library/Zend/Json.php');
            $json = Zend_Json::encode($data);
            echo $json;
        }
    }

}