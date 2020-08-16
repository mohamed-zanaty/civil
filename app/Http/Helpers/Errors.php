<?php

function error($code = 400, $message = null)
{
    // check if $message is object and transforms it into an array
    if (is_object($message)) { $message = $message->toArray(); }

    switch ($code) {
        default:
            $code_message = 'error_occured';
            break;
    }

    $data = array(
            'code'      => $code,
            'message'   => $code_message,
            'data'      => $message
        );

    // return an error
    return Response::json($data, $code);
}
