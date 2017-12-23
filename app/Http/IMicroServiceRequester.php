<?php
namespace App\Http;

interface IMicroServiceRequester
{
    public function get(string $paths) : MicroServiceResponse ;
}