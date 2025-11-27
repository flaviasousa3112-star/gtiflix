<x-base-layout>
    <!-- Team -->
<div class="max-w-5xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Title -->
  <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Our team</h2>
    <p class="mt-1 text-black-600 dark:text-black-400">Diretores</p>
  </div>
  <!-- End Title -->

  <!-- Grid -->
  <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8 md:gap-12 items-center justify-center">
    
  @foreach($diretores as $diretor)
  <div class="text-center">
      <img class="rounded-full size-30 mx-auto" src=" {{$diretor->foto}}" alt="Avatar">
      <div class="mt-3 sm:mt-2">
        <h3 class="font-medium text-black-800 dark:text-black-200">
        {{$diretor->nome}}
        </h3>
        <p class="text-sm text-black-600 dark:text-black-400">
        {{$diretor->descricao}}
        </p>
      </div>
      
    </div>
    <!-- End Col -->
@endforeach
    
    <!-- End Col -->
  </div>
  <!-- End Grid -->

    </div>
  </div>
  <!-- End Card -->
</div>
<!-- End Team -->


</x-base-layout>

