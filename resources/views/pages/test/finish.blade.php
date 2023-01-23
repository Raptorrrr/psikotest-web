@extends('pages.test.test-layout', ['activePage' => 'test', 'title' => 'Psikotes Biromarini', 'navName' => 'Test', 'activeButton' => 'test'])

@section('content')
<h2 class="text-center">Psikotes telah berakhir, jawaban Anda telah tersimpan secara otomatis.</h2>
<p class="text-center">Mohon tunggu beberapa saat untuk keluar secara otomatis</p>
<form id="logoutForm" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
    <button type="submit" class="d-none"></button>
</form>
@endsection

@push('js')
<script>
    const finish_at = new Date()
    finish_at.setSeconds(finish_at.getSeconds() + 5)

    const x = setInterval(function() {
        const now = new Date();

        const distance = finish_at.getTime() - now.getTime()

        if (distance < 0) {
            clearInterval(x)
            document.forms["logoutForm"].submit();
        }
    }, 1000)
</script>
@endpush