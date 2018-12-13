@extends('layouts')
@section('content')
<div class="ui raised very padded text container segment">
	<div>
		<h2 class="ui header">Tambah Penerima Modal</h2>
	</div>
	<div>
		<p>
		<form action="{{ route('main-publish') }}" method="POST">
			@csrf
			<div class="ui segment basic">
				<div class="text">
					Nama UKM
				</div>
				<div class="ui input fluid focused">
					<input type="text" name="nama_ukm" placeholder="Nama UKM" required="true">
				</div>
			</div>
			<div class="ui segment basic">
				<div class="text">
					Lama Usaha
				</div>
				<div class="ui input fluid focused">
					<input type="number" name="lama_usaha" placeholder="Lama Usaha" required="true">
				</div>
			</div>
			<div class="ui segment basic">
				<div class="text">
					Jumlah Pekerja
				</div>
				<div class="ui input fluid focused">
					<input type="number" name="jumlah_pekerja" placeholder="Jumlah Pekerja" required="true">
				</div>
			</div>
			<div class="ui segment basic">
				<div class="text">
					Omzet
				</div>
				<div class="ui input fluid focused">
					<input type="number" name="omzet" placeholder="Omzet" required="true">
				</div>
			</div>
			<div class="ui segment basic">
				<div class="text">
					Jumlah Aset
				</div>
				<div class="ui input fluid focused">
					<input type="number" name="jumlah_aset" placeholder="Jumlah Aset" required="true">
				</div>
			</div>
			<div class="ui segment basic">
				<div class="text">
					Hasil Keputusan
				</div>
				<div>
					<select class="ui compact selection dropdown" name="hasil_keputusan" required="true">
						<option value="ya">Ya</option>
						<option value="tidak">Tidak</option>
						<option value="tunda">Tunda</option>
					</select>
				</div>
			</div>
			<div class="ui right aligned" style="text-align: right;">
				<a href="{{ route('main-page') }}" class="ui button">
					Batal
				</a>
				<input type="submit" class="ui button primary" value="Simpan">
			</div>
		</form>
		</p>
	</div>
</div>
@endsection