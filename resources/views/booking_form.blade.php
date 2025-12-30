@extends('layout')

@section('content')
<section class="form-section py-16 bg-gray-50">
    <div class="container mx-auto max-w-3xl px-4">
        <!-- Form Header -->
        <h2 class="text-4xl font-bold text-gray-900 text-center mb-10">
            Book Sheila Muwanga
        </h2>

        <!-- Success / Error Messages -->
        @if (session('success'))
            <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Booking Form -->
        <form method="POST" action="{{ route('booking.submit') }}" class="bg-white p-8 rounded-2xl shadow-lg space-y-6">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block font-medium text-gray-700 mb-2">Full Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" 
                       class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block font-medium text-gray-700 mb-2">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" 
                       class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Phone -->
            <div>
                <label for="phone" class="block font-medium text-gray-700 mb-2">Phone Number</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone') }}" 
                       class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Event Date -->
            <div>
                <label for="event_date" class="block font-medium text-gray-700 mb-2">Event Date</label>
                <input type="date" id="event_date" name="event_date" value="{{ old('event_date') }}" 
                       class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Event Type -->
            <div>
                <label for="event_type" class="block font-medium text-gray-700 mb-2">Event Type</label>
                <select id="event_type" name="event_type" 
                        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option value="">-- Select Event Type --</option>
                    <option value="Wedding" {{ old('event_type') == 'Wedding' ? 'selected' : '' }}>Wedding</option>
                    <option value="Corporate Event" {{ old('event_type') == 'Corporate Event' ? 'selected' : '' }}>Corporate Event</option>
                    <option value="Birthday" {{ old('event_type') == 'Birthday' ? 'selected' : '' }}>Birthday</option>
                    <option value="Other" {{ old('event_type') == 'Other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>

            <!-- Additional Details -->
            <div>
                <label for="message" class="block font-medium text-gray-700 mb-2">Additional Details</label>
                <textarea id="message" name="message" rows="4" 
                          class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('message') }}</textarea>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" 
                        class="px-8 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow hover:bg-blue-700 transition-colors duration-300">
                    Submit Booking
                </button>
            </div>
        </form>
    </div>
</section>
@endsection
