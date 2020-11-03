## Naam en contactgegevens verantwoordelijke:

-   Tim Van den Borre
-   tim.van.den.borre@student.ehb.be

## Verwerkingsdoeleinden:

-   Security
-   Beveiliging gegevens & website.

## Beschrijving categorieen betrokkenen:

-   Geïnteresseerde mensen

## Beschrijving categoriëen persoonsgegevens:

-   Naam
-   Email
-   Paswoord

## Bewaringstermijn gegevens:

-   Gegevens worden enkel bewaard zolang de gebruiker een account heeft op de website.

## Algemene beschrijving technische en organisatorische maatregelen:

### HTTPS

-   Bij een HTTP request naar het domein wordt een 301 response teruggestuurd met een redirect naar een equivalente HTTPS URL.
-   Geen mixed content.
-   Alle content van het origin domein wordt over HTTPS verstuurd.
-   Bij content van andere hosts met HTTP request wordt een 301 response teruggestuurd met een redirect naar een equivalente HTTPS URL.
-   Het domein krijgt een A+ score bij de SSL Labs server test.
-   Er word gebruik gemaakt van DNS CAA.
-   Iedere respons bevat een Strict-Transport-Security header.
-   Het gebruikte domein staat in de HSTS preload list of wacht op toevoeging.

### Registratie

-   Gebruikers moeten een gebruikersnaam, email en wachtwoord ingeven bij registratie. Login gebeurt via email & paswoord.
-   Alle ASCII karakters worden aanvaard in het wachtwoord.
-   Wachtwoorden zijn minstens 7 karakters lang en het is mogelijk om een password manager te gebruiken.
-   Vaak gebruikte wachtwoorden worden geweigerd als de HIBP API aangeeft dat het meer dan 300 keer voorkwam in eerdere inbraken.
-   Wachtwoorden word geëncrypteerd door gebruik te maken van Argon2 / bcrypt.

### Aanmelden

-   Bij 5 herhaalde mislukte pogingen moet de gebruiker 1 minuut wachten om terug in te loggen.
-   Er kan gebruik gemaakt worden van een password manager.
-   Er kan pas ingelogd worden als de gebruiker aangetoond heeft dat hij / zij het email adres opgegeven tijdens registratie onder controle heeft. (Email verification)
-   Gebruiker krijgt een 'welcome' bericht als deze is aangemeld.
-   Na het aanmelden kan de gebruiker op zijn profiel zijn / haar gegevens opvragen.

### Bescherming persoonlijke gegevens

-   De webtoepassing is conform met de wetgeving, in casu de AVG en ePrivacy richtlijn.

### Privacyverklaring

-   Iedere pagina van de webtoepassing bevat een duidelijk zichtbare link naar de privacyverklaring die de gebruiker informeert over persoonsgegevensverwerking.

### Toestemming

-   Op deze website worden enkel noodzakelijke cookies gebruikt.

### Uitoefenen van rechten

-   De gebruiker heeft recht tot inzage, rectificatie, en het verwijderen van zijn persoonlijke data.
-   Voor bezwaar is het mogelijk om contact op te nemen met de beheerder van de website. Gegevens staan onderaan op het gdpr document van de website.
