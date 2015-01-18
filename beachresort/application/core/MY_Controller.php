<?php

/**
 * core/BeachController.php
 *
 * Default application controller
 */

class MY_Controller extends CI_Controller {

  protected $data = array();
  protected $id;

  /**
   * Constructor.
   * Establish view parametsrs.
   */
  function __construct() {
    parent::__construct();
    $this->data = array();
    $this->data['pagetitle'] = 'Beach Resort';
  }

  /**
   * Render this page.
   */
  function render() {
    $this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
    $this->data['data'] = &$this->data;
    $this->parser->parse('template', $this->data);
  }

}

