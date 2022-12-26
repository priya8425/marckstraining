function renderAds(){
    $query = queryAds();
    $query_exe = mysql_query($query);
    if(mysql_num_rows($query_exe) == 0){
        echo '<img src="images/sampleAd.jpg" >';
    }else{
        $numb =1;
        $flag =1;
        echo '<div class="carousel-inner">';
        while($fetched_data = mysql_fetch_array($query_exe)){
            if($numb == 1){
                if($flag == 1){
                    echo '<div class="active item">';
                }else{
                    echo '<div class="item">';
                }
                echo '<a target="_blank" href="http://'.$fetched_data['url'].'" class="pull-left marginTop" ><img src="'.$fetched_data['image_url'].'"></a>';
            }elseif($numb == 4){
                echo '<a target="_blank" href="http://'.$fetched_data['url'].'"  class="pull-left marginLast" ><img src="'.$fetched_data['image_url'].'"></a>';
                $numb = 0;
                echo '</div>';
            }else{
                echo '<a target="_blank" href="http://'.$fetched_data['url'].'" class="pull-left marginTop" ><img src="'.$fetched_data['image_url'].'"></a>';
            }

            $numb++;
            $flag++;
        }

        if($numb > 1 && $numb < 4 ){
            echo '</div>';
            echo '</div>';
        }elseif($numb == 1){
            echo '</div>';
        }elseif($numb == 4){
            echo '</div>';
            echo '</div>';
        }

        echo '<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>';
        echo '<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>';
    }
}
