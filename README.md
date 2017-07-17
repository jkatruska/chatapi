Vytvorte online responzívnu chatovaciu aplikáciu. Bude slúžiť na priamu komunikáciu medzi zaregistrovanými používateľmi, ktorí okrem priamej vzájomnej súkromnej komunikácie 
budú vedieť diskutovať aj v skupinách, v ktorých sa nachádza viacero používateľov.

Pre fungovanie aplikácie využite aj možnosti lokálneho ukladania údajov poskytované cez nové HTML5 API (LocalStorage a pod.). Aplikáciu kreujte predovšetkým na frontende - 
napríklad načítavanie príspevkov riešte prostredníctvom JavaScriptu (a rozširujúcich knižníc). Responzívny design riešte aj s CSS kompilátormi, využívajte v čo najväčšej 
miere ich schopnosti.

V serverovej časti navyrhnite a vytvorte API, ktorá bude poskytovať údaje klientom na požiadanie. FE časť aplikácie bude využívať práve túto API na komunikáciu so serverom. 
Serverovú API pokryte tiež unit testami. Z tejto serverovej časti (funkčná API, testovateľná) vytvorte aj Composer balíček, ktorý bude možné integrovať do iných riešení.

Bonusové schopnosti aplikácie (riešte len v prípade, že máte kompletne splnené iné zadané veci): webpush notifikácie používateľom o novej správe, podpora markdownu v 
správach, emojis

