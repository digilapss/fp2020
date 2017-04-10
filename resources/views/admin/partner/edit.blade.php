@extends('layouts.admin-master')

@section('content')
	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
		          Edit Partner
		        </div>
		        <div class="card-body">
		        	<div class="col-lg-10 col-md-offset-2">
						@include('includes.info-box')
					</div>
		        	<form class="form form-horizontal" action="{{ route('admin.partner.update') }}" method="post" enctype="multipart/form-data">
					  	<div class=" {{ $errors->has('name') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">Name</label>
					        <div class="col-md-10">
					          <input type="text" class="form-control" placeholder="" id="name" name="name" value="{{ Request::old('name') ? Request::old('name') : isset($partner) ? $partner->name : '' }}">
					        </div>
					    </div>
					    <div class=" {{ $errors->has('catpart_id') ? 'form-group has-error' : 'form-group'}} ">
                            <label class="col-md-2 control-label">Category</label>
                            <div class="col-md-4">
                              <select class="select2" name="catpart_id">
                              		@foreach($catparts as $catpart)
                                        <option value="{{ $catpart->id }}" 
											@if($catpart->id === $partner->catpart_id)
												selected="true"
											@endif
                                        >{{ $catpart->title }}</option>
                                    @endforeach
                               </select>
                            </div>
                        </div>
					    <div class=" {{ $errors->has('website') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">Website</label>
					        <div class="col-md-10">
					          <input type="text" class="form-control" placeholder="" id="website" name="website" value="{{ Request::old('website') ? Request::old('website') : isset($partner) ? $partner->website : '' }}">
					        </div>
					    </div>
					    <div class=" {{ $errors->has('logo') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">Logo</label>
					        <div class="col-md-10">
					        	<input type="file" class="form-control" placeholder="" id="file" name="file" value="{{ Request::old('file') }}">
					        </div>
					    </div>
					    <div class=" {{ $errors->has('narrative') ? 'form-group has-error' : 'form-group'}} ">
					        <div class="col-md-2">
					          <label class="control-label">Narrative</label>
					          <p class="control-label-help">( short detail of partner )</p>
					        </div>
					        <div class="col-md-10">
					          <textarea class="form-control" id="narrative" name="narrative">{{ Request::old('narrative') ? Request::old('narrative') : isset($partner) ? $partner->narrative : ''}}</textarea>
					        </div>
					    </div>
					    
					    <div class="form-footer">
					    <div class="form-group">
					      <div class="col-md-10 col-md-offset-2">
					        <button type="submit" class="btn btn-primary">Save</button>
					        <a href="{{ route('admin.partner.index') }}">
					        	<button type="button" class="btn btn-default">Cancel</button>
					        </a>
					        <input type="hidden" value="{{ Session::token() }}" name="_token" />
					        <input type="hidden" value="{{ $partner->id }}" name="partner_id">
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