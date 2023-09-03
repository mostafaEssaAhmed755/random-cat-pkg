<?php

namespace MostafaEssaAhmed755\RandomCatPkg\Controllers;

use MostafaEssaAhmed755\RandomCatPkg\RandomCatPkg;

class RandomCatController
{
    public function __invoke(RandomCatPkg $randomcatpkg)
    {
        $data = $randomcatpkg->getImg()[0];
        return view('randomCat::index')->with('data', $data);
    }
}
