    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pinjamModal">
        + Pinjam
    </button>
    
    <div>
        <table class="table table-secondary table-striped my-3">
            <thead>
                <tr>
                    <th>ID Peminjaman</th>
                    <th>Buku yang dipinjam</th>
                    <th hidden>id buku</th>
                    <th>Anggota yang Meminjam</th>
                    <th hidden>id anggota</th>
                    <th>Petugas</th>
                    <th>Tanggal Pinjam</th>
                    <th>Deadline</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../db.php';
                $pinjamArr = mysqli_query($conn, "SELECT peminjaman.id, peminjaman.tgl_pinjam, peminjaman.tgl_kembali, 
                                        buku.judul, buku.id AS book, petugas.nama AS kreditor, anggota.nama AS peminjam, anggota.id AS ang
                                        FROM peminjaman
                                        JOIN buku ON buku.id = peminjaman.id_buku
                                        JOIN petugas ON petugas.id = peminjaman.id_petugas
                                        JOIN anggota ON anggota.id = peminjaman.id_anggota
                                        ORDER BY peminjaman.id");
                if(mysqli_num_rows($pinjamArr) > 0)
                    while($dataPinjam = mysqli_fetch_array($pinjamArr))
                    {{
                ?>
                <tr>
                    <td><?php echo $dataPinjam['id']?></td>
                    <td><?php echo $dataPinjam['judul']?></td>
                    <td hidden><?php echo $dataPinjam['book']?></td>
                    <td><?php echo $dataPinjam['peminjam']?></td>
                    <td hidden><?php echo $dataPinjam['ang']?></td>
                    <td><?php echo $dataPinjam['kreditor']?></td>
                    <td><?php echo $dataPinjam['tgl_pinjam']?></td>
                    <td><?php echo $dataPinjam['tgl_kembali']?></td>
                    <td>
                        <button type="button" class="btn btn-danger pinjamDelBtn">Delete</button>
                        <button type="button" class="btn btn-warning pinjamEditBtn">Edit</button>
                    </td>
                </tr>
                <?php }} else {
                ?>
                <td colspan="7">Tidak Ada data</td>
                <?php }?>
            </tbody>
        </table>
    </div>
