<?php
    require 'functions.php';
    $User = mysqli_fetch_assoc($a);
    $about = mysqli_fetch_assoc($b);
    
    $projects = data("SELECT * FROM project");
    
    if(isset($_POST["submit"])){
        
        if(tambah($_POST) > 0){
            echo "
            <script>
            alert('Data berhasil dikirim');
            </script>
            ";
        }
        else {
            echo "
            <script>
            alert('Data gagal terkirim');
            </script>
            "; 
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio</title>
    <!-- CSS Bootsrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- bootstrap icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body id="home">
    <!--- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">AmelDL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#About">About</a>
            </li>
                <li class="nav-item">
                  <a class="nav-link" href="#projects">Project</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact</a></li>
              </ul>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
    <!--jumbotron-->
    <div class="jumbotron text-center">
      <img src="img/<?=$User["foto"];?>".
          alt="" width="250" height="250"
          class="rounded-circle img
          -thumbnail"./>
      <h1 class="display-4"
          ><?=$User["nama"];?></h1>
      <p class="lead"><?=$User["jabatan"]
          ;?> | <?=$User["perusahaan"]
          ;?></p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,128L30,149.3C60,171,120,213,180,197.3C240,181,300,107,360,96C420,85,480,139,540,144C600,149,660,107,720,90.7C780,75,840,85,900,117.3C960,149,1020,203,1080,224C1140,245,1200,235,1260,218.7C1320,203,1380,181,1410,170.7L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
  </div>
    <!-- akhir jumbotron -->
    <!-- About -->
    <section id="About">
      <div class="row text-center mb-3">
        <div class="col">
        <h2>About Me</h2>
        </div>
      </div>
      <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4">
            <p><?=$about["colom1"];?></p>
          </div>
          <div class="col-md-4">
            <p><?=$about["colom2"];?></p>
          </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,128L30,149.3C60,171,120,213,180,197.3C240,181,300,107,360,96C420,85,480,139,540,144C600,149,660,107,720,90.7C780,75,840,85,900,117.3C960,149,1020,203,1080,224C1140,245,1200,235,1260,218.7C1320,203,1380,181,1410,170.7L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir About -->
    <!-- projects -->
         <section id="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2> My projects </h2>
           </div>
          </div>
        </div>
        <div class="row justify-content-center">
    
         
         <?php foreach( $projects as $pro){ ?>
         
         
         <div class="col-md-4 mb-3">
          <div class="card">
          <img src="img/<?=$pro["foto"];?>" class="card-img-top" alt="project1">
          <div class="card-body">
            <h2 class="display-6"><?=$pro["nama_p"];?></h2>
            <p class="card-text"><?=$pro["ket"];?></p>
           </div>
           </div>
          </div>
        <?php }?>
        </did>
        </section>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,128L40,128C80,128,160,128,240,138.7C320,149,400,171,480,170.7C560,171,640,149,720,144C800,139,880,149,960,176C1040,203,1120,245,1200,218.7C1280,192,1360,96,1400,48L1440,0L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
     <!-- akhir projects -->
     <!-- contact-->
     <section id="contact">
       <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h2>Contact Me</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            <div id="col-md-6">
           <form action="" method="POST">
           <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
           <input type="email"  name="email" class="form-control" id="email" aria-describedby="emailHelp" required/>
           <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
           </div>
           <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
           <input type="text" class="form-control" name="nama_k" id="nama" required/>
           </div>
         <div class="mb-3">
           <label for="pesan">Pesan</label>
          <textarea class="form-control" placeholder="Leave a commeny here" name="pesan" id="pesan" style="height:100px" required></textarea>
         </div>
         <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
          </form>
         </div>
        </div>
       </div>
      </div>
     </section>
      <footer class="bg-success text-white text-center pb-4">
        <p>Create With <i class="bi bi-heart-fill text-danger"></i> By <a href="https://www.instagram.com/rstna26" class="text-white fw-bold">AmelDL024</a></p>
      </footer>
     <!-- akhir footer -->
    <!-- JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>