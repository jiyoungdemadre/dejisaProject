<?php

class Song{
    private $song_id;
    private $title;
    private $release_date;
    private $categ_id;
    private $artist_id;

    


    /**
     * Get the value of song_id
     */ 
    public function getSong_id()
    {
        return $this->song_id;
    }

    /**
     * Set the value of song_id
     *
     * @return  self
     */ 
    public function setSong_id($song_id)
    {
        $this->song_id = $song_id;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of release_date
     */ 
    public function getRelease_date()
    {
        return $this->release_date;
    }

    /**
     * Set the value of release_date
     *
     * @return  self
     */ 
    public function setRelease_date($release_date)
    {
        $this->release_date = $release_date;

        return $this;
    }

    /**
     * Get the value of categ_id
     */ 
    public function getCateg_id()
    {
        return $this->categ_id;
    }

    /**
     * Set the value of categ_id
     *
     * @return  self
     */ 
    public function setCateg_id($categ_id)
    {
        $this->categ_id = $categ_id;

        return $this;
    }

    /**
     * Get the value of artist_id
     */ 
    public function getArtist_id()
    {
        return $this->artist_id;
    }

    /**
     * Set the value of artist_id
     *
     * @return  self
     */ 
    public function setArtist_id($artist_id)
    {
        $this->artist_id = $artist_id;

        return $this;
    }
}