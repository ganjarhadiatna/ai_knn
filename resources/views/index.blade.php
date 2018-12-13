@extends('layouts')
@section('content')
<div class="ui very padded container segment">
	<div class="ui segment basic">
		<h2 class="ui header">Data Penerima Modal</h2>
	</div>
	<div>
		<table class="ui center celled table">
			<thead class="ui center aligned">
				<th>No</th>
				<th>Id</th>
				<th>Nama UKM</th>
				<th>Lama Usaha</th>
				<th>Jumlah Pekerja</th>
				<th>Omzet</th>
				<th>Jumlah Aset</th>
				<th>Hasil Keputusan</th>
				<th>Aksi</th>
			</thead>
			<tbody>
			<?php $no = 1; ?>
			@foreach ($data as $dt)
				<tr class="ui center aligned">
					<td><?php echo $no; ?></td>
					<td class="ui center aligned">{{ $dt->id_penerimaan_modal }}</td>
					<td>{{ $dt->nama_ukm }}</td>
					<td class="ui right aligned">{{ $dt->lama_usaha }}</td>
					<td class="ui right aligned">{{ $dt->jumlah_pekerja }}</td>
					<td class="ui right aligned">{{ $dt->omzet }}</td>
					<td class="ui right aligned">{{ $dt->jumlah_aset }}</td>
					<td>{{ $dt->hasil_keputusan }}</td>
					<td class="ui center aligned">
						<a href="{{ route('main-edit', $dt->id_penerimaan_modal) }}" class="ui button blue">
							Edit
						</a>
						<a 
	                        href="{{ route('main-remove') }}"
	                        class="ui button negative"
	                        onclick="
	                        	event.preventDefault();
	                        	var a = confirm('delete data?');
	                        	if (a) {
	                        		document.getElementById('delete-data').submit();
	                        	}
	                        ">
	                        Delete
	                    </a>
	                    <form 
	                        id="delete-data" 
	                        action="{{ route('main-remove') }}" 
	                        method="POST"
	                        style="display: none;">
	                        @csrf
	                        <input type="text" name="id" placeholder="id" required="true" value="{{ $dt->id_penerimaan_modal }}">
	                    </form>
					</td>
				</tr>
				<?php $no++; ?>
			@endforeach
			</tbody>
			<tfoot>
				<div class="ui right floated">
					<tr>
						<th colspan="9">
							<div>
								{{ $data->links() }}
							</div>
						</th>
					</tr>
				</div>
			</tfoot>
		</table>
	</div>
</div>
@endsection