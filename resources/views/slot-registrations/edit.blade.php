<x-layout>
    <div class="container py-3">
        <tbody>
            <div class="table-responsive-xl">
                <h2 class="mb-3 fw-bold">Pending Slot Registration</h2>
                {{-- @if($pending->count() > 0) --}}
                    <table class="table table-striped table-bordered">
                        <thead>
                        <br>
                        <tr>
                            <th class="align-middle text-center">Competition Field</th>       
                            <th class="align-middle text-center">Registered</th>
                            <th class="align-middle text-center">Total Slot</th>
                            <th class="align-middle text-center">Action</th>
                        </tr>
                        </thead>
            
                <tbody>
                    @foreach ($competition as $competition)
                    <form action="{{route('slot-registrations.update',$competition)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <input type="text" hidden value="{{$competition->competition->id }}" name="compet_id">
                         <tr>
                            <th>{{$competition->competition->name}}</th>
                            <th>{{  \Carbon\Carbon::parse($competition->created_at)->diffForHumans()}}</th>
                            <th>
                                <div class="form-row">
                                    <div class="col">
                                        <input type="number" class="form-control" value="{{$competition->quantity}}" name="quantity" min="0" max="{{$competitionSlot->competition->id == 'OBS' ||$competitionSlot->competition->id == 'IA' ? '' : '3' }}">
                                    </div>
                                </div>
                            </th>
                            <th>
                                <button type="submit" class="btn btn-outline-theme w-100 rounded-20">Submit</button>
                            </th>
                        </tr>
                    </form>
                    @endforeach
              </tbody>
            </table>
            {{-- @else
              <p class="text-center">Pending No Data</p>
            @endif --}}
            </div>
        </tbody>
    </div>
</x-layout>