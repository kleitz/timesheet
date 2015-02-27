@extends('licennses.layouts.main')

@section('content')

<div class="container" style="text-decoration-color: black; height:450px; width:100%;">
  <table class="table" style="max-width:90%; alignment-adjust: central; border-style: inset;
       border-width: 4px; border-color: darkgrey; margin-top: 2%; margin-left: 5%;">
        
           <tbody>


<tr>
            <td> 
                <h3>Package Information</h3>
            </td>
      </tr>
    @foreach($packageinfos as $pi)
 <tr >
              <td >
                   Package Name
     </td>
    
    <td >
                
           <td><div ><input class="form-control"  type="text" name="package_name" placeholder="Rs" value="{{$pi->package_name}}"></td>         
                   
    
                 
    </td>
          </tr>
          
          <tr >
            
            <td >Price of the Package</td>
           
            <td><td><div ><input class="form-control"  type="text" name="package_price" placeholder="Rs" value="{{$pi->package_price}}"></td>
          </tr>
           @endforeach
         
           
           </tbody>
      </table>
      <div1>
<div1>
        <a href="{{ URL::route('PackageInfos.edit', array('id'=>$pi->id)) }}" class="btn btn-primary btn-sm"style="margin-left: 37%;margin-top: 5%;max-width: 20%;"><h5>Edit</h5></a></div1>
      
        <a href="{{ URL::route('licennses.index') }}" class="btn btn-primary btn-sm"style="margin-left: auto;margin-top: 5%;max-width: 20%;"><h5>Product Setting</h5></a>
      </div1>
        <div1>


    </div>
    @stop