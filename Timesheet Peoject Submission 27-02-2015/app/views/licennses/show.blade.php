@extends('licennses.layouts.main')

@section('content')

<div class="container" style="text-decoration-color: black; height:450px; width:100%;">


{{ Form::model($licennse, ['route' => ['licennses.index', $licennse->id], 'method' => 'put' , 'id' => 'pform'])}}


<input type="hidden" name="_token" value="{{ csrf_token() }}" />
<table class="table" style="max-width:90%; alignment-adjust: central; border-style: inset;
       border-width: 4px; border-color: darkgrey; margin-top: 2%; margin-left: 5%;">
       
           <tbody>               
      <tr>
            <td> 
                <h3>Product Setting</h3>
            </td>
      </tr>
               
               
             
        
        
        <tr >
            <td  >     
            set License period
            </td>
            <td > 
<!--                 <input class="form-control" type="text" name="license_period" placeholder="Months">  -->
               {{ Form::input('text', 'license_period', null, array('required' => 'true')) }}
          </tr>       
        

            <tr >
      
            <td  >     
            set trial period
            </td>
            <td > 
               {{ Form::input('text', 'trial_period', null, array('required' => 'true')) }} </td>
        </tr>     


         <tr>
            <td >Expiry notification before </td>
           <td> {{ Form::input('text', 'Notify_before', null, array('required' => 'true')) }}</td>
          </tr>



       
        </tbody>

      </table>
<div1>
      <a href="{{ URL::route('licennses.index', array('id'=>$licennse->id)) }}" class="btn btn-primary btn-sm"style="margin-left: 45%;margin-top: 5%;max-width: 20%;"><h3>Back</h3></a></div1>
</div1>
      {{ Form::close() }}
    </div>



@stop