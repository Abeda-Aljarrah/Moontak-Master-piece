@extends('dashboard.dashboard_layouts.master')

@section('title', 'Edit product')


@section('css')
@endsection

@section('title_page1')
    Edit

@endsection
@section('title_page2')
    Edit Product
@endsection

@section('content')

    <div class="container-fluid">
        <h2>Edit Product Information</h2>

        <form action="{{ route('products.update', $products->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="category">Choose category:</label>
                <select name="category_id" id="category" class="form-control">
                    @foreach ($categoryNames as $categoryName)
                        <option value="{{ $categoryName->id }}">{{ $categoryName->name }}</option>
                    @endforeach
                </select>
                {{-- <input type="hidden" value="{{ $categoryName->id }}"name="category_id"> --}}
            </div>
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required
                    value="{{ old('name', $products->name) }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Product description:</label>
                <input type="text" name="description" class="form-control " required
                    value="{{ old('description', $products->description) }}">
            </div>
            <div class="form-group">
                <label for="main_price">Product price:</label>
                <input type="text" name="main_price" class="form-control" id="price" placeholder="Enter product price ">
                @error('main_price')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Product Image:</label>
                <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror"
                    width="100px" height="100px">
                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="availability">Product availability:</label>
                <input type="text" name="availability" class="form-control" id="availability"
                    placeholder="Enter product availability ">
                @error('availability')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label  for="Qty">Quntity:</label>
                <input type="text" name="Qty" class="form-control" id="Qty"  placeholder="Enter product availability ">
                @error('Qty') <span class="text-danger">{{ $message }}</span>   @enderror
              </div>
            {{-- <div class="form-group">
            <label  for="discount">Product discount:</label>
            <input type="text" name="discount" class="form-control" id="discount"  placeholder="Enter product discount ">
            @error('discount') <span class="text-danger">{{ $message }}</span>   @enderror
          </div> --}}
            <div class="form-group">
                <label for="discount">Product discount:</label>
                <select name="discount_id" id="discount" class="form-control">
                    @foreach ($discountPercents as $discountPercent)
                        <option value="{{ $discountPercent->id }}">{{ $discountPercent->percent }}</option>
                    @endforeach
                </select>
                {{-- <input type="hidden" value="{{ $categoryName->id }}"name="category_id"> --}}
            </div>
            <div class="form-group">
                <label for="main_unit">Product main_unit:</label>
                <input type="text" name="main_unit" class="form-control" id="main_unit"
                    placeholder="Enter product main_unit ">
                @error('main_unit')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="main_weight">Product main_weight:</label>
                <input type="text" name="main_weight" class="form-control" id="main_weight"
                    placeholder="Enter product main_weight ">
                @error('main_weight')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="Expiration_Date">Product Expiration_Date:</label>
                <input type="date" name="Expiration_Date" class="form-control" id="Expiration_Date"
                    placeholder="Enter product Expiration_Date ">
                @error('Expiration_Date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    </div>



@endsection

@section('scripts')

@endsection
