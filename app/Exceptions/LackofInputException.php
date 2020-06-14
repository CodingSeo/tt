<?php

namespace App\Exceptions;

use Exception;

class LackofInputException extends Exception
{
    private $errors;
    public function __construct(array $errors)
    {
        $this->errors = $errors;
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
        return response()->json([
            'require' => $this->errors,
        ]);
    }
}
