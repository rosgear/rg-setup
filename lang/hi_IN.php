<?php
/**
 * Этот файл является частью установщика веб-приложения RosGear.
 * 
 * Пакет индийской (хинди) локализации.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    '{name}'        => 'इंस्टालर',
    '{description}' => 'वेब एप्लिकेशन एडिशन इंस्टॉल करना',
    '{permissions}' => [],

    // Setup
    'Setup' => 'इंस्टालेशन',
    'edition' => 'संपादकीय कर्मचारी',
    'You need to fill in the field "%s"' => 'आपको "%s" फ़ील्ड भरना होगा।',
    'Attention!' => 'ध्यान!',
    'required fields' => 'आवश्यक फील्ड्स',
    'Error' => 'गलती',
    'Warning' => 'चेतावनी',
    'characters must be more than %s but less than %s' => 'अक्षर %s से बड़े लेकिन %s से छोटे होने चाहिए',
    'characters must be more than %s' => '%s से ज़्यादा अक्षर होने चाहिए',
    'characters must not exceed %s' => 'वर्ण %s से ज़्यादा नहीं होने चाहिए', 
    'The field "%s" must have no more than %s but less than %s characters' => '"<b>%s</b>" फ़ील्ड में <b>%s</b> से ज़्यादा और <b>%s</b> से कम कैरेक्टर नहीं होने चाहिए।',
    'The field "%s" must have at least %s characters' => '"<b>%s</b>" फ़ील्ड में कम से कम <b>%s</b> अक्षर होने चाहिए।',
    'The field "%s" must have no more than %s characters' => '"<b>%s</b>" फ़ील्ड में <b>%s</b> से ज़्यादा कैरेक्टर नहीं होने चाहिए।',
    
    // Setup: макет страницы
    'Welcome' => 'स्वागत',
    'Registration' => 'पंजीकरण',
    'Check' => 'परीक्षा',
    'Setup selection' => 'इंस्टॉलेशन का चयन करना',
    'Database selection' => 'डेटाबेस का चयन करना',
    'Back' => 'पीछे',
    'Next' => 'अगला',
    'Check connection' => 'कनेक्शन की जाँच करें',

    // 404: макет страницы
    'Web application installer' => 'वेब एप्लिकेशन इंस्टॉलर',
    'install' => 'स्थापित करना',
    'To install the web application follow the link %s' => 'वेब एप्लिकेशन इंस्टॉल करने के लिए, लिंक %s पर जाएं',
    'If you don\'t need an installer or the web application is already installed then remove the directory "%s"' => 'अगर आपको इंस्टॉलर की ज़रूरत नहीं है या वेब एप्लिकेशन पहले से इंस्टॉल है, तो "%s" डायरेक्टरी को डिलीट कर दें।',

    // CommonChoice\StepWelcome: макет страницы
    'Welcome to the RosGear installation' => 'RosGear इंस्टॉलेशन में आपका स्वागत है',
    'You will be guided through the entire installation process' => 'आपको पूरे इंस्टॉलेशन प्रोसेस में गाइड किया जाएगा।',
    'Please click the «Next» button to continue' => 'आगे बढ़ने के लिए कृपया "Next" बटन पर क्लिक करें।',
    'Choose language' => 'भाषा चुने',
    // CommonChoice\StepWelcome: сообщения
    'You need to select a language' => 'आपको एक भाषा चुननी होगी',

    // CommonChoice\StepCheck: макет страницы
    'Preliminary check' => 'प्रारंभिक जांच',
    'Your web application must meet the required parameters' => 'आपके वेब एप्लिकेशन को ज़रूरी पैरामीटर्स को पूरा करना होगा।',
    'If one of the parameters is highlighted in red, then you need to fix it' 
        => 'अगर कोई पैरामीटर लाल रंग में हाइलाइट किया गया है, तो आपको उसे ठीक करना होगा।',
    'If you continue with the installation without patching, your web application may be broken' 
        => 'अगर आप इसे ठीक किए बिना इंस्टॉलेशन जारी रखते हैं, तो हो सकता है कि आपका वेब एप्लिकेशन ठीक से काम न करे।',
    'Installed' => 'स्थापित',
    'Not installed' => 'स्थापित नहीं हे',
    'Not loaded' => 'कामोत्तेजित',
    'Loaded' => 'पर',
    'Parameter' => 'पैरामीटर',
    'Required' => 'आवश्यक',
    'Current' => 'मौजूदा',
    'Unknown' => 'अज्ञात',
    'and higher' => 'और ऊपर दिए गए',
    'Web server version' => 'वेब सर्वर संस्करण',
    'Version' => 'संस्करण',
    'PHP directives' => 'PHP निर्देश',
    'default time zone' => 'डिफ़ॉल्ट समय क्षेत्र',
    'Installer' => 'स्थापित',
    'enable opcode caching' => 'ऑपोड कैशिंग सक्षम करता है',
    'includes support for URL wrappers' => 'URL रैपर के लिए समर्थन शामिल है',
    'support for working with URL a number of functions' => 'कई फ़ंक्शन का इस्तेमाल करके URL के साथ काम करने के लिए सपोर्ट',
    'default encoding for functions' => 'फ़ंक्शन के लिए डिफ़ॉल्ट एन्कोडिंग',
    'the maximum allowable size of data sent by the POST method' => 'POST विधि का उपयोग करके भेजे गए डेटा का अधिकतम अनुमत आकार',
    'maximum uploaded size' => 'अधिकतम डाउनलोड करने योग्य फ़ाइल आकार',
    'the maximum amount of memory a script is allowed to use' => 'किसी स्क्रिप्ट को इस्तेमाल करने की अनुमति दी गई मेमोरी की अधिकतम मात्रा',
    'maximum time in seconds for script loading' => 'स्क्रिप्ट लोड होने में लगने वाला अधिकतम समय सेकंड में',
    'is short form PHP tags allowed' => 'क्या शॉर्ट फ़ॉर्म PHP टैग की अनुमति है?',
    'PHP Modules' => 'PHP मॉड्यूल',
    'MySQL module' => 'MySQL मॉड्यूल',
    'working with MySQL database server' => 'MySQL डेटाबेस सर्वर के साथ काम करना',
    'Session module' => 'सत्र मॉड्यूल',
    'user session management' => 'उपयोगकर्ता सत्र प्रबंधन',
    'JSON module' => 'JSON मॉड्यूल',
    'the module implements work with the JSON text data exchange format' => 'मॉड्यूल JSON टेक्स्ट डेटा एक्सचेंज फ़ॉर्मेट के साथ काम करता है',
    'Module Multibyte strings' => 'मल्टीबाइट स्ट्रिंग्स मॉड्यूल',
    'module provides functions for working with multibyte strings' => 'मॉड्यूल मल्टी-बाइट स्ट्रिंग्स के साथ काम करने के लिए फ़ंक्शन देता है',
    'cURL module' => 'cURL मॉड्यूल',
    'library of functions for working with URL' => 'URL हैंडलिंग फ़ंक्शन लाइब्रेरी',
    'Internationalization module' => 'अंतर्राष्ट्रीयकरण मॉड्यूल',
    'formatting, transliteration, encoding conversion, etc.' => 'फ़ॉर्मेटिंग, ट्रांसलिटरेशन, एन्कोडिंग कन्वर्ज़न, वगैरह।',
    'Image processing module' => 'छवि प्रसंस्करण मॉड्यूल',
    'working with image files in various formats' => 'विभिन्न प्रारूपों में छवि फ़ाइलों के साथ काम करना',
    'Zip compression and archiving module' => 'ज़िप संपीड़न और संग्रहण मॉड्यूल',
    'allows you to read and write to ZIP archives' => 'आपको ZIP आर्काइव को पढ़ने और लिखने की सुविधा देता है',
    'libXML module' => 'libXML मॉड्यूल',
    'working with the XML file format' => 'XML फ़ाइल फ़ॉर्मेट के साथ काम करना',
    'Redis server connection module' => 'रेडिस सर्वर कनेक्शन मॉड्यूल',
    'storing data on a remote server' => 'दूरस्थ सर्वर पर डेटा संग्रहीत करना',
    // CommonChoice\StepCheck: сообщения
    'There are parameters that need to be corrected' => 'कुछ पैरामीटर्स हैं जिन्हें ठीक करने की ज़रूरत होगी।',

    // CommonChoice\StepChoice: макет страницы
    'Installation selection' => 'इंस्टॉलेशन का चयन करना',
    'Select installation type' => 'इंस्टॉलेशन का प्रकार चुनें',
    'New installation' => 'नई स्थापना',
    'Install the RosGear web application' => 'RosGear वेब एप्लिकेशन इंस्टॉल करें',
    'Attention! This choice may overwrite the previous installed version of the RosGear Web application' 
        => 'चेतावनी! यह सिलेक्शन RosGear वेब एप्लिकेशन के पहले से इंस्टॉल किए गए वर्शन को ओवरराइट कर सकता है।',
    'Installed version update' => 'इंस्टॉल किए गए वर्शन को अपडेट करना',
    'Update files and database' => 'फ़ाइलें और डेटाबेस अपडेट करना',
    'Update database connection settings' => 'डेटाबेस कनेक्शन पैरामीटर अपडेट करना',
    'If in your web application, you only need to change the database connection settings' 
        => 'अगर आपको अपने वेब एप्लिकेशन में सिर्फ़ डेटाबेस कनेक्शन सेटिंग्स बदलने की ज़रूरत है',
    'Update the settings of installed components' => 'इंस्टॉल किए गए कंपोनेंट्स की सेटिंग्स अपडेट करना',
    'If the configuration files of installed components or their routing have been deleted or damaged, use this item' 
        => 'अगर इंस्टॉल किए गए कंपोनेंट्स की कॉन्फ़िगरेशन फ़ाइलें या उनकी रूटिंग डिलीट हो गई हैं या खराब हो गई हैं, तो इस आइटम का इस्तेमाल करें।',
    // CommonChoice\StepChoice: сообщения
    'You need to select the installation type' => 'आपको इंस्टॉलेशन टाइप चुनना होगा।',

    // NewChoice\StepLicense: лицензионное соглашение
    'License' => 'लाइसेंस',
    'License agreement' => 'लाइसेंस समझौता',
    'I have read and accept the license agreement' => 'मैंने लाइसेंस एग्रीमेंट पढ़ लिया है और उसे स्वीकार करता हूँ',
    'Unable to load license agreement file "%s"' => 'लाइसेंस एग्रीमेंट फ़ाइल "%s" लोड नहीं हो पा रही है।',
    'To continue you must accept the license agreement' => 'जारी रखने के लिए, आपको लाइसेंस एग्रीमेंट स्वीकार करना होगा।',

    // NewChoice\StepRegistration: макет страницы
    'Web application registration' => 'वेब एप्लिकेशन रजिस्टर करना',
    'Marketplace' => 'बाजार',
    'A license key is required to receive updates and install new components via %s' 
        => '%s के ज़रिए अपडेट पाने और नए कंपोनेंट इंस्टॉल करने के लिए लाइसेंस की की ज़रूरत होती है',
    'If the key is not specified, then there will be restrictions on the operation of your web application' 
        => 'अगर की नहीं बताई गई है, तो आपके वेब एप्लिकेशन के ऑपरेशन में लिमिटेशन होंगी।',
    'The license key can be registered and specified after the web application is installed' 
        => 'वेब एप्लिकेशन इंस्टॉल करने के बाद लाइसेंस की को रजिस्टर और बताया जा सकता है।',
    'License key' => 'लाइसेंस कुंजी',
    'specify license key after installation' => 'इंस्टॉलेशन के बाद लाइसेंस की बताएं',
    // NewChoice\StepRegistration: поля
    'License Key' => 'लाइसेंस कुंजी',

    // NewChoice\StepDb: макет страницы
    'Database connection' => 'डेटाबेस से कनेक्ट करना',
    'Enter information to connect to your web application\'s database' 
        => 'अपने वेब एप्लिकेशन के डेटाबेस के लिए कनेक्शन जानकारी डालें।',
    'If you don\'t already have a database, the installer will try to create one (unless the "%s" checkbox is selected)' 
        => 'अगर आपके पास अभी तक डेटाबेस नहीं है, तो इंस्टॉलर एक बनाने की कोशिश करेगा (जब तक कि "%s" चेकबॉक्स चुना न गया हो)।',
    'Table prefix' => 'तालिका उपसर्ग',
    'Database user password' => 'डेटाबेस उपयोगकर्ता पासवर्ड',
    'Database username' => 'डेटाबेस उपयोगकर्ता नाम',
    'Database name' => 'डेटाबेस का नाम',
    'Database server' => 'डेटाबेस सर्वर',
    'Server port' => 'सर्वर पोर्ट',
    'Database' => 'डेटाबेस',
    'the database is already created on the server' => 'डेटाबेस पहले से ही सर्वर पर बनाया गया है',
    'Database server connection check completed successfully' => 'डेटाबेस सर्वर से <b>कनेक्शन टेस्ट</b> सफलतापूर्वक पूरा हो गया।',
    // NewChoice\StepDb: сообщения
    'Unable to find connection driver "%s"' => 'कनेक्शन ड्राइवर "%s" नहीं मिल पाया',

    // NewChoice\StepDbCharset: макет страницы
    'Charset selection' => 'एन्कोडिंग का चयन',
    'Selecting the connection encoding' => 'डेटाबेस सर्वर से कनेक्ट करने के लिए एन्कोडिंग चुनना',
    'Specify the encoding and collation for a correct connection to the database server' 
        => 'डेटाबेस सर्वर से ठीक से कनेक्ट करने के लिए कृपया एन्कोडिंग और कोलेशन बताएं।',
    'use default UTF8 encoding' => 'डिफ़ॉल्ट रूप से UTF8 एन्कोडिंग का उपयोग करें',
    'If you can\'t select the encoding and collation you want, then check "%s"' 
        => 'अगर आप मनचाही एन्कोडिंग और कोलेशन नहीं चुन पा रहे हैं, तो "%s" बॉक्स को चेक करें।',
    'The process may fail depending on the database settings or if the database user has insufficient privileges' 
        => 'डेटाबेस सेटिंग्स के आधार पर या अगर डेटाबेस यूज़र के पास कम अधिकार हैं, तो प्रोसेस फेल हो सकता है।',
    '%s: the database will be created during the connection test "%s"' 
        => '<b>%s</b> कनेक्शन चेक करते समय, डेटाबेस <b>"%s"</b> बनाया जाएगा',
    'If the database was previously created and you did not check the "%s" checkbox, then the connection check will fail' 
        => 'अगर डेटाबेस पहले से बना हुआ है और आपने "%s" चेकबॉक्स को चेक नहीं किया है, तो कनेक्शन चेक करते समय आपको एक एरर मिलेगा।',
    'To fix the error, go back one step and check the box' 
        => 'एरर को ठीक करने के लिए, एक स्टेप पीछे जाएं और बॉक्स को चेक करें।',
    'Charset' => 'कनेक्शन एन्कोडिंग',
    'Collate'  => 'तुलना',
    // NewChoice\StepDbCharset: сообщения
    'Attention! It is necessary in the previous step to select a database and make a connection' 
        => '<b>ध्यान दें!</b> आपको पिछले स्टेप में एक डेटाबेस चुनना होगा और कनेक्शन बनाना होगा।',
    'Database "%s" created successfully' => 'डेटाबेस <b>"%s"</b> सफलतापूर्वक बनाया गया।',
    // NewChoice\StepDbCharset: ошибки
    'Error connecting to database server' => 'डेटाबेस सर्वर से कनेक्ट करने में त्रुटि',
    'Database driver error' => 'डेटाबेस ड्राइवर त्रुटि',
    'SQL query execution error' => 'SQL क्वेरी निष्पादन त्रुटि',

    // NewChoice\StepCheckout: макет страницы
    'Checkout' => 'नियंत्रण',
    'Web application files checkout' => 'वेब एप्लिकेशन फ़ाइलों तक एक्सेस को कंट्रोल करना',
    'You can set the recommended access rights using the file manager or the control panel of your hosting' 
        => 'आप फ़ाइल मैनेजर या अपने होस्टिंग कंट्रोल पैनल का इस्तेमाल करके रिकमेंडेड एक्सेस राइट्स सेट कर सकते हैं।',
    'The files and directories of the web application must have the appropriate permissions' 
        => 'वेब एप्लिकेशन फ़ाइलों और डायरेक्टरी के पास सही एक्सेस राइट्स होने चाहिए।',
    'If the files or directories do not have the recommended permissions, the installer will not be able to create or modify the configuration files' 
        => 'अगर फ़ाइलों या डायरेक्टरी के पास बताई गई परमिशन नहीं हैं, तो इंस्टॉलर कॉन्फ़िगरेशन फ़ाइलें बना या बदल नहीं पाएगा, जिससे इंस्टॉलेशन में रुकावट आएगी।',
    'Since you are using Windows OS, file and directory permissions will not be checked'
        => 'क्योंकि आप <b>Windows OS</b> इस्तेमाल कर रहे हैं, इसलिए फ़ाइल और डायरेक्टरी परमिशन चेक नहीं की जाएंगी।',
    // NewChoice\StepCheckout: таблица
    'Directory / file name' => 'निर्देशिका/फ़ाइल नाम',
    'Permissions' => 'पहुँच अधिकार',
    'Exists' => 'उपस्थित',
    // NewChoice\StepCheckout: сообщения
    'Need to set permissions "%s" to directory "%s".' => 'आपको डायरेक्टरी "%s" पर "%s" के लिए परमिशन सेट करनी होगी।',
    'Unable to determine directory permissions "%s".' => 'डायरेक्टरी "%s" के लिए डायरेक्टरी परमिशन पता नहीं चल पा रही है।',
    'Directory "%s" does not exist.' => 'डायरेक्टरी "%s" मौजूद नहीं है।',
    'Need to set permissions "%s" to file "%s".' => 'आपको फ़ाइल "%s" पर परमिशन "%s" पर सेट करनी होगी।',
    'Error writing to file. Unable to create or write file, no permissions.' => 'फ़ाइल में लिखने में एरर। एक्सेस राइट्स कम होने की वजह से फ़ाइल नहीं बना पा रहे हैं या उसमें लिख नहीं पा रहे हैं।',
    'File template "%s" not found for installation.' => 'इंस्टॉलेशन के लिए फ़ाइल टेम्पलेट "%s" नहीं मिला।',
    'Unable to determine file permissions "%s".' => 'फ़ाइल "%s" के लिए फ़ाइल परमिशन तय नहीं कर पा रहे हैं.',
    'File "%s" not found.' => 'फ़ाइल "%s" नहीं मिली.',
    // NewChoice\StepCheckout: файлы и каталоги
    'directory of web application files' => 'वेब एप्लिकेशन फ़ाइलों की <b>डायरेक्टरी</b>',
    'directory of web application download files' => 'वेब एप्लिकेशन डाउनलोड फ़ाइलों की <b>डायरेक्टरी</b>',
    'directory for localizing web application files' => 'वेब एप्लिकेशन फ़ाइल लोकलाइज़ेशन की <b>डायरेक्टरी</b>',
    'directory site files' => 'साइट फ़ाइलों का <b>कैटलॉग</b>',
    'directory of web application temporary files' => 'टेम्पररी वेब एप्लिकेशन फ़ाइलों की <b>डायरेक्टरी</b>',
    'directory of web application component base templates' => '<b>डायरेक्टरी</b> बेसिक वेब एप्लिकेशन कंपोनेंट टेम्पलेट्स',
    'directory of installed PHP libraries' => 'इंस्टॉल की गई PHP लाइब्रेरी की <b>डायरेक्टरी</b>',
    'directory of web application components' => 'वेब एप्लिकेशन कंपोनेंट्स का <b>कैटलॉग</b>',
    'directory of web application configuration files' => 'वेब एप्लिकेशन कॉन्फ़िगरेशन फ़ाइलों की <b>डायरेक्टरी</b>',
    'installed widgets configuration file' => 'इंस्टॉल किए गए विजेट की <b>कॉन्फ़िगरेशन फ़ाइल</b>',
    'installed modules configuration file' => 'इंस्टॉल किए गए मॉड्यूल के लिए कॉन्फ़िगरेशन फ़ाइल',
    'configuration file of installed module extensions' => 'इंस्टॉल किए गए मॉड्यूल एक्सटेंशन की <b>कॉन्फ़िगरेशन फ़ाइल</b>',
    'shortcode manager configuration file (shortcodes)' => '<b>शॉर्टकोड मैनेजर कॉन्फ़िगरेशन फ़ाइल</b>',
    'database connection configuration file' => '<b>डेटाबेस कनेक्शन कॉन्फ़िगरेशन फ़ाइल</b>',
    'web application configuration file' => '<b>वेब एप्लिकेशन कॉन्फ़िगरेशन फ़ाइल</b>',
    'license key file' => '<b>लाइसेंस कुंजी फ़ाइल</b>',
    'web application unified configuration file' => '<b>वेब एप्लिकेशन यूनिफाइड कॉन्फ़िगरेशन फ़ाइल</b>',
    'service manager configuration file' => '<b>सर्विस मैनेजर कॉन्फ़िगरेशन फ़ाइल</b>',
    'language configuration file' => '<b>फ़ाइल</b> भाषा कॉन्फ़िगरेशन',
    'file system manager configuration file for Flysystem PHP package' => 'Flysystem PHP पैकेज के लिए फाइलसिस्टम मैनेजर कॉन्फ़िगरेशन फ़ाइल',
    'MIME type configuration file' => 'MIME प्रकार कॉन्फ़िगरेशन फ़ाइल',
    'control panel configuration file directory' => 'कंट्रोल पैनल कॉन्फ़िगरेशन फ़ाइलों की <b>डायरेक्टरी</b>',
    'control panel routing configuration file' => 'कंट्रोल पैनल रूटिंग कॉन्फ़िगरेशन फ़ाइल',
    'control panel service manager configuration file' => 'कंट्रोल पैनल सर्विस मैनेजर कॉन्फ़िगरेशन फ़ाइल',
    'site configuration file directory' => 'साइट कॉन्फ़िगरेशन फ़ाइलों का <b>कैटलॉग</b>',
    'site routing configuration file' => '<b>साइट रूटिंग कॉन्फ़िगरेशन फ़ाइल</b>',
    'site service manager configuration file' => 'साइट सेवा प्रबंधक कॉन्फ़िगरेशन फ़ाइल',
    'console configuration files directory' => 'कंसोल कॉन्फ़िगरेशन फ़ाइलों की <b>डायरेक्टरी</b>',
    'console service manager configuration file' => '<b>कंसोल सर्विस मैनेजर कॉन्फ़िगरेशन फ़ाइल</b>',

    // NewChoice\StepAssembly: макет страницы
    'Assembly' => 'विधानसभा',
    'Building a web application edition' => 'वेब एप्लिकेशन एडिशन बनाना',
    'Edition assembly is the search and installation of components (modules, module extensions, widgets) from the application repository' 
        => 'एडिशन बनाना, वेब एप्लिकेशन रिपॉजिटरी से कंपोनेंट्स (मॉड्यूल, मॉड्यूल एक्सटेंशन, विजेट) को खोजने और इंस्टॉल करने का प्रोसेस है।',
    'Adding components to the database and updating configuration files' => 'डेटाबेस में कंपोनेंट जोड़ना और कॉन्फ़िगरेशन फ़ाइलें अपडेट करना',
    'After searching for the components, click the "Install components" button' => 'कॉम्पोनेंट्स खोजने के बाद, <b>"कंपोनेंट्स इंस्टॉल करें"</b> बटन पर क्लिक करें',
    'Installed components will be highlighted with green checkmarks' => 'इंस्टॉल किए गए कंपोनेंट्स हरे चेकमार्क से हाइलाइट किए जाएंगे।',
    'During the installation process, errors may occur due to the unstable operation of the web server' 
        => 'इंस्टॉलेशन प्रोसेस के दौरान, वेब सर्वर के ठीक से काम न करने की वजह से एरर आ सकते हैं।',
    'The following components were found in the repository' => 'रिपॉजिटरी में ये कम्पोनेंट मिले।',
    'Application modules' => 'वेब अनुप्रयोग मॉड्यूल',
    'Module name' => 'मोड्यूल का नाम',
    'Application module extensions' => 'वेब एप्लिकेशन मॉड्यूल एक्सटेंशन',
    'Module extension name' => 'मॉड्यूल एक्सटेंशन का नाम',
    'Application widgets' => 'वेब एप्लिकेशन विजेट',
    'Widget name' => 'विजेट का नाम',
    'Application plugins' => 'विजेट का नाम',
    'Plugin name' => 'प्लगइन का नाम',
    'Install components' => 'घटक स्थापित करें',
    'To populate your web application with data, you need to check the box below' 
        => 'अपने वेब एप्लिकेशन में डेटा भरने के लिए, आपको नीचे दिए गए बॉक्स को चेक करना होगा।',
    'Filling with demo data depends on the edition of your web application' 
        => 'डेमो डेटा का कंटेंट आपके वेब एप्लिकेशन के एडिशन पर निर्भर करता है।',
    'Apply demo data' => 'डेमो डेटा लागू करें',
    // NewChoice\StepAssembly: сообщения
    'Unable to install, missing modules in repository' => 'इंस्टॉल नहीं हो पा रहा है, रिपॉजिटरी में <b>कोई मॉड्यूल नहीं</b> है',
    'BUILD Succeeded' => 'अपना वेब एप्लिकेशन एडिशन सफलतापूर्वक <b>बिल्डिंग</b> करें',
    // NewChoice\StepAssembly: ошибки
    'Unable to load SQL query map file "%s"' => 'SQL क्वेरी मैप फ़ाइल "%s" लोड नहीं हो पा रही है',
    'No message, but call exception "%s"' =>  'कोई एरर मैसेज नहीं था, लेकिन एक्सेप्शन "<b>%s</b>" आया था।.',
    'Perhaps your application has configuration files (*.so.php) - delete them' 
        => 'आपके एप्लिकेशन में पहले से ही कॉन्फ़िगरेशन फ़ाइलें (*.so.php) हो सकती हैं - <b>उन्हें डिलीट करें</b>.',
    'SQL query map error' => 'SQL क्वेरी मैप त्रुटि',
    '%s SQL query: %s' => '%s <br><b>SQL क्वेरी:</b> %s',
    'Cannot write to database configuration file "%s"' => '<b>डेटाबेस कॉन्फ़िगरेशन फ़ाइल</b> "%s" में लिखने में असमर्थ',
    'Cannot write to configuration file "%s"' => '<b>कॉन्फ़िगरेशन फ़ाइल</b> "%s" में लिखने में असमर्थ',
    'File write error' => 'फ़ाइल लिखने में त्रुटि',
    'Errors occurred while installing modules' => 'मॉड्यूल के इंस्टॉलेशन के दौरान एरर आए.',
    'Errors occurred during the installation of module extensions' => 'मॉड्यूल एक्सटेंशन के इंस्टॉलेशन के दौरान एरर आए.',
    'Errors occurred while installing widgets' => 'विजेट इंस्टॉल करते समय एरर आए.',

    // NewChoice\StepDesign: макет страницы
    'Design' => 'डिज़ाइन',
    'Web application design' => 'वेब एप्लिकेशन डिज़ाइन',
    'Select a design template for your website and Control Panel' => 'अपनी वेबसाइट और कंट्रोल पैनल के लिए एक डिज़ाइन टेम्पलेट चुनें',
    'The templates differ in their external design and basic settings' => 'टेम्पलेट्स दिखने में और बेसिक सेटिंग्स में अलग-अलग होते हैं।',
    'Website template' => 'टेम्पलेट <b>साइट</b>',
    'Panel Control template' => 'टेम्पलेट <b>कंट्रोल पैनल</b>',
    'If you want to populate your web application with sample template data, you need to check the box below' =>
        'अगर आप अपने वेब एप्लिकेशन में टेम्पलेट से सैंपल डेटा डालना चाहते हैं, तो आपको नीचे दिए गए बॉक्स को चेक करना होगा।',
    'Not all templates have demo data' => 'सभी टेम्पलेट्स में डेमो डेटा नहीं होता है।',
    'Apply template demo data' => 'टेम्पलेट डेमो डेटा लागू करें',
    'there is demo data' => 'डेमो डेटा है',
    'To continue the installation, click "Next". In this case, demonstration data for missing components will not be added'
        => 'इंस्टॉलेशन जारी रखने के लिए, "Next" पर क्लिक करें। इस मामले में, गायब कॉम्पोनेंट्स के लिए डेमो डेटा नहीं जोड़ा जाएगा।.',
    'If you would like to select a different template for the website or the Control Panel, click "Back"' 
        => 'अगर आप अपनी वेबसाइट या कंट्रोल पैनल के लिए कोई दूसरा टेम्पलेट चुनना चाहते हैं, तो "बैक" पर क्लिक करें।.',
    // NewChoice\StepDesign: ошибки
    'You need to select the website theme' => 'आपको एक वेबसाइट टेम्पलेट चुनना होगा.',
    'You need to select the Control Panel theme' => 'आपको एक कंट्रोल पैनल टेम्पलेट चुनना होगा.',
    'The template contains demonstration data for components that are missing from the current web application build' => 
        'टेम्पलेट में उन कंपोनेंट्स (मॉड्यूल और एक्सटेंशन) के लिए सैंपल डेटा है जो मौजूदा वेब एप्लिकेशन बिल्ड से गायब हैं।<br><br>गायब कंपोनेंट ID की लिस्ट:<br><br><ul>%s</ul>',

    // NewChoice\StepInfo: макет страницы
    'Information' => 'जानकारी',
    'Web application information' => 'वेब एप्लिकेशन के बारे में जानकारी',
    'At this installation step, you must specify the name and description used in the templates and on the pages of your web application' 
        => 'इस इंस्टॉलेशन स्टेप में आपको एक नाम और डिस्क्रिप्शन बताना होगा जो आपके वेब एप्लिकेशन के टेम्प्लेट और पेज पर इस्तेमाल होगा।',
    'After installation, you can change or specify new values for each language' 
        => 'इंस्टॉलेशन के बाद, आप हर भाषा के लिए नई वैल्यू बदल या बता सकते हैं।',
    'Name' => 'नाम',
    'Description' => 'विवरण',
    'The server\'s time zone will store data (taking into account the date and time) of users' 
        => 'सर्वर के टाइम ज़ोन का इस्तेमाल यूज़र डेटा (तारीख और समय सहित) स्टोर करने के लिए किया जाएगा।',
    'Storing data in the same time zone will allow you to synchronize user interactions' 
        => 'एक टाइम ज़ोन में डेटा स्टोर करने से यूज़र्स अपने इंटरैक्शन को सिंक्रोनाइज़ कर पाएंगे।',
    'We recommend choosing: GMT (+00:00) UTC - Coordinated Universal Time' 
        => 'हम चुनने की सलाह देते हैं: GMT (+00:00) UTC - कोऑर्डिनेटेड यूनिवर्सल टाइम',
    'Server timezone' => 'सर्वर समय क्षेत्र',
    'Default time zone, applies to users who do not have their own time zone specified' 
        => 'डिफ़ॉल्ट टाइम ज़ोन का इस्तेमाल उन यूज़र्स के लिए किया जाता है जिनका अपना टाइम ज़ोन नहीं बताया गया है।',
    'The date and time displayed in the application will correspond to this time zone' 
        => 'एप्लिकेशन में दिखाई गई तारीख और समय इसी टाइम ज़ोन के हिसाब से होंगे।',
    'Default timezone' => 'डिफ़ॉल्ट समय क्षेत्र',

    // NewChoice\StepAccount: макет страницы
    'Create an account' => 'खाता बनाएं',
    'Create a user account' => 'उपयोगकर्ता खाता बनाना',
    'At this stage, a Control panel user account is created with the "Super Administrator" user role' 
        => 'इस स्टेज पर, "सुपर एडमिनिस्ट्रेटर" यूज़र रोल वाला एक कंट्रोल पैनल यूज़र अकाउंट बनाया जाता है।',
    'For a user with the "Super administrator" role, all installed components (modules, module extensions, widgets) are available with full access' 
        => '"सुपर एडमिनिस्ट्रेटर" रोल वाले यूज़र के पास सभी इंस्टॉल किए गए कंपोनेंट्स (मॉड्यूल, मॉड्यूल एक्सटेंशन, विजेट) का पूरा एक्सेस होता है।',
    'as well as the ability to add users and their roles' => 'साथ ही यूज़र्स और उनके रोल्स को जोड़ने की क्षमता',
    'To access the Control Panel, you must specify the route (part of the URL path) without special characters (except for "-" and "_")' 
        => 'कंट्रोल पैनल को एक्सेस करने के लिए, आपको रूट (URL पाथ का हिस्सा) को स्पेशल कैरेक्टर के बिना बताना होगा ("-" और "_" को छोड़कर)',
    "For example: 'admin' etc." => "उदाहरण के लिए: 'admin', 'admin-ka', आदि।",
    'Route to Control panel' => 'कंट्रोल पैनल के लिए दिशा-निर्देश',
    'Username' => 'उपयोगकर्ता नाम',
    'User password' => 'उपयोगकर्ता पासवर्ड',
    'Password confirmation' => 'पासवर्ड की पुष्टि कीजिये',
    'Password and Confirm password do not match' => '<b>पासवर्ड</b> और <b>पासवर्ड कन्फर्म करें</b> मैच नहीं करते!',
    'Personal data' => 'एडमिनिस्ट्रेटर का पर्सनल डेटा',
    'Call name' => 'निवेदन',
    'First name' => 'नाम',
    'Second name' => 'उपनाम',
    'Patronymic name' => 'उपनाम',
    'Admin' => 'व्यवस्थापक',
    'Administrator' => 'प्रशासक',
    'how they will address you, for example: sir Ivan Ivanovich' => 'वे आपको कैसे संबोधित करेंगे, उदाहरण के लिए: सर इवान इवानोविच',
    'To create account' => 'खाता बनाएं',
    'User account successfully created' => '<b>यूज़र अकाउंट</b> सफलतापूर्वक बना लिया गया है',
    'Super administrator' => 'सुपर प्रशासक',
    'Super admins' => 'सुपर प्रशासक',
    // NewChoice\StepAccount: ошибки
    'Cannot write to app configuration file "%s"' => '<b>वेब एप्लिकेशन कॉन्फ़िगरेशन फ़ाइल</b> "%s" में लिखने में असमर्थ',

    // NewChoice\StepFinish
    'Finish' => 'निष्कर्ष',
    'Completing the installation' => 'स्थापना पूर्ण करना',
    'Installation of edition "%s" of your web application completed successfully' => 'आपके वेब एप्लिकेशन के एडिशन "%s" का इंस्टॉलेशन सफलतापूर्वक पूरा हो गया है।',
    'For authorization in the Control panel, you will need to specify:' => 'कंट्रोल पैनल में लॉग इन करने के लिए, आपको यह बताना होगा:',
    'After the installation is completed, it is recommended to delete the installer directory "%s" or follow the links: "%s", "%s"'
        => 'इंस्टॉलेशन पूरा होने के बाद, इंस्टॉलर डायरेक्टरी <b>"%s"</b> को डिलीट करने या इन लिंक्स को फॉलो करने की सलाह दी जाती है: "%s", "%s"',
    'After the installation is completed, it is recommended to delete the installer directory "%s" or follow the links "%s"'
        => 'इंस्टॉलेशन पूरा होने के बाद, इंस्टॉलर डायरेक्टरी <b>"%s"</b> को डिलीट करने या "%s" लिंक को फॉलो करने की सलाह दी जाती है।',
    'Start over' => 'प्रारंभ करें',
    'Go to Control panel' => 'कंट्रोल पैनल पर जाएं',
    'Go to Website' => 'वेबसाइट पर जाएं',
    // NewChoice\StepFinish: ошибки
    'Unable to delete directory "%s" to stop the installer. Do it manually.' 
        => 'इंस्टॉलर को रोकने के लिए डायरेक्टरी <b>"%s"</b> को डिलीट नहीं किया जा सका। कृपया इसे मैन्युअली करें।',

    // NewChoice\StepFinish
    'Database configuration file updated successfully' => 'डेटाबेस कॉन्फ़िगरेशन फ़ाइल को सफलतापूर्वक अपडेट कर दिया गया है।',

    // Repair\StepAssembly: макет страницы
    'Updating' => 'अद्यतन',
    'Updating the settings will update (re-create) the following configuration files:' 
        => 'सेटिंग्स को अपडेट करने से नीचे दी गई कॉन्फ़िगरेशन फ़ाइलें अपडेट (फिर से बनेंगी) होंगी:',
    'configuration file of installed modules' => 'इंस्टॉल किए गए मॉड्यूल की कॉन्फ़िगरेशन फ़ाइल',
    'configuration file of installed extensions' => 'इंस्टॉल किए गए मॉड्यूल एक्सटेंशन की कॉन्फ़िगरेशन फ़ाइल',
    'configuration file of installed widgets' => 'इंस्टॉल किए गए विजेट के लिए कॉन्फ़िगरेशन फ़ाइल',
    'shortcodes of installed components' => 'इंस्टॉल किए गए घटकों के लिए शॉर्टकोड',
    'events of installed components' => 'स्थापित घटक ईवेंट',
    'routing components for the Site and Control Panel' => 'साइट और कंट्रोल पैनल के लिए रूटिंग कंपोनेंट',
    'After searching for components, click the "Update" button' => 'कॉम्पोनेंट खोजने के बाद, "<b>अपडेट</b>" बटन पर क्लिक करें',
    'Update' => 'ताज़ा करना',
    'Component configuration files updated successfully' => 'कम्पोनेंट कॉन्फ़िगरेशन फ़ाइलें सफलतापूर्वक अपडेट हो गई हैं।',
    // Repair\StepAssembly: ошибки
    'You need to install the web application' => 'आपको वेब एप्लिकेशन इंस्टॉल करना होगा।.',
];