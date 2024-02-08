@extends('layouts.app')
@section('content')
    <div class="jumbo box d-flex  flex-column align-items-center justify-content-center">
        <h1>Diventa un partner di Deliverboo</h1>
        <h5>insieme possiamo aiutarti a raggiungere sempre più clienti</h5>
        <button>Crea un account</button>
        <h2>Scopri i servizi che mettiamo a disposizione per attività come la tua</h2>
    </div>
    <div class="know-more-cards box d-flex justify-content-between ">
        <div>
            <div class="know-more restaurant d-flex  flex-column justify-content-end">
                <h1>Ristoranti</h1>
                <p>
                    Alla consegna ci pensiamo noi, così tu potrai concentrarti sul cibo.</p>
                <a class="link-know">Scopri di più</a>
            </div>
        </div>

        <div>
            <div class="know-more supermarket d-flex  flex-column justify-content-end">
                <h1>Supermercati</h1>
                <p>Ti aiuteremo a raggiungere nuovi clienti online per incrementare le vendite.</p>
                <a class="link-know">Scopri di più</a>
            </div>
        </div>

    </div>
    <div class="d-flex box justify-content-between ">
        <div class="info-list">
            <h1>In che modo Deliveroo può aiutare la tua attività?</h1>
            <p>Dopo la registrazione ti invieremo tutto il necessario per cominciare: una stampante wireless, un tablet e
                altri materiali segnaletici.</p>
            <ul>
                <li>Assistenza per tablet 24 ore su 24</li>
                <li>Piano di pagamento flessibile</li>
                <li>Usa la rete di rider Deliveroo o consegna autonomamente</li>
                <li>Marketing della tua attività con risparmi su foto e siti web</li>
                <li>Fidelizza la clientela grazie ai dati e agli strumenti disponibili nel Restaurant Hub</li>
            </ul>
        </div>
        <div class="rider-spalle-img"><img src="../../public/img/rider-spalle.jpg" alt="rider">lalala</div>
    </div>
@endsection
