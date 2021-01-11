<?php

namespace App\Core;

class Response
{
    public function setStatusCode(int $code): void
    {
        http_response_code($code);
    }

    public function json(array $data): string
    {
        return json_encode($data);
    }
}