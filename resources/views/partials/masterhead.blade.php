<div class="masthead clearfix">
    <div class="inner">
        <h3 class="masthead-brand">CAR RENTAL</h3>
        <nav>
            <ul class="nav masthead-nav">
                <li class="active"><a href="{{ url() }}">home</a></li>
                <li><a href="{{ url('reservation') }}">reservation</a></li>
                <li><a href="{{ url('contact') }}">contact</a></li>
                
                @if(Session::has('user'))
                <li><a href="{{ url('customer/signout') }}">Welcome {{ Session::get('user')->fname }}</a></li>
                @else
                <li><a href="{{ url('customer/signin') }}">signin</a></li>
                @endif
            </ul>
        </nav>
    </div>
</div>
