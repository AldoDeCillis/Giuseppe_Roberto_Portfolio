<x-layout>
    <header class="container-fluid bg-dark">
        <div class="row">
            <h1 class="display-4 text-white text-center">Contatti:</h1>
        </div>
    </header>
    <main class="container my-1">
        <div class="row">
            <div class="col-12 col-md-6 text-center text-md-end">
                <div class="row">
                    <div class="col-12 h-50">

                    </div>
                    <div class="col-12 h-50">
                            <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=16.40812933444977%2C41.159488794423346%2C16.415027976036075%2C41.162150286820065&amp;layer=mapnik" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/#map=18/41.16082/16.41158">Visualizza mappa ingrandita</a></small>
                        
                    </div>
                </div>
                <h4 class="fw-bold">

                </h4>
                <p class="lead fw-light fs-3">
                    
                </p>
            </div>
            <div class="col-12 col-md-6">

                <form method="POST" action="{{route('Submit')}}" class="p-5 custom_form_border bg-dark text-white">
                    @csrf
                    <p class="lead mb-3 text-center fs-3">Inviami un messaggio per ricevere informazioni su di me!</p>
                    <div class="my-3">
                        <label class="form-label">Nome e Cognome</label>
                        <input name="name" type="text" class="form-control" placeholder="Nome Completo">
                    </div>
                    <div class="my-3">
                        <label class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" placeholder="name@example.com">
                    </div>
                    <div class="my-3">
                        <label class="form-label">Example textarea</label>
                        <textarea name="message" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-light">Contattami!</button>
                    </div>
                </form>


            </div>
        </div>
    </main>



</x-layout>