<!-- view/team/list.php -->
<?php $judul = 'Daftar Music' 
?>

<?php ob_start() ?>
	<br>
    <center><h1>Team Name</h1></center>
	<br>
	<div class="table-responsive"> 
    <table class="table">
        <tr>
            <th>Code</th>
            <th>Name</th>
        </tr>
        <?php foreach ($music as $row): ?>
        <tr>
            <td><?= $row['code'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><a href="http://localhost/pdomvc/index.php/team/detail?id=<?= $row['id'] ?>" class="btn btn-success btn-xs"> Detail</a></td>
            <td><a href="http://localhost/pdomvc/index.php/team/edit?id=<?= $row['id'] ?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>
            <td><a href="http://localhost/pdomvc/index.php/team/delete?id=<?= $row['id']?>" onclick="return confirm('Anda yakin akan menghapus data ini?')" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-trash"></span> Delete</a></td>
        </tr>
        <?php endforeach ?>
    </table>
	</div>
    <br>
    <a href="http://localhost/pdomvc/index.php/team/create" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Create</a>
<?php $isi = ob_get_clean() ?>

<?php include 'view/template.php' ?>