@extends('layouts.app')


@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-12">
      <div class="card">
        {{ $books->links() }}

        <table class="table table-hover table-bordered table-responsive">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">ISBN</th>
              <th scope="col">NAME</th>
              <th scope="col">COVER</th>
              <th scope="col">DESCRIPTION</th>
              <th scope="col">SHORT DESCRIPTION</th>
              <th scope="col">AUTHOR</th>
              <th scope="col">PUBLISED AT</th>
              <th scope="col">ACTION</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($books as $book)
            <tr>
              <th scope="row">{{$book->id}}</th>
              <td>{{$book->isbn}}</td>
              <td>{{$book->name}}</td>
              <td>{{$book->cover}}</td>
              <td>{{$book->description}}</td>
              <td>{{$book->short_description}}</td>
              <td>{{$book->author}}</td>
              <td>{{$book->published_at}}</td>
              <td></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection