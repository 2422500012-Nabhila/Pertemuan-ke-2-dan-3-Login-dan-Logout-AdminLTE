<div class="row mb-3">
    <?php foreach ($list_gambar as $gambar) : ?>
        <div class="col-lg-3 mb-4">
            <div class="card h-100 shadow-sm">
                <!-- Tampilan Gambar -->
                <img src="<?= base_url('uploads/produk/') . $gambar['nama_gambar'] ?>" class="card-img-top" style="height: 250px; object-fit: cover; border-bottom: 1px solid #ddd;">
                
                <div class="card-body p-3 d-flex flex-column justify-content-end">
                    
                    <!-- Form Khusus Tombol Ubah Gambar Spesifik -->
                    <form action="<?= base_url('admin/produk/ubah_satu_gambar/' . $gambar['id_gambar']) ?>" method="post" enctype="multipart/form-data" class="mb-2">
                        <input type="hidden" name="produk_id" value="<?= $produk['id_produk'] ?>">
                        
                        <!-- Input file untuk memilih gambar pengganti -->
                        <input type="file" name="gambar_baru" class="form-control mb-2" style="font-size: 13px; padding: 5px; height: auto;" required>
                        
                        <!-- Tombol Ubah -->
                        <button type="submit" class="btn btn-warning btn-sm w-100 font-weight-bold">
                            <i class="fas fa-edit"></i> Ubah Gambar
                        </button>
                    </form>

                    <!-- Tombol Hapus -->
                    <a href="<?= base_url('admin/produk/hapus_gambar/' . $gambar['id_gambar']) ?>" class="btn btn-danger btn-sm w-100 font-weight-bold" onclick="return confirm('Apakah Anda yakin ingin menghapus gambar ini?')">
                        <i class="fas fa-trash"></i> Hapus
                    </a>
                    
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>