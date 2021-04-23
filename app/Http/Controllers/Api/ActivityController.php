<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {

        $activities = Activity::all();

        return response()->json($activities);
    }
}
