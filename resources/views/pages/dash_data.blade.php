{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
<div class="container">
    @foreach ($data as $user)
        <h6>{{ $user->devices->device_name}}</h6>
        <!-- <h6>{{ $user->device_id }}</h6> -->
    @endforeach
</div>
<div class="container">
<!-- {{ $data->links() }} -->
</div>

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection
