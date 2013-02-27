<?php

/* BlogBlogBundle:Default:index.html.twig */
class __TwigTemplate_54a41da600655c5d59fb4775b60baf11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'contenido' => array($this, 'block_contenido'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "    </body>
</html>


";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/blog/css/reset-mayer.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/blog/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 53
    public function block_contenido($context, array $blocks = array())
    {
        // line 54
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entradas"));
        foreach ($context['_seq'] as $context["_key"] => $context["entrada"]) {
            // line 55
            echo "                <div id=\"entry\"><div id=\"titulo\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entrada"), "fecha"), "Y"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entrada"), "fecha"), "M"), "html", null, true);
            echo "/entrada-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entrada"), "titulo"), "html", null, true);
            echo "\"><h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entrada"), "titulo"), "html", null, true);
            echo "</h1></a></div>
                <div id=\"texto\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entrada"), "contenido"), "html", null, true);
            echo "
                    <br /><br /><p><b>Fecha: </b>";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entrada"), "fecha"), "d/M/Y"), "html", null, true);
            echo "</p>
                </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entrada'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 61
        echo "                ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "            <div id=\"container\">
        <div id=\"header\">
            <div id=\"banner\"></div>
        </div>
        
        <div id=\"main\">
            <div id=\"bar\">
                <div id=\"form\">
                    <form action=\"controller\" method=\"POST\">
                        <table>
                            <tr>
                                <td><label for=\"username\">User: </label></td>
                                <td><input type=\"text\" name=\"username\" size=\"15\" maxlength=\"15\" required /></td>
                            </tr>
                            <tr>
                                <td><label for=\"username\">Password: </label></td>
                                <td><input type=\"password\" name=\"userpassword\" size=\"15\" maxlength=\"15\" required /></td>
                            </tr>
                            <tr>
                                <td><input type=\"hidden\" name=\"action\" value=\"login\" /></td>
                                <td><input type=\"submit\" value=\"Login\" /></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div id=\"archive\">
                    ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entradas"));
        foreach ($context['_seq'] as $context["_key"] => $context["entrada"]) {
            // line 41
            echo "                        
                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
            echo "archivo/";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entrada"), "fecha"), "Y"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entrada"), "fecha"), "Y"), "html", null, true);
            echo "</a>
                        <br />
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entrada'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 45
        echo "                </div>
                <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BlogBlogBundle_adminpage"), "html", null, true);
        echo "\">Backend</a><br />
                <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BlogBlogBundle_homepage"), "html", null, true);
        echo "\">Home</a><br />
                <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BlogBlogBundle_contactopage"), "html", null, true);
        echo "\">Contacto</a><br />
                <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manage_entrada"), "html", null, true);
        echo "\">Gestion Entradas</a><br />
                <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manage_comentario"), "html", null, true);
        echo "\">Gestion Comentarios</a><br />
            </div>
            <div id=\"content\">
                ";
        // line 53
        $this->displayBlock('contenido', $context, $blocks);
        // line 62
        echo "            </div>
            <div class=\"clean\"></div>
        </div>
        <div id=\"footer\"></div>
        </div>
        ";
    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "BlogBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
