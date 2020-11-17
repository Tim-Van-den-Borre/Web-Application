## Naam en contactgegevens verantwoordelijke:

-   Tim Van den Borre
-   tim.van.den.borre@student.ehb.be

## Verwerkingsdoeleinden:

-   Een website voorzien van security zodat de gegevens van de gebruiker veilig bewaard blijven.

## Beschrijving categorieen betrokkenen:

-   Gebruikers met een account op de website.

## Rechtsgrond

-   Contractuele Rechtsgrond: de verwerking is noodzakelijk voor de uitvoering van een overeenkomst.

## Beschrijving categoriëen persoonsgegevens:

-   Naam
-   Email
-   Paswoord

## Categoriëen ontvangers

-   Cloudopslag. Alle data van de gebruikers wordt opgeslagen in een databank van phpmyadmin.

## Bewaringstermijn gegevens:

-   Gegevens worden enkel bewaard zolang de gebruiker een account heeft op de website.

## Algemene beschrijving technische en organisatorische maatregelen:

### Domein

-   Voor de website online te krijgen was er een domein nodig. Hiervoor zijn we naar <a href="https://mijn.nomeo.be/"><u>Nomeo</u></a> gegaan.
-   Nomeo heeft een domein voorzien voor een jaar (gratis voor student).
-   Via het domein was het dan mogelijk om HTTPS op te zetten, records aan te maken (CAA), een A+ score te voorzien voor de website, Strict-Transport-Security headers te voorzien en op de HSTS preload list te komen.

### Website

-   Deze website is geschreven gebruikmakend van het <a href="https://laravel.com"><u>Laravel 8 Framework</u></a>.
-   Dankzij Laravel hebben we een volledige login /registratie kunnen aanbieden aan de gebruiker alsook het het beveiligen van de gebruiker zijn data via encryptie.
-   De <a href="https://haveibeenpwned.com/API/v3#PwnedPasswords"><u>HIBP API</u></a> is voorzien om de controleren of een paswoord meer dan 300 keer voorkomt in eerdere inbraken. Dit geeft geeft de gebruiker de mogelijkheid om een paswoord te kiezen dat weinig of niet voorkomt.
-   <a href="https://www.gdprprivacynotice.com/"><u>GDPR Privacy Policy Generator</u></a> was nuttig voor het aanmaken van de privacy policy van de website zodat we conform zijn met de ePrivacy richtlijn.
-   Laravel laat het toe om bescherming te bieden tegen talloze aanvallen zoals CSRF, XSS, XSSI, Clickjacking, XFS, SQL injection, Command injection, HTML injection en CSS injection.

### URL naar de website

-   <a href="https://timvandenborre.be" target="_blank">timvandenborre.be</a>
