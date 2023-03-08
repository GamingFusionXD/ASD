1. SELECT czas, kierunek, nr_rejsu, status_lotu from przyloty order by czas desc; 
2. SELECT COUNT(*) FROM `przyloty` WHERE czas BETWEEN '10:00' and '10:59'; 
3. SELECT przyloty.nr_rejsu, samoloty.typ from przyloty, samoloty where samoloty.id=przyloty.samoloty_id and przyloty.kierunek like "Warszawa";
4. UPDATE `odloty` SET `status_lotu` = 'opznienie 20 min' WHERE `odloty`.`id` = 5; 
