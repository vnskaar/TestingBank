<?php
include_once '../Model/domeneModell.php';

class AdminDBStub {
    
    function registrerKunde($kunde){
        if($kunde->personnummer == "20108824000"){
            return true;
        } 
        else {
            return false;
        }
    }
    
    function slettKunde($personnummer){
        $kunde= new kunde();
        $kunde->personnummer=12345678901;
        if($personnummer==$kunde->personnummer){
            return 'OK';
        }
        else {
            return 'Feil';
        }
    }
        
        function endreKonto($konto){
            if($konto->kontonummer == 105010123456){
                return true;
            } else {
                return false;
            }
        }
    
    //Maja
    function endreKundeInfo($kunde){
        
        $kunde1 = new kunde();
        $kunde1->etternavn = "Kiszka";
        $kunde1->adresse = "Thereses Gate";
            
        if($kunde1->etternavn == $kunde->etternavn || $kunde1->adresse == $kunde->adresse){
            return "OK";
          }else {
            return "Wrong";
          }
    }
    
    //Maja
    function registerKonto($konto) {
        
            $kunde = new kunde();
            $kunde->personnummer = "11111111111";
            
            if($kunde->personnummer == $konto->personnummer) {
                return "OK";
            } else {
                return "Wrong!";
            }
    }
     
    //Maja
    function slettKonto($kontonummer){
        
        $konto = new konto();
        $konto->kontonummer = "1234567890";
        
        if($konto->kontonummer == $kontonummer){
            return "OK";
        }else {
            return "Wrong!";
        }
    }
     
}