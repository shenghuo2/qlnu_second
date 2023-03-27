<?php
error_reporting(0);
class Q
{
    public $q1;

    public function __invoke()
    {
        $this->q1->Q();
    }
}

class L
{
    public $l1;

    public function __destruct()
    {
        echo $this->l1;
    }

    public function execute()
    {
        ($this->l1)();
    }

    public function __call($a, $b)
    {
        echo $this->l1->getflag();
    }

}

class N
{
    public $n;

    public function __toString()
    {
        $this->n->process();
        return 'good';
    }
}
class U
{
    public $u1;

    public function process()
    {
        ($this->u1)();
    }

    public function getflag()
    {
        eval($this->u1);
    }

}

if (!isset($_POST['a'])) {
    echo 'post一个a';
}else{
    highlight_file(__FILE__);
    unserialize($_POST['a']);
}