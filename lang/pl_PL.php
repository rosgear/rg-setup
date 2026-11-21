<?php
/**
 * Этот файл является частью установщика веб-приложения RosGear.
 * 
 * Пакет польской локализации.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    '{name}'        => 'Instalator',
    '{description}' => 'Instalacja edycji aplikacji internetowej',
    '{permissions}' => [],

    // Setup
    'Setup' => 'Instalacja',
    'edition' => 'zespół redakcyjny',
    'You need to fill in the field "%s"' => 'Musisz wypełnić pole "%s".',
    'Attention!' => 'Uwaga!',
    'required fields' => 'wymagane pola',
    'Error' => 'Błąd',
    'Warning' => 'Ostrzeżenie',
    'characters must be more than %s but less than %s' => 'liczba znaków musi być większa niż %s, ale mniejsza niż %s',
    'characters must be more than %s' => 'musi być więcej niż %s znaków',
    'characters must not exceed %s' => 'nie powinno być więcej niż %s znaków', 
    'The field "%s" must have no more than %s but less than %s characters' => 'Pole "<b>%s</b>" musi zawierać od <b>%s</b> do <b>%s</b> znaków.',
    'The field "%s" must have at least %s characters' => 'Pole "<b>%s</b>" musi zawierać co najmniej <b>%s</b> znaków.',
    'The field "%s" must have no more than %s characters' => 'Pole "<b>%s</b>" może zawierać maksymalnie <b>%s</b> znaków.',
    
    // Setup: макет страницы
    'Welcome' => 'Powitanie',
    'Registration' => 'Rejestracja',
    'Check' => 'Badanie',
    'Setup selection' => 'Wybór instalacji',
    'Database selection' => 'Wybór bazy danych',
    'Back' => 'Z powrotem',
    'Next' => 'Następny',
    'Check connection' => 'Sprawdź połączenie',

    // 404: макет страницы
    'Web application installer' => 'Instalator aplikacji internetowych',
    'install' => 'zainstalować',
    'To install the web application follow the link %s' => 'Aby zainstalować aplikację internetową, skorzystaj z tego linku %s',
    'If you don\'t need an installer or the web application is already installed then remove the directory "%s"' => 'Jeśli nie potrzebujesz instalatora lub jeśli aplikacja internetowa jest już zainstalowana, usuń katalog "%s"',

    // CommonChoice\StepWelcome: макет страницы
    'Welcome to the RosGear installation' => 'Witamy w procesie instalacji RosGear',
    'You will be guided through the entire installation process' => 'Przejdziesz przez cały proces instalacji',
    'Please click the «Next» button to continue' => 'Aby kontynuować, kliknij przycisk «Dalej»',
    'Choose language' => 'Wybierz język',
    // CommonChoice\StepWelcome: сообщения
    'You need to select a language' => 'Musisz wybrać język',

    // CommonChoice\StepCheck: макет страницы
    'Preliminary check' => 'Wstępna weryfikacja',
    'Your web application must meet the required parameters' 
        => 'Twoja aplikacja internetowa musi spełniać wymagane parametry',
    'If one of the parameters is highlighted in red, then you need to fix it' 
        => 'Jeśli jeden z parametrów jest wyróżniony kolorem czerwonym, należy go poprawić',
    'If you continue with the installation without patching, your web application may be broken' 
        => 'Jeśli przeprowadzisz instalację bez zastosowania poprawki, funkcjonalność Twojej aplikacji internetowej może zostać ograniczona',
    'Installed' => 'Zainstalowano',
    'Not installed' => 'Nieustawione',
    'Not loaded' => 'Wyłączony',
    'Loaded' => 'Włączony',
    'Parameter' => 'Parametr',
    'Required' => 'Wymagany',
    'Current' => 'Aktualny',
    'Unknown' => 'Nieznany',
    'and higher' => 'i powyżej',
    'Web server version' => 'Wersja web serwera',
    'Version' => 'Wersja',
    'PHP directives' => 'Dyrektywy PHP',
    'default time zone' => 'domyślna strefa czasowa',
    'Installer' => 'Zainstalowano',
    'enable opcode caching' => 'umożliwia buforowanie kodów operacyjnych (opcode)',
    'includes support for URL wrappers' => 'zawiera obsługę wrapperów URL',
    'support for working with URL a number of functions' => 'obsługa pracy z adresami URL w szeregu funkcji',
    'default encoding for functions' => 'domyślne kodowanie dla funkcji',
    'the maximum allowable size of data sent by the POST method' => 'maksymalny dopuszczalny rozmiar danych przesyłanych metodą POST',
    'maximum uploaded size' => 'maksymalny rozmiar pobieranego pliku',
    'the maximum amount of memory a script is allowed to use' => 'maksymalna ilość pamięci, jaką skrypt może wykorzystać',
    'maximum time in seconds for script loading' => 'maksymalny czas ładowania skryptu w sekundach',
    'is short form PHP tags allowed' => 'czy skrócony zapis znaczników PHP jest dozwolony?',
    'PHP Modules' => 'Moduły PHP',
    'MySQL module' => 'Moduł MySQL',
    'working with MySQL database server' => 'praca z serwerem bazy danych MySQL',
    'Session module' => 'Moduł sesji',
    'user session management' => 'zarządzanie sesjami użytkownika',
    'JSON module' => 'Moduł JSON',
    'the module implements work with the JSON text data exchange format' => 'Moduł implementuje obsługę formatu wymiany danych opartego na tekście – JSON',
    'Module Multibyte strings' => 'Moduł ciągów wielobajtowych',
    'module provides functions for working with multibyte strings' => 'Moduł udostępnia funkcje do pracy z ciągami znaków wielobajtowych',
    'cURL module' => 'Moduł cURL',
    'library of functions for working with URL' => 'biblioteka funkcji do pracy z adresami URL',
    'Internationalization module' => 'Moduł Internacjonalizacji',
    'formatting, transliteration, encoding conversion, etc.' => 'formatowanie, transliteracja, konwersja kodowania znaków itp.',
    'Image processing module' => 'Moduł przetwarzania obrazu',
    'working with image files in various formats' => 'praca z plikami graficznymi w różnych formatach',
    'Zip compression and archiving module' => 'Moduł Kompresji i archiwizacji typu Zip',
    'allows you to read and write to ZIP archives' => 'umożliwia odczyt z archiwów ZIP oraz zapis do nich',
    'libXML module' => 'Moduł libXML',
    'working with the XML file format' => 'praca z formatem plików XML',
    'Redis server connection module' => 'Moduł połączenia z serwerem Redis',
    'storing data on a remote server' => 'przechowywanie danych na zdalnym serwerze',
    // CommonChoice\StepCheck: сообщения
    'There are parameters that need to be corrected' => 'Istnieją parametry, które będą wymagały poprawy.',

    // CommonChoice\StepChoice: макет страницы
    'Installation selection' => 'Wybór instalacji',
    'Select installation type' => 'Wybierz typ instalacji',
    'New installation' => 'Nowa instalacja',
    'Install the RosGear web application' => 'Zainstaluj aplikację internetową RosGear',
    'Attention! This choice may overwrite the previous installed version of the RosGear Web application' 
        => 'Uwaga! Ten wybór może nadpisać wcześniej zainstalowaną wersję aplikacji internetowej RosGear',
    'Installed version update' => 'Aktualizowanie zainstalowanej wersji',
    'Update files and database' => 'Aktualizowanie plików i bazy danych',
    'Update database connection settings' => 'Aktualizowanie parametrów połączenia z bazą danych',
    'If in your web application, you only need to change the database connection settings' 
        => 'Jeśli musisz jedynie zmienić ustawienia połączenia z bazą danych w swojej aplikacji internetowej',
    'Update the settings of installed components' => 'Aktualizacja parametrów zainstalowanych komponentów',
    'If the configuration files of installed components or their routing have been deleted or damaged, use this item' 
        => 'Skorzystaj z tej opcji, jeśli pliki konfiguracyjne zainstalowanych składników — lub informacje o ich ścieżkach — zostały usunięte bądź uszkodzone',
    // CommonChoice\StepChoice: сообщения
    'You need to select the installation type' => 'Musisz wybrać typ instalacji.',

    // NewChoice\StepLicense: лицензионное соглашение
    'License' => 'Licencja',
    'License agreement' => 'Umowa licencyjna',
    'I have read and accept the license agreement' => 'Zapoznałem się z umową licencyjną i akceptuję ją',
    'Unable to load license agreement file "%s"' => 'Nie można wczytać pliku umowy licencyjnej "%s".',
    'To continue you must accept the license agreement' => 'Aby kontynuować, musisz zaakceptować umowę licencyjną.',

    // NewChoice\StepRegistration: макет страницы
    'Web application registration' => 'Rejestracja aplikacji internetowej',
    'Marketplace' => 'Rynek',
    'A license key is required to receive updates and install new components via %s' 
        => 'Do otrzymywania aktualizacji oraz instalowania nowych komponentów za pośrednictwem %s wymagany jest klucz licencyjny',
    'If the key is not specified, then there will be restrictions on the operation of your web application' 
        => 'Jeśli klucz nie zostanie dostarczony, działanie Twojej aplikacji internetowej będzie ograniczone',
    'The license key can be registered and specified after the web application is installed' 
        => 'Po zainstalowaniu aplikacji internetowej będzie można dokonać rejestracji i wprowadzić klucz licencyjny',
    'License key' => 'Klucz licencyjny',
    'specify license key after installation' => 'po zakończeniu instalacji wprowadź klucz licencyjny',
    // NewChoice\StepRegistration: поля
    'License Key' => 'Klucz licencyjny',

    // NewChoice\StepDb: макет страницы
    'Database connection' => 'Łączenie z bazą danych',
    'Enter information to connect to your web application\'s database' 
        => 'Wprowadź informacje niezbędne do połączenia z bazą danych swojej aplikacji internetowej.',
    'If you don\'t already have a database, the installer will try to create one (unless the "%s" checkbox is selected)' 
        => 'Jeśli nie masz jeszcze bazy danych, instalator podejmie próbę jej utworzenia (chyba że zaznaczono pole wyboru "%s")',
    'Table prefix' => 'Prefiks tabeli',
    'Database user password' => 'Hasło użytkownika bazy danych',
    'Database username' => 'Nazwa użytkownika bazy danych',
    'Database name' => 'Nazwa bazy danych',
    'Database server' => 'Serwer bazy danych',
    'Server port' => 'Port serwera',
    'Database' => 'Baza danych',
    'the database is already created on the server' => 'baza danych została już utworzona na serwerze.',
    'Database server connection check completed successfully' => '<b>Połączenie</b> z serwerem bazy danych zostało pomyślnie zweryfikowane.',
    // NewChoice\StepDb: сообщения
    'Unable to find connection driver "%s"' => 'Nie można odnaleźć sterownika połączenia "%s"',

    // NewChoice\StepDbCharset: макет страницы
    'Charset selection' => 'Wybór kodowania',
    'Selecting the connection encoding' => 'Wybór kodowania znaków dla połączenia z serwerem bazy danych',
    'Specify the encoding and collation for a correct connection to the database server' 
        => 'Określ kodowanie oraz zestaw znaków (kolację) w celu zapewnienia prawidłowego połączenia z serwerem bazy danych',
    'use default UTF8 encoding' => 'użyj domyślnego kodowania UTF-8',
    'If you can\'t select the encoding and collation you want, then check "%s"' 
        => 'Jeśli nie możesz wybrać wymaganego kodowania oraz zestawu znaków (collation), zaznacz pole "%s"',
    'The process may fail depending on the database settings or if the database user has insufficient privileges' 
        => 'Proces może zakończyć się niepowodzeniem – w zależności od ustawień bazy danych lub w sytuacji, gdy użytkownik bazy danych nie posiada wystarczających uprawnień',
    '%s: the database will be created during the connection test "%s"' 
        => '<b>%s</b>: podczas sprawdzania połączenia zostanie utworzona baza danych o nazwie <b>"%s"</b>',
    'If the database was previously created and you did not check the "%s" checkbox, then the connection check will fail' 
        => 'Jeśli baza danych została już utworzona, a pole wyboru "%s" nie zostało zaznaczone, test połączenia zakończy się błędem',
    'To fix the error, go back one step and check the box' 
        => 'Aby naprawić błąd, cofnij się o krok i zaznacz pole wyboru',
    'Charset' => 'Kodowanie połączenia',
    'Collate'  => 'Porównanie',
    // NewChoice\StepDbCharset: сообщения
    'Attention! It is necessary in the previous step to select a database and make a connection' 
        => '<b>Uwaga!</b> W poprzednim kroku musisz wybrać bazę danych i nawiązać połączenie.',
    'Database "%s" created successfully' => 'Baza danych <b>"%s"</b> została pomyślnie utworzona.',
    // NewChoice\StepDbCharset: ошибки
    'Error connecting to database server' => 'Błąd podczas łączenia z serwerem bazy danych',
    'Database driver error' => 'Błąd sterownika bazy danych',
    'SQL query execution error' => 'Błąd wykonania zapytania SQL',

    // NewChoice\StepCheckout: макет страницы
    'Checkout' => 'Kontrola',
    'Web application files checkout' => 'Kontrola dostępu do plików aplikacji internetowej',
    'You can set the recommended access rights using the file manager or the control panel of your hosting' 
        => 'Zalecane uprawnienia dostępu możesz ustawić za pomocą menedżera plików lub panelu sterowania hostingiem.',
    'The files and directories of the web application must have the appropriate permissions' 
        => 'Pliki i katalogi aplikacji internetowej muszą mieć odpowiednie uprawnienia dostępu',
    'If the files or directories do not have the recommended permissions, the installer will not be able to create or modify the configuration files' 
        => 'Jeśli pliki lub katalogi nie mają zalecanych uprawnień, instalator nie będzie mógł utworzyć ani zmodyfikować plików konfiguracyjnych, co spowoduje przerwanie instalacji',
    'Since you are using Windows OS, file and directory permissions will not be checked'
        => 'Ponieważ korzystasz z systemu operacyjnego <b>Windows</b>, uprawnienia dostępu do plików i katalogów nie będą sprawdzane',
    // NewChoice\StepCheckout: таблица
    'Directory / file name' => 'Nazwa katalogu / pliku',
    'Permissions' => 'Uprawnienia dostępu',
    'Exists' => 'Obecny',
    // NewChoice\StepCheckout: сообщения
    'Need to set permissions "%s" to directory "%s".' => 'Konieczne jest ustawienie uprawnień dostępu "%s" dla katalogu "%s".',
    'Unable to determine directory permissions "%s".' => 'Nie można określić uprawnień dostępu do katalogu "%s".',
    'Directory "%s" does not exist.' => 'Katalog "%s" nie istnieje.',
    'Need to set permissions "%s" to file "%s".' => 'Konieczne jest ustawienie uprawnień dostępu "%s" dla pliku "%s".',
    'Error writing to file. Unable to create or write file, no permissions.' => 'Błąd podczas zapisu do pliku. Nie można utworzyć pliku ani zapisać w nim danych; niewystarczające uprawnienia dostępu.',
    'File template "%s" not found for installation.' => 'Nie znaleziono szablonu pliku instalacyjnego "%s".',
    'Unable to determine file permissions "%s".' => 'Nie można określić uprawnień dostępu do pliku "%s".',
    'File "%s" not found.' => 'Nie znaleziono pliku "%s".',
    // NewChoice\StepCheckout: файлы и каталоги
    'directory of web application files' => '<b>katalog</b> plików aplikacji internetowej',
    'directory of web application download files' => '<b>katalog</b> plików do pobrania w aplikacji internetowej',
    'directory for localizing web application files' => '<b>katalog</b> lokalizacji plików aplikacji internetowej',
    'directory site files' => '<b>katalog</b> plików witryny',
    'directory of web application temporary files' => '<b>katalog</b> plików tymczasowych aplikacji internetowej',
    'directory of web application component base templates' => '<b>katalog</b> podstawowych szablonów komponentów aplikacji internetowych',
    'directory of installed PHP libraries' => '<b>katalog</b> zainstalowanych bibliotek PHP',
    'directory of web application components' => '<b>katalog</b> komponentów aplikacji internetowych',
    'directory of web application configuration files' => '<b>katalog</b> plików konfiguracyjnych aplikacji internetowej',
    'installed widgets configuration file' => '<b>plik</b> konfiguracyjny dla zainstalowanych widżetów',
    'installed modules configuration file' => '<b>plik</b> konfiguracyjny dla zainstalowanych modułów',
    'configuration file of installed module extensions' => '<b>plik</b> konfiguracyjny dla zainstalowanych rozszerzeń modułów',
    'shortcode manager configuration file (shortcodes)' => '<b>plik</b> konfiguracyjny menedżera shortcode\'ów',
    'database connection configuration file' => '<b>plik</b> konfiguracyjny połączenia z bazą danych',
    'web application configuration file' => '<b>plik</b> konfiguracyjny aplikacji internetowej',
    'license key file' => '<b>plik</b> klucza licencyjnego',
    'web application unified configuration file' => 'ujednolicony <b>plik</b> konfiguracyjny aplikacji internetowej',
    'service manager configuration file' => '<b>plik</b> konfiguracyjny menedżera usług',
    'language configuration file' => '<b>plik</b> konfiguracyjny języka',
    'file system manager configuration file for Flysystem PHP package' => '<b>plik</b> konfiguracyjny menedżera systemu plików dla pakietu PHP Flysystem',
    'MIME type configuration file' => '<b>plik</b> konfiguracyjny typów MIME',
    'control panel configuration file directory' => '<b>katalog</b> plików konfiguracyjnych panelu sterowania',
    'control panel routing configuration file' => '<b>plik</b> konfiguracyjny routingu panelu sterowania',
    'control panel service manager configuration file' => '<b>plik</b> konfiguracyjny menedżera usług Panelu sterowania',
    'site configuration file directory' => '<b>katalog</b> plików konfiguracyjnych witryny',
    'site routing configuration file' => '<b>plik</b> konfiguracyjny routingu witryny',
    'site service manager configuration file' => '<b>plik</b> konfiguracyjny menedżera usług witryny',
    'console configuration files directory' => '<b>katalog</b> plików konfiguracyjnych konsoli',
    'console service manager configuration file' => '<b>plik</b> konfiguracyjny menedżera usług konsolowych',

    // NewChoice\StepAssembly: макет страницы
    'Assembly' => 'Сборка',
    'Building a web application edition' => 'Wersja kompilacji aplikacji internetowej',
    'Edition assembly is the search and installation of components (modules, module extensions, widgets) from the application repository' 
        => 'Tworzenie edycji polega na wyszukiwaniu i instalowaniu komponentów (modułów, rozszerzeń modułów, widżetów) z repozytorium aplikacji internetowej',
    'Adding components to the database and updating configuration files' => 'Dodawanie komponentów do bazy danych oraz aktualizacja plików konfiguracyjnych',
    'After searching for the components, click the "Install components" button' => 'Po wyszukaniu składników kliknij przycisk <b>"Zainstaluj składniki"</b>.',
    'Installed components will be highlighted with green checkmarks' => 'Zainstalowane składniki zostaną oznaczone zielonymi znacznikami wyboru',
    'During the installation process, errors may occur due to the unstable operation of the web server' 
        => 'Podczas procesu instalacji mogą wystąpić błędy związane z niestabilnym działaniem web serwera.',
    'The following components were found in the repository' => 'W repozytorium znaleziono następujące komponenty',
    'Application modules' => 'Moduły aplikacji internetowej',
    'Module name' => 'Nazwa modułu',
    'Application module extensions' => 'Rozszerzenia modułów aplikacji internetowych',
    'Module extension name' => 'Nazwa rozszerzenia modułu',
    'Application widgets' => 'Widżety aplikacji internetowych',
    'Widget name' => 'Nazwa widżetu',
    'Application plugins' => 'Wtyczki do aplikacji internetowych',
    'Plugin name' => 'Nazwa wtyczki',
    'Install components' => 'Zainstaluj komponenty',
    'To populate your web application with data, you need to check the box below' 
        => 'Aby wypełnić swoją aplikację internetową danymi, należy zaznaczyć poniższe pole wyboru.',
    'Filling with demo data depends on the edition of your web application' 
        => 'Wypełnianie danymi demonstracyjnymi zależy od wersji posiadanej aplikacji internetowej',
    'Apply demo data' => 'Zastosuj dane demonstracyjne',
    // NewChoice\StepAssembly: сообщения
    'Unable to install, missing modules in repository' => 'Instalacja nie może zostać przeprowadzona; w repozytorium <b>brakuje modułów</b>',
    'BUILD Succeeded' => 'Proces budowania (<b>BUILD</b>) wersji Twojej aplikacji internetowej został pomyślnie zakończony',
    // NewChoice\StepAssembly: ошибки
    'Unable to load SQL query map file "%s"' => 'Nie można wczytać pliku mapy zapytań SQL "%s"',
    'No message, but call exception "%s"' =>  'Brak komunikatu o błędzie, ale zgłoszono wyjątek "<b>%s</b>".',
    'Perhaps your application has configuration files (*.so.php) - delete them' 
        => 'Twoja aplikacja może już zawierać pliki konfiguracyjne (*.so.php) — <b>prosimy o ich usunięcie</b>.',
    'SQL query map error' => 'Błąd mapowania zapytania SQL',
    '%s SQL query: %s' => '%s <br><b>Zapytanie SQL:</b> %s',
    'Cannot write to database configuration file "%s"' => 'Nie można zapisać do <b>pliku konfiguracyjnego bazy danych</b> "%s"',
    'Cannot write to configuration file "%s"' => 'Nie można zapisać do <b>pliku konfiguracyjnego</b> "%s"',
    'File write error' => 'Błąd zapisu pliku',
    'Errors occurred while installing modules' => 'Podczas instalacji modułów wystąpiły błędy.',
    'Errors occurred during the installation of module extensions' => 'Podczas instalacji rozszerzeń modułu wystąpiły błędy.',
    'Errors occurred while installing widgets' => 'Podczas instalacji widżetów wystąpiły błędy.',

    // NewChoice\StepDesign: макет страницы
    'Design' => 'Projekt',
    'Web application design' => 'Projektowanie aplikacji internetowych',
    'Select a design template for your website and Control Panel' => 'Wybierz szablon projektu dla witryny internetowej oraz panelu sterowania',
    'The templates differ in their external design and basic settings' => 'Szablony różnią się pod względem wyglądu oraz podstawowych ustawień.',
    'Website template' => 'Szablon <b>Strony internetowej</b>',
    'Panel Control template' => 'Szablon <b>Panel sterowania</b>',
    'If you want to populate your web application with sample template data, you need to check the box below' =>
        'Jeśli chcesz wypełnić swoją aplikację internetową przykładowymi danymi z szablonu, musisz zaznaczyć poniższe pole wyboru',
    'Not all templates have demo data' => 'Nie wszystkie szablony zawierają przykładowe dane',
    'Apply template demo data' => 'Zastosuj dane demonstracyjne szablonu',
    'there is demo data' => 'dostępne są dane demonstracyjne',
    'To continue the installation, click "Next". In this case, demonstration data for missing components will not be added'
        => 'Aby kontynuować instalację, kliknij "Dalej". W tym przypadku dane demonstracyjne dla brakujących składników nie zostaną dodane.',
    'If you would like to select a different template for the website or the Control Panel, click "Back"' 
        => 'Jeśli chcesz wybrać inny szablon dla witryny lub panelu sterowania, kliknij «Wstecz».',
    // NewChoice\StepDesign: ошибки
    'You need to select the website theme' => 'Musisz wybrać szablon witryny internetowej.',
    'You need to select the Control Panel theme' => 'Musisz wybrać szablon Panelu sterowania.',
    'The template contains demonstration data for components that are missing from the current web application build' => 
        'Szablon zawiera przykładowe dane dla komponentów (modułów i rozszerzeń), których brakuje w bieżącej kompilacji aplikacji internetowej.<br><br>Lista identyfikatorów brakujących komponentów:<br><br><ul>%s</ul>',

    // NewChoice\StepInfo: макет страницы
    'Information' => 'Informacja',
    'Web application information' => 'Informacje o aplikacji internetowej',
    'At this installation step, you must specify the name and description used in the templates and on the pages of your web application' 
        => 'Na tym etapie instalacji należy podać nazwę oraz opis, które będą używane w szablonach i na stronach aplikacji internetowej',
    'After installation, you can change or specify new values for each language' 
        => 'Po instalacji możesz zmienić lub określić nowe wartości dla każdego języka',
    'Name' => 'Nazwa',
    'Description' => 'Opis',
    'The server\'s time zone will store data (taking into account the date and time) of users' 
        => 'Dane użytkownika (w tym data i godzina) będą przechowywane zgodnie ze strefą czasową serwera',
    'Storing data in the same time zone will allow you to synchronize user interactions' 
        => 'Przechowywanie danych w jednej strefie czasowej umożliwi synchronizację interakcji użytkowników',
    'We recommend choosing: GMT (+00:00) UTC - Coordinated Universal Time' 
        => 'Zalecamy wybranie: GMT (+00:00) UTC – uniwersalny czas koordynowany',
    'Server timezone' => 'Strefa czasowa serwera',
    'Default time zone, applies to users who do not have their own time zone specified' 
        => 'Domyślna strefa czasowa ma zastosowanie do użytkowników, którzy nie mają ustawionej konkretnej strefy czasowej',
    'The date and time displayed in the application will correspond to this time zone' 
        => 'Data i godzina wyświetlane w aplikacji będą odpowiadać tej strefie czasowej',
    'Default timezone' => 'Domyślna strefa czasowa',

    // NewChoice\StepAccount: макет страницы
    'Create an account' => 'Tworzenie konta',
    'Create a user account' => 'Tworzenie konta użytkownika',
    'At this stage, a Control panel user account is created with the "Super Administrator" user role' 
        => 'Na tym etapie tworzone jest konto użytkownika panelu sterowania z rolą "Superadministrator".',
    'For a user with the "Super administrator" role, all installed components (modules, module extensions, widgets) are available with full access' 
        => 'Dla użytkownika z rolą „Superadministrator” wszystkie zainstalowane komponenty (moduły, rozszerzenia modułów, widżety) są dostępne z pełnymi uprawnieniami',
    'as well as the ability to add users and their roles' => 'a także możliwość dodawania użytkowników oraz ich ról',
    'To access the Control Panel, you must specify the route (part of the URL path) without special characters (except for "-" and "_")' 
        => 'Aby uzyskać dostęp do Panelu sterowania, należy określić ścieżkę (część adresu URL), która nie zawiera żadnych znaków specjalnych (z wyjątkiem \'-\' oraz \'_\').',
    "For example: 'admin' etc." => 'Na przykład: "admin", "admin-ka" itd.',
    'Route to Control panel' => 'Ścieżka do Panelu sterowania',
    'Username' => 'Nazwa użytkownika',
    'User password' => 'Hasło użytkownika',
    'Password confirmation' => 'Potwierdź hasło',
    'Password and Confirm password do not match' => '<b>Hasło</b> i <b>Potwierdź hasło</b> nie są takie same!',
    'Personal data' => 'Dane osobowe administratora',
    'Call name' => 'Odwołanie',
    'First name' => 'Nazwa',
    'Second name' => 'Nazwisko',
    'Patronymic name' => 'Nazwisko',
    'Admin' => 'Szanowny admin',
    'Administrator' => 'Administrator',
    'how they will address you, for example: sir Ivan Ivanovich' => 'jak będziesz tytułowany, na przykład: pan Iwan Iwanowicz',
    'To create account' => 'Utwórz konto',
    'User account successfully created' => '<b>KONTO</b> użytkownika zostało pomyślnie utworzone',
    'Super administrator' => 'Superadministrator',
    'Super admins' => 'Superadministratorzy',
    // NewChoice\StepAccount: ошибки
    'Cannot write to app configuration file "%s"' => 'Nie można zapisać do <b>pliku konfiguracyjnego aplikacji internetowej</b> "%s"',

    // NewChoice\StepFinish
    'Finish' => 'Wniosek',
    'Completing the installation' => 'Instalacja zakończona',
    'Installation of edition "%s" of your web application completed successfully' => 'Instalacja wersji "%s" Twojej aplikacji internetowej została pomyślnie zakończona',
    'For authorization in the Control panel, you will need to specify:' => 'Aby zalogować się do Panelu sterowania, należy podać:',
    'After the installation is completed, it is recommended to delete the installer directory "%s" or follow the links: "%s", "%s"'
        => 'Po zakończeniu instalacji zaleca się usunięcie katalogu instalatora <b>„%s”</b> lub skorzystanie z poniższych linków: "%s", "%s"',
    'After the installation is completed, it is recommended to delete the installer directory "%s" or follow the links "%s"'
        => 'Po zakończeniu instalacji zaleca się usunięcie katalogu instalatora <b>"%s"</b> lub skorzystanie z odnośnika "%s"',
    'Start over' => 'Zacznij od nowa',
    'Go to Control panel' => 'Przejdź do Panelu sterowania',
    'Go to Website' => 'Przejdź do witryny',
    // NewChoice\StepFinish: ошибки
    'Unable to delete directory "%s" to stop the installer. Do it manually.' 
        => 'Nie można usunąć katalogu <b>„%s”</b> w celu przerwania działania instalatora. Proszę zrobić to ręcznie.',

    // NewChoice\StepFinish
    'Database configuration file updated successfully' => 'Plik konfiguracyjny bazy danych został pomyślnie zaktualizowany',

    // Repair\StepAssembly: макет страницы
    'Updating' => 'Aktualizacja',
    'Updating the settings will update (re-create) the following configuration files:' 
        => 'Aktualizacja parametrów umożliwi zaktualizowanie (ponowne utworzenie) następujących plików konfiguracyjnych:',
    'configuration file of installed modules' => 'plik konfiguracyjny dla zainstalowanych modułów',
    'configuration file of installed extensions' => 'plik konfiguracyjny dla zainstalowanych rozszerzeń modułów',
    'configuration file of installed widgets' => 'plik konfiguracyjny dla zainstalowanych widżetów',
    'shortcodes of installed components' => 'shortcode’y dla zainstalowanych komponentów',
    'events of installed components' => 'zdarzenia zainstalowanych komponentów',
    'routing components for the Site and Control Panel' => 'rozmieszczenie komponentów w witrynie oraz w panelu sterowania',
    'After searching for components, click the "Update" button' => 'Po wyszukaniu komponentów kliknij przycisk "<b>Aktualizuj</b>"',
    'Update' => 'Aktualizacja',
    'Component configuration files updated successfully' => 'Pliki konfiguracyjne komponentów zostały pomyślnie zaktualizowane',
    // Repair\StepAssembly: ошибки
    'You need to install the web application' => 'Musisz zainstalować aplikację internetową.'
];