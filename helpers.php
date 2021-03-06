<?php

/**
 * Renders view, passing in values.
 */
 function render($view, $values = [])
 {
    // if view exists, render it
    if (file_exists("../views/{$view}"))
    {
      // extract variables into local scope
      extract($values);
      
      // render view (between header and footer)
      // require("../views/header.html");
      require("../views/{$view}");
      
      // require("../views/footer.html");
      // redirect to the page
      // redirect("../views/{$view}");
      exit;
    }

    // else error
    else
    {
      trigger_error("Invalid view: {$view}", E_USER_ERROR);
    }
 }

/**
  * Redirects user to location, which can be a URL or
  * a relative path on the local host.
  *
  * http://stackoverflow.com/a/25643550/5156190
  *
  * Because this function outputs an HTTP header, it
  * must be called before caller outputs any HTML.
  */

  // redirect users
  function redirect($location)
  {
    if (headers_sent($file, $line))
    {
      trigger_error("HTTP headers already sent at {$file}:{$line}", E_USER_ERROR);
    }
    header("Location: {$location}");
    exit;
  }

 // error messages
  function apologize($message)
  {
    render("apologize.php", ["message" => $message]);
    exit;
  }
?>