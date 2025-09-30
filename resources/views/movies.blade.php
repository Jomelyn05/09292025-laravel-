<x-layout> 
    <x-slot:heading>
        Movie Rev
    </x-slot:heading>
    
    <h2 class="text-2xl font-bold">{{ $movies['title'] }}</h2>
    <p>
        Description {{ $movies['about'] }}
    </p>
    
</x-layout>