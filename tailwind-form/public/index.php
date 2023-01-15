<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./css/style.css" rel="stylesheet">
</head>
<body>
  <main class="flex items-center h-screen justify-center bg-black">
    <form method="POST" action="">
      <div class="bg-white w-96 p-6 rounded shadow-sm">
        <div class="flex items-center justify-center mb-10">
          <a href="" class="text-black font-bold text-2xl">./talasweb</a>
        </div>
        <?php
          error_reporting(0);
          if($_POST){
            $email = $_POST['email'];
            $password = $_POST['password'];
            if($email == "talas@talasweb.com" && $password=="1234"){
            echo '<div class="flex items-center justify-center mb-4">';
            echo '<a href="#" class="w-full text-white bg-green-600 text-sm rounded text-center">Login successful</a>';
            echo '</div>';
            }
            else{
              echo '<div class="flex items-center justify-center mb-4">';
              echo '<a href="#" class="w-full text-white bg-red-600 text-sm rounded text-center">Login is wrong</a>';
              echo '</div>';   
            }
          }
        ?>
        <label class="">Email</label>
        <input type="email" class="bg-gray-200 w-full py-1 outline-none mb-4" placeholder="name@gmail.com" name="email" required>
        <label class="">Password</label>
        <input type="password" class="bg-gray-200 w-full py-1 outline-none mb-4" minlength="4" placeholder="password" name="password" required>
        <input type="checkbox" class="mb-4">
        <label>Remember Me</label>
        <button class="w-full bg-blue-500 text-white h-10 rounded hover:bg-blue-700 mb-4">Login</button>
      </div>
    </form>
  </main>
</body>
</html>