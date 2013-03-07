@layout('master')

@section('container')

    {{ Form::open('/') }}
        {{ Form::textarea('snippet')}}
        <a href="{{ URL::to_route('new_snippet') }}"> Start Over </a>
        {{ Form::submit('save')}}
    {{ Form::close() }}
@endsection