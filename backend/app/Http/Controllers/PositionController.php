<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PositionController extends Controller
{
    public function GetPositions()
    {
        $positions = DB::table('positions')
        ->get();
        return $positions;
    }
}
