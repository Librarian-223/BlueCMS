<?php

/* BlueCMSBundle:Default:index.html.twig */
class __TwigTemplate_cd2cc4284437313b0252ae804f376e27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'contenido' => array($this, 'block_contenido'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 52
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Avisa2";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "
    <link href=\"";
        // line 7
        echo $this->env->getExtension('assets')->getAssetUrl("bundles/BlueCMS/css/reset-mayer.css");
        echo "\" rel=\"stylesheet\" title=\"default\" type=\"text/css\" />
\t<link href=\"";
        // line 8
        echo $this->env->getExtension('assets')->getAssetUrl("bundles/BlueCMS/css/style.css");
        echo "\" rel=\"stylesheet\" title=\"default\" type=\"text/css\" />

";
    }

    // line 14
    public function block_contenido($context, array $blocks = array())
    {
        // line 15
        echo "
\t\t<div id=\"container\">

\t        <div id=\"header\">
\t            <div id=\"banner\"></div>
\t        </div>

\t        <div id=\"main\">
            \t<div id=\"nav\"></div>

            \t<div id=\"content\">

\t\t\t\t\tHello ";
        // line 27
        echo $this->getContext($context, "name");
        echo "!

\t\t\t\t\t";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entradas"));
        foreach ($context['_seq'] as $context["_key"] => $context["entrada"]) {
            // line 30
            echo "
\t\t\t\t\t\t<div id=\"entry\">
\t\t\t\t\t\t\t<div id=\"titulo\">
\t\t\t\t\t\t\t\t<h1>";
            // line 33
            echo $this->getAttribute($this->getContext($context, "entrada"), "title");
            echo "</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t    \t\t<div id=\"texto\">";
            // line 35
            echo $this->getAttribute($this->getContext($context, "entrada"), "content");
            echo "</div>
\t\t\t\t\t\t</div>

\t\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entrada'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 39
        echo "
\t\t\t\t</div>

\t\t\t</div>

\t\t</div>

\t";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "
\t";
        // line 14
        $this->displayBlock('contenido', $context, $blocks);
        // line 47
        echo "
";
    }

    public function getTemplateName()
    {
        return "BlueCMSBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
