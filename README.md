# web_design_5-03-2024

Progetto di web design 

(Cavicchia Samuel S5225277, Romano Yuri S5231931, Parodi Aurora S5216444)

Linee guida progetto

Alcuni elementi elencati non sono stati implementati

# Implementazione

Registrazione:

-Nome

-Cognome

-Nome utente*

-Email

-Telefono*

-Password

-Conferma password

*non obbligatorio

Sarà possibile registrarsi anche con google. 

Arriva la mail e l’utente conferma.

Verrà messo a schermo un avviso/consiglio contenente delle istruzioni per rendere più sicura la password da creare (es: non inserire il proprio nome/cognome, data di nascita o altri dati sensibili e facilmente reperibili)

# Login

-nome utente o email

-password

password dimenticata (link che porta alla pagina del recupero della password)


# Recupero password

-inserire email, nome utente (se precedentemente inserito) o telefono (se precedentemente inserito)

# Spiegazione

Abbiamo deciso di inserire nella nostra registration i soliti campi di un normale form. Non sapendo su che sito verrà implementata abbiamo deciso di inserire campi che potrebbero aumentare la reperibilità dell’utente e sicurezza sull’autenticazione (come per esempio il numero di telefono per l’autenticazione a due fattori).

Appena finita la registrazione, verrà inviata all’utente una mail, contenente un link per la conferma dell’account (altrimenti il sito non fa accedere all’utente).

Se la mail di registrazione è già in uso verrà mandato un messaggio a schermo in cui si chiederà di effettuare la registrazione con una mail diversa.

Una volta completata questa fase allora l’utente sarà registrato con successo.

Si potrà accedere al sito usando email o nome utente seguiti dalla password.

In caso di password dimenticata allora si accederà ad un’altra pagina per il recupero inserendo email, nome utente o telefono.


