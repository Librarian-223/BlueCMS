<?php

/* BlogBlogBundle:Default:entrada.html.twig */
class __TwigTemplate_f006bae72bc7133f3ceca26df7a2dd59 extends Twig_Template
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
        echo "    <div id=\"entry\">
        <div id=\"titulo\"><h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entrada"), "titulo"), "html", null, true);
        echo "</h1></div>
        <div id=\"texto\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entrada"), "contenido"), "html", null, true);
        echo "</div>
        <br /><br /><p><b>Fecha: </b>";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entrada"), "fecha"), "d/M/Y"), "html", null, true);
        echo "</p>
    </div>
<h2>Comentarios:</h2>
";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "comentarios"));
        foreach ($context['_seq'] as $context["_key"] => $context["comentario"]) {
            // line 11
            echo "        
        <div id=\"comment\">
        <div id=\"titulo\"><h1>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comentario"), "nombre"), "html", null, true);
            echo "</h1></div>
        <div id=\"texto\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comentario"), "comentario"), "html", null, true);
            echo "</div>
        <br /><br /><p><b>Fecha: </b>";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "comentario"), "fecha"), "d/M/Y"), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comentario'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo "
<div id=\"formcomment\">
<form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "crearcomentario\" method=\"post\">
    <table>
        <tr>
            <td><label for=\"nombre\">Nombre </label></td>
            <td><input type=\"text\" name=\"nombre\" size=\"30\" maxlength=\"80\"></td>
        </tr>
        <tr>
            <td><label for=\"email\">Comentario : </label></td>
            <td><textarea name=\"comentario\" cols=\"40\" rows=\"5\"></textarea></td>
        </tr>
        <tr>
            <td><input type=\"hidden\" name=\"entrada\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entrada"), "id"), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"anio\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entrada"), "fecha"), "Y"), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"mes\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entrada"), "fecha"), "M"), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"titulo\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entrada"), "titulo"), "html", null, true);
        echo "\">
            </td>
            <td><input type=\"submit\" value=\"Enviar\"></td>
        </tr>
    </table>
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "BlogBlogBundle:Default:entrada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
