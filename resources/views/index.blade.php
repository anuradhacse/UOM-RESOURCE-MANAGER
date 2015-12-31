<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>UOM resource manager</title>
    <!-- Bootstarp link-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Bootstarpvalidator css link-->
    <link src="https://cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css">

    <style>
        .modal .modal-body {
            max-height: 520px;
            max-width: 900px;
            overflow-y: auto;
        } </style>

</head>
<body style="font-family: 'Segoe UI Light'">

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="color: darkorange">UOM RESOURCE MANAGER</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#" data-toggle="modal" data-target="#sign-in-modal">Sign In</a> </li>
            <li><a href="#" data-toggle="modal" data-target="#sign-up-modal">Sign Up</a> </li>
        </ul>

    </div><!-- /.container-fluid -->
</nav>




        @if(Session::has('error'))
                <h3>{{Session::get('error')}}</h3>
        @endif
<!-- Modal SignIN-->
<div class="modal fade" id="sign-in-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Sign In</h4>
            </div>
            {!!Form::open(array('url'=>'/signin','method'=>'post','id'=>'signInForm'))!!}
            <div class="modal-body">
                <feildset>
                    <div class="form-group col-lg-6 col-lg-offset-3">
                        <input type="text" class="form-control" id="username" name="username" placeholder="username" required >
                    </div>
                    <div class="form-group col-lg-6 col-lg-offset-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="password" required autocomplete="off">
                    </div>

                </feildset>
            </div>
            <div class="modal-footer">
                <button type="button"  class="btn btn-default" data-dismiss="modal">cancel</button>
                <button type="submit" id='SIgnInSubmit' class="btn btn-primary">submit</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<!-- Modal SignUP-->
<div class="modal fade" id="sign-up-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
            </div>
            {!!Form::open(array('url'=>'/signup','method'=>'post','id'=>'signUpForm'))!!}
            <div class="modal-body">

                <feildset>
                    <div class="form-group col-lg-6 col-lg-offset-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required >
                    </div>
                    <div class="form-group col-lg-6 col-lg-offset-3">
                        <input type="text" class="form-control" id="id_num" name="id_num" placeholder="IDNumber" required >
                    </div>
                    <div class="form-group col-lg-6 col-lg-offset-3">
                        <input type="text" class="form-control" id="department" name="department" placeholder="DepartmentName" required >
                    </div>
                    <div class="form-group col-lg-6 col-lg-offset-3">
                        <input type="EMAIL" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group col-lg-6 col-lg-offset-3">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required >
                    </div>
                    <div class="form-group col-lg-6 col-lg-offset-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off">
                    </div>
                    <div class="form-group col-lg-6 col-lg-offset-3">
                        <input type="password" class="form-control" id="repassword" name="repassword" placeholder="ReConfirmPassword" autocomplete="on">
                    </div>


                </feildset>

            </div>
            <div class="modal-footer">
                <button type="button"  class="btn btn-default" data-dismiss="modal">cancel</button>
                <button type="submit" id='SIgnInSubmit' class="btn btn-primary">submit</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>


<!-- jQuery necessary for bootstrap javascript  plugins-->
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- Bootstarp validor link-->
<script src="https://cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
{!! HTML::script('../js/script.js') !!}
</body>
</html>
