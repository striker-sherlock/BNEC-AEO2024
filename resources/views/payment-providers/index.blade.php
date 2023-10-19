<x-layout>
<tbody>
    <a class="btn btn-primary" href="{{ route('payment-providers.create')  }}">Add Provider</a>
    <br>
    <br>
    <div class="table-responsive">
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th class="align-middle text-center">Id</th>
          <th class="align-middle text-center">Provider Name</th>
          <th class="align-middle text-center">Provider Type</th>
          <th class="align-middle text-center">Action</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($paymentProviders as $paymentProvider)
        <tr>
          <th scope="row">{{$paymentProvider->id}}</th>
          <td>{{$paymentProvider->provider_name}}</td>
          <td>{{$paymentProvider->provider_type}}</td>
          <td class="d-flex justify-content-center align-items-center">
            <a class="btn btn-primary mr-3" href="{{ route('payment-providers.edit', $paymentProvider->id) }}"><i class="bi bi-pencil-square"></i></a>
            <form action="{{ route('payment-providers.destroy', $paymentProvider) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
            </form>
        <tr>
        @endforeach    
      </tbody>
    </table>
    </div>
</tbody>
</x-layout>