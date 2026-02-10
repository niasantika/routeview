<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Adward - Daftar Prestasi</title>

  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
  
  <style>
    .btn-action {
      margin: 0 2px;
    }
    .alert {
      position: fixed;
      top: 20px;
      right: 20px;
      z-index: 9999;
      min-width: 300px;
      animation: slideIn 0.3s ease-out;
    }
    @keyframes slideIn {
      from {
        transform: translateX(400px);
        opacity: 0;
      }
      to {
        transform: translateX(0);
        opacity: 1;
      }
    }
    .modal-header {
      background-color: #007bff;
      color: white;
    }
    .table td {
      vertical-align: middle;
    }
  </style>
</head>

<body>
  <div class="top_container sub_pages">
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="">
            <span>Adward</span>
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                <li class="nav-item active"><a class="nav-link" href="{{ url('/prestasi') }}">Prestasi</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
  </div>

  <!-- Notification Area -->
  <div id="notificationArea"></div>

  <section class="about_section layout_padding">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
          <h2 class="main-heading mb-0">Daftar Prestasi Siswa</h2>
          <p class="mb-0">Berikut adalah pencapaian luar biasa yang berhasil diraih oleh siswa-siswi kami.</p>
        </div>
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
          <i class="fas fa-plus"></i> Tambah Prestasi
        </button>
      </div>
      
      <div class="row mt-4">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead class="thead-dark">
                <tr class="text-center">
                  <th style="width: 5%">No</th>
                  <th style="width: 25%">Nama Siswa</th>
                  <th style="width: 20%">Jenis Lomba</th>
                  <th style="width: 10%">Peringkat</th>
                  <th style="width: 10%">Tahun</th>
                  <th style="width: 15%">Aksi</th>
                </tr>
              </thead>
              <tbody id="tableBody">
                <tr>
                  <td class="text-center">1</td>
                  <td>Abdusi Salam</td>
                  <td>IoT Nasional</td>
                  <td class="text-center">1</td>
                  <td class="text-center">2025</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-warning btn-action" onclick="editData(1, 'Abdusi Salam', 'IoT Nasional', 1, 2025)">
                      <i class="fas fa-edit"></i> Edit
                    </button>
                    <button class="btn btn-sm btn-danger btn-action" onclick="confirmDelete(1, 'Abdusi Salam')">
                      <i class="fas fa-trash"></i> Hapus
                    </button>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">2</td>
                  <td>Bryan Jeremi Byakta Sinaga</td>
                  <td>Gemastik</td>
                  <td class="text-center">1</td>
                  <td class="text-center">2025</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-warning btn-action" onclick="editData(2, 'Bryan Jeremi Byakta Sinaga', 'Gemastik', 1, 2025)">
                      <i class="fas fa-edit"></i> Edit
                    </button>
                    <button class="btn btn-sm btn-danger btn-action" onclick="confirmDelete(2, 'Bryan Jeremi Byakta Sinaga')">
                      <i class="fas fa-trash"></i> Hapus
                    </button>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">3</td>
                  <td>Selvi Nur Fitri</td>
                  <td>Lidm</td>
                  <td class="text-center">1</td>
                  <td class="text-center">2025</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-warning btn-action" onclick="editData(3, 'Selvi Nur Fitri', 'Lidm', 1, 2025)">
                      <i class="fas fa-edit"></i> Edit
                    </button>
                    <button class="btn btn-sm btn-danger btn-action" onclick="confirmDelete(3, 'Selvi Nur Fitri')">
                      <i class="fas fa-trash"></i> Hapus
                    </button>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">4</td>
                  <td>Ganendra Justine Fawwaz Ramadhani Putra Hariyanto</td>
                  <td>Robotika</td>
                  <td class="text-center">1</td>
                  <td class="text-center">2024</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-warning btn-action" onclick="editData(4, 'Ganendra Justine Fawwaz Ramadhani Putra Hariyanto', 'Robotika', 1, 2024)">
                      <i class="fas fa-edit"></i> Edit
                    </button>
                    <button class="btn btn-sm btn-danger btn-action" onclick="confirmDelete(4, 'Ganendra Justine Fawwaz Ramadhani Putra Hariyanto')">
                      <i class="fas fa-trash"></i> Hapus
                    </button>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">5</td>
                  <td>Nia Santika Putri</td>
                  <td>Kmipn</td>
                  <td class="text-center">1</td>
                  <td class="text-center">2026</td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-warning btn-action" onclick="editData(5, 'Nia Santika Putri', 'Kmipn', 1, 2026)">
                      <i class="fas fa-edit"></i> Edit
                    </button>
                    <button class="btn btn-sm btn-danger btn-action" onclick="confirmDelete(5, 'Nia Santika Putri')">
                      <i class="fas fa-trash"></i> Hapus
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal Tambah -->
  <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><i class="fas fa-plus-circle"></i> Tambah Prestasi Baru</h5>
          <button type="button" class="close text-white" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <form id="formTambah">
          <div class="modal-body">
            <div class="form-group">
              <label>Nama Siswa <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="nama_tambah" required>
            </div>
            <div class="form-group">
              <label>Jenis Lomba <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="lomba_tambah" required>
            </div>
            <div class="form-group">
              <label>Peringkat <span class="text-danger">*</span></label>
              <input type="number" class="form-control" id="peringkat_tambah" min="1" required>
            </div>
            <div class="form-group">
              <label>Tahun <span class="text-danger">*</span></label>
              <input type="number" class="form-control" id="tahun_tambah" min="2000" max="2050" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
              <i class="fas fa-times"></i> Batal
            </button>
            <button type="submit" class="btn btn-primary">
              <i class="fas fa-save"></i> Simpan
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal Edit -->
  <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><i class="fas fa-edit"></i> Edit Prestasi</h5>
          <button type="button" class="close text-white" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <form id="formEdit">
          <input type="hidden" id="edit_id">
          <div class="modal-body">
            <div class="form-group">
              <label>Nama Siswa <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="nama_edit" required>
            </div>
            <div class="form-group">
              <label>Jenis Lomba <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="lomba_edit" required>
            </div>
            <div class="form-group">
              <label>Peringkat <span class="text-danger">*</span></label>
              <input type="number" class="form-control" id="peringkat_edit" min="1" required>
            </div>
            <div class="form-group">
              <label>Tahun <span class="text-danger">*</span></label>
              <input type="number" class="form-control" id="tahun_edit" min="2000" max="2050" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
              <i class="fas fa-times"></i> Batal
            </button>
            <button type="submit" class="btn btn-warning">
              <i class="fas fa-save"></i> Update
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal Konfirmasi Hapus -->
  <div class="modal fade" id="modalHapus" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h5 class="modal-title text-white"><i class="fas fa-exclamation-triangle"></i> Konfirmasi Hapus</h5>
          <button type="button" class="close text-white" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Apakah Anda yakin ingin menghapus prestasi dari:</p>
          <h6 id="nama_hapus" class="text-center font-weight-bold"></h6>
          <input type="hidden" id="hapus_id">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            <i class="fas fa-times"></i> Batal
          </button>
          <button type="button" class="btn btn-danger" onclick="deleteData()">
            <i class="fas fa-trash"></i> Ya, Hapus
          </button>
        </div>
      </div>
    </div>
  </div>

  <section class="container-fluid footer_section">
    <p>Copyright &copy; {{ date('Y') }} All Rights Reserved By Adward School</p>
  </section>

  <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
  
  <script>
    // Fungsi untuk menampilkan notifikasi
    function showNotification(message, type) {
      const alertDiv = document.createElement('div');
      alertDiv.className = `alert alert-${type} alert-dismissible fade show`;
      alertDiv.innerHTML = `
        <strong>${type === 'success' ? '<i class="fas fa-check-circle"></i> Berhasil!' : '<i class="fas fa-exclamation-circle"></i> Perhatian!'}</strong> ${message}
        <button type="button" class="close" data-dismiss="alert">&times;</button>
      `;
      
      document.getElementById('notificationArea').appendChild(alertDiv);
      
      // Auto close after 3 seconds
      setTimeout(() => {
        $(alertDiv).alert('close');
      }, 3000);
    }

    // Form Tambah
    document.getElementById('formTambah').addEventListener('submit', function(e) {
      e.preventDefault();
      
      const nama = document.getElementById('nama_tambah').value;
      const lomba = document.getElementById('lomba_tambah').value;
      const peringkat = document.getElementById('peringkat_tambah').value;
      const tahun = document.getElementById('tahun_tambah').value;
      
      // Di sini Anda bisa mengirim data ke server menggunakan AJAX
      // Untuk demo, kita hanya tampilkan notifikasi
      
      $('#modalTambah').modal('hide');
      showNotification(`Prestasi ${nama} berhasil ditambahkan!`, 'success');
      
      // Reset form
      this.reset();
    });

    // Fungsi Edit Data
    function editData(id, nama, lomba, peringkat, tahun) {
      document.getElementById('edit_id').value = id;
      document.getElementById('nama_edit').value = nama;
      document.getElementById('lomba_edit').value = lomba;
      document.getElementById('peringkat_edit').value = peringkat;
      document.getElementById('tahun_edit').value = tahun;
      
      $('#modalEdit').modal('show');
    }

    // Form Edit
    document.getElementById('formEdit').addEventListener('submit', function(e) {
      e.preventDefault();
      
      const id = document.getElementById('edit_id').value;
      const nama = document.getElementById('nama_edit').value;
      
      // Di sini Anda bisa mengirim data ke server menggunakan AJAX
      
      $('#modalEdit').modal('hide');
      showNotification(`Prestasi ${nama} berhasil diupdate!`, 'success');
    });

    // Fungsi Konfirmasi Hapus
    function confirmDelete(id, nama) {
      document.getElementById('hapus_id').value = id;
      document.getElementById('nama_hapus').textContent = nama;
      $('#modalHapus').modal('show');
    }

    // Fungsi Hapus Data
    function deleteData() {
      const id = document.getElementById('hapus_id').value;
      const nama = document.getElementById('nama_hapus').textContent;
      
      // Di sini Anda bisa mengirim request hapus ke server menggunakan AJAX
      
      $('#modalHapus').modal('hide');
      showNotification(`Prestasi ${nama} berhasil dihapus!`, 'success');
    }
  </script>
</body>
</html>