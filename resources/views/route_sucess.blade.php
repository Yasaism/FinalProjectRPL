@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body p-5">
                    <h2 class="text-center mb-4">Registration Successful!</h2>

                    <p class="text-center">Congratulations! You have successfully registered.</p>

                    <div class="text-center">
                        <p class="mb-0">Redirecting to login page...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    setTimeout(function() {
        window.location.href = "{{ route('login') }}";
    }, 2000);
</script>
@endsection
