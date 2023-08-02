<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gudang</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <style>
    .background-image {
      background-image: url('https://images.unsplash.com/photo-1530878902700-5ad4f9e4c318?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1034&q=80');
      background-size: cover;
      background-position: center center;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
    }

    .navbar {
      background-color: black;
    }

    .navbar-brand, .nav-link {
      color: white !important;
    }

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'><path stroke='rgba(255, 255, 255, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/></svg>");
    }

    .footer {
      background-color: black;
      padding: 20px 0;
      text-align: center;
    }

    .btn-dashboard {
      background-color: #28a745; /* Warna hijau, sesuaikan dengan keinginan Anda */
      color: white;
      border: none;
    }

    .btn-dashboard:hover {
      background-color: #218838; /* Warna hijau lebih gelap saat tombol dihover */
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Gudang</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <?php if(Route::has('login')): ?>
          <?php if(auth()->guard()->check()): ?>
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo e("Hai, " . Auth::user()->name); ?></a>
            </li>
          <?php else: ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('login')); ?>">Log in</a>
            </li>
            <?php if(Route::has('register')): ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a>
              </li>
            <?php endif; ?>
          <?php endif; ?>
        <?php endif; ?>
      </ul>
    </div>
  </nav>

  <!-- Welcome Section -->
  <div class="background-image">
    <div class="container">
      <h1 class="display-4 animated-text">Welcome to Gudang</h1>
      <p class="lead animated-text" style="text-decoration: underline;">The ultimate solution for your warehouse management.</p>
      <?php if(auth()->guard()->check()): ?>
        <a href="<?php echo e(url('/dashboard')); ?>" class="btn btn-dashboard">Dashboard</a>
      <?php endif; ?>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <p class="m-0" style="color: white;">&copy; 2023 Gudang. All rights reserved.</p>
    </div>
  </footer>

  <!-- Bootstrap and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH D:\UdaCoding\Codingan\Task 6\gudanggg\resources\views/welcome.blade.php ENDPATH**/ ?>