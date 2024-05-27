@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-5">Registration Form  <a href="{{ route('loginroute') }}">Go to Login Page</a></h1>
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form method="POST" action="/user">
        @csrf
        <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="fullname" placeholder="">
            @if($errors->has('name'))
            <div id="passwordHelpBlock" class="form-text err">
                    {{ $errors->first('name') }}
            </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input name="email" value="{{ old('email') }}" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            @if($errors->has('email'))
            <div id="passwordHelpBlock" class="form-text err">
                    {{ $errors->first('email') }}
            </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="inputPassword5" class="form-label">Password</label>
            <input name="password" value="{{ old('password') }}" type="password" id="inputPassword5" class="form-control pass" aria-describedby="passwordHelpBlock">
            @if($errors->has('password'))
            <div id="passwordHelpBlock" class="form-text err">
                    {{ $errors->first('password') }}
            </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="cpassword" class="form-label">Confirm Password</label>
            <input name="password_confirmation" value="{{ old('cpassword') }}" type="password" id="cpassword" class="form-control cpass" aria-describedby="passwordHelpBlock">
            @if($errors->has('password_confirmation'))
            <div id="passwordHelpBlock" class="form-text err">
                    {{ $errors->first('password_confirmation') }}
            </div>
            @endif
        </div>
        <input type="submit" onclick="return true" class="btn btn-primary" />
    </form> 
    <script>
        // This is javascript code / client side
        function anil(){
            //Get the password value
            var p = document.querySelector('.pass').value;

            console.log('p>>',p);

            //Get the password value
            var cp = document.querySelector('.cpass').value;

            console.log('cp>>',cp);

            if(p == cp){
                return true
            }else{
                alert("Password and Confirm password dose not match")
            }

            //Get the cpassword value

            //Check both value and

            //If equal return true

            //else return false
            return false;
        }

    </script>
    
@endsection