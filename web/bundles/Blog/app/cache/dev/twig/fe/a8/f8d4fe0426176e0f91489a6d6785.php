<?php

/* BlogBlogBundle:Default:mail.txt.twig */
class __TwigTemplate_fea8f8d4fe0426176e0f91489a6d6785 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Nombre: ";
        echo twig_escape_filter($this->env, $this->getContext($context, "nombre"), "html", null, true);
        echo "
Email: ";
        // line 2
        echo twig_escape_filter($this->env, $this->getContext($context, "email"), "html", null, true);
        echo "
Teléfono: ";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "tlf"), "html", null, true);
        echo "
Asunto: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getContext($context, "asunto"), "html", null, true);
        echo "
Mensaje: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "mensaje"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "BlogBlogBundle:Default:mail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
