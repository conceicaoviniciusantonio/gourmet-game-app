<?php

namespace App;

use App\Interfaces\UIInterface;

class Game
{
    private UIInterface $ui;

    public function __construct(UIInterface $ui)
    {
        $this->ui = $ui;
    }

    public function play(): void
    {
        $node = $this->buildNode();
        while (true) {
            $this->ui->clear();
            $this->ui->doWait("Pense em prato que gosta.");
            $node = $this->findDish($node);
        }
    }

    private function buildNode(): Node
    {
        $leftNode = new Node('Bolo de chocolate');
        $rightNode = new Node('Lasanha');

        $node = new Node('massa');
        $node->setLeftNode($leftNode);
        $node->setRightNode($rightNode);

        return $node;
    }

    private function findDish(Node $node): Node
    {
        $this->ui->clear();
        $answer = $this->ui->makeQuestion('O prato que você pensou é ' . $node->getValue() . '?');

        if ($answer) {
            if ($node->isLeaf()) {
                $this->ui->clear();
                $this->ui->doWait('Acertei de novo!');
            } else {
                $rightNode = $node->getRightNode();
                $node->setRightNode($this->findDish($rightNode));
            }
        } else {
            if ($node->isLeaf()) {
                $currentName = $node->getValue();
                $leftNode = new Node($currentName);

                $this->ui->clear();
                $value = $this->ui->makeInputQuestion('Qual prato você pensou?');

                $rightNode = new Node($value);

                $this->ui->clear();
                $characteristic = $this->ui->makeInputQuestion($value . " é_____, mas " . $currentName . " não.");

                $node = new Node($characteristic);
                $node->setLeftNode($leftNode);
                $node->setRightNode($rightNode);
            } else {
                $leftNode = $node->getLeftNode();
                $node->setLeftNode($this->findDish($leftNode));
            }
        }

        return $node;
    }
}
