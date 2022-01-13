<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Suppliers
		<small>Pemasok Barang</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
		<li class="active">Suppliers</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Suppliers</h3>
            <div class="pull-right">
                <a href="<?= site_url('supplier/add') ?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"> Create</i> 
                </a>
            </div>
        </div>
        <div class="box-body table-responsive" >
            <!-- <?php print_r($row)?> -->
            <table class="table table-border table-stripped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>HP</th>
                        <th>Alamat</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach($row->result() as $key => $data ){ ?>
                    <tr>
                        <td><?= $no++ ?>.</td>
                        <td><?= $data->nama ?></td>
                        <td><?= $data->hp ?></td>
                        <td><?= $data->alamat ?></td>
                        <td><?= $data->des ?></td>
                        <td class="text-center" width="160px">
                            <a href="<?= site_url('supplier/edit/'.$data->supplier_id) ?>" class="btn btn-primary btn-xs" >
                                <i class="fas fa-pen"> Update</i>
                            </a>
                            <a href="<?= site_url('supplier/del/'.$data->supplier_id) ?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-xs" >
                                <i class="fa fa-trash"> Delete</i>
                            </a>                           
                        </td>
                    </tr>
                    <?php 
                    } ?>
                </tbody>
            </table>
        </div>

    </div>
	
</section>
<!-- /.content -->