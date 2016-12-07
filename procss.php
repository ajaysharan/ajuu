<html>
<head>
<title></title><link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
          include ("add_news.php");
        
          $conn = mysql_connect("localhost","root",  "");
          

          if (!$conn) {
           die("fail to connect: " . mysql_error);
              }
              mysql_select_db("newsupdate",$conn);
              if(isset($_POST['submit']))
              {   
                  $title = $_POST['title'];
                  $contents = $_POST['contents'];
                  $upload = $_POST['upload'];
  $sql = "INSERT INTO news(title,contents,upload) VALUES ('".$_POST["title"]."','".$_POST["contents"]."','".$_POST["upload"]."')";
$result=  mysql_query($sql);

  if(!$result){
            echo('Error' );
            exit();
        }else{
    
    }
              }
               $sql1    = 'SELECT id,title, contents, upload FROM news';
        $result = mysql_query($sql1, $conn);

if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

while ($row = mysql_fetch_assoc($result)) {
   
           echo "<p class='newupdate'><strong>Ajay sharan</strong> update new Image </p>";       
        echo "<div class='titles'>".$row['title']."</div>";
         
            echo "<div class='uploads'>".$row['contents']."<br><img src=".$row['upload']."><br>
            <a href='delete.php? id=".$row['id']."'>Delete</a></div>";
            
}
              
   
              
 ?>