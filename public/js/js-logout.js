$(".log-out").on("click", function (e) {
  e.preventDefault();
  var getLink = $(this).attr("href");

  Swal.fire({
    title: "Keluar?",
    text: "Tekan keluar jika anda ingin keluar dari sistem",
    icon: "question",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Keluar",
    cancelButtonText: "Batal",
    width: "400px",
  }).then((result) => {
    if (result.value) {
      window.location.href = getLink;
    }
  });
});
