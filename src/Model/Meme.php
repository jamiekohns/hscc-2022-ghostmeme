<?php

namespace Ghostmeme\Model;

class Meme extends Model
{
    protected $meme_id;
    protected $owner;
    protected $receiver;
    protected $createdAt;
    protected $expiredAt;
    protected $description;
    protected $likes;
    protected $private;
    protected $replyTo;
    protected $imageUrl;
    
    public function getMemeId()
    {
        return $this->meme_id;
    }
    public function getOwner()
    {
        return $this->owner;
    }
    public function getReceiver()
    {
        return $this->receiver;
    }
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    public function getExpiredAt()
    {
        return $this->expiredAt;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getLikes()
    {
        return $this->likes;
    }
    public function getPrivate()
    {
        return $this->private;
    }
    public function getReplyTo()
    {
        return $this->replyTo;
    }
    public function getImageUrl()
    {
        return $this->imageUrl;
    }


    public function setMemeId($meme_id)
    {
        $this->meme_id = $meme_id;

        return $this;
    }
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;

        return $this;
    }
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }
    public function setExpiredAt($expiredAt)
    {
        $this->expiredAt = $expiredAt;

        return $this;
    }
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
    public function setLikes($likes)
    {
        $this->likes = $likes;
        
        return $this;
    }
    public function setPrivate($private)
    {
        $this->private = $private;

        return $this;
    }
    public function setReplyTo($replyTo)
    {
        $this->replyTo = $replyTo;

        return $this;
    }
    public function setImageUrl($imageUrl)
    {
        $this->getImageUrl = $imageUrl;

        return $this;
    }
    
}