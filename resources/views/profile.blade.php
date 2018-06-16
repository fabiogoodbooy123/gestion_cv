@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1><b>Your Profile</b></h1>

                <img src="avatars/{{$user->avatar}}" style="width:150px; height: 150px;border-radius: 50%;margin-right: 25px; ">
                <form enctype="multipart/form-data" action="/profile/update_avatar" method="POST">

                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                    <input type="submit" class="pull-right btn btn-sm btn-primary" value="Modifer photo de profile">
                </form>
                <form method="POST" action="/profile/update">
                    <div class="form-group hidden">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PATCH">
                    </div>

                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="email" class="control-label"><b>Nom:</b></label>
                        <input type="text" name="name" placeholder="Please enter your Nom here" class="form-control" value="{{ $user->name }}"/>

                        <?php if ($errors->has('name')) :?>
                        <span class="help-block">
            <strong>{{$errors->first('name')}}</strong>
        </span>
                        <?php endif;?>

                    </div>
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label"><b>Email:</b></label>
                        <input type="text" name="email" placeholder="Please enter your email here" class="form-control" value="{{ $user->email }}"/>

                        <?php if ($errors->has('email')) :?>
                        <span class="help-block">
            <strong>{{$errors->first('email')}}</strong>
        </span>
                        <?php endif;?>

                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label"><b>Password :</b></label>
                        <input id="txtNewPassword" type="password" name="password" placeholder="Please enter your new password here" class="form-control" />

                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label"><b>Confirmer Password :</b></label>
                        <input id="txtConfirmPassword" type="password" name="ConfirmePassword" placeholder="Please enter your new password here" class="form-control" onChange="checkPasswordMatch();"/>
                        <span id='message'></span>
                    </div>

                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-primary"
                        > Modifier </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function checkPasswordMatch() {
            var eltm1=document.getElementById("txtNewPassword");
            var eltm2=document.getElementById("txtConfirmPassword");
            var password = eltm1.value;
            var confirmPassword = eltm2.value;

            if (password != confirmPassword) {
                eltm2.style.color = "red";
            }
            else
                eltm2.style.color = "green";
        }
    </script>
@endsection
