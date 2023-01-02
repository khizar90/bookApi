<?php
$book = $_POST["bookname"];
        $ch  = curl_init();
        $url = "https://api.nytimes.com/svc/books/v3//reviews.json?title=$book&api-key=3H63BvBm8jJMTnsBFYOYWKnnvXBp3bYe";
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($ch);
        $resu = json_decode($res);
        $result = $resu->results;
        foreach($result as $row){
            echo "<p>url :  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp";
            echo "<b><a href='$row->url'>Book link</a></b><br>";
            echo "<p>publication_dt : &nbsp &nbsp";
            echo '<b>' . $row->publication_dt  . '</b><br>';
            echo "<p>byline : &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp  ";
            echo '<b>' .$row->byline . '</b><br>';
            echo "<p>book_title : &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp ";
            echo '<b>' . $row->book_title. '</b><br>';
            echo "<p>book_author : &nbsp &nbsp &nbsp &nbsp  &nbsp ";
            echo '<b>' .$row->book_author. '</b><br>';
            echo "<p>summary : &nbsp &nbsp";
            echo '<b>' .$row->summary . '</b><br>';
    }

    // if(isset($_GET['submit'])){
    // if(isset($_GET['name'])){
    //     $bookname = $_GET['name'];    
    //     $ch  = curl_init();
    //     $url = "https://api.nytimes.com/svc/books/v3//reviews.json?title=$bookname&api-key=3H63BvBm8jJMTnsBFYOYWKnnvXBp3bYe";
    //     curl_setopt($ch,CURLOPT_URL,$url);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     $res = curl_exec($ch);
    //     curl_close($ch);
    //     $resu = json_decode($res);
    //     $result = $resu->results;

    //     foreach($result as $row){
    //         echo "<div class='hello'>";
    //         echo "<br>";
    //         echo "<p>url :  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp";
    //         echo "<b><a href='$row->url'>Book link</a></b><br>";
    //         echo "<p>publication_dt : &nbsp &nbsp";
    //         echo '<b>' . $row->publication_dt  . '</b><br>';
    //         echo "<p>byline : &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp  ";
    //         echo '<b>' .$row->byline . '</b><br>';
    //         echo "<p>book_title : &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp ";
    //         echo '<b>' . $row->book_title. '</b><br>';
    //         echo "<p>book_author : &nbsp &nbsp &nbsp &nbsp  &nbsp ";
    //         echo '<b>' .$row->book_author. '</b><br>';
    //         echo "<p>summary : &nbsp &nbsp";
    //         echo '<b>' .$row->summary . '</b><br>';
    //         echo "</div>";
    // }
        
    // }else{
    //     echo "no result found";
    // }
// }
  

?>