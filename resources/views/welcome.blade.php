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
                <a>Scopri di più</a>
            </div>
        </div>

        <div>
            <div class="know-more supermarket d-flex  flex-column justify-content-end">
                <h1>Supermercati</h1>
                <p>Ti aiuteremo a raggiungere nuovi clienti online per incrementare le vendite.</p>
                <a>Scopri di più</a>
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
        <div class="rider-spalle-img"><img src="./../../img/rider-spalle.jpg" alt="rider"></div>
    </div>
    <div class="improves d-flex flex-column justify-content-center align-items-center">
        <h1>Modi per far crescere e supportare la tua attività</h1>
        <p>Prodotti, servizi e informazioni per il tuo successo.</p>
        <div class="box d-flex justify-content-between align-items-center">

            <div>
                <div class="improves-marketing marketing d-flex  flex-column justify-content-end">
                    <h1>Marketing</h1>
                    <p>Raggiungi nuovi clienti a livello locale con le nostre iniziative di marketing e pubblicizza la tua
                        attività con pochi clic</p>
                    <a>Scopri di più</a>
                </div>
            </div>

            <div>
                <div class="improves-consegna consegna d-flex  flex-column justify-content-end">
                    <h1>Consegna</h1>
                    <p>Offri il servizio di consegna per garantire ai tuoi clienti la migliore esperienza possibile.</p>
                    <a>Scopri di più</a>
                </div>
            </div>
            <div>
                <div class="improves-ritiri ritiri d-flex  flex-column justify-content-end">
                    <h1>Ritiri</h1>
                    <p>Dai ai clienti la possibilità di ritirare l'ordine presso il tuo ristorante.</p>
                    <a>Scopri di più</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer d-flex align-items-center">
        <div class="box d-flex justify-content-between ">
            <div class="footer-card">
                <div class=" f-restaurant">
                    <h1>Restaurant</h1>
                    <ul>
                        <li><a href="#">Signature</a></li>
                        <li><a href="#">La nostra tecnoligia</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Food Photography</a></li>
                        <li><a href="#">Integrazione del Sistema di Cassa</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-card ">
                <div class="legale">
                    <h1>Legale</h1>
                    <ul>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Cookie</a></li>
                        <li><a href="#">Termini & condizioni</a></li>
                        <li><a href="#">Politiche</a></li>
                        <li><a href="#">Richieste da parte delle Autorità Pubbliche</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-card">
                <div class=" help">
                    <h1>aiuto</h1>
                    <ul>
                        <li><a href="#">Consigli e risposte dal team</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-card">
                <div class="partner">
                    <h1>Partner</h1>
                    <p>Inviaci le tue informazioni e ti aiuteremo a diventare un partner di Deliveroo.</p>
                    <a class="footer-btn">Scopri di più</a>
                </div>
            </div>
        </div>
    </div>
@endsection
