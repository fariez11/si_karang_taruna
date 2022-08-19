<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="assets/back/css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    



    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                
                                    <a class="text-center" href="index.html"> <h4>Rosella</h4></a>
        
                                <form action="/regis" class="mt-5 mb-5 login-input">
                                {{csrf_field()}}

                                    @foreach($idu as $id)
                                    <input type="hidden" name="idu" value="{{$id->id+1}}" readonly="">
                                    @endforeach
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="user"  placeholder="Username" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="pass" placeholder="Password" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="nort" placeholder="No RT" required>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <input type="number" class="form-control" name="ponsel" autocomplete="off" placeholder="No Ponsel" required>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Daftar</button>
                                </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="assets/back/plugins/common/common.min.js"></script>
    <script src="assets/back/js/custom.min.js"></script>
    <script src="assets/back/js/settings.js"></script>
    <script src="assets/back/js/gleek.js"></script>
    <script src="assets/back/js/styleSwitcher.js"></script>
</body>
</html>





