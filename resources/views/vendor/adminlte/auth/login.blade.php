@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
<body class="hold-transition login-page">
    <div style="background-color:#7bceeb;">
 <table height="100%" width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
  <td valign="top" align="left" background="img/young-man-in-sportswear-an-exercise-class-in-gym (1).jpg" style="background-repeat:no-repeat; background-size:cover;">
    <div id="app" v-cloak>
        <div class="login-box">
            <!-- /.login-logo -->

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div  class="card-body login-card-body">
            <div class="login-logo">
                 <img src="{{ asset('img/BeretaTeam4.png')}}" alt="">
                 <a style="color:white" href="{{ url('/home') }}"><b>Vikingos</b><a style="color:orange">Gym</a></a>
               
            </div>
            <p style="color:white" class="login-box-msg"><font face="Comic Sans MS,arial,verdana"> Iniciar Sesión </font></p>

        <login-form name="{{ config('auth.providers.users.field','email') }}"
                    domain="{{ config('auth.defaults.domain','/home') }}"></login-form>

       

        <a style="color:white" href="{{ url('/password/reset') }}">{{ trans('adminlte_lang::message.forgotpassword') }}</a><br>
        <a style="color:white" href="{{ url('/register') }}" class="text-center">{{ trans('adminlte_lang::message.registermember') }}</a>

    </div>

    </div>
    </div>
    @include('adminlte::layouts.partials.scripts_auth')
    </td>
</tr>
 </table>
 <!--[if gte mso 9]>
</v:textbox>
</v:rect>
<![endif]-->
</div>
</body>

@endsection
