<?= $this->extend('layout/htemplate'); ?>
<?= $this->section('content'); ?>

<h1 class="text-center mt-3">Hierarki Daftar Teman</h1>
<hr>
<?php foreach ($teman as $t) : ?>
    <?php if ($count->where("kenalan_dari", $t['nama_teman'])->countAllResults() != 0) : ?>
        <div class="baris-1">
            <div class="hierarchi-name">
                <p><?= $t['nama_teman']; ?></p>
            </div>
            <!-- <div class="garis-vr"></div> -->
            <div class="baris-pisah">
                <?php foreach ($count->like('kenalan_dari', $t['nama_teman'])->find() as $u) : ?>
                    <div class="baris-next">
                        <div class="garis-hr"></div>
                        <div class="hierarchi-name">
                            <p><?= $u['nama_teman']; ?></p>
                        </div>
                        <!-- <div class="garis-vr"></div> -->
                        <div class="baris-pisah">
                            <?php foreach ($count->like('kenalan_dari', $u['nama_teman'])->find() as $v) : ?>
                                <div class="baris-next">
                                    <div class="garis-hr"></div>
                                    <div class="hierarchi-name">
                                        <p><?= $v['nama_teman']; ?></p>
                                    </div>
                                    <!-- <div class="garis-vr"></div> -->
                                    <div class="baris-pisah">
                                        <?php foreach ($count->like('kenalan_dari', $v['nama_teman'])->find() as $w) : ?>
                                            <div class="baris-next">
                                                <div class="garis-hr"></div>
                                                <div class="hierarchi-name">
                                                    <p><?= $w['nama_teman']; ?></p>
                                                </div>
                                                <!-- <div class="garis-vr"></div> -->
                                                <div class="baris-pisah">
                                                    <?php foreach ($count->like('kenalan_dari', $w['nama_teman'])->find() as $x) : ?>
                                                        <div class="baris-next">
                                                            <div class="garis-hr"></div>
                                                            <div class="hierarchi-name">
                                                                <p><?= $x['nama_teman']; ?></p>
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
        <hr>
    <?php endif; ?>
<?php endforeach; ?>
<?= $this->endSection() ?>