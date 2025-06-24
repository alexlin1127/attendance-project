<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* partial/backend/acc_manage.html.twig */
class __TwigTemplate_27437eb9b73328dd5f5e85e349ed8d33 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "dashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "
<h2 class=\"my-5 w-100 text-center fw-bold\">使用者帳號管理</h2>
<div class=\"row mb-5\">
    <div class=\"col-12 col-sm-12 col-md-12\">
        <div class=\"card\">
            <div class=\"card-body\">
                <table class=\"table table-hover table-fixed text-center\">
                    <thead>
                        <tr>
                            <th style=\"width:100px;\">編號ID</th>
                            <th style=\"width:200px;\">帳號</th>
                            <th style=\"width:350px;\">密碼</th>
                            <th style=\"width:100px;\">使用者代稱</th>
                            <th style=\"width:100px;\">身分</th>
                            <th style=\"width:200px;\">功能</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["user"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            yield "                        <tr>
                            <td class=\"align-middle\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "no", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                            <td class=\"align-middle\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "acc", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                            <td class=\"align-middle\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "pwd", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                            <td class=\"align-middle\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user_name", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                            <td class=\"align-middle\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "role", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                            <td class=\"align-middle\">
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                                <a href=\"switch.php?mode=edit_user&id=";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "no", [], "any", false, false, false, 33), "html", null, true);
            yield "&status=edit\" class=\"btn btn-sm btn-warning\">編輯</a>
                                <a href=\"switch.php?mode=edit_user&id=";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "no", [], "any", false, false, false, 34), "html", null, true);
            yield "&status=reset\" class=\"btn btn-sm btn-success\">重置密碼</a>
                                <a class=\"btn btn-sm btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmDeleteModal\" data-id=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "no", [], "any", false, false, false, 35), "html", null, true);
            yield "\">刪除</a>
                            </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

";
        // line 48
        yield "<div class=\"modal fade\" id=\"confirmDeleteModal\" tabindex=\"-1\" aria-labelledby=\"confirmModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <form method=\"get\" action=\"switch.php\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"confirmModalLabel\">確認刪除</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"關閉\"></button>
        </div>
        <div class=\"modal-body\">
            確定要刪除這筆資料嗎？
        </div>
        ";
        // line 60
        yield "        <input type=\"hidden\" name=\"mode\" value=\"deluser\">        
        ";
        // line 62
        yield "        <input type=\"hidden\" name=\"id\" id=\"delete-id\">
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">取消</button>
          <button type=\"submit\" class=\"btn btn-danger\">確定刪除</button>
        </div>
      </form>
    </div>
  </div>
</div>
";
        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 74
        yield "<script>
";
        // line 76
        yield "document.getElementById('confirmDeleteModal').addEventListener('show.bs.modal', function (e) {
  const button = e.relatedTarget;
  const id = button.getAttribute('data-id');
  document.getElementById('delete-id').value = id;
});
</script>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partial/backend/acc_manage.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  176 => 76,  173 => 74,  166 => 73,  152 => 62,  149 => 60,  136 => 48,  127 => 40,  116 => 35,  112 => 34,  108 => 33,  102 => 30,  98 => 29,  94 => 28,  90 => 27,  86 => 26,  83 => 25,  79 => 24,  59 => 6,  52 => 5,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}



{% block content %}

<h2 class=\"my-5 w-100 text-center fw-bold\">使用者帳號管理</h2>
<div class=\"row mb-5\">
    <div class=\"col-12 col-sm-12 col-md-12\">
        <div class=\"card\">
            <div class=\"card-body\">
                <table class=\"table table-hover table-fixed text-center\">
                    <thead>
                        <tr>
                            <th style=\"width:100px;\">編號ID</th>
                            <th style=\"width:200px;\">帳號</th>
                            <th style=\"width:350px;\">密碼</th>
                            <th style=\"width:100px;\">使用者代稱</th>
                            <th style=\"width:100px;\">身分</th>
                            <th style=\"width:200px;\">功能</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for item in user %}
                        <tr>
                            <td class=\"align-middle\">{{item.no}}</td>
                            <td class=\"align-middle\">{{item.acc}}</td>
                            <td class=\"align-middle\">{{item.pwd}}</td>
                            <td class=\"align-middle\">{{item.user_name}}</td>
                            <td class=\"align-middle\">{{item.role}}</td>
                            <td class=\"align-middle\">
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                                <a href=\"switch.php?mode=edit_user&id={{item.no}}&status=edit\" class=\"btn btn-sm btn-warning\">編輯</a>
                                <a href=\"switch.php?mode=edit_user&id={{item.no}}&status=reset\" class=\"btn btn-sm btn-success\">重置密碼</a>
                                <a class=\"btn btn-sm btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmDeleteModal\" data-id=\"{{item.no}}\">刪除</a>
                            </div>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{# modal #}
<div class=\"modal fade\" id=\"confirmDeleteModal\" tabindex=\"-1\" aria-labelledby=\"confirmModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <form method=\"get\" action=\"switch.php\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"confirmModalLabel\">確認刪除</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"關閉\"></button>
        </div>
        <div class=\"modal-body\">
            確定要刪除這筆資料嗎？
        </div>
        {# 將mode=deldata傳入url變數 #}
        <input type=\"hidden\" name=\"mode\" value=\"deluser\">        
        {# 將id=選擇的id傳入，以js寫入 #}
        <input type=\"hidden\" name=\"id\" id=\"delete-id\">
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">取消</button>
          <button type=\"submit\" class=\"btn btn-danger\">確定刪除</button>
        </div>
      </form>
    </div>
  </div>
</div>
{% endblock %}

{% block scripts %}
<script>
{# bs提供 Modal 彈出前觸發事件show.bs.modal，觸發元素relatedTarget#}
document.getElementById('confirmDeleteModal').addEventListener('show.bs.modal', function (e) {
  const button = e.relatedTarget;
  const id = button.getAttribute('data-id');
  document.getElementById('delete-id').value = id;
});
</script>

{% endblock %}
", "partial/backend/acc_manage.html.twig", "C:\\xampp\\htdocs\\attendance-project\\templates\\partial\\backend\\acc_manage.html.twig");
    }
}
