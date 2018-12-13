@extends('layouts')
@section('content')
<div class="ui raised very padded text container segment">
	<div>
		<h2 class="ui header">Edit Penerima Modal</h2>
	</div>
	<div>
		<p>
		<form action="{{ route('main-put') }}" method="POST">
			@csrf
			@foreach ($data as $dt)
				<div class="ui segment basic">
					<div class="text">
						ID : {{ $dt->id_penerimaan_modal }}
					</div>
					<div class="ui input fluid focused">
						<input type="hidden" name="id" placeholder="id" required="true" value="{{ $dt->id_penerimaan_modal }}">
					</div>
				</div>
				<div class="ui segment basic">
					<div class="text">
						Nama UKM
					</div>
					<div class="ui input fluid focused">
						<input type="text" name="nama_ukm" placeholder="Nama UKM" required="true" value="{{ $dt->nama_ukm }}">
					</div>
				</div>
				<div class="ui segment basic">
					<div class="text">
						Lama Usaha
					</div>
					<div class="ui input fluid focused">
						<input type="number" name="lama_usaha" placeholder="Lama Usaha" required="true" value="{{ $dt->lama_usaha }}">
					</div>
				</div>
				<div class="ui segment basic">
					<div class="text">
						Jumlah Pekerja
					</div>
					<div class="ui input fluid focused">
						<input type="number" name="jumlah_pekerja" placeholder="Jumlah Pekerja" required="true" value="{{ $dt->jumlah_pekerja }}">
					</div>
				</div>
				<div class="ui segment basic">
					<div class="text">
						Omzet
					</div>
					<div class="ui input fluid focused">
						<input type="number" name="omzet" placeholder="Omzet" required="true" value="{{ $dt->omzet }}">
					</div>
				</div>
				<div class="ui segment basic">
					<div class="text">
						Jumlah Aset
					</div>
					<div class="ui input fluid focused">
						<input type="number" name="jumlah_aset" placeholder="Jumlah Aset" required="true" value="{{ $dt->jumlah_aset }}">
					</div>
				</div>
				<div class="ui segment basic">
					<div class="text">
						Hasil Keputusan
					</div>
					<div>
						<select class="ui compact selection dropdown" name="hasil_keputusan" required="true">
							@if ($dt->hasil_keputusan == 'ya')
								<option value="ya" selected="true">Ya</option>
							@else
								<option value="ya">Ya</option>
							@endif
							@if ($dt->hasil_keputusan == 'tidak')
								<option value="tidak" selected="true">Tidak</option>
							@else
								<option value="tidak">Tidak</option>
							@endif
							@if ($dt->hasil_keputusan == 'tunda')
								<option value="tunda" selected="true">Tunda</option>
							@else
								<option value="tunda">Tunda</option>
							@endif
						</select>
					</div>
				</div>
				<div class="ui right aligned" style="text-align: right;">
					<a href="{{ route('main-page') }}" class="ui button">
						Batal
					</a>
					<input type="submit" class="ui button primary" value="Simpan">
				</div>
			@endforeach
		</form>
		</p>
	</div>
</div>
@endsection