

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Register Details</h3>
                    <div class="card-body">

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}"> 
                                    </div>
                            </div><br>

                            <div class="form-group row">
                                <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                                    <div class="col-md-6">
                                        <input id="surname" type="text" class="form-control" name="surname" value="{{ $user->surname }}"> 
                                    </div>
                            </div><br>

                            <div class="form-group row">
                               <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}"> 
                                </div>
                            </div><br>

                            <div class="form-group row">
                               <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                <div class="col-md-6">
                                    <input id="phonenumber" type="tel" class="form-control" name="phonenumber" value="{{ $user->phonenumber }}"> 
                                </div>
                            </div><br>

                            <div class="form-group row">
                               <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control" name="address" value="{{ $user->address }}"> 
                                </div>
                            </div><br>

                            <div class="form-group row">
                               <label for="pincode" class="col-md-4 col-form-label text-md-right">{{ __('Pincode') }}</label>

                                <div class="col-md-6">
                                    <input id="pincode" type="number" class="form-control" name="pincode" value="{{ $user->pincode }}"> 
                                </div>
                            </div><br>

                            <div class="form-group row">
                                <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>
                                <div class="col-md-6">
                                    <input id="state" type="text" class="form-control" name="state" value="{{ $user->state }}" >
                                </div>
                            </div><br>

                            <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>
                                <div class="col-md-6">
                                    <input id="city" type="text" class="form-control" name="city" value="{{ $user->city }}"> 
                                </div>
                            </div><br>

                       
                    </div>

                    <form action="{{ route('logout') }}" method="POST">
                     @csrf
                        <div class="d-grid mx-auto">
                            <button type="submit" class="btn btn-dark btn-block">Logout</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</main>



