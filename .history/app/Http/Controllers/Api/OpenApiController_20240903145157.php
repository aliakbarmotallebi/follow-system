<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use OpenApi\Attributes as OA;


#[OA\Info(title: "Api Follow and Coin Transaction System Documentation", version: "0.1")]
#[OA\Server(url: 'http://localhost:8000/api', description: "local server")]
class OpenApiController extends Controller
{
    use ApiResponser;
}