<?php

/* BlueCMSBundle:Default:index.html.twig */
class __TwigTemplate_f153ac7911795bd1df5b0b0257ebc27b extends Twig_Template
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
