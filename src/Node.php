<?php

namespace App;

class Node
{
    private string $value;
    private ?Node $leftNode;
    private ?Node $rightNode;

    public function __construct(string $value)
    {
        $this->value = $value;
        $this->leftNode = null;
        $this->rightNode = null;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    public function getLeftNode(): ?Node
    {
        return $this->leftNode;
    }

    public function setLeftNode(?Node $node): void
    {
        $this->leftNode = $node;
    }

    public function getRightNode(): ?Node
    {
        return $this->rightNode;
    }

    public function setRightNode(?Node $node): void
    {
        $this->rightNode = $node;
    }

    public function isLeaf(): bool
    {
        return is_null($this->leftNode) && is_null($this->rightNode);
    }

}
