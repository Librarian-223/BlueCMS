<?php

/* BlogBlogBundle:Default:contacto.html.twig */
class __TwigTemplate_18868320b00a32356fe6bef6ce607f3e extends Twig_Template
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
        echo "<h3>";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "</h3>
<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "enviarmail\" method=\"post\"><fieldset><legend>Datos de contacto</legend>   
        <table>
            <tr>
                <td><label for=\"nombre\">Nombre y apellidos : </label></td>
                <td><input type=\"text\" name=\"nombre\" size=\"30\" maxlength=\"80\"></td>
            </tr>
            <tr>
                <td><label for=\"email\">Email : </label></td>
                <td><input type=\"text\" name=\"email\" size=\"30\" maxlength=\"60\"></td>
            </tr>
            <tr>
                <td><label for=\"asunto\">Teléfono : </label></td>
                <td><input type=\"text\" name=\"tlf\" size=\"30\" maxlength=\"60\"></td>
            </tr>
            <tr>
                <td><label for=\"tlf\">Asunto : </label></td>
                <td><input type=\"text\" name=\"asunto\" size=\"30\" maxlength=\"60\"></td>
            </tr>
            <tr>
                <td><label for=\"mensaje\">Mensaje : </label></td>
                <td><textarea name=\"mensaje\" cols=\"41\" rows=\"5\"></textarea></td>
            </tr>
        </table>

</fieldset>
<label for=\"enviar\">
<input type=\"submit\" name=\"enviar\" value=\"Enviar datos\"></label>
 </form>
";
    }

    public function getTemplateName()
    {
        return "BlogBlogBundle:Default:contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
