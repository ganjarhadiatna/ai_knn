@extends('layouts')
@section('content')

<?php 
	$ya = 0;
	$tidak = 0;
	$tunda = 0;
?>

<div class="ui raised very padded container segment">
	<div class="ui segment basic">
		<h2 class="ui header">Data Cluster</h2>
	</div>
	<div>
		<table class="ui center celled table">
			<thead class="ui center aligned">
				<th>No</th>
				<th>Nama UKM</th>
				<th>Lama Usaha</th>
				<th>Jumlah Pekerja</th>
				<th>Omzet</th>
				<th>Jumlah Aset</th>
				<th>Square Distance</th>
				<th>Jarak</th>
				<th>Hasil Keputusan</th>
			</thead>
			<tbody>
				<?php $no = 1; ?>
				@foreach ($data as $dt)
					<tr class="ui center aligned">
						<td><?php echo $no; ?></td>
						<td>
							{{ $dt->nama_ukm }}
						</td>
						<td class="ui right aligned">
							{{ $dt->lama_usaha }}
						</td>
						<td class="ui right aligned">
							{{ $dt->jumlah_pekerja }}
						</td>
						<td class="ui right aligned">
							{{ $dt->omzet }}
						</td>
						<td class="ui right aligned">
							{{ $dt->jumlah_aset }}
						</td>
						<td>
							{{ '('.$dt->lama_usaha.' - '.$a.')^2 + ('.$dt->jumlah_pekerja.' - '.$b.')^2 + ('.$dt->omzet.' - '.$c.')^2 + ('.$dt->jumlah_aset.' - '.$d.')^2' }}
						</td>
						<td class="ui right aligned">
							{{ $dt->jarak }}
						</td>
						<td>
							{{ $dt->hasil_keputusan }}
							<?php 
								$dhk = $dt->hasil_keputusan;
								if ($dhk == 'ya') 
								{
									$ya++;
								} 
								if ($dhk == 'tidak') 
								{
									$tidak++;
								}
								if ($dhk == 'tunda') 
								{
									$tunda++;
								}
							?>
						</td>
					</tr>
					<?php $no++; ?>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

<div class="ui raised very padded container segment">
	<div class="ui segment basic">
		<h2 class="ui header">Hasil Cluster</h2>
	</div>
	<div>
		<table class="ui center celled table">
			<thead class="ui center aligned">
				<th>No</th>
				<th>Nama UKM</th>
				<th>Lama Usaha</th>
				<th>Jumlah Pekerja</th>
				<th>Omzet</th>
				<th>Jumlah Aset</th>
				<th>Hasil Keputusan</th>
			</thead>
			<tbody>
				<tr class="ui center aligned">
					<td><?php echo $no; ?></td>
					<td>
						x
					</td>
					<td class="ui right aligned">
						{{ $a }}
					</td>
					<td class="ui right aligned">
						{{ $b }}
					</td>
					<td class="ui right aligned">
						{{ $c }}
					</td>
					<td class="ui right aligned">
						{{ $d }}
					</td>
					<td>
						{{ 'ya:'.$ya.' | tidak:'.$tidak.' | tunda:'.$tunda }}
						<?php 
							if ($ya >= $tidak && $ya >= $tunda) 
							{
								echo "Ya";
							}
							if ($tidak >= $ya && $tidak >= $tunda) 
							{
								echo "Tidak";
							}
							if ($tunda >= $ya && $tunda >= $tidak)
							{
								echo "Tunda";
							}
						?>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection