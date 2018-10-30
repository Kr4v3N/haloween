<?php
/**
 * Created by PhpStorm.
 * User: jefdc
 * Date: 30/10/2018
 * Time: 16:50
 */

namespace Controller;


use Model\BonbonManager;

class BonbonController extends AbstractController
{

    public function indexBonbon()
    {
        $bonbonManager = new BonbonManager($this->getPdo());
        $bonbons = $bonbonManager->selectAll();

        return $this->twig->render('Bonbon/index.html.twig', ['bonbons' => $bonbons]);
    }

    public function show(int $id)
    {
        $bonbonManager = new BonbonManager($this->getPdo());
        $bonbon = $bonbonManager->selectOneById($id);

        return $this->twig->render('Bonbon/show.html.twig', ['bonbon' => $bonbon]);
    }

}