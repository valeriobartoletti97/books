@extends('layouts.app')

@section('title', 'All Books')

@section('content')
        @foreach ($books as $book)
        <li>{{ $book->title }}</li>
        @endforeach
@endsection