@extends('layouts')
@section('content')
<div class="ui raised very padded text container segment">
	<div>
		<h2 class="ui header">Buat Klasifikasi</h2>
	</div>
	<div>
		<p>
		<form action="{{ route('main-class') }}" method="POST">
			@csrf
			<div class="ui segment basic">
				<div class="text">
					Nilai K
				</div>
				<div class="ui input fluid focused">
					<input type="number" name="nilai_k" required="true" placeholder="0">
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
			<div class="ui right aligned" style="text-align: right;">
				<a href="{{ route('main-page') }}" class="ui button">
					Batal
				</a>
				<input type="submit" class="ui button primary" value="Proses">
			</div>
		</form>
		</p>
	</div>
</div>
@endsection