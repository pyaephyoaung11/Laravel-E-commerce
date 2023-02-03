@extends('layout.base')

@section('title', 'Admin Login')


@section('content')
    <h1 class="text-center text-info my-5">BM E-Commerce Admin Login</h1>

    <div class="col-md-6 offset-md-3">
        <form>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="number" class="form-control" id="phone" name="phone" aria-describedby="emailHelp">
                <div id="phoneHelp" class="form-text text-danger">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" aria-describedby="emailHelp">
                <div id="passwordHelp" class="form-text text-danger">We'll never share your email with anyone else.</div>
            </div>
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                        <label class="form-check-label" for="rememberme">Remember Me</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary btn-sm float-end">Login</button>
                </div>
            </div>
        </form>

    </div>
@stop
