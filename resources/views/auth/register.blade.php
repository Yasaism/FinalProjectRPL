@extends('layouts.app')
@section('container')
<div class="container">
    <div class="registration-container">
        <h2 class="text-center mb-4">Register</h2>

        <!-- Registration Form -->
        <form>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Enter your username">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password">
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" id="role">
                    <option value="petugas">Petugas</option>
                    <option value="pemain">Pemain</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
        <!-- End Registration Form -->

        <div class="mt-3 text-center">
            <p>Already have an account? <a href="#">Login</a></p>
        </div>
    </div>
</div>
<style>
    body {
        background-color: #f8f9fa;
    }

    .registration-container {
        max-width: 400px;
        margin: auto;
        margin-top: 100px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }
</style>    
@endsection