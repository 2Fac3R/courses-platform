<div class="grid grid-cols-3 gap-4 mt-8">
    <!-- Livewire Component -->
    @foreach ($courses as $course)
        <x-course-card :course="$course" />
    @endforeach
</div>
