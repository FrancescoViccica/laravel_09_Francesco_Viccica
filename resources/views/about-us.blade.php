<x-layout>
  
  
  
  
  
  {{-- Header --}}
  
  <header>
    {{-- @dd($users) --}}
    <div class="container-fluid header">
      <div class="row h-100 justify-content-around align-items-center">
        <div class="col-6">
          <h2 class="text-color text-white text-center">Chi Siamo</h2>
          <p class="text-color text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis aliquid non id labore quibusdam, iusto maxime omnis libero earum reprehenderit eum quidem, odit mollitia aperiam! Consequatur reprehenderit minus dolore fugit?</p>
        </div>
        <div class="col-6 p-5 text-center">
          <img src="/media/Sfondo5.jpg" alt="immagine ciurma" class="shadow rounded custom">
        </div>
      </div>
    </div>
    
  </header>
  
  <section>
    <div class="container customUser">
      <div class="row h-100 justify-content-around align-items-center">
        @foreach ($users as $user )
        <div class="col-12 col-md-4">

          <x-cardUs
          name="{{ $user['name'] }}"
          surname="{{ $user['surname'] }}"
          role="{{ $user['role'] }}"
          >

          </x-cardUs>
      
        </div>
        @endforeach
      </div>
    </div>
  </section>
  
</x-layout>
