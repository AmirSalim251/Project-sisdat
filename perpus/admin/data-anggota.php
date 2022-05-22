    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#angModal">
        Daftar Anggota
    </button>

    <div>
        <table class="table table-secondary table-striped my-3">
            <thead>
                <tr>
                    <th>ID Anggota</th>
                    <th>Nama</th>
                    <th>No. Telepon</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include '../db.php';
                $angArr = mysqli_query($conn, "SELECT * from anggota ORDER BY id");
                if(mysqli_num_rows($angArr) > 0)
                while($dataAnggota = mysqli_fetch_array($angArr))
                {{
                ?>
                <tr>
                    <td><?php echo $dataAnggota['id']?></td>
                    <td><?php echo $dataAnggota['nama']?></td>
                    <td><?php echo $dataAnggota['no_telpon']?></td>
                    <td>
                        <button type="button" class="btn btn-danger angDelBtn">Delete</button>
                        <button type="button" class="btn btn-warning angEditBtn">Edit</button>
                    </td>
                </tr>
                <?php }} else {?>
                    <td colspan="10">Tidak Ada data</td>
                <?php }?>
            </tbody>
        </table>
    </div>
</html>