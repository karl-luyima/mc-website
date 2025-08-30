@extends('layout')

@section('content')
<section class="form-section">
    <div class="form-container">
        <h2 class="form-title">Book Sheila Muwanga</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('booking.submit') }}">
            @csrf

            <div class="form-group">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" id="name" name="name" class="form-input" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-input" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" id="phone" name="phone" class="form-input" value="{{ old('phone') }}" required>
            </div>

            <div class="form-group">
                <label for="event_date" class="form-label">Event Date</label>
                <input type="date" id="event_date" name="event_date" class="form-input" value="{{ old('event_date') }}" required>
            </div>

            <div class="form-group">
                <label for="event_type" class="form-label">Event Type</label>
                <select id="event_type" name="event_type" class="form-input" required>
                    <option value="">-- Select Event Type --</option>
                    <option value="Wedding" {{ old('event_type') == 'Wedding' ? 'selected' : '' }}>Wedding</option>
                    <option value="Corporate Event" {{ old('event_type') == 'Corporate Event' ? 'selected' : '' }}>Corporate Event</option>
                    <option value="Birthday" {{ old('event_type') == 'Birthday' ? 'selected' : '' }}>Birthday</option>
                    <option value="Other" {{ old('event_type') == 'Other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="message" class="form-label">Additional Details</label>
                <textarea id="message" name="message" class="form-input" rows="4">{{ old('message') }}</textarea>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn">Submit Booking</button>
            </div>
        </form>
    </div>
</section>
@endsection
