<form action="{{$action}}" method="POST">
	{{ csrf_field() }}
<table cellspacing="10">
	<tr><td colspan="2" align="center">Create New Crush </td>
	</tr>
	<tr>
		<td><label>First name: </label></td>
		<td><input type="text" name="first_name" 
			value="@if (old('first_name')) {{old('first_name')}} @else {{$crush->first_name}} @endif"  /></td>
	</tr>
	<tr>
		<td><label>Last name: </label></td>
		<td><input type="text" name="last_name" 
			value="@if (old('last_name')) {{old('last_name')}} @else {{$crush->last_name}} @endif"  /></td>
	</tr>
	<tr>
		<td><label>FB Profile Link: </label></td>
		<td><input type="text" name="fb_profile_link" 
			value="@if (old('fb_profile_link')) {{old('fb_profile_link')}} @else {{$crush->fb_profile_link}} @endif"/></td>
	</tr>
	<tr>
		<td><label>Contact Number: </label></td>
		<td><input type="text" name="contact_number" 
			value="@if (old('contact_number')) {{old('contact_number')}} @else {{$crush->contact_number}} @endif" /></td>
	</tr>
	<tr><td colspan="2" align="center"></td></tr>
	<tr>
		<td colspan="2" align="center"><button type="submit">{{$submit_text}}</button></td>
	</tr>
</table>
</form>

<font size="1" color="red" >
@if ($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
	</ul>
</div>
@endif
</font>
