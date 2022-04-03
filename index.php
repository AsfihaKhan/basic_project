<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  
    <title>First Php Project</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">RANDOM WEBSITE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/4.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
</div>

  <section class="my-5">
     <div class="py-5">
        <h2 class="text-center">About Us</h2>
     </div>
     <div class="container-fluid">
    <div class="row">
         <div class="col-lg-6 col-md-6 col-12">
             <img src="img/4.jpg" class="img-fluid  aboutimg " >
         </div>
         <div class="col-lg-6 col-md-6 col-12">
           <h2>WE ARE RANDOM WEBSITE.</h2>
           <p class="py-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil tempore non 
               sapiente necessitatibus sint corporis illum perspiciatis reprehenderit odio beatae magnam, 
               molestiae omnis libero ipsa sed animi, provident soluta culpa ea. Doloribus numquam facilis 
               neque, iure officia tempore possimus dolor consectetur voluptatem id. Eos, natus numquam 
               nesciunt est quam vero quisquam quas ducimus qui aliquam optio, deleniti nostrum saepe, 
               odit delectus sequi. Deserunt voluptatem temporibus quisquam neque adipisci alias vel nisi 
               sequi quo aliquam excepturi perferendis amet consequatur veritatis ratione, ullam, ab nostrum 
               nesciunt maiores, vitae incidunt! Nam sit consequatur commodi, illo a pariatur dolorum saepe 
               quaerat! Nihil earum id odit laborum. Voluptatum asperiores esse beatae quam. Consectetur in 
               est quisquam facere id officiis fugiat repudiandae eligendi praesentium, doloribus, inventore 
               vero libero! Nesciunt vitae eum fugit, obcaecati quis voluptate numquam. Lorem, ipsum dolor 
               sit amet consectetur adipisicing elit. Sed quis cupiditate adipisci quasi perferendis numquam 
               minima, facere sequi amet quaerat!</p>
            <a href="about.php" class="btn btn-success"> Check more</a>
         </div>
     </div>
     </div>
    </section>

    <section class="my-5">
     <div class="py-5">
        <h2 class="text-center">Our Services</h2>
     </div>

     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-4 col-md-4 cl-12">
             <div class="card" >
    <img class="card-img-top" src="img/5.jpg" alt="Card image">
             <div class="card-body">
             <h4 class="card-title">Beautiful Nature</h4>
             <p class="card-text">Some example text.</p>
             <a href="#" class="btn btn-primary">See Profile</a>
            </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-4 cl-12">
             <div class="card" >
    <img class="card-img-top" src="img/6.jpg" alt="Card image">
             <div class="card-body">
             <h4 class="card-title">Beautiful Nature</h4>
             <p class="card-text">Some example text.</p>
             <a href="#" class="btn btn-primary">See Profile</a>
            </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-4 cl-12">
             <div class="card" >
    <img class="card-img-top" src="img/7.jpg" alt="Card image">
             <div class="card-body">
             <h4 class="card-title">Beautiful Nature</h4>
             <p class="card-text">Some example text.</p>
             <a href="#" class="btn btn-primary">See Profile</a>
            </div>
            </div>
            </div>

         </div>
     </div>
     </section>

     <section class="my-5">
     <div class="py-5">
        <h2 class="text-center">Gallery</h2>
     </div>

     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-4 col-md-4 col-12">
                <img src="img/8.jpg" class="img-fluid pb-4" >
             </div>
             <div class="col-lg-4 col-md-4 col-12">
                <img src="img/9.jpg" class="img-fluid pb-4" >
             </div>
             <div class="col-lg-4 col-md-4 col-12">
                <img src="img/10.jpg" class="img-fluid pb-4" >
             </div>
             <div class="col-lg-4 col-md-4 col-12">
                <img src="img/11.jpg" class="img-fluid pb-4" >
             </div>
             <div class="col-lg-4 col-md-4 col-12">
                <img src="img/12.jpg" class="img-fluid pb-4" >
             </div>
             <div class="col-lg-4 col-md-4 col-12">
                <img src="img/13.jpg" class="img-fluid pb-4" >
             </div>
         </div>
     </div>
     </section>

     <section class="my-5">
     <div class="py-5">
        <h2 class="text-center">Contact Us</h2>
     </div>

     <div class="w-50 m-auto">
         <form action="userinfo.php" method="post">
             <div class="form-group">
                 <label>Username</label>
                 <input type="text" name="user" autocomplete="off" class="form-control">

                 <div class="form-group">
                 <label>Email Id</label>
                 <input type="text" name="email" autocomplete="off" class="form-control">

                 <div class="form-group">
                 <label>Mobile</label>
                 <input type="text" name="mobile" autocomplete="off" class="form-control">

                 <div class="form-group">
                 <label>Comments</label>
                 <textarea class="form-control" name="comments">
                 </textarea>
             </div>
            
             <button type="submit" class="btn btn-success">Submit</button>
          </form>

         </form>
     </div>
</section>
   

<footer>
<p class="p-3 bg-dark text-white text-center">@RandomWebsite || C All Rights are Reserved</p>
</footer>


  <script src="https://cdn.jsdelivr.net/npm/jquery@4.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 
</body>
</html>