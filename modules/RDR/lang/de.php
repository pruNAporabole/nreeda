<?php
/**
 * This file is part of Choqled PHP Framework and/or part of a BFLDEV Software Product.
 * This file is licensed under "GNU General Public License" Version 3 (GPL v3).
 * If you find a bug or you want to contribute some code snippets, let me know at http://bfldev.com/nreeda
 * Suggestions and ideas are also always helpful.

 * @author Roland Eigelsreiter (BrainFooLong)
 * @product nReeda - Web-based Open Source RSS/XML/Atom Feed Reader
 * @link http://bfldev.com/nreeda
**/

/**
* English translation
*/

$translations = array(
    "iewarning" => "Diese Applikation wurde nicht für Internet Explorer unter Version 9 (oder Version 9 mit Kompatibilitätsmodus) gemacht und getestet. Es empfiehlt sich NICHT derart alte Browser zu benutzen.",
    "event.1" => "Starte Update für {FEED}",
    "event.2" => "Update für {FEED} erfolgreich",
    "event.3" => "Cronjob gestartet",
    "event.4" => "Cronjob beendet",
    "event.5" => "Konnte keinen Parser für {FEED}{TEXT} finden. Vielleicht ist die Datei fehlerhaft oder wir haben bis jetzt noch nicht den richtigen Parser implementiert",
    "event.6" => "Konnte den Inhalt der URL nicht laden: {TEXT}",
    "event.7" => "Konnte das XML nicht parsen: {TEXT}",
    "event.8" => "Feed {TEXT} existiert bereits, Import abgebrochen",
    "event.10" => "OPML erfolgreich importiert",
    "event.11" => "Feed {FEED} erfolgreich hinzugefügt",
    "event.12" => "Datei erfolgreich importiert",
    "uncategorized" => "Nicht kategorisiert",
    "user.1" => "Administrator",
    "user.2" => "Benutzer",
    "form.validator.required" => "Wird benötigt",
    "form.validator.maxlength" => "Maximale Länge: %s Zeichen",
    "feedadmin.raw.1" => "RAW Inhalt",
    "feedadmin.raw.2" => "Der Original Inhalt des Feeds bevor die Ausgabeformatierung beginnt",
    "feedadmin.format.1" => "Formatierter Inhalt",
    "feedadmin.format.2" => "Der Inhalt so wie er nach der JS Formatierung aussieht",
    "feedadmin.js.1" => "Javascript Content Modifizierung (für alle Feeds von \"%s\")",
    "feedadmin.js.2" => 'Auszuführender JavaScript Code auf den RAW Inhalt
        Die Variable "html" ist verfügbar für die Content Modifikation. jQuery kann auch zum verändern der Variable genutzt werden.
        Beispiel (Entfernt alle %s Tags): <b>%s</b>',
    "archive.title" => "News Archiv",
    "archive.1" => "Beginn ab",
    "archive.2" => "Ende bis",
    "archive.3" => "Archiv durchsuchen",
    "mark.all.category" => "Alle News in dieser Ansicht als gelesen markieren",
    "end.newssection.1" => "Ende dieser News Sektion",
    "end.newssection.2" => "Um ältere/gelesene Einträge zu suchen gehe zum Archiv",
    "found.news" => "%s News gefunden",
    "wait.check" => "Bitte warten... Wir suchen weitere Einträge...",
    "mark.read" => "Als gelesen markieren",
    "saveit" => "Speichern",
    "remove.save" => "Entfernen von meiner Liste",
    "category" => "Kategorie",
    "adminview" => "Adminansicht",
    "note.opml.import" => "Du benutzt bereits einen anderen Reader Service? Checke den OPML Import für den Import von anderen Readern!",
    "note.addfeed" => "Willst du einen neuen Feed hinzufügen? Klicke auf das Plus Icon oben rechts in deiner Sidebar!",
    "note.bug" => "Fehler gefunden? Ideen? Besuche https://bfldev.com/nreeda",
    "note.opml.export" => "Willst du auf einen anderen Reader Service wechseln? Exportiere ein OPML File all deiner Feeds!",
    "note.search" => "Du willst in deinen Newsarchiv suchen? Klicke auf die Lupe rechts oben in deiner Sidebar!",
    "note.settings" => "Verändere das Aussehen deines Readers - Klick auf das Einstellungsicon oben rechts in deiner Sidebar!",
    "dashboard.eventlog" => "Event Log - Für Admins",
    "dashboard.clearlog" => "Log leeren",
    "reader.installed" => "Reader bereits installiert",
    "install.1" => "Willkommen zur nReeda Installation",
    "install.2" => 'Installieren deinen eigenen, hochwertigen, News Reader innerhalb von ein paar Sekunden.
            nReeda wird es dir sehr leicht machen deine Feeds zu organisieren.',
    "install.next" => "Nächster Schritt",
    "install.3" => "Serverkonfiguration wird überprüft",
    "install.4" => "Dateiberechtigungen",
    "install.5" => "Datenbank",
    "install.6" => "SimpleXML",
    "install.7" => "Datenbank",
    "install.8" => 'Wähle eine Datenbank Engine',
    "install.9" => 'Datenbank Name',
    "install.10" => 'Datenbank Host',
    "install.11" => 'MySQL Benutzername',
    "install.12" => 'MySQL Passwort',
    "install.13" => 'Warnung: Alle existierenden Tabellen die für den Reader benötigt werden, werden gelöscht falls sie schon existieren (RDR_* und _choqled_metadata)',
    "install.14" => 'Administrator Daten',
    "install.15" => 'Benutzername',
    "install.16" => 'Passwort',
    "install.17" => 'Installation abschliessen',
    "install.18" => 'Super, das Setup ist fast fertig.
        Nur mehr den Button drücken und du kannst sofort losstarten.',
    "install.19" => 'Installation abschliessen und zeig mir die Magie!',
    "install.20" => 'Installion wird durchgeführt - Seite aktualisiert sich automatisch!',
    "install.21" => 'Erledigt - Seite wird aktualisiert...',
    "install.22" => 'Ein Fehler ist aufgetaucht',
    "install.23" => 'Ordner "%s" existiert nicht, sie müssen ihn erstellen',
    "install.24" => 'Ordner "%s" ist nicht beschreibbar, Schreibschutz entfernen oder CHMOD Rechte korrekt setzen (777 für Vollzugriff)',
    "install.25" => "Sie müssen die PHP Optionn 'allow_url_fopen' auf '1' setzen",
    "install.26" => "Sie müssen Sockets in Ihrer PHP Konfiguration aktivieren",
    "install.27" => "SimpleXML Bibliothek ist nicht installiert",
    "install.28" => 'Ein MySQL Treiber muss für PHP installiert sein',
    "ok" => "OK",
    "login.1" => "Benutzername und/oder Passwort stimmt nicht",
    "login.2" => "Eingeloggt bleiben?",
    "username" => "Benutzername",
    "password" => "Passwort",
    "organize.1" => "Neuen Kategorienamen eingeben",
    "organize.2" => "Neue Kategorie speichern",
    "organize.3" => "Verwalte deine Kategorien",
    "organize.4" => "Importieren von einer Datei",
    "organize.5" => 'Dieser Import macht es möglich das sie eine Liste ihrer Feeds von einem anderen Reader importieren.
        Sie können ein OPML File oder eine Textdatei (pro Zeile eine URL) auswählen',
    "organize.6" => "Import gestartet... Bitte warten...",
    "organize.7" => "OPML / File Export",
    "organize.8" => "Laden sie eine Liste all ihrer Feeds im OPML oder Textformat herunter. OPML kann zb in anderen Reader Services dann wieder importiert werden",
    "organize.9" => "OPML Download",
    "organize.10" => "Textdatei Download",
    "organize.11" => "Verschieben sie diesen Feed in eine andere Kategorie",
    "organize.12" => "Verschieben",
    "organize.13" => "Sind sie sicher? Das kann nicht rückgängig gemacht werden!",
    "organize.14" => "Sind sie sicher? Alle Feeds in dieser Kategorie werden auch gelöscht!",
    "organize.15" => "Löschen",
    "organize.16" => "Verwalte deine Feeds",
    "upload" => "Upload",
    "rss.1" => 'RSS Feed Export',
    "rss.2" => 'Mit nReeda können sie auch selbst RSS Feeds erstellen. Sie können diesen RSS Feed dann wie jeden anderen Feed benutzen.',
    "rss.3" => 'Kategorien und Feeds wählen',
    "rss.4" => 'RSS Titel',
    "rss.5" => 'RSS Beschreibung',
    "rss.6" => 'Max. News insgesamt',
    "rss.7" => 'Max. News pro Kategorie (0 = alle)',
    "rss.8" => 'Max. News pro Feed (0 = alle)',
    "rss.9" => 'RSS generieren',
    "rss.10" => 'Nur Nummern erlaubt',
    "saved" => "Gespeichert",
    "settings.1" => "Einstellungen",
    "settings.2" => "Ändern sie das Passwort",
    "settings.3" => "Erneut eingeben",
    "yes" => "Ja",
    "no" => "Nein",
    "sidebar.1" => "Feed hinzufügen",
    "sidebar.2" => "Importieren von Datei",
    "sidebar.3" => "Suchen in News Titeln",
    "sidebar.4" => "Reader Einstellungen",
    "sidebar.5" => "Zeige Bilder",
    "sidebar.6" => "Standard",
    "sidebar.7" => "Große Artikel",
    "sidebar.8" => "Nur Headlines",
    "sidebar.9" => "Beim Scrollen als gelesen markieren",
    "sidebar.10" => "Alle News",
    "sidebar.11" => "Meine News",
    "sidebar.12" => "Mein Account",
    "sidebar.13" => "Organisieren",
    "sidebar.14" => "Einstellungen",
    "sidebar.15" => "RSS Export",
    "sidebar.16" => "Administration",
    "sidebar.17" => "System Tasks",
    "sidebar.18" => "Systemeinstellungen",
    "sidebar.19" => "Benutzer",
    "sidebar.21" => "Suchen",
    "sidebar.22" => "Feed URL hinzufügen",
    "admin.settings.1" => "Systemeinstellungen",
    "admin.settings.2" => "Einträge löschen sind die älter sind als...",
    "admin.settings.3" => "Events löschen die älter sind als...",
    "admin.settings.4" => "Nie",
    "months" => "Monat/e",
    "years" => "Jahr/e",
    "days" => "Tag/e",
    "weeks" => "Woche/n",
    "admin.update.1" => "Automatisches Feed Update",
    "admin.update.2" => 'Um den Update Prozess zu automatisieren ist es nötig eine bestimmte URL immer wieder aufzurufen.
            Das wird üblicherweise mit sogenannten Aufgaben(Windows) oder Cronjobs(Linux) gemacht.
            Falls sie keinen Zugang zu solchen Funktionen in ihrem System haben können sie auch kostenlose Online Services nutzen.
            Hier ist eine Liste solcher Services: %s

            Ihre URL für den Update Prozess lautet wie folgt (Hinweis: Diese URL ändert sich sobald sie den Reader im Dateisystem verschieben)
            %s

            Es wird ausdrücklich empfohlen nicht öfter als alle 5 Minuten ein Update auszuführen um Überlagerungen im Update Prozess zu vermeiden.

            Ein empfohlenes Beispiel für einen Cronjob in Linux:',
    "admin.update.3" => "Feeds manuell aktualisieren",
    "admin.update.4" => "Falls nötig kann man Feeds auch immer manuell aktualisieren",
    "admin.update.5" => "Alle Feeds aktualisieren",
    "admin.update.6" => "Update",
    "admin.update.7" => "Reader Applikationsupdate",
    "admin.update.8" => "Haben sie eine neuere Version heruntergeladen? Kein Problem, kopieren sie einfach alle Dateien über die alten Dateien.
            Führen sie danach ein Datenbank Update aus um das Update abzuschliessen.",
    "admin.update.9" => "Datenbank aktualisieren",
    "admin.update.10" => "Update erfolgreich ausgeführt",
    "form.validation.error" => "Einige Daten wurden nicht korrekt ausgefüllt",
    "admin.user.1" => "Benutzer Administration",
    "admin.user.2" => "Passwörter stimmen nicht überein",
    "admin.user.3" => "Benutzer bearbeiten",
    "admin.user.4" => "Benutzer erstellen",
    "admin.user.5" => "Rolle",
    "hello" => "Servus, %s",
    "feeds.1" => "Suchen nach '%s'"
);