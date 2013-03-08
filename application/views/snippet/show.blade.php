@layout('master')

@section('stylesheets')
    {{ HTML::style('google-code-prettify/src/prettify.css') }}
@endsection

@section('container')
    <pre class="prettyprint linenums"> {{HTML::entities($snippet)}} </pre>
    {{ HTML::link_to_route('fork_snippet', 'Fork', $id) }}
    {{ HTML::link_to_route('new_snippet', 'New') }}
@endsection

@section('scripts')
    {{ HTML::script('google-code-prettify/src/prettify.js') }}
    <script>prettyPrint();</script>
@endsection