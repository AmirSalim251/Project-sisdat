// Edit Anggota
$(document).ready(function() {
    $('.angEditBtn').on('click', function() {
        $('#angEditModal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);
        
        $('#update_id_ang').val(data[0]);
        $('#Nama').val(data[1]);
        $('#noTelp').val(data[2]);
    });
});

// Edit Pinjam
$(document).ready(function() {
    $('.pinjamEditBtn').on('click', function() {
        $('#pinjamEditModal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);

        $('#update_id_pinjam').val(data[0]);
        $('#anggota').val(data[4]);
        $('#buku').val(data[2]);
    });
});

// Edit Buku
$(document).ready(function() {
    $('.bukuEditBtn').on('click', function() {
        $('#bukuEditModal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);

        $('#update_id_buku').val(data[1]);
        $('#Judul').val(data[2]);
        $('#Penulis').val(data[3]);
        $('#Penerbit').val(data[4]);
        $('#Genre').val(data[5]);
        $('#Lokasi').val(data[7]);

    });
});