<?php

namespace App\Trait;

trait HasCreatorAndUpdater
{
    protected static function bootHasCreatorAndUpdater()
    {
        static::creating(function ($model) {
            $model->creator = auth()->id();
            $model->updater = auth()->id();
        });

        static::updating(function ($model) {

        });
    }
}
