<?php
/**
 * Этот файл является частью установщика веб-приложения RosGear.
 * 
 * Пакет итальянской локализации.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    '{name}'        => 'Installatore',
    '{description}' => 'Installazione dell\'edizione dell\'applicazione web',
    '{permissions}' => [],

    // Setup
    'Setup' => 'Installazione',
    'edition' => 'redazione',
    'You need to fill in the field "%s"' => 'È necessario compilare il campo "%s".',
    'Attention!' => 'Attenzione!',
    'required fields' => 'campi obbligatori',
    'Error' => 'Errore',
    'Warning' => 'Avvertimento',
    'characters must be more than %s but less than %s' => 'i caratteri devono essere maggiori di %s ma minori di %s',
    'characters must be more than %s' => 'ci devono essere più di %s caratteri',
    'characters must not exceed %s' => 'i caratteri non devono superare %s', 
    'The field "%s" must have no more than %s but less than %s characters' => 'Il campo "<b>%s</b>" non deve contenere più di <b>%s</b>, ma nemmeno meno di <b>%s</b> caratteri.',
    'The field "%s" must have at least %s characters' => 'Il campo "<b>%s</b>" deve contenere almeno <b>%s</b> caratteri.',
    'The field "%s" must have no more than %s characters' => 'Il campo "<b>%s</b>" non deve contenere più di <b>%s</b> caratteri.',
    
    // Setup: макет страницы
    'Welcome' => 'Benvenuto',
    'Registration' => 'Registrazione',
    'Check' => 'Esame',
    'Setup selection' => 'Selezione di un\'installazione',
    'Database selection' => 'Selezione di un database',
    'Back' => 'Indietro',
    'Next' => 'Prossimo',
    'Check connection' => 'Verifica la connessione',

    // 404: макет страницы
    'Web application installer' => 'Programma di installazione di applicazioni web',
    'install' => 'installare',
    'To install the web application follow the link %s' => 'Per installare l\'applicazione web, segui il link %s',
    'If you don\'t need an installer or the web application is already installed then remove the directory "%s"' => 'Se non hai bisogno del programma di installazione o l\'applicazione web è già installata, elimina la directory "%s".',

    // CommonChoice\StepWelcome: макет страницы
    'Welcome to the RosGear installation' => 'Benvenuti all\'installazione di RosGear',
    'You will be guided through the entire installation process' => 'Verrete guidati attraverso l\'intero processo di installazione.',
    'Please click the «Next» button to continue' => 'Fai clic sul pulsante «Avanti» per continuare.',
    'Choose language' => 'Seleziona la lingua',
    // CommonChoice\StepWelcome: сообщения
    'You need to select a language' => 'Devi selezionare una lingua',

    // CommonChoice\StepCheck: макет страницы
    'Preliminary check' => 'Controllo preliminare',
    'Your web application must meet the required parameters' 
        => 'La tua applicazione web deve soddisfare i parametri richiesti.',
    'If one of the parameters is highlighted in red, then you need to fix it' 
        => 'Se uno dei parametri è evidenziato in rosso, è necessario correggerlo.',
    'If you continue with the installation without patching, your web application may be broken' 
        => 'Se si continua l\'installazione senza aver risolto il problema, l\'applicazione web potrebbe non funzionare correttamente.',
    'Installed' => 'Installato',
    'Not installed' => 'Non installato',
    'Not loaded' => 'Spento',
    'Loaded' => 'Su',
    'Parameter' => 'Parametro',
    'Required' => 'Necessario',
    'Current' => 'Attuale',
    'Unknown' => 'Sconosciuto',
    'and higher' => 'e sopra',
    'Web server version' => 'Versione server web',
    'Version' => 'Versione',
    'PHP directives' => 'Direttive PHP',
    'default time zone' => 'fuso orario predefinito',
    'Installer' => 'Installato',
    'enable opcode caching' => 'consente la memorizzazione nella cache degli opcode',
    'includes support for URL wrappers' => 'include il supporto per i wrapper URL',
    'support for working with URL a number of functions' => 'supporto per lavorare con gli URL utilizzando diverse funzioni',
    'default encoding for functions' => 'codifica predefinita per le funzioni',
    'the maximum allowable size of data sent by the POST method' => 'la dimensione massima consentita dei dati inviati tramite il metodo POST',
    'maximum uploaded size' => 'dimensione massima del file scaricabile',
    'the maximum amount of memory a script is allowed to use' => 'la quantità massima di memoria che uno script può utilizzare',
    'maximum time in seconds for script loading' => 'tempo massimo in secondi per il caricamento dello script',
    'is short form PHP tags allowed' => 'e consentito l\'uso di tag PHP in forma abbreviata',
    'PHP Modules' => 'moduli PHP',
    'MySQL module' => 'modulo MySQL',
    'working with MySQL database server' => 'lavorare con il server di database MySQL',
    'Session module' => 'Modulo di sessione',
    'user session management' => 'gestione della sessione utente',
    'JSON module' => 'Modulo JSON',
    'the module implements work with the JSON text data exchange format' => 'il modulo implementa la gestione del formato di scambio dati testuale JSON.',
    'Module Multibyte strings' => 'Modulo per stringhe multibyte',
    'module provides functions for working with multibyte strings' => 'il modulo fornisce funzioni per lavorare con stringhe multibyte',
    'cURL module' => 'modulo cURL',
    'library of functions for working with URL' => 'libreria di funzioni per la gestione degli URL',
    'Internationalization module' => 'Modulo di internazionalizzazione',
    'formatting, transliteration, encoding conversion, etc.' => 'formattazione, traslitterazione, conversione di codifica, ecc.',
    'Image processing module' => 'Modulo di elaborazione delle immagini',
    'working with image files in various formats' => 'lavorare con file immagine in vari formati',
    'Zip compression and archiving module' => 'Modulo di compressione e archiviazione Zip',
    'allows you to read and write to ZIP archives' => 'consente di leggere e scrivere negli archivi ZIP',
    'libXML module' => 'Modulo libXML',
    'working with the XML file format' => 'lavorare con il formato di file XML',
    'Redis server connection module' => 'Modulo di connessione al server Redis',
    'storing data on a remote server' => 'memorizzazione dei dati su un server remoto',
    // CommonChoice\StepCheck: сообщения
    'There are parameters that need to be corrected' => 'Ci sono parametri che dovranno essere corretti.',

    // CommonChoice\StepChoice: макет страницы
    'Installation selection' => 'Selezione di un\'installazione',
    'Select installation type' => 'Seleziona il tipo di installazione',
    'New installation' => 'Nuova installazione',
    'Install the RosGear web application' => 'Installa l\'applicazione web RosGear',
    'Attention! This choice may overwrite the previous installed version of the RosGear Web application' 
        => 'Attenzione! Questa selezione potrebbe sovrascrivere una versione precedentemente installata dell\'applicazione web RosGear',
    'Installed version update' => 'Aggiornamento della versione installata',
    'Update files and database' => 'Aggiornamento di file e database',
    'Update database connection settings' => 'Aggiornamento dei parametri di connessione al database',
    'If in your web application, you only need to change the database connection settings' 
        => 'Se devi modificare solo le impostazioni di connessione al database nella tua applicazione web',
    'Update the settings of installed components' => 'Aggiornamento delle impostazioni dei componenti installati',
    'If the configuration files of installed components or their routing have been deleted or damaged, use this item' 
        => 'Se i file di configurazione dei componenti installati o il loro instradamento sono stati eliminati o danneggiati, utilizzare questo elemento',
    // CommonChoice\StepChoice: сообщения
    'You need to select the installation type' => 'È necessario selezionare il tipo di installazione.',

    // NewChoice\StepLicense: лицензионное соглашение
    'License' => 'Licenza',
    'License agreement' => 'Contratto di licenza',
    'I have read and accept the license agreement' => 'Ho letto e accetto il contratto di licenza',
    'Unable to load license agreement file "%s"' => 'Impossibile caricare il file del contratto di licenza "%s".',
    'To continue you must accept the license agreement' => 'Per proseguire, è necessario accettare il contratto di licenza.',

    // NewChoice\StepRegistration: макет страницы
    'Web application registration' => 'Registrazione di un\'applicazione web',
    'Marketplace' => 'Mercato',
    'A license key is required to receive updates and install new components via %s' 
        => 'Per ricevere aggiornamenti e installare nuovi componenti tramite %s è necessaria una chiave di licenza',
    'If the key is not specified, then there will be restrictions on the operation of your web application' 
        => 'Se la chiave non viene specificata, si verificheranno delle limitazioni nel funzionamento della tua applicazione web',
    'The license key can be registered and specified after the web application is installed' 
        => 'La chiave di licenza può essere registrata e specificata dopo l\'installazione dell\'applicazione web.',
    'License key' => 'Chiave di licenza',
    'specify license key after installation' => 'specificare la chiave di licenza dopo l\'installazione',
    // NewChoice\StepRegistration: поля
    'License Key' => 'Chiave di licenza',

    // NewChoice\StepDb: макет страницы
    'Database connection' => 'Connessione a un database',
    'Enter information to connect to your web application\'s database' 
        => 'Inserisci le informazioni di connessione al database della tua applicazione web.',
    'If you don\'t already have a database, the installer will try to create one (unless the "%s" checkbox is selected)' 
        => 'Se non si dispone ancora di un database, il programma di installazione tenterà di crearne uno (a meno che non sia selezionata la casella di controllo "%s")',
    'Table prefix' => 'Prefisso della tabella',
    'Database user password' => 'Password utente del database',
    'Database username' => 'Nome utente del database',
    'Database name' => 'Nome del database',
    'Database server' => 'Server di database',
    'Server port' => 'Porta del server',
    'Database' => 'Schermata',
    'the database is already created on the server' => 'Il database è già stato creato sul server.',
    'Database server connection check completed successfully' => '<b>Test di connessione</b> al server di database completato con successo.',
    // NewChoice\StepDb: сообщения
    'Unable to find connection driver "%s"' => 'Impossibile trovare il driver di connessione "%s"',

    // NewChoice\StepDbCharset: макет страницы
    'Charset selection' => 'Selezione della codifica',
    'Selecting the connection encoding' => 'Selezione della codifica per la connessione al server di database',
    'Specify the encoding and collation for a correct connection to the database server' 
        => 'Si prega di specificare la codifica e la collazione per una corretta connessione al server del database.',
    'use default UTF8 encoding' => 'Utilizza la codifica UTF8 per impostazione predefinita',
    'If you can\'t select the encoding and collation you want, then check "%s"' 
        => 'Se non riesci a selezionare la codifica e la collazione desiderate, seleziona la casella "%s"',
    'The process may fail depending on the database settings or if the database user has insufficient privileges' 
        => 'Il processo potrebbe non riuscire a seconda delle impostazioni del database o se l\'utente del database non dispone di diritti sufficienti',
    '%s: the database will be created during the connection test "%s"' 
        => '<b>%s</b> quando si controlla la connessione, verrà creato il database <b>"%s"</b>',
    'If the database was previously created and you did not check the "%s" checkbox, then the connection check will fail' 
        => 'Se il database è già stato creato e non hai selezionato la casella di controllo "%s", riceverai un errore durante la verifica della connessione',
    'To fix the error, go back one step and check the box' 
        => 'Per correggere l\'errore, torna indietro di un passaggio e seleziona la casella',
    'Charset' => 'Codifica della connessione',
    'Collate'  => 'Confronto',
    // NewChoice\StepDbCharset: сообщения
    'Attention! It is necessary in the previous step to select a database and make a connection' 
        => '<b>Attenzione!</b> Nel passaggio precedente è necessario selezionare un database e stabilire una connessione.',
    'Database "%s" created successfully' => 'Database <b>"%s"</b> creato con successo.',
    // NewChoice\StepDbCharset: ошибки
    'Error connecting to database server' => 'Errore durante la connessione al server del database',
    'Database driver error' => 'Errore dei driver del database',
    'SQL query execution error' => 'Errore di esecuzione della query SQL',

    // NewChoice\StepCheckout: макет страницы
    'Checkout' => 'Controllare',
    'Web application files checkout' => 'Controllo dell\'accesso ai file delle applicazioni web',
    'You can set the recommended access rights using the file manager or the control panel of your hosting' 
        => 'È possibile impostare i diritti di accesso consigliati tramite il file manager o il pannello di controllo del proprio hosting.',
    'The files and directories of the web application must have the appropriate permissions' 
        => 'I file e le directory delle applicazioni web devono disporre dei diritti di accesso appropriati',
    'If the files or directories do not have the recommended permissions, the installer will not be able to create or modify the configuration files' 
        => 'Se i file o le directory non dispongono delle autorizzazioni consigliate, il programma di installazione non sarà in grado di creare o modificare i file di configurazione, con conseguente interruzione dell\'installazione.',
    'Since you are using Windows OS, file and directory permissions will not be checked'
        => 'Poiché stai utilizzando il sistema operativo <b>Windows</b>, i permessi di file e directory non verranno verificati',
    // NewChoice\StepCheckout: таблица
    'Directory / file name' => 'Nome della directory/del file',
    'Permissions' => 'Diritti di accesso',
    'Exists' => 'Presente',
    // NewChoice\StepCheckout: сообщения
    'Need to set permissions "%s" to directory "%s".' => 'È necessario impostare i permessi su "%s" per la directory "%s".',
    'Unable to determine directory permissions "%s".' => 'Impossibile determinare i permessi della directory "%s".',
    'Directory "%s" does not exist.' => 'La directory "%s" non esiste.',
    'Need to set permissions "%s" to file "%s".' => 'È necessario impostare i permessi su "%s" per il file "%s".',
    'Error writing to file. Unable to create or write file, no permissions.' => 'Errore durante la scrittura sul file. Impossibile creare o scrivere sul file a causa di diritti di accesso insufficienti.',
    'File template "%s" not found for installation.' => 'File modello "%s" per l\'installazione non trovato.',
    'Unable to determine file permissions "%s".' => 'Impossibile determinare i permessi del file "%s".',
    'File "%s" not found.' => 'File "%s" non trovato.',
    // NewChoice\StepCheckout: файлы и каталоги
    'directory of web application files' => '<b>directory</b> dei file dell\'applicazione web',
    'directory of web application download files' => '<b>directory</b> dei file di download dell\'applicazione web',
    'directory for localizing web application files' => '<b>directory</b> della localizzazione dei file dell\'applicazione web',
    'directory site files' => '<b>catalogo</b> dei file del sito',
    'directory of web application temporary files' => '<b>directory</b> dei file temporanei dell\'applicazione web',
    'directory of web application component base templates' => '<b>directory</b> modelli di componenti base per applicazioni web',
    'directory of installed PHP libraries' => '<b>directory</b> delle librerie PHP installate',
    'directory of web application components' => '<b>catalogo</b> dei componenti delle applicazioni web',
    'directory of web application configuration files' => '<b>directory</b> dei file di configurazione dell\'applicazione web',
    'installed widgets configuration file' => '<b>file di configurazione</b> dei widget installati',
    'installed modules configuration file' => '<b>file di configurazione</b> dei moduli installati',
    'configuration file of installed module extensions' => '<b>file</b> di configurazione delle estensioni del modulo installato',
    'shortcode manager configuration file (shortcodes)' => '<b>file</b> di configurazione del gestore degli shortcode',
    'database connection configuration file' => '<b>file</b> di configurazione della connessione al database',
    'web application configuration file' => '<b>file</b> di configurazione dell\'applicazione web',
    'license key file' => '<b>file</b> chiave di licenza',
    'web application unified configuration file' => '<b>file</b> di configurazione unificato dell\'applicazione web',
    'service manager configuration file' => '<b>file</b> di configurazione del gestore dei servizi',
    'language configuration file' => '<b>file</b> configurazione della lingua',
    'file system manager configuration file for Flysystem PHP package' => '<b>file</b> di configurazione del gestore del filesystem per il pacchetto Flysystem PHP',
    'MIME type configuration file' => '<b>file di configurazione del tipo MIME',
    'control panel configuration file directory' => '<b>directory</b> dei file di configurazione del Pannello di controllo',
    'control panel routing configuration file' => '<b>file</b> di configurazione del routing del pannello di controllo',
    'control panel service manager configuration file' => '<b>file</b> di configurazione di Gestione servizi del Pannello di controllo',
    'site configuration file directory' => '<b>catalogo</b> dei file di configurazione del sito',
    'site routing configuration file' => '<b>file</b> di configurazione del routing del sito',
    'site service manager configuration file' => '<b>file</b> di configurazione di Site Service Manager',
    'console configuration files directory' => '<b>directory</b> dei file di configurazione della console',
    'console service manager configuration file' => '<b>file</b> di configurazione del gestore dei servizi della console',

    // NewChoice\StepAssembly: макет страницы
    'Assembly' => 'Assemblea',
    'Building a web application edition' => 'Creazione di un\'applicazione web',
    'Edition assembly is the search and installation of components (modules, module extensions, widgets) from the application repository' 
        => 'La creazione di un\'edizione è il processo di ricerca e installazione di componenti (moduli, estensioni di moduli, widget) dal repository dell\'applicazione web',
    'Adding components to the database and updating configuration files' => 'Aggiunta di componenti al database e aggiornamento dei file di configurazione',
    'After searching for the components, click the "Install components" button' => 'Dopo aver cercato i componenti, fai clic sul pulsante <b>"Installa componenti"</b>',
    'Installed components will be highlighted with green checkmarks' => 'I componenti installati saranno evidenziati con un segno di spunta verde',
    'During the installation process, errors may occur due to the unstable operation of the web server' 
        => 'Durante il processo di installazione, potrebbero verificarsi errori dovuti al funzionamento instabile del server web.',
    'The following components were found in the repository' => 'Nel repository sono stati trovati i seguenti componenti',
    'Application modules' => 'Moduli di applicazioni web',
    'Module name' => 'Nome del modulo',
    'Application module extensions' => 'Estensioni dei moduli delle applicazioni web',
    'Module extension name' => 'Nome dell\'estensione del modulo',
    'Application widgets' => 'Widget per applicazioni web',
    'Widget name' => 'Nome del widget',
    'Application plugins' => 'Plug-in per applicazioni web',
    'Plugin name' => 'Nome del plugin',
    'Install components' => 'Installare i componenti',
    'To populate your web application with data, you need to check the box below' 
        => 'Per popolare la tua applicazione web con i dati, devi selezionare la casella sottostante.',
    'Filling with demo data depends on the edition of your web application' 
        => 'Il contenuto dei dati demo dipende dall\'edizione della tua applicazione web.',
    'Apply demo data' => 'Applica i dati demo',
    // NewChoice\StepAssembly: сообщения
    'Unable to install, missing modules in repository' => 'Impossibile installare, <b>nessun modulo</b> nel repository',
    'BUILD Succeeded' => '<b>CREAZIONE</b> della tua versione dell\'applicazione web completata con successo',
    // NewChoice\StepAssembly: ошибки
    'Unable to load SQL query map file "%s"' => 'Impossibile caricare il file di mappatura della query SQL "%s"',
    'No message, but call exception "%s"' =>  'Nessun messaggio di errore, ma è stata generata l\'eccezione "<b>%s</b>".',
    'Perhaps your application has configuration files (*.so.php) - delete them' 
        => 'La tua applicazione potrebbe già avere file di configurazione esistenti (*.so.php) - <b>eliminali</b>.',
    'SQL query map error' => 'Errore di mappatura della query SQL',
    '%s SQL query: %s' => '%s <br><b>Query SQL:</b> %s',
    'Cannot write to database configuration file "%s"' => 'Impossibile scrivere nel file di configurazione del database "%s"',
    'Cannot write to configuration file "%s"' => 'Impossibile scrivere nel <b>file di configurazione</b> "%s"',
    'File write error' => 'Errore durante la scrittura del file',
    'Errors occurred while installing modules' => 'Si sono verificati errori durante l\'installazione dei moduli.',
    'Errors occurred during the installation of module extensions' => 'Si sono verificati errori durante l\'installazione delle estensioni del modulo.',
    'Errors occurred while installing widgets' => 'Si sono verificati errori durante l\'installazione dei widget.',

    // NewChoice\StepDesign: макет страницы
    'Design' => 'Progetto',
    'Web application design' => 'Progettazione di applicazioni web',
    'Select a design template for your website and Control Panel' => 'Seleziona un modello di design per il tuo sito web e il pannello di controllo.',
    'The templates differ in their external design and basic settings' => 'I modelli differiscono per aspetto e impostazioni di base.',
    'Website template' => 'Modello <b>Sito</b>',
    'Panel Control template' => 'Modello <b>Pannello di controllo</b>',
    'If you want to populate your web application with sample template data, you need to check the box below' =>
        'Se desideri popolare la tua applicazione web con dati di esempio tratti dal modello, dovrai selezionare la casella sottostante',
    'Not all templates have demo data' => 'Non tutti i modelli includono dati dimostrativi',
    'Apply template demo data' => 'Applica i dati demo del modello',
    'there is demo data' => 'sono disponibili dati dimostrativi',
    'To continue the installation, click "Next". In this case, demonstration data for missing components will not be added'
        => 'Per continuare l\'installazione, fare clic su «Avanti». In questo caso, i dati demo per i componenti mancanti non verranno aggiunti.',
    'If you would like to select a different template for the website or the Control Panel, click "Back"' 
        => 'Se desideri selezionare un modello diverso per il tuo sito web o pannello di controllo, fai clic su «Indietro».',
    // NewChoice\StepDesign: ошибки
    'You need to select the website theme' => 'Devi selezionare un modello di sito web.',
    'You need to select the Control Panel theme' => 'È necessario selezionare un modello del pannello di controllo.',
    'The template contains demonstration data for components that are missing from the current web application build' => 
        'Il modello contiene dati di esempio per i componenti (moduli ed estensioni) mancanti nella versione corrente dell\'applicazione web.<br><br>Elenco degli ID dei componenti mancanti:<br><br><ul>%s</ul>',

    // NewChoice\StepInfo: макет страницы
    'Information' => 'Informazioni',
    'Web application information' => 'Informazioni sull\'applicazione web',
    'At this installation step, you must specify the name and description used in the templates and on the pages of your web application' 
        => 'In questa fase di installazione è necessario specificare un nome e una descrizione che verranno utilizzati nei modelli e nelle pagine della tua applicazione web',
    'After installation, you can change or specify new values for each language' 
        => 'Dopo l\'installazione, è possibile modificare o specificare nuovi valori per ciascuna lingua',
    'Name' => 'Nome',
    'Description' => 'Descrizione',
    'The server\'s time zone will store data (taking into account the date and time) of users' 
        => 'Il fuso orario del server verrà utilizzato per memorizzare i dati dell\'utente (inclusi data e ora).',
    'Storing data in the same time zone will allow you to synchronize user interactions' 
        => 'L\'archiviazione dei dati in un unico fuso orario consentirà agli utenti di sincronizzare le proprie interazioni.',
    'We recommend choosing: GMT (+00:00) UTC - Coordinated Universal Time' 
        => 'Si consiglia di scegliere: GMT (+00:00) UTC - Tempo Coordinato Universale',
    'Server timezone' => 'Fuso orario del server',
    'Default time zone, applies to users who do not have their own time zone specified' 
        => 'Il fuso orario predefinito viene utilizzato per gli utenti che non hanno specificato un fuso orario proprio.',
    'The date and time displayed in the application will correspond to this time zone' 
        => 'La data e l\'ora visualizzate nell\'applicazione corrisponderanno a questo fuso orario.',
    'Default timezone' => 'Fuso orario predefinito',

    // NewChoice\StepAccount: макет страницы
    'Create an account' => 'Creare un account',
    'Create a user account' => 'Creazione di un account utente',
    'At this stage, a Control panel user account is created with the "Super Administrator" user role' 
        => 'In questa fase, viene creato un account utente del Pannello di controllo con il ruolo di "Super Amministratore".',
    'For a user with the "Super administrator" role, all installed components (modules, module extensions, widgets) are available with full access' 
        => 'Un utente con il ruolo di "Super Amministratore" ha pieno accesso a tutti i componenti installati (moduli, estensioni dei moduli, widget)',
    'as well as the ability to add users and their roles' => 'nonché la possibilità di aggiungere utenti e i relativi ruoli',
    'To access the Control Panel, you must specify the route (part of the URL path) without special characters (except for "-" and "_")' 
        => 'Per accedere al Pannello di controllo, è necessario specificare il percorso (parte dell\'URL) senza caratteri speciali (esclusi \'-\' e \'_\').',
    "For example: 'admin' etc." => "Ad esempio: 'admin', 'admin-ka', ecc.",
    'Route to Control panel' => 'Indicazioni per raggiungere il Pannello di controllo',
    'Username' => 'Nome utente',
    'User password' => 'Password utente',
    'Password confirmation' => 'Conferma password',
    'Password and Confirm password do not match' => '<b>Password</b> e <b>Conferma password</b> non corrispondono!',
    'Personal data' => 'Dati personali dell\'amministratore',
    'Call name' => 'Appello',
    'First name' => 'Nome',
    'Second name' => 'Cognome',
    'Patronymic name' => 'Cognome',
    'Admin' => 'Amministratore',
    'Administrator' => 'Amministratore',
    'how they will address you, for example: sir Ivan Ivanovich' => 'Come si rivolgeranno a lei, ad esempio: signore Ivan Ivanovich',
    'To create account' => 'Creare un account',
    'User account successfully created' => '<b>L\'ACCOUNT</b> utente è stato creato con successo',
    'Super administrator' => 'Super amministratore',
    'Super admins' => 'Super amministratori',
    // NewChoice\StepAccount: ошибки
    'Cannot write to app configuration file "%s"' => 'Impossibile scrivere nel file di configurazione dell\'applicazione web "%s"',

    // NewChoice\StepFinish
    'Finish' => 'Conclusione',
    'Completing the installation' => 'Completamento dell\'installazione',
    'Installation of edition "%s" of your web application completed successfully' => 'L\'installazione dell\'edizione "%s" della tua applicazione web è stata completata con successo',
    'For authorization in the Control panel, you will need to specify:' => 'Per accedere al Pannello di controllo, è necessario specificare:',
    'After the installation is completed, it is recommended to delete the installer directory "%s" or follow the links: "%s", "%s"'
        => 'Al termine dell\'installazione, si consiglia di eliminare la directory di installazione <b>"%s"</b> oppure di seguire i collegamenti: "%s", "%s"',
    'After the installation is completed, it is recommended to delete the installer directory "%s" or follow the links "%s"'
        => 'Al termine dell\'installazione, si consiglia di eliminare la directory di installazione <b>"%s"</b> o di seguire il collegamento "%s"',
    'Start over' => 'Ricominciare',
    'Go to Control panel' => 'Vai al Pannello di controllo',
    'Go to Website' => 'Vai al Sito web',
    // NewChoice\StepFinish: ошибки
    'Unable to delete directory "%s" to stop the installer. Do it manually.' 
        => 'Impossibile eliminare la directory <b>"%s"</b> per interrompere il programma di installazione. Eseguire questa operazione manualmente.',

    // NewChoice\StepFinish
    'Database configuration file updated successfully' => 'Il file di configurazione del database è stato aggiornato correttamente',

    // Repair\StepAssembly: макет страницы
    'Updating' => 'Aggiornamento',
    'Updating the settings will update (re-create) the following configuration files:' 
        => 'L\'aggiornamento delle impostazioni aggiornerà (ricreerà) i seguenti file di configurazione:',
    'configuration file of installed modules' => 'file di configurazione dei moduli installati',
    'configuration file of installed extensions' => 'file di configurazione delle estensioni del modulo installato',
    'configuration file of installed widgets' => 'file di configurazione per i widget installati',
    'shortcodes of installed components' => 'codici brevi per i componenti installati',
    'events of installed components' => 'eventi dei componenti installati',
    'routing components for the Site and Control Panel' => 'componenti di routing per il sito e il pannello di controllo',
    'After searching for components, click the "Update" button' => 'Dopo aver cercato i componenti, fai clic sul pulsante "<b>Aggiorna</b>"',
    'Update' => 'Rinfrescato',
    'Component configuration files updated successfully' => 'I file di configurazione dei componenti sono stati aggiornati correttamente.',
    // Repair\StepAssembly: ошибки
    'You need to install the web application' => 'È necessario installare l\'applicazione web.',
];