@extends('licennses.layouts.main')

@section('content')



{{Form::open (array('route'=>'organizations.store' , 'name'=>'Form'))}}
                <div class="top-margin">
                  <label>Organization Name</label>
                  <input name="org_name" type="text" class="form-control" required >
                </div>
                
                <div class="top-margin">
                  <label>Private/Public</label>
                  <select name="private_or_public" class="form-control">
						<option value="private">Private</option>
						<option value="public">Public</option>
				  </select>
                </div>
                
                

                <hr>

                <div class="row">
                  <div class="col-lg-8">
                    <!-- <label class="checkbox">
                      <input type="checkbox" required>  
                      I've read the <a href="page_terms">Terms and Conditions</a>
                    </label>  -->                       
                  </div>
                  <div class="col-lg-4 text-right">
                    <button class="btn btn-action" type="submit">Save</button>
                  </div>
                </div>
            {{Form::close()}}

@stop