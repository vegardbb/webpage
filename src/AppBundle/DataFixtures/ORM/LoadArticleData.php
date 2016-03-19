<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Article;

class LoadArticleData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $article1 = new Article();
        $article1->setTitle('VEKAS VEKTOR&shy;ASSISTENT! MØT TORSTEIN!');
        $article1->setImageLarge('images/1124.jpg');
        $article1->setImageMedium('images/medium/1124.jpg');
        $article1->setImageSmall('images/small/1124.jpg');
        $article1->setSticky(false);
        $text1 = <<<'EOT'
            <p><strong>Ukens vektorassistent er 24 år gamle Torstein Eidsnes Penne fra Bærum. Han går siste året på fysikk og matematikk, og holder nå på med masteroppgaven. Torstein har tidligere vært leder for skolekoordinering i vektorprogrammet, og er dette semesteret utplassert som vektorassistent på Ugla ungdomsskole.</strong></p><p><strong>I dette intervjuet blir vi bedre kjent med Torstein, og får blant annet vite hvorfor akkurat han har valgt å bli vektorassisitent.</strong></p><h6>Hva var favorittfaget ditt på ungdomsskolen?</h6><p>Favorittfagene på ungdomsskolen var matte og naturfag. Jeg likte realfagene best.</p><h6>Hvorfor likte du matte så godt på ungdomsskolen?</h6><p>Jeg synes matte er veldig greit, fordi man kan komme frem til svarene selv, dersom man har forstått prinsippene. På ungdomsskolen var det ikke rom for tolkning i matte, slik det var i for eksempel norsk. Det likte jeg godt, da jeg ikke var spesielt god i tolkning. Jeg likte også godt at jeg kunne jobbe med matte på egenhånd, dersom jeg fikk det til.</p><h6>Hvorfor har du valgt å studere fysikk og matematikk?</h6><p>Fysikk og matematikk er de to fagene jeg interesser meg for, så når en linje tilbyr akkurat disse fagene passer det perfekt. I tillegg kan jeg jobbe med nesten hva som helst når jeg er ferdig utdannet. Da jeg søkte på studier etter videregående, søkte jeg faktisk kun på matte- og fysikklinjer.</p><h6>Kan du beskrive din typiske studiehverdag for øyeblikket?</h6><p>Akkurat nå holder jeg på med masteroppgaven, så hverdagen er litt uregelmessig. Hvis jeg er flink, står jeg opp tidlig og sitter lenge på labben til jeg har fått gjort mange eksperimenter. Deretter sjekker jeg resultatene og ser om de ser ut til å stemme.</p><h6>Kan du beskrive drømmelæreren?</h6><p>Drømmelæreren er en som gir deg motivasjon til å gjøre lekser fordi du har lyst til å lære mer og vite hvordan ting fungerer, ikke fordi det er obligatorisk. Læreren må skape interesse, slik at du blir nysgjerrig på å finne ut hva som blir det neste i faget.</p><h6>Hvorfor har du valgt å være vektorassistent?</h6><p>Jeg var med på den aller tidligste delen av vektorprogrammet, da det var et tek.led.-prosjekt. Jeg synes det er gøy at det nå har blitt såpass stort, og har lyst til å være med på å gjøre det enda større og bedre. Jeg mener vektor er blant det beste du kan gjøre som frivillig i Trondheim, og det er noe jeg skulle ønske hadde eksistert da jeg selv gikk på ungdomsskolen.</p><h6>Hva har du lært av å være vektor?</h6><p>Jeg har lært å se annerledes på matematikkfaget. Når man har gått lenge på NTNU med realfag, er man ganske vant til at folk er gode i matte. Her er alle ganske like, og de får til matte. Når man kommer ut på ungdomsskolen er det ikke lenger sånn, og man må tenke annerledes. Jeg har blitt flinkere til å forklare ting, og å lære bort. Man trenger ikke å være så flink til å lære bort, hvis man skal hjelpe noen som kan det. Men når man skal lære bort til folk som ikke kan det, da lærer man mye. I tillegg regner jeg oppgaver jeg ikke har gjort på 10 år, og det er litt uvant.</p>
EOT;
        $article1->setArticle($text1);
        $article1->setAuthor($this->getReference('user-1'));
        $article1->addDepartment($this->getReference('dep-1'));
        $manager->persist($article1);

        $article2 = new Article();
        $article2->setTitle('VEKAS VEKTOR&shy;ASSISTENT! MØT BEATE!');
        $article2->setImageLarge('images/1122.jpg');
        $article2->setImageMedium('images/medium/1122.jpg');
        $article2->setImageSmall('images/small/1122.jpg');
        $article2->setSticky(false);
        $text2 = <<<'EOT'
            <p><strong>Ukens vektorassistent er 21 år gamle Beate Meisland Østrådt fra Sandnes. Hun studerer Industriell kjemi og bioteknologi på NTNU, hvor hun går i 2. klasse. Beate er vektorassistent for første gang dette semesteret, og er utplassert på Nidaros Idrettsungdomsskole.</strong></p><p><strong>I dette intervjuet blir vi bedre kjent med Beate, og får vite hvorfor hun har valgt å bli vektorassistent.</strong></p><h6>Hva var favorittfaget ditt på ungdomsskolen?</h6><p>Favorittfaget mitt på ungdomsskolen var naturfag. Jeg synes det var interessant, og det pirret nysgjerrigheten min. I tillegg var det et fag jeg mestret, det er ofte en viktig faktor for om man liker et fag eller ikke.</p><h6>Hvorfor var ikke matte favorittfaget?</h6><p>Da jeg gikk på ungdomsskolen var jeg litt over gjennomsnittlig god i matte, men jeg trengte mye øving, noe som kom sakte men sikkert. Jeg synes derfor matte ble ett ork, da jeg opplevde å ikke mestre faget. I tillegg var det mange deler av pensumet jeg ikke likte, men man måtte jo gjennom alt. Heldigvis ble jeg bedre i matte i løpet av ungdomsskolen.</p><h6>Har ditt syn på matte endret seg?</h6><p>Ja, absolutt. Jeg har et veldig annet syn på matte i dag. Etter hvert som jeg har vokst opp, har jeg skjønt mer og mer behovet for matte, og hva det brukes til. I tillegg mestrer jeg det hele tiden bedre, jeg blir flinkere og lærer mer. Nå forstår jeg hvorfor vi lærer det vi gjør, for eksempel hvorfor man lærer geometri på ungdomsskolen. Nå synes jeg det er veldig viktig at alle kan den grunnleggende matematikken. Jeg tror det er lett å føle seg dum, men med hverdagsmatematikken inne, kan man komme seg langt.</p><h6>Hvorfor er du vektorassistent?</h6><p>Jeg er vektorassistent fordi jeg vil engasjere meg i noe jeg synes er viktig. Det finnes utrolig mange verv der ut som man kan engasjere seg i som student, men for meg var det viktig å velge et som gir noe til andre, ikke bare deg selv. Som vektorassistent gjør du noe for samfunnet, og folk utenfor studentmiljøet. Jeg kan være med å skape interesse for realfag og teknologi, og ungdomsskoleelever får se at det faktisk går an å bli god i disse fagene.</p><h6>Hvordan vil du beskrive drømmelæreren?</h6><p>Drømmelæreren min er engasjert, god i å undervise og hjelpe elevene. Det er viktig at læreren ser at ikke alle elever er like, og dermed ser hver enkelt elevs behov. Læreren må også være en god retorikker som kan fange oppmerksomhet og skape interesse. Det siste jeg vil nevne er at læreren må være en god pedagog, som vet hvordan man lærer bort ting.</p><h6>Hva har du lært som vektorassistent?</h6><p>Jeg har blant annet lært at ungdomsskoleelever kan mer enn du tror. Jeg har også lært at når du skal lære bort noe, må du alltid ha flere forskjellige måter å forklare det på. Det er ikke alltid at den metoden du tror er lettest, er den som får eleven til å forstå stoffet. Når eleven ikke skjønner noe, må du kunne forklare det på en annen måte. Det nytter ikke å gjenta det samme om og om igjen.</p><h6>Hva gjør du på fritiden?</h6><p>På fritiden er jeg mye med venner. Da lager vi ofte mat sammen, går på kino, går turer eller er på fester. I tillegg er jeg glad i å trene. Da går det i variert trening med pilates, utholdenhet og styrke.</p>
EOT;
        $article2->setArticle($text2);
        $article2->setAuthor($this->getReference('user-2'));
        $article2->addDepartment($this->getReference('dep-1'));
        $manager->persist($article2);

        $article3 = new Article();
        $article3->setTitle('VEKAS VEKTOR&shy;ASSISTENT! MØT SIRI!');
        $article3->setImageLarge('images/1094.jpg');
        $article3->setImageMedium('images/medium/1094.jpg');
        $article3->setImageSmall('images/small/1094.jpg');
        $article3->setSticky(true);
        $text3 = <<<'EOT'
            <p><strong>Ukens vektorassistent er 20 år gamle Siri Eskeland fra Bærum. Hun studerer tekniske geofag og går i 2. klasse. Siri har en dobbelstilling som vektorassistent på Nidaros idrettsungdomsskole skole, og er i tillegg med i hovedstyret til vektorprogrammet. Siden april i fjor har hun vært leder for rekruteringsteamet i vektor, og 18. februar ble hun valgt til nestleder i organisasjonen.</strong></p><p><strong>I dette intervjuet blir vi bedre kjent med Siri og får vite hvorfor akkurat hun har valgt å bli vektorassistent.</strong></p><h6>Hva var favorittfaget ditt på ungdomsskolen?</h6><p>Da jeg gikk på ungdomsskolen hadde jeg to favorittfag, det ene var gym og det andre naturfag.</p><h6>Hvorfor var ikke matte favorittfaget?</h6><p>Jeg synes matte var vanskelig da jeg gikk på ungdomsskolen. Det var et fag man måtte jobbe mye med, og det ble mye oppgaveregning. Man måtte regne samme type oppgaver om, og om igjen. Det synes jeg ble kjedelig.</p><h6>Hvorfor har du valgt å være vektorassistent?</h6><p>Det er mange grunner til at jeg har valgt å være vektorassistent! Det er gøy å kunne være et forbilde for elevene, i tillegg til at jeg kunne ønske at jeg selv hadde fått et slikt tilbud da jeg gikk på ungdomsskolen. Jeg tror det er veldig sunt at det kommer en utenfra som kan delta og hjelpe til i mattetimene, og jeg tror det vi gjør er veldig viktig. At jeg er vektorassistent en gang i uken gir meg også etterlengtet variasjon i hverdagen, noe jeg trives godt med. Det siste jeg vil trekke frem er at det føles bra å kunne hjelpe andre, og det er selvfølgelig deilig å føle seg smart!</p><h6>Kan du beskriv drømmelæreren?</h6><p>Drømmelæreren min er en inkluderende lærer som inspirerer. Det er ikke nødvendigvis den sterkeste faglig, men en som er åpen for nye ting og varierer læringen. Det er også viktig at personen er forståelsesfull og ikke firkantet.</p><h6>Hva har du lært som vektorassistent?</h6><p>Jeg har blant annet lært at 8. klassinger ikke er så små som du tror. Mange av dem har sterke meninger, og det finnes mange smarte ungdommer i klassene. De er ofte mye smartere enn de selv tror, og da er det viktig at jeg kan bidra til at de begynner å tro på seg selv, og innser hva de faktisk kan.</p><h6>Hva liker du å gjøre på fritiden?</h6><p>På fritiden liker jeg å lage mat, trene og jobbe som nestleder i vektor. Det er alltid mye som skal gjøres i forbindelse med ledervervet. Andre ting jeg gjerne bruker tiden min på, er å gå på tur, selv om jeg er litt for dårlig til å komme meg ut. I ferier liker jeg meg best på hytta på Sørlandet.</p><h6>Hva drømmer du om å bli når du blir stor?</h6><p>Etter at jeg begynte som vektorassistent, har jeg funnet ut at jeg vil bli lærer. Men jeg skal fullføre sivilingeniørgraden først. Den kan være god å ha hvis jeg ombestemmer meg. Det er jo ikke alle sider av læreryrket jeg får testet ut som vektorassistent.</p><h6>Hvorfor skal andre melde seg som vektorassistenter?</h6><p>Jeg synes vektor er et av de mest givende vervene man kan ha. Du gir virkelig noe tilbake til samfunnet. Det er nesten litt sånn at «jeg var ikke i militæret, men jeg var vektor» så da har jeg liksom gjort noe for samfunnet likevel. Det kjennes godt. I tillegg gir det variasjon i studiehverdagen, du får en fin attest og det ser bra ut på CV-en. Det skjer også mye sosialt, spesielt hvis du blir med i styret.</p>
EOT;
        $article3->setArticle($text3);
        $article3->setAuthor($this->getReference('user-3'));
        $article3->addDepartment($this->getReference('dep-1'));
        $manager->persist($article3);

        $article4 = new Article();
        $article4->setTitle('VEKTOR&shy;PROGRAMMET TILBYR FORELDREKURS!');
        $article4->setImageLarge('images/28.png');
        $article4->setImageMedium('images/medium/28.png');
        $article4->setImageSmall('images/small/28.png');
        $article4->setSticky(false);
        $text4 = <<<'EOT'
            <p><strong>Vektorprogrammet har stor glede av å invitere foreldre med born på ungdomstrinnet til gratis foreldrekurs! To kveldar i mars tilbyr me eit fagleg opplegg og lett servering.</strong></p><hr /><h5>innhald</h5><p>Den fyrste kvelden, <strong>11. mars</strong>, er det Frode Rønning, professor i matematikkdidaktikk ved NTNU som held kurset, der temaet vil være korleis ein på best måte lærar bort matematikk. Å være god til å nytte matematikk er ikkje synonymt med å være god til å lære bort matematikk, og dette kurset vert anbefalt alle, uavhengig av eige matematikknivå. Det kan være slik at ein kan materialet godt, men opplever at ein ikkje får forklart det for andre. Dette er heilt normalt, og det å forklare matematikk er faktisk eit eige fagfelt. Deltakarane på dette kurset vil få reflektere rundt korleis dei kommuniserar matematikk, og vil få med seg nokre nyttige tips dei kan nytte når dei seinare skal hjelpe sin ungdomsskuleelev med matematikkoppgåvene.</p><p><strong>16. mars</strong> er temaet kompetansemål i matematikk, og motivasjon. Her vert det fleire føredragshaldarar, der medlem i Vektorprogrammet først pratar om kompetansemål. Her vil det bli ein gjennomgang av kva elevane skal lære i løpet av ungdomsskulen, med fokus på forståelse. Målet med denne delen av kurset er at foreldra skal ha kunnskapen dei treng for å hjelpe eleven sin, at foreldra skal forstå kvar kompetansemåla kjem frå, og kvifor dei er som dei er. Den andre delen av kurset vil ha fokus på motivasjon. Her vert det fleire korte føredrag om korleis matematikk vert nytta etter utdanninga, og i det verkelige liv. Målet med denne kvelden er at foreldra skal ha eit godt svar når eleven spør kvifor ein treng matematikk.</p><hr /><h5>praktisk info</h5><p>Begge kursa er interaktive, og det vert lagd til rette for diskusjon blant deltakarane. Me serverar kaffi og frukt, og alle deltakarane får også med seg kompendiet vårt, som kan lesast <em><a href="http://www.vektorprogrammet.no/documents/document/251">her</a>.</em></p><p>Påmeldingsfrista er satt ti 1. mars, og kan gjerast <em><a href="https://docs.google.com/forms/d/1T72Nb4HF4Py7HM8N7_w2d-r1l0AomJyVK24jbWtNpTE/viewform">her</a>,</em> for dei som er interesserte.</p><p>Kurset er sjølvsagt gratis.</p><hr /><h5>avsluttande</h5><p>Foreldrekurset er eit heilt nytt opplegg frå Vektorprogrammet, og me vonar det vert ein suksess. Hausten 2014 hadde me ei spørjeundersøking blant foreldre med born på ungdomstrinnet, og i overkant av 200 foreldre svarte at eit slikt kurs er noko dei kunne tenkje seg å delta på. For å sikre kvaliteten på kurset, og at deltakarane får eit best mulig opplegg, har me satt eit tak på 50 deltakarar per kveld. Dette kurset er uansett noko me ynskjer å halde fram med, og kjem til å tilby det igjen ved ein seinare anledning.</p><p>Vektorprogrammet ser fram til kurset, og vonar å kunne halde fram med å betre matematikkforståelsen i grunnskulen på nye og spennande måtar også i framtida.</p><hr /><h5>kontakt</h5><p>For spørsmål ang. foreldrekurset kan ein ta kontakt på vår Facebookside, eller ved å sende ein epost til eit av styremedlemma i Vektorprogrammet.</p><p>Facebooksida vår finn du på <a href="https://facebook.com/vektorprogrammet">facebook.com/vektorprogrammet</a>, og epostadressene våre finn du på oversikta over styremedlem, <a href="http://www.vektorprogrammet.no/info/organisasjon">vektorprogrammet.no/info/organisasjon</a>.</p><p>For journalistar som ynskjer kontakt ang. foreldekurset ber me om at de nyttar epostadressa <span style="text-decoration: underline;">profilering@vektorprogrammet.no</span>.</p><hr />
EOT;
        $article4->setArticle($text4);
        $article4->setAuthor($this->getReference('user-3'));
        $manager->persist($article4);

        $article5 = new Article();
        $article5->setTitle('KVIFOR MATEMATIKK ER DET VIKTIGASTE DU LÆRAR I GRUNNSKULEN.');
        $article5->setImageLarge('images/195.png');
        $article5->setImageMedium('images/medium/195.png');
        $article5->setImageSmall('images/small/195.png');
        $article5->setSticky(false);
        $text5 = <<<'EOT'
            <p><strong>Det er vanskelig å lære seg nye ting, og kanskje ekstra vanskelig når ein ikkje forstår heilt kvifor ein skal lære det. Treng du eigentleg å kunne finne arealet av trapesar? Er det noko poeng i å vite samanhengen mellom 1/8 og 12.5%? Og kva gong seinare i livet er det ein treng å finne X og Y?</strong></p> <p>Det er ikkje eit kort og enkelt svar på dette, men eg skal på denne sida gjere mitt beste for å forklare deg kvifor dette er pensum på ungdomsskulen, og forhåpentlegvis få deg til å tenkje litt annleis på matematikken. Det kjem til å ta litt tid, men eg vonar du tek deg tid likevel.</p> <p><strong><em>Som med alt det andre ein skal gjennom i skulen, er det også eit poeng med matematikk.</em></strong></p> <p>Matematikken dannar, på måtar du kanskje ikkje er klar over, grunnlaget for det meste me har fått til i det moderne samfunnet. Matematikken er eit verktøy, og på lik linje med ein vater er det lite vits i å nytte matematikken dersom ein ikkje nyttar den skikkelig.</p> <hr /> <h6>så kjem du inn i biletet</h6> <p>Så kva har dette med deg å gjere? Vel, alt faktisk. Tenk litt tilbake til då du gjekk på barneskulen. Var ikkje gangetabellen litt merkelig? For å svare på 8x7 måtte ein kanskje gjette eit par gongar. Var det det som var 49? Nei, det var minst 60. Eller kanskje minst 50. Men etter kvart som ein nytta gangetabellen om att og om att kom svaret mykje raskare. 9x6 = 54, lett som ingenting. Og snart byrja ein å sjå kva det var som eigentleg skjedde, kvifor desse to tala vart akkurat dette talet når ein multipliserte dei saman. Snart klarar ein til og med å multiplisere tal som ikkje er i gangetabellen, med hjelp av litt papir, vel å merke. Etter ei stund, og utan at ein heilt har tenkt over det, har ein plutselig <em>forstått littegrann meir</em> av tala sin verden.</p> <hr /> <h6>brøkrekning</h6> <p>Så kjem brøkane. To tal skrive over kvarandre, med ein strek i midten. Litt vanskeligare enn gangetabellen, ja? I motsetning til multiplikasjon, har ikkje divisjon nokon artige reglar og tabellar ein nyttar til å lure deg til å plutselig forstå det. Det er fordi du no har vorte ørlite grann smartare, litt eldre, og betre rusta til å forstå matematikken. Men det er ikkje enkelt. Kva er 1/7 + 4/7? Tenk litt på den oppgåva. Kva er det som får deg til å leggje saman teljarane og ikkje nemnarane? Kvifor endar du opp med 5/7 og ikkje 5/14? Det er mest sannsynleg fordi du ein gong tidlegare har lært at det er sånn. Ikkje bare har du lært det, du skjønar kanskje kvifor det er slik? At teljar er kor mange stykkje du har, med an nemnar er kor mange stykkje kaka er delt inn i? Kanskje har du ein heilt anna hugseregel, og kanskje treng du ikkje lenger ein hugseregel i det heile. Og vanskeligare vert det når ein møter på brøkar med forskjellige nemnarar. Korleis vil du for eksempel finne ut kva 6/12 – 1/4 er, og kvifor vil du gjere det akkurat slik?</p> <p>Multiplikasjon og divisjon av brøkar er noko vanskeligare. Men med hjelp av eit par enkle hugsereglar kan ein få til også dette. Når ein multipliserer gangar ein teljar med teljar og nemnar med nemnar. Divisjon gjer ein ved å gange teljar med nemnar, og nemnar med teljar, såkalla kryssmultiplisering. Du plar kanskje å multiplisere med den omvendte, eller inverse, brøken. Metodane er litt forskjellige, men resultatet vert det same. Og kanskje er ikkje metodane så forskjellige likevel?</p> <hr /> <h6>treng du å forstå det?</h6> <p>Veit du kvifor du gjer det slik, eller gjer du det berre fordi du veit du får rett svar? Eg tippar du ikkje heilt veit kvifor det vert slik, og det er heilt greitt. Alt er vanskelig til du kan det, og ingenting gir meining før du skjønar korleis det heng saman. Men trass i at du ikkje heilt veit kvifor akkurat denne metoden fungerer, klarar du, i alle fall etter eit par forsøk og eit oppslag i regelboka, å løyse oppgåva.</p> <p>For <em>ein treng ikkje å forstå alt</em> for å få det til. Nokre gonger utfører ein metoden om att og om att, til den til slutt kjem automatisk, og utan at du treng å tenkje over det. Akkurat som at du ikkje treng å gå gjennom femgongen for å vite at 5x3 = 15, og akkurat som du heilt automatisk veit at 6/10 er mindre enn 1. Du har gjort det så mange gongar at du kan det, utan at du bevisst har gått inn for å kunne det. Plutselig <em>forstår du noko du tidlegare ikkje forsto,</em> berre ved å gjere det same om att og om att. Det er slik du lærte det matematikk på barneskulen, og det er framleis slik du lærar deg matematikk i dag.</p> <hr /> <h6>vegen vidare</h6> <p>No går du på ungdomsskulen, og er klar for neste trinn på matematikkstigen, nemlig algebra, og her kjem det inn eit heilt nytt konsept som vert kalla likningar. Men er dette eigentleg så ukjend? Tenk attende på korleis du løyste oppgåver på barneskulen. Kva er 5 - 4? Er ikkje dette det same som å seie at X = 5 – 4? Og ikkje lenge etter vil du få oppgåver der X ikkje står aleine, men saman med eit anna tal, for eksempel 4X – 7 = 25. Er denne oppgåva noko vanskeligare enn dei tidlegare oppgåvene? Kva med 32X – 9 = 24 – X? Og når ein får ei oppgåve med både X og Y vert det ikkje heilt klart kva som er eit svar og ikkje. Er ein liksom ferdig å rekne når ein har funne ut at Y = 2X + 7? Men det spørsmålet flest stiller seg er kanskje «Kvifor må eg lære dette, og når får eg bruk for det?»</p> <hr /> <p><strong><em>Algebra og likningar er det viktigaste du lærer på heile ungdomsskulen.</em></strong></p> <hr /> <p>Ueinig? La meg få forklare deg kvifor. Gjennom heile barneskulen har du lært å bruke matematikken litt etter litt, og i heilt konkrete eksempel. No skal du lære akkurat det same i meir generelle og abstrakte former. For det er akkurat det abstrakte med matematikken som gjer den til eit så sterkt verktøy, og som gjer at matematikk dukkar opp i alle andre fag. Å bruke likningar med X-ar og Y-ar er berre ein måte å gjere deg vant med å stokke om på matematiske påstandar og uttrykk. Det er sjeldan me kallar X og Y for akkurat X og Y. Andre gonger kan det være høgda i ein trekant. Kor mykje medisin ein pasient skal ha. Befolkningsveksten i Trondheim dei siste ti åra. Kor mange fliser ein treng for å lage nytt dusjkabinett på eit bad. Kor lange ermene må være på ei skjorte ein held på å sy. Kor brei ein 42-tommars plasmaskjerm er, og så vidare. Alt dette er også likningar.</p> <p>Likningar er rundt oss over alt, kvar dag, men det er ikkje alltid ein legg merke til dei når ein ikkje veit kva dei er. Målet med matematikkundervisninga på ungdomsskulen, og seinare på vidaregåande, er at du skal ha ein måte å angripe dei likningane du møter på, for å finne den informasjonen du treng.</p> <hr /> <h6>seinare i livet</h6> <p>Men dette er ikkje slikt ein tenkjer over, for akkurat som at du ikkje lenger treng å sjå i gangetabellen for å multiplisere, vil du til slutt ikkje lenger tenkje over at du løyser likningar. Kanskje du ikkje ein gong vil leggje merke til at du faktisk løyser likningar. Det er difor så mange vaksne seier dei aldri får bruk for likningar etter at dei er ferdige på skulen, dei har rett og slett blitt så vant med å løyse likningar at dei ikkje tenkjer over at dei faktisk gjer det.</p> <p>Det er no du legg grunnlaget for alt du kjem til å lære seinare. Å forstå noko av kva algebra eigentleg er, og i vidare forstand forstå noko av potensialet til matematikken, er nøkkelen til å lykkast seinare i utdanninga di, på vidaregåande og alt som måtte kome etter. Å forstå litt matematikk vil hjelpe deg i alle fag, i arbeidet ditt, og i livet.</p> <p><strong>Alle treng ikkje å kunne alt, men alle treng litt matematikk. Men det er klart det er vanskelig å lære seg. Alt er vanskelig til du kan det. Og det vil nok krevje ein del arbeid å bli god. Men me i Vektorprogrammet er her for å hjelpe deg, og me vonar at du er klar for å leggje ned ein innsats sjølv.</strong></p> <h4>Det er ingen grunn til at me ikkje skal få dette til saman.</h4> <hr />
EOT;
        $article5->setArticle($text5);
        $article5->setAuthor($this->getReference('user-3'));
        $article5->addDepartment($this->getReference('dep-1'));
        $manager->persist($article5);

        $article6 = new Article();
        $article6->setTitle('VI SØKER NYE TEAM&shy;MEDLEMMER!');
        $article6->setImageLarge('images/986.jpg');
        $article6->setImageMedium('images/medium/986.jpg');
        $article6->setImageSmall('images/small/986.jpg');
        $article6->setSticky(false);
        $text6 = <<<'EOT'
            <p>I Vektorprogrammet er vi ikke bare avhengige av studenter som vektorassistenter, vi trenger også engasjerte og dyktige studenter til å drive organisasjonen fremover. Vi består av flere forskjellige undergrupper, eller team, og disse har nå opptak av nye medlemmer!</p> <p>Under følger en presentasjon av arbeidsoppgavene til hvert team, og kontaktinfo dersom du er interessert i å søke på verv, eller bare vil vite mer. En søknad trenger kun å inneholde kort informasjon om deg selv, og hvorfor du er interessert i et verv i det aktuelle teamet.</p> <p><strong>Skolekoordinering</strong></p> <p>Skolekoordineringsteamet fungerer som bindeleddet mellom vektorassistentene og ungdomsskolene. Vi holder jevn kontakt med lærerne og vektorassistentene, og passer på at alle har nok informasjon til enhver tid. Som skolekoordinator får du ansvar for å holde kontakt med to skoler og tilhørende vektorassistenter.</p> <p>Arbeidsoppgaver inkluderer:</p> <ul> <li>Skrive skoledokument (dokument med informasjon til vektorassistenter og lærere) </li> <li>Gi informasjon til vektorassistenter og lærere før vektorassistentene drar ut</li> <li>Finne vikarer for vektorassistenter som ikke kan møte opp</li> <li>Ha evalueringsmøter med skolene i slutten av semesteret.</li> </ul> <p><strong>Sponsor</strong></p> <p>For at Vektorprogrammet skal kunne drive sin virksomhet og jobbe for å nå sine mål, er det viktig at det økonomiske fundamentet er på plass. Sponsorteamet har ansvaret for å skaffe midler til å støtte driften. Dette gjør oss til bindeleddet mellom næringslivet og Vektorprogrammet.</p> <p>Arbeidsoppgaver inkluderer:</p> <ul> <li>Opprette/vedlikeholde kontakt med aktuelle bedrifter og overbevise dem om at Vektorprogrammet er et tiltak de bør støtte</li> <li>Skrive søknader til fond/legater</li> <li>Delta på aktuelle konferanser for å promotere vektorprogrammet ovenfor næringslivet</li> <li>Etterspørre støttebrev fra bedrifter som sponser oss</li> <li>Delta på ukentlige møter med resten av sponsorteamet og diskutere aktuelle saker og hvordan man ligger an</li> <li>Oppdatere resten av Vektorprogrammet når man får avtaler med bedrifter</li> </ul> <p><strong>Økonomi</strong></p> <p>Økonomiteamet er ansvarlige for å holde styr på økonomien i Vektorprogrammet. Vi setter opp budsjett, fører regnskap, og passer på at prosjektet drives økonomisk forsvarlig.</p> <p>Arbeidsoppgaver inkluderer:</p> <ul> <li>Lage budsjett for kommende semester</li> <li>Føre regnskap over alle inntekter og utgifter</li> <li>Betale fakturaer og refundere utlegg</li> <li>Ordne bussbilletter til alle vektorassistenter</li> </ul> <p><strong>Lurer du på noe, eller ønsker du å søke? Send oss en mail!</strong></p> <ul> <li>Rekruttering: rekrutteringsansvarlig@vektorprogrammet.no</li> <li>Skolekoordinering: skolekoordinator@vektorprogrammet.no</li> <li>Sponsor: sponsoransvarlig@vektorprogrammet.no</li> <li>Økonomi: okonomiansvarlig@vektorprogrammet.no</li> </ul>
EOT;
        $article6->setArticle($text6);
        $article6->setAuthor($this->getReference('user-2'));
        $article6->addDepartment($this->getReference('dep-4'));
        $manager->persist($article6);

        $article7 = new Article();
        $article7->setTitle('TA EN UT&shy;FORDRING - SØK SPONSOR&shy;TEAMET!');
        $article7->setImageLarge('images/135.png');
        $article7->setImageMedium('images/medium/135.png');
        $article7->setImageSmall('images/small/135.png');
        $article7->setSticky(false);
        $text7 = <<<'EOT'
            <p>Vektorprogrammets beste undergruppe, sponsorteamet, rekrutterer nå nye medarbeidere. Høres det interessant ut å være Vektorprogrammets bindeledd ut til bedriftene? Vi søker studenter som ønsker å bidra til at Vektorprogrammet kan fortsette å ekspandere, nå også nasjonalt!</p> <p>Vi kan tilby:</p> <ul> <li>Erfaring innen bedriftskontaktarbeid</li> <li>Et pent tillegg på CV-en</li> <li>Et hyggelig og sosialt miljø</li> <li>Egne hytteturer og arrangementer for styremedlemmer</li> </ul> <hr /> <p>Hva vi er ute etter:</p> <ul> <li>En positiv innstilling og stå-på-vilje</li> <li>Tid og mulighet til å legge ned en innsats for Vektorprogrammet</li> <li>Du trenger ikke ha tidligere erfaring med å kontakte bedrifter, men du bør være åpen for å lære</li> </ul> <p>Sponsorteamet har møter ca. en gang i uka. Et verv i teamet innebærer at du får ansvar for egne bedrifter samt oppfølging av disse.</p> <p><em>Søknadsfrist er søndag 5.oktober 2014 kl. 23.59, meld din interesse til sponsor@vektorprogrammet.no!</em></p>
EOT;
        $article7->setArticle($text7);
        $article7->setAuthor($this->getReference('user-3'));
        $article7->addDepartment($this->getReference('dep-3'));
        $manager->persist($article7);

        $article8 = new Article();
        $article8->setTitle('VEKAS VEKTOR&shy;ASSISTENT! MØT SIREN!');
        $article8->setImageLarge('images/1130.jpg');
        $article8->setImageMedium('images/medium/1130.jpg');
        $article8->setImageSmall('images/small/1130.jpg');
        $article8->setSticky(false);
        $text8 = <<<'EOT'
            <p><strong>Ukens vektorassistent er 23 år gamle Siren Skripeland fra Oslo. Hun studerer industriell økonomi med retning innenfor vann og miljøteknikk på NMBU. Siren er vektorassistent på Ås ungdomsskole.</strong></p> <p><strong>I dette intervjuet blir vi bedre kjent med Siren, og vi får svar på hvorfor akkurat hun har valgt å være vektorassistent.</strong></p> <h6>Hvorfor har du valgt å studere industriell økonomi med retning innenfor vann?</h6> <p>Jeg har valgt denne studieretningen fordi vann er verdens viktigste ressurs, og det er spennende å få lov til å være med på utvikling, effektivisering og håndtering av vann, avløp og overvann. Vann er Norges viktigste infrastruktur, og det er gøy å være med på utviklingen.</p> <h6>Hva drømmer du om å bli når du blir stor?</h6> <p>En dyktig vann- og avløpsingeniør!</p> <h6>Hva gjør du på fritiden?</h6> <p>På fritiden liker jeg å trene og være med venner. Jeg er også med i ulike foreninger og driver med West Coast Swing.</p> <h6>Kan du beskrive drømmelæreren?</h6> <p>Drømmelæreren er en som er engasjert, energisk og interessert i faget sitt. Jeg tror også læreren må være motivert for å gjøre en god jobb.</p> <h6>Hvorfor har du valgt å være vektorassistent?</h6> <p>Jeg synes vektorprogrammet er et flott program, og jeg hadde selv vært veldig takknemlig hvis skolen min hadde hatt dette tilbudet da jeg gikk på ungdomsskolen. Mange elever sliter med matte, og det er viktig å kunne tilby dem hjelp, og ikke minst motivere dem.</p> <h6>Hva har du lært av å være vektorassistent?</h6> <p>Jeg har lært å være tålmodig, kommunisere og at det er viktig å kunne vinne tilliten til elevene. Mange kvier seg for å spørre om hjelp, og det er derfor viktig å få elevene til å være trygge på meg. Jeg er jo ikke der for å le av dem, men for å hjelpe.</p> <h6>Hvorfor skal andre melde seg som vektorassistenter?</h6> <p>Vektorprogrammet gjør et flott arbeid, og for at dette skal kunne fortsette er man helt avhengig at frivillige melder seg. Men det er ikke bare derfor du burde bli vektorassistent, det er jo gøy også!</p> <hr />
EOT;
        $article8->setArticle($text8);
        $article8->setAuthor($this->getReference('user-3'));
        $article8->addDepartment($this->getReference('dep-2'));
        $manager->persist($article8);

        $manager->flush();
    }

    public function getOrder()
    {
        return 5;
    }
}