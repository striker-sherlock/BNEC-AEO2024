<x-layout>
    {{-- pending --}}
    <div class="container py-3">
        <tbody>
            <div class="table-responsive-xl">
                <h2 class="mb-3 fw-bold">Pending Slot Registration</h2>
                @if($pending->count() > 0)
                    <table class="table table-striped table-bordered">
                        <thead>
                        <br>
                        <tr>
                            <th class="align-middle text-center">Competition Field</th>       
                            {{-- <th class="align-middle text-center">Institution Name</th>              
                            <th class="align-middle text-center">PIC Name</th>
                            <th class="align-middle text-center">Contact</th> --}}
                            <th class="align-middle text-center">Total Slot</th>
                            <th class="align-middle text-center">Action</th>
                        </tr>
                        </thead>
            
                <tbody>
                    @foreach ($pending as $competition)
                    <tr>
                    <th>{{ $competition->competition->name }}</th>
                    {{-- <th>{{ $competition->user->institution_name }}</th>
                    <th>{{ $competition->user->pic_name }}</th>
                    <th>{{ $competition->user->pic_phone_number}}</th> --}}
                    <th>{{ $competition->quantity }}</th>
                    <td class="p-2">
                        <div class="d-flex justify-content-center align-items-center" >
                            <div class="d-flex  justify-content-center">
                                <a href="{{route('slot-registrations.edit',$competition->id)}}"class="btn  btn-primary me-2">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route('slot-registrations.confirm',$competition->id)}}" class="btn btn-success me-2">
                                    <i class="fas fa-check-circle"></i>
                                </a>
                                <a href="{{route('slot-registrations.reject',$competition->id)}}"class="btn  btn-danger me-2">
                                    <i class="fa fa-times"></i>
                                </a>
                                {{-- <a  class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#confirm{{$competition->id}}">
                                    <i class="fas fa-check-circle"></i>
                                </a>
                                <a class="btn btn-danger  me-2" data-bs-toggle="modal" data-bs-target="#reason{{$competition->id}}">
                                    <i class="fas fa-times"></i>
                                </a> --}}
                            </div>
                        </div>
                    </td>
                    @endforeach
              </tbody>
            </table>
            @else
              <p class="text-center">Pending No Data</p>
            @endif
            </div>
        </tbody>
    </div>

    {{-- confirm --}}
    <div class="container py-3">
        <tbody>
            <div class="table-responsive-xl">
                <h2 class="mb-3 fw-bold">Confirmed Slot Registration</h2>
                @if($confirm->count() > 0)
                    <table class="table table-striped table-bordered">
                        <thead>
                        <br>
                        <tr>
                            <th class="align-middle text-center">Competition Field</th>       
                            {{-- <th class="align-middle text-center">Institution Name</th>              
                            <th class="align-middle text-center">PIC Name</th>
                            <th class="align-middle text-center">Contact</th>
                            <th class="align-middle text-center">Country</th> --}}
                            <th class="align-middle text-center">Total Slot</th>
                            <th class="align-middle text-center">Action</th>
                        </tr>
                        </thead>
            
                <tbody>
                    @foreach ($confirm as $competition)
                    <tr>
                    <th>{{ $competition->competition->name }}</th>
                    {{-- <th>{{ $competition->user->institution_name }}</th>
                    <th>{{ $competition->user->pic_name }}</th>
                    <th>{{ $competition->user->pic_phone_number}}</th>
                    <th>{{$competition->user->country->name}}</th> --}}
                    <th>{{ $competition->quantity }}</th>
                    <th><a href="{{ route('slot-registrations.pending', $competition->id) }}" class="btn btn-warning text-white btn-sm me-1" title="Pending">
                        <i class="fas fa-clock" aria-hidden="true"></i>
                      </a></th>
                    @endforeach
              </tbody>
            </table>
            @else
              <p class="text-center">Confirm No Data</p>
            @endif
            </div>
        </tbody>
    </div>
    
    {{-- reject --}}
    <div class="container py-3">
        <tbody>
            <div class="table-responsive-xl">
                <h2 class="mb-3 fw-bold">Rejected Slot Registration</h2>
                @if($reject->count() > 0)
                    <table class="table table-striped table-bordered">
                        <thead>
                        <br>
                        <tr>
                            <th class="align-middle text-center">Competition Field</th>       
                            {{-- <th class="align-middle text-center">Institution Name</th>              
                            <th class="align-middle text-center">PIC Name</th>
                            <th class="align-middle text-center">Contact</th> --}}
                            <th class="align-middle text-center">Registered At</th>
                            <th class="align-middle text-center">Total Slot</th>
                        </tr>
                        </thead>
            
                <tbody>
                    @foreach ($reject as $competition)
                    <tr>
                    <th>{{ $competition->competition->name }}</th>
                    {{-- <th>{{ $competition->user->institution_name }}</th>
                    <th>{{ $competition->user->pic_name }}</th>
                    <th>{{ $competition->user->pic_phone_number}}</th> --}}
                    <th>{{$competition->created_at}}</th>
                    <th>{{ $competition->quantity }}</th>
                    @endforeach
              </tbody>
            </table>
            @else
              <p class="text-center">Reject No Data</p>
            @endif
            </div>
        </tbody>
    </div>
</x-layout>