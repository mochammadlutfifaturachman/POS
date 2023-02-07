<h2>Product Management</h2>
<p>You can manage product</p>
<?= $data_product['nama_produk'] ?>

<?php if (session()->getFlashdata('gagal')) : ?>
    <div class="alert alert-danger" role="alert">
        <?= session()->getFlashdata('gagal'); ?>
    </div>
<?php endif; ?>

<?php if (isset($validation)) : ?>
    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
<?php endif; ?>


<form action="<?= base_url('login/auth'); ?>" method="POST">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="login" placeholder="Login">
</form>