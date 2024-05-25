<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel | Auth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('Customer/css/style.css')}}">
</head>
<body>
    <div class="form-section">
        <div class="box1">
            <h3>Laravel Custom Auth <span>RAYS CODING</span></h3>
        </div>
        <div class="box2">
            <div class="content">
                <div class="content-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <p>Create Account</p>
                            </div>
                            <div class="col-lg-6">
                                <a href="{{route('customer.login')}}">Already Registered</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body">
                    <div class="container">
                        <div class="row">
                            <form action="{{route('customer.register.submit')}}" method="post">
                                @csrf
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <p class="alert alert-danger">{{ $error }}</p>
                                    @endforeach
                                @endif
                                <div class="row mb-3">
                                    <div class="col-lg-12">
                                        <label for="">Name</label>
                                        <input type="text" name="name" id="name" class="form-control" autocomplete="off" value="{{old('name')}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-12">
                                        <label for="">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" autocomplete="off" value="{{old('email')}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-12">
                                        <label for="">Contact</label>
                                        <input type="text" name="contact" id="contact" class="form-control" autocomplete="off" value="{{old('contact')}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-12">
                                        <label for="">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" autocomplete="off" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-12">
                                        <label for="">Confirm Password</label>
                                        <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" autocomplete="off">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn registerbutton w-100">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('Customer/js/index.js')}}"></script>
</body>
</html>
