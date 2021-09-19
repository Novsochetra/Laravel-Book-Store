@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Create Book</h5>
          <form method="POST" action="{{ route('book.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control @error('name') is-invalid @endif" id="name" name="name">

              @error('name')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="isbn" class="form-label">ISBN</label>
              <input type="text" class="form-control @error('isbn') is-invalid @endif" id="isbn" name="isbn">
              @error('isbn')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="author" class="form-label">Author</label>
              <input type="text" class="form-control @error('author') is-invalid @endif" id="author" name="author">
              @error('author')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="published_date" class="form-label">Published Date</label>
              <input type="date" class="form-control @error('published_date') is-invalid @endif" id="published_date"
                name="published_date">

              @error('published_date')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input type="number" class="form-control @error('price') is-invalid @endif" id="price" name="price">
              @error('price')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" id="description" name="description"> </textarea>
            </div>

            <div class="mb-3">
              <label for="short_description" class="form-label">Short Description</label>
              <textarea class="form-control" id="short_description" name="short_description"> </textarea>
            </div>

            <div class="mb-3">
              <label for="file_url" class="form-label">Cover</label>
              <input class="form-control @error('file_url') is-invalid @endif" type="file" id="file_url"
                name="file_url">
              @error('file_url')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <input class="form-control" type="hidden" id="cover_url" name="cover_url">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection