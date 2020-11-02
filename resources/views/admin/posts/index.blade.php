@extends('admin.layouts.dashboard')
@section('content')
   
<div class="row py-lg-2">
        <div class="col-md-6">
            <h2>This is Post List</h2>
        </div>
        <div class="col-md-6">
            <a href="/posts/create" class="btn btn-primary btn-lg float-md-right" role="button" aria-pressed="true">Create New Post</a>
        </div>
    </div>
 <!-- DataTables Example -->
 <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Data Table Example</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Content</th>
              <th>Image</th>
              <th>User</th>
              <th>Tools</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Content</th>
              <th>Image</th>
              <th>User</th>
              <th>Tools</th>
            </tr>
          </tfoot>
          <tbody>
           
              @foreach ($posts as $post)
                <tr>
                    <td>{{ $post['id']}}</td>
                    <td>{{ $post['title']}}</td>
                    <td>{{ $post['content']}}</td>
                    <td>{{ $post['image_url']}}</td>
                    <td>{{ $post->user['name']}}</td>
                    <td>..</td>
                </tr>
              @endforeach
              
            
            
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>

@endsection