<?= $this->extend('layouts/pages') ?>

<?= $this->section('content') ?>


                            <div class="about-cont mt-3">
                                
                            <?php foreach($data as $row) :?>
                                <?php echo $row->content; ?>
                            <?php endforeach ;?>
                                
                            </div>
                            



<?= $this->endSection() ?>