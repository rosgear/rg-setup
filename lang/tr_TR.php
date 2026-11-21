<?php
/**
 * Этот файл является частью установщика веб-приложения RosGear.
 * 
 * Пакет турецкой локализации.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    '{name}'        => 'Yükleyici',
    '{description}' => 'Bir web uygulaması sürümünün kurulumu',
    '{permissions}' => [],

    // Setup
    'Setup' => 'Kurulum',
    'edition' => 'yazı kadrosu',
    'You need to fill in the field "%s"' => '"%s" alanını doldurmanız gerekiyor.',
    'Attention!' => 'Dikkat!',
    'required fields' => 'zorunlu alanlar',
    'Error' => 'Hata',
    'Warning' => 'Uyarı',
    'characters must be more than %s but less than %s' => 'karakter sayısı %s\'den büyük, ancak %s\'den küçük olmalıdır',
    'characters must be more than %s' => '%s karakterden fazlası olmalı',
    'characters must not exceed %s' => 'en fazla %s karakter olmalıdır', 
    'The field "%s" must have no more than %s but less than %s characters' => '"<b>%s</b>" alanı en fazla <b>%s</b>, en az <b>%s</b> karakter içermelidir.',
    'The field "%s" must have at least %s characters' => '"<b>%s</b>" alanı en az <b>%s</b> karakter içermelidir.',
    'The field "%s" must have no more than %s characters' => '"<b>%s</b>" alanı en fazla <b>%s</b> karakter içermelidir.',
    
    // Setup: макет страницы
    'Welcome' => 'Hoş geldin',
    'Registration' => 'Kayıt',
    'Check' => 'İnceleme',
    'Setup selection' => 'Bir kurulum seçme',
    'Database selection' => 'Veritabanı seçimi',
    'Back' => 'Geri',
    'Next' => 'Sonraki',
    'Check connection' => 'Bağlantıyı kontrol et',

    // 404: макет страницы
    'Web application installer' => 'Web uygulaması yükleyicisi',
    'install' => 'düzenlemek',
    'To install the web application follow the link %s' => 'Web uygulamasını yüklemek için şu bağlantıyı takip edin: %s',
    'If you don\'t need an installer or the web application is already installed then remove the directory "%s"' => 'Yükleyiciye ihtiyacınız yoksa veya web uygulaması zaten yüklüyse, "%s" dizinini silin',

    // CommonChoice\StepWelcome: макет страницы
    'Welcome to the RosGear installation' => 'RosGear kurulum sürecine hoş geldiniz',
    'You will be guided through the entire installation process' => 'Kurulum sürecinin tamamından geçeceksiniz',
    'Please click the «Next» button to continue' => 'Devam etmek için lütfen «İleri» düğmesine tıklayın',
    'Choose language' => 'Dil seçin',
    // CommonChoice\StepWelcome: сообщения
    'You need to select a language' => 'Bir dil seçmeniz gerekiyor',

    // CommonChoice\StepCheck: макет страницы
    'Preliminary check' => 'Ön kontrol',
    'Your web application must meet the required parameters' 
        => 'Web uygulamanız zorunlu parametreleri karşılamalıdır',
    'If one of the parameters is highlighted in red, then you need to fix it' 
        => 'Parametrelerden biri kırmızı renkle vurgulanmışsa, onu düzeltmeniz gerekir',
    'If you continue with the installation without patching, your web application may be broken' 
        => 'Düzeltmeyi uygulamadan kuruluma devam ederseniz, web uygulamanızın işlevselliği bozulabilir',
    'Installed' => 'Yüklendi',
    'Not installed' => 'Ayarlanmadı',
    'Not loaded' => 'Kapalı',
    'Loaded' => 'Etkinleştirilmiş',
    'Parameter' => 'Parametre',
    'Required' => 'Gerekli',
    'Current' => 'Akım',
    'Unknown' => 'Bilinmiyor',
    'and higher' => 've üzeri',
    'Web server version' => 'Web sunucusu sürümü',
    'Version' => 'Sürüm',
    'PHP directives' => 'PHP Yönergeleri',
    'default time zone' => 'varsayılan saat dilimi',
    'Installer' => 'Yüklendi',
    'enable opcode caching' => 'işlem kodu önbelleklemesini etkinleştirir',
    'includes support for URL wrappers' => 'URL sarmalayıcıları için destek içerir',
    'support for working with URL a number of functions' => 'çeşitli işlevlerde URL\'lerle çalışmaya yönelik destek',
    'default encoding for functions' => 'işlevler için varsayılan kodlama',
    'the maximum allowable size of data sent by the POST method' => 'POST yöntemiyle gönderilen veriler için izin verilen maksimum boyut',
    'maximum uploaded size' => 'maksimum dosya indirme boyutu',
    'the maximum amount of memory a script is allowed to use' => 'bir betiğin kullanmasına izin verilen maksimum bellek miktarı',
    'maximum time in seconds for script loading' => 'saniye cinsinden maksimum betik yükleme süresi',
    'is short form PHP tags allowed' => 'PHP etiketleri için kısa biçimin kullanılmasına izin veriliyor mu?',
    'PHP Modules' => 'PHP Modülleri',
    'MySQL module' => 'MySQL modülü',
    'working with MySQL database server' => 'bir MySQL veritabanı sunucusuyla çalışma',
    'Session module' => 'Oturum Modülü',
    'user session management' => 'kullanıcı oturumu yönetimi',
    'JSON module' => 'JSON Modülü',
    'the module implements work with the JSON text data exchange format' => 'Modül, JSON metin tabanlı veri değişim biçimi için destek sağlar.',
    'Module Multibyte strings' => 'Çok Baytlı Dizeler Modülü',
    'module provides functions for working with multibyte strings' => 'Modül, çok baytlı dizgilerle çalışmaya yönelik işlevler sağlar',
    'cURL module' => 'cURL modülü',
    'library of functions for working with URL' => 'URL\'lerle çalışmaya yönelik işlev kütüphanesi',
    'Internationalization module' => 'Uluslararasileştirme modülü',
    'formatting, transliteration, encoding conversion, etc.' => 'biçimlendirme, harf çevirisi, karakter kodlaması dönüştürme vb.',
    'Image processing module' => 'Görüntü İşleme Modülü',
    'working with image files in various formats' => 'çeşitli formatlardaki görüntü dosyalarıyla çalışma',
    'Zip compression and archiving module' => 'Zip sıkıştırma ve arşivleme modülü',
    'allows you to read and write to ZIP archives' => 'ZIP arşivlerinden okuma ve arşivlere yazma olanağı sağlar',
    'libXML module' => 'libXML modülü',
    'working with the XML file format' => 'XML dosya biçimiyle çalışma',
    'Redis server connection module' => 'Redis sunucu bağlantı modülü',
    'storing data on a remote server' => 'uzak bir sunucuda veri depolama',
    // CommonChoice\StepCheck: сообщения
    'There are parameters that need to be corrected' => 'Düzeltilmesi gerekecek parametreler var.',

    // CommonChoice\StepChoice: макет страницы
    'Installation selection' => 'Bir kurulum seçme',
    'Select installation type' => 'Kurulum türünü seçin',
    'New installation' => 'Yeni kurulum',
    'Install the RosGear web application' => 'RosGear web uygulamasını yükleyin',
    'Attention! This choice may overwrite the previous installed version of the RosGear Web application' 
        => 'Dikkat! Bu seçenek, daha önce yüklenmiş olan RosGear web uygulamasının üzerine yazılmasına neden olabilir.',
    'Installed version update' => 'Yüklü sürümün güncellenmesi',
    'Update files and database' => 'Dosyaların ve veritabanının güncellenmesi',
    'Update database connection settings' => 'Veritabanı bağlantı parametreleri güncelleniyor',
    'If in your web application, you only need to change the database connection settings' 
        => 'Web uygulamanızda yalnızca veritabanı bağlantı ayarlarını değiştirmeniz gerekiyorsa',
    'Update the settings of installed components' => 'Kurulu bileşenlerin parametrelerinin güncellenmesi',
    'If the configuration files of installed components or their routing have been deleted or damaged, use this item' 
        => 'Yüklü bileşenlere ait yapılandırma dosyaları ya da bunların yönlendirme bilgileri silinmiş veya hasar görmüşse bu seçeneği kullanın',
    // CommonChoice\StepChoice: сообщения
    'You need to select the installation type' => 'Bir kurulum türü seçmeniz gerekiyor.',

    // NewChoice\StepLicense: лицензионное соглашение
    'License' => 'Lisans',
    'License agreement' => 'Lisans sözleşmesi',
    'I have read and accept the license agreement' => 'Lisans sözleşmesini okudum ve kabul ediyorum',
    'Unable to load license agreement file "%s"' => 'Lisans sözleşmesi dosyası "%s" yüklenemedi.',
    'To continue you must accept the license agreement' => 'Devam etmek için lisans sözleşmesini kabul etmelisiniz.',

    // NewChoice\StepRegistration: макет страницы
    'Web application registration' => 'Web uygulaması kaydı',
    'Marketplace' => 'Pazar yeri',
    'A license key is required to receive updates and install new components via %s' 
        => '%s aracılığıyla güncellemeleri almak ve yeni bileşenleri yüklemek için bir lisans anahtarı gereklidir',
    'If the key is not specified, then there will be restrictions on the operation of your web application' 
        => 'Anahtar sağlanmadığı takdirde, web uygulamanızın işleyişinde kısıtlamalar olacaktır',
    'The license key can be registered and specified after the web application is installed' 
        => 'Web uygulamasını yükledikten sonra kayıt olabilir ve lisans anahtarını girebilirsiniz',
    'License key' => 'Lisans anahtarı',
    'specify license key after installation' => 'Kurulumdan sonra lisans anahtarını girin',
    // NewChoice\StepRegistration: поля
    'License Key' => 'Lisans anahtarı',

    // NewChoice\StepDb: макет страницы
    'Database connection' => 'Veritabanına bağlanılıyor',
    'Enter information to connect to your web application\'s database' 
        => 'Web uygulamanızın veritabanına bağlanmak için gerekli bilgileri girin.',
    'If you don\'t already have a database, the installer will try to create one (unless the "%s" checkbox is selected)' 
        => 'Henüz bir veritabanınız yoksa, yükleyici bir tane oluşturmaya çalışacaktır ("%s" onay kutusu işaretli olmadığı sürece)',
    'Table prefix' => 'Tablo ön eki',
    'Database user password' => 'Veritabanı kullanıcı parolası',
    'Database username' => 'Veritabanı kullanıcı adı',
    'Database name' => 'Veritabanı adı',
    'Database server' => 'Veritabanı sunucusu',
    'Server port' => 'Sunucu portu',
    'Database' => 'Veritabanı',
    'the database is already created on the server' => 'Veritabanı sunucuda zaten oluşturulmuş durumda',
    'Database server connection check completed successfully' => 'Veritabanı sunucusuna olan bağlantı başarıyla doğrulandı.',
    // NewChoice\StepDb: сообщения
    'Unable to find connection driver "%s"' => '"%s" bağlantı sürücüsü bulunamadı',

    // NewChoice\StepDbCharset: макет страницы
    'Charset selection' => 'Kodlama seçimi',
    'Selecting the connection encoding' => 'Veritabanı sunucusu bağlantısı için karakter kodlamasının seçilmesi',
    'Specify the encoding and collation for a correct connection to the database server' 
        => 'Veritabanı sunucusuna düzgün bir bağlantı sağlamak için kodlamayı (encoding) ve karşılaştırma düzenini (collation) belirtin',
    'use default UTF8 encoding' => 'varsayılan UTF8 kodlamasını kullanın',
    'If you can\'t select the encoding and collation you want, then check "%s"' 
        => 'Gerekli kodlamayı ve karşılaştırma düzenini (collation) seçemiyorsanız, "%s" kutusunu işaretleyin',
    'The process may fail depending on the database settings or if the database user has insufficient privileges' 
        => 'Veritabanı ayarlarına bağlı olarak veya veritabanı kullanıcısının yeterli izinlere sahip olmaması durumunda, işlem başarısız olabilir',
    '%s: the database will be created during the connection test "%s"' 
        => '<b>%s</b> bağlantı denetimi sırasında <b>"%s"</b> adında bir veritabanı oluşturulacaktır.',
    'If the database was previously created and you did not check the "%s" checkbox, then the connection check will fail' 
        => 'Veritabanı halihazırda oluşturulmuşsa ve "%s" onay kutusunu seçmediyseniz, bağlantı testi bir hatayla sonuçlanacaktır',
    'To fix the error, go back one step and check the box' 
        => 'Hatayı düzeltmek için bir adım geri gidin ve onay kutusunu seçin',
    'Charset' => 'Bağlantı kodlaması',
    'Collate'  => 'Karşılaştırmak',
    // NewChoice\StepDbCharset: сообщения
    'Attention! It is necessary in the previous step to select a database and make a connection' 
        => '<b>Dikkat!</b> Bir önceki adımda bir veritabanı seçmeli ve bağlantı kurmalısınız.',
    'Database "%s" created successfully' => '<b>"%s"</b> veritabanı başarıyla oluşturuld.',
    // NewChoice\StepDbCharset: ошибки
    'Error connecting to database server' => 'Veritabanı sunucusuna bağlanırken hata oluştu',
    'Database driver error' => 'Veritabanı sürücüsü hatası',
    'SQL query execution error' => 'SQL sorgusu yürütme hatası',

    // NewChoice\StepCheckout: макет страницы
    'Checkout' => 'Контроль',
    'Web application files checkout' => 'Web uygulaması dosyaları için erişim denetimi',
    'You can set the recommended access rights using the file manager or the control panel of your hosting' 
        => 'Önerilen erişim izinlerini, bir dosya yöneticisi veya barındırma kontrol paneliniz aracılığıyla ayarlayabilirsiniz.',
    'The files and directories of the web application must have the appropriate permissions' 
        => 'Web uygulaması dosyaları ve dizinleri uygun erişim izinlerine sahip olmalıdır',
    'If the files or directories do not have the recommended permissions, the installer will not be able to create or modify the configuration files' 
        => 'Dosyalar veya dizinler önerilen izinlere sahip değilse, yükleyici yapılandırma dosyalarını oluşturamayacak ya da değiştiremeyecek; bu da yükleme işleminin kesintiye uğramasına neden olacaktır',
    'Since you are using Windows OS, file and directory permissions will not be checked'
        => '<b>Windows işletim sistemi</b> kullandığınız için, dosya ve dizin erişim izinleri denetlenmeyecektir',
    // NewChoice\StepCheckout: таблица
    'Directory / file name' => 'Dizin / dosya adı',
    'Permissions' => 'Erişim hakları',
    'Exists' => 'Sunmak',
    // NewChoice\StepCheckout: сообщения
    'Need to set permissions "%s" to directory "%s".' => '"%s" dizini için "%s" erişim izinlerinin ayarlanması gereklidir.',
    'Unable to determine directory permissions "%s".' => '"%s" dizini için erişim hakları belirlenemiyor.',
    'Directory "%s" does not exist.' => '"%s" dizini mevcut değil.',
    'Need to set permissions "%s" to file "%s".' => '"%s" dosyası için "%s" erişim izinlerinin ayarlanması gereklidir.',
    'Error writing to file. Unable to create or write file, no permissions.' => 'Dosyaya yazma hatası. Dosya oluşturulamıyor veya dosyaya yazılamıyor; yetersiz erişim hakları.',
    'File template "%s" not found for installation.' => '"%s" kurulum dosyası şablonu bulunamadı.',
    'Unable to determine file permissions "%s".' => '"%s" dosyası için erişim hakları belirlenemiyor.',
    'File "%s" not found.' => '"%s" dosyası bulunamadı.',
    // NewChoice\StepCheckout: файлы и каталоги
    'directory of web application files' => 'web uygulaması dosya <b>dizini</b>',
    'directory of web application download files' => 'web uygulaması dosya indirme <b>kataloğu</b>',
    'directory for localizing web application files' => 'web uygulaması dosya yerelleştirme <b>dizini</b>',
    'directory site files' => 'site dosyası <b>kataloğu</b>',
    'directory of web application temporary files' => 'web uygulaması geçici dosyalar <b>dizini</b>',
    'directory of web application component base templates' => 'temel web uygulaması bileşen şablonları <b>kataloğu</b>',
    'directory of installed PHP libraries' => 'yüklü PHP kütüphaneleri <b>kataloğu</b>',
    'directory of web application components' => 'web uygulaması bileşen <b>kataloğu</b>',
    'directory of web application configuration files' => 'web uygulaması yapılandırma dosyası <b>dizini</b>',
    'installed widgets configuration file' => 'yüklü araçlar için yapılandırma <b>dosyası</b>',
    'installed modules configuration file' => 'yüklü modüller için yapılandırma <b>dosyası</b>',
    'configuration file of installed module extensions' => 'yüklü modül eklentileri için yapılandırma <b>dosyası</b>',
    'shortcode manager configuration file (shortcodes)' => 'kısa kod yöneticisi yapılandırma <b>dosyası</b>',
    'database connection configuration file' => 'veritabanı bağlantı yapılandırma <b>dosyası</b>',
    'web application configuration file' => 'web uygulaması yapılandırma <b>dosyası</b>',
    'license key file' => 'lisans anahtarı <b>dosyası</b>',
    'web application unified configuration file' => 'birleşik web uygulaması yapılandırma <b>dosyası</b>',
    'service manager configuration file' => 'hizmet yöneticisi yapılandırma <b>dosyası</b>',
    'language configuration file' => 'dil yapılandırma <b>dosyası</b>',
    'file system manager configuration file for Flysystem PHP package' => 'PHP paketi Flysystem\'e yönelik dosya sistemi yöneticisi için yapılandırma <b>dosyası</b>',
    'MIME type configuration file' => 'MIME türü yapılandırma <b>dosyası</b>',
    'control panel configuration file directory' => 'Denetim Masası yapılandırma dosyaları <b>dizini</n>',
    'control panel routing configuration file' => 'Denetim Masası yönlendirme yapılandırma <b>dosyası</b>',
    'control panel service manager configuration file' => 'Denetim Masası hizmet yöneticisi yapılandırma <b>dosyası</b>',
    'site configuration file directory' => 'site yapılandırma dosyası <b>dizini</b>',
    'site routing configuration file' => 'site yönlendirme yapılandırma <b>dosyası</b>',
    'site service manager configuration file' => 'site hizmet yöneticisi yapılandırma <b>dosyası</b>',
    'console configuration files directory' => 'konsol yapılandırma dosyası <b>dizini</b>',
    'console service manager configuration file' => 'konsol hizmet yöneticisi yapılandırma <b>dosyası</b>',

    // NewChoice\StepAssembly: макет страницы
    'Assembly' => 'Toplantı',
    'Building a web application edition' => 'Web uygulaması derleme sürümü',
    'Edition assembly is the search and installation of components (modules, module extensions, widgets) from the application repository' 
        => 'Bir sürüm oluşturmak; bir web uygulamasının deposundan bileşenlerin (modüller, modül eklentileri, araçlar) bulunmasını ve kurulmasını gerektirir',
    'Adding components to the database and updating configuration files' => 'Veritabanına bileşenler ekleme ve yapılandırma dosyalarını güncelleme',
    'After searching for the components, click the "Install components" button' => 'Bileşenleri aradıktan sonra <b>"Bileşenleri yükle"</b> düğmesine tıklayın',
    'Installed components will be highlighted with green checkmarks' => 'Yüklenen bileşenler yeşil onay işaretleriyle belirtilecektir',
    'During the installation process, errors may occur due to the unstable operation of the web server' 
        => 'Kurulum süreci sırasında, kararsız web sunucusu performansıyla ilgili hatalar ortaya çıkabilir',
    'The following components were found in the repository' => 'Depoda aşağıdaki bileşenler bulundu',
    'Application modules' => 'Web uygulaması modülleri',
    'Module name' => 'Modül adı',
    'Application module extensions' => 'Web uygulaması modül uzantıları',
    'Module extension name' => 'Modül uzantısı adı',
    'Application widgets' => 'Web uygulaması araçları',
    'Widget name' => 'Araç adı',
    'Application plugins' => 'Web uygulaması eklentileri',
    'Plugin name' => 'Eklenti adı',
    'Install components' => 'Bileşenleri yükleyin',
    'To populate your web application with data, you need to check the box below' 
        => 'Web uygulamanızı verilerle doldurmak için aşağıdaki onay kutusunu seçmeniz gerekir.',
    'Filling with demo data depends on the edition of your web application' 
        => 'Gösterim verileriyle doldurma işlemi, web uygulamanızın sürümüne bağlıdır',
    'Apply demo data' => 'Gösterim verilerini uygula',
    // NewChoice\StepAssembly: сообщения
    'Unable to install, missing modules in repository' => 'Kurulum gerçekleştirilemiyor; depoda <b>eksik modüller</b> var',
    'BUILD Succeeded' => 'Web uygulamanızın sürümüne ilişkin <b>DERLEME</b> işlemi başarıyla tamamlandı',
    // NewChoice\StepAssembly: ошибки
    'Unable to load SQL query map file "%s"' => '"%s" SQL sorgu eşleme dosyası yüklenemiyor',
    'No message, but call exception "%s"' =>  'Hata iletisi yok, ancak "<b>%s</b>" özel durumu (exception) oluştu.',
    'Perhaps your application has configuration files (*.so.php) - delete them' 
        => 'Uygulamanızda hâlihazırda yapılandırma dosyaları (*.so.php) bulunuyor olabilir; <b>lütfen bunları silin</b>.',
    'SQL query map error' => 'SQL sorgusu eşleme hatası',
    '%s SQL query: %s' => '%s <br><b>SQL sorgusu:</b> %s',
    'Cannot write to database configuration file "%s"' => '<b>Veritabanı yapılandırma dosyası</b>na yazılamıyor "%s"',
    'Cannot write to configuration file "%s"' => '<b>Yapılandırma dosyası</b>na yazılamıyor "%s"',
    'File write error' => 'Dosya yazma hatası',
    'Errors occurred while installing modules' => 'Modüllerin kurulumu sırasında hatalar oluştu.',
    'Errors occurred during the installation of module extensions' => 'Modül eklentilerinin kurulumu sırasında hatalar oluştu.',
    'Errors occurred while installing widgets' => 'Araçların kurulumu sırasında hatalar oluştu.',

    // NewChoice\StepDesign: макет страницы
    'Design' => 'Tasarım',
    'Web application design' => 'Web uygulaması tasarımı',
    'Select a design template for your website and Control Panel' => 'Web sitesi ve Kontrol Paneli için bir tasarım şablonu seçin',
    'The templates differ in their external design and basic settings' => 'Şablonlar, görsel tasarımları ve temel ayarları bakımından farklılık gösterir',
    'Website template' => '<b>Web sitesi</b> şablonu',
    'Panel Control template' => 'Şablon <b>Kontrol Paneli</b>',
    'If you want to populate your web application with sample template data, you need to check the box below' =>
        'Web uygulamanızı bir şablondan alınan örnek verilerle doldurmak isterseniz, aşağıdaki onay kutusunu seçmeniz gerekir',
    'Not all templates have demo data' => 'Tüm şablonlar örnek veriler içermez',
    'Apply template demo data' => 'Şablonun örnek verilerini uygulayın',
    'there is demo data' => 'gösterim verileri mevcut',
    'To continue the installation, click "Next". In this case, demonstration data for missing components will not be added'
        => 'Kuruluma devam etmek için «İleri»ye tıklayın. Bu durumda, eksik bileşenlere ilişkin tanıtım verileri eklenmeyecektir.',
    'If you would like to select a different template for the website or the Control Panel, click "Back"' 
        => 'Web sitesi veya Kontrol Paneli için farklı bir şablon seçmek isterseniz, «Geri» düğmesine tıklayın.',
    // NewChoice\StepDesign: ошибки
    'You need to select the website theme' => 'Bir web sitesi şablonu seçmeniz gerekiyor.',
    'You need to select the Control Panel theme' => 'Bir Kontrol Paneli şablonu seçmeniz gerekiyor.',
    'The template contains demonstration data for components that are missing from the current web application build' => 
        'Şablon, mevcut web uygulaması yapısında bulunmayan bileşenlere (modüller ve eklentiler) ait örnek verileri içermektedir.<br><br>Eksik bileşenlerin kimlik (ID) listesi:<br><br><ul>%s</ul>',

    // NewChoice\StepInfo: макет страницы
    'Information' => 'Bilgi',
    'Web application information' => 'Web uygulaması bilgileri',
    'At this installation step, you must specify the name and description used in the templates and on the pages of your web application' 
        => 'Kurulumun bu aşamasında, web uygulamanızdaki şablonlarda ve sayfalarda kullanılacak bir ad ve açıklama belirtmeniz gerekir',
    'After installation, you can change or specify new values for each language' 
        => 'Kurulumdan sonra, her bir dil için yeni değerler belirleyebilir veya mevcut değerleri değiştirebilirsiniz',
    'Name' => 'İsim',
    'Description' => 'Tanım',
    'The server\'s time zone will store data (taking into account the date and time) of users' 
        => 'Kullanıcı verileri (tarih ve saat dahil), sunucunun saat dilimine göre saklanacaktır',
    'Storing data in the same time zone will allow you to synchronize user interactions' 
        => 'Verilerin tek bir saat diliminde depolanması, kullanıcı etkileşimlerinin senkronize edilmesini mümkün kılacaktır',
    'We recommend choosing: GMT (+00:00) UTC - Coordinated Universal Time' 
        => 'Şunu seçmenizi öneririz: GMT (+00:00) UTC – eşgüdümlü evrensel zaman',
    'Server timezone' => 'Sunucu saat dilimi',
    'Default time zone, applies to users who do not have their own time zone specified' 
        => 'Varsayılan saat dilimi, kendisine özel bir saat dilimi tanımlanmamış olan kullanıcılar için geçerlidir',
    'The date and time displayed in the application will correspond to this time zone' 
        => 'Uygulamada görüntülenen tarih ve saat, bu saat dilimine karşılık gelecektir',
    'Default timezone' => 'Varsayılan saat dilimi',

    // NewChoice\StepAccount: макет страницы
    'Create an account' => 'Hesap oluşturma',
    'Create a user account' => 'Kullanıcı hesabı oluşturma',
    'At this stage, a Control panel user account is created with the "Super Administrator" user role' 
        => 'Bu aşamada, "Süper Yönetici" kullanıcı rolüne sahip bir Kontrol Paneli kullanıcı hesabı oluşturulur',
    'For a user with the "Super administrator" role, all installed components (modules, module extensions, widgets) are available with full access' 
        => '"Süper Yönetici" rolüne sahip bir kullanıcı için, yüklü tüm bileşenler (modüller, modül eklentileri, araçlar) tam erişim yetkisiyle kullanılabilir durumdadır',
    'as well as the ability to add users and their roles' => 'ayrıca kullanıcıları ve bu kullanıcıların rollerini ekleyebilme imkânı',
    'To access the Control Panel, you must specify the route (part of the URL path) without special characters (except for "-" and "_")' 
        => 'Denetim Masası\'na erişmek için, özel karakterler içermeyen (\'-\' ve \'_\' karakterleri hariç) bir yol (URL yolunun bir parçası) belirtmeniz gerekir',
    "For example: 'admin' etc." => "Örneğin: 'admin', 'admin-ka' vb.",
    'Route to Control panel' => 'Denetim Masası\'na giden yol',
    'Username' => 'Kullanıcı adı',
    'User password' => 'Kullanıcı parolası',
    'Password confirmation' => 'Parolayı onayla',
    'Password and Confirm password do not match' => '<b>Parola</b> ve <b>Parolayı onayla</b> alanları eşleşmiyor!',
    'Personal data' => 'Yöneticinin Kişisel Verileri',
    'Call name' => 'Çekici',
    'First name' => 'İsim',
    'Second name' => 'Soyadı',
    'Patronymic name' => 'Soyadı',
    'Admin' => 'Sayın Yönetici',
    'Administrator' => 'Yönetici',
    'how they will address you, for example: sir Ivan Ivanovich' => 'size nasıl hitap edileceği, örneğin: Bay Ivan Ivanovich',
    'To create account' => 'Bir hesap oluşturun',
    'User account successfully created' => 'Kullanıcı <b>hesabı</b> başarıyla oluşturuldu',
    'Super administrator' => 'Süper yönetici',
    'Super admins' => 'Süper yöneticiler',
    // NewChoice\StepAccount: ошибки
    'Cannot write to app configuration file "%s"' => '<b>Web uygulaması yapılandırma dosyasına</b> yazılamıyor "%s"',

    // NewChoice\StepFinish
    'Finish' => 'Çözüm',
    'Completing the installation' => 'Kurulum tamamlandı',
    'Installation of edition "%s" of your web application completed successfully' => 'Web uygulamanızın "%s" sürümünün kurulumu başarıyla tamamlandı',
    'For authorization in the Control panel, you will need to specify:' => 'Kontrol Paneli\'ne giriş yapmak için şunları sağlamanız gerekecektir:',
    'After the installation is completed, it is recommended to delete the installer directory "%s" or follow the links: "%s", "%s"'
        => 'Kurulum tamamlandıktan sonra, <b>"%s"</b> kurulum dizinini silmeniz veya şu bağlantıları takip etmeniz önerilir: "%s", "%s"',
    'After the installation is completed, it is recommended to delete the installer directory "%s" or follow the links "%s"'
        => 'Kurulum tamamlandıktan sonra, <b>"%s"</b> yükleyici dizinini silmeniz veya "%s" bağlantısını takip etmeniz önerilir',
    'Start over' => 'Baştan başla',
    'Go to Control panel' => 'Denetim Masası\'na gidin',
    'Go to Website' => 'Web Sitesine Git',
    // NewChoice\StepFinish: ошибки
    'Unable to delete directory "%s" to stop the installer. Do it manually.' 
        => 'Yükleyiciyi durdurmak için <b>"%s"</b> dizini silinemedi. Lütfen dizini manuel olarak silin.',

    // NewChoice\StepFinish
    'Database configuration file updated successfully' => 'Veritabanı yapılandırma dosyası başarıyla güncellendi',

    // Repair\StepAssembly: макет страницы
    'Updating' => 'Güncelleme',
    'Updating the settings will update (re-create) the following configuration files:' 
        => 'Parametrelerin güncellenmesi, aşağıdaki yapılandırma dosyalarının güncellenmesine (yeniden oluşturulmasına) olanak tanıyacaktır:',
    'configuration file of installed modules' => 'yüklü modüller için yapılandırma dosyası',
    'configuration file of installed extensions' => 'yüklü modül eklentileri için yapılandırma dosyası',
    'configuration file of installed widgets' => 'yüklü araçlar için yapılandırma dosyası',
    'shortcodes of installed components' => 'yüklü bileşenler için kısa kodlar',
    'events of installed components' => 'yüklü bileşenlerin olayları',
    'routing components for the Site and Control Panel' => 'Site ve Kontrol Paneli\'ne yönelik bileşenlerin yönlendirilmesi',
    'After searching for components, click the "Update" button' => 'Bileşenleri aradıktan sonra "<b>Güncelle</b>" düğmesine tıklayın',
    'Update' => 'Güncelleme',
    'Component configuration files updated successfully' => 'Bileşen yapılandırma dosyaları başarıyla güncellendi',
    // Repair\StepAssembly: ошибки
    'You need to install the web application' => 'Web uygulamasını yüklemeniz gerekiyor.',
];