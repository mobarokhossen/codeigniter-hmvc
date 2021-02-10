<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author https://roytuts.com
 */
class Site extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('home');
    }

}
