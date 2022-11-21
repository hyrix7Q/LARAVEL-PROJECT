<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
    margin-top:20px;
    background: #f6f9fc;
}
.account-block {
    padding: 0;
    background-image: url(https://bootdey.com/img/Content/bg1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%;
    position: relative;
}
.account-block .overlay {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.4);
}
.account-block .account-testimonial {
    text-align: center;
    color: #fff;
    position: absolute;
    margin: 0 auto;
    padding: 0 1.75rem;
    bottom: 3rem;
    left: 0;
    right: 0;
}

.text-theme {
    color: #5369f8 !important;
}

.btn-theme {
    background-color: #5369f8;
    border-color: #5369f8;
    color: #fff;
}
        </style>
         <link href="{{asset('import/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
         <link
             href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
             rel="stylesheet">
     
         <!-- Custom styles for this template-->
         <link href="{{asset('import/css/sb-admin-2.min.css')}}" rel="stylesheet">
    </head>
    <body>
        
        <div id="main-wrapper" class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="card border-0">
                        <div class="card-body p-0">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="mb-5">
                                            <h3 class="h4 font-weight-bold text-theme">Register</h3>
                                        </div>
        
                                        <h6 class="h5 mb-0">Welcome here!</h6>
                                        <p class="text-muted mt-2 mb-5">Enter your email address and password to access admin panel.</p>
        
                                        <form method="POST" action={{ url('/login') }}>
                                            @csrf
                                        
                                            <div class="form-group">
                                                <label for="emailAddress">Email address</label>
                                                <input type="email" class="form-control" name="emailAddress">
                                            @error('emailAddress')
                                            <p class="text-red-500">{{$message}}</p>
                                            @enderror
                                            </div>
                                            <div class="form-group mb-5">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                            <button type="submit" class="btn btn-theme">Login</button>
                                            <a href="#l" class="forgot-link float-right text-primary">Forgot password?</a>
                                        </form>
                                    </div>
                                </div>
        
                                <div class="col-lg-6 d-none d-lg-inline-block">
                                    <div class="account-block rounded-right">
                                        <div class="overlay rounded-right"></div>
                                        <div class="account-testimonial">
                                            <h4 class="text-white mb-4">This  beautiful theme yours!</h4>
                                            <p class="lead text-white">"Best investment i made for a long time. Can only recommend it for other users."</p>
                                            <p>- Admin User</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
        
                    <p class="text-muted text-center mt-3 mb-0">Don't have an account? <a href="register.html" class="text-primary ml-1">register</a></p>
        
                    <!-- end row -->
        
                </div>
                <!-- end col -->
            </div>
            <!-- Row -->
        </div>
    </body>
</html>