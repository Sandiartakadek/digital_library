<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digital Library</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar py-4 shadow-lg fixed top-0 w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center">
        <div>
          <a href="#" class="text-2xl font-bold">Digital Library</a>
        </div>
        <div class="nav-text flex items-center space-x-4">
          <a href="index.php" class="hover:bg-indigo-700 px-3 py-2 rounded-md text-sm font-medium">Home</a>
          <a href="#" class="hover:bg-indigo-700 px-3 py-2 rounded-md text-sm font-medium">Catalog</a>
          <a href="#" class="hover:bg-indigo-700 px-3 py-2 rounded-md text-sm font-medium">About</a>
          <a href="#" class="hover:bg-indigo-700 px-3 py-2 rounded-md text-sm font-medium">Contact</a>
        </div>
        <div class="login-text">
          <a href="pages/login.php" class="ml-4 px-4 py-2 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-100">Login</a>
        </div>
      </div>
    </div>
  </nav>

<!-- Hero Section -->
  <header class="hero-section relative">
    <div class="slideshow">
      <img src="assets/images/study.jpg" class="slideshow-image active" alt="Slide 1">
      <img src="assets/images/bookplan.jpg" class="slideshow-image" alt="Slide 2">
      <img src="assets/images/journal.jpg" class="slideshow-image" alt="Slide 3">
    </div>
    <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
    <div class="flex items-center justify-center h-full absolute inset-0 z-10">
      <div class="text-center">
        <h1 class="text-4xl leading-9 font-extrabold text-white sm:text-5xl sm:leading-10 lg:text-4xl lg:leading-none">
          Welcome to the Digital Library
        </h1>
        <p class="mt-4 max-w-2xl text-lg leading-7 text-gray-300 lg:mx-auto">
          Explore a world of knowledge at your fingertips.
        </p>
      </div>
    </div>
  </header>


  <!-- Features Section -->
  <section class="features-section py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center">
        <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Features</h2>
        <p class="mt-2 text-2xl leading-8 font-extrabold tracking-tight text-indigo-900 sm:text-4xl">A better way to read and learn</p>
        <p class="mt-4 max-w-2xl text-lg leading-7 text-gray-500 lg:mx-auto">Our digital library offers a variety of features to enhance your reading experience.</p>
      </div>

      <div class="mt-10 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <!-- Feature 1: Vast Collection -->
        <div class="flow-root bg-white rounded-lg px-6 pb-8 shadow-lg">
          <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-600 text-white">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4v16l7-3 7 3V4m-7 5V2"></path>
            </svg>
          </div>
          <h3 class="mt-8 text-lg leading-6 font-medium text-gray-900">Vast Collection</h3>
          <p class="mt-5 text-base leading-6 text-gray-500">Access thousands of books, articles, and journals from various disciplines.</p>
        </div>
        <!-- Feature 2: Mobile Access -->
        <div class="flow-root bg-white rounded-lg px-6 pb-8 shadow-lg">
          <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-600 text-white">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8a6 6 0 00-12 0v6a6 6 0 0012 0V8z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 8v4a4 4 0 01-8 0V8a4 4 0 018 0z"></path>
            </svg>
          </div>
          <h3 class="mt-8 text-lg leading-6 font-medium text-gray-900">Mobile Access</h3>
          <p class="mt-5 text-base leading-6 text-gray-500">Read and learn on the go with our mobile-friendly platform.</p>
        </div>
        <!-- Feature 3: Academic Resources -->
        <div class="flow-root bg-white rounded-lg px-6 pb-8 shadow-lg">
          <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-600 text-white">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l-9 5 9 5 9-5-9-5zm0-6a4 4 0 100 8 4 4 0 000-8z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10v10M20 10v10M12 14l-9-5 9-5 9 5-9 5z"></path>
            </svg>
          </div>
          <h3 class="mt-8 text-lg leading-6 font-medium text-gray-900">Academic Resources</h3>
          <p class="mt-5 text-base leading-6 text-gray-500">Gain access to academic resources and materials for your studies.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Additional Sections -->
  <section class="additional-sections bg-gray-100 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center">
        <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Whats News?</h2>
        <p class="mt-2 text-2xl leading-8 font-extrabold tracking-tight text-indigo-900 sm:text-4xl">More ways to engage and learn</p>
        <p class="mt-4 max-w-2xl text-lg leading-7 text-gray-500 lg:mx-auto">Find out about the latest scientific research proposed by scientist.</p>
      </div>

      <div class="mt-10 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <!-- Additional Section 1 -->
        <div class="flow-root bg-white rounded-lg px-6 pb-8 shadow-lg">
          <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-600 text-white">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4v16l7-3 7 3V4m-7 5V2"></path>
            </svg>
          </div>
          <h3 class="mt-8 text-lg leading-6 font-medium text-gray-900">Easy Navigation</h3>
          <p class="mt-5 text-base leading-6 text-gray-500">Navigate through categories and genres effortlessly.</p>
        </div>
        <!-- Additional Section 2 -->
        <div class="flow-root bg-white rounded-lg px-6 pb-8 shadow-lg">
          <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-600 text-white">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8a6 6 0 00-12 0v6a6 6 0 0012 0V8z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 8v4a4 4 0 01-8 0V8a4 4 0 018 0z"></path>
            </svg>
          </div>
          <h3 class="mt-8 text-lg leading-6 font-medium text-gray-900">Interactive Features</h3>
          <p class="mt-5 text-base leading-6 text-gray-500">Engage with quizzes, annotations, and collaborative tools.</p>
        </div>
        <!-- Additional Section 3 -->
        <div class="flow-root bg-white rounded-lg px-6 pb-8 shadow-lg">
          <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-600 text-white">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l-9 5 9 5 9-5-9-5zm0-6a4 4 0 100 8 4 4 0 000-8z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10v10M20 10v10M12 14l-9-5 9-5 9 5-9 5z"></path>
            </svg>
          </div>
          <h3 class="mt-8 text-lg leading-6 font-medium text-gray-900">User Profiles</h3>
          <p class="mt-5 text-base leading-6 text-gray-500">Personalize your experience with customizable user profiles.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center">
        <div>
          <p class="text-white">&copy; 2024 Digital Library. All rights reserved.</p>
        </div>
        <div class="flex items-center space-x-4">
          <a href="#" class="text-white hover:text-gray-200">Privacy Policy</a>
          <a href="#" class="text-white hover:text-gray-200">Terms of Service</a>
        </div>
      </div>
    </div>
  </footer>

  <script src="assets/js/script.js"></script>
</body>
</html>
