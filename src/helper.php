<?php

if (! function_exists('toastr')) {
    /**
     * Return the instance of toastr.
     *
     * @return Whossun\Toastr\Toastr
     */
    function toastr()
    {
        return app('toastr');
    }
}