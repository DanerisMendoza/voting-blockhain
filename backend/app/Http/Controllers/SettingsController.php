<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller
{
    public function getSettings()
    {
        $result = DB::table('settings')
            ->first();
        return $result;
    }
}
