<?php

namespace Julfiker\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * A controller class to serve swagger documentation for the restFull api
 * Class DocController
 * @package Julfiker\Swagger
 */
class DocController extends Controller
{
    public function index() {
        return view('julfiker.swagger.doc');
    }
    public function json() {
        $openapi = \OpenApi\scan(base_path('app'));
        header('Content-Type: application/x-yaml');
        echo $openapi->toYaml();
    }
}