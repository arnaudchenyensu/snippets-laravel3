@layout('master')

@section('stylesheets')
    {{ HTML::style('google-code-prettify/src/prettify.css') }}
@endsection

@section('container')
    <pre class="prettyprint"> {{HTML::entities($snippet)}} </pre>
@endsection

@section('scripts')
    {{ HTML::script('google-code-prettify/src/prettify.js') }}
@endsection