<x-layout>
    <form method="POST" action="{{ route('payment-providers.update', $paymentProvider) }}" enctype="multipart/form-data" class="p-3">
          @csrf
          @method('UPDATE')
            <div class="mb-3">
              <p>Payment Provider</p>
              <input type="radio" id="1" name="provider_type" value="{{ $paymentProvider->provider_type }}" {{$paymentProvider->provider_type == "BANK"?"checked":""}}>
              <label for="Bank">Bank</label>
              <input type="radio" id="2" name="provider_type" value="{{ $paymentProvider->provider_type }}" {{$paymentProvider->provider_type == "EWAL"?"checked":""}}>
              <label for="E-money">E-Money</label>
          </div>
  
          <div class="form-group">
              <label for="ProvName">Payment Provider Name</label>
              <input type="text" class="form-control" id="ProvName" aria-describedby="emailHelp" placeholder="Payment Provider Name" name="provider_name" value="{{ $paymentProvider->provider_name }}"> 
          </div>
         @method('PUT')
        <button type="submit" class="btn btn-primary">Input</button>  
    </form>
  </x-layout>