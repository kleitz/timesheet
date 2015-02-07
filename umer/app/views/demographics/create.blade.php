@extends('layouts.main')

@section('contents')
  {{'Asalam O Alaikum'}}
   {{Form::open(array('route'=>'demographics.store'))}}
  		{{Form::label('fName','First Name:')}}
  		{{Form::text('fName')}}

		{{Form::label('lName','Last Name:')}}
  		{{Form::text('lName')}}

  		{{Form::label('city','City:')}}
  		{{Form::text('city')}}

		{{Form::label('country','Country:')}}
  		{{Form::text('country')}}

		{{Form::label('phone','Phone No:')}}
  		{{Form::text('phone')}}

  		{{Form::label('answer','Secret Answer:')}}
  		{{Form::text('answer')}}

		{{Form::label('email','Email:')}}
  		{{Form::text('email')}}

		
  		{{Form::label('password','Password:')}}
  		{{Form::text('password')}}

		{{Form::label('repass','Repeat Password:')}}
  		{{Form::text('repass')}}


  		{{Form::submit('submit ', array('class'=>'button') )}}

  {{Form::close()}}
@stop