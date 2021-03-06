@extends('admins.layout.master')
@section('title')
Danh mục {{ $category->name }}
@endsection
@section('css')
  <!-- DataTables -->
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css "> --}}
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="admins/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Quản lý danh mục</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                <li class="breadcrumb-item "><a href="{{ route('admin.categories.index') }}">Danh mục</a></li>
                <li class="breadcrumb-item active">{{ $category->name }}</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
    @include('components.success')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
             <h1>{{ $category->name }}</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example" class="table table-bordered table-hover">
                <tbody>
                  <tr>
                    <th>Id</th>
                    <td>{{ $category->id }}</td>
                  </tr>
                  <tr>
                    <th>Danh mục cha</th>
                    <td>
                      @if ($category->parent)
                        {{ $category->parent->name }}
                      @else 
                        Null
                      @endif
                    </td>
                  </tr>
                  <tr>
                    <th>Tên danh mục</th>
                    <td>{{ $category->name }}</td>
                  </tr>
                  <tr>
                    <th>Mô tả</th>
                    <td>{{ $category->description }}</td>
                  </tr>
                  <tr>
                    <th>Hình ảnh</th>
                    <td>
                      <img width="200px" class="img-fluid" src="{{ asset('thumbnails/' . $category->thumbnail) }}" alt="{{ $category->thumbnail }}" >
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <a href="{{ route('admin.categories.index') }}" class="btn btn-flat btn-default mr-2"><i class="fas fa-arrow-left"></i>Danh sách</a>
              <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-flat btn-info"><i class="fas fa-edit"></i>Sửa</a>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
@section('js')
@endsection
@section('id-active')#nav-categories @endsection