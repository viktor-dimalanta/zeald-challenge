<!-- view/team/detail.php -->
<?php $judul = 'Detail Lagu/Album/Artist' ?>

<?php ob_start() ?>
    <h1><?= $team['nama'] ?></h1>

    <dl>
        <dt>Nama Penyanyi/Artis/Band : </dt>
        <dd><?= $team['nama'] ?></dd>
        <dt>Judul Lagu : </dt>
        <dd><?= $team['judul'] ?></dd>
        <dt>Nama Album : </dt>
        <dd><?= $team['album'] ?></dd>
		<dt>Tahun Album : </dt>
        <dd><?= $team['tahun'] ?></dd>
    </dl>
<?php $isi = ob_get_clean() ?>

<?php include 'view/template.php' ?>