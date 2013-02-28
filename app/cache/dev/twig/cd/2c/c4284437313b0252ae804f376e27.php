<?php

/* BlueCMSBundle:Default:index.html.twig */
class __TwigTemplate_cd2cc4284437313b0252ae804f376e27 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
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
