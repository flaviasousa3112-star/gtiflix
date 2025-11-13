<x-base-layout>
    <!-- Team -->
<div class="max-w-5xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Title -->
  <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Our team</h2>
    <p class="mt-1 text-gray-600 dark:text-neutral-400">Diretores</p>
  </div>
  <!-- End Title -->

  <!-- Grid -->
  <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8 md:gap-12">
    
  @foreach($diretores as $diretor)
  <div class="text-center">
      <img class="rounded-full size-24 mx-auto" src="https://www.papodecinema.com.br/wp-content/uploads/2016/04/20180413-media-copy.webp" alt="Avatar">
      <div class="mt-2 sm:mt-4">
        <h3 class="font-medium text-gray-800 dark:text-neutral-200">
        {{$diretor->nome}}
        </h3>
        <p class="text-sm text-gray-600 dark:text-neutral-400">
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

