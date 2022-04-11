<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pariwisata</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .bg-register-image {
            background: url("assets/img/tugu-jogja.jpg");
            background-position: center;
            background-size: cover;
        }
    </style>
</head>
<style>
    .container-scroller {
        overflow: hidden;
    }
    .page-body-wrapper {
        min-height: calc(100vh - 63px);
        display: -webkit-flex;
        display: flex;
        -webkit-flex-direction: row;
        flex-direction: row;
        padding-left: 0;
        padding-right: 0;
    }
    .page-body-wrapper.full-page-wrapper {
        width: 100%;
        min-height: 100vh;
    }
    .content-wrapper {
        flex-grow: 1;
        width: 100%;
    }
    .right-side {
        min-height: 100vh;
        background-image: linear-gradient(180deg,#00bdbd 10%,#2452ad 100%);
    }
    .left-side {
        min-height: 100vh;
        background: url(assets/img/tugu-jogja.jpg);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .form-wrapper {
        width: 55%;
        margin-top: 5%;
        margin-bottom: 5%;
        background: #ffffff;
        padding: 40px;
        border-radius: 4px;
        box-shadow: 0 -25px 37.7px 11.3px rgba(8, 143, 220, 0.07);
    }
    .header-form{
        text-align: center;
    }
    .form-control{
        height: 46px;
        background: #e9e9e9;
        border-color: transparent;
    }
    .form-control:focus{
        box-shadow:unset;
        border-color: #33c5ff;
        background: #fff;
    }
    #btnLogin, #btnRegist{
        height: 46px;
    }
    .footer-form .d-flex{
        justify-content: space-between;
    }
</style>

<body class="bg-white">
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            <div class="content-wrapper">
                <div class="row">
                    <div id="left-side" class="col-lg-5 left-side">

                    </div>
                    <div id="right-side" class="col-lg-7 right-side">
                        <div class="form-wrapper mx-auto shadow-lg">
                            <div class="header-form mb-3">
                                <h4 class="text-gray-900">Pendaftaran Akun Resideswita</h4>
                            </div>
                            <div class="alert alert-dismissible fade show" style="display: none" role="alert">
                                <p class="m-0 mytext">Sukses</p>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form class="user" action="" method="post">
                                <div class="form-group">
                                    <label for="" class="text-gray-900">Nama Pengguna</label>
                                    <input type="text" class="form-control" name="username" placeholder="" id="username">
                                </div>
                                <div class="form-group">
                                    <label for="" class="text-gray-900">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="" class="text-gray-900">Tipe User</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="userbiasa" name="usertipe" class="custom-control-input" value="deswita">
                                        <label class="custom-control-label" for="userbiasa">Deswita</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="userujp" name="usertipe" class="custom-control-input" value="ujp">
                                        <label class="custom-control-label" for="userujp">Usaha Jasa Pariwisata</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="text-gray-900">Kata Sandi</label>
                                    <input type="password" class="form-control" name="password" placeholder="" id="password">
                                </div>
                                <div class="form-group">
                                    <label for="" class="text-gray-900">Konfirmasi Kata Sandi</label>
                                    <input type="password" class="form-control" name="repassword" placeholder="" id="repassword">
                                </div>
                                <input id="btnRegist" type="button" class="btn btn-primary btn-block mb-2" value="Daftar" onclick="submitRegistrasi()">
                            </form>
                            <div class="footer-form">
                                <div class="d-flex">
                                    <small>Sudah punya akun? <a href="login">Masuk</a></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <script>
        function notif(c,t){
            $('.alert .mytext').text(t)
            $('.alert').addClass(c)
            $('.alert').show()
            setTimeout(function() { 
                $(".alert").hide()
                $('.alert').removeClass(c)
                $('.alert.mytext').text('')
            }, 5000);
        }
        function submitRegistrasi() {
            var email = $('#email').val()
            var username = $('#username').val()
            var password = $('#password').val()
            var type = $('input[name="usertipe"]:checked').val();
            var repassword = $('#repassword').val()

            if(email == '' || username == '' || password == '' || password != repassword || type == undefined) {
                notif('alert-danger', 'Mohon lengkapi data anda')
                // alert("Mohon email diisi")
            } 
            // else if(username == '') {
            //     alert("Mohon username diisi")
            // } else if(password == '') {
            //     alert("Mohon password diisi")
            // } else if(password != repassword) {
            //     alert("Password tidak sama")
            // } 
            else {
                var data = {
                    'email'     : email,
                    'username'  : username,
                    'type'      : type,
                    'password'  : password,
                }

                // console.log("type", type)
                $.ajax({
                    url     : "<?php echo base_url(); ?>Register/regis",
                    method  : "POST",
                    data    : data,
                    success : function(response){
                        console.log(response)
                        var result = JSON.parse(response)
                        console.log(result)
                        if(result['status_code'] != 200) {
                            notif('alert-danger', result['message'])
                            // alert(result['message'])
                        } else {
                            notif('alert-success', 'Pendaftaran sukses')
                            window.location.replace("<?php echo base_url('verification') ?>");
                        }
                    }
                });
            }
        }
    </script>

</body>
</html>