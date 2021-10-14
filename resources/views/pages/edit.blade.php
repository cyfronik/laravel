@extends('layouts.app')

@section('content')

@if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="btn btn-error">{{ $error }}</div>
        @endforeach
@endif

<div>
    <form action="{{route('pages.update', $page)}}"  method="post">

      @csrf
      <input name="title" type="text" value="{{$page->title}}">
      <input name="description" type="textarea" value="{{$page->description}}" >
      <button class="btn btn-primary">zapisz</button>

    </form>
</div>
<div>
<a class="btn btn-secondary" href="/pages/">↺ &#11176 PAGES</a>
</div>
@endsection
