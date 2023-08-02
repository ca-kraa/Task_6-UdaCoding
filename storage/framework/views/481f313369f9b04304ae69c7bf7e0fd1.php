<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Management Access Error</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

  <style>
    .center-screen {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-size: 2rem;
    }

    .whatsapp-button {
      background-color: #25D366;
      color: white;
    }

    .whatsapp-button:hover {
      background-color: #128C7E;
      color: white;
    }
  </style>
</head>
<body>
    <body>
        <div class="center-screen text-center">
          <i class="fas fa-sad-tear fa-5x"></i>
          <p class="mt-4">Maaf, akun Anda tidak terdaftar di Database</p>
          <a href="https://wa.me/" target="_blank" class="btn whatsapp-button">
            <i class="fab fa-whatsapp"></i> Hubungi Admin
          </a>
          <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(route('logout')); ?>" class="btn btn-danger mt-3" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              Log out
            </a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
              <?php echo csrf_field(); ?>
            </form>
          <?php endif; ?>
        </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH D:\UdaCoding\Codingan\Task 6\gudanggg\resources\views/home.blade.php ENDPATH**/ ?>