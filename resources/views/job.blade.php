<x-layout> 
    <x-slot:heading>
        Movie Rev
    </x-slot:heading>
    
    <h2 class="text-2xl font-bold">{{ $job['title'] }}</h2>
    <p>
        This pay: {{ $job['about'] }}
    </p>
    
</x-layout>