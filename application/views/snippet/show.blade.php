@layout('master')

@section('container')
    <pre> {{HTML::entities($snippet)}} </pre>
@endsection