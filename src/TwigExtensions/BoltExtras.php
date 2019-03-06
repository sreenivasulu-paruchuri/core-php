<?php

namespace Bolt\TwigExtensions;

use Bolt;
use Twig_Extension;
use Twig_ExtensionInterface;
use BasaltInc\TwigTools;

class BoltExtras extends Twig_Extension implements Twig_ExtensionInterface {

  public function getFunctions() {
    return [
      TwigTools\TwigFunctions::console_log(),
      Bolt\TwigFunctions::fileExists(),
      Bolt\TwigFunctions::deep_merge(),
      Bolt\TwigFunctions::color_contrast(),
      Bolt\TwigFunctions::create_attribute(),
      Bolt\TwigFunctions::pattern_template(),
      Bolt\TwigFunctions::link(),
      Bolt\TwigFunctions::getSpacingScaleSequence(),
      Bolt\TwigFunctions::github_url(),
      Bolt\TwigFunctions::inlineFile(),
      Bolt\TwigFunctions::merge_attributes()
    ];
  }

  public function getFilters() {
    return [
      Bolt\TwigFilters::markdown(),
      Bolt\TwigFilters::rgb2hex(),
      Bolt\TwigFilters::text_contrast(),
      Bolt\TwigFilters::without(),
      Bolt\TwigFilters::t(),
    ];
  }

}
