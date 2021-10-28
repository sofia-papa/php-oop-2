<?php 

    /** 
     * Crea uno shop online
     *
    */


    class Prodotto extends Shop{
        public $nome;
        public $descrizione;
        public $tipologia;
        public $prezzo;
        public $disponibilita;

        protected function __construct($nome, $descrizione, $tipologia, $prezzo, $disponibilita){

            $this->nome = $nome;
            $this->descrizione = $descrizione;
            $this->tipologia = $tipologia;
            $this->prezzo = $prezzo;
            $this->disponibilita = $disponibilita;
            
        }
    }
    
    class Carrello {
        protected $prodotti;
        protected $totale;

        protected function __construct($prodotti, $totale){

            $this->prodotti = $prodotti;
            $this->totale = $totale; 
        }

        protected function aggiungiAlCarrello(){
            
        }

        protected function rimuoviDalCarrello (){
           
        }

        protected function setTotale ($valore){
           $this->totale = $valore;
        }
 
    }

    
    class Utente {
        private $id;
        private $nome;
        private $cognome;
        private $email;
        public function __construct($id, $nome, $cognome, $email) {
            $this->id = $id;
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->email = $email;
        }
        public function getId() {
            return $this->id;
        }
        public function getNome() {
            return $this->nome;
        }
        public function getCognome() {
            return $this->cognome;
        }
        public function getEmail() {
            return $this->email;
        }
    }



 $nuovoProdotto
?>

