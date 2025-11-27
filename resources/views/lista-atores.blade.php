<x-base-layout>

<!-- Team -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Title -->
  <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Conheça os Atores</h2>
    <p class="mt-1 text-black-1000 dark:text-neutral-400">Elenco</p>
  </div>
  <!-- End Title -->

  <!-- Grid -->
  <div class="grid grid-cols-2 lg:grid-cols-3 gap-8 md:gap-12">
    
  <!-- inicio -->

  @foreach($atores as $ator)
  <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-4">
      <img class="rounded-lg size-20" src=" {{$ator->foto}}" alt="Avatar">
      <div class="mt-3 sm:mt-2">
      <div class="grow">
        <div>
          <h3 class="font-medium text-gray-800 dark:text-neutral-200" >
          {{$ator->nome}}
        
          </h3>
          <p class="mt-1 text-xs uppercase text-gray-500 dark:text-neutral-500">
          {{$ator->descricao}}

          </p>
        </div>

        
      </div>
    </div>
    <!-- fim -->
  </div>
    @endforeach
        
    
  <!-- End Grid -->


</x-base-layout>

