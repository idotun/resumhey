<?php

if (isset($_GET['id'], $_GET['view'])){
$user_id = $_GET['id'];
$sql = "SELECT * FROM links WHERE user_id = $user_id "; 
$links = $db->query($sql);
if ($links){
while($row = mysqli_fetch_array($links)){

    $link_id = $row['link_id'];
    echo "<a href=profile.php?id=$link_id>Friend</a>";

}
}
}

?>

