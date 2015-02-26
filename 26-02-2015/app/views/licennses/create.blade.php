@extends('licennses.layouts.main')

@section('content')

<div class="container" style="text-decoration-color: black; height:450px; width:100%;">

 <a href="{{ URL::route('licennses.index') }}" class="btn btn- primary btn-sm"style="margin-top:15%;"><h2>Product Management<h2></a>
         
<a href="{{ URL::route('PackageInfos.index') }}" class="btn btn- primary btn-sm"style=""><h2>Package Setting</h2></a>
          


</div>

@stop