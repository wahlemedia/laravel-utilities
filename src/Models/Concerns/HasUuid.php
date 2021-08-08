<?php


namespace Wahlemedia\Utilities\Models\Concerns;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasUuid
{
    /**
     * Defines the UUID field for the model.
     * @return string
     */
    protected static function uuidField(): string
    {
        return 'uuid';
    }

    /**
     * Inspired by @JustSteveKing
     * Source: https://youtu.be/82h-V4WEHWc?t=5845
     */
    protected static function bootHasUuid(): void
    {
        static::creating(function (Model $model) {
            dd('bootHasUuid');
            $model->{self::uuidField()} = match(config('utilities.uuid')){
            'normal' =>  Str::uuid()->toString(),
            'ordered' =>  Str::orderedUuid()->toString(),
            };
        });
    }
}
