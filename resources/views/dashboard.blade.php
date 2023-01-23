@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Psikotest', 'navName' => 'Dashboard', 'activeButton' => 'dashboard'])

@section('content')
<div class="content">
    <div class="container">
        pp
    </div>
</div>
@endsection

@push('js')
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        // demo.showNotification();

    });
</script>
@endpush