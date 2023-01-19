@extends('pages.setting.question-management.setting-layout', ['activePage' => 'type', 'title' => 'Psikotest', 'navName' => 'Question', 'activeButton' => 'setting'])

@section('setting-content')
    <div class="row justify-content-end">
        <div class="col-md-6">
            <form class="m-2" role="search">
                @csrf
                <div class="input-group">
                    <i class="nc-icon nc-zoom-split align-self-center" style="font-size: 25px"></i>
                    <input type="text" value="" class="form-control border-left-0 border-right-0 border-top-0" placeholder="Search...">
                </div>
            </form>
        </div>
    </div>

    <table class="table table-hover table-striped mt-2">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Salary</th>
            <th>Country</th>
            <th>City</th>
        </thead>
        <tbody>
            @foreach($types as $type)
                <tr>
                    <td>1</td>
                    <td>Dakota Rice</td>
                    <td>$36,738</td>
                    <td>Niger</td>
                    <td>Oud-Turnhout</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
