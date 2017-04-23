<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Scholance</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>{{link_to_route('projects', 'Projects')}}</li>
                    <li><a href="#">Portfolios</a></li>
                    <li role="separator" class="divider"></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{!! Auth::user()->first_name.' '.Auth::user()->last_name !!}! <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>{!! link_to_route('dashboard', 'Dashboard') !!}</li>
                            <li role="separator" class="divider"></li>
                            <li class="text-center">
                                {!! Form::open(['route' => 'logout']) !!}
                                    {!! Form::submit('Logout', ['class' => 'btn btn-default']) !!}
                                {!! Form::close() !!}
                            </li>
                        </ul>
                    </li>
                    @else
                        <li>{!! link_to_route('login', 'Login') !!}</li>
                        <li>{!! link_to_route('register', 'Create an account') !!}</li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>