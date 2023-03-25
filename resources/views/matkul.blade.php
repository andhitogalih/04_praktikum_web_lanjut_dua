@extends('layouts.app')

@section('content')
<p>
    Jadwal Pelajaran
</p>

<table border="1">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Hari</th>
                <th>Kode MK</th>
                <th>Mata Kuliah</th>
                <th>Dosen</th>

            </tr>

            @foreach($matkul as $m)
            <tr>
                <td>{{$m->id}}</td>
                <td>{{$m->hari}}</td>
                <td>{{$m->kodemk}}</td>
                <td>{{$m->mataKuliah}}</td>
                <td>{{$m->dosen}}</td>
            </tr>
            @endforeach   
    </table>

@endsection