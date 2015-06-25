<ul>
    @foreach( $errors as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                @if($result==1)
                    Your answer is correct.
                @else
                    Your answer is wrong.
                @endif
                <?php echo '</br>' ?>
                <a href="{{URL::to('wordgame')}}">
                    <span class="menu-text"> Next Question</span>
                </a>
                <?php echo '</br>'?>
                <a href="{{URL::to('word')}}">
                    <span class="menu-text"> Exit </span>
                </a>

            </div>
        </div>
    </div>
@endsection