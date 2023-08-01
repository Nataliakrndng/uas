<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConnectFriend Payment</title>
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
                            <p class="font-medium text-lg">Payment Page</p>
                            <p>Please enter the payment amount.</p>
                        </div>

                        <form action="{{ route('process.payment') }}" method="POST">
                            @csrf
                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="amount" class="font-bold text-lg">Enter the payment amount:</label>
                                        <input type="number" name="amount" id="amount" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 mb-2" value="{{ session('price') }}">
                                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-2">Make Payment</button>
                                        @if(session('underpaid'))
                                            <p class="text-red-500">You are still underpaid {{ session('underpaid') }}</p>
                                        @endif

                                        @if(session('overpaid'))
                                            <p class="text-red-500 mb-2">Sorry you overpaid {{ session('overpaid') }}, would you like to enter a balance?</p>
                                            <form action="{{ route('process.balance') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="overpaid_amount" value="{{ session('overpaid')}}">
                                                <button type="submit" name="action" value="yes" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Yes</button>
                                                <button type="submit" name="action" value="no" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">No</button>
                                            </form>
                                        @endif
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
