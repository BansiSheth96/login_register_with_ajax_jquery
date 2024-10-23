<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Registration Form</h3>
                    <div class="card-body">

                        <form id="registrationForm" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                               <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"> 
                                </div>
                            </div><br>

                            <div class="form-group row">
                               <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                                <div class="col-md-6">
                                    <input id="surname" type="text" class="form-control" name="surname"> 
                                </div>
                            </div><br>

                            <div class="form-group row">
                               <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"> 
                                </div>
                            </div><br>

                            <div class="form-group row">
                               <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                <div class="col-md-6">
                                    <input id="phonenumber" type="tel" class="form-control" name="phonenumber"> 
                                </div>
                            </div><br>

                            <div class="form-group row">
                               <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control" name="address"> 
                                </div>
                            </div><br>

                            <div class="form-group row">
                               <label for="pincode" class="col-md-4 col-form-label text-md-right">{{ __('Pincode') }}</label>

                                <div class="col-md-6">
                                    <input id="pincode" type="text" class="form-control" name="pincode"> 
                                </div>
                            </div><br>

                            <div class="form-group row">
                               <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                                <div class="col-md-6">
                                    <select id="state" class="form-control" name="state">
                                        <option value="">-- Select State --</option>
                                        @foreach ($get_states as $state)
                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><br>

                            <div class="form-group row">
                               <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                                <div class="col-md-6">
                                    <select id="city" class="form-control" name="city">
                                        <option value="">-- Select City --</option>
                                    </select>
                                </div>
                            </div><br>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password">
                                </div>
                            </div><br>

                            <div class="form-group row">
                                <label for="confirm_password" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="confirm_password" type="password" class="form-control" name="confirm_password">
                                </div>
                            </div><br>

                            <div class="form-group row">
                                <label for="upload_image" class="col-md-4 col-form-label text-md-right">{{ __('Upload Image') }}</label>

                                <div class="col-md-6">
                                    <input id="upload_image" type="file" class="form-control" name="upload_image" accept="image/*">
                                </div>
                            </div><br>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
  .error {
    color: red;
  }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>

<script>

$(document).ready(function() {
    $('#state').change(function() {
        var stateId = $(this).val();
        if (stateId) {
            $.ajax({
                url: '/get-cities/' + stateId,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#city').empty();
                    $('#city').append('<option value="">-- Select City --</option>');
                    $.each(data, function(key, value) {
                        $('#city').append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        } else {
            $('#city').empty();
            $('#city').append('<option value="">-- Select City --</option>');
        }
    });
});

// jQuery validation rules
$('#registrationForm').validate({
        rules: {
            name: {
                required: true,
            },
            surname: {
                required: true,
            },
            email: {
                required: true,
                email: true,
                remote: {
                    url: "{{ route('check.email') }}",  // URL to check for email uniqueness
                    type: "POST",
                    data: {
                        email: function() {
                            return $('#email').val();
                        },
                        _token: '{{ csrf_token() }}'  // CSRF token for security
                    },
                    dataFilter: function(data) {
                        var json = JSON.parse(data);
                        if (json.exists) {
                            return "\"" + "This email is already taken" + "\"";
                        } else {
                            return 'true';
                        }
                    }
                }
            },
            phonenumber: {
                required: true,
                digits: true,
                minlength: 10,
            },
            address: {
                required: true
            },
            pincode: {
                required: true,
                digits: true,
                minlength: 6,
                maxlength: 6
            },
            state: {
                required: true
            },
            city: {
                required: true
            },
            password: {
                required: true,
                minlength: 8
            },
            confirm_password: {
                required: true,
                equalTo: '#password'
            },
            upload_image: {
                required: true,
                //extension: "jpg,png,jpeg"
            }
        },
        messages: {
            name: {
                required: "Please enter your name"
            },
            surname: {
                required: "Please enter your surname"
            },
            email: {
                required: "Please enter Email",
                email: "Please enter a valid Email",
                remote: "This email is already taken"
            },
            phonenumber: {
                required: "Please enter your phone number",
                digits: "Please enter only digits",
                minlength: "Phone number must be at least 10 digits long"
            },
            address: {
                required: "Please enter your address"
            },
            pincode: {
                required: "Please enter your pincode",
                digits: "Pincode must be digits",
                minlength: "Pincode must be exactly 6 digits",
                maxlength: "Pincode must be exactly 6 digits"
            },
            state: {
                required: "Please select your state"
            },
            city: {
                required: "Please select your city"
            },
            password: {
                required: "Please enter your password",
                minlength: "Password must be at least 8 characters long"
            },
            confirm_password: {
                required: "Please confirm your password",
                equalTo: "Passwords does not match"
            },
            upload_image: {
                required: "Please upload your image",
                //extension: "Please select a valid image file (jpg, png, jpeg)"
            },
            submitHandler: function (form) {
        form.submit();
      }
        }
    });
</script>

