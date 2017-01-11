Mozilla Developer Network
===================

[FIGURE src="image/sak.png&w=1000&h=500" class="w50 center"]

[FIGURE src="image/mdn.png&w=1000&h=500" class="w50 center"]


Det första som MDN måste fixa är att sluta blockera renderingen av Javascript och CSS. Fixa responstiden till servern och göra så att knapparna och länkarna är större. Och ta del av webbläsarens caching


Dbwebb
===================
[FIGURE src="image/sak.png&w=1000&h=500" class="w50 center"]

[FIGURE src="image/dbwebb.png&w=1000&h=500" class="w50 center"]

Sidan laddar in all CSS via ett externt stylesheet. För att snabba upp renderingen kan man skjuta upp inläsningen av resurserna som blockerar renderingen, eller läsa in dem asynkront eller genom att infoga de viktigaste delarna direkt i HTML-koden, 
HTML-koden och “responsive-menu.js” bör också minifieras.
Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten
Förminska responsive-menu.js
Förminska HTML
(Uttnytja cachelagring, analytics.js)
Prioritera synligt innehåll


Blocket
===================

[FIGURE src="image/sak.png&w=1000&h=500" class="w50 center"]

[FIGURE src="image/blocket.png&w=1000&h=500" class="w50 center"]


Komprimera och formatera bilder, javascript, html och css så det går snabbare att hämta och tolka sidan. Detta sparar även många byte.


Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten
Utnyttja cachelagring i webbläsare(läsa in tidigare hämtade resurser från hårddisk istället för nätverk)
Aktivera komprimering
formatering och komprimering av bilder
Prioritera synligt innehåll(minska html)
Komprimera javascript
Komprimera HTML-kod, javascript och css som är inbäddat


Stackoverflow
===================
[FIGURE src="image/sak.png&w=1000&h=500" class="w50 center"]

[FIGURE src="image/stackoverflow.png&w=1000&h=500" class="w50 center"]


Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten
Det finns 3 skriptresurser och 1 CSS-resurser som blockerar renderingen av sidan. Det gör att renderingen tar längre tid.
Optimera bilder
Korrekt formatering och komprimering av bilder kan spara många byte.
Optimera följande bilder för att minska storleken med 936 kB (97 % reduktion).
Komprimera och formatera bilderna för att få en snabbare laddningstid på http://stackoverflow.com/users. Bilderna är mycket större än dom borde vara. 
Utnyttja cashing.
Inte blockera JavaScript och CSS.
 Med hjälp av att ta bort JavaScript samt CSS-kod som blockerar renderingen så får man en snabbare laddningstid på sin webbplats.
 
 
####Sammanfattning

Med hjälp av att ta bort JavaScript samt CSS-kod som blockerar renderingen så får man en snabbare laddningstid på 
sin webbplats. Även komprimering och formatering av bilder kan förbättra sidans laddningstid.

 
####Laddningstid
 
En laddningstid på under två sekunder är ett bra värde. Värden mellan två och fyra sekunder anser vi vara 
en acceptabel laddningstid. Webbplatser med laddningstid på över fem sekunder bör kolla upp förbättringar
av javascript, html, css, bilder med mera.
 
 
####Medlemmar

Magnus, Olof, Ara, Niklas. 
 