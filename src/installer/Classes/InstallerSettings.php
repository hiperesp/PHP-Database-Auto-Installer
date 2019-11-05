<?php
class InstallerSettings {
    public static $homepageAddress = "/";
    public static $installerAddress = "/installer";
    public static $configSampleFileLocation = __DIR__."/../../Config.sample.php";
    public static $configOutputFileLocation = __DIR__."/../../Config.php";
    public static $sqlFilesLocation = [
        __DIR__."/../sql/create.sql",
        __DIR__."/../sql/insert.sql",
    ];
    public static $installedOptions = [
        "/",
        "/admin"
    ];
}
