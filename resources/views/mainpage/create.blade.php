@extends('layouts.main')
@section('container')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-5">
            <form method="post" action="/mainpage" class="row g-3" enctype="multipart/form-data">
                @csrf
                <div class="col-md-4 mb-3">
                    <h4>Create Company</h4>
                </div>
                <div class="col-md-8 mb-3">
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-dark">Save</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"  required autofocus value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ "$message" }}
                        </div>      
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autofocus value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ "$message" }}
                        </div>      
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="logo" class="form-label">Logo</label>
                    <input class="form-control @error('logo') is-invalid @enderror" type="file" id="logo" name="logo">
                    @error('logo')
                        <div class="invalid-feedback">
                            {{ "$message" }}
                        </div>      
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="website" class="form-label">Website</label>
                    <input type="text" class="form-control @error('website') is-invalid @enderror" id="website" name="website" required autofocus value="{{ old('website') }}">
                    @error('website')
                        <div class="invalid-feedback">
                            {{ "$message" }}
                        </div>      
                    @enderror
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
