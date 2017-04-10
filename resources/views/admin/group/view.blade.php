@extends('layouts.admin-master')

@section('content')
	
	<div class="col-md-12">
		@include('includes.info-box')
	</div>
	
	
	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
					<h1>Working Group on {{ $groups->name }}</h1>
		       	</div>
		       	<div class="card-body">
		       		<a href="{{ route('admin.group.edit', ['group_id' => $groups->id]) }}">
		        		<button class="btn btn-primary">Update Narrative</button>
		        	</a>

		        </div>
		    </div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
		       		Narrative
		       	</div>
		        <div class="card-body">
		        	{!! $groups->narrative !!}
				</div>
		    </div>
		</div>

	</div>

	<div class="row">
		<div class="col-md-6">
		    <div class="card">
		        <div class="card-header">
		       		<a href="{{ route('admin.member.create', ['group_id' => $groups->id]) }}">
		        		<button class="btn btn-primary btn-xs">Add Members</button>
		        	</a>
		       	</div>
		        <div class="card-body">
		        	Members
		        	<ul>
		        		 @if(count($members) == 0)
					    	<li>No Member</li>
						@else
							@foreach($members as $member)
								<li>
									{{ $member->name }} - {{ $member->position }} 

									<a href="{{ route('admin.member.edit', ['member_id' => $member->id]) }}">Edit</a>
									<a href="{{ route('admin.member.delete', ['member_id' => $member->id]) }}">Delete</a>



								</li>
							@endforeach
						@endif
		        	</ul>
				</div>
		    </div>
		</div>

		<div class="col-md-6">
		    <div class="card">
		        <div class="card-header">
		       		<a href="{{ route('admin.docugroup.create', ['group_id' => $groups->id]) }}">
		        		<button class="btn btn-primary btn-xs">Add Document</button>
		        	</a>
		       	</div>
		        <div class="card-body">
		        	Documents
		        	<ul>
		        		 @if(count($docugroups) == 0)
					    	<li>No Document</li>
						@else
							@foreach($docugroups as $docugroup)
								<li>
									<a href="{{ asset("documents/docugroup/$docugroup->file") }}">
									[{{ $docugroup->category }}] - {{ $docugroup->name }} 
									</a>
									<a href="{{ route('admin.docugroup.edit', ['docugroup_id' => $docugroup->id]) }}">Edit</a>
									<a href="{{ route('admin.docugroup.delete', ['docugroup_id' => $docugroup->id]) }}">Delete</a>
								</li>
							@endforeach
						@endif
		        	</ul>
				</div>
		    </div>
		</div>
	</div>
@endsection

@section('script')
	<script type="text/javascript">
		var token = "{{ Session::token() }}";
	</script>

@endsection