<!-- Modal input data toko -->
<div class="modal fade" id="input_data_toko" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="http://localhost/kaukakau/?c=manajer_pemasaran&f=tambah_toko" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Input Data Toko</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <label for="nama_toko">Nama Toko</label>
                        <input type="text" class="form-control" id="nama_toko" placeholder="nama_toko"
                               name="nama_toko">
                    </div>
                    <div class="input-group">
                        <label for="alamat_toko">Alamat toko</label>
                        <input type="text" class="form-control" id="alamat_toko" placeholder="alamat_toko"
                               name="alamat_toko">
                    </div>
                    <div class="input-group">
                        <label for="pemilik">Pemilik</label>
                        <input type="text" class="form-control" id="pemilik" placeholder="pemilik" name="pemilik">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal input data penjualan -->
<div class="modal fade" id="input_data_penjualan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="http://localhost/kaukakau/?c=manajer_pemasaran&f=tambah_penjualan" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Input Data Penjualan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" placeholder="Nama" name="tanggal">
                    </div>
                    <div class="input-group">
                        <label for="nama_produk">Nama produk</label>
                        <select class="form-control" name="nama_produk" id="nama_produk">
                            <?php foreach ($produk as $item) { ?>
                                <option value="<?php echo $item['id']; ?>"><?php echo $item['namaproduk']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="jumlah">Jumlah penjualan</label>
                        <input type="number" class="form-control" id="jumlah" placeholder="Jumlah" name="jumlah">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal input data stock -->
<div class="modal fade" id="input_data_stock" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="http://localhost/kaukakau/?c=manajer_stok&f=tambah_stok" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Input Stok</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <label for="nama_produk">Nama Produk</label>
                        <select class="form-control" name="nama_produk" id="nama_produk">
                            <?php foreach ($produk as $item) { ?>
                                <option value="<?php echo $item['id']; ?>"><?php echo $item['namaproduk']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" placeholder="Nama" name="tanggal">
                    </div>
                    <div class="input-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah" placeholder="Jumlah" name="jumlah">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal input penjadwalan -->
<div class="modal fade" id="input_penjadwalan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="http://localhost/kaukakau/?c=manajer_penjadwalan&f=tambah_jadwal" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Input Jadwal Produksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <label for="nama_produk">Nama Produk</label>
                        <select class="form-control" name="nama_produk" id="nama_produk">
                            <?php foreach ($produk as $item) { ?>
                                <option value="<?php echo $item['id']; ?>"><?php echo $item['namaproduk']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="tanggal_mulai">Tanggal mulai</label>
                        <input type="date" class="form-control" id="tanggal_mulai" placeholder="Nama"
                               name="tanggal_mulai">
                    </div>
                    <div class="input-group">
                        <label for="tanggal_selesai">Tanggal selesai</label>
                        <input type="date" class="form-control" id="tanggal_selesai" placeholder="Nama"
                               name="tanggal_selesai">
                    </div>
                    <div class="input-group">
                        <label for="jumlah">Jumlah penjualan</label>
                        <input type="number" class="form-control" id="jumlah" placeholder="Jumlah" name="jumlah">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal input data produk -->
<div class="modal fade" id="input_data_produk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="http://localhost/kaukakau/?c=manajer_stok&f=tambah_produk" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Input Data produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <label for="Tipe Produk">Tipe Produk</label>
                        <input type="text" class="form-control" id="tipe_produk" placeholder="Tipe Produk"
                               name="tipe_produk">
                    </div>
                    <div class="input-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk"
                               placeholder="Nama Produk">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal edit data penjualan -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="http://localhost/kaukakau/?c=manajer_pemasaran&f=tambah_penjualan" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data Penjualan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" placeholder="Nama" name="tanggal">
                    </div>
                    <div class="input-group">
                        <label for="nama_produk">Nama produk</label>
                        <select class="form-control" name="nama_produk" id="nama_produk">
                            <?php foreach ($produk as $item) { ?>
                                <option value="<?php echo $item['id']; ?>"><?php echo $item['namaproduk']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="jumlah">Jumlah penjualan</label>
                        <input type="number" class="form-control" id="jumlah" placeholder="Jumlah" name="jumlah">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>