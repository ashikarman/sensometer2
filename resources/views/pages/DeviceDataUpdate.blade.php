{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}



<a class="btn btn-success" href="{{route('parameter-db')}}">Parameter List Update</a>
<a class="btn btn-info" href="{{route('SlaveToDb')}}">Slave Range Update</a>

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection
