$(".delete-data").on("click", function (e) {
  e.preventDefault();
  var getLink = $(this).attr("href");

  Swal.fire({
    title: "Hapus Data?",
    text: "Data akan dihapus permanen",
    icon: "warning",
    customClass: "swal-wide",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Hapus",
    cancelButtonText: "Batal",
    width: "400px",
  }).then((result) => {
    if (result.value) {
      window.location.href = getLink;
    }
  });
  const notifikasi = $(".info-data").data("infodata");

  if (notifikasi == "Disimpan" || notifikasi == "Dihapus") {
    Swal.fire({
      icon: "success",
      title: "Sukses",
      text: "Data Berhasil " + notifikasi,
    });
  } else if (notifikasi == "Gagal Disimpan" || notifikasi == "Gagal Dihapus") {
    Swal.fire({
      icon: "error",
      title: "GAGAL",
      text: "Data " + notifikasi,
    });
  } else if (notifikasi == "Kosong") {
  }
});
