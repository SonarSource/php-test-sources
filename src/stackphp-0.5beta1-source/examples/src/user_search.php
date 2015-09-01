<?php

// Simple example that demonstrates searching for a user
// based on their display name and displaying the results.

require_once 'config.php';

// If the 'search' query string parameter was provided, perform the search.
$search_str = '';

if(isset($_GET['q']))
{
    // Set the search string so that we can put the existing value
    // in the text box.
    $search_str = htmlentities($_GET['q']);
    
    // Begin by getting a site object for Stack Overflow
    $site = API::Site('stackoverflow');
    
    // Now the API provides name-based searches by using the
    // /users route and specifying a filter.
    $request = $site->Users()->Inname($_GET['q']);
    
    // Perform the request and get the first page of results.
    $response = $request->Exec();
    
    $users = array();
    while($item = $response->Fetch(FALSE))
        $users[] = $item;
}

  // If we have an array of users, display them below
  if(isset($users))
  {
      // Check to see if there were any matches
      if(count($users))
      {
          echo "<br /><p>Names matching '{$_GET['q']}':</p><ul>";
          
          foreach($users as $user)
              echo "<li><a href='{$user['link']}'>{$user['display_name']}</a></li>";
          
          echo '</ul>';
      }
      else
          echo "<br /><p>No matches for '{$_GET['q']}'.</p>";
  }
  
  ?>
