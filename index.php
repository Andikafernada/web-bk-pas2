<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link href="src/css/output.css" rel="stylesheet">
    <script>
      // Array untuk menyimpan warna yang akan digunakan
      const colors = ['bg-red-300', 'bg-green-300', 'bg-blue-300'];
      let currentColorIndexForm = 0; // Index warna untuk form login
      let currentColorIndexText = 0; // Index warna untuk teks mental health

      // Fungsi untuk mengubah warna form login
      function changeLoginColor() {
        const formElement = document.getElementById('login-form');
        currentColorIndexForm = (currentColorIndexForm + 1) % colors.length; // Menghitung index warna berikutnya
        formElement.className = `w-full max-w-sm p-6 ${colors[currentColorIndexForm]} border border-gray-200 rounded-lg shadow-md`;
      }

      // Fungsi untuk mengubah warna teks kesehatan mental
      function changeTextColor() {
        const textElement = document.getElementById('mental-health');
        currentColorIndexText = (currentColorIndexText + 1) % colors.length; // Menghitung index warna berikutnya
        textElement.className = `hidden md:block w-1/2 p-6 ${colors[currentColorIndexText]} rounded-lg cursor-pointer`;
      }
    </script>
  </head>

  <body
    background="src/img/bg.jpg"
    class="flex items-center justify-center h-screen bg-gray-100"
  >
    <!-- Kontainer utama -->
    <div class="flex items-center justify-center w-full max-w-4xl p-6 space-x-6">
      <!-- Teks motivasi untuk kesehatan mental dengan background yang dapat berubah -->
      <div id="mental-health" onclick="changeTextColor()"
           class="hidden md:block w-1/2 p-6 bg-gray-200 rounded-lg cursor-pointer">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Mental Health Matters</h2>
        <p class="text-lg text-gray-600 mb-4">
          "Kesehatan mental adalah fondasi untuk hidup yang baik. Luangkan waktu untuk diri sendiri dan dengarkan kebutuhan emosionalmu."
        </p>
      </div>

      <!-- Form Login -->
      <main id="login-form" onclick="changeLoginColor()"
            class="w-full max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md cursor-pointer">
        <header class="mb-6 text-center">
          <img
            src="src/img/logo.jpg"
            class="h-16 w-auto mx-auto mb-4"
            alt="Logo BK SMK Pasundan 2 Bandung"
          />
          <h1 class="text-2xl font-semibold text-gray-800">BK SMK Pasundan 2 Bandung</h1>
          <h2 class="text-xl font-semibold text-gray-700 mt-2">Login</h2>
        </header>

        <form action="config/login-proses.php" method="POST">
          <!-- Input Username -->
          <div class="mb-4">
            <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
            <input
              type="text"
              id="username"
              name="username"
              required
              class="w-full px-3 py-2 mt-1 text-gray-700 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
              placeholder="Masukkan username"
            />
          </div>

          <!-- Input Password -->
          <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
            <input
              type="password"
              id="password"
              name="password"
              required
              class="w-full px-3 py-2 mt-1 text-gray-700 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
              placeholder="Masukkan password"
            />
          </div>

          <!-- Tombol Login -->
          <div class="mb-6">
            <button
              type="submit"
              class="w-full px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:bg-blue-600 focus:outline-none"
              aria-label="Tombol Login"
            >
              Login
            </button>
          </div>

          <!-- Tautan tambahan -->
          <footer class="text-center">
            <p class="text-sm text-gray-500">
              Belum punya akun? <a href="#" class="text-blue-500 hover:underline">Daftar di sini</a>
            </p>
          </footer>
        </form>
      </main>
    </div>
  </body>
</html>
