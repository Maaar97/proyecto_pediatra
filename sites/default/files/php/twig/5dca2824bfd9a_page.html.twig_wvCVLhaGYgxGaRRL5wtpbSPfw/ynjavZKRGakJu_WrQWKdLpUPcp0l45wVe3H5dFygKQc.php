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

/* themes/startup_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_8b7c775dd3b6364b63b8d699cb0663714ac97edf22e72a9ca22f4de7ea874ce2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 71, "for" => 100];
        $filters = ["escape" => 72, "raw" => 101, "date" => 512];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                []
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 60
        echo "
<div class=\"header\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Header -->

      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 71
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 72
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
        ";
        }
        // line 74
        echo "      </div>

      <!-- End: Header -->

      ";
        // line 78
        if (($this->getAttribute(($context["page"] ?? null), "primary_menu", []) || $this->getAttribute(($context["page"] ?? null), "search", []))) {
            // line 79
            echo "        <div class=\"col-md-9\">

          ";
            // line 81
            if ($this->getAttribute(($context["page"] ?? null), "search", [])) {
                // line 82
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
                echo "
          ";
            }
            // line 84
            echo "
          ";
            // line 85
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
          
        </div>
      ";
        }
        // line 89
        echo "
      </div>

    </div>
  </div>
</div>


";
        // line 97
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 98
            echo "  <div class=\"flexslider\">
    <ul class=\"slides\">
      ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 101
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"]));
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "    </ul>
  </div>
";
        }
        // line 106
        echo "

<!-- Start: Top widget -->

";
        // line 110
        if ((($this->getAttribute(($context["page"] ?? null), "topwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", []))) {
            // line 111
            echo "  <div class=\"topwidget\" id=\"topwidget\">
    <div class=\"container\">
        <div class=\"row clearfix\">

          <!-- Start: Top widget first -->          
          ";
            // line 116
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])) {
                // line 117
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 118
            echo "          
          <!-- End: Top widget first --> 

          <!-- Start: Top widget second -->          
          ";
            // line 122
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) {
                // line 123
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 124
            echo "          
          <!-- End: Top widget second --> 
          
          <!-- Start: Top widget third -->         
          ";
            // line 128
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])) {
                // line 129
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 130
            echo "          
          <!-- End: Top widget third -->

        </div>
    </div>
  </div>
";
        }
        // line 137
        echo "
<!--End: Top widget -->

    
<!--Start: Highlighted -->

";
        // line 143
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 144
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 146
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 150
        echo "
<!--End: Highlighted -->

<!--Start: Title -->

";
        // line 155
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 156
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 159
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 164
        echo "
<!--End: Title -->

<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      <!--Start: Breadcrumb -->

      ";
        // line 173
        if ( !($context["is_front"] ?? null)) {
            // line 174
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 175
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 178
        echo "
      <!--End: Breadcrumb -->

      <div class=\"row layout\">

        <!--- Start: Left SideBar -->
        ";
        // line 184
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 185
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 187
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 191
        echo "        <!-- End Left SideBar -->

        <!--- Start Content -->
        ";
        // line 194
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 195
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 197
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 201
        echo "        <!-- End: Content -->

        <!-- Start: Right SideBar -->
        ";
        // line 204
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 205
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 207
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 211
        echo "        <!-- End: Right SideBar -->
        
      </div>
    
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Features -->

";
        // line 224
        if ((($this->getAttribute(($context["page"] ?? null), "features_first", []) || $this->getAttribute(($context["page"] ?? null), "features_second", [])) || $this->getAttribute(($context["page"] ?? null), "features_third", []))) {
            // line 225
            echo "
  <div class=\"features\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Features First -->
        ";
            // line 231
            if ($this->getAttribute(($context["page"] ?? null), "features_first", [])) {
                // line 232
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 233
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 236
            echo "        <!-- End: Features First -->

        <!-- Start :Features Second -->
        ";
            // line 239
            if ($this->getAttribute(($context["page"] ?? null), "features_second", [])) {
                // line 240
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 241
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 244
            echo "        <!-- End: Features Second -->

        <!-- Start: Features third -->
        ";
            // line 247
            if ($this->getAttribute(($context["page"] ?? null), "features_third", [])) {
                // line 248
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 249
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 252
            echo "        <!-- End: Features Third -->

      </div>
    </div>
  </div>

";
        }
        // line 259
        echo "
<!--End: Features -->


<!-- Start: Services -->

";
        // line 265
        if ($this->getAttribute(($context["page"] ?? null), "services", [])) {
            // line 266
            echo "
  <div class=\"services\" id=\"services\">
    <div class=\"container\">
      ";
            // line 269
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services", [])), "html", null, true);
            echo "
    </div>
  </div>

";
        }
        // line 274
        echo "
<!--End: Services -->



<!-- Start: Services -->

";
        // line 281
        if ($this->getAttribute(($context["page"] ?? null), "products", [])) {
            // line 282
            echo "
  <!-- <div class=\"products\" id=\"products\">
    <div class=\"container\">
      ";
            // line 285
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "products", [])), "html", null, true);
            echo "
    </div>
  </div> -->

";
        }
        // line 290
        echo "
<!--End: Services -->


<!-- Start: Price table widgets -->

";
        // line 296
        if ((($this->getAttribute(($context["page"] ?? null), "pricetable_first", []) || $this->getAttribute(($context["page"] ?? null), "pricetable_second", [])) || $this->getAttribute(($context["page"] ?? null), "pricetable_third", []))) {
            // line 297
            echo "
  <div class=\"price-table\" id=\"price-table\">    
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 303
            if ($this->getAttribute(($context["page"] ?? null), "pricetable_first", [])) {
                // line 304
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 305
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pricetable_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 307
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 311
            if ($this->getAttribute(($context["page"] ?? null), "pricetable_second", [])) {
                // line 312
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 313
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pricetable_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 315
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 319
            if ($this->getAttribute(($context["page"] ?? null), "pricetable_third", [])) {
                // line 320
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 321
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pricetable_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 323
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom third -->          
        ";
            // line 327
            if ($this->getAttribute(($context["page"] ?? null), "pricetable_forth", [])) {
                // line 328
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 329
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pricetable_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 331
            echo "          
        <!-- End: Bottom Third -->

      </div>
    </div>
  </div>

";
        }
        // line 339
        echo "
<!--End: Price table widgets -->


<!-- Start: Bottom widgets -->

";
        // line 345
        if (((($this->getAttribute(($context["page"] ?? null), "bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_third", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_forth", []))) {
            // line 346
            echo "
  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 352
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                // line 353
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 354
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 356
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 360
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", [])) {
                // line 361
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 362
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 364
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 368
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", [])) {
                // line 369
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 370
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 372
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 376
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])) {
                // line 377
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 378
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 381
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 388
        echo "
<!--End: Bottom widgets -->


<!-- Start: Team widgets -->

";
        // line 394
        if (((($this->getAttribute(($context["page"] ?? null), "team_first", []) || $this->getAttribute(($context["page"] ?? null), "team_second", [])) || $this->getAttribute(($context["page"] ?? null), "team_third", [])) || $this->getAttribute(($context["page"] ?? null), "team_forth", []))) {
            // line 395
            echo "
  <div class=\"team\" id=\"team\">    
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 401
            if ($this->getAttribute(($context["page"] ?? null), "team_first", [])) {
                // line 402
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 403
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "team_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 405
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 409
            if ($this->getAttribute(($context["page"] ?? null), "team_second", [])) {
                // line 410
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 411
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "team_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 413
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 417
            if ($this->getAttribute(($context["page"] ?? null), "team_third", [])) {
                // line 418
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 419
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "team_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 421
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 425
            if ($this->getAttribute(($context["page"] ?? null), "team_forth", [])) {
                // line 426
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 427
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "team_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 430
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 437
        echo "
<!--End: Team widgets -->


<!-- Start: Footer widgets -->

";
        // line 443
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", []))) {
            // line 444
            echo "
  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInUp\">  
        <div class=\"row\">

          <!-- Start: Footer First -->
          ";
            // line 451
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 452
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 453
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 456
            echo "          <!-- End: Footer First -->

          <!-- Start :Footer Second -->
          ";
            // line 459
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 460
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 461
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 464
            echo "          <!-- End: Footer Second -->

          <!-- Start: Footer third -->
          ";
            // line 467
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 468
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 469
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 472
            echo "          <!-- End: Footer Third -->

        </div>
      </div>
    </div>
  </div>

";
        }
        // line 480
        echo "
<!--End: Footer widgets -->

<!-- Start: Copyright -->

<div class=\"copyright\">

    <div class=\"container\">

      ";
        // line 489
        if (($context["show_social_icon"] ?? null)) {
            // line 490
            echo "        <p class=\"social-media\">
          ";
            // line 491
            if (($context["facebook_url"] ?? null)) {
                // line 492
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
          ";
            }
            // line 494
            echo "          ";
            if (($context["google_plus_url"] ?? null)) {
                // line 495
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
          ";
            }
            // line 497
            echo "          ";
            if (($context["twitter_url"] ?? null)) {
                // line 498
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
          ";
            }
            // line 500
            echo "          ";
            if (($context["linkedin_url"] ?? null)) {
                // line 501
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
          ";
            }
            // line 503
            echo "          ";
            if (($context["pinterest_url"] ?? null)) {
                // line 504
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
          ";
            }
            // line 506
            echo "          ";
            if (($context["rss_url"] ?? null)) {
                // line 507
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
          ";
            }
            // line 509
            echo "        </p>
      ";
        }
        // line 511
        echo "
      <p>Copyright © ";
        // line 512
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</p>

      ";
        // line 514
        if (($context["show_credit_link"] ?? null)) {
            // line 515
            echo "        <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
      ";
        }
        // line 517
        echo "
  </div>

</div>

<!-- End: Copyright -->





";
    }

    public function getTemplateName()
    {
        return "themes/startup_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  921 => 517,  917 => 515,  915 => 514,  910 => 512,  907 => 511,  903 => 509,  897 => 507,  894 => 506,  888 => 504,  885 => 503,  879 => 501,  876 => 500,  870 => 498,  867 => 497,  861 => 495,  858 => 494,  852 => 492,  850 => 491,  847 => 490,  845 => 489,  834 => 480,  824 => 472,  818 => 469,  813 => 468,  811 => 467,  806 => 464,  800 => 461,  795 => 460,  793 => 459,  788 => 456,  782 => 453,  777 => 452,  775 => 451,  766 => 444,  764 => 443,  756 => 437,  747 => 430,  741 => 427,  736 => 426,  734 => 425,  728 => 421,  722 => 419,  717 => 418,  715 => 417,  709 => 413,  703 => 411,  698 => 410,  696 => 409,  690 => 405,  684 => 403,  679 => 402,  677 => 401,  669 => 395,  667 => 394,  659 => 388,  650 => 381,  644 => 378,  639 => 377,  637 => 376,  631 => 372,  625 => 370,  620 => 369,  618 => 368,  612 => 364,  606 => 362,  601 => 361,  599 => 360,  593 => 356,  587 => 354,  582 => 353,  580 => 352,  572 => 346,  570 => 345,  562 => 339,  552 => 331,  546 => 329,  541 => 328,  539 => 327,  533 => 323,  527 => 321,  522 => 320,  520 => 319,  514 => 315,  508 => 313,  503 => 312,  501 => 311,  495 => 307,  489 => 305,  484 => 304,  482 => 303,  474 => 297,  472 => 296,  464 => 290,  456 => 285,  451 => 282,  449 => 281,  440 => 274,  432 => 269,  427 => 266,  425 => 265,  417 => 259,  408 => 252,  402 => 249,  397 => 248,  395 => 247,  390 => 244,  384 => 241,  379 => 240,  377 => 239,  372 => 236,  366 => 233,  361 => 232,  359 => 231,  351 => 225,  349 => 224,  334 => 211,  327 => 207,  321 => 205,  319 => 204,  314 => 201,  307 => 197,  301 => 195,  299 => 194,  294 => 191,  287 => 187,  281 => 185,  279 => 184,  271 => 178,  265 => 175,  262 => 174,  260 => 173,  249 => 164,  241 => 159,  236 => 156,  234 => 155,  227 => 150,  220 => 146,  216 => 144,  214 => 143,  206 => 137,  197 => 130,  189 => 129,  187 => 128,  181 => 124,  173 => 123,  171 => 122,  165 => 118,  157 => 117,  155 => 116,  148 => 111,  146 => 110,  140 => 106,  135 => 103,  126 => 101,  122 => 100,  118 => 98,  116 => 97,  106 => 89,  99 => 85,  96 => 84,  90 => 82,  88 => 81,  84 => 79,  82 => 78,  76 => 74,  70 => 72,  68 => 71,  55 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/startup_zymphonies_theme/templates/layout/page.html.twig", "/var/www/html/dragloriavillela/themes/startup_zymphonies_theme/templates/layout/page.html.twig");
    }
}
