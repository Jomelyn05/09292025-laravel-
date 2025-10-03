<x-layout> 
    <x-slot:heading>
        Edit Job:{{ $job->title }}
    </x-slot:heading>
    
    <form method="POST" action="/jobs" class="max-w-[960px] bg-white/90 ml-5 p-5 rounded-xl">
        @csrf
  <div class="space-y-12 ml-1 m-5">
    <div class="border-b border-gray-900/10 pb-12">
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
              <input id="title" type="text" 
              name="title" placeholder="Engineer" 
              class="block min-w-0 grow bg-white py-1.5 px-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
              value="{{ $job->title }}" 
              required>
            </div>

            @error('title')
                    <p class="text-xl text-blue-500 font-semibold italic mt-1">{{ $message }}</p>
            @enderror

          </div>
        </div>
        
        <div class="sm:col-span-4">
          <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
              <input id="Salary" type="text" name="salary" 
              placeholder="$100,000,000" 
              class="block min-w-0 grow bg-white py-1.5 px-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" 
              value="{{ $job->salary }}"
              required>
            </div>

                    @error('title')
                        <p class="text-xl text-blue-500 font-semibold italic mt-1">{{ $message }}</p>
                    @enderror

          </div>

       <!--   <div class="mt-10">
                @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="text-blue-500 italic">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif -->

            </div>

        </div>
    </div>
  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
  </div>
</form>
</x-layout>