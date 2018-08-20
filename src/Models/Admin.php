<?php

namespace Roocket2\Cms2\Models;


use Illuminate\Database\Eloquent\Model;

class Admin extends Model {

  protected $table= 'admin';
  protected $fillable = ['username'];

  /**
   * Get the relationships for the entity.
   *
   * @return void
   */
  public function getQueueableRelations() {

  }

  /**
   * Get the connection of the entity.
   *
   * @return string|null
   */
  public function getQueueableConnection() {

  }

  /**
   * Retrieve the model for a bound value.
   *
   * @param  mixed $value
   * @return void
   */
  public function resolveRouteBinding($value) {

  }
}