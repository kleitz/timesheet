@extends('layouts.setHierarchy_temp')

@section('hierar')

  <div class="container">

            <ol class="breadcrumb">
              <li><a href="index">Home</a></li>
              <li class="active">Registration</li>
            </ol>

            <div class="row">
              
              <!-- Article main content -->
              <article class="col-xs-12 maincontent">
                <header class="page-header">
                  <h1 class="page-title">Registration</h1>
                </header>
                
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                  <div class="panel panel-default">
                    <div class="panel-body">
                      <h3 class="thin text-center">Register a new account</h3>
                      <p class="text-center text-muted">If you are a new user, you can Register by writing your credentials below. </br>If you are have registered before you can access your account after </br><a href="signin">Login</a></p>
                      



       <hr>

          

           {{Form::open (array('route'=>'functionalities.store' , 'name'=>'Form1'))}}
                        
                       <!--  <div class="alert alert-success" role="alert">{{$errors->first('email')}}</div> -->
                        
                        <div class="top-margin">
                          <label>Define Hierarchy</label>
                          {{Form::select('def_hierar', array('0' => 'Disable', '1' => 'Enable'))}}
                        </div>

                        <div class="top-margin">
                          <label>Manage Employees</label>
                          {{Form::select('manage_emplo', array('0' => 'Disable', '1' => 'Enable'))}}
                        </div>
                         
                        <div class="top-margin">
                          <label>Manage Timesheets</label>
                          {{Form::select('manage_timesh', array('0' => 'Disable', '1' => 'Enable'))}}
                        </div>

                        <div class="top-margin">
                          <label>Create Timesheets</label>
                          {{Form::select('create_timesh', array('0' => 'Disable', '1' => 'Enable'))}}
                        </div>



                        <div class="top-margin">
                          <label>Approve Timesheets</label>
                          {{Form::select('appr_timesh', array('0' => 'Disable', '1' => 'Enable'))}}
                        </div>


                        <div class="top-margin">
                          <label>Check Reports</label>
                          {{Form::select('check_rep', array('0' => 'Disable', '1' => 'Enable'))}}
                        </div>

                        <div class="row">
                          <div class="col-lg-8">                        
                          </div>
                          <div class="col-lg-4 text-right">
                            <button class="btn btn-action" type="submit">Register</button>
                          </div>
                        </div>



                      {{Form::close()}}

        </hr>


                    </div>
                  </div>

                </div>
                
              </article>
              <!-- /Article -->

            </div>
          </div>


@stop