    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bukuModal">
        + Buku
    </button>
    <div>  
    <table class="table table-secondary table-striped my-3">
        <thead>
            <tr>
                <th>Cover</th>
                <th>ID Buku</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>genre</th>
                <th>lokasi</th>
                <th hidden>id lokasi</th>
                <th>last updated by:</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $bukuArr = mysqli_query($conn, "SELECT buku.*, rak.nama_rak AS lokasi, rak.id AS rack,petugas.nama AS petugas
                                            FROM buku
                                            JOIN rak ON rak.id = buku.id_rak
                                            JOIN petugas ON petugas.id = buku.id_petugas
                                            ORDER BY buku.id");
            if(mysqli_num_rows($bukuArr) > 0)
            while($dataBuku = mysqli_fetch_array($bukuArr))
            {{
            ?>
            <tr>
                <td class="sampul"><img src="../sampul/<?php echo $dataBuku['cover']?>" alt="" width="56" height="auto"></td>
                <td><?php echo $dataBuku['id']?></td>
                <td><?php echo $dataBuku['judul']?></td>
                <td><?php echo $dataBuku['penulis']?></td>
                <td><?php echo $dataBuku['penerbit']?></td>
                <td><?php echo $dataBuku['genre']?></td>
                <td><?php echo $dataBuku['lokasi']?></td>
                <td hidden><?php echo $dataBuku['rack']?></td>
                <td><?php echo $dataBuku['petugas']?></td>
                <td>
                    <button type="button" class="btn btn-danger bukuDelBtn">Delete</button>
                    <button type="button" class="btn btn-warning bukuEditBtn">Edit</button>
                </td>
            </tr>
            <?php }} else {?>
                <td colspan="10">Tidak Ada data</td>
            <?php }?>
        </tbody>
    </table>
    </div>

</html>