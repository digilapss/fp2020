@extends('layouts.admin-master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Upload Files</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.files.post.create') }}"> Back</a>
            </div>
        </div>
    </div>

    <form action="{{ route('admin.files.post.create') }}" method="post" enctype="multipart/form-data">
        <input type="text" name="name">
        <input type="file" name="product_image">
        <input type="text" name="details">
        <input type="submit">
        <input type="hidden" value="{{ Session::token() }}" name="_token" />
    </form>

   
@endsection

@section('script')
    <script type="text/javascript">
        var token = "{{ Session::token() }}";
    </script>
@endsection