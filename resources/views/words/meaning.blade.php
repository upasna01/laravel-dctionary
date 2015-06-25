<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>


@extends('app')
@section('content')
    <div class="col-md-10 col-md-offset-1">
        @foreach($find as $words)
            <table>
                <tr>
                    <td>{{ $words->word }}</td>
                </tr>
                <tr>
                    <td>Type:</td>
                    <td>{{ $words->wordtype }}</td>
                </tr>
                <tr>
                    <td>Definition:</td>
                    <td>{{ $words->definition }}</td>
                </tr>
            </table>
        @endforeach
        <?php echo '</br>'?>
        <a href="{{ URL::to('word')}}">
            <span class="menu-text">Back</span>
        </a>
    </div>
@endsection