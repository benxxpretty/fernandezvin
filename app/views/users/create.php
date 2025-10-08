<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Users</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="relative min-h-screen flex items-center justify-center font-sans bg-gradient-to-br from-pink-100 via-white to-pink-50 overflow-hidden">
  <!-- Background (subtle pastel wave) -->
  <div class="absolute inset-0 z-0">
    <svg class="absolute bottom-0 left-0 w-full h-40" viewBox="0 0 1440 320">
      <path fill="#fce7f3" fill-opacity="0.8" 
            d="M0,224L48,197.3C96,171,192,117,288,117.3C384,117,480,171,576,197.3C672,224,768,224,864,197.3C960,171,1056,117,1152,117.3C1248,117,1344,171,1392,197.3L1440,224L1440,320L0,320Z">
      </path>
    </svg>
  </div>

  <!-- Form Card -->
  <div class="relative z-10 w-full max-w-lg animate-fadeIn">
    <div class="backdrop-blur-xl bg-white/70 border border-pink-200 shadow-xl rounded-3xl px-10 py-12">
      
      <!-- Header -->
      <div class="flex flex-col items-center mb-8">
        <div class="bg-pink-400 rounded-full p-4 mb-4 shadow-md">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
          </svg>
        </div>
        <h2 class="text-3xl font-extrabold text-pink-700 drop-shadow text-center">Create User</h2>
        <p class="text-gray-500 mt-2 text-center text-base">Fill out the form to add a new user</p>
      </div>

      <!-- Form -->
      <form action="<?=site_url('users/create')?>" method="POST" class="space-y-6">
        <!-- First Name -->
        <div>
          <label class="block text-pink-700 mb-1 font-semibold">First Name</label>
          <div class="flex items-center bg-white rounded-xl px-4 py-2 shadow-inner">
            <svg class="w-5 h-5 text-pink-400 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" 
                    d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            <input type="text" name="first_name" placeholder="Enter first name" required 
                   class="w-full bg-transparent focus:outline-none text-gray-700 placeholder-gray-400">
          </div>
        </div>

        <!-- Last Name -->
        <div>
          <label class="block text-pink-700 mb-1 font-semibold">Last Name</label>
          <div class="flex items-center bg-white rounded-xl px-4 py-2 shadow-inner">
            <svg class="w-5 h-5 text-pink-400 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" 
                    d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            <input type="text" name="last_name" placeholder="Enter last name" required 
                   class="w-full bg-transparent focus:outline-none text-gray-700 placeholder-gray-400">
          </div>
        </div>

        <!-- Email -->
        <div>
          <label class="block text-pink-700 mb-1 font-semibold">Email</label>
          <div class="flex items-center bg-white rounded-xl px-4 py-2 shadow-inner">
            <svg class="w-5 h-5 text-pink-400 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" 
                    d="M16 12H8m8 0a4 4 0 11-8 0 4 4 0 018 0zm0 0v1a2 2 0 01-2 2H10a2 2 0 01-2-2v-1"/>
            </svg>
            <input type="email" name="email" placeholder="Enter email" required 
                   class="w-full bg-transparent focus:outline-none text-gray-700 placeholder-gray-400">
          </div>
        </div>

        <!-- Button -->
        <button type="submit" 
                class="w-full bg-gradient-to-r from-pink-500 to-pink-600 hover:from-pink-600 hover:to-pink-700 text-white font-bold py-3 rounded-xl shadow-md transition duration-200 text-lg">
          <span class="inline-flex items-center justify-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
            </svg>
            SUBMIT
          </span>
        </button>
      </form>
    </div>
  </div>

  <!-- Animations -->
  <style>
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .animate-fadeIn { animation: fadeIn 1s cubic-bezier(.4,0,.2,1); }
  </style>
</body>
</html>
