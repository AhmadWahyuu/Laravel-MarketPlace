@extends('layout/main')
@section('head')
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@endsection
@section('body')
	<!-- load -->
	<div class="bg-loader">
		<div class="loader">
			
		</div>
	</div>

	<!-- banner/logo-->
	<img src="{{ url('assets/img/bg1.png') }}" alt="cover" class="img-fluid">


	<!-- LAYANAN -->
	<section class="Layanan">
		<div class="container">
			<h3>Layanan</h3>
      <ul class="list-group t">
        <li class="list-group-item border-0">
          <div class="box">
            <div class="global">
              <div class="icon"><i class="fa-solid fa-helmet-safety"></i></div>
              <h4>Aktivitas Keinsinyuran dan Konsultasi Teknis YBDI</h4>
            </div>
            <div class="global">
              <div class="icon"><i class="fa-solid fa-shield"></i></div>
              <h4>Aktivitas Konsultasi Keamanan Informasi</h4>
            </div>
            <div class="global">
              <div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
              <h4>Reparasi Komputer dan Peralatan Komunikasi</h4>
            </div>
            <div class="global">
              <div class="icon"><i class="fa-solid fa-bars-progress"></i></div>
              <h4>Aktivitas Konssultasi Manajemen</h4>
            </div>
          </div>
        </li>
        <li class="list-group-item border-0">
          <div class="box">
            <div class="global">
              <div class="icon"><i class="fa-solid fa-computer"></i></div>
              <h4>Jasa Pendidikan Komputer  ( Swasta )</h4>
            </div>
            <div class="global">
              <div class="icon"><i class="fa-solid fa-coins"></i></div>
              <h4>Angkutan Sewa</h4>
            </div>
            <div class="global">
              <div class="icon"><i class="fa-brands fa-instalod"></i></div>
              <h4>Instalasi Elektronika</h4>
            </div>
            <div class="global">
              <div class="icon"><i class="fa-solid fa-handshake"></i></div>
              <h4>Aktifitas Konsultasi Komputer dan Manajemen Fasilitas Komputer</h4>
            </div>
          </div>
        </li>

        <li class="list-group-item border-0">
          <div class="box">
            <div class="global">
              <div class="icon"><i class="fa-solid fa-angles-up"></i></div>
              <h4>Aktivitas Pengembangan Aplikasi Perdagangan ( E- Commerce )</h4>
            </div>
            <div class="global">
              <div class="icon"><i class="fa-solid fa-chart-column"></i></div>
              <h4>Aktivitas Pengolahan Data</h4>
            </div>
            <div class="global">
              <div class="icon"><i class="fa-solid fa-blog"></i></div>
              <h4>Aktivitas Hosting dan YBDI</h4>
            </div>
            <div class="global">
              <div class="icon"><i class="fa-solid fa-code"></i></div>
              <h4>Aktivitas Pemrograman Komputer Lainnya</h4>
            </div>
          </div>
        </li>
      </ul>
      
      
      

		</div>
	</section>


 <!-- FOOTER -->
	<footer>
		<div class="container">
			<small>Hubungi kami 085xxxxxx - 2022</small>
		</div>
	</footer>

	<!-- SCRIPT TAMPILAN LOADING -->

	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>

@endsection