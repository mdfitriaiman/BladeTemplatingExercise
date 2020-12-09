@extends('subview/master')

@section('title', 'List of E-books available')

@section('content')

<h1>List of e-books available for sharing: </h1>
    <h2>E-book #1</h2>
    <ul>
        <li>Title: {{$title1}}<li>
        <li>ISBN: {{$isbn1}}<li>
        <li>Category: {{$bookCategory1}}<li>
        <li>No. of Pages: {{$noPages1}}<li>
    </ul>
    
    <h2>E-Book #2</h2>
    <ul>
        <li>Title: {{$title2}}<li>
        <li>ISBN: {{$isbn2}}<li>
        <li>Category: {{$bookCategory2}}<li>
        <li>No. of Pages: {{$noPages2}}<li>
    </ul>

@endsection
