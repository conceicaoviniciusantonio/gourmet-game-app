<?php

namespace App\Tests;

use App\Node;
use PHPUnit\Framework\TestCase;

class NodeTest extends TestCase
{
    public function testClassConstructor()
    {
        $value = 'pasta';
        $node = new Node($value);
        $this->assertSame($value, $node->getValue());
        $this->assertEmpty($node->getLeftNode());
        $this->assertEmpty($node->getRightNode());
    }

    public function testSetValue()
    {
        $value = 'pasta';
        $node = new Node($value);
        $this->assertEquals($value, $node->getValue());
    }

    public function testSetLeftNode()
    {
        $value = 'pasta';
        $node = new Node($value);
        $leftNode = new Node($value);
        $node->setLeftNode($leftNode);
        $this->assertEquals($leftNode, $node->getLeftNode());
    }

    public function testSetRightNode()
    {
        $value = 'pasta';
        $node = new Node($value);
        $rightNode = new Node($value);
        $node->setRightNode($rightNode);
        $this->assertEquals($rightNode, $node->getRightNode());
    }

    public function testIsLeaf()
    {
        $value = 'pasta';
        $node = new Node($value);
        $this->assertTrue($node->isLeaf());
    }

    public function testIsNotLeaf()
    {
        $value = 'pasta';
        $node = new Node($value);
        $leftNode = new Node($value);
        $node->setLeftNode($leftNode);
        $this->assertFalse($node->isLeaf());
    }
}
