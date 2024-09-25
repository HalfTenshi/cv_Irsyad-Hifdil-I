<?php
    include "database.php";

    if(isset($_POST["submit"])){
        $email=$_POST["email"];
        $message=$_POST["message"];
        

        $sql ="INSERT INTO dataa(email, pesan) VALUES ('$email','$message')";

    if ($conn->query($sql) === TRUE) {
        // Redirect kembali ke form dengan notifikasi berhasil
        header("Location: index.php?status=success");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV-ku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body id="Home">
  <div id="notification" style="display: none;" class="alert alert-success">
    pesan berhasil diisi! terima kasih telah menghubungi.
</div>
<!-- Navigasi -->
<div class="">
  <nav class="navbar navbar-expand-lg bg-body-light shadow-sm fixed-top" >
    <div class="container">
      <a class="navbar-brand text-light" href="#" ><h3>Curriculum Vitae</h3></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="#Home"><h6>Home</h6></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#About"><h6>About</h6></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#Project"><h6>Project</h6></a>
          </li>
          <li class="nav-item"></li>
            <a class="nav-link text-light" href="#Contact"><h6>Contact</h6></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<!-- Akhir dari Navigasi -->
<!-- Header -->
<section class="jumbotron text-center">
  <img src="img/profil.jpeg" alt="Irsyad Hifdil I'anna By Haqi" width="200" class="rounded-3">
  <h1 class="display-4 text-light">Irsyad Hifdil I'anna By Haqi</h1>
  <p class="lead text-light">Graphic designer | Frontend developer</p>
</section>
<!-- Akhir Header -->
 <!-- About -->
<section id="About">
  <div class="container">
    <div class="row text-center">
      <h2 class="text-light" style="padding-bottom:20px;">About Me</h2>
    </div>
    <div class="row justify-content-center text-light">
      <div class="col-12">
        <p class="ppp">Saya adalah seorang mahasiswa yang sedang belajar dalam bidang desain grafis dan frontend developing, dengan keterampilan yang kuat dalam desain dan analisis UI/UX Saya memiliki kemampuan untuk bekerja secara mandiri maupun dalam tim, serta beradaptasi dengan cepat terhadap perubahan. Dengan semangat belajar yang tinggi dan keinginan untuk terus berkembang, saya selalu berupaya memberikan kontribusi yang terbaik dalam setiap tugas dan tanggung jawab yang saya emban.</p>
      </div>
      <!-- <div class="col-4">
        <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem adipisci eos in modi voluptatibus porro animi cupiditate. Harum corrupti odio, voluptate quam obcaecati at assumenda.</p> -->
      </div> -->
    </div>
  </div>
</section>
 <!-- Akhri dari About -->

 <!-- Project -->
 <section id="Project">
  <div class="container">
    <div class="row text-center text-light">
      <div class="col">
        <h2 style="padding-bottom:20px;">My projects</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-4">
        <div class="card">
          <img src="img/pro3.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Sebuah contact form sederhana dimana pengguna dapat mengisikan namanya,email dan pesan</p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img src="img/Frame 4.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">UI/UX dari sebuah aplikasi yang digunakan untuk management parkir </p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img src="img/image.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Desain remake untuk website Provinsi JAwa Timur</p>
          </div>
        </div>
      </div>
    </div>
  </div>
 </section>
 <!-- Akhir dari Project -->

 <!-- Contact -->
<Section id="Contact">
  <div class="container">
    <div class="row text-center">
      <div class="col">
        <h2 style="color:rgb(255, 255, 255)">Contact Me</h2>
      </div>
    </div>
    <div class="row text-light justify-content-center">
      <div class="col-md-8">
        <form action="index.php" method="POST" onsubmit="return showNotification()">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"> 
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
            <textarea class="form-control" id="Pesan" rows="3" name="message"></textarea>
          </div>
          <button type="submit" class="btn btn-danger" name="submit">Submit</button>
        </form>
        <script src="script.js"></script>
      </div>
    </div>
  </div>
</Section>
 <!-- Akhir Contact -->
  <!-- Footer -->
   <footer class="text-center">
    <p>Created by <a href ="https://www.instagram.com/whiteee.u/#" class="text-black fw-bold">@ Irsyad Hifdil I</a></p>
   </footer>
   <!-- Akhir dari footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>