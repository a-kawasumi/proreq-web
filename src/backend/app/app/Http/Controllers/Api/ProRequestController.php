<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ModelUtil;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Support\Facades\Session;

class ProRequestController extends Controller
{

    public function index(Request $request) {
        $response = [];

        $response['message'] = 'success';
        return new JsonResponse($response);
    }
}
