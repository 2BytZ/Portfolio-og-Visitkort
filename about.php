<!DOCTYPE html>

<html lang="da">
    <head>
        <title>Tobias Ramsing | CV & Portfolio</title>
        <meta charset="UTF-8">
        <meta name="description" content="Tobias Ramsing's CV og portfolio hjemmeside">
        <meta name="author" content="Tobias R.">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <main class="content">
                <div class="main-text-container">
                    <h2>Om mig</h2>
                    <p>Mit navn er Tobias Ramsing, og jeg er en ambitiøs, engageret og kreativ ung mand med stor interesse for programmering og går på Syddansk Erhvervsskole i Odense som Datatekniker med speciale i programmering, hvilket er en uddannelse inden for data- og kommunikationsuddannelsen. Jeg elsker at lære nyt og er ansvarsbevidst samt mødestabil. Jeg er god til at holde på viden og lære hurtigt, men har ofte brug for et lille skub for at komme ordentligt i gang. Jeg er meget energisk, men på samme tid arbejdsfokuseret og kan somme tider ikke pille mig fra det, jeg arbejder på.</p>
                    <p>Derudover tager jeg min uddannelse med en EUX, hvilket betyder, at jeg har mine normale EUD-fag samt de gymnasiale fag, hvilket gør, at man får en erhvervsfaglig studentereksamen. Jeg har valgt en EUX, fordi jeg gerne vil have så mange muligheder som muligt, og en EUX åbner flere døre for mig. Desuden har jeg en idé om at videreuddanne mig som Software Ingeniør, da jeg bedst kan lide at arbejde med at udvikle programmer og applikationer etc.</p>
                    <p>I foreløbig sidder jeg i skolepraktik, hvor jeg får små og store opgaver, som jeg kan sidde og løse. Desuden sidder jeg og læser og undersøger de forskellige programmeringssprog, styrker min programmeringsevne og gør mig aktivt umage med at lære nyt og forbedre min viden så godt jeg kan. Grunden til, at jeg går på skolen i Odense, er, at jeg tidligere var på Syddansk Erhvervsskole i Vejle, og jeg blev informeret om, at det ikke var muligt at tage datateknikeruddannelsen med et programmeringsspeciale. Pga. Der var meget lidt fokus på programmering på henholdsvis Grundforløb 1 og 2. Dog har jeg arbejdet med databaser, serveropsætning samt netværk og lignende på mine grundforløb.</p>
                    <p>Jeg er lige nu i gang med mit 2. Hovedforløb. I det tidligere hovedforløb lærte jeg om objektorienteret programmering, databaseprogrammering, udvikling af core-applikationer og HTML-hjemmesider osv. Og jeg gennemførte mine fag ekstraordinært.</p>
                    <h3>Er du, eller kender du, en virksomhed som søger en programmerings-lærling?</h3>
                    <p>Jeg søger aktivt læreplads-muligheder i hele landet og vil med glæde til samtale hos en virksomhed, som ønsker at have mig som lærling. Hvis dette interessere dig, er du velkommen til at sende mig en mail eller ringe til mig, så skal jeg sørger for at svare tilbage hurtigst muligt.</p>
                    <button type="button" class="to-contacts_container" onclick="location.href='/contact.php'">
                        <small class="button-title">Kom i kontakt!</small>
                        <span>Gå til kontakt siden &RightArrow;</span>
                    </button>
                </div>
            </main>
            <aside class="sidebar">
                <section class="sidebar-top">
                    <div class="profile-image">
                        <img src="media/Selfie.jpg" alt="Tobias Ramsing selfie">
                    </div>
                    <div class="profile">
                        <h1>Tobias<br>Ramsing</h1>
                        <p class="subtitle">Datatekniker med speciale i programmering, EUX</p>
                    </div>
                </section>
                <section class="sidebar-nav">
                    <div class="sidenav">
                        <a href="about.php" class="navbtn">Om mig</a>
                        <button popovertarget="dropdown" class="dropdown-btn navbtn">Karakterer
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div popover id="dropdown" class="dropdown-container">
                            <div class="dropdown-popover">
                                <a href="grades-h1.php">Hovedforløb 1.</a>
                            </div>
                        </div>
                        <a href="certifications.php" class="navbtn">Beviser & Certifikater</a>
                        <a href="projects.php" class="navbtn">Projekter</a>
                        <a href="hobbies.php" class="navbtn">Hobbyer og Fritid</a>
                        <a href="contact.php" class="navbtn">Kontakt</a>
                    </div>
                </section>
            </aside>
        </div>
    </body>
    <footer>
        <div class="footer-container">
            <main class="content">
                <p>E-Mail: <a href="mailto:tobiasramsing008@hotmail.com">tobiasramsing008@hotmail.com</a></p>
                <p>Tlf.: +45 91 15 19 12</p>
                <p>Bopæl: Løsning, Danmark</p>
                <br>
                <p>GitHub: <a href="https://github.com/2BytZ">github.com/2BytZ</a></p>
                <p>LinkdIn: <a href="www.linkedin.com/in/tobias-ramsing">linkedin.com/in/tobias-ramsing</a></p>
                <p>CV: <a target="_balnk" href="docs/CV - Tobias Ramsing.pdf">Tobias Ramsing</a></p>
                <br>
                <small>© 2026 Tobias Ramsing</small>
            </main>
        </div>
    </footer>
</html>