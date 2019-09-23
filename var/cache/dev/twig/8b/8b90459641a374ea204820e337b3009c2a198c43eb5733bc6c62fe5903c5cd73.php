<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* task/index.html.twig */
class __TwigTemplate_5a54a03747df0bda33062e49da89c72ad4ec129654784a60d1a1427a64373dc0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "task/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div style=\"height: 80px; margin: 30px 30px 0 0;\">
        <a class=\"btn btn-primary\" style=\"float: right;\" href=\"/task/create\">Create Task</a>
    </div>
    <div class=\"bs-example\" style=\"margin: 0 30px 0 30px;\" data-example-id=\"simple-table\">
        <table class=\"table table-hover\">
            <thead class=\"thead-light\">
            <tr>
                <th>#</th>
                <th>Task</th>
                <th>Priority</th>
                <th>Due date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taskList"]) || array_key_exists("taskList", $context) ? $context["taskList"] : (function () { throw new RuntimeError('Variable "taskList" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 20
            echo "            <tr>
                <th scope=\"row\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</th>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "priority", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "dueDate", [], "any", false, false, false, 24), "F j, Y ,g:i a"), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"/task/details/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\" class=\"btn btn-success\" style=\"width: 87px;\">View</a>
                    <a href=\"/task/update/";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\" class=\"btn btn-primary\" style=\"width: 87px;\">Update</a>
                    <a href=\"/task/delete/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\" class=\"btn btn-danger\" style=\"width: 87px;\">Delete</a>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </tbody>
        </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "task/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 32,  117 => 28,  113 => 27,  109 => 26,  104 => 24,  100 => 23,  96 => 22,  92 => 21,  89 => 20,  85 => 19,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div style=\"height: 80px; margin: 30px 30px 0 0;\">
        <a class=\"btn btn-primary\" style=\"float: right;\" href=\"/task/create\">Create Task</a>
    </div>
    <div class=\"bs-example\" style=\"margin: 0 30px 0 30px;\" data-example-id=\"simple-table\">
        <table class=\"table table-hover\">
            <thead class=\"thead-light\">
            <tr>
                <th>#</th>
                <th>Task</th>
                <th>Priority</th>
                <th>Due date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            {% for task in taskList %}
            <tr>
                <th scope=\"row\">{{ task.id }}</th>
                <td>{{ task.name }}</td>
                <td>{{ task.priority }}</td>
                <td>{{ task.dueDate|date('F j, Y ,g:i a') }}</td>
                <td>
                    <a href=\"/task/details/{{ task.id }}\" class=\"btn btn-success\" style=\"width: 87px;\">View</a>
                    <a href=\"/task/update/{{ task.id }}\" class=\"btn btn-primary\" style=\"width: 87px;\">Update</a>
                    <a href=\"/task/delete/{{ task.id }}\" class=\"btn btn-danger\" style=\"width: 87px;\">Delete</a>
                </td>
            </tr>
            {% endfor %}
            </tbody>
        </table>
{% endblock %}", "task/index.html.twig", "/home/user/todolist/templates/task/index.html.twig");
    }
}
