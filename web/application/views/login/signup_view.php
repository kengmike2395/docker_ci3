<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agilab</title>
    <script src="<?= base_url('assets/js/tailwind.js'); ?>"></script>
</head>

<body>
<div class="w-full max-w-sm p-6 bg-white rounded shadow-md">
    <h2 class="mb-6 text-2xl font-semibold text-center text-gray-700">SIGN UP</h2>

    <form action="#" method="POST" class="space-y-4">
        <!-- Email -->
        <div>
            <label for="email" class="block mb-1 text-sm font-medium text-gray-600">Email</label>
            <input type="email" id="email" name="email" required
                class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" />
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block mb-1 text-sm font-medium text-gray-600">Password</label>
            <input type="password" id="password" name="password" required
                class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" />
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="w-full px-4 py-2 font-semibold text-white bg-blue-500 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
            Login
        </button>
    </form>
</div>
</body>
</html>
