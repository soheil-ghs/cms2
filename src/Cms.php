<?php

namespace Roocket2\Cms2;

use Roocket2\Cms2\Models\Admin;

class Cms {

  public function listAdmin() {
    return Admin::pluck('username');
  }
}