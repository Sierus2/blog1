<h1>Form</h1>
@if(\Session::has('status'))
    {{\Session::get('status')}}
@endif


{!! Form::open(['url' => 'add']) !!}
{{ Form::text('fruitname') }}
{{ Form::text('count') }}
{{ Form::text('sum') }}
{{Form::submit('Insert Me!')}}
{!! Form::close() !!}