<!-- Modal Edit Anggota -->
<div class="modal fade" id="angDelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mengedit Data anggota </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="delete/delAng.php" method="POST">
                <div class="modal-body">
                    
                    <input type="hidden" name="delete_id_ang" id="delete_id_ang">
                    <h4>Apakah anda ingin menghapus data ini?</h4>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" name="delAng" class="btn btn-primary">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit Pinjam -->
<div class="modal fade" id="pinjamDelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mengedit Data Peminjaman</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="delete/delPinjam.php" method="POST">
                <div class="modal-body">

                    <input type="hidden" name="delete_id_pinjam" id="delete_id_pinjam">
                    <h4>Apakah anda ingin menghapus data ini?</h4>
                    

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" name="delPinjam" class="btn btn-primary">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div> 

<!-- Modal Edit Buku -->
<div class="modal fade" id="bukuDelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Mengedit Data Buku</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="delete/delBuku.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">

                <input type="hidden" name="delete_id_buku" id="delete_id_buku">
                <input type="hidden" name="del_jumlah_buku" id="del_jumlah_buku">
                <h4>Apakah anda ingin menghapus data ini?</h4>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" name="delBuku" class="btn btn-primary">Hapus</button>
            </div>
            </form>
        </div>
    </div>
</div> 
