@extends('admin.layouts.master')

@section('title')
	<a>Danh Mục</a>
@endsection
@section('title2')
	<a>Danh Sách Tin Tuyển Dụng</a>
@endsection

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <h5 class="card-header">@yield('title2')</h5>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table">
                    <thead class="bg-light">
                        <tr class="border-0">
                            <th class="border-0">#</th>
                            <th class="border-0">Title</th>
                            <th class="border-0">Description</th>
                            
                            <th class="border-0">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
						@foreach($new as $key => $value)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$value->title}}</td>
                                <td>{{$value->description}}</td>
                                <td>
                                    <button type="button" class="btn btn-space btn-primary edit" title={{"Sửa".$value->tittle}} data-toggle=" modal" data-target="#edit">
                                        <i class="fas fa-edit"></i>
                                    </button>

                                    <button type="button" class="btn btn-space btn-primary delete" title={{"Xóa".$value->tittle}} data-toggle=" modal" data-target="#delete">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection