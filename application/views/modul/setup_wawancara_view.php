<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Setup Topik Wawancara
		<small>TEdit topik wawancara</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo site_url(); ?>/"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Topik</li>
	</ol>
</section>



<!-- Main content -->
<section class="content">
	<div class="row">
        <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
    						<div class="box-title">Daftar Topik Wawancara</div>
    						<div class="box-tools pull-right">
    							<div class="dropdown pull-right">
    							</div>
    						</div>
                    </div>

                    <div class="box-body">
                        <?php echo form_open($url.'/hapus_daftar_topik_wawancara','id="form-hapus"'); ?>
                        <input type="hidden" name="check" id="check" value="0">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th class="all">Nama Topik 1</th>
                                    <th>Nama Topik 2</th>
                                    <th>Nama Topik 3</th>
                                    <th class="all">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach($wawancara as $w): ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $w['topik_1']; ?></td>
                                    <td><?= $w['topik_2']; ?> </td>
                                    <td><?= $w['topik_3']; ?> </td>
									<td> <a href="<?= base_url("manager/modul_wawancara/edit/").$w['id']; ?>" data-toggle="modal" data-target="#editModal<?= $w['id']?>">Edit</a> </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table> 
                        </form>                       
                    </div>
                </div>
        </div>
    </div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>

    <?php foreach($wawancara as $w): ?>
        <div class="modal" id="editModal<?= $w['id']; ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
    <form method="post" action="<?= base_url("index.php/manager/modul_wawancara/edit/").$w['id']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                    <div id="trx-judul">Edit Topik</div>
                </div>
                <div class="modal-body">
                    <div class="row-fluid">
                        <div class="box-body">
                            <div id="form-pesan-edit"></div>
                            <div class="form-group">
                                <label>Nama Topik 1</label>
                                <input type="text" class="form-control" id="edit-topik-1" name="edit-topik-1" placeholder="Nama Topik 1" value="<?= $w['topik_1']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Nama Topik 2</label>
                                <input type="text" class="form-control" value="<?= $w['topik_2']; ?>" id="edit-topik-2" name="edit-topik-2" placeholder="Nama Topik 2">
                            </div>
                            <div class="form-group">
                                <label>Nama Topik 3</label>
                                <input type="text" class="form-control" id="edit-topik-3" value="<?= $w['topik_3']; ?>" name="edit-topik-3" placeholder="Nama Topik 3">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>

    </form>
    </div>
    <?php endforeach; ?>