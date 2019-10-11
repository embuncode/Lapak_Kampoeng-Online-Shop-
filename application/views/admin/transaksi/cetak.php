<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $title ?></title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css" media="print">
		body  {
			font-family: Arial;
			font-size: 12px;
		}

		.cetak {
			width: 19cm,
			height: 27cm;
			padding: 1cm;
		}

		table {
			border: solid thin #000;
			border-collapse: collapse;
		}

		td, th {
			padding: 3mm 6mm;
			text-align: left;
			vertical-align: top;
		}

		th {
			background-color: #F5F5F5;
			font-weight: bold;
		}

		h1 {
			text-align: center;
			font-size: 18px;
			text-transform: uppercase;
		}
	</style>
	<style type="text/css" media="screen">
		body  {
			font-family: Arial;
			font-size: 12px;
		}

		.cetak {
			width: 19cm,
			height: 27cm;
			padding: 1cm;
		}

		table {
			border: solid thin #000;
			border-collapse: collapse;
		}

		td, th {
			padding: 3mm 6mm;
			text-align: left;
			vertical-align: top;
		}

		th {
			background-color: #F5F5F5;
			font-weight: bold;
		}

		h1 {
			text-align: center;
			font-size: 18px;
			text-transform: uppercase;
		}
	</style>
</head>
<body>
	<br>
	<div class="cetak">
		<h1>DETAIL TRANSAKSI <?= $site->namaweb ?></h1>

		<table class="table table-bordered">
		<thead>
			<tr>
				<th width="20%">Nama Pelanggan</th>
				<th><?= $header_transaksi->nama_pelanggan ?></th>
			</tr>
			<tr>
				<th width="20%">Kode Transaksi</th>
				<th><?= $header_transaksi->kode_transaksi ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Tanggal</td>
				<td> : <?= date('d-m-Y', strtotime($header_transaksi->tanggal_transaksi)) ?></td>
			</tr>
			<tr>
				<td>Jumlah Total</td>
				<td> : <?= number_format($header_transaksi->jumlah_transaksi) ?></td>
			</tr>
			<tr>
				<td>Status Bayar</td>
				<td> : <?= $header_transaksi->status_bayar ?></td>
			</tr>
			<tr>
				<td>Bukti Bayar</td>
				<td> : <?php if($header_transaksi->bukti_bayar == "") {echo 'Belum Ada'; } else { ?>
					   <img src="<?= base_url('assets/upload/image/'.$header_transaksi->bukti_bayar) ?>" class="img img-thumbnail" width="200"> <?php } ?>
				</td>
			</tr>
			<tr>
				<td>Tanggal Bayar</td>
				<td> : <?= date('d-m-Y',strtotime($header_transaksi->tanggal_bayar)) ?></td>
			</tr>
			<tr>
				<td>Jumlah Bayar</td>
				<td> : Rp. <?= number_format($header_transaksi->jumlah_bayar,'0',',','.') ?></td>
			</tr>
			<tr>
				<td>Pembayaran Dari</td>
				<td> : <?= $header_transaksi->nama_bank ?> <b> No. rekening </b> <?= $header_transaksi->rekening_pembayaran ?> <b> A.N  </b><?= $header_transaksi->rekening_pelanggan ?></td>
			</tr>
			<tr>
				<td>Pembayaran Ke Rekening</td>
				<td> : <?= $header_transaksi->bank ?><b> No. rekening  </b><?= $header_transaksi->nomor_rekening ?> ===><b> A.N </b><?= $header_transaksi->nama_pemilik ?></td>
			</tr>
		</tbody>
	</table>
	<hr>	
	<table class="table table-bordered" style="width=900px; padding-left: 10px;"  >
		<thead>
			<tr class="bg-success">
				<th>No</th>
				<th>Kode</th>
				<th>Nama Produk</th>
				<th>Jumlah</th>
				<th>Harga</th>
				<th>Sub Total</th>
			</tr>
		</thead>
		<tbody>
			<?php $i=1; foreach ($transaksi as $transaksi) { ?>
					
			<tr>
				<td><?= $i ?></td>
				<td><?= $transaksi->kode_produk ?></td>
				<td><?= $transaksi->nama_produk ?></td>
				<td><?= number_format($transaksi->jumlah) ?></td>
				<td><?= number_format($transaksi->harga) ?></td>
				<td><?= number_format($transaksi->total_harga) ?></td>
			</tr>

			<?php $i++; } ?>
		</tbody>
	</table>
	</div>

	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>