@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Psikotes Biromarini', 'navName' => 'Dashboard', 'activeButton' => 'dashboard'])

@section('content')
<div class="content">

    <div class="container">
        @if(auth()->user()->role === 'admin')
            <h2 class="text-center mb-4">Dashboard Admin</h2>
        @else
            <h2 class="text-center">Peraturan Dalam Pelaksanaan Psikotes</h2>
            <div class="rules">
                <div>1. Peserta diwajibkan menyediakan 1 HP dan 1 Laptop untuk pelaksanaan tes.</div>
                <div>2. HP digunakan untuk bergabung ke ruangan Zoom Meeting yang telah disediakan pada saat pelaksanaan Psikotes.</div>
                <div>3. Laptop digunakan untuk mengerjakan Psikotes.</div>
                <div>4. Peserta diharapkan mempersiapkan koneksi internet yang stabil selama pelaksanaan Psikotes.</div>
                <div>5. Peserta diwajibkan berada di ruang tersendiri, tidak ada orang lain di ruang tersebut dan menyalakan kamera Zoom Meeting selama pengerjaan Psikotes berlangsung.</div>
                <div>6. Pastikan tidak ada alat bantu apapun disekitar peserta yang dapat menunjang pelaksanaan tes (Buku, Kamus, dll.).</div>
                <div>7. Peserta wajib mengikuti seluruh rangkaian tes dengan penuh tanggung jawab selama ± 3 jam.</div>
                <div>8. Memastikan diri telah menjawab semua soal yang tersedia.</div>
                <div>9. Jawaban akan tersimpan otomatis jika waktu habis atau saat selesai mengerjakan.</div>
                <div>10. Jika Peserta melanggar salah satu peraturan Psikotes maka dianggap gugur.</div>
            </div>
            <div class="text-center my-5">
                <a type="button" class="btn btn-main btn-fill" href="{{ route('test.intro', ['slug' => $firstTypeSlug, 'session' => $firstSessionId]) }}">Mulai Tes</a>
            </div>
        @endif
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
