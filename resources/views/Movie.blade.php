<x-layout> 
    <x-slot:heading>
        Movie Review
    </x-slot:heading>
    
    <ul>
        @foreach ($movies as $movie)
            <li>
                <a href="/movies/{{ $movie['id'] }}" class="text-red-500 hover:underline">{{ $movie['title'] }}:
                </a>
            </li>
         @endforeach
    </ul>
</x-layout>