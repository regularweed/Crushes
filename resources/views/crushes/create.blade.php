<form action="{{$action}}" method="POST">
	{{ csrf_field() }}

	<label>First name: </label><input type="text" name="first_name" value="{{$crush->first_name}}"/><br/>
	<label>Last name: </label><input type="text" name="last_name" value="{{$crush->last_name}}"/><br/>
	<label>FB Profile link </label><input type="text" name="fb_profile_link" value="{{$crush->fb_profile_link}}"/><br/>
	<label>Contact number </label><input type="text" name="contact_number" value="{{$crush->contact_number}}"/><br/>
	<button type="submit">{{$submit_text}}</button>
</form>


