<?php

// Simple example that demonstrates listing users from a
// Stack Exchange site. Makes use of the output helper functions.

require_once 'config.php';
require_once '../../src/output_helper.php';

// Generate the site combobox
$combo = OutputHelper::CreateCombobox(API::Sites(), 'site');
$site_html = $combo->FetchMultiple()->SetIndices('name', 'api_site_parameter')->SetCurrentSelection()->GetHTML();

    
    if(isset($_GET['site']))
    {
        $site = API::Site($_GET['site']);
        $request = $site->Users();
        
        if(isset($_GET['sort']))
            $request->SortBy($_GET['sort']);
        
        if(isset($_GET['order']) && $_GET['order'] == 'asc')
            $request->Ascending();
        else
            $request->Descending();
        
        $response = $request->Exec();
        
        $table = OutputHelper::CreateTable($response);
        
        $table->SetSortImages('../common/sort_asc.png',
                              '../common/sort_desc.png');
        
        // Create the method that will display the user's name with a link
        // (In PHP 5.3, we can just embed the function as a parameter to AddColumn)
        function DisplayUsername($item)
        {
            $mod = ($item['user_type'] == 'moderator')?' &diams;':'';
            
            return "<a href='{$item['link']}'>{$item['display_name']}$mod</a>";
        }
        
        $table->AddColumn(new TableColumn('display_name',  'Username',    'name',         'DisplayUsername'));
        $table->AddColumn(new TableColumn('reputation',    'Reputation',  'reputation'));
        $table->AddColumn(new TableColumn('location',      'Location'));
        $table->AddColumn(new TableColumn('creation_date', 'Date Joined', 'creation',     Format::RelativeDate));
        
        
        echo $table->GetHTML(isset($_GET['sort'])?$_GET['sort']:null,
                             isset($_GET['order'])?$_GET['order']:null);
    }
    
  ?>
