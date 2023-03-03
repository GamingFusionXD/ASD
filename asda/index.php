1. UPDATE nazwaTabeli SET miejscowosc = "Katowice";

2. UPDATE nazwaTabeli SET miejscowosc = "Katowice" where imie like "Agnieszka" and nazwisko like "Nowak";

3. DELETE FROM nazwaTabeli WHERE imie like "Rafal";

4. DELETE FROM nazwaTabeli WHERE nazwisko like "nowak" limit 3; 

===============================================================================================================================================================================

1. Select imie,nazwisko from klient;

2. select * from ksiazki;

3. select distinct(miejscowosc) from klient;

4. select (cena*0.8) as "cena promocyjna" from ksiazka;

===============================================================================================================================================================================

1. insert INTO ksiazki VALUES(1,"Projektowanie stron internetowych",1,35,"Helion","Internet",null,null,null,null)

2. insert INTO ksiazki VALUES(2,"Aplikascje internetowe",2,57,"Helion","Internet",null,null,null,null),(3,"SQL Server 2008",3,45,"PWN","Bazy Danych",null,null,null,null)

3. insert INTO klient (nazwisko, imie,PESEL) values ("Nowak", "Andrzej", "78021203121"),("Kowalski","Jan","81092902821"),("Gorski","Antoni","89120217239")

4. insert INTO klient VALUES(null,"Adamska","Anna","87-100","Toruń","Górna","7",null,"123456789",null),(null,"Bolecki","Miłosz","45-404","Opole","Nowa","24",null,"234567891",null),(null,"Wilk","Dawid","87-100","Toruń","Szeroka","1",null,"345678912",null),(null,"Żak","Jan","45-404","Opole","Mała","45",null,"456789123",null); 

5. insert INTO zamowienie VALUES(2,"2022-12-12","2022-12-13","13",2,1)

===============================================================================================================================================================================

1.1. INSERT INTO `ksiazki` (`id_ksiazki`, `tytul`, `id_Autor`, `cena`, `wydawnictwo`, `temat`, `miejsce_wydania`, `jezyk_ksiazki`, `opis`, `rok_wydania`) VALUES ('4', 'Lalka', '1', '10', 'Opera', 'Nie czytaj pls', 'Warszawa', 'Polski', 'Nie czytaj pls Nie czytaj pls Nie czytaj pls', '1999'); 

1.2. INSERT INTO `ksiazki` (`id_ksiazki`, `tytul`, `id_Autor`, `cena`, `wydawnictwo`, `temat`, `miejsce_wydania`, `jezyk_ksiazki`, `opis`, `rok_wydania`) VALUES ('5', 'Dziady', '2', '200', 'Opera', 'Nie czytaj pls', 'Warszawa', 'Polski', 'Opis jakiegos gowna', '1999');

1.3. INSERT INTO `ksiazki` (`id_ksiazki`, `tytul`, `id_Autor`, `cena`, `wydawnictwo`, `temat`, `miejsce_wydania`, `jezyk_ksiazki`, `opis`, `rok_wydania`) VALUES ('6', 'Mekambe', '3', '10', 'Opera', 'Historia Mekambe', 'Warszawa', 'Polski', 'Nudne fest', '1999'); 

2.1. INSERT INTO `autor` (`id_Autor`, `nazwisko`, `imie`, `narodowosc`, `okres_tworzenia`, `jezyk`, `rodzaj_tworczosci`, `osiagniecia`) VALUES ('1', 'Duda', 'Andrzej', 'Polska', '1990-2023', 'Polski', 'Nudne', 'Brak');

2.2. INSERT INTO `autor` (`id_Autor`, `nazwisko`, `imie`, `narodowosc`, `okres_tworzenia`, `jezyk`, `rodzaj_tworczosci`, `osiagniecia`) VALUES ('2', 'Kusz', 'Olaf', 'Polska', '2004-2022', 'Każdy', 'Najlepsza', 'Wszystkie możliwe');

3. UPDATE `ksiazki` SET `jezyk_ksiazki` = 'Polski' where rok_wydania>=2018

4. UPDATE `klient` SET `kod_pocztowy` = '87-100', `miejscowosc` = 'Toruń', `ulica` = 'Szeroka', `nr_domu` = '34' WHERE `klient`.`id_Klienta` = 2; 

===============================================================================================================================================================================

1. SELECT COUNT(*) from klient where miejscowosc LIKE "opole"

2. delete from klient where miejscowosc LIKE "Toruń" and ulica is null; 

3. select * from klient; 

4. select DISTINCT(imie), miejscowosc,kod_pocztowy from klient; 

5. SELECT cena*1,07,tytul from ksiazki; 

6. SELECT nazwisko from klient where telefon is null; 

===============================================================================================================================================================================

1. select count(*) as "iczba Ksiazek" from ksiazki

2. select round(sum(cena),2) as "razem" from ksiazki

3. select round(avg(cena),2) as "średnia" from ksiazki

4. select round(avg(cena),2) as "średnia-php" from ksiazki where nazwa like "%php%"

===============================================================================================================================================================================

1. select max(cena) as "Najwyzsza cena" from ksiazki;

2. select min(data_zlozenia_zamowienia) as "Najstarsze zamowienie" from zamowienie;

3. select rok_wydania, liczba_egzemplarzy as "Liczba egzemplarzy" from klient;

4. SELECT COUNT(klient), miejscowosc from klient AS "Liczba klientow" order by 1 asc;

===============================================================================================================================================================================

1. select ksiazki.tytul, ksiazki.cena from ksiazki group by 2; 

2. select ksiazki.tytul, ksiazki.cena from ksiazki group by 2 DESC; 

3. select ksiazki.tytul, ksiazki.cena*1.10 from ksiazki;

4. select CONCAT(imie, " ", nazwisko) AS "klient", CONCAT(kod_pocztowy, " ", miejscowosc) AS "Miasto", CONCAT(ulica, " ", nr_domu) AS "Adres" from klient

===============================================================================================================================================================================

1. select ksiazki.tytul, ksiazki.wydawnictwo, ksiazki.rok_wydania from ksiazki order by ksiazki.cena limit 2;

2. select COUNT(*) from klient; 

3. SELECT AVG(cena) from ksiazki; 

4. SELECT DISTINCT(klient.miejscowosc) from klient;

5. SELECT COUNT(*) from ksiazki where ksiazki.rok_wydania>2017; 

===============================================================================================================================================================================

1. SELECT count(klient.imie),miejscowosc from klient group by 2 order by 1 desc limit 3; 

2. select wydawnictwo, avg(cena) as "srednia" from ksiazki where temat is not null group by wydawnictwo having srednia>=30;

===============================================================================================================================================================================

1. select distinct(tytul),imieautora,nazwiskoautora from autor;

2. select imie, nazwisko, tytul from klient,ksiazka,zamowienie where klient.idklient=zamówienie.idklient and zamówienie.idksiazki=ksiazki.idksiazki;

3. select imie,nazwisko from ksiazka inner join klient

4. select * from klient,zamowienie where klient.idklient=zamówienie.idklient and zamówienie.idksiazki=ksiazki.idksiazki 

===============================================================================================================================================================================

1. select imie,nazwisko from klient,zamowienie where idklient in (select idklient from zamówienie where idksiazki=3);

2. select tytul,imieautora,nazwiskoautora,cena from ksiazka where cena>(select avg(cena) from ksiazka);

3. select tytul,cena from ksiazka where rok_wydania<2012; 

===============================================================================================================================================================================

1. alter TABLE ksiazki add FOREIGN key id_autor REFERENCES autor(id_autor);

2. alter table ksaizki drop foraign key(id_autor);

3. alter table ksiazki add constraint klucz foraing key id_autor references autor(id_autor) on delete cascade on delete cascade;

4. select imie,nazwisko from klient where miejscowosc like "warszawa" union(select imie, nazwisko from klient where miejscowosc like "gdansk");

5. select imie,nazwisko from klient where miejscowosc like "warszawa" or miejscowosc like "gdansk";

6. select imie,nazwisko from klient where adres,adres_mail is intersect select imie,nazwisko;

===============================================================================================================================================================================
14:01 09.02.2023
1. CREATE USER 'mod'@'localhost' IDENTIFIED BY 'zaq1@WSX2018';

2. select password "zaq1@WSX2018";

3. CREATE USER 'uzytkownik1'@'%' IDENTIFIED BY 'haslo';

4. CREATE USER 'uzytkownik1'@'123.159.11.15' IDENTIFIED BY 'haslo';

5. grant select on baza.samochody to 'user1'@'localhost';

6. grant alter, delete on komis.* to 'user1'@'localhost';

7. revoke delete on komis.* to 'user1'@'localhost';

===============================================================================================================================================================================

1. SELECT count(*) FROM gatunki where nazwa_zwyczajowa like "%biegus%"; 

2. SELECT lokalizacja FROM lokalizacje order by lokalizacja;

3. SELECT powiat, COUNT(lokalizacja) FROM `lokalizacje` GROUP by powiat; 

4. SELECT distinct(zachowanie) FROM `obserwacje` order by zachowanie;


===============================================================================================================================================================================
12:24 15.02.2023
1. 
