<?php
/**
 * Created by PhpStorm.
 * User: fahadseraj
 * Date: 10/1/2018 AD
 * Time: 1:55 PM
 */

namespace App\Traits;


trait Sluggable
{
    public static function bootSluggable()
    {
        static::saving(function ($model) {
            $settings = $model->sluggable();
            $model->slug = $model->generateSlug($settings['source']);
        });
    }

    abstract public function sluggable(): array;

    public function generateSlug($string)
    {
        return strtolower(preg_replace(
            ['/[^\w\s]+/', '/\s+/'],
            ['', '-'],
            $string
        ));
    }

}