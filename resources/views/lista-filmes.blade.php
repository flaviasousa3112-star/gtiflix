<x-base-layout>

<!-- Card Blog -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Grid -->
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($filmes as $filme)

    <!-- Card -->
    <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
      <div class=" flex flex-col justify-center items-center bg-white-600 rounded-t-xl">
        <img src=" {{$filme->capa}}" class="w-95 rounded-t-xl" alt="" srcset="">
      </div>
      <div class="p-4 md:p-7">
        <span class="block mb-1 text-xs font-semibold uppercase text-white dark:text-white-500">
          Filme
        </span>
        <h3 class="text-xl font-semibold text-white dark:text-white-300 dark:hover:text-white">
        {{$filme->nome}}
        </h3>
        <p class="mt-3 text-white dark:text-white-500">
        {{$filme->descricao}}
        </p>
      </div>
      <div class="mt-auto flex border-t border-white-200 divide-x divide-black-200 dark:border-white-700 dark:divide-neutral-700">
        <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-b-xl bg-white text-white-800 shadow-2xs hover:bg-white-50 focus:outline-hidden focus:bg-white-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" 
          href="{{route('detalhes-filme', $filme)}}">
        Ver detalhes
        </a>
      
      </div>
    </div>
    <!-- End Card -->
    @endforeach
  </div>
  <!-- End Grid -->
</div>
<!-- End Card Blog -->



</x-base-layout>
