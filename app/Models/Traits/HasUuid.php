<?php

namespace App\Models\Traits;
use Illuminate\Support\Str;

trait HasUuid
{
  protected static function bootHasUuid()
  {
    return self::createUuid();
  }

  protected static function createUuid()
  {
    static::creating(function($model) {
      if (empty($model->{$model->getKeyName()})) {
        $model->{$model->getKeyName()} = Str::uuid();
      }
    });
  }
}
