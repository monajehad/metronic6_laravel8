<?php
function sendResponse($status = false, $message = '', $data = '', $code = 404, $auth_data = null, $temp = null, $meta = null)
{
    ini_set('serialize_precision', -1);

    $result = [
        'status'  => $status,
        'code'    => $code,
        'message' => $message,
        'data'    => $data,
    ];
    if($auth_data)
    {
        $result['auth_data'] = $auth_data;
    }
    if($temp)
    {
        $result['temp'] = $temp;
    }
    if($meta)
    {
        $result['meta'] = $meta;
    }
    return response()->json($result)->setStatusCode($code);
}
?>
