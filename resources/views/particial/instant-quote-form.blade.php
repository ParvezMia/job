{{-- resources/views/partials/instant-quote-form.blade.php --}}
<div class="w-full mb-9 rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 overflow-hidden h-full">
    <div class="px-6 py-8">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Request a Free Quote</h2>
        <form action="{{ route('quote.store') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <input type="text" name="name" placeholder="Name" required
                    class="w-full px-4 py-3 placeholder-gray-400 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-200 focus:border-green-400"
                    value="{{ old('name') }}">
                @error('name')
                    <div class="text-red-200">{{ $message }}</div>
                @enderror

            </div>
            <div>
                <input type="email" name="email" placeholder="Email" required
                    class="w-full px-4 py-3 placeholder-gray-400 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-200 focus:border-green-400"
                    value="{{ old('email') }}">
                @error('email')
                    <div class="text-red-200">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <input type="tel" name="phone" placeholder="Phone" required
                    class="w-full px-4 py-3 placeholder-gray-400 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-200 focus:border-green-400"
                    value="{{ old('phone') }}">
                @error('phone')
                    <div class="text-red-200">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <input type="text" name="zip" placeholder="Zip Code" required
                    class="w-full px-4 py-3 placeholder-gray-400 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-200 focus:border-green-400"
                    value="{{ old('zip') }}">
                @error('zip')
                    <div class="text-red-200">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <textarea name="message" placeholder="How Can We Help You?" required
                    class="w-full px-4 py-3 placeholder-gray-400 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-200 focus:border-green-400 h-32">{{ old('message') }}</textarea>
                @error('message')
                    <div class="text-red-200">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <button type="submit"
                    class="w-full px-6 py-4 text-white bg-green-600 rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700 text-lg font-semibold transition duration-300">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
