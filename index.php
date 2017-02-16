<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
  <title>VIBE  Living Style Guide</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#000000">

  <!-- Style Guide Boilerplate Styles -->
  <link rel="stylesheet" href="css/sg-style.css">
  <!--[if lt IE 9]><link rel="stylesheet" href="css/sg-style-old-ie.css"><![endif]-->

  <!-- https://github.com/sindresorhus/github-markdown-css -->
  <link rel="stylesheet" href="css/github-markdown.css">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

  <!-- prism Syntax Highlighting Styles -->
  <link rel="stylesheet" href="vendor/prism/prism.css">

  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:100,300,400,700,900">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<body>
  <a href="#main" class="sg-visually-hidden sg-visually-hidden-focusable">Skip to main content</a>

  <div id="top" class="sg-header" role="banner">
    <div class="sg-container">
      <h1 class="sg-logo">
        <span class="sg-logo-initials">SG</span>
        <span class="sg-logo-full">VIBE</span> <em>LIVING STYLE GUIDE</em>
      </h1>
      <button type="button" class="sg-nav-toggle">Menu</button>
    </div>
  </div><!--/.sg-header-->

  <div class="sg-wrapper sg-clearfix">
    <div id="nav" class="sg-sidebar" role="navigation">
      <h2 class="sg-h2 sg-subnav-title">About</h2>
      <ul class="sg-nav-group">
        <li>
          <a href="#sg-about">Getting Started</a>
        </li>
        <li>
          <a href="#sg-colors">Colors</a>
        </li>
        <li>
          <a href="#sg-fontStacks">Fonts</a>
        </li>
      </ul>

      <?php listFilesInFolder('markup'); ?>
    </div><!--/.sg-sidebar-->

    <div id="main" class="sg-main" role="main">
      <div class="sg-container">
        <div class="sg-info">
          <div class="sg-about sg-section">
            <h2 id="sg-about" class="sg-h2">Getting Started</h2>
            <p>Listed here are the various modular styles and design patterns used in VIBE. In addition to these, VIBE utilizes <a href="http://getbootstrap.com/css/#grid">Bootstrap</a> for its grid system and some other elements.</p>
          </div><!--/.sg-about-->

          <!-- Manually add your UI colors here. -->
          <div class="sg-colors sg-section">
            <h2 id="sg-colors" class="sg-h2">Colors</h2>
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch color-default"></div>
                <div class="sg-color-name">Default</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch color-text"></div>
                <div class="sg-color-name">Text</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch color-text-inactive"></div>
                <div class="sg-color-name">Inactive Text</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch color-background-default"></div>
                <div class="sg-color-name">Default Background</div>
              </div>
            </div><!--/.sg-color-grid-->
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch color-primary"></div>
                <div class="sg-color-name">Primary</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch color-border-primary"></div>
                <div class="sg-color-name">Primary Border</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch color-text-primary"></div>
                <div class="sg-color-name">Primary Text</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch color-background-primary"></div>
                <div class="sg-color-name">Primary Background</div>
              </div>
            </div><!--/.sg-color-grid-->
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch color-success"></div>
                <div class="sg-color-name">Success</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch color-border-success"></div>
                <div class="sg-color-name">Success Border</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch color-text-success"></div>
                <div class="sg-color-name">Success Text</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch color-background-success"></div>
                <div class="sg-color-name">Success Background</div>
              </div>
            </div><!--/.sg-color-grid-->
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch color-info"></div>
                <div class="sg-color-name">Info</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch color-border-info"></div>
                <div class="sg-color-name">Info Border</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch color-text-info"></div>
                <div class="sg-color-name">Info Text</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch color-background-info"></div>
                <div class="sg-color-name">Info Background</div>
              </div>
            </div><!--/.sg-color-grid-->
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch color-warning"></div>
                <div class="sg-color-name">Warning</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch color-border-warning"></div>
                <div class="sg-color-name">Warning Border</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch color-text-warning"></div>
                <div class="sg-color-name">Warning Text</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch color-background-warning"></div>
                <div class="sg-color-name">Warning Background</div>
              </div>
            </div><!--/.sg-color-grid-->
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch color-danger"></div>
                <div class="sg-color-name">Danger</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch color-border-danger"></div>
                <div class="sg-color-name">Danger Border</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch color-text-danger"></div>
                <div class="sg-color-name">Danger Text</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch color-background-danger"></div>
                <div class="sg-color-name">Danger Background</div>
              </div>
            </div><!--/.sg-color-grid-->  
          </div><!--/.sg-colors-->

          <!-- Manually add your fonts here. -->
          <div class="sg-font-stacks sg-section">
            <h2 id="sg-fontStacks" class="sg-h2">Font Stacks</h2>
            <dl class="sg-font-list">
              <dt>Primary Font:</dt>
              <dd style='font-family: "Lato", "Helvetica", Helvetica, Arial, sans-serif;'>"Lato", "Helvetica", Helvetica, Arial, sans-serif;</dd>

              <dt>Primary Font Italic:</dt>
              <dd style='font-family: "Lato", "Helvetica", Helvetica, Arial, sans-serif; font-style: italic;'>"Lato", "Helvetica", Helvetica, Arial, sans-serif;</dd>

              <dt>Primary Font Bold:</dt>
              <dd style='font-family: "Lato", "Helvetica", Helvetica, Arial, sans-serif; font-weight: 900;'>"Lato", "Helvetica", Helvetica, Arial, sans-serif;</dd>

              <dt>Secondary Font:</dt>
              <dd style='font-family: "Palatino Linotype", "Palatino", Georgia, Times, "Times New Roman", serif;'>"Palatino Linotype", "Palatino", Georgia, Times, "Times New Roman", serif;</dd>

              <dt>Secondary Font Italic:</dt>
              <dd style='font-family: "Palatino Linotype", "Palatino", Georgia, Times, "Times New Roman", serif; font-style: italic;'>"Palatino Linotype", "Palatino", Georgia, Times, "Times New Roman", serif;</dd>

              <dt>Secondary Font Bold:</dt>
              <dd style='font-family: "Palatino Linotype", "Palatino", Georgia, Times, "Times New Roman", serif; font-weight: 900;'>"Palatino Linotype", "Palatino", Georgia, Times, "Times New Roman", serif;</dd>
            </dl>
            <div class="sg-markup-controls"><a class="sg-btn--top" href="#top">Back to Top</a></div>
          </div><!--/.sg-font-stacks-->
        </div><!--/.sg-info-->

        <?php renderFilesInFolder('markup'); ?>
      </div><!--/.sg-container-->
    </div><!--/.sg-main-->
  </div><!--/.sg-wrapper-->

  <!--[if gt IE 8]><!--><script src="vendor/prism/prism.js"></script><!--<![endif]-->
  <script src="js/sg-scripts.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/display-color-values.js"></script>
</body>
</html>

