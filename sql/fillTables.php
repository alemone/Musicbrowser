<?php
$db = new mysqli('localhost', 'root', '', 'musicbrowser');
if (!$db) {
    die('Verbindung fehlgeschlagen\n Error: ' . mysql_error());
}

$db->set_charset("utf8");

//Künstler
$test = $db->query("INSERT INTO `kuenstler` (`pk_kuenstler`, `name`, `beschreibung`, `bildpfad`) VALUES (
    NULL, 
    'Milky Chance', 
    'Milky Chance ist ein deutsches Folktronica-Duo, bestehend aus Clemens Rehbein und Philipp Dausch. Nachdem ihre erste, selbst produzierte Single Stolen Dance 2012 auf YouTube überraschend mehrere hunderttausend Clicks generierte, gründeten die beiden Kasseler eine eigene Plattenfirma, auf der sie am 31. Mai 2013 ihr Debütalbum Sadnecessary veröffentlichten. Mit den Singles Stolen Dance, Down by the River und Flashed Junk Mind erreichten sie unter anderem in Deutschland, Österreich, der Schweiz, Polen, Wallonien und Frankreich den ersten Platz der Singlecharts. In den Niederlanden erreichte Stolen Dance den zweiten Platz. Weitere Top-Ten-Platzierungen gab es unter anderem in Italien, Kanada, Australien und Neuseeland. 2014 wurde der US-amerikanische Markt auf das Duo aufmerksam. So zeichnete die Musikzeitschrift Spin Sadnecessary als „Album der Woche“ aus und als erste deutsche Band hatten sie einen Auftritt bei der Late-Night-Show Jimmy Kimmel Live!. Die Band gewann Preise wie den European Border Breakers Award, sowie den Echo „Bester nationaler Act im Ausland“. Nach einer Festivaltour, mit Stationen wie Coachella und Lollapalooza, veröffentlichte die Band Anfang November 2016 die Single Cocoon.', 
    'milkychance.gif')");

$test = $db->query("INSERT INTO `kuenstler` (`pk_kuenstler`, `name`, `beschreibung`, `bildpfad`) VALUES (
    NULL, 
    'Tom Odell', 
    'Thomas Tom Peter Odell ( 24. November 1990 in Chichester) ist ein britischer Singer-Songwriter und Pianist. Mit sieben Jahren begann Tom Odell mit dem Klavierspielen, später schrieb er auch seine eigenen Songs. Mit 18 zog er von West Sussex nach Brighton, wo er am renommierten Institute of Modern Music seine musikalische Ausbildung fortsetzte. Daneben trat er auch solo auf und gründete schließlich eine Band, mit der er auch in London auftrat. Dort wurde er von Lily Allen entdeckt und für ihr eigenes Label In the Name Of verpflichtet. Er erhielt einen Plattenvertrag und nahm 2012 sein Debütalbum auf.
    Im Oktober 2012 wurde vorab eine erste EP mit dem Titel Songs from Another Love veröffentlicht. Einem Auftritt bei Later with Jools Holland folgte die Nominierung für die Talent-Awards der BBC (Sound of 2013) und MTV sowie für den Critics Choice Award der Brits, den er gewann. Die Aufmerksamkeit verhalf auch seinem Song Another Love zum Einstieg in die Top 75 der UK-Charts. In Deutschland und Österreich wurde das Lied in einer Werbekampagne der Telekom-Mobilfunksparte eingesetzt. Auch in anderen europäischen Ländern konnte sich das Lied in den Charts platzieren, unter anderem erreichte es die Top 10 in den Niederlanden. Das Debütalbum Long Way Down erschien im Juni 2013. Sein zweites Album Wrong Crowd ist am 10. Juni 2016 erschienen.', 
    'tomodell.gif')");   

$test = $db->query("INSERT INTO `kuenstler` (`pk_kuenstler`, `name`, `beschreibung`, `bildpfad`) VALUES (
    NULL, 
    'The Rolling Stones', 
    'The Rolling Stones sind eine 1962 gegründete englische Rockband. Sie zählen zu den langlebigsten und kommerziell erfolgreichsten Gruppen in der Rockgeschichte. 1989 erfolgte die Aufnahme in die Rock and Roll Hall of Fame.  Folgt man den Ausführungen des späteren Rolling-Stones-Bassisten Bill Wyman, so hatte Brian Jones sich bei dem englischen Bandnamen The Rolling Stones (wörtlich übersetzt: „Die rollenden Steine“, sinngemäß „Die Landstreicher/Herumtreiber“) von der Zeile “I’m a rollin’ stone” im Muddy-Waters-Blues Mannish Boy aus dem Jahr 1956 inspirieren lassen. Keith Richards dagegen führt die Wahl des Namens genauso wie Dick Taylor auf das 1950 ebenfalls von Muddy Waters aufgenommene Stück Rollin’ Stone (bzw. Rollin’ Stone Blues, wie der Titel unter anderem auf britischen Schallplatten der 1950er Jahre heißt) zurück. Die in den beiden Liedern verwendete Allegorie „rolling stone“, die je nach Kontext sowohl eine positive als auch negative Konnotation haben kann, ging aus dem englischen Sprichwort “A rolling stone gathers no moss.” hervor und bezeichnet eine Person mit unstetem Lebenswandel. Zu Beginn nannte sich die Gruppe (unter Weglassung des g) noch „The Rollin’ Stones“, laut Dick Taylor aufgrund ebendieser Schreibung des Titels Rollin’ Stone Blues auf einer Schallplatte von Muddy Waters.
', 
    'rollingstones.gif')");   

$test = $db->query("INSERT INTO `kuenstler` (`pk_kuenstler`, `name`, `beschreibung`, `bildpfad`) VALUES (
    NULL, 
    'Metallica', 
    'Metallica ist eine US-amerikanische Metal-Band. Sie wurde 1981 in Los Angeles gegründet und ist seit 1982 in San Francisco ansässig. Sie gehört zu den erfolgreichsten Metalbands der Welt und hat bislang über 110 Millionen Alben verkauft. Allein in den USA verkaufte die Band über 62 Millionen Alben und ist damit die siebterfolgreichste Künstlergruppe des Landes. Metallica wurde neunmal mit einem Grammy Award ausgezeichnet.

    Neben Slayer, Megadeth und Anthrax zählte Metallica in den 1980er Jahren zu den „großen Vier“ des Thrash Metal und gilt als die einflussreichste Metal-Band dieses Jahrzehnts. Während der 1990er-Jahre öffnete sich Metallica neuen musikalischen Einflüssen wie Bluesrock und anderen Rockstilen, womit sie ein breiteres Publikum ansprach und zugleich ihre bisherigen Fans irritierte, bevor die Band ab 2002 wieder zu ihren musikalischen Wurzeln zurückkehrte.', 
    'metallica.gif')"); 

//Album
$db->query("INSERT INTO `album` (`pk_album`, `name`, `pfad`, `fk_kuenstler`) VALUES (NULL, 'Sadnecessary', 'milkychance.gif', '1')");
$db->query("INSERT INTO `album` (`pk_album`, `name`, `pfad`, `fk_kuenstler`) VALUES (NULL, 'Wrong Crowd', 'tomodell.gif', '2')");
$db->query("INSERT INTO `album` (`pk_album`, `name`, `pfad`, `fk_kuenstler`) VALUES (NULL, 'Blue & Lonesome', 'rollingstones.gif', '3')");
$db->query("INSERT INTO `album` (`pk_album`, `name`, `pfad`, `fk_kuenstler`) VALUES (NULL, 'Hardwired... To Self-Destruct', 'metalica.gif', '4')");

//Songs
$db->query("INSERT INTO `song` (`name`, `fk_album`, `bild`, `bewertung`, `youtubeLink`) VALUES ('Stunner', '1', 'milkychance.gif', '24', 'https://www.youtube.com/watch?v=HHPLi3hW0jU')");
$db->query("INSERT INTO `song` (`name`, `fk_album`, `bild`, `bewertung`, `youtubeLink`) VALUES ('Flashed Junk Mind', '1', 'milkychance.gif', '13', 'https://www.youtube.com/watch?v=r8BsuT0PWdI')");
$db->query("INSERT INTO `song` (`name`, `fk_album`, `bild`, `bewertung`, `youtubeLink`) VALUES ('Becoming', '1', 'milkychance.gif', '14', 'https://www.youtube.com/watch?v=o0DCDlRGlzM')");


$db->query("INSERT INTO `song` (`name`, `fk_album`, `bild`, `bewertung`, `youtubeLink`) VALUES ('Wrong Crowd', '2', 'tomodell.gif', '46', 'https://www.youtube.com/watch?v=uvosjKUKCLo')");
$db->query("INSERT INTO `song` (`name`, `fk_album`, `bild`, `bewertung`, `youtubeLink`) VALUES ('Magnetised', '2', 'tomodell.gif', '13', 'https://www.youtube.com/watch?v=4fgzu9Fo66Y')");
$db->query("INSERT INTO `song` (`name`, `fk_album`, `bild`, `bewertung`, `youtubeLink`) VALUES ('Concrete', '2', 'tomodell.gif', '35', 'https://www.youtube.com/watch?v=bnZxWpwvFEk')");

$db->close();
?>