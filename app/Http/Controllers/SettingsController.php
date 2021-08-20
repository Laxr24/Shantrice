<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    
    // Shows the settings homepage
    public function index(){

        //    file and folder path for the site setting config
           $folderPath = base_path().'/site'; 
           $siteSettingsConfig = base_path().'/site/settings/site.json'; 
           $homeConfigPath = base_path().'/site/homepage.json'; 
        //  configuration model 
           $config = [
            "site-name"=> null ?? '', 
            "site-title"=> null ?? '', 
            "site-url"=> null ?? '', 
            "favicon-url"=> null ?? '', 
            "meta-title"=> null ?? '', 
            "meta-description"=> null ?? '', 
            "search-engine-index"=> null ?? '', 
           ]; 
    
           $homePage = [
                'image'=> null ?? '', 
                'title'=> null ?? '', 
                'tagline'=> null ?? '', 
                'content'=> null ?? '', 
                'phone'=> null ?? '', 
                'email'=> null ?? ''
           ]; 
    
           $encodedConfig = json_encode($config); 
           $encodedHomePage = json_encode($homePage); 
    
        // condition checking if the folder needs to be created for the first time!
           if(!file_exists($folderPath)){
                mkdir($folderPath); 
                mkdir($folderPath.'/settings'); 
                if(!file_exists($siteSettingsConfig)){
    
                    // Creating setting file
                    $siteConfigFile = fopen($siteSettingsConfig, "w+"); 
                    fwrite($siteConfigFile, $encodedConfig); 
                    fclose($siteConfigFile); 
    
                    // Creating homepage
                    $homeConfig = fopen($homeConfigPath, "w+"); 
                    fwrite($homeConfig, $encodedHomePage); 
                    fclose($homeConfig); 
    
                    return "File Created successfully with configuation. Please refresh the page"; 
                }
                else{
                    return ; 
                }
    
                return "Folder created"; 
           }
           else{
    
            // only if both the folder and config files are present1 ! 
                if( file_exists($folderPath.'/settings/')  && file_exists($siteSettingsConfig) ){
                    
    
                    function variableData($fileToParse){
                        $getConfig = file_get_contents($fileToParse); 
                        $data = json_decode($getConfig, true); 
                        return $data; 
                    }
    
                    return view('admin.home')->with([
                        'config'=> variableData($siteSettingsConfig), 
                        'home' => variableData($homeConfigPath)
                    ]);
                    
                    
                }
                
                return "Configs Created! Refresh now!"; 
           }
    
        }
    
    
    
    
    
        //  updates new data from admin panel
        public function update(Request $request){
            $siteSettingsConfig = base_path().'/site/settings/site.json';
            $homeConfigPath = base_path().'/site/homepage.json'; 
    
    
            $config = [
                "site-name"=> $request['site-name'] ?? '', 
                "site-title"=> $request['site-title'] ?? '', 
                "site-url"=> $request['site-url'] ?? '', 
                "favicon-url"=> $request['favicon-url'] ?? '', 
                "meta-title"=> $request['meta-title'] ?? '', 
                "meta-description"=> $request['meta-description'] ?? '', 
                "search-engine-index"=> $request['search-engine-index'] ?? '', 
    
                'image'=>$request['image'], 
                'title'=>$request['title'], 
                'tagline'=>$request['tagline'], 
                'content'=>$request['content'], 
                'phone'=>$request['phone'], 
                'email'=>$request['email'], 
               ];
    
            $homeUpdate = [
                'image'=>$config['image'], 
                'title'=>$config['title'], 
                'tagline'=>$config['tagline'], 
                'content'=>$config['content'], 
                'phone'=>$config['phone'], 
                'email'=>$config['email'], 
            ]; 
    
            $encodedConfig = json_encode($config); 
            $encodedHome = json_encode($homeUpdate); 
    
    
            // Updating Site setting file
            $siteConfigFile = fopen($siteSettingsConfig, "w"); 
            fwrite($siteConfigFile, $encodedConfig); 
            fclose($siteConfigFile); 
    
            // Updating Homepage settings 
            $homeConfig = fopen($homeConfigPath, "w+"); 
            fwrite($homeConfig, $encodedHome); 
            fclose($homeConfig); 
    
            return redirect()->route('admin-home');
            
        }
}
