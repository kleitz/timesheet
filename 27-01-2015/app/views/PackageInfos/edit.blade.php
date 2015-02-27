@extends('licennses.layouts.main')

@section('content')

	<!-- container -->
	<div class="container" style="text-decoration-color: black; height:450px; width:100%; position: relative;margin-top: 3%;">
<!--<img src="assets/images/image4.png"  height="450" width="1400" alt="1image" style='opacity: 0.5;position: fixed; '/>-->



			
			<!-- Article main content -->
                       
			<!-- /Article -->
			
			<!-- Sidebar -->
			

				
			<!-- /Sidebar -->

		
           
            
	

{{ Form::model($packageinfo, ['route' => ['PackageInfos.update', $packageinfo->id], 'method' => 'put' , 'id' => 'pform2'])}}
   


<table class="table" style="max-width:90%; alignment-adjust: central; border-style: inset;
       border-width: 4px; border-color: darkgrey; margin-top: 2%; margin-left: 5%;">
        
           <tbody>
      

         
      
             
        
            <td> 
                <h3>Package Setting</h3>
            </td>
      </tr>
    
<!--         ------  -------------------------package setting-------------------------------------->
          <tr >
              <td >
                   Select the package
     </td>
    
    <td >
                
                    
                   <select class="form-control"   name="package_name">
                        <option   value="standard">Standard</option>
                        <option   value="premium">Premium</option>
                        <option  value="enterprise">Enterprise</option>
                    </select>  
   
    
                 
    </td>
          </tr>
          
          <tr >
            <td >Set price of the package</td>
           
            <td>{{ Form::input('text', 'package_price', null, array('required' => 'true')) }}</td>
          </tr>
         
           
          
        </tbody>
      </table>
      
            
            
          <div2>

              <a href="{{ URL::route('PackageInfos.index') }}" class="btn btn-primary btn-sm"style="margin-left: 40%;">Back</a>
               {{ Form::submit('Update',['class' => 'btn btn-primary btn-sm']) }}</div1>
          </div2>
          <div3>
      {{ Form::close() }}
    </div>
            
           
       

		
		
@stop