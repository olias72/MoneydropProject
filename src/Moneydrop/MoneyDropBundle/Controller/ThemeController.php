<?php

namespace Moneydrop\MoneyDropBundle\Controller;

use Moneydrop\MoneyDropBundle\Entity\Theme;
use Moneydrop\MoneyDropBundle\Form\Type\ThemeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ThemeController extends Controller
{
    public function themeAction()
    {
        $theme = $this
            ->getDoctrine()
            ->getRepository('MoneyDropBundle:theme')
            ->findAll();
        shuffle($theme);
        $theme1 = $theme[0];
        $theme2 = $theme[1];

        return $this->render('MoneyDropBundle:Theme:theme.html.twig', array('theme1' => $theme1, 'theme2' => $theme2));
    }

    public function listThemeAction()
    {
        $theme = $this
            ->getDoctrine()
            ->getRepository('MoneyDropBundle:theme');

        $listTheme = $theme->findAll();

        return $this->render('MoneyDropBundle:Theme:listTheme.html.twig', $listTheme);
    }
}