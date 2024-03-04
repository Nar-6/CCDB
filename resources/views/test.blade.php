<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carousel Example</title>
  <!-- Inclure Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Inclure Bootstrap JS et jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    /* Style facultatif pour personnaliser l'apparence du carrousel */
    .carousel-item img {
      width: 100%;
      height: 400px; /* Ajustez la hauteur selon vos besoins */
      object-fit: cover; /* Pour couvrir toute la zone */
    }
  </style>
</head>
<body>
    <div class="container">
      <div class="membres">

        <div class="membre">
          <div class="photo-membre-container">
            <div class="photo-membre">
              <img src="{{ asset('images/img2.jpg')}}" alt="">
            </div>
          </div>
          <div class="nom-membre">
            <h4>KOUNASSO Thibaut</h4>
          </div>
          <div class="role-membre">
            <h3>Développeur</h3>
          </div>
        </div>

      </div>
    </div>
</body>

<style>
  .membres {
    width: 80%;
    height: fit-content;
    margin-left: auto;
    margin-right: auto;
  }
  .membre {
    width: 80%;
    height: fit-content;
    margin-left: auto;
    margin-right: auto;
  }

  .photo-membre{
    height: 150px;
    width: 150px;
    border-radius: 5px;
  }
  .photo-membre img{
    height: 100%;
    width: 100%;
    border-radius: 5px;
    object-fit: cover;
    object-position: center;
  }
  .photo-membre-container{
    display: flex;
    justify-content: center;
  }
  .nom-membre, .role-membre {
    display: flex;
    justify-content: center;
  }
  .role-membre h3 {
    margin-top: 0;
    color: #50876c;
    text-align: center;
  }
  .nom-membre h4 {
    margin-top: 30px;
    text-align: center;
  }
</style>
</html>
