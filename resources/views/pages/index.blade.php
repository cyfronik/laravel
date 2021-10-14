@extends('layouts.app')

@section('content')
    <a class="btn btn-secondary" href="{{route('pages.create')}}">CREATE</a>

    <table class="table table-hover">
      <tr>
        <th>ID</th>
        <th>title</th>
        <th>description</th>
        @foreach($pages as $page)
          <tr class="table-light">
            <td>{{$page->id}}</td>
            <td>{{$page->title}}</td>
            <td>{{$page->description}}</td>
            <td>
                <a class="btn btn-info" href="{{route('pages.edit', $page)}}">EDIT</a>
            </td>
            <td>
            <form method="POST" action="{{route('pages.delete', $page)}}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <div class="form-group">
                    <input type="submit" class="btn btn-danger" value="Dele">
                </div>
            </form>
            </td>
          </tr>
        @endforeach
    </table>

@endsection
