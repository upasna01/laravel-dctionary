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
                {!! Form::open(array ('url' => 'findword','class' => 'form-inline') ) !!}
                {!! Form::text('search',null,
                    array( 'required',
                            'class' => 'form-control searchQuery',
                            'placeholder' => 'Search','autofocus' )) !!}
                {!! Form::submit('Search',
                    array ('class' => 'btn btn-default') ) !!}
                {!! Form::close() !!}

			<div class="col-md-10 col-md-offset-1">
				@foreach ($dictwords as $words)
					<table>
	            		<tr>
                            <td><a href="javascript:void(0);" name="search" class="queryWords" data-query="{{ $words->word }}">{{ $words->word }}</a></td>
                        </tr>
	       			</table>
	    		@endforeach
                <?php echo $dictwords->render(); ?>
			</div>
		</div>
         <a href="{{ URL::to('wordgame') }}">
        <span class="menu-text"> Test Vocabulary </span>
        </a>
	</div>
</div>
    <script>
        jQuery(document).ready(function(){
            jQuery(".queryWords").click(function(){
                jQuery(".searchQuery").val(jQuery(this).attr("data-query"));
               return false;
           })
        });
    </script>
@endsection
