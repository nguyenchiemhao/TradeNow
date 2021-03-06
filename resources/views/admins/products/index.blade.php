@extends('admins.layout.master')
@section('title')
Quản lý sản phẩm
@endsection
@section('css')
  <!-- DataTables -->
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css "> --}}
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="admins/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
<link rel="stylesheet" href="admins/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Quản lý sản phẩm</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                <li class="breadcrumb-item active">Sản phẩm</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
    @include('components.success')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <section class="content">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-12">
          <div class="card">
            <div class="card-header p-0 pt-1">
                <div class="card-header-func">
                  <a title="Thêm sản phẩm mới" class="btn btn-flat btn-success" href="{{ route('admin.products.create') }}">
                      <i class="fas fa-plus-square"></i>  Thêm mới
                  </a>
                  <form id="massDelete" action="{{ route('admin.products.massDestroy') }}" method="post" class="d-inline-block" onsubmit="return confirm('Bạn chắc chắn muốn xoá những dòng đã chọn')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-flat btn-danger"><i class="fas fa-dumpster-fire"></i> Xoá tất cả đã chọn</button>
                  </form>
                </div>
              <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" 
                    id="products-show-all-tab" 
                    data-toggle="pill" 
                    href="#products-show-all" 
                    role="tab" aria-controls="products-show-all" 
                    aria-selected="true">Tất cả sản phẩm
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" 
                    id="products-waiting-censorship-tab" 
                    data-toggle="pill" 
                    href="#products-waiting-censorship" 
                    role="tab" aria-controls="products-waiting-censorship" 
                    aria-selected="false">Sản phẩm chờ kiểm duyệt
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" 
                    id="products-allow-for-sale-tab" 
                    data-toggle="pill" href="#products-allow-for-sale" 
                    role="tab" aria-controls="products-allow-for-sale" 
                    aria-selected="false">Sản phẩm được bán
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" 
                    id="products-allow-for-sale-tab" 
                    data-toggle="pill" href="#products-violated" 
                    role="tab" aria-controls="products-violated" 
                    aria-selected="false">Sản phẩm vi phạm
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" 
                    id="products-run-out-of-amount-tab" 
                    data-toggle="pill" href="#products-run-out-of-amount" 
                    role="tab" aria-controls="products-run-out-of-amount" 
                    aria-selected="false">Sản phẩm hết hàng
                  </a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content" id="custom-tabs-one-tabContent">
                <div class="tab-pane fade show active" 
                  id="products-show-all" 
                  role="tabpanel" 
                  aria-labelledby="products-show-all-tab"
                >
                  <div class="card">
                      <div class="card-body">
                        <table id="allProduct" class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>
                                <div class="icheck-danger d-inline">
                                  <input type="checkbox"  id="check-all" class="check-all">
                                  <label for="check-all" ></label>
                                </div>
                              </th>
                              <th>Id</th>
                              <th>Tên sản phẩm</th>
                              <th>Danh mục</th>
                              <th>Số lượng</th>
                              <th>Giá</th>
                              <th>Trạng thái</th>
                              <th>Chức năng</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($products as $product)
                              <tr>
                                <td>
                                  <div class="icheck-danger d-inline">
                                    <input form="massDelete" type="checkbox" name="ids[]" id="ids-{{ $product->id }}" value="{{ $product->id }}" multiple>
                                    <label for="ids-{{ $product->id }}" ></label>
                                  </div>
                                </td>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>
                                    {{ $product->category->name }}
                                </td>
                                <td>{{ $product->amount }}</td>
                                <td> {{ $product->getFreshPrice() }} </td>
                                <td class=" text-center">
                                  <span class="text text-{{ $product->getColorOfCheck() }}" title="{{ $product->getTextOfCheck() }}"><i class="{{ $product->getIconOfCheck() }}"></i></span>
                                </td>
                                <td>
                                  <a title="Xem thông tin sản phẩm" class="btn btn-xs btn-flat btn-primary" href="{{ route('admin.products.show', $product->id) }}">
                                      <i class="fas fa-eye"></i>
                                  </a>
                                  <a title="Sửa thông tin sản phẩm" href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-xs btn-flat btn-info"><i class="fas fa-edit"></i></a>
                                  <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Bạn chắc chắn muốn xoá');" style="display: inline-block;">
                                      <input type="hidden" name="_method" value="DELETE">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      <button type="submit" title="Xoá sản phẩm {{ $product->name }}" class="btn btn-xs btn-flat btn-danger" > <i class="fas fa-trash-alt"></i></button>
                                  </form>
                                </td>
                              </tr>
                            @endforeach
          
                          </tbody>
                        </table>
                      </div>
                  </div>
                </div>
                <div class="tab-pane fade" 
                  id="products-waiting-censorship" 
                  role="tabpanel" 
                  aria-labelledby="products-waiting-censorship-tab"
                >
                  <div class="card">
                    <div class="card-body">
                      <table id="waitingProduct" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>
                              <div class="icheck-danger d-inline">
                                <input type="checkbox" id="check-waiting"  class="check-all">
                                <label for="check-waiting" ></label>
                              </div>
                            </th>
                            <th>Id</th>
                            <th>Tên sản phẩm</th>
                            <th>Danh mục</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Trạng thái</th>
                            <th>Chức năng</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($waitingProducts as $product)
                            <tr>
                              <td>
                                <div class="icheck-danger d-inline">
                                  <input form="massDelete" type="checkbox" name="ids[]" id="waiting-ids-{{ $product->id }}" value="{{ $product->id }}" multiple>
                                  <label for="waiting-ids-{{ $product->id }}" ></label>
                                </div>
                              </td>
                              <td>{{ $product->id }}</td>
                              <td>{{ $product->name }}</td>
                              <td>
                                  {{ $product->category->name }}
                              </td>
                              <td>{{ $product->amount }}</td>
                              <td> {{ $product->getFreshPrice() }} </td>
                              <td class=" text-center">
                                <span class="text text-{{ $product->getColorOfCheck() }}" title="{{ $product->getTextOfCheck() }}"><i class="{{ $product->getIconOfCheck() }}"></i></span>
                              </td>
                              <td>
                                <a title="Xem thông tin sản phẩm" class="btn btn-xs btn-flat btn-primary" href="{{ route('admin.products.show', $product->id) }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a title="Sửa thông tin sản phẩm" href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-xs btn-flat btn-info"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Bạn chắc chắn muốn xoá');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" title="Xoá sản phẩm {{ $product->name }}" class="btn btn-xs btn-flat btn-danger" > <i class="fas fa-trash-alt"></i></button>
                                </form>
                              </td>
                            </tr>
                          @endforeach
        
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" 
                  id="products-allow-for-sale" 
                  role="tabpanel" 
                  aria-labelledby="products-allow-for-sale-tab"
                >
                  <div class="card">
                    <div class="card-body">
                      <table id="forSaleProduct" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>
                              <div class="icheck-danger d-inline">
                                <input type="checkbox" id="check-waiting"  class="check-all">
                                <label for="check-waiting" ></label>
                              </div>
                            </th>
                            <th>Id</th>
                            <th>Tên sản phẩm</th>
                            <th>Danh mục</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Trạng thái</th>
                            <th>Chức năng</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($forSaleProducts as $product)
                            <tr>
                              <td>
                                <div class="icheck-danger d-inline">
                                  <input form="massDelete" type="checkbox" name="ids[]" id="for-sale-ids-{{ $product->id }}" value="{{ $product->id }}" multiple>
                                  <label for="for-sale-ids-{{ $product->id }}" ></label>
                                </div>
                              </td>
                              <td>{{ $product->id }}</td>
                              <td>{{ $product->name }}</td>
                              <td>
                                  {{ $product->category->name }}
                              </td>
                              <td>{{ $product->amount }}</td>
                              <td> {{ $product->getFreshPrice() }} </td>
                              <td class=" text-center">
                                <span class="text text-{{ $product->getColorOfCheck() }}" title="{{ $product->getTextOfCheck() }}"><i class="{{ $product->getIconOfCheck() }}"></i></span>
                              </td>
                              <td>
                                <a title="Xem thông tin sản phẩm" class="btn btn-xs btn-flat btn-primary" href="{{ route('admin.products.show', $product->id) }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a title="Sửa thông tin sản phẩm" href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-xs btn-flat btn-info"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Bạn chắc chắn muốn xoá');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" title="Xoá sản phẩm {{ $product->name }}" class="btn btn-xs btn-flat btn-danger" > <i class="fas fa-trash-alt"></i></button>
                                </form>
                              </td>
                            </tr>
                          @endforeach
        
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" 
                  id="products-violated" 
                  role="tabpanel" 
                  aria-labelledby="products-violated-tab"
                >
                  <div class="card">
                    <div class="card-body">
                      <table id="violatedProduct" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>
                              <div class="icheck-danger d-inline">
                                <input type="checkbox" id="check-waiting"  class="check-all">
                                <label for="check-waiting" ></label>
                              </div>
                            </th>
                            <th>Id</th>
                            <th>Tên sản phẩm</th>
                            <th>Danh mục</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Trạng thái</th>
                            <th>Chức năng</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($violatedProducts as $product)
                            <tr>
                              <td>
                                <div class="icheck-danger d-inline">
                                  <input form="massDelete" type="checkbox" name="ids[]" id="violated-ids-{{ $product->id }}" value="{{ $product->id }}" multiple>
                                  <label for="violated-ids-{{ $product->id }}" ></label>
                                </div>
                              </td>
                              <td>{{ $product->id }}</td>
                              <td>{{ $product->name }}</td>
                              <td>
                                  {{ $product->category->name }}
                              </td>
                              <td>{{ $product->amount }}</td>
                              <td> {{ $product->getFreshPrice() }} </td>
                              <td class=" text-center">
                                <span class="text text-{{ $product->getColorOfCheck() }}" title="{{ $product->getTextOfCheck() }}"><i class="{{ $product->getIconOfCheck() }}"></i></span>
                              </td>
                              <td>
                                <a title="Xem thông tin sản phẩm" class="btn btn-xs btn-flat btn-primary" href="{{ route('admin.products.show', $product->id) }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a title="Sửa thông tin sản phẩm" href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-xs btn-flat btn-info"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Bạn chắc chắn muốn xoá');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" title="Xoá sản phẩm {{ $product->name }}" class="btn btn-xs btn-flat btn-danger" > <i class="fas fa-trash-alt"></i></button>
                                </form>
                              </td>
                            </tr>
                          @endforeach
        
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" 
                  id="products-run-out-of-amount" 
                  role="tabpanel" 
                  aria-labelledby="products-run-out-of-amount-tab"
                >
                  <div class="card">
                    <div class="card-body">
                      <table id="runOutOfAmountProduct" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>
                              <div class="icheck-danger d-inline">
                                <input type="checkbox" id="check-waiting"  class="check-all">
                                <label for="check-waiting" ></label>
                              </div>
                            </th>
                            <th>Id</th>
                            <th>Tên sản phẩm</th>
                            <th>Danh mục</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Trạng thái</th>
                            <th>Chức năng</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($runOutOfAmountProducts as $product)
                            <tr>
                              <td>
                                <div class="icheck-danger d-inline">
                                  <input form="massDelete" type="checkbox" name="ids[]" id="run-out-of-amount-ids-{{ $product->id }}" value="{{ $product->id }}" multiple>
                                  <label for="run-out-of-amount-ids-{{ $product->id }}" ></label>
                                </div>
                              </td>
                              <td>{{ $product->id }}</td>
                              <td>{{ $product->name }}</td>
                              <td>
                                  {{ $product->category->name }}
                              </td>
                              <td>{{ $product->amount }}</td>
                              <td> {{ $product->getFreshPrice() }} </td>
                              <td class=" text-center">
                                <span class="text text-{{ $product->getColorOfCheck() }}" title="{{ $product->getTextOfCheck() }}"><i class="{{ $product->getIconOfCheck() }}"></i></span>
                              </td>
                              <td>
                                <a title="Xem thông tin sản phẩm" class="btn btn-xs btn-flat btn-primary" href="{{ route('admin.products.show', $product->id) }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a title="Sửa thông tin sản phẩm" href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-xs btn-flat btn-info"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Bạn chắc chắn muốn xoá');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" title="Xoá sản phẩm {{ $product->name }}" class="btn btn-xs btn-flat btn-danger" > <i class="fas fa-trash-alt"></i></button>
                                </form>
                              </td>
                            </tr>
                          @endforeach
        
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
<script >
$(document).ready(function() {
  $('#allProduct').DataTable( {
      dom: 'Bfrtip',
      buttons: [
          'copy', 'csv', 'excel', 'pdf', 'print'
      ]
  } );
  $('#allProduct input#check-all').change(function() {
    if(this.checked){
      $('#allProduct input[type="checkbox"][name="ids[]"]').map((index, ele) => {
        ele.checked = true
      })
    }else {
      $('#allProduct input[type="checkbox"][name="ids[]"]').map((index, ele) => {
        ele.checked = false
      })
    }
  })
  $('#waitingProduct').DataTable( {
      dom: 'Bfrtip',
      buttons: [
          'copy', 'csv', 'excel', 'pdf', 'print'
      ]
  } );
  $('#waitingProduct input#check-waiting').change(function() {
    if(this.checked){
      $('#waitingProduct input[type="checkbox"][name="ids[]"]').map((index, ele) => {
        ele.checked = true
      })
    }else {
      $('#waitingProduct input[type="checkbox"][name="ids[]"]').map((index, ele) => {
        ele.checked = false
      })
    }
  })
  $('#forSaleProduct').DataTable( {
      dom: 'Bfrtip',
      buttons: [
          'copy', 'csv', 'excel', 'pdf', 'print'
      ]
  } );
  $('#forSaleProduct input#check-waiting').change(function() {
    if(this.checked){
      $('#forSaleProduct input[type="checkbox"][name="ids[]"]').map((index, ele) => {
        ele.checked = true
      })
    }else {
      $('#forSaleProduct input[type="checkbox"][name="ids[]"]').map((index, ele) => {
        ele.checked = false
      })
    }
  })
  $('#violatedProduct').DataTable( {
      dom: 'Bfrtip',
      buttons: [
          'copy', 'csv', 'excel', 'pdf', 'print'
      ]
  } );
  $('#violatedProduct input#check-waiting').change(function() {
    if(this.checked){
      $('#violatedProduct input[type="checkbox"][name="ids[]"]').map((index, ele) => {
        ele.checked = true
      })
    }else {
      $('#violatedProduct input[type="checkbox"][name="ids[]"]').map((index, ele) => {
        ele.checked = false
      })
    }
  })
  $('#runOutOfAmountProduct').DataTable( {
      dom: 'Bfrtip',
      buttons: [
          'copy', 'csv', 'excel', 'pdf', 'print'
      ]
  } );
  $('#runOutOfAmountProduct input#check-waiting').change(function() {
    if(this.checked){
      $('#runOutOfAmountProduct input[type="checkbox"][name="ids[]"]').map((index, ele) => {
        ele.checked = true
      })
    }else {
      $('#runOutOfAmountProduct input[type="checkbox"][name="ids[]"]').map((index, ele) => {
        ele.checked = false
      })
    }
  })

})
</script>
@endsection
@section('id-active')#nav-products @endsection