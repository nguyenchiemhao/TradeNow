@extends('admins.layout.master')
@section('title')
Thêm mới danh mục
@endsection
@section('css')
<link rel="stylesheet" href="admins/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<!-- Toastr -->
<link rel="stylesheet" href="admins/plugins/toastr/toastr.min.css">
<link rel="stylesheet" href="admins/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="admins/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Thêm mới danh mục</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('admin.categories.index') }}"> Danh mục </a></li>
                <li class="breadcrumb-item active">Thêm mới</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
    @include('components.success')
    <!-- Main content -->
    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Vui lòng nhập những thông tin víp cà chua</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-7">
                        <form action="{{ route('admin.categories.store') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Danh mục cha</label>
                                    <select name="parent_id" class="form-control select2  @error('parent_id') is-invalid @enderror" style="width: 100%;">
                                        <option selected="selected" value="0">Không có</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('parent_id')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{--  --}}
                                <div class="form-group">
                                    <label for="name" class="form-label">
                                        Tên danh mục
                                        <span class="text text-danger">*</span>
                                    </label>
                                    <div class="input-group">
                                        <input
                                            class="form-control @error('name') is-invalid @enderror"
                                            type="text" id="name"
                                            name="name"
                                            value="{{ old('name') }}"
                                            placeholder="Nhập tên danh mục..."
                                            required
                                            minlength="3"
                                        />
                                    </div>
                                    @error('name')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{--  --}}
                                <div class="form-group">
                                    <label for="image" class="form-label">
                                        Hình ảnh<span class="text text-danger">*</span>
                                    </label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input
                                                type="file"
                                                class="custom-file-input @error('image') is-invalid @enderror"
                                                id="image" name="image"
                                                required
                                                accept="image/*"
                                                aria-describedby="inputGroupFileAddon02"
                                            >
                                            <label class="custom-file-label" for="image" aria-describedby="inputGroupFileAddon02">Chọn 1 hình ảnh</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="inputGroupFileAddon02"><i class="fas fa-image"></i></span>
                                        </div>
                                        @error('image')
                                            <span class="text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="form-group">
                                    <label for="description" class="form-label">
                                        Mô tả
                                    </label>
                                    <div class="input-group">
                                        <textarea
                                            class="form-control"
                                            type="text" id="description"
                                            name="description"
                                            placeholder="Mô tả danh mục...">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-flat btn-success"><i class="fas fa-save"> </i> Lưu</button>
                                <a href="{{ route('admin.categories.index') }}" class="btn btn-flat btn-secondary ml-5"><i class="fas fa-arrow-left"></i> Danh sách</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <div class="col-md-5 border border-light">
                        <img src="" alt="Hình ảnh hiển thị" id="preview" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
@section('js')
    <script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
            $('#preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#image").change(function() {
    readURL(this);
    });
    </script>
    <script src="admins/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="admins/plugins/toastr/toastr.min.js"></script>
    <script src="admins/plugins/select2/js/select2.full.min.js"></script>
    <script type="text/javascript">
        $(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            $('input').map((index, ele) => {
                ele.addEventListener('invalid', () => {
                    Toast.fire({
                        type: 'error',
                        title: 'Vui lòng nhập đúng định dạng dữ liệu'
                    })
                })
            })
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Initialize Select2 Elements
            $('.select2').select2()

            let ele = $('.nav-link')
            for(let i = 0; i < ele.length; i++) {
                ele[i].classList.remove('active');
            }
            $('#nav-categories').addClass('active')
        })
    </script>
@endsection