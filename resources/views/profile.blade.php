<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            background: url('/images/bg.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        .profile-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .profile-card, .desc-card {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
        }
        .profile-img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #007bff;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container profile-container">
        <!-- Card Profil -->
        <div class="profile-card row">
            <!-- Bagian Kiri: Informasi Profil -->
            <div class="col-md-8">
                <h2 class="mb-4">My Profile</h2>
                <table class="table table-bordered">
                    <tr><th>Name</th><td>{{ $profile->name }}</td></tr>
                    <tr><th>NIM</th><td>{{ $profile->nim }}</td></tr>
                    <tr><th>Email</th><td>{{ $profile->email }}</td></tr>
                    <tr><th>Phone</th><td>{{ $profile->phone }}</td></tr>
                    <tr><th>Address</th><td>{{ $profile->address }}</td></tr>
                </table>
            </div>
            <!-- Bagian Kanan: Foto Profil -->
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <img src="{{ asset('images/' . $profile->photo) }}" alt="Profile Picture" class="profile-img">
            </div>
        </div>

        <!-- Card Deskripsi Diri -->
        <div class="desc-card mt-4 text-center">
            <h3>About Me</h3>
            <p>
                Halo! Saya {{ $profile->name }}, Mahasiswa Teknik Informatika Semester 6 di Universitas Adhirajasa Reswara Sanjaya (ARS). 
                Saat ini, saya sedang melaksanakan program internship di PT Higertech Karya Sinergi sebagai bagian dari Development Team.
            </p>
        </div>
    </div>
</body>
</html>
