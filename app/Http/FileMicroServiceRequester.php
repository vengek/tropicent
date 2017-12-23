<?php
namespace App\Http;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class FileMicroServiceRequester implements IMicroServiceRequester
{
    public function get(string $path): MicroServiceResponse
    {
        try {
            $uri = base_path() . '/resources/microservices/' . $path;
            return new MicroServiceResponse(file_get_contents($uri));
        } catch (\ErrorException $exception) {
            throw new NotFoundHttpException('Not Found');
        }

    }
}
