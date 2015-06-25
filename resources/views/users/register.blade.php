@extends("admin.layouts.login")

@section('title')
    {{{ 'Please LogIn' }}} :: @parent
@stop

@section("content")


    <div class="tab-content">
        <div id="login" class="tab-pane active">
            {!! Form::open(array('url' => URL::route(MyHelper::returnRoute('auth','login')) ,'class'=>'form-signin')) !!}

            <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                <?php $error_message = $errors->first("error_msg");  ?>
                {{{ !empty($error_message)?$errors->first("error_msg"):'Enter your email and password' }}}
            </p>

            <input type="text" name="username" value="{{{Input::old("username")}}}" placeholder="Email" class="form-control" required="required" />
            <input type="password" name="password" placeholder="Password" class="form-control" required="required" />
            <button class="btn text-muted text-center btn-danger" type="submit">Sign in</button>
            {!! Form::close() !!}
        </div>
        <div id="forgot" class="tab-pane">
            {!! Form::open(array('url' => URL::route(MyHelper::returnRoute('auth','request')), 'class' => 'form-signin')) !!}
            <?php
            $error = Session::get('error');
            $status = Session::get('status');
            ?>
            <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                @if (!empty($error))
                    {{{ $error  }}}
                @elseif (!empty($status))
                    {{{ $status }}}
                @else
                    Enter your valid e-mail
                @endif
            </p>
            <input type="email" value="{{{ Input::old("email") }}}"  required="required" placeholder="Your E-mail"  class="form-control" />
            <br />
            <button class="btn text-muted text-center btn-success" type="submit">Recover Password</button>
            {!! Form::close() !!}
        </div>
        <div id="signup" class="tab-pane">
            <form action="index.html" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Please Fill Details To Register</p>
                <input type="text" placeholder="First Name" class="form-control" />
                <input type="text" placeholder="Last Name" class="form-control" />
                <input type="text" placeholder="Username" class="form-control" />
                <input type="email" placeholder="Your E-mail" class="form-control" />
                <input type="password" placeholder="password" class="form-control" />
                <input type="password" placeholder="Re type password" class="form-control" />
                <button class="btn text-muted text-center btn-success" type="submit">Register</button>
            </form>
        </div>
    </div>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#login" data-toggle="tab">Login</a></li>
            <li><a class="text-muted" href="{{ URL::route(MYHelper::returnRoute('auth', 'request')) }}" >Forgot Password</a></li>
            <li style="display: none"><a class="text-muted" href="#signup" data-toggle="tab">Signup</a></li>
        </ul>
    </div>



@stop