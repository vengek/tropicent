<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 23.12.17
 * Time: 17:27
 */

namespace App\Http\Transformers\JsonTransformers;


use App\Http\MicroServiceResponse;
use App\Http\Transformers\ITransformer;

abstract class JsonTransformer implements ITransformer
{
    abstract public function transform();

    protected function parse(string $response) : object
    {
        return json_decode($response);
    }
}