<?php

/* LamMdlBundle:Default:index.html.twig */
class __TwigTemplate_8fc963860b805c961743310d29661f6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LamMdlBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LamMdlBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h4>La Maison des Ligues de Lorraine (M2L) est une structure financée par le Conseil Régional de Lorraine dont l'administration est déléguée au Comité Régional Olympique et Sportif de Lorraine (CROSL).</h4>
<h4>La M2L a pour mission de fournir des espaces et des services aux différentes ligues sportives régionales et à d’autres structures hébergées. </h4>

<h4>Une autre de ses missions, est aussi d'organiser des formations dans 2 domaines très demandés: l'informatique et la médecine liée au sport. N'importe qui peut s'inscrire, la participation aux stages est dépendante du nombre d'inscription.</h3>
";
    }

    public function getTemplateName()
    {
        return "LamMdlBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  26 => 3,);
    }
}
