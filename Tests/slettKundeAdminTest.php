<?php

include_once '../Model/domeneModell.php';
include_once '../DAL/databaseStub.php';
include_once '../BLL/adminLogikk.php';

class slettKundeAdminTest extends PHPUnit_Framework_TestCase {
    
    public function testSlettKundeAdminPersonnummerOK() {
        //arrange
        $personnummer=12345678901;
        $admin=new Admin(new AdminDBStub());
        //act
        $resultat=$admin->slettKunde($personnummer);
        //assert
        $this->assertEquals('OK',$resultat);
    } 
    
    public function testSlettKundeAdminPersonnummerFeil() {
        //arrange
        $personnummer=12345600000;
        $admin=new Admin(new AdminDBStub());
        //act
        $resultat=$admin->slettKunde($personnummer);
        //assert
        $this->assertEquals('Feil',$resultat);
    }
    
}
