<?php
require '../../vendor/autoload.php';

use Lemonlyue\Algorithms\BinaryTree\BinaryTreeSort;
use Lemonlyue\Algorithms\BinaryTree\Node;

$a = new Node();
$b = new Node();
$c = new Node();
$d = new Node();
$e = new Node();
$f = new Node();
$g = new Node();
$h = new Node();
$i = new Node();
$a->val = 'A';
$b->val = 'B';
$c->val = 'C';
$d->val = 'D';
$e->val = 'E';
$f->val = 'F';
$g->val = 'G';
$h->val = 'H';
$i->val = 'I';
$h->left = $i;
$f->right = $h;
$f->left = $g;
$c->right = $g;
$c->left = $f;
$b->left = $d;
$b->right = $e;
$a->right = $c;
$a->left = $b;
$sort = new BinaryTreeSort();
$sort->preorder($a);
echo PHP_EOL;
$sort->inorder($a);
echo PHP_EOL;
$sort->postorder($a);