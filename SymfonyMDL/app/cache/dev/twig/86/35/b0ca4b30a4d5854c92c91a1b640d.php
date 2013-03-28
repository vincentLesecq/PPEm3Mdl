<?php

/* LamMdlBundle:Formation:listeinformatique.html.twig */
class __TwigTemplate_8635b0ca4b30a4d5854c92c91a1b640d extends Twig_Template
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
        $context["nb"] = 1;
        // line 6
        echo "
<h1>Les stages organisés pour la formation '";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "laF"), "Titre"), "html", null, true);
        echo "' sont:  </h1>




  ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "lesStages"));
        foreach ($context['_seq'] as $context["_key"] => $context["unS"]) {
            // line 13
            echo "
<a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LamMdlBundle_formationinformatique"), "html", null, true);
            echo "\"> Retour </a>

     <h2>Stage ";
            // line 16
            echo twig_escape_filter($this->env, $this->getContext($context, "nb"), "html", null, true);
            echo "</h2>
      Date: ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "unS"), "Date"), "d-m-Y"), "html", null, true);
            echo "</br>
             Horaire:  ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unS"), "Horaire"), "html", null, true);
            echo "</br>       
            Date limite d'inscription: ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "unS"), "DateLimite"), "d-m-Y"), "html", null, true);
            echo "</br>             
             Salle: ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unS"), "Salle"), "html", null, true);
            echo "</br>
          Adresse: ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unS"), "Adresse"), "html", null, true);
            echo "</br>
        Coût: ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unS"), "Cout"), "html", null, true);
            echo "</br>
        Repas: ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unS"), "Repas"), "html", null, true);
            echo "</br>
     

        ";
            // line 26
            $context["nbi"] = twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "unS"), "lesIntervenants"));
            // line 27
            echo "        ";
            if (($this->getContext($context, "nbi") > 1)) {
                // line 28
                echo "        <p>Les intervenants :</p>
            ";
            } else {
                // line 30
                echo "        <p>L'intervenant :</p>
            ";
            }
            // line 32
            echo "                
        ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "unS"), "lesIntervenants"));
            foreach ($context['_seq'] as $context["_key"] => $context["unI"]) {
                // line 34
                echo "        <h3>- ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unI"), "Prenom"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unI"), "Nom"), "html", null, true);
                echo "</h3>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unI'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 36
            echo "  ";
            $context["nb"] = ($this->getContext($context, "nb") + 1);
            // line 37
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unS'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 38
        echo "

";
    }

    public function getTemplateName()
    {
        return "LamMdlBundle:Formation:listeinformatique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 38,  125 => 37,  122 => 36,  111 => 34,  107 => 33,  104 => 32,  100 => 30,  96 => 28,  93 => 27,  91 => 26,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  57 => 16,  52 => 14,  49 => 13,  45 => 12,  37 => 7,  34 => 6,  32 => 5,  29 => 4,  26 => 3,);
    }
}
