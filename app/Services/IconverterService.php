<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 30.04.15
 * Time: 22:32
 */

namespace App\Services;
use Iconverter\ConsoleApplication;

class IconverterService
{
    public function generate($image)
    {
        // Create a unique folder in the storage directory
        $folder = uniqid();
        $absFolderPath = storage_path() . "/app/" . $folder;
        mkdir($absFolderPath);
        // Move the icon to the unique folder
        $icon = $image->getClientOriginalName();
        $image->move($absFolderPath, $icon);

        // Generate the icons into the unique folder
        $settings = require base_path() . "/vendor/maximkott/iconverter/settings.php";
        $iconverter = new ConsoleApplication(array('iconverter', $absFolderPath . '/' . $icon), $settings);
        $iconverter->run();

        // Zip the generated folder (without the initial cd, the whole
        // structure of the $absFolderPath will bi zipped too)
        exec("cd $absFolderPath/.. && zip -r $absFolderPath.zip ./$folder");
        // Delete generated folder
        exec("rm -r $absFolderPath");

        // Return zip file path
        return "$absFolderPath.zip";
    }
}