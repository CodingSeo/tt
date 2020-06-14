<?php

namespace App\Exceptions;

use Exception;

class test extends Exception
{
    private $type;
    public function __construct($type)
    {
        $this->type = $type;
    }
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        //
    }

    /**
     * Render the exception as an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        //
        return response()->json($this->type. 't');
    }
}
