<?php
        $feed_url = 'http://open.live.bbc.co.uk/weather/feeds/en/S64/3dayforecast.rss';
        $content = file_get_contents($feed_url);
        $x = new SimpleXmlElement($content);
        
        $html ='';
        $i = 0;
        foreach($x->channel->item as $entry) {
                $i += 1;
                if($i == 1) {

                    $html .= "$entry->title";
                    $html .= "$entry->description";
                }
        }

        echo $html;
?>
