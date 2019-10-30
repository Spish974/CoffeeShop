<?php
    class Client{
        private $id;
        private $nom;
        private $prenom;
        private $telephone;
        private $index_adresse;
        private $username;
        private $email;

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
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of prenom
         */ 
        public function getPrenom()
        {
                return $this->prenom;
        }

        /**
         * Set the value of prenom
         *
         * @return  self
         */ 
        public function setPrenom($prenom)
        {
                $this->prenom = $prenom;

                return $this;
        }

        /**
         * Get the value of telephone
         */ 
        public function getTelephone()
        {
                return $this->telephone;
        }

        /**
         * Set the value of telephone
         *
         * @return  self
         */ 
        public function setTelephone($telephone)
        {
                $this->telephone = $telephone;

                return $this;
        }

        /**
         * Get the value of index_adresse
         */ 
        public function getIndex_adresse()
        {
                return $this->index_adresse;
        }

        /**
         * Set the value of index_adresse
         *
         * @return  self
         */ 
        public function setIndex_adresse($index_adresse)
        {
                $this->index_adresse = $index_adresse;

                return $this;
        }

        /**
         * Get the value of username
         */ 
        public function getUsername()
        {
                return $this->username;
        }

        /**
         * Set the value of username
         *
         * @return  self
         */ 
        public function setUsername($username)
        {
                $this->username = $username;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }
    }
?>