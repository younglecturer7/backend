<?php

namespace App\Traits;

trait HttpResponse
{
    public function success($data, $message, $code = 200)
    {
        return response()->json([
            'message' => $message,
            'data' => $data
        ], $code);
    }

    public function error($data = null, $message, $code)
    {
        return response()->json([
            'message' => $message,
            'data' => $data
        ], $code);
    }


}
