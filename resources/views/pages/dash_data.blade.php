{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
<div class="container">
    @foreach ($data as $user)
        <h6>{{ $user->devices->device_name}}</h6>
      
    @endforeach
</div>


@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection
