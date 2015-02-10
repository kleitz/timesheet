 @extends('layouts.signup_temp')


 @section('signup_form')
<hr>

 {{Form::open (array('route'=>'demographics.store' , 'name'=>'Form'))}}
                <div class="top-margin">
                  <label>First Name<span class="text-danger">*</span></label>
                  <input name="fName" type="text" class="form-control" {{ (Input::old('fName')) ? 'value="'. e(Input::old('fName')) .'"' : '' }} required >
                  @if($errors->has('fName'))
                          {{$errors->first('fName')}}
                  @endif
                </div>
                
                <div class="top-margin">
                  <label>Last Name<span class="text-danger">*</span></label>
                  <input name="lName" type="text" class="form-control" {{ (Input::old('lName')) ? 'value="'. e(Input::old('lName')) .'"' : '' }} required>
                  @if($errors->has('lName'))
                          {{$errors->first('lName')}}
                  @endif
                </div>
                
                <div class="top-margin">
                  <label>City</label>
                  <input name="city" type="text" {{ (Input::old('city')) ? 'value="'. e(Input::old('city')) .'"' : '' }} class="form-control">
                  @if($errors->has('city'))
                          {{$errors->first('city')}}
                  @endif
                </div>
                
                <div class="top-margin">
                  <label>Country</label>
                  <select id="country" name="country" class="form-control" {{ (Input::old('country')) ? 'value="'. e(Input::old('country')) .'"' : '' }}></select>
                  <script language="JavaScript">populateCountries("country");</script>
                  @if($errors->has('country'))
                          {{$errors->first('country')}}
                  @endif
                </div>
                
                <div class="top-margin">
                  <label>Phone No.<span class="text-danger">*</span></label>
                  <input name="phone" type="number" class="form-control" {{ (Input::old('phone')) ? 'value="'. e(Input::old('phone')) .'"' : '' }} required>
                  @if($errors->has('phone'))
                          {{$errors->first('phone')}}
                  @endif
                </div>

                <div class="top-margin">
                  <label> Secret Question:&nbsp;&nbsp;&nbsp;&nbsp; What Is Your Mother's Birthplace?<span class="text-danger">*</span></label>
                  <input name="answer" type="text" class="form-control"{{ (Input::old('answer')) ? 'value="'. e(Input::old('answer')) .'"' : '' }} required>
                  @if($errors->has('answer'))
                          {{$errors->first('answer')}}
                  @endif
                </div>
                
                
                <div class="top-margin">
                  <label>Email Address <span class="text-danger">*</span></label>
                  <input name="email" type="email" class="form-control" {{ (Input::old('email')) ? 'value="'. e(Input::old('email')) .'"' : '' }} required>
                  @if($errors->has('email'))
                          {{$errors->first('email')}}
                  @endif
                </div>
               <!--  <div class="alert alert-success" role="alert">{{$errors->first('email')}}</div> -->
                
                <div class="row top-margin">
                  <div class="col-sm-6">
                    <label>Password <span class="text-danger">*</span></label>
                    <input name="password" type="password" class="form-control" required>
                    @if($errors->has('password'))
                          {{$errors->first('password')}}
                    @endif
                  </div>

                  <div class="col-sm-6">
                    <label>Confirm Password <span class="text-danger">*</span></label>
                    <input name="repass" type="password" class="form-control" required>
                    @if($errors->has('repass'))
                          {{$errors->first('repass')}}
                    @endif
                  </div>
                </div>

                <hr>

                <div class="row">
                  <div class="col-lg-8">
                    <label class="checkbox">
                      <input type="checkbox" required>  
                      I've read the <a href="page_terms">Terms and Conditions</a>
                    </label>                        
                  </div>
                  <div class="col-lg-4 text-right">
                    <button class="btn btn-action" type="submit">Register</button>
                  </div>
                </div>
              {{Form::close()}}


@stop