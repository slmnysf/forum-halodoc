@extends('master')
@section('content')
    <div class="container" style="margin-top: 50px;">
        <h2 style="text-align: center;">Silahkan Pilih Penyakit</h2>
        <div class="list-group" style="margin-top: 50px;">
            <ul>
            @foreach ($penyakit as $penyakits)
                <li><a href="/checkup/{{ $penyakits->id }}" style="text-decoration:none; color:black;text-align:center; margin-top:20px;" class="list-group-item list-group-item-action">{{ $penyakits->nama }}</a></li>
            @endforeach
            </ul>
        </div>
    </div>
@endsection