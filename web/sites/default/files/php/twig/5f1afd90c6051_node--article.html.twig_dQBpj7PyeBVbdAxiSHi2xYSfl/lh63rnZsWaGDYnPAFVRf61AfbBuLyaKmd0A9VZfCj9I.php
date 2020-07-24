<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/conference_lite/templates/node--article.html.twig */
class __TwigTemplate_778464f9f2913cc9ceb08bda6f92ef07b367f88df6597d780c04fcb2ae88a5ec extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'node_side' => [$this, 'block_node_side'],
            'meta_area' => [$this, 'block_meta_area'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 10, "trans" => 16];
        $filters = ["escape" => 13, "url_encode" => 53, "render" => 134, "format_date" => 137, "without" => 160];
        $functions = ["attach_library" => 13, "url" => 53];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'url_encode', 'render', 'format_date', 'without'],
                ['attach_library', 'url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("node.html.twig", "themes/conference_lite/templates/node--article.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_node_side($context, array $blocks = [])
    {
        // line 10
        echo "  ";
        if ((((($this->getAttribute(($context["mt_setting"] ?? null), "reading_time", []) || $this->getAttribute(($context["mt_setting"] ?? null), "share_links", [])) || $this->getAttribute(($context["mt_setting"] ?? null), "font_resize", [])) || $this->getAttribute(($context["mt_setting"] ?? null), "post_progress", [])) || $this->getAttribute(($context["mt_setting"] ?? null), "print_button", []))) {
            // line 11
            echo "    <div class=\"node__side\">
        ";
            // line 12
            if ($this->getAttribute(($context["mt_setting"] ?? null), "reading_time", [])) {
                // line 13
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("conference_lite/reading-time"), "html", null, true);
                echo "
          <div class=\"reading-time\">
            ";
                // line 15
                if ((($context["minutes"] ?? null) < 1)) {
                    // line 16
                    echo "              ";
                    echo t("1<div class=\"reading-time__text\">min read</div>", array());
                    // line 19
                    echo "            ";
                } else {
                    // line 20
                    echo "              ";
                    echo t("@minutes<div class=\"reading-time__text\">min read</div>", array("@minutes" =>                     // line 21
($context["minutes"] ?? null), ));
                    // line 23
                    echo "            ";
                }
                // line 24
                echo "          </div>
        ";
            }
            // line 26
            echo "        ";
            if ($this->getAttribute(($context["mt_setting"] ?? null), "affix_side", [])) {
                // line 27
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("conference_lite/node-side-affix"), "html", null, true);
                echo "
          <div id=\"affix\">
        ";
            }
            // line 30
            echo "        ";
            if ($this->getAttribute(($context["mt_setting"] ?? null), "font_resize", [])) {
                // line 31
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("conference_lite/font-resize"), "html", null, true);
                echo "
          <div class=\"content-font-settings\">
              <div class=\"font-resize\">
                <a href=\"#\" id=\"decfont\">A-</a>
                <a href=\"#\" id=\"incfont\">A+</a>
              </div>
          </div>
        ";
            }
            // line 39
            echo "        ";
            if ($this->getAttribute(($context["mt_setting"] ?? null), "post_progress", [])) {
                // line 40
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("conference_lite/post-progress"), "html", null, true);
                echo "
          <div class=\"post-progress\">
            <div class=\"post-progress__value\"></div>
            <div class=\"post-progress__text\">";
                // line 43
                echo t("read", array());
                echo "</div>
            <div class=\"post-progress__bar\"></div>
          </div>
        ";
            }
            // line 47
            echo "        ";
            if ((($this->getAttribute(($context["mt_setting"] ?? null), "share_links_print_position", []) == "node-side") && ($this->getAttribute(($context["mt_setting"] ?? null), "share_links", []) || $this->getAttribute(($context["mt_setting"] ?? null), "print_button", [])))) {
                // line 48
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("conference_lite/share-links"), "html", null, true);
                echo "
          <div class=\"share-links\">
            <ul>
              ";
                // line 51
                if ($this->getAttribute(($context["mt_setting"] ?? null), "share_links", [])) {
                    // line 52
                    echo "                <li class=\"facebook";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["mt_setting"] ?? null), "print_button", [])) ? (" print-button-enabled") : ("")));
                    echo "\">
                  <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
                    // line 53
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.node.canonical", ["node" => $this->getAttribute(($context["node"] ?? null), "id", [])]), "html", null, true);
                    echo "&t=";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "label", [])), true), "html", null, true);
                    echo "\" onclick=\"window.open(this.href, 'facebook-share','width=580,height=296');return false;\">
                      <i class=\"fab fa-facebook\"><span class=\"sr-only\">facebook</span></i>
                  </a>
                </li>
                <li class=\"twitter";
                    // line 57
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["mt_setting"] ?? null), "print_button", [])) ? (" print-button-enabled") : ("")));
                    echo "\">
                  <a href=\"http://twitter.com/share?text=";
                    // line 58
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "label", [])), true), "html", null, true);
                    echo "&url=";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.node.canonical", ["node" => $this->getAttribute(($context["node"] ?? null), "id", [])]), "html", null, true);
                    echo "\" onclick=\"window.open(this.href, 'twitter-share', 'width=550,height=235');return false;\">
                      <i class=\"fab fa-twitter\"><span class=\"sr-only\">twitter</span></i>
                  </a>
                </li>
                <li class=\"email";
                    // line 62
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["mt_setting"] ?? null), "print_button", [])) ? (" print-button-enabled") : ("")));
                    echo "\">
                  <a href=\"mailto:?Subject=";
                    // line 63
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "label", [])), true), "html", null, true);
                    echo "&amp;Body=";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.node.canonical", ["node" => $this->getAttribute(($context["node"] ?? null), "id", [])]), "html", null, true);
                    echo "\">
                      <i class=\"far fa-envelope\"><span class=\"sr-only\">envelope</span></i>
                  </a>
                </li>
              ";
                }
                // line 68
                echo "              ";
                if ($this->getAttribute(($context["mt_setting"] ?? null), "print_button", [])) {
                    // line 69
                    echo "                <li class=\"print";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["mt_setting"] ?? null), "share_links", [])) ? (" share-links-enabled") : ("")));
                    echo "\">
                  <div class=\"print\">
                    <a href=\"javascript:window.print()\" class=\"print-button\">
                      <i class=\"fas fa-print\"><span class=\"sr-only\">print</span></i>
                    </a>
                  </div>
                </li>
              ";
                }
                // line 77
                echo "            </ul>
          </div>
        ";
            }
            // line 80
            echo "        ";
            if ($this->getAttribute(($context["mt_setting"] ?? null), "affix_side", [])) {
                // line 81
                echo "          </div>
        ";
            }
            // line 83
            echo "        ";
            if ((($this->getAttribute(($context["mt_setting"] ?? null), "share_links_print_position", []) == "bottom") && ($this->getAttribute(($context["mt_setting"] ?? null), "share_links", []) || $this->getAttribute(($context["mt_setting"] ?? null), "print_button", [])))) {
                // line 84
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("conference_lite/share-links"), "html", null, true);
                echo "
          ";
                // line 85
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("conference_lite/fixed-share-links"), "html", null, true);
                echo "
          <div class=\"share-links\">
            <ul>
              ";
                // line 88
                if ($this->getAttribute(($context["mt_setting"] ?? null), "share_links", [])) {
                    // line 89
                    echo "                <li class=\"facebook";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["mt_setting"] ?? null), "print_button", [])) ? (" print-button-enabled") : ("")));
                    echo "\">
                  <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
                    // line 90
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.node.canonical", ["node" => $this->getAttribute(($context["node"] ?? null), "id", [])]), "html", null, true);
                    echo "&t=";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "label", [])), true), "html", null, true);
                    echo "\" onclick=\"window.open(this.href, 'facebook-share','width=580,height=296');return false;\">
                      <i class=\"fab fa-facebook\"><span class=\"sr-only\">facebook</span></i>
                  </a>
                </li>
                <li class=\"twitter";
                    // line 94
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["mt_setting"] ?? null), "print_button", [])) ? (" print-button-enabled") : ("")));
                    echo "\">
                  <a href=\"http://twitter.com/share?text=";
                    // line 95
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "label", [])), true), "html", null, true);
                    echo "&url=";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.node.canonical", ["node" => $this->getAttribute(($context["node"] ?? null), "id", [])]), "html", null, true);
                    echo "\" onclick=\"window.open(this.href, 'twitter-share', 'width=550,height=235');return false;\">
                      <i class=\"fab fa-twitter\"><span class=\"sr-only\">twitter</span></i>
                  </a>
                </li>
                <li class=\"email";
                    // line 99
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["mt_setting"] ?? null), "print_button", [])) ? (" print-button-enabled") : ("")));
                    echo "\">
                  <a href=\"mailto:?Subject=";
                    // line 100
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "label", [])), true), "html", null, true);
                    echo "&amp;Body=";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.node.canonical", ["node" => $this->getAttribute(($context["node"] ?? null), "id", [])]), "html", null, true);
                    echo "\">
                      <i class=\"far fa-envelope\"><span class=\"sr-only\">envelope</span></i>
                  </a>
                </li>
              ";
                }
                // line 105
                echo "              ";
                if ($this->getAttribute(($context["mt_setting"] ?? null), "print_button", [])) {
                    // line 106
                    echo "                <li class=\"print";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["mt_setting"] ?? null), "share_links", [])) ? (" share-links-enabled") : ("")));
                    echo "\">
                  <div class=\"print\">
                    <a href=\"javascript:window.print()\" class=\"print-button\">
                      <i class=\"fas fa-print\"><span class=\"sr-only\">print</span></i>
                    </a>
                  </div>
                </li>
              ";
                }
                // line 114
                echo "            </ul>
          </div>
        ";
            }
            // line 117
            echo "    </div>
  ";
        }
    }

    // line 120
    public function block_meta_area($context, array $blocks = [])
    {
        // line 121
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 122
        if ( !($context["page"] ?? null)) {
            // line 123
            echo "    <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method")), "html", null, true);
            echo ">
      <a href=\"";
            // line 124
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a>
    </h2>
  ";
        }
        // line 127
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 128
        if ((($context["display_submitted"] ?? null) || ($this->getAttribute(($context["node"] ?? null), "comment", []) && (($context["comment_count"] ?? null) > 0)))) {
            // line 129
            echo "    <div class=\"node__meta\">
      ";
            // line 130
            if (($context["display_submitted"] ?? null)) {
                // line 131
                echo "        <span";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["author_attributes"] ?? null), "addClass", [0 => "node__meta-user node__meta-item"], "method")), "html", null, true);
                echo ">
          <i class=\"far fa-user\"></i> ";
                // line 132
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null)), "html", null, true);
                echo "
        </span>
        ";
                // line 134
                if ( !$this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_image", []))) {
                    // line 135
                    echo "        <div class=\"node__meta-item node__meta-date\">
          <i class=\"far fa-calendar\"></i>
          <div class=\"node__meta-date-item month\">";
                    // line 137
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "createdtime", [])), "custom", "M"]), "html", null, true);
                    echo "</div>
          <div class=\"node__meta-date-item day\">";
                    // line 138
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "createdtime", [])), "custom", "d"]), "html", null, true);
                    echo "</div>
          <div class=\"node__meta-date-item year\">";
                    // line 139
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "createdtime", [])), "custom", "Y"]), "html", null, true);
                    echo "</div>
        </div>
        ";
                }
                // line 142
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null)), "html", null, true);
                echo "
      ";
            }
            // line 144
            echo "      ";
            if (($this->getAttribute(($context["node"] ?? null), "comment", []) && (($context["comment_count"] ?? null) > 0))) {
                // line 145
                echo "        <div class=\"node__meta-item node__meta-comments\">
          <i class=\"far fa-comments\"></i>
          ";
                // line 147
                echo \Drupal::translation()->formatPlural(abs(                // line 149
($context["comment_count"] ?? null)), "1 comment", "@comment_count comments", array("@comment_count" =>                 // line 150
($context["comment_count"] ?? null), ));
                // line 152
                echo "        </div>
      ";
            }
            // line 154
            echo "    </div>
  ";
        }
    }

    // line 157
    public function block_content($context, array $blocks = [])
    {
        // line 158
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("conference_lite/node-article"), "html", null, true);
        echo "
  <div class=\"node__main-content-section\">
    ";
        // line 160
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "comment", "links"), "html", null, true);
        echo "
  </div>
  ";
        // line 162
        if (((($context["author_picture"] ?? null) || $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "Owner", []), "field_mt_full_name", []), "value", [])) || $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "Owner", []), "field_mt_signature", []), "value", []))) {
            // line 163
            echo "    <div class=\"node__user-info clearfix\">
      ";
            // line 164
            if (($context["author_picture"] ?? null)) {
                // line 165
                echo "        <div class=\"user-picture\">
          <div";
                // line 166
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["author_attributes"] ?? null), "removeClass", [0 => "node__meta-user node__meta-item"], "method")), "html", null, true);
                echo ">
            ";
                // line 167
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null)), "html", null, true);
                echo "
          </div>
        </div>
      ";
            }
            // line 171
            echo "      ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "Owner", []), "field_mt_full_name", []), "value", [])) {
                // line 172
                echo "        <div class=\"user-full-name\">
          ";
                // line 173
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "Owner", []), "field_mt_full_name", []), "value", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 176
            echo "      ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "Owner", []), "field_mt_signature", []), "value", [])) {
                // line 177
                echo "        <div class=\"user-signature\">
          ";
                // line 178
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "Owner", []), "field_mt_signature", []), "value", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 181
            echo "    </div>
  ";
        }
        // line 183
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "links", [])), "html", null, true);
        echo "
  ";
        // line 184
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "comment", [])), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/conference_lite/templates/node--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  467 => 184,  462 => 183,  458 => 181,  452 => 178,  449 => 177,  446 => 176,  440 => 173,  437 => 172,  434 => 171,  427 => 167,  423 => 166,  420 => 165,  418 => 164,  415 => 163,  413 => 162,  408 => 160,  402 => 158,  399 => 157,  393 => 154,  389 => 152,  387 => 150,  386 => 149,  385 => 147,  381 => 145,  378 => 144,  372 => 142,  366 => 139,  362 => 138,  358 => 137,  354 => 135,  352 => 134,  347 => 132,  342 => 131,  340 => 130,  337 => 129,  335 => 128,  330 => 127,  322 => 124,  317 => 123,  315 => 122,  310 => 121,  307 => 120,  301 => 117,  296 => 114,  284 => 106,  281 => 105,  271 => 100,  267 => 99,  258 => 95,  254 => 94,  245 => 90,  240 => 89,  238 => 88,  232 => 85,  227 => 84,  224 => 83,  220 => 81,  217 => 80,  212 => 77,  200 => 69,  197 => 68,  187 => 63,  183 => 62,  174 => 58,  170 => 57,  161 => 53,  156 => 52,  154 => 51,  147 => 48,  144 => 47,  137 => 43,  130 => 40,  127 => 39,  115 => 31,  112 => 30,  105 => 27,  102 => 26,  98 => 24,  95 => 23,  93 => 21,  91 => 20,  88 => 19,  85 => 16,  83 => 15,  77 => 13,  75 => 12,  72 => 11,  69 => 10,  66 => 9,  56 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/conference_lite/templates/node--article.html.twig", "D:\\xampp\\htdocs\\studiogenesisDrupal\\web\\themes\\conference_lite\\templates\\node--article.html.twig");
    }
}
