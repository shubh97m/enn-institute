<select class="form-control" name="sub_course_id" id="sub_course">
	@if(!empty($subcourse))
			<option value="">Select Sub Course</option>
		@foreach($subcourse as $subcourses)
			<option value="{{!empty($subcourses['id'])?$subcourses['id']:''}}">
			{{!empty($subcourses['name'])?$subcourses['name']:''}}</option>
		@endforeach
		@else
			<option value="">No Record Found in this Course</option>
	@endif
</select>