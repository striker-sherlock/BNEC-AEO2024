<x-layout>
    <div class="container py-3">
        <h4 style="color:rgb(91, 91, 91)">Step-1</h4>
        <h3>Competition Slot Registration</h3>
        <a href="{{route('slot-registrations.create')}}"><button class="btn btn-outline-primary rounded-pill me-2 ">Add Competition Slot Registration</button></a>   
        @if ($competitionSlot->count())
        <div class="divider my-4"></div>
        @foreach($competitionSlot as $competitionSlot)
                <div class="container my-1">
                    <div class="card border-0 overflow-hidden shadow mb-5" style="border-radius: 20px">
                        <div class="card-header" style="background: grey"></div>
                        <div class="card-body my-3">
                            <div class="row pt-4">
                                <div class="mb-3 col">
                                    <div class="d-flex flex-md-row flex-column mx-2 flex-wrap">
                                        <div class="col-md-2">
                                            <img src="{{ $competitionSlot->competition->logo }}" class="img-fluid rounded-end rounded-start" alt="{{ $competitionSlot->competition->name }}'s logo">
                                        </div>
                                        
                                    
                                        <div class="col">
                                            <div class="card-body">
                                                <h2 class="card-title" >{{ ($competitionSlot->competition->name) }}</h2>
                                                <span class="fs-5 text-article d-sm-inline fw-normal">Status: 
                                                    @if ($competitionSlot->is_confirmed == 0 )<span class="text-warning">Pending</span> 
                                                    @elseif($competitionSlot->is_confirmed == -1)<span class="text-danger">Rejected</span>
                                                    @else <span class="text-success fw-bold fs-5">Confirmed</span>  
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
        @endforeach
    @else
        <div class="container mb-5" >
            <h1 class="text-gradient text-center mb-3 fw-bold mt-4">You don't have slot registered yet</h1>
        </div>
    @endif
    </div>
</x-layout>