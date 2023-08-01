<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConnectFriend Registration</title>
</head>
<body>
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <h2 class="font-semibold text-xl text-gray-600">ConnectFriend</h2>
                <p class="text-gray-500 mb-6">Your Number #1 Social-Networking Web-app</p>

                <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg">Casual Friends Registration</p>
                            <p>Please fill out all the fields.</p>
                        </div>

                        <form method="POST" action="{{ route('register.submit') }}">
                            @csrf
                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                   <!-- Gender -->
                                    <div class="md:col-span-5">
                                        <label for="gender">Gender (Male/Female)</label>
                                        <select name="gender" id="gender" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                                            <option value="Male" @if(old('gender') === 'Male') selected @endif>Male</option>
                                            <option value="Female" @if(old('gender') === 'Female') selected @endif>Female</option>
                                        </select>
                                        @error('gender')
                                            <p class="text-red-500 text-xs">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Hobbies -->
                                    <div class="md:col-span-5">
                                        <label for="hobbies">Hobbies (Min. 3, comma-separated)</label>
                                        <input type="text" name="hobbies" id="hobbies" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('hobbies') }}" />
                                        @error('hobbies')
                                            <p class="text-red-500 text-xs">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Instagram Username -->
                                    <div class="md:col-span-5">
                                        <label for="instagram">Instagram Username (Link)</label>
                                        <input type="text" name="instagram" id="instagram" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('instagram') }}" placeholder="http://www.instagram.com/username" />
                                        @error('instagram')
                                            <p class="text-red-500 text-xs">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Mobile Number -->
                                    <div class="md:col-span-5">
                                        <label for="mobile">Mobile Number (Digits only)</label>
                                        <input type="text" name="mobile" id="mobile" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('mobile') }}" />
                                        @error('mobile')
                                            <p class="text-red-500 text-xs">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="md:col-span-5">
                                        <label class="font-bold" for="amount">Registration Fee</label>
                                        <p class="text-red-500 font-bold"> {{ number_format($price, 0, ',', '.') }} IDR</p>
                                        @error('amount')
                                            <p class="text-red-500 text-xs">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="md:col-span-5 text-right">
                                        <div class="inline-flex items-end">
                                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
