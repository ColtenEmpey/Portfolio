<html>
<link rel="stylesheet" href="index.css" type="text/css">



</html>
<?php

    function notHeader(){
        return (
            "<div class='header'>
                <div class='logo'>Logo</div>
                <div class='info'>
                    <p>Projects</p>
                    <p>About Me</p>
                    <p>Contact</p>
                    <p>linkedIn</p>
                    <p>GitHub</p>
                </div>
            </div>");
    }
     echo notHeader();