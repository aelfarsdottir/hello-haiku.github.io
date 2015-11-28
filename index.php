<!DOCTYPE html>
<html>
    <head>
        <!-- http://getbootstrap.com/ -->
        <link href="../css/bootstrap.min.css" rel="stylesheet"/>
        <link href="../css/styles.css" rel="stylesheet"/>
        <title>Hello, Haiku</title>
    </head>
    
    <body>
      <div class="container">
        <div id="top">
          <div>
            <a href="/"><img alt="Hello, Haiku" src="../views/logo.png"/></a>
          </div>
        </div>

        <div id="middle">
          <p></p><img src="http://img11.deviantart.net/8f9c/i/2009/101/d/3/fuji_cherry_blossoms__by_zeroai.jpg" alt="Cherry Blossoms" height="342" width="342"><p></p>
          <br></br>
          <form action="haiku.php" method="post">
              <fieldset>
                  <div class="form-group">
                      <button class="btn btn-default" type="submit">
                          <span aria-hidden="true"></span>
                          Generate!
                      </button>
                  </div>
              </fieldset>
          </form>
          <!--we want to submit the generate button click via POST in order to call draft.php and generate a haiku-->
          <!--<input name="myBtn" type="submit" value="Generate!" onclick="ajax_post();">-->
          <br></br>
        </div>

        <div id="bottom">
          <!-- Brought to you by <a href="http://aelfarsdottir.github.io">Hello, Haiku</a>. -->
          <p>Copyright &copy; 2015 Hello, Haiku. All rights reserved.</p>
        </div>
      </div>
    </body>
</html>
