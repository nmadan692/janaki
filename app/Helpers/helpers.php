<?php

use Illuminate\Support\Facades\Storage;

/**
 * @param null $guard
 * @return mixed
 */
function me($guard = null)
{
    return Auth::guard($guard)->user();
}

/**
 * @param null $attributes
 * @return mixed
 */
function adminUser($attributes = null) {
    if($attributes) {
        return me('admin')->{$attributes};
    }
    else {
        return me('admin');
    }
}

/**
 * @param null $guard
 * @return bool
 */
function authenticated($guard = null) {
    return \Illuminate\Support\Facades\Auth::guard($guard)->check();
}

/**
 * @param null $attributes
 * @return mixed
 */
function frontUser($attributes = null) {
    if($attributes) {
        return me('front')->{$attributes};
    }
    else {
        return me('front');
    }
}

/**
 * @param null $image
 * @return string
 */
function getImageUrl($image = null) {
    if($image) {
        return Storage::url($image);
    }
    else {
        return asset('front/img/liquor/liquor.png');
    }
}

