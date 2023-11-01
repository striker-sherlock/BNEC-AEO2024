<x-layout>
    <div class="container py-3">
        <h2>Welcome</h2>
        <h3 class="text-uppercase my-4 text-gradient" style="letter-spacing: 0.1em">Competition Step by step Registration</h3>
        <div class="d-flex flex-md-row flex-column flex-wrap">
        <div class="col-md-4 mb-5">
            <a href="{{route('dashboard.step',1)}}" class="d-block text-decoration-none btn">
                <div class="card shadow overflow-hidden" style="border-radius: 20px">
                    <div class="card-header" style="background: grey"></div>
                    <div class="card-body my-3">
                        <h2 class="card-title">Step 1</h2>
                        <h4>Competition Slot</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-5">
            <a href="{{route('dashboard.step',2)}}" class="d-block text-decoration-none btn">
                <div class="card shadow overflow-hidden" style="border-radius: 20px">
                    <div class="card-header" style="background: grey"></div>
                    <div class="card-body my-3">
                        <h2 class="card-title">Step 2</h2>
                        <h4>Competition Slot Payment</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-5">
            <a href="#" class="d-block text-decoration-none btn">
                <div class="card shadow overflow-hidden" style="border-radius: 20px">
                    <div class="card-header" style="background: grey"></div>
                    <div class="card-body my-3">
                        <h2 class="card-title">Step 3</h2>
                    </div>
                </div>
            </a>
        </div>
        </div>
        
    </div>
</x-layout>
