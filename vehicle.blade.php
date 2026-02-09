<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Adward - Daftar Prestasi</title>

  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
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

  <section class="about_section layout_padding">
    <div class="container">
      <h2 class="main-heading">Daftar Prestasi Siswa</h2>
      <p class="text-center">Berikut adalah pencapaian luar biasa yang berhasil diraih oleh siswa-siswi kami.</p>
      
      <div class="row mt-5">
        <div class="col-md-10 mx-auto">
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead class="thead-dark">
                <tr class="text-center">
                  <th>No</th>
                  <th>Nama Siswa</th>
                  <th>Jenis Lomba</th>
                  <th>Peringkat</th>
                  <th>Tahun</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">1</td>
                  <td>Abdusi Salam</td>
                  <td>IoT Nasional</td>
                  <td class="text-center">1</td>
                  <td class="text-center">2025</td>
                </tr>
                <tr>
                  <td class="text-center">2</td>
                  <td>Bryan Jeremi Byakta Sinaga</td>
                  <td>Gemastik</td>
                  <td class="text-center">1</td>
                  <td class="text-center">2025</td>
                </tr>
                <tr>
                  <td class="text-center">3</td>
                  <td>Selvi Nur Fitri</td>
                  <td>Lidm</td>
                  <td class="text-center">1</td>
                  <td class="text-center">2025</td>
                </tr>
                <tr>
                  <td class="text-center">4</td>
                  <td>Ganendra Justine Fawwaz Ramadhani Putra Hariyanto</td>
                  <td>Robotika</td>
                  <td class="text-center">1</td>
                  <td class="text-center">2024</td>
                </tr>
                <tr>
                  <td class="text-center">5</td>
                  <td>Nia Santika Putri</td>
                  <td>Kmipn</td>
                  <td class="text-center">1</td>
                  <td class="text-center">2026</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container-fluid footer_section">
    <p>Copyright &copy; {{ date('Y') }} All Rights Reserved By Adward School</p>
  </section>

  <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>