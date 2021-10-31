@extends('master')
@section('content')
<div class="container" style="margin-top: 50px; border-style: ridge;">
    <div class="col-md-12" style="padding: 20px">
        <!-- PANEL HEADLINE -->
        <div class="panel panel-headline">
            <div class="panel-heading">
                <a href="/diskusi" style="float: right" class="btn btn-light"><- Kembali</a>
                <h3 class="panel-title">{{ $forum->judul }}</h3>
                <p class="panel-subtitle">Oleh : {{ $forum->user->name }}</p>
            </div>
            <div class="panel-body">
                <p>{{ $forum->konten }}</p>
                <p class="panel-subtitle" style="font-size: 15px">{{ $forum->created_at->diffForHumans() }}</p>
                
                <hr>
                <form action="" method="POST">
                    @csrf
                    <input type="hidden" name="forum_id" value="{{ $forum->id }}">
                    <textarea style="margin-top:10px" name="konten" id="komentar-utama" rows="2" class="form-control" required></textarea>
                    <input style="margin-top:10px" type="submit" class="btn btn-outline-primary" value="Kirim">
                </form>
                <hr>
                <h5>Komentar</h5>
                <ul class="list-group">
                @foreach ($forum->komentar()->orderBy('created_at','desc')->get() as $komentar)
                    <li class="list-group-item">
                        @if ($komentar->user_id === auth()->user()->id)
                        <a href="/komentar/{{ $komentar->id }}/delete" class="btn btn-danger" style="float: right" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        @endif
                        <b>{{ $komentar->user->name }}</b>
                        <p>{{ $komentar->konten }}</p>
                        <p style="font-size: 15px">{{ $komentar->created_at->diffForHumans() }}</p>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
        <!-- END PANEL HEADLINE -->
    </div>
</div>
@endsection