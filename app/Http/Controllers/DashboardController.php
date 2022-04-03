<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DashboardChartController extends Controller
{
    public function index()
    {

        $data['appointment'] = Appointments::select(DB::raw("COUNT(*) as count"), DB::raw("type_of_disease"))
            ->whereYear('type_of_disease')
            ->groupBy('type_of_disease')
            ->orderBy('count')
            ->get();
    }
}
