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
        background: url(assets/img/jogja-malioboro.jpg);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .form-wrapper {
        width: 50%;
        margin-top: 15%;
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
    #btnLogin{
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
                                <h4 class="text-gray-900">Masuk Resideswita</h4>
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
                                    <label for="" class="text-gray-900">Kata Sandi</label>
                                    <input type="password" class="form-control" name="password" placeholder="" id="password">
                                </div>
                                <input id="btnLogin" type="button" class="btn btn-primary btn-block mb-2" value="Masuk" onclick="submitLogin()">
                            </form>
                            <div class="footer-form">
                                <div class="d-flex">
                                    <small>Butuh akun? <a href="register">Daftar</a></small>
                                    <small><a href="#">Lupa kata sandi</a></small>
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
        function submitLogin() {
            var username = $('#username').val()
            var password = $('#password').val()

            if(username == '' || password == '') {
                notif('alert-danger', 'Nama pengguna dan kata sandi harus diisi')
                // alert("Mohon username diisi")
            } 
            // else if(password == '') {
            //     alert("Mohon password diisi")
            // } 
            else {
                var data = {
                    'username'  : username,
                    'password'  : password,
                }
                console.log(username)

                $.ajax({
                    url     : "<?php echo base_url(); ?>Login/logedin",
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
                            if(result['data']['role_id'] == 'cacff090-75a4-466f-a467-bf69b41333b3') {
                                notif('alert-success', 'Sukses')
                                window.location.replace("<?php echo base_url('pengajuan') ?>");   
                            } else {
                                notif('alert-success', 'Sukses')
                                window.location.replace("<?php echo base_url('dashboard') ?>");
                            }
                        }
                    }
                });
            }
        }
    </script>

</body>

</html>