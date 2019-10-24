<?php
class Client
{
        private $nom;
        private $prenom;
        private $email;
        private $telephone;
        private $adresse;
        private $IDCommande;
        private $password;

        private $BaseDeDonneeIdentifiant = [["aze", "ret"], ["sdf", "ezr"], ["ret", "sdf"], ["client", "pass"]];

        public function __construct()
        { }
        public function __toString()
        { }

        public function verifLogin($user, $pass)
        {
                $trouver = false;
                for ($i = 0; $i < sizeof($this->BaseDeDonneeIdentifiant); $i++) {
                        if ($user == $this->BaseDeDonneeIdentifiant[$i][0]) {
                                if ($pass == $this->BaseDeDonneeIdentifiant[$i][1]) {
                                        echo "connecter";
                                        $trouver = true;
                                }
                        }
                }
                if ($trouver == false) {
                        echo "identifiant incorrect";
                }
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
         * Get the value of adresse
         */
        public function getAdresse()
        {
                return $this->adresse;
        }

        /**
         * Set the value of adresse
         *
         * @return  self
         */
        public function setAdresse($adresse)
        {
                $this->adresse = $adresse;

                return $this;
        }

        /**
         * Get the value of IDCommande
         */
        public function getIDCommande()
        {
                return $this->IDCommande;
        }

        /**
         * Set the value of IDCommande
         *
         * @return  self
         */
        public function setIDCommande($IDCommande)
        {
                $this->IDCommande = $IDCommande;

                return $this;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }
}
