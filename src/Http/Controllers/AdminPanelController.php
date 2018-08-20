<?php

namespace Roocket2\Cms2\Http\Controllers;

use Cms;

class AdminPanelController extends BaseController {

  public function index() {
    return Cms::listAdmin();
  }
}