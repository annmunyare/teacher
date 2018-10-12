@extends('layout')

@section('content')
<br>
<div id="main" class="row">
   <div id="content" class="col-md-8">
      <a href = "/teachers/create " class="btn btn-info">Add</a>

      <table class="table table-condensed table-striped table-bordered table-hover ">
         <tr>
            <th>#</th>
            <th >First  Name</th>
            <th >Last Name</th>
            <th >Email</th>
            <th >Subject</th>
         </tr>
         @foreach($teachers as $teacher)
         <tr>
            <td>{{$teacher->id}}</td>
            <td>{{$teacher->firstname}}</td>
            <td>{{$teacher->lastname}}</td>
            <td>{{$teacher->email}}</td>
            <td>{{$teacher->subject->name }}</td>
         </tr>
         @endforeach
      </table>
   </div>
   <div class="col-md-6">
		<form action="/search" method="POST" role="search">
			{{ csrf_field() }}
			<div class="input-group">
        
				<input type="search" class="form-control" name="q"
					placeholder="Search teacher"> <span class="input-group-btn">
					<button type="submit" class="btn btn-info"> search
						<span class="btn-info"></span>
					</button>
				</span>
			</div>
		</form>
	</div>	

</div>
@endsection


