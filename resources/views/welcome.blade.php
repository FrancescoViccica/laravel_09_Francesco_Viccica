<x-layout>
    
    
    
    
    {{-- Header --}}
    <div class="container-fluid header">
        
        {{-- @if (session()->has('emailSent'))
        <div class="alert alert-success">
            {{ session('emailSent') }}
        </div>
        
        @endif --}}
        
        {{-- @if (session()->has('successMessage'))
        <div class="alert alert-success">
            {{ session('successMessage') }}
        </div>
        
        
        @endif --}}
        
        
        
        <div class="row h-100">
            <div class="col-12 d-flex  justify-content-center align-items-center">
                <h1 class="text-light display-1 fw-bold text-color">BENVENUTI</h1>
            </div>
            
            <div class="row">
                
                <div class="col-12 col-md-8 d-flex justify-content-center align-items-center">
                    
                    <div class="col-12 col-md-8">
                        <h2 class="text-color text-center text-white">
                            Inserisci il tuo prodotto
                        </h2>
                    </div>
                    
                    <div class="col-12 col-md-8 text-white text-color ">
                        
                        <form method="POST" action="{{ route('merch.submit') }}">
                            @csrf
                            <div class="mb-3">
                                
                                <label for="title" class="form-label">Nome prodotto</label>
                                <input name='title' type="text" class="form-control" id="title" aria-describedby="emailHelp">
                                
                            </div>
                            
                            <div class="mb-3">
                                
                                <label for="genres" class="form-label">Genere prodotto</label>
                                <input name='genres' type="text" class="form-control" id="genres" aria-describedby="emailHelp">
                                
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Invia</button>
                        </form>
                    </div>
                    
                </div>
                
                
                
            </div>
        </div>
        
        
        
        
    </div>
    
    
    
    
</x-layout>
