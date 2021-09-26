// berikut ini kita menggunakan jquery
$(function () { //ini versi shorthandnya method ready

  $('.tombolTambahData').on('click', function () {

    $('#tambahDataLabel').html('Tambah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Tambah Data');

    $('#nama').val('');
    $('#email').val('');
    $('#jurusan').val('');
  });
  $('.tampilModalUbah').on('click', function () {

    $('#tambahDataLabel').html('Ubah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah')

    const id = $(this).data('id');

    $.ajax({
      url: 'http://localhost/phpmvc/public/mahasiswa/getUbah',
      data: { id: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#nama').val(data.nama);
        $('#email').val(data.email);
        $('#jurusan').val(data.jurusan);
        $('#id').val(data.id);
      }
    })
  });
});