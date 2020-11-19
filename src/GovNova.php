<?php

namespace LaravelRotEbal\GovNova;

use Laravel\Nova\Nova;

class GovNova extends Nova {



    /**
     * All of the registered Nova media directories.
     *
     * @var array
     */
    public static $media = [];



    /**
     * Register the given media directory with Nova.
     *
     * @param  string  $name
     * @param  string  $directory
     *
     * @return \App\GovNova
     */
    public static function media($name, $directory) {
        static::$media[$name] = $directory;

        return new static;
    }



    /**
     * Get all of the additional media directories that should be registered.
     *
     * @return array
     */
    public static function allMedia() {
        return static::$media;
    }



    /**
     * Get all of the available media directories that should be registered.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return array
     */
    public static function availableMedia(Request $request) {
        return static::$media;
    }



}
