<?php

/* BlueCMSBundle:Default:gestor.html.twig */
class __TwigTemplate_d7bd54b376fb01ee431715cd2c7cea8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nuevo' => array($this, 'block_nuevo'),
            'titulo' => array($this, 'block_titulo'),
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 65
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Administration";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BlueCMS/css/reset-mayer.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" title=\"default\" type=\"text/css\" />
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BlueCMS/css/gestor.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" title=\"default\" type=\"text/css\" />

";
    }

    // line 22
    public function block_nuevo($context, array $blocks = array())
    {
        // line 23
        echo "                            <div id=\"btnnew\">    
                                <a href=\"nuevaentrada\">
                                    Nueva Entrada
                                </a>
                            </div>
                        ";
    }

    // line 29
    public function block_titulo($context, array $blocks = array())
    {
        echo "Control Panel";
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        // line 46
        echo "                \t<table id=\"entrieslist\">
    \t\t\t
                 
        </table>\t
                            ";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "             
        <div id=\"container\">
            <div id=\"header\">
\t\t<a id=\"btnpanel\" href=\"admin\"><h1>Kiwi: Panel de control</h1></a>
\t\t<a id=\"btnver\" href=\"index\">Ver Página</a>
\t\t<span id=\"welcomeuser\">
                   
                    <a href=\"controller?action=exit\">Exit</a>
                </span>\t\t
            </div>
            <div id=\"body\">
\t\t<div id=\"title\">
                    \t";
        // line 22
        $this->displayBlock('nuevo', $context, $blocks);
        // line 29
        echo "\t\t\t<h2>";
        $this->displayBlock('titulo', $context, $blocks);
        echo "</h2>
                            
\t\t</div>
\t\t<div id=\"bar\">
                    <ul>
\t\t\t<li><a href=\"entradas\" id=\"firstmenu\">Entries</a></li>
\t\t\t<li><a href=\"pages.jsp\">Pages</a></li>
\t\t\t<li><a href=\"polls.jsp\">Polls</a></li>\t
\t\t\t<li><a href=\"forms.jsp\">Forms</a></li>
\t\t\t<li><a href=\"users.jsp\">Users</a></li>\t
\t\t\t<li><a href=\"modules.jsp\">Modules</a></li>\t
\t\t\t<li><a href=\"templates.jsp\">Templates</a></li>\t
\t\t\t<li><a href=\"settings.jsp\" id=\"lastmenu\">Settings</a></li>\t\t\t\t\t\t
\t\t</ul>\t\t\t\t
\t\t</div>
                    <div id=\"content\">
                        ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "                    </div>
                    <div class=\"clean\"></div>
                </div>
            
            <div id=\"footer\">
\t\t\t
            </div>\t\t
\t</div>
    
    
";
    }

    public function getTemplateName()
    {
        return "BlueCMSBundle:Default:gestor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
