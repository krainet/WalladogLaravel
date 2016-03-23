<?php
/**
 * Created by PhpStorm.
 * User: hadock
 * Date: 23/03/16
 * Time: 16:23
 */

namespace Walladog\Traits;

use Illuminate\Http\Request;

trait RestTrait
{

    /**
     * Determines if request is an api call.
     *
     * If the request URI contains '/api/v'.
     *
     * @param Request $request
     * @return bool
     */
    protected function isApiCall(Request $request)
    {
        return strpos($request->getUri(), '/api/1.0') !== false;
    }

}