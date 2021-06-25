<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Komik</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $no = 1; ?>
                    <?php foreach ($komik as $k) : ?>
                        <tr>
                            <th scope="row"> <?= $no++; ?></th>
                            <td><img src="/asset/img/<?= $k['sampul']; ?>" alt="Tidak muncul" class="sampul"></td>
                            <td><?= $k['judul']; ?></td>
                            <td><a href="/komik/<?= $k['slug']; ?>" class="btn btn-success">Detail</a></td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>