<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Pertanyaan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="padding-top: 100px;">
        <div><h1>List Pertanyaan</h1></div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Pertanyaan</h3>
            <?php if (empty($pertanyaan)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">No</th>
                        <th class="text-center" scope="col">Email</th>
                        <th class="text-center" scope="col">Pertanyaan</th>
                        <th class="text-center" scope="col">Status</th>
                        <th class="text-center" scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($pertanyaan as $tanya) : ?>
                        <td class="text-center"><?= $tanya['no']; ?></td>
                        <td class="text-center"><?= $tanya['email']; ?></td>
                        <td class="text-center"><?= $tanya['pertanyaan']; ?></td>
                        <td class="text-center"><?= $tanya['status']; ?></td>
                        <td class="text-center">
                            <a href="<?= base_url(); ?>mahasiswa/simpan/<?= $tanya['id'] ?>" class="badge badge-success float-center">simpan</a>
                            <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $tanya['id'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');"?>hapus</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script type="text/javascript">
    $(document).ready( function () {
        $('#tablee').DataTable();
    } );
</script>
</html>