<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Login</h3>
                    <div class="card-body">

                        <form id="loginForm" action="{{ route('login') }}" method="POST">
                            @csrf

                            <div class="form-group row">
                               <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"> 
                                </div>
                            </div><br>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password">
                                </div>
                            </div><br>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block" name="submit">Submit</button>
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
// jQuery validation rules
$('#loginForm').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
            }
        },
        messages: {
            email: {
                required: "Please enter Email",
                email: "Please enter a valid Email"
            },
            password: {
                required: "Please enter password",
            }
        }
    });
</script>

