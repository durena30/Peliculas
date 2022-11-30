<?php
session_start();

if (isset($_SESSION['uid'])) {
    require "../config/db.php";
    if (isset($_GET['logout'])) {
        session_destroy();
        echo '<meta http-equiv="refresh" content="0; url=http://localhost/Netflix">';
    }

    require "../components/subheader.php";
?>
    
    <body>
        <?php

        $array = mysqli_query($db, "SELECT * FROM pages");
        // $array = ["pablo", "oshe paaablo!", "dario", "123", "ian", "mamachapis" ];
        foreach ($array as $a) {
            if(isset($_GET["page"]) && $a['name']==$_GET["page"]){
                if($a["active"]==true){
                    require "./".$a["url"];
                }
            }
        }

        ?>
        <a href="?logout=">Logout</a>
    
    <?php
    require "../components/footer.php";

    ?>

<?php
} else {

    echo "You're not logged";
}
?>