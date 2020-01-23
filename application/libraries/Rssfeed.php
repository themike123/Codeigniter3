<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RssFeed {

        private $national_universal = "https://archivo.eluniversal.com.mx/rss/mexico.xml";
        private $national_elpais = "https://elpais.com/tag/rss/mexico/a/";
        private $national_expansion = "https://expansion.mx/rss";
        private $national_informador = "https://www.informador.mx/rss/mexico.xml";
        private $national_reforma = "https://www.reforma.com/rss/nacional.xml";

        private $internacional = "https://www.reforma.com/rss/internacional.xml";
        private $economia_expansion = "https://expansion.mx/rss/economia";
        private $tecnologia_expansion = "https://expansion.mx/rss/tecnologia";


        private $mas_vistas = "http://ep00.epimg.net/rss/tags/noticias_mas_vistas.xml";
        private $national_unotv = "https://www.unotv.com/rss/podcast/todo-en-uno.xml";
        private $twetts = "https://www.informador.mx/rss/twitter.xml";



        function getRssFedd($url, $numItems, $source)
        {       
                $xml_feed = simplexml_load_file( $url );
                $data = array();
                $i=1;
        
                if(!empty($xml_feed)) {
                        foreach ($xml_feed->channel->item as $feed_item) {
                                if($i>$numItems) break;
                                $image = "";                                
                                
                                if( $source == 'elpais' ||  $source == 'expansion' ){
                                        if( property_exists( $feed_item , 'enclosure'  ) ){
                                                $image = $feed_item->enclosure->attributes()->url;                                       
                                        }
                                }elseif ($source == 'reforma') {
                                        if( property_exists( $feed_item , 'enclosure'  ) ){
                                                $image=$feed_item->enclosure;                                                
                                        }
                                }
                                
                                array_push($data, array("title" => $feed_item->title, "description" => $feed_item->description, "link"=> $feed_item->link, "date" => $feed_item->pubDate, "image_url" => $image) );
                                $i++;
                        }
                }
        
                return $data;
        }

        public function getNationalSlider( $numItem )
        {
                return $this->getRssFedd($this->national_expansion,$numItem,'expansion');                
        }


        public function getMasVistas( $numItem )
        {
                return $this->getRssFedd($this->mas_vistas,$numItem,'elpais');                
        }


        public function getNacionalReforma( $numItem )
        {
                return $this->getRssFedd($this->national_reforma,$numItem,'reforma');                
        }


        public function getNacionalElpais( $numItem )
        {
                return $this->getRssFedd($this->national_elpais,$numItem,'elpais');                
        }


        public function getTwetts( $numItem )
        {
                return $this->getRssFedd($this->twetts,$numItem,'informador');                
        }


        public function getInternacional( $numItem )
        {
                return $this->getRssFedd($this->internacional,$numItem,'reforma');                
        }


        public function getEcoExpansion( $numItem )
        {
                return $this->getRssFedd($this->economia_expansion,$numItem,'expansion');                
        }


        public function getTecExpansion( $numItem )
        {
                return $this->getRssFedd($this->tecnologia_expansion,$numItem,'expansion');                
        }

        

}