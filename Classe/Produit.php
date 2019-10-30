<?php
    class Produit{
        private $id;
        private $prix;
        private $quantite;
        private $libelle;
        private $photos;
        private $categorie;

        public function __construct()
        {
            
        }
       
        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }
        
        /**
         * Get the value of prix
         */ 
        public function getPrix()
        {
                return $this->prix;
        }

        /**
         * Set the value of prix
         *
         * @return  self
         */ 
        public function setPrix($prix)
        {
                $this->prix = $prix;

                return $this;
        }

        /**
         * Get the value of quantite
         */ 
        public function getQuantite()
        {
                return $this->quantite;
        }

        /**
         * Set the value of quantite
         *
         * @return  self
         */ 
        public function setQuantite($quantite)
        {
                $this->quantite = $quantite;

                return $this;
        }

        /**
         * Get the value of libelle
         */ 
        public function getLibelle()
        {
                return $this->libelle;
        }

        /**
         * Set the value of libelle
         *
         * @return  self
         */ 
        public function setLibelle($libelle)
        {
                $this->libelle = $libelle;

                return $this;
        }

        /**
         * Get the value of photos
         */ 
        public function getPhotos()
        {
                return $this->photos;
        }

        /**
         * Set the value of photos
         *
         * @return  self
         */ 
        public function setPhotos($photos)
        {
                $this->photos = $photos;

                return $this;
        }

        /**
         * Get the value of categorie
         */ 
        public function getCategorie()
        {
                return $this->categorie;
        }

        /**
         * Set the value of categorie
         *
         * @return  self
         */ 
        public function setCategorie($categorie)
        {
                $this->categorie = $categorie;

                return $this;
        }

        
        }
    

?>