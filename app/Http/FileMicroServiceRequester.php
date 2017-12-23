<?php
namespace App\Http;

class FileMicroServiceRequester implements IMicroServiceRequester
{
    public function get(string $path): MicroServiceResponse
    {
        return new MicroServiceResponse(file_get_contents($path));
    }
}
