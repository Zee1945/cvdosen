<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <h1 class="text-center">Lecturers Curriculum Vitae</h1>
    <h4>Maksifolagus Kristus Department</h4>
    <div class="row">
        <div class="col-lg-4">

            <?php foreach ($dosen as $ld) : ?>
                <div class="card">


                    <img src="<?= $ld['foto']; ?>" alt="Contoh gambar dosen" srcset="">
                    <p><?= $ld['name']; ?></p>
                    <p><?= $ld['NIK']; ?></p>
                    <p><?= $ld['email']; ?></p>
                    <p><?= $ld['lecture_expertise']; ?></p>

                    <a href="app/detailDosen" class="btn btn-success">Detail CV</a>

                </div>
        </div>
    <?php endforeach; ?>








    </div>
</div>
</div>

<?= $this->endSection(); ?>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->