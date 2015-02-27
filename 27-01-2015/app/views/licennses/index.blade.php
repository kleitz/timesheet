@extends('licennses.layouts.main')

@section('content')

<div class="container" style="text-decoration-color: black; height:450px; width:100%;">
<!--<img src="assets/images/image4.png"  height="450" width="1400" alt="1image" style='opacity: 0.5;position: fixed; '/>-->



      
      <!-- Article main content -->
                       
      <!-- /Article -->
      
      <!-- Sidebar -->
      

        
      <!-- /Sidebar -->

    

<table class="table" style="max-width:90%; alignment-adjust: central; border-style: inset;
       border-width: 4px; border-color: darkgrey; margin-top: 2%; margin-left: 5%;">
        
           <tbody>
            
      <tr>
            <td> 
                <h3>Product Information</h3>
            </td>
      </tr>  
               
             @foreach($licennses as $licennse) 
        
        
        <tr >
            <th>     
             License Period
            </th>
            <td > 
              <input class="form-control" type="text" name="license_period" value="{{$licennse->license_period}}"placeholder="Months">
              
               
              </td>
          </tr> 
         <!--  {{$packageinfo = new PackageInfo();}}     -->  
        
<tr >
            <th >     
            Trial Period
            </th>
            <td > 
            <input class="form-control" type="text" name="trial_period" placeholder="Months" value="{{$licennse->trial_period}}">   </td> 
        </tr>    

         <tr>
            <th>Expiry Notification Before </th>
            <td ><input class="form-control" type="text" name="notify_before"  placeholder="Days" value="{{$licennse->notify_before}}"> </td>
          </tr>
@endforeach


        
        </tbody>
      </table>
      <div1>
       
        <a href="{{ URL::route('licennses.edit', array('id'=>$licennse->id)) }}" class="btn btn-primary btn-sm"style="margin-left: 40%;margin-top: 5%;max-width: 20%;"><h5>Edit</h5></a></div1>
              
      

        <a href="{{ URL::route('PackageInfos.index') }}" class="btn btn-primary btn-sm"style="margin-left: auto;margin-top: 5%;max-width: 20%;"><h5>Package Setting</h5></a>
    </div>

@stop