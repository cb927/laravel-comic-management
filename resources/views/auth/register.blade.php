@extends('layouts.auth')
@push('styles')
<style>
    .error {
        color: red;
        font-size: 12px;
    }
</style>
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
            <div class="card bg-secondary border-0 mb-0">
                <div class="card-body px-lg-5 py-lg-5">
                    <div class="text-center text-muted mb-4 auth-text">
                        Register
                    </div>
                    <form role="form" id="register_form" action="{{route('admin.register.post')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input name="name" class="form-control" placeholder="Name" type="text" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input name="email" class="form-control" placeholder="Email" type="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input name="password" class="form-control" placeholder="Password" type="password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input name="password_confirm" class="form-control" placeholder="Password Confirm" type="password" required>
                            </div>
                            <div class="error">
                                
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary mt-4" id="show_btn">Create account</button>
                            <button type="submit" id="real_btn" style="display: none;">Create account</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- <div class="row mt-3">
                        <div class="col-6">
                            <a href="#" class="text-light"><small>Forgot password?</small></a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="#" class="text-light"><small>Create new account</small></a>
                        </div>
                    </div> -->
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        $('#show_btn').click(function() {
            var password = $('input[name=password]').val();
            var password_confirm = $('input[name=password_confirm]').val();
            if (password == password_confirm) {
                $('.error').html('');
                $('#real_btn').trigger('click');
            } else {
                var error_message = `Please confirm your password`;
                $('.error').html(error_message);
            }
        })
    })
</script>
@endpush