<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
@extends('dashboard.dashboard')

@section('content')
    <br>
    <h2 class="text-center">Data Pegawai</h2>
    <br><br>

    <table class="table table-bordered">
        <tr>
            <th>NIP</th>
            <th>Nama Pegawai</th>
            <th>Departemen</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Gender</th>
            <th>Status</th>
        </tr>

        @if(!empty($data_pegawai) && $data_pegawai->count())
                @foreach($data_pegawai as $key => $pgw)

        <tr>
            <td>{{ $pgw->nip }}</td>
            <td>{{ $pgw->nama_pegawai }}</td>
            <td>{{ $pgw->departemen->nama_departemen }}</td>
            <td>{{ $pgw->email }}</td>
            <td>{{ $pgw->telepon }}</td>
            @if($pgw->gender==0)
                <td>Wanita</td>
            @else
                <td>Pria</td>
            @endif

            @if($pgw->status==0)
                <td>Inactive</td>
            @else
                <td>Active</td>
            @endif
            
        </tr>
        @endforeach
        @else
        <tr>
            <td align="center" colspan="3">Empty Data!! Have a Nice Day & #0181</td>
        </tr>
        @endif
    </table>
    <div class="d-flex justify-content-center">
        {!! $data_pegawai->links() !!}
    </div>
@endsection
</body>
</html>