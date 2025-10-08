<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex items-center justify-center font-sans bg-gradient-to-br from-pink-50 via-white to-pink-100 px-4">

  <!-- Main Card -->
  <div class="bg-white border border-pink-200 shadow-lg rounded-2xl px-10 py-12 w-full max-w-xl">

    <!-- Header -->
    <div class="flex flex-col items-center mb-8">
      <div class="bg-pink-400 rounded-full p-4 mb-4 shadow-md">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
        </svg>
      </div>
      <h2 class="text-3xl font-bold text-pink-600 text-center">Update Record</h2>
      <p class="text-gray-500 mt-2 text-center">Edit your information below</p>
    </div>

    <!-- Form -->
    <form action="<?=site_url('users/update/'.$user['id'])?>" method="POST" class="space-y-6">
      
      <!-- First Name -->
      <div>
        <label class="block text-pink-700 mb-1 font-semibold">First Name</label>
        <div class="flex items-center bg-pink-50 rounded-xl px-4 py-3 border border-pink-200">
          <svg class="w-6 h-6 text-pink-400 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
          <input type="text" name="first_name" value="<?= html_escape($user['first_name'])?>" required 
                 class="w-full bg-transparent focus:outline-none text-gray-700 text-lg">
        </div>
      </div>

      <!-- Last Name -->
      <div>
        <label class="block text-pink-700 mb-1 font-semibold">Last Name</label>
        <div class="flex items-center bg-pink-50 rounded-xl px-4 py-3 border border-pink-200">
          <svg class="w-6 h-6 text-pink-400 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
          <input type="text" name="last_name" value="<?= html_escape($user['last_name'])?>" required 
                 class="w-full bg-transparent focus:outline-none text-gray-700 text-lg">
        </div>
      </div>

      <!-- Email -->
      <div>
        <label class="block text-pink-700 mb-1 font-semibold">Email Address</label>
        <div class="flex items-center bg-pink-50 rounded-xl px-4 py-3 border border-pink-200">
          <svg class="w-6 h-6 text-pink-400 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16 12H8m8 0a4 4 0 11-8 0 4 4 0 018 0zm0 0v1a2 2 0 01-2 2H10a2 2 0 01-2-2v-1" />
          </svg>
          <input type="email" name="email" value="<?= html_escape($user['email'])?>" required 
                 class="w-full bg-transparent focus:outline-none text-gray-700 text-lg">
        </div>
      </div>

      <!-- Button -->
      <button type="submit" class="w-full bg-pink-500 hover:bg-pink-600 text-white font-bold py-3 rounded-xl shadow-md transition duration-200 text-lg">
        <span class="inline-flex items-center justify-center gap-2">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
          </svg>
          Update
        </span>
      </button>
    </form>
  </div>
</body>
</html>
