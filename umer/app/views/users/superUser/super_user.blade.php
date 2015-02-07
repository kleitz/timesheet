@extends('layouts.super_user')


@section('switch')       

							{{HTML::style('assets/css/style.css');}}
							{{HTML::style('assets/css/main.css');}}

				<tr>
						<td>Level 1</td>
	                    <td>
	                        <!--------------CSS IN MAIN.CSS---------------->
	                         <div class="switch switch switch-brown">
                              <input type="radio" class="switch-input" name="view2" value="week2" id="week2" checked>
                              <label for="week2" class="switch-label switch-label-off">Disable</label>
                              <input type="radio" class="switch-input" name="view2" value="week2"  id="month2">
                              <label for="month2" class="switch-label switch-label-on">Enable</label>
                              <span class="switch-selection"></span>
                            </div>
	                    </td>
			
                        <td>
                            <!--------------CSS IN MAIN.CSS---------------->
                            <div class="switch switch switch-brown">
                              <input type="radio" class="switch-input" name="view2" value="week2" id="week2" checked>
                              <label for="week2" class="switch-label switch-label-off">Disable</label>
                              <input type="radio" class="switch-input" name="view2" value="week2"  id="month2">
                              <label for="month2" class="switch-label switch-label-on">Enable</label>
                              <span class="switch-selection"></span>
                            </div>
                        </td>


                        <td>
                            <!--------------CSS IN MAIN.CSS---------------->
                            <div class="switch switch switch-brown">
                              <input type="radio" class="switch-input" name="view2" value="week2" id="week2" checked>
                              <label for="week2" class="switch-label switch-label-off">Disable</label>
                              <input type="radio" class="switch-input" name="view2" value="week2"  id="month2">
                              <label for="month2" class="switch-label switch-label-on">Enable</label>
                              <span class="switch-selection"></span>
                            </div>
                        </td>
                        <td>
                            <!--------------CSS IN MAIN.CSS---------------->
                            <div class="switch switch switch-brown">
                              <input type="radio" class="switch-input" name="view3" value="week3"  id="week3" checked>
                              <label for="week3" class="switch-label switch-label-off">Disable</label>
                              <input type="radio" class="switch-input" name="view3" value="week3"  id="month3">
                              <label for="month3" class="switch-label switch-label-on">Enable</label>
                              <span class="switch-selection"></span>
                            </div>
                        </td>
                        <td>
                            <!--------------CSS IN MAIN.CSS---------------->
                            <div class="switch switch switch-brown">
                              <input type="radio" class="switch-input" name="view4" value="week4"  id="week4" checked>
                              <label for="week4" class="switch-label switch-label-off">Disable</label>
                              <input type="radio" class="switch-input" name="view4" value="week4"  id="month4">
                              <label for="month4" class="switch-label switch-label-on">Enable</label>
                              <span class="switch-selection"></span>
                            </div>
                        </td>
                        <td>
                            <!--------------CSS IN MAIN.CSS---------------->
                            <div class="switch switch switch-brown">
                              <input type="radio" class="switch-input" name="view5" value="week5"  id="week5" checked>
                              <label for="week5" class="switch-label switch-label-off">Disable</label>
                              <input type="radio" class="switch-input" name="view5" value="week5"  id="month5">
                              <label for="month5" class="switch-label switch-label-on">Enable</label>
                              <span class="switch-selection"></span>
                            </div>
                        </td>
			
		</tr>

@stop