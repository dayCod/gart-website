<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Represents the 'gart' type for the application.
     *
     * @var string
     */
    const TYPE_AS_GART = 'gart';

    /**
     * Represents the 'reise' type for the application.
     *
     * @var string
     */
    const TYPE_AS_REISE = 'reise';
}
