<?php

// Simple example that demonstrates the retrieval of a user's
// profile, including their information.

require_once 'config.php';
require_once '../../src/output_helper.php';

// Generate the site combobox
$combo = OutputHelper::CreateCombobox(API::Sites(), 'site');
$site_html = $combo->FetchMultiple()->SetIndices('name', 'api_site_parameter')->SetCurrentSelection()->GetHTML();

    
    if(isset($_GET['site']))
    {
        
        if(isset($_GET['user_id']) && $_GET['user_id'] != '')
        {
            // Retrieve the user's account
            $user = API::Site($_GET['site'])->Users($_GET['user_id']);
            $user_data = $user->Exec()->Fetch();
            
            if($user_data === FALSE)
                echo '<pre>Error: the supplied user_id parameter is invalid.</pre>';
            else
            {
                // Get the user's answers - but we want the question's titles
                // so we need a custom filter
                $filter = new Filter();
                $filter->SetIncludeItems(array('answer.title', 'answer.link'));
                
                // Check to see if the user has answered any questions
                $users_answers = $user->Answers()->SortByVotes()->Filter($filter->GetID())->Exec()->Pagesize(5);
                $total_answers = $users_answers->Total(FALSE);
                
                if($total_answers)
                {
                    echo "<br /><h2>Top {$total_answers} Answer(s)</h2>";
                    echo '<ul>';
                    while($answer = $users_answers->Fetch(FALSE))
                        echo "<li><a href='{$answer['link']}'>{$answer['title']}</a></li>";
                    echo '</ul>';
                }
                else
                    echo '<br /><p>This user has not answered any questions.</p>';
            }
        }
    }
    
    ?>
