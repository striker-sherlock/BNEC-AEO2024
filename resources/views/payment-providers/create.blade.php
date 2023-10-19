<x-layout>    
    <form method="POST" action="{{ route('payment-providers.store') }}" enctype="multipart/form-data" class="p-3">
        @csrf
        <div class="mb-3">
            <p>Payment Provider</p>
            <input type="radio" id="1" name="provider_type" value="BANK">
            <label for="Bank">Bank</label>
            <input type="radio" id="2" name="provider_type" value="EWAL">
            <label for="E-money">E-Money</label>
        </div>

        <div class="mb-3">
            <label for="ProvName">Payment Provider Name</label>
            <input type="text" class="form-control" id="ProvName" aria-describedby="emailHelp" placeholder="Payment Provider Name" name="provider_name">
        </div>
        <button type="submit" class="btn btn-primary">Input</button>
    </form>
</x-layout>
