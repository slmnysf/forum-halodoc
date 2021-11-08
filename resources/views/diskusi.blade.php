@extends('master')
@section('content')
    <div class="container" style="margin-top: 50px;">
        <h2 style="text-align: center; margin-bottom:50px;">Forum Diskusi</h2>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Diskusi
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Diskusi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="/diskusi/create" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="juduldiskusi">Judul Diskusi</label>
                            <input type="text" name="judul" id="juduldiskusi" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="kontendiskusi">Isi Diskusi</label>
                            <textarea type="text" name="konten" id="kontendiskusi" class="form-control" rows="5" required></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
                </form>
            </div>
            </div>
        </div>
        <ul class="list-group" style="margin-bottom: 20px">
            @foreach ($forum as $frm)
                <li class="list-group-item" style="margin-top: 40px">
                    @if ($frm->user_id === auth()->user()->id)
                        <a href="/diskusi/{{ $frm->id }}/delete" class="btn btn-danger" style="float: right" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    @endif
                    <h4>{{ $frm->judul }}</h4>
                    <p style="font-size: 15px">Oleh : {{ $frm->user->name }} </p>
                    <p>{{ $frm->konten }}</p>
                    <p class="timestamp" style="font-size: 15px">{{ $frm->created_at->diffForHumans() }}</p>
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a href="/diskusi/{{ $frm->id }}/view" class="btn btn-outline-primary">Komentar</a>
                    </div>
                </li>
            @endforeach
        </ul>
        {{ $forum->links() }}
@endsection