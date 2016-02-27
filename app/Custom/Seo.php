<?php namespace App\Http\Custom;

class Seo {
    private $tags;
    private $data;

    public function __construct($data){
        $this->data = $data;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function setTags()
    {
        $this->tags['Content'] = Check::word(html_entity_decode($this->data[1]), 25);
        $this->tags['Link'] = $this->data[2];
        $this->tags['Image'] = $this->data[3];

        $this->tags = array_map('strip_tags', $this->tags);
        $this->tags = array_map('trim', $this->tags);

        $this->data = null;

        //Pagina
        $this->seoTags = '<title>' . $this->tags['Title'] . '</title>' . "\n";
        $this->seoTags .= '<meta name="description" content="' . $this->tags['Content'] . '"/>' . "\n";
        $this->seoTags .= '<meta name="robots" content="index, follow"/>' . "\n";
        $this->seoTags .= '<link rel="canonical" href="'. $this->tags['Link'] . '">' ."\n";
        $this->seoTags .= "\n";

        //face
        $this->seoTags .= '<meta property="og:site_name" content="' . SITENAME .'"/>' ."\n";
        $this->seoTags .= '<meta property="og:locale" content="pt_BR" />' ."\n";
        $this->seoTags .= '<meta property="og:title" content="' . $this->tags['Title'] .'"/>' ."\n";
        $this->seoTags .= '<meta property="og:description" content="' . $this->tags['Content'] .'"/>' ."\n";
        $this->seoTags .= '<meta property="og:image" content="' . $this->tags['Image'] .'"/>' ."\n";
        $this->seoTags .= '<meta property="og:url" content="' . $this->tags['Link'] .'"/>' ."\n";
        $this->seoTags .= '<meta property="og:type" content="article" />' ."\n";


        //twiter
        $this->seoTags .= '<meta itemprop="name" content="'. $this->tags['Title'] . '">' . "\n";
        $this->seoTags .= '<meta itemprop="description" content="'. $this->tags['Content'] . '">' . "\n";
        $this->seoTags .= '<meta itemprop="url" content="'. $this->tags['Link'] . '">' . "\n";

        $this->tags = null;
    }

}