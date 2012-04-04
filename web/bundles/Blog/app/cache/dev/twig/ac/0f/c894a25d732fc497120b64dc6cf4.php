<?php

/* BlogBlogBundle:Default:anio.html.twig */
class __TwigTemplate_ac0fc894a25d732fc497120b64dc6cf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBlogBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    
        ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entradas"));
        foreach ($context['_seq'] as $context["_key"] => $context["entrada"]) {
            // line 6
            echo "        ";
            if ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entrada"), "fecha"), "Y") == $this->getContext($context, "anio"))) {
                // line 7
                echo "         <div id=\"entry\">
          <div id=\"titulo\"><h1>";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entrada"), "titulo"), "html", null, true);
                echo "</h1></div>
        <div id=\"texto\">";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entrada"), "contenido"), "html", null, true);
                echo "</div>
        <br /><br /><p><b>Fecha: </b>";
                // line 10
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entrada"), "fecha"), "d/M/Y"), "html", null, true);
                echo "</p>
        </div>
        ";
            }
            // line 13
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entrada'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 14
        echo "        
    

</div>
";
    }

    public function getTemplateName()
    {
        return "BlogBlogBundle:Default:anio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
