<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    
<style>
	footer{
		position: fixed;
		height: 70px;
		bottom: 0;
		width: 100%;
	}
</style>
	<title><?= $title; ?></title>
  </head>
  <body>

<?php $this->load->view('backend/menu')?>
<main>
	<div class="p-5 mb-2 mt-3 bg-light rounded-3 text-center">
      <div class="container-fluid">
        <h3 class="display-5"><?= $title; ?></h1>
    </div>

	<div class="container">
		<div class="row">
			<div class="col-md-3">
					<div class="card border-success">
						<div class="card-body">
				<?php echo form_open_multipart('kamar/tambah');?>
					<div class="mb-3">
						<label class="form-label">Tipe Kamar</label>
						<select class="form-select" name="tipe_kamar" aria-label="Default select example">
							<option selected>Open this select menu</option>
							<option value="River View Suite">River View Suite</option>
							<option value="Riverview Executive Room">Riverview Executive Room</option>
							<option value="Riverfront Premier Room">Riverfront Premier Room</option>
							</select>
					</div>
					<div class="mb-3">
						<label class="form-label">Jumlah Kamar</label>
						<input type="number" name="jumlah-kamar" class="form-control" >
					</div>
					<div class="mb-3">
						<label class="form-label">Harga</label>
						<input type="number" name="harga" class="form-control" >
					</div>
					<div class="mb-3">
						<label class="form-label">Gambar</label>
						<input type="file" name="gambar" class="form-control" >
					</div>
					<button type="submit" name="sumbit" class="btn btn-primary">Submit</button>
					</form>
				</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="card border-danger">
					<div class="card-body">
						<table id="example" class="display" style="width:100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Tipe Kamar</th>
					<th>Jumlah Kamar</th>
					<th>Harga</th>
					<th>Gambar</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1;
				foreach($row as $r) :?>
				<tr>
					<td><?= $no++; ?></td>
					<td><?= $r->tipe_kamar; ?></td>
					<td><?= $r->jumlah_kamar; ?></td>
					<td><?= $r->harga; ?></td>
					<td><?= $r->gambar; ?></td>
					<td>
						<a href="#" class='btn btn-sm btn-success'>Edit</a>
						<a href="#" class='btn btn-sm btn-danger'>Delete</a>
					</td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
					</div>
				</div>
			</div>
			</div>
	</div>
</main>

<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">Place sticky footer content here.</span>
  </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>$(document).ready(function () {
    	$('#example').DataTable();
		});</script>
  </body>
</html>
