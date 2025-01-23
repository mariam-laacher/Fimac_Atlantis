<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/images/logo/fimaclogo3.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/fimaclogo3.ico') }}" type="image/x-icon">
    <title>Fimac Atlantis - Connexion administrateur</title>
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/feather-icon.css') }}">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('adminAssets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/responsive.css') }}">
</head>

<body>
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div>
                            <a class="logo" href="{{route('home')}}">
                                <img class="img-fluid for-light" src="{{ asset('assets/images/logo/fimaclogo3.png') }}" alt="loginpage" style="width: 150px; height: auto;">
                                <img class="img-fluid for-dark" src="{{ asset('assets/images/logo/fimaclogo3.png') }}" alt="loginpage" style="width: 150px; height: auto;">
                            </a>
                        </div>
                        <div class="login-main">
                            <form class="theme-form" action="{{ route('login.action') }}" method="post">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <h3 class="text-center">Connectez-vous au compte</h3><br>
                                <div class="form-group">
                                    <label class="col-form-label">Adresse email</label>
                                    <input class="form-control" type="email" name="email" required placeholder="Test@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Mot de passe</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="password" id="password" required placeholder="*********">
                                        <button type="button" id="togglePassword" class="btn btn-outline-secondary btn-sm position-absolute" style="right: 10px; top: 50%; transform: translateY(-50%);">
                                            Afficher
                                        </button>
                                    </div>
                                </div>                                
                                <div class="form-group mb-0">
                                    <div class="checkbox p-0">
                                        <input id="checkbox1" type="checkbox" name="remember">
                                        <label class="text-muted" for="checkbox1">Se souvenir du mot de passe</label>
                                    </div>
                                    {{-- <a class="link" href="forget-password.html">Forgot password?</a> --}}
                                    <div class="text-end mt-3">
                                        <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                                    </div>
                                </div>
                                {{-- <h6 class="text-muted mt-4 or">Or Sign in with</h6>
                                <div class="social mt-4">
                                    <div class="btn-showcase">
                                        <a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a>
                                        <a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i> Twitter</a>
                                        <a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i> Facebook</a>
                                    </div>
                                </div> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('adminAssets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('adminAssets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminAssets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('adminAssets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <script src="{{ asset('adminAssets/js/config.js') }}"></script>
    <script src="{{ asset('adminAssets/js/script.js') }}"></script>
    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordField = document.getElementById('password');
            const isPasswordHidden = passwordField.type === 'password';
    
            if (isPasswordHidden) {
                passwordField.type = 'text';
                this.textContent = 'Cacher';
            } else {
                passwordField.type = 'password';
                this.textContent = 'Afficher';
            }
        });
    </script>    
</body>

</html>
