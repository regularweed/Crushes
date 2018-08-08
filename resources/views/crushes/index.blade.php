<table border="0">
	<tr>
		<td>MENU<br/><br/>
			<a href="{{ route('crushes.create') }}">Add New</a><br/>
			Print <br/>

			</td>
		<td>
	<table border="1">
	<thead>
		<tr>
			<td>First Name</td>
			<td>Last Name</td>
			<td>FB Profile</td>
			<td>Contact No</td>
			<!--<td>Date Saved</td>
			<td>Last Update</td>-->
			<td>Actions</td>
		</tr>
	</thead>
	<tbody>
		@foreach($crushes as $crush)
		<tr>
			<td>{{$crush->first_name}}</td>
			<td>{{$crush->last_name}}</td>
			<td><a href="{{$crush->fb_profile_link}}"> {{$crush->fb_profile_link}}</a></td>
			<td>{{$crush->contact_number}}</td>
			<!--<td>{{$crush->created_at}}</td>
			<td>{{$crush->updated_at}}</td>-->
			<td><a href="{{route('crushes.id.edit', array('id'=>$crush->id))}}">Edit</a>
				<a href="{{route('crushes.id.destroy', array('id'=>$crush->id))}}">Delete</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
</td>
</tr>
</table>
