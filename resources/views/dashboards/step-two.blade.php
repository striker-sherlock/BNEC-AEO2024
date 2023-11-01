<x-layout>
    <div class="container py-3">
        <h4 style="color:rgb(91, 91, 91)">Step-2</h4>
        <h3>Competition Payment</h3>
        @if ($isPaidAll->count())
            <a href="{{route('competition-payments.create', 0)}}" ><button class="btn btn-outline-primary" style="border-radius: 20px">Pay All Slot Registration</button></a>
        @endif
        @foreach($confirmedSlot as $confirmedSlot)
                <div class="container my-1">
                    <div class="card border-0 overflow-hidden shadow mb-5" style="border-radius: 20px">
                        <div class="card-header" style="background: grey"></div>
                        <div class="card-body my-3">
                            <div class="row pt-4">
                                <div class="mb-3 col">
                                    <div class="d-flex flex-md-row flex-column mx-2 flex-wrap">
                                        <div class="col-md-2">
                                            <img src="{{ $confirmedSlot->competition->logo }}" class="img-fluid rounded-end rounded-start" alt="{{ $confirmedSlot->competition->name }}'s logo">
                                        </div>
                                        
                                    
                                        <div class="col">
                                            <div class="card-body">
                                                <h2 class="card-title" >{{ ($confirmedSlot->competition->name) }}</h2>
                                                <h5> {{$confirmedSlot->competition->name}}: {{$confirmedSlot->quantity}} {{$confirmedSlot->competition->need_team == 0 ? 'Person(s)' : 'Team(s)'}}</h5>
                                                <h5>Payment Status : 
                                                    @if ($confirmedSlot->payment == NULL)
                                                        <span class="text-danger fw-bold">No Payment Yet</span><br>
                                                        <small class="text-muted fw-bold mb-3" style="font-size:0.7em;">This Slot Was Confirmed {{ \Carbon\Carbon::parse($confirmedSlot->created_at)->diffForHumans()}}</small>
                                                    @else
                                                        @if ($confirmedSlot->payment->is_confirmed == 1)
                                                            <span class="text-success fw-bold">Confirmed</span>
                                                        @endif
                                                        @if ($confirmedSlot->payment->is_confirmed == 0)
                                                            <span class="text-warning fw-bold">Pending</span>
                                                        @endif
                                                        @if ($confirmedSlot->payment->is_confirmed == -1)
                                                            <span class="text-danger fw-bold">Rejected</span>
                                                        @endif 
                                                    @endif
                                                </h5>
                                                @if (!$confirmedSlot->payment_id)
                                                    <a href="{{route('competition-payments.create', $confirmedSlot->id)}}" ><button class="btn btn-outline-primary" style="border-radius: 20px">Pay This Slot Only</button></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
</x-layout>
