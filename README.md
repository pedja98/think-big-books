<p>Uputstvo za koriscenje aplikacije</p>

<p>Opis funkcionalnosti</p>

<p>U aplikaciji postoji sistem za login korisnika kao i njihovu registraciju. Pri registraciji pored osnovnih podataka(Ime, Mail, Sifra), korisnik 
moze odabrati i role Admin-a i Member-a koji imaju mogucnost pregleda knjiga, ali samo Admin moze da ih dodaje. Po registraciji korisnik se automatski loginuje.<br>
Da bi se login-ovao korisnik mora da tacno potvrdi svoj mail i sifru, nakon cega se redirektuje na korisnicke stranice kojima nije moguce pristupiti ako odgovarajucitip korisnika nije login-ovan.<br>
Na admin-ovoj indeksnoj stranici nalazi se forma za importovanje podataka, gde se pomocu dugmeta "choose file" bira datoteka ciji se podaci ucitavaju (datoteka mora biti .csv, .xml i sl. tipova, u suprotnom prijavljuje se greska pri import-ovanju).
<br> Potom se pomocu dugmeta "import" podaci dodaju u bazu. Nakon cega dobijamo povrstnu poruku o uspesnom dodavanju podataka u bazu odnosno gresku ako smo odabrali pogresan tip fajla, odnosno dodavanje nije uspelo.
<br> Na member-ovoj pocetnoj stranici nalazi se pregled svih ucitanih knjiga sortiranih po imenu. Da bi se pristupilo nekoj dodatnoj informaciji o samoj knjizi dovoljno je kliknuti na kartizu sa odabranom knjigom, nakon cega se prelazi na novu stranicu.
<br> Na novoj stranici se nalaze informacije o knjizi (ime, autor/i, izdavac i godina izdanja). Na glavnoj stranici za pregled knjiga takodje se nalazi i forma za pretragu.
<br> Forma se sastoji od tekstualnog polja za unos imena trazene knjige, padajuce liste sa podacima o odabiru god izdanja (do 5 godina, do 10 godina, starije od 10 godina kao i nista od ponudjenog).
<br> Korisnik pretragu moze vrsiti na sledece nacine.
	
	<ul>
		<li>Samo po imenu knjige, pri cemu se u polje za naziv knjige doda trazeni tekst, a padajuca lista je postavljena na "none"</li>
		<li>Samo po godini izdanja, pri cemu je polje sa imenom prazno, a iz padajuce liste se bira jedna od gorenavedenih kategorija</li>
		<li>kombinovano, pri cemu se u polje za naziv knjige doda trazeni tekst, a iz padajuce liste se bira jedna od gorenavedenih kategorija</li>
	</ul>
	
<br> U slucaju pokusaj pretrage sa ne odabranom kategorijom iz liste odn praznim tekstualnim poljem za naziv povratni rezultat su sve knjige. Iste mogucnosti na svojoj stranici za pristup knjiga ima i admin.
<br> Na korisnickim stranicama u padajucoj listi navigacionog bara pored opcije logout, nalze se i polja za redirekciju na druge komponente.
<br> U slucaju admin-a to su polja "import data" i "books" koje respektivno vrse redirekciju na polje sa "import data" odnosno stranice za pregled knjiga,
odnosno samo "books" u slucaju membera.
</p>