=== CPS | Better WooCommerce ===
Contributors: CherryPickStudios, Surbma
Donate link: https://www.cherrypickstudios.com/
Tags: woocommerce, magyar, magyarország, webáruház, hungarian, hungary
Requires at least: 5.1
Tested up to: 5.3
Stable tag: 1.1
Requires PHP: 5.6
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A better WooCommerce experience with a lot of useful extras.

== Description ==

>A better WooCommerce experience with a lot of useful extras.

A WooCommerce a világ és most már Magyarország legnépszerűbb webáruház platformja is. De ez a tény a WooCommerce fejlesztőket nem érdekli annyira, hogy a magyar igényekhez igazítsák a bővítmény bizonyos funkcióit. Szerencsére adnak bőven lehetőséget a módosításokra, de ezekhez az átlag felhasználó nem ért. Ezért hoztam létre ezt a bővítményt, hogy a magyar WooCommerce webáruházak is végre rendben legyenek.

A funkciók folyamatosan bővülnek, de mindenki megírhatja a véleményét, ötletét, hogyan tudjuk egyre jobbá tenni ezt a bővítményt.

#### HuCommerce támogatói Facebook csoport

Csatlakozzatok a HuCommerce hivatalos támogatói Facebook csoportjához, ahol lehet a bővítménnyel kapcsolatban kérdezni, beszélhgetni, ötletelni. Mindenkit szívesen látunk: [HuCommerce Facebook csoport](https://www.facebook.com/groups/HuCommerce.hu/)

### A bővítmény funkciói

- Vezetéknév és keresztnév rendbetétele
- Adószám bekérése vásárlásnál
- Jogi megfelelés (Fogyasztóvédelem, GDPR, ePrivacy, stb.)
- Pénztár oldal formázása
- Megye mező elrejtése
- Plusz/minusz mennyiségi gombok a termékekhez
- Automatikus frissítés a Kosár oldalon
- Vásárlás folytatása gomb megjelenítése a Kosár és/vagy a Pénztár oldalakon
- Belépés és regisztráció utáni átirányítás
- Ingyenes szállítás értesítés
- Város automatikus kitöltése az irányítószám alapján
- Fordítási hiányosságok javítása
- WPML és Polylang kompatibilitás
- További funkciók hamarosan...

#### Vezetéknév és keresztnév rendbetétele

A keresztnév és vezetéknév sorrendjének a megfordítása, ha a webáruház magyar nyelvre van állítva. Ahogy mi szeretjük. :) Mindezt úgy, hogy reszponzív nézetben is jó legyen és a CRM, számlázó programok is tudják értelmezni.

A megjelenítés kompatibilis a WPML bővítménnyel, így többnyelvű webáruháznál is magyar sorrendben jelenik meg a név, ha magyar nyelven nézik a webáruházat a látogatók.

A név sorrendje a megrendelés visszaigazolásánál, a vásárló fiókjában és az értesítő levelekben is jól jelenik meg.

#### Adószám bekérése vásárlásnál

A Pénztár oldalon a Cégnév mező alatt már Adószámot is be lehet kérni. Az Adószám mező csak akkor jelenik meg, ha a Cégnév mezőbe lett írva. Az adószám ebben az esetben kötelező mező. Az adószám a rendelésen kívül az adott felhasználó profil adatainál is elmentésre kerül. Az adószám megjelenik mind a visszaigazoláson, mind a rendelés szerkesztésénél, valamint az értesítő levelekben is.

#### Jogi megfelelés (Fogyasztóvédelem, GDPR, ePrivacy, stb.)

Lehetőség van az Általános Szerződési Feltételek és az Adatkezelési tájékoztató aktív cselekvésen alapuló elfogadtatására, azaz ki kell pipálnia a vásárlónak ezek elfogadását, mielőtt a rendelést leadhatná. Az adatok a rendeléseknél kerülnek elmentésre és a rendelés szerkesztése oldalon megjelenik az elfogadott státusz. Ebben az esetben a vásárló profil adatainál nem kerül elmentésre az elfogadás, így azt bejelentkezve is minden vásárlás alkalmával el kell fogadnia.

Opcionális a két mező használata, így ha valakinek csak az egyik elfogadtatására és megerősítésére van szüksége, akkor egyik vagy másik kikapcsolható.

A Pénztár oldalon a Megrendelés gomb fölött és/vagy alatt közvetlenül elhelyezhető jogi szöveg, ami esetleg fontos vagy kötelező eleme a vásárlási folyamatnak. Ilyen például a távollévők közötti szerződéshez szükséges tudomásulvétel vagy a "fizetési kötelezettséggel járó megrendelés" kötelező megjelenítése a megrendelés során.

A regisztrációs űrlapnál is kérhető az Adatkezelési Tájékoztató kötelező elfogadtatása. Ez az adat már elmentésre kerül a felhasználó profil adatainál. Külön beállítható, hogy a felhasználó IP címét is elmentse a rendszer. A regisztrációs adatokat (elfogadás ténye, regisztráció dátuma, IP cím) mind az admin felületen, mind pedig a felhasználó fiókadatainál megjeleníti, de ezek a mezők nem módosíthatók sem a felhasználók, sem az adminisztrátorok részéről.

>**FIGYELEM!** A webáruház jogi megfelelése az aktuális törvényeknek és adatvédelmi rendeleteknek minden esetben a webáruház tulajdonosának a felelőssége. Ez az opció nem mentesít senkit sem az alól, hogy a megfelelést felülvizsgáltassa szakértővel vagy jogásszal. A fejlesztők nem vállalnak semmilyen felelősséget a webáruház jogi megfeleléséért.

#### Pénztár oldal formázása

Céges számlázási adatok feltételes megjelenítése. Ebben az esetben egy checkbox jelenik meg és ha a látogató bepipálja, akkor jelennek csak meg a céges számlázás mezői, mint például a Cégnév és Adószám.

A Cégnév és Adószám, az Irányítószám és Város, valamint a Telefonszám és Email cím mezőket nagy monitoron be lehet állítani, hogy egymás mellé kerüljenek. Az Irányítószám és Város mezők az Ország mező alatt jelennek meg közvetlenül, hogy logikusabb legyen a megjelenési sorrend.

Az Ország és a Rendelés jegyzetek mezőket akár ki is lehet kapcsolni, ha ezek a mezők nem relevánsak a te webáruházadnál. Ha az Ország mezőt elrejted, akkor a Bolt beállításainál kiválasztott ország lesz alapértelmezettként beállítva megrendelésnél.

#### Megye mező elrejtése

Mert ezt nálunk nem szokás használni, így csak plusz felesleges lépés. De ha valakinek nagyon kell, akkor visszaállítható.

#### Plusz/minusz mennyiségi gombok a termékekhez

A WooCommerce alapból csak egy szám típusú mezőt használ a termékek mennyiségénél, de ez felhasználói szemmel nézve nem elég. Ez a funkció a mennyiségi mező elé és után betesz egy plusz/minusz gombot, amivel a felhasználók könnyedén tudják változtatni a mennyiséget mind a termék végoldalon, mind pedig a kosár összegzés oldalán.

FIGYELEM! A gombok a különböző sablonoknál esetleg másképp vagy nem megfelelően jelenhetnek meg. Ez minden esetben javítható egy kis CSS segítségével. Én azon vagyok, hogy a lehető legnépszerűbb sablonoknál már automatikusan jól nézzen ki, illetve kap egy alap formázást is, hogy a legtöbb esetben megfelelő legyen, de biztosan lesznek olyan sablonok, ahol ez még így is igényel majd további CSS formázást. A bővítmény támogatás fórumában lehet ezeket jelezni, de nem tudom vállalni, hogy mindenkinek, gyorsan tudok segíteni.

Jelenleg ezeket a sablonokat támogatja alapból a bővítmény:

- Storefront
- Divi
- Avada

#### Automatikus frissítés a Kosár oldalon

A Kosár oldalon a termékek mennyiségének a módosításakor nincs szükség a "Kosár frissítése" gomb megnyomására a darabszám módosítása után, mert így automatikusan frissül a Kosár tartalma.

#### Vásárlás folytatása gomb megjelenítése a Kosár és/vagy a Pénztár oldalakon

A Kosár és a Pénztár oldalakon megjeleníthető egy plusz Vásárlás folytatása gomb, ami az üzlet oldalra viszi a látogatókat, hogy esetleg még tovább válogassanak a termékek között. Sokszor csak kíváncsiságból kattintanak a látogatók a Kosár gombra, de még nem fejezték be a vásárlásukat.

A gombok pozíciója mind a Kosár, mind a Pénztár oldalon beállítható, valamint van lehetőség egyedi üzenet megjelenítésére is bizonyos pozíciókban.

#### Belépés és regisztráció utáni átirányítás

Beállítható, hogy a látogatók a belépés és regisztráció után a meghatározott oldalra legyenek automatikusan átirányítva. A belépéshez és regisztrációhoz külön-külön állítható be a cél URL. A Pénztár oldalon nem veszi figyelembe az egyedi beállítást, hogy ott ne zavarja a vásárlás befejezését.

#### Ingyenes szállítás értesítés

A Kosár oldalon kijelzi, hogy mennyi vásárlási összeg hiányzik még az ingyenes szállításhoz. A szöveg módosítható és többnyelvűsíthető.

#### Város automatikus kitöltése az irányítószám alapján

A Pénztár oldalon az irányítószám mező kitöltése után automatikusan megjeleníti a várost. Ha már manuálisan lett módosítva a város, akkor nem módosítja az irányítószám alapján.

Vannak olyan irányítószámok, amikkel nem működik, mert vagy még hiányzik az indexből vagy egy irányítószám több településhez is tartozik. Igyekszem az ilyen hiányosságokat javítani.

#### Fordítási hiányosságok javítása

Ideiglenes fordítási hiányosságok javítása, amíg a hivatalos fordításban esetleg nem jelenik meg vagy nem frissíti a rendszer. Én hivatalos szerkesztője is vagyok a magyar WooCommerce fordítási csapatának, ezért ott sokmindent megcsinálok, de néha szükség van erre a kis trükkre.

#### WPML és Polylang kompatibilitás

A szöveges mezők kompatibilisek a WPML, Polylang bővítményekkel, így azok beállíthatók a különböző nyelveken is.

### Egyéb fejlesztői infók

#### Szeretnél résztvenni vagy segíteni a bővítmény fejlesztésében?

Megtalálod a teljes forráskódot a GitHub-on:
[https://github.com/CherryPickStudios/surbma-magyar-woocommerce](https://github.com/CherryPickStudios/surbma-magyar-woocommerce)

#### További bővítményeket és projekteket is találsz a GitHub oldalainkon:

- [Surbma GitHub](https://github.com/Surbma)
- [Cherry Pick Studios GitHub](https://github.com/CherryPickStudios)

Nyugodtan segíthetsz a bővítmények, sablonok és egyéb projektek fejlesztésében.

#### Szeretnél többet tudni rólunk és a szolgáltatásainkról?

Nézd meg a weboldalunkat: [HuCommerce.hu](https://www.hucommerce.hu/)

== Installation ==

### Automatikus telepítés

1. A "Bővítmények -> Új hozzáadása" menüpont alatt keress rá a *HuCommerce | Magyar WooCommerce kiegészítések* bővítményre.
2. A bővítmény dobozában kattints a "Telepítés most" gombra.
3. Telepítés után ugyanebben a dobozban kattints a "Bekapcsol" gombra, hogy aktiváld a *HuCommerce | Magyar WooCommerce kiegészítések* bővítményt.
4. A "CPS Plugins -> HuCommerce" menüpont alatt állítsd be, hogy melyik modult szeretnéd használni.
5. Ennyi az egész. :)

### Manuális telepítés az admin felületen

1. Töltsd le a bővítményt: [HuCommerce | Magyar WooCommerce kiegészítések](https://downloads.wordpress.org/plugin/surbma-magyar-woocommerce.zip)
2. Töltsd fel a `surbma-magyar-woocommerce.zip` fájlt a "Bővítmények -> Új hozzáadása" menüpont alatt a "Bővítmény feltöltése" gombra kattintva.
3. Aktiváld a *HuCommerce | Magyar WooCommerce kiegészítések* bővítményt a feltöltés után.
4. A "CPS Plugins -> HuCommerce" menüpont alatt állítsd be, hogy melyik modult szeretnéd használni.
5. Ennyi az egész. :)

### Manuális telepítés FTP használatával

1. Töltsd le a bővítményt: [HuCommerce | Magyar WooCommerce kiegészítések](https://downloads.wordpress.org/plugin/surbma-magyar-woocommerce.zip)
2. Tömörítsd ki a zip fájlt a számítógépeden.
3. Töltsd fel a `surbma-magyar-woocommerce` mappát a `/wp-content/plugins/` mappába.
4. Aktiváld a *HuCommerce | Magyar WooCommerce kiegészítések* bővítményt a "Bővítmények" menüpont alatt a WordPress admin felületen.
5. A "CPS Plugins -> HuCommerce" menüpont alatt állítsd be, hogy melyik modult szeretnéd használni.
6. Ennyi az egész. :)

== Frequently Asked Questions ==

= Hol találom a bővítmény beállításait? =

A *HuCommerce | Magyar WooCommerce kiegészítések* bővítmény beállításait a "CPS Plugins -> HuCommerce" menüpont alatt éred el.

= Nem cserélődtek meg a nevek a Pénztár oldalon. =

Először töröld a szerver oldali és a böngésző gyorsítótárát és frissítsd az oldalt! Győződj meg róla, hogy esetleg más bővítmény nem okoz-e konfliktust! Ha a fordítást módosítottad, az is lehet probléma. Illetve a sablonok is tartalmazhatnak olyan egyedi kódokat, amivel ez a funkció felülírható.

Figyelem! A nevek cseréje csak akkor történik meg, ha magyar nyelvre van állítva a webáruház.

= Mit jelent az, hogy Surbma? =

A vezetéknevem visszafelé. ;)

== Changelog ==

= 1.1 =

Release date: 2020-03-01

- Full re-branding on code level.

= 1.0 =

Release date: 2020-03-01

- Initial version.
