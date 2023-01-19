@extends('layouts.app', ['activePage' => 'maps', 'title' => 'Psikotest', 'navName' => 'Maps', 'activeButton' => 'setting'])

@section('content')
    <div class="map-container">
        <div id="map"></div>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initGoogleMaps();

        });
    </script>
@endpush
