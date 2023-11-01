<x-layout>
    <div class="container py-3">
        <div class="container my-1">
            <div class="card border-0 overflow-hidden shadow mb-5" style="border-radius: 20px">
                <div class="card-header" style="background: grey"></div>
                <div class="card-body my-3">
                    <div class="row pt-4">
                        <div class="mb-3 col">
                            <h3>RECEIPT SUMMARY</h3>
                            <div class="d-flex justify-content-between">
                                <h4>Competition</h4>
                                <h4>Price</h4>
                            </div>
                            @if($payAll == 1)
                                @foreach ($allCompetitions as $competitions)
                                    <div class="d-flex justify-content-between">
                                        <h6>{{$competitions->competition->name}} x {{$competitions->quantity}} {{$competitions->competition->need_team == 1 ? 'Team(s)' : 'People(s)'}}</h6>
                                        <h6>IDR {{ number_format($competitions->competition->price * $competitions->quantity, 2, ',', '.')}} </h6>
                                    </div>
                                @endforeach
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <h3 class="fw-bold">Grand Total</h3>
                                    <h4 class="fw-bold">IDR {{ number_format($totalPrice, 2, ',', '.')}} </h4>
                                </div>
                            @else
                                <div class="d-flex justify-content-between">
                                    <h6>{{$competition->competition->name}} x {{$competition->quantity}} {{$competition->competition->need_team == 1 ? 'Team(s)' : 'People(s)'}}</h6>
                                    <h6> IDR {{ number_format($totalPrice, 2, ',', '.')}} </h6>
                                </div>
        
                                <hr>
                                
                                <div class="d-flex justify-content-between">
                                    <h3 class="fw-bold">Grand Total</h3>
                                    <h4 class="fw-bold">IDR {{ number_format($totalPrice, 2, ',', '.')}} </h4>
                                </div>
                            @endif
                        </div>
                    </div>  
                </div>
            </div>
        </div>

        <div class="container my-1">
            <div class="card border-0 overflow-hidden shadow mb-5" style="border-radius: 20px">
                <div class="card-header" style="background: grey"></div>
                <div class="card-body my-3">
                    <div class="row pt-4">
                        <div class="mb-3 col">
                            <h3>Payment Form</h3>
                            {{-- <ul class="nav nav-pills d-flex justify-content-around mb-3">
                                <li class=""><a data-bs-toggle="pill" href="#bank" class="btn btn-outline-primary rounded-pill me-3 d-block w-100 bank {{old('type') == "bank" ? 'show active':''}}">Bank Transfer</a></li>

                                <li class=""><a data-bs-toggle="pill" href="#wise" class="btn btn-outline-primary rounded-pill me-3 d-block w-100 wise {{old('type') == "wise" ? 'show':''}}"> <input type="radio" class="btn-check" autocomplete="off" value="wise" id="type"> Wise</a></li>
                            
                            </ul> --}}

                            {{-- Transfer Bank --}}
                            <form action="{{route('competition-payments.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="text" value="{{$totalPrice}}" name="amount" hidden>
                                {{-- <input type="text" name="type" hidden value="{{old('type')}}"> --}}
                                <input type="text" name="competition"  value="{{ $competition == NULL ? '0' : $competition->id }}" hidden>

                                {{-- <div id="bank" class="tab-pane {{old('type') == "bank" ? 'show active':''}}"> --}}
                                    <div class="mb-3">
                                        <label for="payment_provider" class="col-form-label">Bank Name<span class="text-danger">*</span></label>
                                        <select class="form-select"  name="payment_provider" id="payment_provider" >  
                                            <option selected class="d-none" disabled> Select Bank ... </option>
                                            @foreach ($paymentProviders as $paymentProvider)
                                                <option value="{{$paymentProvider->id}}" {{old('payment_provider') == $paymentProvider->id? 'selected' : ''}}>{{$paymentProvider->provider_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                <div class="mb-3">
                                    <label class="col-form-label" for="account_name">Account Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="account_name" name="account_name" value="{{old('account_name')}}">
                                    @if ($errors->has('account_name.*'))
                                    <span class="invalid feedback text-danger"role="alert">
                                        <strong>*{{ $errors->first('account_name.*') }}.</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label class="col-form-label" for="account_number">Account Number <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="account_number" name="account_number" value="{{old('account_number')}}">
                                    @if ($errors->has('account_number.*'))
                                    <span class="invalid feedback text-danger"role="alert">
                                        <strong>*{{ $errors->first('account_number.*') }}.</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label class="col-form-label" for="payment_proof">Transfer Proof <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control" id="payment_proof" name="payment_proof" accept="image/png, image/jpeg, image/jpg">
                                    <small class="text-danger" style="font-size: 0.7em">Type:png, jpeg, jpg ; Max: 2MB </small><br>
                                    @if ($errors->has('payment_proof'))
                                    <span class="invalid feedback text-danger"role="alert">
                                        <strong>*{{ $errors->first('payment_proof') }}.</strong>
                                    </span>
                                    @endif
                                </div>
                                {{-- </div> --}}

                                {{-- WISE --}}
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                                    @if ($errors->has('email'))
                                        <span class="invalid feedback text-danger"role="alert">
                                            <strong>*{{ $errors->first('email') }}.</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                <div class="mb-3">
                                    <label for="link" class="form-label">Tracking Link <span class="text-danger">*</span></label>
                                    <input type="url" class="form-control" id="tracking_link" name="tracking_link" value="{{old('tracking_link')}}">
                                    @if ($errors->has('tracking_link'))
                                        <span class="invalid feedback text-danger"role="alert">
                                            <strong>*{{ $errors->first('tracking_link') }}.</strong>
                                        </span>
                                    @endif
                                </div>

                                {{-- <div class="mb-3">
                                    <label class="col-form-label" for="transfer_proof">Transfer Proof <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control" id="payment_proof" name="payment_proof" accept="image/png, image/jpeg, image/jpg">
                                    <small class="text-danger" style="font-size: 0.7em">Type:png, jpeg, jpg ; Max: 2MB </small><br>
                                    @if ($errors->has('payment_proof'))
                                    <span class="invalid feedback text-danger"role="alert">
                                        <strong>*{{ $errors->first('payment_proof') }}.</strong>
                                    </span>
                                    @endif
                                </div> --}}
                                <button type="submit" class="btn btn-outline-primary mb-4" style="border-radius: 20px; width: 90%; margin-left:5%">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script>
        $("#bank").change(function(){
        if($("#bank button:selected").text()=="bank"){
            $("#bank").show();
            $("#bank").prop('required', true);
            $("#ewal_name").prop('required', false);
            $("#ewal_container").hide();
        }
        else if($("#provider_type option:selected").text()=="E Wallet"){
            $("#ewal_container").show();
            $("#ewal_name").prop('required', true);
            $("#bank_name").prop('required', false);
            $("#bank_container").hide();
        }
    });
    
    </script> --}}
</x-layout>