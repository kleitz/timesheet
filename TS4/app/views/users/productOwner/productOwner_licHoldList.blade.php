@extends('layouts.productOwner')


@section('licensees')
	<h2>The List Of All License Holders</h2>


	@foreach($list as $list)
			{{link_to_route('users.productOwner.productOwner_licHoldList' , $list->fName, [$list->id])}}
	@endforeach
@stop