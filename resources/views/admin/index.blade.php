@extends('layouts.admin-master')

@section('content')

@endsection

@section('script')
	<script type="text/javascript">
		var token = "{{ Session::token() }}";
	</script>

@endsection