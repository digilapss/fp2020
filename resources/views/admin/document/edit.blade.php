@extends('layouts.admin-master')

@section('content')
	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
		          Edit Document
		        </div>
		        <div class="card-body">
		        	<div class="col-lg-10 col-md-offset-2">
						@include('includes.info-box')
					</div>
		        	<form class="form form-horizontal" action="{{ route('admin.document.update') }}" method="post" enctype="multipart/form-data">
					  	<div class=" {{ $errors->has('name') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">Name</label>
					        <div class="col-md-10">
					          <input type="text" class="form-control" placeholder="" id="name" name="name" value="{{ Request::old('name') ? Request::old('name') : isset($document) ? $document->name : '' }}">
					        </div>
					    </div>
					    <div class=" {{ $errors->has('date') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">Date</label>
					        <div class="col-md-10">
					          <input type="text" class="form-control" placeholder="" id="dp1" name="date" value="{{ Request::old('date') ? Request::old('date') : isset($document) ? $document->date : '' }}">
					        </div>
					    </div>
					    <div class=" {{ $errors->has('category') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">Category</label>
					        <div class="col-md-4">
					          <select class="select2" name="category_id">
					          		@foreach($categories as $category)
								    	<option value="{{ $category->id }}" 
								    		@if($category->id === $document->category_id)
												selected="true"
											@endif>{{ $category->name }}</option>
								    @endforeach
							   </select>
					        </div>
					    </div>
					    <div class=" {{ $errors->has('file') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">File</label>
					        <div class="col-md-10">
					        	<input type="file" class="form-control" placeholder="" id="file" name="file" value="{{ Request::old('file') }}">
					        </div>
					    </div>
					    <div class=" {{ $errors->has('description') ? 'form-group has-error' : 'form-group'}} ">
					        <div class="col-md-2">
					          <label class="control-label">Description</label>
					          <p class="control-label-help">( short detail of event description , 150 max words )</p>
					        </div>
					        <div class="col-md-10">
					          <textarea class="form-control" id="description" name="description">{{ Request::old('description') ? Request::old('description') : isset($document) ? $document->description : ''}}</textarea>
					        </div>
					    </div>
					    
					    <div class="form-footer">
					    <div class="form-group">
					      <div class="col-md-10 col-md-offset-2">
					        <button type="submit" class="btn btn-primary">Save</button>
					        <a href="{{ route('admin.document.index') }}">
					        	<button type="button" class="btn btn-default">Cancel</button>
					        </a>
					        <input type="hidden" value="{{ Session::token() }}" name="_token" />
					        <input type="hidden" value="{{ $document->id }}" name="document_id">
					      </div>
					    </div>
					  </div>
					</form>
		        </div>
		      </div>
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