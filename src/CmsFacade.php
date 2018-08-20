<?php

namespace Roocket2\Cms2;


use Illuminate\Support\Facades\Facade;

class CmsFacade extends Facade {

  protected static function getFacadeAccessor() {
    return 'cms';
  }
}