<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompetitionSlot;
use App\Models\PaymentProvider;
use App\Models\CompetitionPayment;

class UserCompetitionPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $competition = CompetitionSlot::find($id);
        $allCompetitions = CompetitionSlot::where('is_confirmed',1)
                            ->where('payment_id',NULL)
                            ->get();

        $totalPrice = 0;
        $payAll = 0;
        if($competition == NULL){
            $payAll = 1;
            foreach ($allCompetitions as $competition) {
                $totalPrice += $competition->quantity * $competition->competition->price; 
            }
        }
        else{
            $totalPrice += $competition->quantity * $competition->competition->price; 
        }
        

        return view('competition-payments.create',[
            'allCompetitions' => $allCompetitions,
            'totalPrice' => $totalPrice,
            'paymentProviders' => PaymentProvider::where('provider_type','BANK')->get(),
            'payAll' => $payAll,
            'competition' => $competition
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
        // if($request->type == 'bank'){
        //     $request->validate([
        //         'payment_provider'=>'required',
        //         'account_name'=>'required|string',
        //         'account_number'=>'required|numeric',
        //         'transfer_proof'=>'required|image|max:1999|mimes:jpg,png,jpeg',
    
        //     ]);
        // }
        // else{
        //     $request->validate([
        //         'email'=>'required',
        //         'tracking_link'=>'required|string',
        //         'transfer_proof'=>'required|image|max:1999|mimes:jpg,png,jpeg',
        //     ]);
        // }
        // dd($request);
        $request->validate([
            'payment_provider'=>'required',
            'account_name'=>'required|string',
            'account_number'=>'required|numeric',
            'payment_proof'=>'required|image|max:1999|mimes:jpg,png,jpeg',
            'email'=>'required',
            'tracking_link'=>'required|string',

        ]);

        if ($request->hasFile('payment_proof')){
            $file_proof = $request->file("payment_proof");
            // $file_proof = $newName.'_'.$current.'.'.$extension;
            // $path = $request->file('payment_proof')->storeAs("public/images/event-payments",$file_proof);
            $path = $request->file("payment_proof")->storeAs("public/transfer_proof",$file_proof);
        }
        dd($file_proof);

        $payment = CompetitionPayment::create([
            'payment_provider_id' => $request->payment_provider ? $request->payment_provider : 18,
            'account_name' => $request->account_name,
            'account_number' => $request->account_number,
            'email' => $request->email,
            'tracking_link' => $request->tracking_link,
            'payment_proof' => $file_proof,
            'amount' => $request->amount,
            'is_confirmed' => 0
        ]);

        if ($request->payAll == 1){
            $allCompetitions = CompetitionSlot::where('is_confirmed',1)
                            ->where('payment_id',NULL)
                            ->get();
            foreach($allCompetition as $competition){
                $competition->update([
                    'payment_id' => $payment->id,
                ]);
            }
        }
        else{
            $competitionSlot = CompetitionSlot::find($request->competitionSlot);
            $competitionSlot->update([
                'payment_id' => $payment->id,
            ]);
        }
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
        //
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
        //
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
}
