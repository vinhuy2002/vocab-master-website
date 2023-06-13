@extends('admin.app.index')

@section('admin_content')
    @switch($route)
        {{-- // Template --}}
        @case('template.manager')
            @include('admin.app.template.manager')
            @break
        @case('template.history')
            @include('admin.app.template.history')
            @break
        @case('template.bookmark')
            @include('admin.app.template.bookmark')
            @break
        @case('template.lesson')
            @include('admin.app.template.lesson')
            @break
        @default
            @include('admin.app.template.manager')
            @break
    @endswitch
@endsection
