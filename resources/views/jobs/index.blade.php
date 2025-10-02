<x-layout> 
    <x-slot:heading>
        Movie Review
    </x-slot:heading>
    
    <div class="space-y-3 p-5">
        @foreach ($jobs as $job)
            <article>
                <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-green-500 rounded-lg hover:bg-amber-50">
                    <div class="font-bold text-red-400 text-shadow-md">{{ $job->employer->name }}</div>
                <strong>{{ $job['title'] }}:</strong>
                </a>
            </article>
         @endforeach

         <div>
            {{ $jobs->links() }}
         </div>
    </div>
</x-layout>