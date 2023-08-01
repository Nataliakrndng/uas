<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConnectFriend Home</title>
</head>
<body>
    <div class="min-h-screen p-6 bg-gray-100 flex justify-center items-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <h2 class="font-semibold text-xl text-gray-600">ConnectFriend</h2>
                <p class="text-gray-500 mb-6">Your Number #1 Social-Networking Web-app</p>
            </div>

            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                    <div class="lg:col-span-2">
                        <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            @foreach ($users as $user)
                                <li class="bg-white rounded shadow-md p-4">
                                    <img src="{{ $user['image_url'] }}" alt="{{ $user['name'] }}" class="w-32 h-32 mx-auto mb-4 rounded-full">
                                    <h2 class="text-lg font-semibold">{{ $user['name'] }}</h2>
                                    <p class="text-gray-600">{{ implode(', ', $user['hobbies']) }}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
