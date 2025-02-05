<?= $this->extend('layout/karyawan_layout'); ?>

<?= $this->section('content'); ?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Transaksi</h1>
    <?= $this->include('components/_message'); ?>
    <div class="card mt-2">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="card-title">Tabel Data Transaksi</h5>
          <a href="/transaksi/tambah" type="button" class="btn btn-primary">
            + Tambah
          </a>
        </div>
        <!-- Table with stripped rows -->
        <table class="table table-bordered text-center">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">Jenis Barang</th>
              <th scope="col">Jumlah / Harga</th>
              <th scope="col">Total Harga</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($list_transaksi as $index => $transaksi) : ?>
              <?php $jumlahBarang = sizeof($transaksi['barang']); ?>
              <?php foreach ($transaksi['barang'] as $barangIndex => $barang) : ?>
                <?php if ($barangIndex === 0) : ?>
                  <tr>
                    <th scope="row" rowspan="<?= $jumlahBarang; ?>"><?= $index + 1; ?></th>
                    <td rowspan="<?= $jumlahBarang; ?>"><?= $transaksi['nama']; ?></td>
                    <td rowspan="<?= $jumlahBarang; ?>"><?= $transaksi['alamat']; ?></td>
                    <td style="font-size: 12px;"><?= $barang['nama_jenis']; ?></td>
                    <td style="font-size: 12px;" class="d-flex justify-content-between">
                      <div><?= $barang['jumlah'] . " " . $barang['satuan']; ?></div>
                      <div><?= MoneyFormatID($barang['harga_barang']); ?></div>
                    </td>
                    <td rowspan="<?= $jumlahBarang; ?>"><?= MoneyFormatID($transaksi['total_harga']); ?></td>
                    <td rowspan="<?= $jumlahBarang; ?>">
                      <button type="button" class="btn btn-warning btn-sm">Ubah</button>
                      <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                  </tr>
                <?php endif ?>
                <?php if ($barangIndex !== 0) : ?>
                  <tr>
                    <td style="font-size: 12px;"><?= $barang['nama_jenis']; ?></td>
                    <td style="font-size: 12px;" class="d-flex justify-content-between">
                      <div><?= $barang['jumlah'] . " " . $barang['satuan']; ?></div>
                      <div><?= MoneyFormatID($barang['harga_barang']); ?></div>
                    </td>
                  </tr>
                <?php endif ?>
              <?php endforeach; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
        <!-- End Table with stripped rows -->
      </div>
    </div>
  </div>
</main>
<?= $this->endSection(); ?>