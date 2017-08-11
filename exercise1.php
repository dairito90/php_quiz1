<?php


function isBitten(){
    $result = "Lion bit your finger!";
  $rand = mt_rand(50, 100);
  if ($rand == 3){
    return true;
  }
  echo $rand.'<br />';
  return false;
}

while(true) {
    if(isBitten() === true) break;
}

echo $result;



<form action="exercise1.php" method="post">
 <p>Been bit<input type="text" name="bit " /></p>
 <p> Been not bit<input type="text" name="not bit " /></p>
 <p><input type="submit" /></p>
</form>


Hi <?php echo htmlspecialchars($_POST['bit']); ?>.
You are <?php echo htmlspecialchars($_POST['not bit']) ; ?> by the lion.
