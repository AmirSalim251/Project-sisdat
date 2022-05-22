<!-- Modal Insert Anggota -->
<div class="modal fade" id="angModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mendaftarkan anggota Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="insert/insertAng.php" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="Nama"
                        placeholder="Masukan Nama Anggota Baru" required>
                    </div>

                    <div class="mb-3">
                        <label>Nomor Telepon</label>
                        <input type="text" class="form-control" name="noTelp"
                        placeholder="Masukan Nomor Telepon Anggota Baru" required>
                    </div>

            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="insertAng" class="btn btn-primary">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Insert Pinjam -->
<div class="modal fade" id="pinjamModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Membuat Pinjaman</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="insert/insertPinjam.php" method="POST">
                <div class="modal-body">
                    <?php
                        include '../db.php';
                        $anggotaArr = mysqli_query($conn, "SELECT id, nama from anggota");
                        $bukuArr = mysqli_query($conn, "SELECT id, judul from buku");
                    ?>

                    <div class="mb-3">
                        <label>Anggota yang Meminjam</label>
                        <br>
                        <select name="anggota">
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
                        <select name="buku">
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
                    <button type="submit" name="insertPinjam" class="btn btn-primary">Pinjam</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Insert Buku -->
<div class="modal fade" id="bukuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Menambah Buku Baru</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="insert/insertBuku.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">

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
                    <br>
                    <input type="file" name="sampul" class="input-control" required>
                </div>
                <div class="mb-3">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="Judul"
                    placeholder="Masukan Judul Buku" required>
                </div>

                <div class="mb-3">
                    <label>Penulis</label>
                    <input type="text" class="form-control" name="Penulis"
                    placeholder="Masukan Penulis Buku" required>
                </div>

                <div class="mb-3">
                    <label>Penerbit</label>
                    <input type="text" class="form-control" name="Penerbit"
                    placeholder="Masukan Penerbit Buku" required>
                </div>

                <div class="mb-3">
                    <label>Genre</label>
                    <select name="Genre" value="">
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
                    <select name="Lokasi">
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
                <button type="submit" name="insertBuku" class="btn btn-primary">Simpan Data</button>
            </div>
            </form>
            
        </div>
    </div>
</div>
