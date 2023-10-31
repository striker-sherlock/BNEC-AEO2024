<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompetitionSlot;

class DashboardController extends Controller
{
    public function showDashboard(){
        return view('dashboards.user', [

        ]);
    }

    public function showAdminDashboard(){
        return view('dashboards.admin', [

        ]);
    }

    public function step($step){
        if ($step == 1){
            $competitionSlot = CompetitionSlot::all();
            return view('dashboards.step-one',[
                'competitionSlot' => $competitionSlot,
            ]);
        }
        if ($step == 2){
            $competitionPayment = competitionSlot::where('is_confirmed','1')->get()
                                ->where('payment_id',NULL);
            $confirmedSlot = CompetitionSlot::orderBy('payment_id','desc')->get();
            return view('dashboards.step-two',[
                'confirmedSlot' => $confirmedSlot,
                'isPaidAll' => $competitionPayment
            ]);
        }
    }
}
