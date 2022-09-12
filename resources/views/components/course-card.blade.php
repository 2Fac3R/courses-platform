<div class="px-4 py-6 text-center bg-white rounded-lg shadow-lg">
    <a href="{{ route('course', $course->slug) }}">
        <img src="{{ $course->image }}" class="mb-2 rounded-md">

        <h2 class="text-lg font-semibold text-gray-600 uppercase truncate">{{ $course->name }}</h2>
        <h3 class="text-gray-500 text-md">{{ $course->excerpt }}</h3>

        <img src="{{ $course->user->avatar }}" alt="{{ $course->user->name }}" class="w-16 h-16 mx-auto mt-4 rounded-full">
    </a>
</div>
