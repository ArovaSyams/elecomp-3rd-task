<?= $this->extend('layout/htemplate'); ?>
<?= $this->section('content'); ?>

<h1 class="text-center mt-3">Hierarki Daftar Teman</h1>
<hr>
<?php foreach ($teman as $t) : ?>
    <?php if ($count->where("kenalan_dari", $t['id_teman'])->countAllResults() != 0) : ?>
        <div class="baris-1">
            <div class="hierarchi-name">
                <p><?php echo $t['nama_teman'] . ' - ' . $t['no_hp_teman'] . ' - ' . $t['pekerjaan_teman']; ?></p>

            </div>
            <!-- <div class="garis-vr"></div> -->
            <div class="baris-pisah">
                <?php foreach ($count->where('kenalan_dari', $t['id_teman'])->find() as $u) : ?>
                    <div class="baris-next">
                        <div class="garis-hr"></div>
                        <div class="hierarchi-name">
                            <p><?php echo $u['nama_teman'] . ' - ' . $u['no_hp_teman'] . ' - ' . $u['pekerjaan_teman']; ?></p>

                        </div>
                        <!-- <div class="garis-vr"></div> -->
                        <div class="baris-pisah">
                            <?php foreach ($count->where('kenalan_dari', $u['id_teman'])->find() as $v) : ?>
                                <div class="baris-next">
                                    <div class="garis-hr"></div>
                                    <div class="hierarchi-name">
                                        <p><?php echo $v['nama_teman'] . ' - ' . $v['no_hp_teman'] . ' - ' . $v['pekerjaan_teman']; ?></p>

                                    </div>
                                    <!-- <div class="garis-vr"></div> -->
                                    <div class="baris-pisah">
                                        <?php foreach ($count->where('kenalan_dari', $v['id_teman'])->find() as $w) : ?>
                                            <div class="baris-next">
                                                <div class="garis-hr"></div>
                                                <div class="hierarchi-name">
                                                <p><?php echo $w['nama_teman'] . ' - ' . $w['no_hp_teman'] . ' - ' . $w['pekerjaan_teman']; ?></p>
                                                </div>
                                                <!-- <div class="garis-vr"></div> -->
                                                <div class="baris-pisah">
                                                    <?php foreach ($count->where('kenalan_dari', $w['id_teman'])->find() as $x) : ?>
                                                        <div class="baris-next">
                                                            <div class="garis-hr"></div>
                                                            <div class="hierarchi-name">
                                                            <p><?php echo $x['nama_teman'] . ' - ' . $x['no_hp_teman'] . ' - ' . $x['pekerjaan_teman']; ?></p>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>
<?= $this->endSection() ?>