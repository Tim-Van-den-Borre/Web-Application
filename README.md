<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Over deze website

-   Een website dat gemaakt is voor het van 'Software Security' om mezelf een beter inzicht te geven hoe ik mijn site beter zou kunnen beveiligen.

## Domein

-   Voor de website online te krijgen was er een domein nodig. Hiervoor zijn we naar <a href="https://mijn.nomeo.be/"><u>Nomeo</u></a> gegaan.
-   Nomeo heeft een domein voorzien voor een jaar (gratis voor student).
-   Via het domein was het dan mogelijk om HTTPS op te zetten, records aan te maken (CAA), een A+ score te voorzien voor de website, Strict-Transport-Security headers te voorzien en op de HSTS preload list te komen.

## Website

-   Deze website is geschreven gebruikmakend van het <a href="https://laravel.com"><u>Laravel 8 Framework</u></a>.
-   Dankzij Laravel hebben we een volledige login /registratie kunnen aanbieden aan de gebruiker alsook het het beveiligen van de gebruiker zijn data via encryptie.
-   De <a href="https://haveibeenpwned.com/API/v3#PwnedPasswords"><u>HIBP API</u></a> is voorzien om de controleren of een paswoord meer dan 300 keer voorkomt in eerdere inbraken. Dit geeft geeft de gebruiker de mogelijkheid om een paswoord te kiezen dat weinig of niet voorkomt.
-   <a href="https://www.gdprprivacynotice.com/"><u>GDPR Privacy Policy Generator</u></a> was nuttig voor het aanmaken van de privacy policy van de website zodat we conform zijn met de ePrivacy richtlijn.
-   Laravel laat het toe om bescherming te bieden tegen talloze aanvallen zoals CSRF, XSS, XSSI, Clickjacking, XFS, SQL injection, Command injection, HTML injection en CSS injection.

## URL naar de website

-   <a href="https://timvandenborre.be" target="_blank">timvandenborre.be</a>

## API

-   Via postman kan er gebruik gemaakt worden van de api.
-   In postman voegen we een header toe: <b>Accept: application/json</b>

### CRUD Calls

#### Registreer

-   https://timvandenborre.be/api/register (POST)
    ![alt text](https://i.imgur.com/KeCZS7H.png)

#### Log in

-   https://timvandenborre.be/api/login (POST)
    ![alt text](https://i.imgur.com/DoQ1YBE.png)
-   Nadien plaatsen we de token die we gekregen hebben in Authentication als 'Bearer Token'.
    ![alt text](https://i.imgur.com/uwnSdwE.png)

#### Haal alle games op

-   https://timvandenborre.be/api/games (GET)
    ![alt text](https://i.imgur.com/Zh14tT8.png)

#### Voeg een game toe

-   https://timvandenborre.be/api/games (POST)
    ![alt text](https://i.imgur.com/NiX6ayS.png)

#### Haal een game op via het ID

-   https://timvandenborre.be/api/games/{id} (GET)
    ![alt text](https://i.imgur.com/NiyxUUN.png)

#### Pas een game aan via het ID

-   https://timvandenborre.be/api/games/{id} (PUT)
    ![alt text](https://i.imgur.com/UeLwNDn.png)

#### Verwijder een game via het ID

-   https://timvandenborre.be/api/games/{id} (DELETE)
    ![alt text](https://i.imgur.com/ycaZ6bp.png)

#### Haal de OPTIONS op.

-   https://timvandenborre.be/api/games (OPTIONS)
    ![alt text](https://i.imgur.com/ol5SHaT.png)
