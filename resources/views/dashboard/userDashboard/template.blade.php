@extends('layouts.userDash')

@section('content')

<body>
      <!-- Bagian navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Bagian konten dashboard -->
    <div class="container-fluid">
        <!-- Tambahkan konten sesuai dengan kebutuhan dashboard Anda -->
        <div class="row">
            <div class="col-md-3 sidebar">
                <!-- Sidebar -->
                <ul class="list-unstyled">
                    <li><a href="#">Menu 1</a></li>
                    <li><a href="#">Menu 2</a></li>
                    <li><a href="#">Menu 3</a></li>
                </ul>
            </div>
            <div class="col-md-9">
                <!-- Konten utama -->
                <h1>Welcome to Your Dashboard</h1>
                <!-- Tambahkan konten lainnya di sini -->
            </div>
        </div>
    </div>

</body>
@endsection