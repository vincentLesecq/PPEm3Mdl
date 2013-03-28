<?php

/* LamMdlBundle:FormationSport:contenufs.html.twig */
class __TwigTemplate_838580717372545db032485c0836fa74 extends Twig_Template
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
        echo "
";
        // line 5
        $context["numFi"] = 0;
        // line 6
        $context["numO"] = 0;
        // line 7
        echo "
<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LamMdlBundle_formationsport"), "html", null, true);
        echo "\"> Retour </a>

";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "contenuformationsport"));
        foreach ($context['_seq'] as $context["_key"] => $context["unContenu"]) {
            // line 11
            echo "
";
            // line 12
            $context["nom"] = $this->env->getExtension('assets')->getAssetUrl(("bundles/LamMdl/images/" . $this->getAttribute($this->getContext($context, "unContenu"), "Logo")));
            // line 13
            echo "


    <p><img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getContext($context, "nom"), "html", null, true);
            echo "\" alt=\"logo\" width=\"130\" height=\"100\" /> <h2>Nom de la formation : </h2>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unContenu"), "Titre"), "html", null, true);
            echo " </p>
       <p> <h3>Objectif : </h3>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unContenu"), "Objectif"), "html", null, true);
            echo " </p>
 <h3>Nombre de places : ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unContenu"), "nbPlace"), "html", null, true);
            echo " </h3>


                  
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unContenu'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 23
        echo "

";
    }

    public function getTemplateName()
    {
        return "LamMdlBundle:FormationSport:contenufs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 23,  68 => 18,  64 => 17,  58 => 16,  53 => 13,  51 => 12,  48 => 11,  44 => 10,  39 => 8,  36 => 7,  34 => 6,  32 => 5,  29 => 4,  26 => 3,);
    }
}
