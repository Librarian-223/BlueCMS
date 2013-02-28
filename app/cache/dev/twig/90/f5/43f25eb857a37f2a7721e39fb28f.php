<?php

/* BlueCMSBundle:Entry:edit.html.twig */
class __TwigTemplate_90f543f25eb857a37f2a7721e39fb28f extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Entry edit</h1>

<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("entry_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id")));
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "edit_form"));
        echo ">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "edit_form"));
        echo "
    <p>
        <button type=\"submit\">Edit</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("entry");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("entry_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id")));
        echo "\" method=\"post\">
            ";
        // line 18
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "BlueCMSBundle:Entry:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
