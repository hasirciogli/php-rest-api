<?php

header("Content-Type: application/json");

//$_POST = json_decode(file_get_contents('php://input'), true);

class ApiRouter
{
    private function initializeUri($uri)
    {
        $inetUri = substr($uri, 5);
        return explode('/', $inetUri . str_contains("?", $inetUri) ? explode('?', $inetUri)[0] : $inetUri);
    }

    public function run($uri)
    {

        function makeResponse($res_code, $res_text, $status, $data)
        {
            http_response_code($res_code);
            die(json_encode([
                "response" => [
                    "code" => $res_code,
                    "text" => $res_text
                ],
                "status" => $status,
                "data" => $data
            ], true));
        }

        $uriA = $this->initializeUri($uri);
        var_dump($uriA);

        if (isset($uriA[0]) && file_exists("./vfuns/" . $uriA[0] . ".php")) {
            require ("./vfuns/" . $uriA[0] . ".php");
            
            $plController = PluginController::cfun([]);
        } else {
            makeResponse(400, "Bad Request", false, [
                "err" => "invalid request",
            ]);
        }
    }

    public static function cfun()
    {
        return new ApiRouter();
    }
}


ApiRouter::cfun()->run($_SERVER["REQUEST_URI"]);
