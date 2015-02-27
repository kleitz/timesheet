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
                {{$licennse->license_period}}
          </tr> 
         <!--  {{$packageinfo = new PackageInfo();}}     -->  
        
<tr >
            <th >     
            Trial Period
            </th>
            <td > 
            {{$licennse->trial_period}}    
        </tr>    

         <tr>
            <th>Expiry Notification Before </th>
            <td > {{$licennse->Notify_before}}</td>
          </tr>



        <tr>
            <td> 
                <h3>Package Information</h3>
            </td>
      </tr>
    
<!--         ------  -------------------------package setting-------------------------------------->
          <tr >
              <td >
                   Select the package
     </td>
    
    <td >
                @endforeach
                    
                   <select class="form-control"   name="package_name">
                        <option   value="standard">Standard</option>
                        <option   value="premium">Premium</option>
                        <option  value="enterprise">Enterprise</option>
                    </select>  
   
    
                 
    </td>
          </tr>
          
          <tr >
            @foreach($packageinfo as $PackageInfo)
            <td >Price of the Package</td>
           
            <td>{{$packageinfo->package_price}}</td>
          </tr>
         @endforeach
           <tr>
          <td>

          </td>
               <!-- <td>
                <a href="{{URL::route('licennses.edit', array('id'=>$licennse->id))}}">Edit</a>
                 <input class="form-control" type="Button" name="cancelps" value="Cancel" style="max-width: 20%; margin-left: auto;">
               <input class="form-control" type="submit" name="saveps" value="Save" style="max-width: 20%; margin-left: auto;">
               </td> -->
           </tr>
        </tbody>
      </table>
      
      
    </div>

@stop