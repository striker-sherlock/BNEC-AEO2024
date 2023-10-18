<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentProvider;

class PaymentProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('payment-providers.index',[
            'paymentProviders' => PaymentProvider::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('payment-providers.create',[
            'paymentProviders' => PaymentProvider::all(),
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
        $request->validate([
            'provider_name' => 'required|string',
            'provider_type' => 'required|string',
        ]);

        PaymentProvider::create([
            'created_by' => "",
            'provider_name' => $request->provider_name,
            'provider_type' => $request->provider_type
        ]);

        return redirect()->route('payment-providers.index');
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
    public function edit(PaymentProvider $paymentProvider)
    {
        return view('payment-providers.edit',[
            'paymentProvider' => $paymentProvider
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PaymentProvider $paymentProvider, Request $request) {
        $request->validate([
            'provider_name' => 'required|string',
            'provider_type' => 'required|string'
        ]);


        $paymentProvider->update([
            'provider_name' => $request->provider_name,    
            'provider_type' => $request->provider_type
        ]);

        return redirect()->route('payment-providers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentProvider $paymentProvider) {
        $paymentProvider->delete();
        return redirect()->route('payment-providers.index');
    }
}
