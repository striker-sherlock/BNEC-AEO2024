<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Competition;
use Illuminate\Http\Request;
use App\Mail\RejectedSlotMail;
use App\Mail\ConfirmedSlotMail;
use App\Models\CompetitionSlot;
use Illuminate\Support\Facades\Mail;

class SlotRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competitions = Competition::all();
        $pending = CompetitionSlot::where('is_confirmed',0)->get();
        $confirm = CompetitionSlot::where('is_confirmed',1)->get();
        $reject = CompetitionSlot::where('is_confirmed',-1)->get();
        return view('slot-registrations.index',[
            'competitions' => $competitions,
            'pending' => $pending,
            'confirm' => $confirm,
            'reject' => $reject
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $registeredDebate = CompetitionSlot::where('competition_id','DB')
        //     ->where('is_confirmed',1);
            // ->sum('quantity');
        return view('slot-registrations.create',[
            'competitions' => Competition::all(),
            'competitionSlots' => CompetitionSlot::get(),
            // 'registeredDebate' => $registeredDebate
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $len = count($request->quantity);
        
        for ($i= 0; $i < $len; $i++){
            if ($request->quantity[$i] != '0'){
                CompetitionSlot::create([
                    'created_by' => "",
                    'pic_id' => 1,
                    'created_at' => Carbon::now(),
                    'competition_id' => $request->compet_id[$i],
                    'quantity' => $request->quantity[$i],
                    'is_confirmed' => 0,
                ]);
            }
        }
        return redirect()->route('dashboard.step',1);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $competition = CompetitionSlot::find($id);
        return view('slot-registrations.edit',[
            'competition' => $competition
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $competition->update([
            'quantity' => $request->quantity
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function confirm(CompetitionSlot $competitionSlot)
    {
        $competitionSlot->update([
            // 'updated_by' => Auth::user()->nim,
            'is_confirmed' => 1
        ]);

        // $confirmedSlotMail = [
        //     'subject' => $competitionSlot->competition->name. " - Confirmed Slot",
        //     'name'=>"test",
        //     'body1'=>'We are grateful to inform you that your '.$competitionSlot->competition->name.' slot registration has been confirmed.',
        //     'body2'=>'Please proceed to the payment for your slot by clicking the button below.',
        //     'url' => 'http://aeo.mybnec.org/dashboard/step-2'

        // ];
        // Mail::to('')->send(new ConfirmedSlotMail($confirmedSlotMail));
        return redirect()->route('slot-registrations.index');
    }

    public function pending(CompetitionSlot $competitionSlot)
    {
        $competitionSlot->update([
            'is_confirmed' => 0
        ]);
        return redirect()->back();
    }
    
    public function reject(CompetitionSlot $competitionSlot)
    {
        $competitionSlot->update([
            'is_confirmed' => -1
        ]);

        // $rejectedSlotMail = [
        //     'subject' => $competitionSlot->competition->name. " - Rejection Slot",
        //     'name'=>"test",
        //     'body1'=>'We are regretful to inform you that your '.$competitionSlot->competition->name.' slot has been rejected with the following reason: ',
        //     'body2'=>'You can edit your slot registration again by going into the registration step on our website.',
        //     // 'reason' => $request->reason,
        //     'url' => 'http://aeo.mybnec.org/dashboard/step-1',

        // ];
        // Mail::to('')->send(new RejectedSlotMail($rejectedSlotMail));
        return redirect()->route('slot-registrations.index');
    }
}
