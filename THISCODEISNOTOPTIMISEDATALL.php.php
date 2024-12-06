                                    <!DOCTYPE html>
                                    <html lang="JP">
                            <head><meta charset="UTF-8">
                              <title>Bonjours !</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>body {background-color: blue;} div {color: blue;}
                          </style></head><center><body>
                            <footer>Mini Calculatrice</footer>
                    <div>     []             []        </div>
                    <div>                              </div>
                    <div>             ___              </div><div>        _______________</div>
                    <div>                              </div><div>        | Im in your code |</div>     
                    <div>                              </div><div>        /______________|</div></body>
                    </center>                          </html>
<big><?php $Bonjour; 
if (empty($Bonjour)){$Bonjour="You're Not 
    supposed to be here ?!";}else;$Bonjour="
                     et bienvenue 
dans notre page de WORST CODE EVER";
echo $Bonjour;
?>
</big>
<menu><form method="post" action="THISCODEISNOTOPTIMISEDATALL.php.php"><li><?php echo $LePremierChiffreJecrois = "Choisit ton 
    premier chiffre";?> <input type="number" 
                        name= "1"></li><li>L'autre 
    chiffre a ajouter<input type="number" name="2"></li>
    <li><input type="submit" value="ajouter"></li></form>


<?php
$Deux = 0;
$hein = 0;
$Deux = isset($_POST['1']) ? $_POST['1'] : 0; 
$hein = isset($_POST['2']) ? $_POST['2'] : 0;
?>
<big><b>
<?php
sleep(3);
echo $Deux + $hein;
?>
</big></b>
</menu>