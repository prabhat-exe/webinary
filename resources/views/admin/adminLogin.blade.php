@extends('admin.adminLayout.adminHome')

@section('title', 'AdminLogin')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
            <h3 class="text-center mb-4 text-primary">Admin Login</h3>

            <form action="{{ route('adminLogin') }}" method="POST">
    @csrf
  

    <div class="mb-3">
        <label for="emailInput" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="emailInput" placeholder="Enter email" required>
    </div>

    <div class="mb-3">
        <label for="passwordInput" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="passwordInput" placeholder="Password" required>
    </div>

    
    <button type="submit" class="btn btn-primary w-100">Login</button>
</form>


        </div>
    </div>

@endsection

@section('script')

<script>
    document.getElementById('refresh-captcha').onclick = function () {
        fetch('/refresh-captcha')
            .then(response => response.json())
            .then(data => {
                console.log(data.captcha);
                document.querySelector('form span').innerHTML = data.captcha;
            });
    }
</script>


@endsection