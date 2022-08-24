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
                        <form action="<?= base_url('index.php/manager/tes_wawancara'); ?>" method="POST">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Grup</label>
                                <div class="col-sm-9">
                                    <select name="pilih-group" id="pilih-group" class="form-control input-sm">
                                        <?php if (isset($batch)) : ?>
                                            <option selected hidden disabled value="<?= $batch['grup_id']; ?>"><?= $batch['grup_nama']; ?></option>
                                        <?php else : ?>
                                            <option selected hidden disabled>Select Batch</option>
                                        <?php endif; ?>
                                        <?php foreach ($user_grup as $ug) : ?>
                                            <option value="<?= $ug['grup_id']; ?>"><?= $ug['grup_nama']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" name="batch" value="1" class="btn btn-primary pull-right"><span>Pilih</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">Topik Wawancara</div>
                </div>
                <form action="<?= base_url('index.php/manager/tes_wawancara'); ?>" method="POST">
                    <div class="box-body form-horizontal">
                        <div class="col-sm-12">
                            <div class="col-lg-12"><?= $this->session->flashdata('message'); ?></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nama</label>
                                <div class="col-sm-4">
                                    <input type="hidden" name="pilih-groups" value="<?= isset($batch['grup_id']) ? $batch['grup_id'] : ''; ?>">
                                    <input type="hidden" name="check" id="check" value="0">
                                    <select name="pilih-user" id="pilih-tes" class="form-control input-sm" required>
                                        <option hidden selected disabled>Select User</option>
                                        <?php foreach ($user as $u) : ?>
                                            <option value="<?= $u['user_id']; ?>" <?php echo set_value('pilih-user') == $u['user_id'] ? "selected" : "";  ?>><?= $u['user_firstname']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('pilih-user', '<small class=" text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nama Topik 1</label>
                                <div class="col-sm-4">
                                    <input type="text" name="topik_1" id="topik_1" disabled value="<?= $topik[0]["topik_1"]; ?>" placeholder="Input Topik Wawancara" class="form-control input-sm" />
                                    <?= form_error('is_pass_1', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <fieldset id="is_pass_1">
                                    <div class="col-sm-2">
                                        <input type="radio" id="pilihan-lulus-1" name="is_pass_1" value="1" <?php echo set_value('is_pass_1') == 1 ? "checked" : "";  ?>>
                                        <label for="pilihan-lulus-1">Ya</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="radio" id="pilihan-tidak-lulus-1" name="is_pass_1" value="2" <?php echo set_value('is_pass_1') == 2 ? "checked" : "";  ?>>
                                        <label for="pilihan-tidak-lulus-1">Tidak</label>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nama Topik 2</label>
                                <div class="col-sm-4">
                                    <input type="text" name="topik_2" id="topik_2" disabled value="<?= $topik[0]["topik_2"]; ?>" placeholder="Input Topik Wawancara" class="form-control input-sm" />
                                    <?= form_error('is_pass_2', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <fieldset id="is_pass_2">
                                    <div class="col-sm-2">
                                        <input type="radio" id="pilihan-lulus-2" name="is_pass_2" value="1" <?php echo set_value('is_pass_2') == 1 ? "checked" : "";  ?>>
                                        <label for="pilihan-lulus-2">Ya</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="radio" id="pilihan-tidak-lulus-2" name="is_pass_2" value="2" <?php echo set_value('is_pass_2') == 2 ? "checked" : "";  ?>>
                                        <label for="pilihan-tidak-lulus-2">Tidak</label>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nama Topik 3</label>
                                <div class="col-sm-4">
                                    <input type="text" name="topik_3" id="topik_3" disabled value="<?= $topik[0]["topik_3"]; ?>" placeholder="Input Topik Wawancara" class="form-control input-sm" />
                                    <?= form_error('is_pass_3', '<small class="text-danger ">', '</small>'); ?>
                                </div>
                                <fieldset id="is_pass_3">
                                    <div class="col-sm-2">
                                        <input type="radio" id="pilihan-lulus-3" name="is_pass_3" value="1" <?php echo set_value('is_pass_3') == 1 ? "checked" : "";  ?>>
                                        <label for="pilihan-lulus-3">Ya</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="radio" id="pilihan-tidak-lulus-3" name="is_pass_3" value="2" <?php echo set_value('is_pass_3') == 2 ? "checked" : "";  ?>>
                                        <label for="pilihan-tidak-lulus-3">Tidak</label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" name="batch" value="2" class="btn btn-primary pull-right"><span>Save</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>