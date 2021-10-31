@extends('master')
@section('content')
<div class="container" style="margin-top: 50px; text-align:center">
  <h2 style="margin-bottom:100px">{{ $penyakit->nama }}</h2>
  <a href="/checkup" class="btn btn-secondary btn-lg"><- Kembali</a>
  <a class="btn btn-primary btn-lg" data-bs-toggle="modal" href="#exampleModalToggle" role="button" id="start" onclick="start()">Mulai Check-Up</a>
</div>
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Pertanyaan 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{ $penyakit->q1 }}
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" id="no1" name="tidak">TIDAK</button>
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" id="yes1" name="ya" onclick="buttonClick()">YA</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Pertanyaan 2</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{ $penyakit->q2 }}
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" id="no2" name="tidak">TIDAK</button>
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" id="yes2" name="ya" onclick="buttonClick()">YA</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel3">Pertanyaan 3</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{ $penyakit->q3 }}
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal" id="no3" name="tidak">TIDAK</button>
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal" id="yes3" name="ya" onclick="buttonClick()">YA</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel4" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel4">Pertanyaan 4</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{ $penyakit->q4 }}
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-target="#exampleModalToggle5" data-bs-toggle="modal" id="no4" name="tidak">TIDAK</button>
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle5" data-bs-toggle="modal" id="yes4" name="ya" onclick="buttonClick()">YA</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle5" aria-hidden="true" aria-labelledby="exampleModalToggleLabel5" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel5">Pertanyaan 5</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{ $penyakit->q5 }}
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-target="#exampleModalToggle6" data-bs-toggle="modal" id="no5" name="tidak">TIDAK</button>
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle6" data-bs-toggle="modal" id="yes5" name="ya" onclick="buttonClick()">YA</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle6" aria-hidden="true" aria-labelledby="exampleModalToggleLabel6" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel6">Hasil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="col text-center">
          <button class="btn btn-primary" onclick="myFunction()" id="button-hasil">Lihat Hasil</button>
        </div>
        <p id="solusi" style="display: none">{{ $penyakit->solusi }}</p>
        <p id="sehat" style="display: none">Anda tidak terkena penyakit {{ $penyakit->nama }}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">TUTUP</button>
      </div>
    </div>
  </div>
</div>
</body>
<footer>
  <script>
  var hasil = 0;
  var x = document.getElementById("solusi");
  var y = document.getElementById("sehat");
  var z = document.getElementById("button-hasil");
  function buttonClick() {
    hasil++;
  }
  function myFunction() {
    if (hasil > 3) {
      x.style.display = "block";
      y.style.display = "none";
    } else {
      x.style.display = "none";
      y.style.display = "block";
    }
    z.style.display = "none";
  }
  function start() {
    hasil = 0;
    x.style.display = "none";
    y.style.display = "none";
    z.style.display = "inline-block";
  }
  </script>
</footer>
</html>
@endsection