<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;
use App\Result;

class ResultsController extends Controller
{
    public function index()
    {
        $result = Result::find(1);

        Result::nextRunnerID();
        \DB::connection()->enableQueryLog();
        $test = Result::isExistingRunner($result);

        print_r($test);
    }
}
