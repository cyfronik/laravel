@extends('layouts.app')

@section('content')

@if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="btn btn-error">{{ $error }}</div>
        @endforeach
@endif

<div>
    <form action="{{route('pages.store')}}"  method="post">

      @csrf
      <input name="title" type="text">
      <input name="description" type="textarea" >
      <button class="btn btn-primary">zapisz</button>

    </form>
</div>
<div>
<a class="btn btn-secondary" href="/pages/">↺ &#11176 PAGES</a>
</div>
@endsection
