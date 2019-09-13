$(function() {
	$(".tombolTambahGuru").on("click", function() {
		$("#judul").html("Tambah Data Guru");
		$(".modal-footer button[type=submit]").html("Simpan");
		$("#nama").val("");
		$("#nip").val("");
		$("#nama").val("");
		$("#id").val("");
	});

	$(".formUbahGuru").on("click", function() {
		$("#judul").html("Ubah Data Guru");
		$(".modal-footer button[type=submit]").html("Simpan");
		$(".modal-body form").attr(
			"action",
			"http://localhost/ci-test-case/c_guru/ubah"
		);

		const id = $(this).data("id");

		$.ajax({
			url: "http://localhost/ci-test-case/c_guru/getUbah",
			data: { nip: id },
			method: "post",
			dataType: "json",
			success: function(data) {
				$("#nip").val(data.NIP);
				$("#nama").val(data.nama_guru);
				$("#id").val(data.id);
			}
		});
	});

	$(".tombolTambahSiswa").on("click", function() {
		$("#judul").html("Tambah Data Siswa");
		$(".modal-footer button[type=submit]").html("Simpan");
		$("#nis").val("");
		$("#nama").val("");
		$("#kelas").val("");
		$("#id").val("");
	});

	$(".formUbahSiswa").on("click", function() {
		$("#judul").html("Ubah Data Siswa");
		$(".modal-footer button[type=submit]").html("Simpan");
		$(".modal-body form").attr(
			"action",
			"http://localhost/ci-test-case/c_siswa/ubah"
		);

		const id = $(this).data("id");

		$.ajax({
			url: "http://localhost/ci-test-case/c_siswa/getUbah",
			data: { nis: id },
			method: "post",
			dataType: "json",
			success: function(data) {
				$("#nis").val(data.NIS);
				$("#nama").val(data.nama_siswa);
				$("#kelas").val(data.id_kelas);
				$("#id").val(data.id);
			}
		});
	});

	$(".tombolTambahKelas").on("click", function() {
		$("#judul").html("Tambah Data Kelas");
		$(".modal-footer button[type=submit]").html("Simpan");
		$("#nama").val("");
		$("#nip").val("");
		$("#id").val("");
	});

	$(".formUbahKelas").on("click", function() {
		$("#judul").html("Ubah Data Siswa");
		$(".modal-footer button[type=submit]").html("Simpan");
		$(".modal-body form").attr(
			"action",
			"http://localhost/ci-test-case/c_kelas/ubah"
		);

		const id = $(this).data("id");

		$.ajax({
			url: "http://localhost/ci-test-case/c_kelas/getUbah",
			data: { id: id },
			method: "post",
			dataType: "json",
			success: function(data) {
				$("#nama").val(data.nama_kelas);
				$("#nip").val(data.NIP);
				$("#id").val(data.id);
			}
		});
	});

	$(".formDetailGuru").on("click", function() {
		$("#judul").html("Identitas Guru");
		$(".modal-footer button[type=submit]").html("Simpan");
		$(".modal-body form").attr(
			"action",
			"http://localhost/ci-test-case/c_guru/ubah"
		);

		const id = $(this).data("id");

		$.ajax({
			url: "http://localhost/ci-test-case/c_guru/getUbah",
			data: { nip: id },
			method: "post",
			dataType: "json",
			success: function(data) {
				$("#nip").val(data.NIP);
				$("#nama").val(data.nama_guru);
				$("#id").val(data.id);
			}
		});
	});

	$(".formDetailSiswa").on("click", function() {
		$("#judul").html("Informasi Mengajar");
		$(".modal-footer button[type=submit]").html("Simpan");
		$(".modal-body form").attr(
			"action",
			"http://localhost/ci-test-case/c_siswa/ubah"
		);

		const id = $(this).data("id");

		$.ajax({
			type: "ajax",
			url: "http://localhost/ci-test-case/c_siswa/getDataSiswa",
			async: false,
			// data: { nip: id },
			dataType: "json",
			success: function(data) {
				var html = "";
				var i;
				for (i = 0; i < data.length; i++) {
					html += "<tr>" + "<td>" + data[i].nama_siswa + "</td>" + "</tr>";
				}
				$("#show_data").html(html);
			}
		});
	});
});
