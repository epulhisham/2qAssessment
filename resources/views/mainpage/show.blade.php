<div class="modal fade" id="showCompanyModal{{ $company->id }}" tabindex="-1" aria-labelledby="showCompanyModalLabel{{ $company->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showCompanyModalLabel{{ $company->id }}">Company Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"  required autofocus value="{{ old('name',$company->name) }}" disabled>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ "$message" }}
                                        </div>      
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autofocus value="{{ old('email',$company->email) }}" disabled>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ "$message" }}
                                        </div>      
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="logo" class="form-label">Logo</label>
                                    <div class="col-md-6 mt-3">
                                        @if ($company->logo)
                                            <img src="{{ asset('storage/' . $company->logo) }}" alt="Company logo" class="img-fluid">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="website" class="form-label">Website</label>
                                    <input type="text" class="form-control @error('website') is-invalid @enderror" id="website" name="website" required autofocus value="{{ old('website',$company->website) }}" disabled>
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
