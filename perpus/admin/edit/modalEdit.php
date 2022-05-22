<!-- Modal Edit Anggota -->
<div class="modal fade" id="angEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mengedit Data anggota </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="edit/editAng.php" method="POST">
                <div class="modal-body">
                    
                    <input type="hidden" name="update_id_ang" id="update_id_ang">
                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="Nama" id="Nama"
                        placeholder="Masukan Nama Anggota Baru" required>
                    </div>

                    <div class="mb-3">
                        <label>Nomor Telepon</label>
                        <input type="text" class="form-control" name="noTelp" id="noTelp"
                        placeholder="Masukan Nomor Telepon Anggota Baru" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="editAng" class="btn btn-primary">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit Pinjam -->
<div class="modal fade" id="pinjamEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mengedit Data Peminjaman</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="edit/editPinjam.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="update_id_pinjam" id="update_id_pinjam">
                    <?php
                        include '../db.php';
                        $anggotaArr = mysqli_query($conn, "SELECT id, nama from anggota");
                        $bukuArr = mysqli_query($conn, "SELECT id, judul from buku");
                    ?>

                    <div class="mb-3">
                        <label>Anggota yang Meminjam</label>
                        <br>
                        <select name="anggota" id="anggota">
                            <option value="0">-- Pilih --</option>
                            <?php
                            while ($anggota = mysqli_fetch_array($anggotaArr))
                            {
                            ?>
                            <option value="<?php echo $anggota['id']?>">
                                <?php echo $anggota['nama']?>
                            </option>
                            <?php }?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Buku yang Dipinjam</label>
                        <br>
                        <select name="buku" id="buku">
                            <option value="0">-- Pilih --</option>
                            <?php
                            while ($buku = mysqli_fetch_array($bukuArr))
                            {
                            ?>
                            <option value="<?php echo $buku['id']?>">
                                <?php echo $buku['judul']?>
                            </option>
                            <?php }?>
                        </select>
                    </div>

            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="editPinjam" class="btn btn-primary">Pinjam</button>
                </div>
            </form>
        </div>
    </div>
</div> 

<!-- Modal Edit Buku -->
<div class="modal fade" id="bukuEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Mengedit Data Buku</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="edit/editBuku.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                <input type="hidden" name="update_id_buku" id="update_id_buku">

                <?php
                include '../db.php';
                $genreEnum = mysqli_query($conn, "SELECT SUBSTRING(COLUMN_TYPE,5) FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'perpusa' AND TABLE_NAME = 'buku' AND COLUMN_NAME = 'genre'");
                $namaGenreEnum = $genreEnum->fetch_array()[0] ?? '';
                $namaGenreEnum = str_replace("'", "", $namaGenreEnum);
                $namaGenreEnum = substr($namaGenreEnum, 1, -1);
                $namaGenreArr = explode(',', $namaGenreEnum);

                $rakArr = mysqli_query($conn, "SELECT * FROM rak");
                ?>

                <div class="mb-3">
                    <label>Cover Buku</label>
                    <p>Masukan File apabila akan diganti. Bila tidak, kosongkan!</p>
                    <input type="file" name="sampul" class="input-control">
                </div>
            
                <div class="mb-3">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="Judul" id="Judul"
                    placeholder="Masukan Judul Buku" required>
                </div>

                <div class="mb-3">
                    <label>Penulis</label>
                    <input type="text" class="form-control" name="Penulis" id="Penulis"
                    placeholder="Masukan Penulis Buku" required>
                </div>

                <div class="mb-3">
                    <label>Penerbit</label>
                    <input type="text" class="form-control" name="Penerbit" id="Penerbit"
                    placeholder="Masukan Penerbit Buku" required>
                </div>

                <div class="mb-3">
                    <label>Genre</label>
                    <select name="Genre" id="Genre">
                        <option value="0">--Pilih--</option>
                        <?php
                        foreach($namaGenreArr as $namaGenre)
                        {?>
                        <option value="<?php echo $namaGenre?>"><?php echo $namaGenre?></option>
                        <?php }?>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Lokasi</label>
                    <select name="Lokasi" id="Lokasi">
                        <option value="0">--Pilih--</option>
                    <?php
                        while ($namaRak = mysqli_fetch_array($rakArr))
                        {?>
                        <option value="<?php echo $namaRak['id']?>" class=><?php echo $namaRak['nama_rak']?></option>
                        <?php }?>
                    </select>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="editBuku" class="btn btn-primary">Simpan Data</button>
            </div>
            </form>
        </div>
    </div>
</div> 
