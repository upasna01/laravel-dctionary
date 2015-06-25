<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    {!! Form::open(array ('url' => 'findans', 'class' => 'form-inline' )) !!}
                    <thead>
                        <tr>
                            <td>Select an answer for the given word.</td>
                        </tr>
                    </thead>
                    @foreach ($correct as $corrects)
                        <tr>
                            <th>{{ $corrects->word }}</th>
                        </tr>
                        <tr>
                            <td>{!! Form::hidden('id',$corrects->id ) !!}
                                {!! Form::radio('radio',$corrects->definition, 'required') !!}
                                {{ $corrects->definition }}
                                {{ $corrects->id }}
                            </td>
                        </tr>
                    @endforeach
                    @foreach ($random as $randomword )
                    <tr>
                        <td>

                           {!! Form::radio('radio', $randomword ->definition,'required') !!}
                           {{ $randomword ->definition  }}
                            {{ $randomword ->id  }}
                        </td>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td>
                            {!! Form::submit('Submit',array(
                                    'class'=> 'btn btn-default')) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                </table>

                <a href="{{URL::to('wordgame')}}">
                    <i class="icon-dashboard"></i>
                    <span class="menu-text"> Next Question</span>
                </a>

                <a href="{{ URL::to('word') }}">
                    <i class="icon-dashboard"></i>
                    <span class="menu-text"> Exit </span>
                </a>
            </div>
        </div>
    </div>

@endsection