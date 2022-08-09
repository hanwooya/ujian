<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		<?= $title; ?>
		<small>Seleksi Wawancara</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo site_url(); ?>/"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Wawancara</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header with-border">
                    <div class="box-title">Input Wawancara</div>
                </div>
            <div class="box-body form-horizontal">
                    <div class="col-sm-6">
						<div class="form-group">
                            <label class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="hidden" name="check" id="check" value="0">
                                <select name="pilih-tes" id="pilih-tes" class="form-control input-sm">
                                    <option hidden selected disabled>Select User</option>
                                    <?php foreach($user as $u): ?>
                                        <option value="<?= $u['user_id']; ?>"><?= $u['user_firstname']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Grup</label>
                            <div class="col-sm-9">
                                <select name="pilih-group" id="pilih-group" class="form-control input-sm">
                                    <option selected hidden disabled>Select Batch</option>
                                    <?php foreach($user_grup as $ug): ?>
                                        <option value="<?= $ug['grup_id']; ?>"><?= $ug['grup_nama']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
            <div class="box-header with-border">
                    <div class="box-title">Topik Wawancara</div>
                </div>
            <div class="box-body form-horizontal">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama Topik 1</label>
                            <div class="col-sm-4">
                                <input type="text" name="topik_1" id="topik_1" disabled value="<?= $topik[0]["topik_1"]; ?>" placeholder="Input Topik Wawancara" class="form-control input-sm" />
                            </div>
                            <fieldset id="is_pass_1">
                                <div class="col-sm-2">
                                    <input type="radio" id="pilihan-lulus-1"  name="is_pass_1" value="Ya">
                                    <label for="pilihan-lulus-1">Ya</label>
                                </div>
                                <div class="col-sm-2">
                                    <input type="radio" id="pilihan-tidak-lulus-1" name="is_pass_1" value="Tidak">
                                    <label for="pilihan-tidak-lulus-1">Tidak</label>
                                </div>
                            </fieldset>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama Topik 2</label>
                            <div class="col-sm-4">
                                <input type="text" name="topik_2" id="topik_2" disabled value="<?= $topik[0]["topik_2"]; ?>" placeholder="Input Topik Wawancara" class="form-control input-sm" />
                            </div>
                            <fieldset id="is_pass_2">
                                <div class="col-sm-2">
                                    <input type="radio" id="pilihan-lulus-2" name="is_pass_2" value="Ya">
                                    <label for="pilihan-lulus-2">Ya</label>
                                </div>
                                <div class="col-sm-2">
                                    <input type="radio" id="pilihan-tidak-lulus-2" name="is_pass_2" value="Tidak">
                                    <label for="pilihan-tidak-lulus-2">Tidak</label>
                                </div>
                            </fieldset>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama Topik 3</label>
                            <div class="col-sm-4">
                                <input type="text" name="topik_3" id="topik_3" disabled value="<?= $topik[0]["topik_3"]; ?>" placeholder="Input Topik Wawancara" class="form-control input-sm" />
                            </div>
                            <fieldset id="is_pass_3">
                                <div class="col-sm-2">
                                    <input type="radio" id="pilihan-lulus-3" name="is_pass_3" value="Ya">
                                    <label for="pilihan-lulus-3">Ya</label>
                                </div>
                                <div class="col-sm-2">
                                    <input type="radio" id="pilihan-tidak-lulus-3" name="is_pass_3" value="Tidak">
                                    <label for="pilihan-tidak-lulus-3">Tidak</label>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
