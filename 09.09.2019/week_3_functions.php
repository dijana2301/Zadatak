<?php
$_SERVER['REQUEST_METHOD'];  /*Niz koji omogućava da dobijemo odredjene informacije od servera, kao sto su:
    koji je http host u pitanju tj. naziv servera i na kom portu slusa, koji je zahtjev koristen za pristup stranici
    (POST,PUT,GET - sto je ovdje zahtjev)naziv fajla, putanja do tog fajla itd. 
    */

$_GET[] /*Saljemo serveru podatke iz html forme, npr sliku, dokument.
    Kada koristimo $_GET naziv varijabli i njihove vrijednosti su vidljivi u URL.
    Ogranicenog je karaktera tj 1024 karaktera max mozemo poslati.
     */

$_POST[] /*Saljemo serveru podatke iz html forme koje nisu vidljive u URL, npr password ili dr osjetljive podatke.
Nema ogranicenja kod slanja podataka i podaci idu kroz HTTP header.*/


explode() //razloži string od stringa koji su odvojeni npr'/',':'

trim()

json_decode() //uzima PHP vrijednost i pretvara ga u JSON kodirani string

file_get_contents() //uzima podatke iz inputa i pretvara ih u Json string

include_once //ukljucuje(poziva) fajl samo jednom 

!is_array() //provjerava da li je varijabla niz odnosno zbog ! nije

count() //racuna broj elemenata u nizu

empty() //provjerava da li je varijabla ili niz(ili odredjeni elemenat niza) prazan

in_array() //Provjerava da li postoji vrijednost u nizu

error() // greska(u kodu, fajlu, poruka)

error_log() //salje poruku da je greska ne serveru ili u fajlu

getData() //prikuplja sve podatke ??

respond() //vraca odgovor

saveData() //sacuva unesene podatke

unset() //izbrisi postojece podatke

!file_exists() //provjerava da li postoji fajl odnosno ne postoji

file_put_contents() //ubacuje podatke u fajl

http_response_code() //postavlja status kod


?>
