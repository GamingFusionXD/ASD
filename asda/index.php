
1. INSERT INTO `wynik` (`id`, `bmi_id`, `data_pomiaru`, `wynik`) VALUES (NULL, '1', '2020-05-20', '15');
2. SELECT id, informacja, wart_min from bmi; 
3. SELECT wynik.wynik, bmi.informacja, bmi.wart_min from wynik, bmi where bmi.id=wynik.bmi_id; 
4. SELECT bmi.wart_min, bmi.wart_max from bmi where informacja like "niedowaga"; 
