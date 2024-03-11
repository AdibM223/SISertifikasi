@extends('layouts.main')

@section('contents')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card" style="width: 25rem; box-shadow : 5px 10px 5px 10px;">


            @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <center>
                <img src="{{asset('logpriesma.png')}}" alt="" style="background-color: white; size: 70%; max-width: 50%;
                max-height: 50%; " >
            </center>

            <div class="card-body">

                <form method="post" action="/login">
                    @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email">
                      @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                      @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                   <a href="/" class="btn btn-primary" style="margin-left: 200px;">kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
