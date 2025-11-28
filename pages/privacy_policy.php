<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Privacy Policy - Foodie's Paradise</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
</head>
<body class="font-[Poppins] bg-gradient-to-br from-white to-amber-300 text-gray-800">
  <!-- Navbar -->
  <nav class="bg-gradient-to-r from-gray-900 to-gray-800 text-white fixed w-full top-0 z-50 shadow-lg">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <a href="index.html" class="text-2xl font-bold text-orange-400">Foodie's Paradise</a>
      <button id="menu-btn" class="md:hidden text-white focus:outline-none">☰</button>
      <ul id="menu" class="hidden md:flex space-x-8 text-lg">
        <li><a href="index.html" class="hover:text-orange-400">Home</a></li>
        <li><a href="menu.html" class="hover:text-orange-400">Menu</a></li>
        <li><a href="about.html" class="hover:text-orange-400">About</a></li>
        <li><a href="contact.html" class="hover:text-orange-400">Contact</a></li>
      </ul>
    </div>
    <script>
      const menuBtn = document.getElementById('menu-btn');
      const menu = document.getElementById('menu');
      menuBtn.addEventListener('click', () => menu.classList.toggle('hidden'));
    </script>
  </nav>

  <!-- Privacy Policy Section -->
  <section class="pt-28 pb-20 px-6">
    <div class="max-w-5xl mx-auto">
      <h2 class="text-4xl font-bold text-center mb-6 text-gray-800" data-aos="fade-up">Privacy Policy</h2>
      <p class="text-lg text-center text-gray-700 mb-10" data-aos="fade-up" data-aos-delay="100">
        Your privacy is extremely important to us. This Privacy Policy explains how we collect, use, and protect your personal information when you interact with Foodie's Paradise.
      </p>

      <div class="space-y-8">
        <!-- Info We Collect -->
        <div class="bg-gray-100 p-6 rounded-lg shadow-md flex items-start" data-aos="fade-up">
          <div class="text-orange-500 text-3xl mr-4"><i class="fas fa-user-shield"></i></div>
          <div>
            <h3 class="text-2xl font-semibold mb-2 text-gray-800">Information We Collect</h3>
            <p class="text-gray-700 mb-2">We collect personal and non-personal information to enhance your experience.</p>
            <ul class="list-disc list-inside text-gray-700">
              <li><strong>Personal Information:</strong> Provided when you register or contact us.</li>
              <li><strong>Non-Personal Information:</strong> Collected through cookies and analytics.</li>
            </ul>
          </div>
        </div>

        <!-- Cookies -->
        <div class="bg-gray-100 p-6 rounded-lg shadow-md flex items-start" data-aos="fade-up">
          <div class="text-orange-500 text-3xl mr-4"><i class="fas fa-cookie-bite"></i></div>
          <div>
            <h3 class="text-2xl font-semibold mb-2 text-gray-800">Cookies</h3>
            <p class="text-gray-700">We use cookies to personalize content, analyze traffic, and improve your experience. You can manage cookie settings in your browser.</p>
          </div>
        </div>

        <!-- Data Security -->
        <div class="bg-gray-100 p-6 rounded-lg shadow-md flex items-start" data-aos="fade-up">
          <div class="text-orange-500 text-3xl mr-4"><i class="fas fa-lock"></i></div>
          <div>
            <h3 class="text-2xl font-semibold mb-2 text-gray-800">Data Security</h3>
            <p class="text-gray-700">We implement strong security measures to protect your personal data from unauthorized access and misuse.</p>
          </div>
        </div>

        <!-- Third-Party Links -->
        <div class="bg-gray-100 p-6 rounded-lg shadow-md flex items-start" data-aos="fade-up">
          <div class="text-orange-500 text-3xl mr-4"><i class="fas fa-link"></i></div>
          <div>
            <h3 class="text-2xl font-semibold mb-2 text-gray-800">Third-Party Links</h3>
            <p class="text-gray-700">Our website may contain external links. We are not responsible for their content or privacy practices. Please review their policies before use.</p>
          </div>
        </div>

        <!-- Changes to Policy -->
        <div class="bg-gray-100 p-6 rounded-lg shadow-md flex items-start" data-aos="fade-up">
          <div class="text-orange-500 text-3xl mr-4"><i class="fas fa-sync-alt"></i></div>
          <div>
            <h3 class="text-2xl font-semibold mb-2 text-gray-800">Changes to This Policy</h3>
            <p class="text-gray-700">We may update our Privacy Policy occasionally. Updates will be posted here with a revised effective date.</p>
          </div>
        </div>

        <!-- Contact Us -->
        <div class="bg-gray-100 p-6 rounded-lg shadow-md flex items-start" data-aos="fade-up">
          <div class="text-orange-500 text-3xl mr-4"><i class="fas fa-envelope"></i></div>
          <div>
            <h3 class="text-2xl font-semibold mb-2 text-gray-800">Contact Us</h3>
            <p class="text-gray-700">If you have any questions about this policy, please contact us at <strong>support@foodiesparadise.com</strong>.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-300 py-10 mt-10">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-6 text-center md:text-left">
      <div>
        <h3 class="text-orange-400 text-xl font-semibold">Foodie's Paradise</h3>
        <p class="mt-2 text-sm">&copy; 2024 Foodie's Paradise. All rights reserved.</p>
      </div>
      <div>
        <ul class="space-y-2">
          <li><a href="index.html" class="hover:text-orange-400">Home</a></li>
          <li><a href="about.html" class="hover:text-orange-400">About</a></li>
          <li><a href="contact.html" class="hover:text-orange-400">Contact</a></li>
          <li><a href="privacy_policy.html" class="hover:text-orange-400">Privacy Policy</a></li>
        </ul>
      </div>
      <div>
        <ul class="space-y-2">
          <li><a href="#" class="hover:text-orange-400">Facebook</a></li>
          <li><a href="#" class="hover:text-orange-400">Instagram</a></li>
          <li><a href="#" class="hover:text-orange-400">Twitter</a></li>
        </ul>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
  <script>
    AOS.init({ duration: 800, once: true });
  </script>
</body>
</html>
