@extends('master')
@section('body')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Category Info</h4>
                @if( $message = Session::get('message'))
                <h4 class="text-center">{{ $message }}</h4>
                @endif
                <form action="{{ route('new-category') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Category name</label>
                        <div class="col-sm-9">
                          <input type="text" name="name" class="form-control" id="horizontal-firstname-input"/>
                          <span>{{ $errors->has('name') ? $errors->first('name') : ''}}</span>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Category Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control-file" id="horizontal-email-input"/>
                            <span>{{ $errors->has('image') ? $errors->first('image') : ''}}</span>
                        </div>
                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-9">
                            <div>
                                <button type="submit" class="btn btn-primary w-md">New Category</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="text-center" id="resultMessage"></h4>
                <table id="category-datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>SL NO</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{-- @php($i = 1) --}}
                    @foreach($categories as $key => $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td id="{{ "categoryName".$category->id }}">{{ $category->name }}</td>
                        <td><img src="{{ asset($category->image) }}" id="{{ "categoryImage".$category->id }}" alt="{{ $category->name }}" height="50" width="80"/></td>
                        <td id="{{ "status".$category->id }}">{{ $category->status == 1 ? 'Published' : 'Unpublished' }}</td>
                        <td>
                            @if($category->status == 1)
                            <a href="" class="btn btn-sm btn-info category-status" id="{{ $category->id }}" title="Published Category">
                                <i id="{{ "icon".$category->id }}" class="fas fa-arrow-alt-circle-up"></i>
                            </a>
                            @else
                            <a href="" class="btn btn-sm btn-warning category-status" id="{{ $category->id }}" title="Unpublished Category">
                                <i id="{{ "icon".$category->id }}" class="fas fa-arrow-alt-circle-down"></i>
                            </a>
                            @endif
                            <a href="" class="btn btn-sm btn-success edit-category" id="{{ $category->id }}" title="Edit Category">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="" class="btn btn-sm btn-danger delete-category" id="{{ $category->id }}" title="Delete Category">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-example-modal-center" id="editModel" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Update Category Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 id="updateCategoryImageError" class="text-center text-danger"></h5>
                <form action="" method="POST" enctype="multipart/form-data" id="updateCategoryForm">
                    @csrf
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Category name</label>
                        <div class="col-sm-9">
                          <input type="text" name="name" class="form-control" id="inputName"/>
                          <span id="nameUpdateError"></span>
                          <input type="hidden" name="id"  class="form-control" id="inputId"/>
                          <span>{{ $errors->has('name') ? $errors->first('name') : ''}}</span>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Category Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control-file" id="imageInput"/>
                            <img src="" alt="" height="80" width="120" id="inputImage"/>
                            <span>{{ $errors->has('image') ? $errors->first('image') : ''}}</span>
                        </div>
                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-9">
                            <div>
                                <button type="submit" class="btn btn-primary w-md">Update Category</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
