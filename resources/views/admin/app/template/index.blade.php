@extends('admin.app.index')

@section('admin_content')
    @switch($route)
        {{-- // Template --}}
        @case('template.manager')
            @include('admin.app.template.manager')
        @case('template.history')
            @include('admin.app.template.history')
        @break
        @case('template.bookmark')
            @include('admin.app.template.bookmark')
        @break
        @default
            @include('admin.app.template.manager')
    @endswitch
@endsection
