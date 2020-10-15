<?php

class LinkList {
    public $firstNode = NULL;
    public $lastNode = NULL;

    public function addFirstNode($data)
    {
        $firstNode = new Node($data);
        if ($this->firstNode){
            $firstNode->link = $this->firstNode;
            $this->firstNode = $firstNode;
        } else {
            $this->firstNode = $firstNode;
            $this->lastNode = $firstNode;
        }
    }

    public function addLastNode($data)
    {
        $node = new Node($data);
        if ($this->lastNode){
            $this->lastNode->link = $node;
            $this->lastNode = $node;
        }
        else{
            $this->firstNode = $node;
            $this->lastNode = $node;
        }
    }



}

