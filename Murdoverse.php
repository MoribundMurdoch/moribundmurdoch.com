<?php
$pageTitle = "Murdoverse — MoribundMurdoch";
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo htmlspecialchars($pageTitle); ?></title>

  <!-- Base + components -->
  <link rel="stylesheet" href="/css/looks.css" />
  <link rel="stylesheet" href="/css/components.css" />
  <link rel="stylesheet" href="/css/header.css" />
  <link rel="stylesheet" href="/css/footer.css" />
</head>

<body>
  <mor-header></mor-header>

 <main class="container">
  <section class="section">
    <h1>Browse by Murdochian Variants</h1>
    <p>
      Explore projects across different expressions of the Murdoch identity, ranging from personal history to experimental systems and ongoing creative work.
    </p>

    <card-grid>
      <link-card href="https://moribundmurdoch.neocities.org/Socials" target="_blank">
        <h3>MoribundMurdoch</h3>
        <p>
          Murdoch’s primary username, where he confronts and comes to terms with his moribundity, prefixing his name with “Moribund” as a memento mori. Discover MoribundMurdoch’s presence across social media here.
        </p>
      </link-card>

      <link-card href="https://murdochianism.neocities.org/" target="_blank">
        <h3>Murdochianism</h3>
        <p>
          This website is dedicated to all Murdochs and to appreciating them, including the Murdoch who created it, who refers to himself as MoribundMurdoch.
        </p>
      </link-card>

      <link-card href="https://sites.google.com/view/murdochmaxwellharris/home" target="_blank">
        <h3>Murdoch's Origins</h3>
        <p>
          A reflection on the name Murdoch Maxwell Harris as both a personal foundation and a point of departure. While I gravitate toward usernames, stage names, and pen names, this remains the underlying identity.
        </p>
      </link-card>

      <link-card href="https://murdochinthemachine.blogspot.com/" target="_blank">
        <h3>Murdoch in the Machine</h3>
        <p>
          A dataset-oriented project exploring the digitization of identity. The Murdoch Dataset is released under the Unlicense and is freely available for use in AI training and experimentation.
        </p>
      </link-card>

      <link-card href="https://murdochstierlisteverything.blogspot.com/" target="_blank">
        <h3>Murdoch's Tier List Everything</h3>
        <p>
          An autological exploration of the cosmos through tier lists, where personal preference intersects with categorical obsession.
        </p>
      </link-card>
    </card-grid>
  </section>
</main>

  <mor-footer></mor-footer>

  <!-- Components -->
  <script type="module" src="/components/mor-header.js"></script>
  <script type="module" src="/components/mor-footer.js"></script>
  <script type="module" src="/components/mor-ui-cards.js"></script>
</body>
</html>
