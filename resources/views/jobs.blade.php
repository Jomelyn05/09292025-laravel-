<x-layout> 
    <x-slot:heading>
        Movie Review
    </x-slot:heading>
    
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-red-500 hover:underline">{{ $job['title'] }}:
                </a>
            </li>
         @endforeach
    </ul>
</x-layout>