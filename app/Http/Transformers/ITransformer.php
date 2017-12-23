<?php
namespace App\Http\Transformers;

use App\Http\MicroServiceResponse;

interface ITransformer
{
    public function transform();
}