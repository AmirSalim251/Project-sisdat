// Delete Anggota
$(document).ready(function() {
    $('.angDelBtn').on('click', function() {
        $('#angDelModal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);
        
        $('#delete_id_ang').val(data[0]);
    });
});

// Delete Pinjam
$(document).ready(function() {
    $('.pinjamDelBtn').on('click', function() {
        $('#pinjamDelModal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);

        $('#delete_id_pinjam').val(data[0]);
    });
});

// Delete Buku
$(document).ready(function() {
    $('.bukuDelBtn').on('click', function() {
        $('#bukuDelModal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);

        $('#delete_id_buku').val(data[1]);
        $('#del_jumlah_buku').val(data[7]);
    });
});