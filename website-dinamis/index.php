<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rasya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
</head>
<body>

<header class="bg-primary text-white text-center py-3">
    <h1>SELAMAT DATANG</h1>
</header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Menu</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#" onclick="showContent('home')">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#" onclick="showContent('about')">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#" onclick="showContent('contact')">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="#" onclick="showContent('products')">Product List</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container my-5">
    <div id="home" class="content">
        <h2>Selamat datang</h2>
        <p>Halo, saya Rasya Fakhri Akbar, seorang mahasiswa di Universitas Pelita Bangsa dan pengembang UI/UX yang berdedikasi untuk menciptakan antarmuka pengguna yang intuitif dan pengalaman yang menarik.</p>
    </div>
    
    <div id="about" class="content" style="display: none;">
        <h2>Tentang Saya</h2>
        <p>Halo! Nama saya Rasya Fakhri Akbar. Saya seorang mahasiswa di Universitas Pelita Bangsa yang saat ini sedang menempuh pendidikan di bidang [jurusan Anda]. Selain itu, saya adalah seorang pengembang UI/UX yang antusias dalam menciptakan pengalaman pengguna digital yang optimal, menarik, dan intuitif. Dalam setiap proyek yang saya kerjakan, saya selalu berusaha untuk menggabungkan kreativitas, pemahaman teknis, dan wawasan tentang perilaku pengguna untuk menghasilkan antarmuka yang mudah diakses dan efektif.

Perjalanan saya dalam dunia UI/UX dimulai sejak saya menyadari betapa pentingnya peran desain dalam meningkatkan pengalaman pengguna. Seiring dengan perkembangan teknologi, semakin jelas bahwa UI/UX bukan hanya tentang estetika, tetapi juga tentang bagaimana sebuah desain dapat menyelesaikan masalah dan mempermudah hidup penggunanya. Saya selalu tertarik pada bagaimana setiap elemen desain, seperti warna, tata letak, dan tipografi, dapat memengaruhi emosi dan perilaku seseorang. Itulah yang mendorong saya untuk mendalami bidang ini dan terus belajar agar dapat memberikan yang terbaik dalam setiap karya.

Di Universitas Pelita Bangsa, saya berkesempatan untuk mempelajari dasar-dasar dan konsep-konsep utama dari UI/UX, baik dari segi teoritis maupun praktis. Selain dari perkuliahan, saya juga aktif mengasah kemampuan saya melalui berbagai proyek pribadi dan kolaboratif. Saya percaya bahwa pengalaman nyata adalah kunci untuk memahami kebutuhan pengguna dengan lebih baik dan menghadirkan solusi yang relevan. Setiap proyek yang saya kerjakan memberikan wawasan baru dan tantangan yang memperkaya pemahaman saya tentang pengguna dan kebutuhan mereka.

Sebagai seorang pengembang UI/UX, fokus utama saya adalah menciptakan solusi digital yang user-friendly dan inovatif. Saya selalu memulai dengan memahami kebutuhan dan masalah yang dihadapi pengguna. Melalui pendekatan ini, saya dapat merancang antarmuka yang tidak hanya menarik secara visual tetapi juga efektif dalam mencapai tujuan yang diinginkan. Dari proses penelitian hingga pembuatan wireframe, prototipe, dan pengujian, saya selalu memastikan bahwa pengguna berada di pusat dari setiap keputusan desain yang saya buat.

Selain itu, saya juga terbiasa menggunakan berbagai tools desain seperti Figma, Adobe XD, Sketch, dan beberapa tools kolaborasi lainnya. Kemampuan ini membantu saya untuk mewujudkan ide-ide desain dengan lebih efektif dan efisien. Saya selalu berusaha untuk memperbarui keterampilan dan pengetahuan saya di dunia UI/UX yang terus berkembang agar bisa memberikan nilai lebih pada setiap proyek yang saya kerjakan.

Tujuan jangka panjang saya adalah menjadi seorang profesional UI/UX yang mampu membuat dampak nyata dalam dunia digital. Saya ingin membantu menciptakan pengalaman digital yang lebih baik dan lebih inklusif untuk semua pengguna. Melalui kombinasi keahlian teknis, pemahaman psikologi pengguna, dan semangat untuk belajar, saya berkomitmen untuk memberikan solusi UI/UX yang unggul.

Saya percaya bahwa perjalanan ini adalah proses yang terus berkelanjutan. Setiap tantangan adalah kesempatan untuk belajar dan berkembang lebih jauh. Jika Anda tertarik untuk berkolaborasi atau berdiskusi lebih lanjut, saya dengan senang hati terbuka untuk berhubungan dan berbagi pemikiran.</p>
    </div>
    
    <div id="contact" class="content" style="display: none;">
        <h2>Kontak</h2>
        <p>Wa: 089688263805 <p>
          Email: rasyafakhriakbar@gmail.com <p>
          Instagram: bobsthevillain <p>
        </p>
    </div>
    
    <div id="products" class="content" style="display: none;">
        <h2>Product List</h2>
        <button class="btn btn-success my-2" onclick="addProduct()">Add Product</button>
        <table id="productTable" class="display">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
</div>

<footer class="bg-primary text-white text-center py-3">
    <p>&copy; 2024 Rasya</p>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>
