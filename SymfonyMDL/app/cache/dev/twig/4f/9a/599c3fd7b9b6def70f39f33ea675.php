<?php

/* LamMdlBundle:FormationSport:listefs.html.twig */
class __TwigTemplate_4f9a599c3fd7b9b6def70f39f33ea675 extends Twig_Template
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
        $context["num"] = 1;
        // line 6
        echo "
<h2>Il y a ";
        // line 7
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "listeformationsport")), "html", null, true);
        echo " formations sport/médecine : </h2>

";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeformationsport"));
        foreach ($context['_seq'] as $context["_key"] => $context["uneFs"]) {
            // line 10
            echo "\t\t<h2>- Formation n° ";
            echo twig_escape_filter($this->env, $this->getContext($context, "num"), "html", null, true);
            echo " : </h2> 
\t\t<p>*<a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LamMdlBundle_contenuformationsport", array("num" => $this->getAttribute($this->getContext($context, "uneFs"), "id"))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "uneFs"), "Titre"), "html", null, true);
            echo "  </a>  , et  
                    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LamMdlBundle_datesstagesport", array("num" => $this->getAttribute($this->getContext($context, "uneFs"), "id"))), "html", null, true);
            echo "\"> Les Dates de Stages </a></p>
\t\t
        ";
            // line 14
            $context["num"] = ($this->getContext($context, "num") + 1);
            // line 15
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneFs'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 16
        echo "

";
    }

    public function getTemplateName()
    {
        return "LamMdlBundle:FormationSport:listefs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 16,  64 => 15,  62 => 14,  57 => 12,  51 => 11,  46 => 10,  42 => 9,  37 => 7,  34 => 6,  32 => 5,  29 => 4,  26 => 3,);
    }
}
