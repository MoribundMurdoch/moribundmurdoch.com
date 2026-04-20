<?php
$pageTitle = 'MorDeweyverse';
$pageDescription = 'A curated map of content of & by the Moribund Institute, organized via the Dewey Decimal System.';

$sections = [
    [
        'title' => '000 — Generalities',
        'anchor' => '000',
        'intro' => 'General reference, systems, information, media, and broad intellectual infrastructure.',
        'items' => [
            [
                'name' => '000 Placeholder',
                'url' => '#',
                'links' => [
                    ['label' => 'Coming Soon', 'url' => '#'],
                ],
                'description' => 'A placeholder for encyclopedic, general-reference, informational, and system-level material.'
            ],
        ],
    ],
    [
        'title' => '100 — Psychology & Philosophy',
        'anchor' => '100',
        'intro' => 'Thought, mind, introspection, metaphysics, ethics, and philosophical inquiry.',
        'items' => [
            [
                'name' => '100 Placeholder',
                'url' => '#',
                'links' => [
                    ['label' => 'Coming Soon', 'url' => '#'],
                ],
                'description' => 'A placeholder for philosophical writing, psychological reflection, theories of mind, and conceptual analysis.'
            ],
        ],
    ],
    [
        'title' => '200 — Religion',
        'anchor' => '200',
        'intro' => 'Religion, theology, spiritual traditions, sacred texts, and belief systems.',
        'items' => [
            [
                'name' => '200 Placeholder',
                'url' => '#',
                'links' => [
                    ['label' => 'Coming Soon', 'url' => '#'],
                ],
                'description' => 'A placeholder for religious studies, theological material, spiritual traditions, and related commentary.'
            ],
        ],
    ],
    [
        'title' => '300 — Social Sciences',
        'anchor' => '300',
        'intro' => 'Society, politics, law, economics, education, and the organization of human life.',
        'items' => [
            [
                'name' => '300 Placeholder',
                'url' => '#',
                'links' => [
                    ['label' => 'Coming Soon', 'url' => '#'],
                ],
                'description' => 'A placeholder for politics, culture, economics, law, education, and broader social analysis.'
            ],
        ],
    ],
    [
        'title' => '400 — Language',
        'anchor' => '400',
        'intro' => 'Language, linguistics, lexicography, word creation, translation, and expression.',
        'items' => [
            [
                'name' => '400 Placeholder',
                'url' => '#',
                'links' => [
                    ['label' => 'Coming Soon', 'url' => '#'],
                ],
                'description' => 'A placeholder for dictionaries, etymology, neologisms, lexicography, and other language-centered material.'
            ],
        ],
    ],
    [
        'title' => '500 — Pure Science',
        'anchor' => '500',
        'intro' => 'Mathematics, astronomy, physics, chemistry, earth science, and biology.',
        'items' => [
            [
                'name' => '500 Placeholder',
                'url' => '#',
                'links' => [
                    ['label' => 'Coming Soon', 'url' => '#'],
                ],
                'description' => 'A placeholder for scientific concepts, explanatory material, natural philosophy, and foundational science.'
            ],
        ],
    ],
    [
        'title' => '600 — Applied Sciences',
        'anchor' => '600',
        'intro' => 'Technology, medicine, engineering, agriculture, and practical systems of making and doing.',
        'items' => [
            [
                'name' => '600 Placeholder',
                'url' => '#',
                'links' => [
                    ['label' => 'Coming Soon', 'url' => '#'],
                ],
                'description' => 'A placeholder for medicine, engineering, practical tools, technical systems, and applied knowledge.'
            ],
        ],
    ],
    [
        'title' => '700 — Arts & Recreation',
        'anchor' => '700',
        'intro' => 'Art, music, performance, design, visual culture, entertainment, hobbies, and play.',
        'items' => [
            [
                'name' => '700 Placeholder',
                'url' => '#',
                'links' => [
                    ['label' => 'Coming Soon', 'url' => '#'],
                ],
                'description' => 'A placeholder for visual art, music, aesthetic projects, recreation, performance, and creative media.'
            ],
        ],
    ],
    [
        'title' => '800 — Literature',
        'anchor' => '800',
        'intro' => 'Poetry, fiction, essays, rhetoric, drama, literary commentary, and the written imagination.',
        'items' => [
            [
                'name' => '800 Placeholder',
                'url' => '#',
                'links' => [
                    ['label' => 'Coming Soon', 'url' => '#'],
                ],
                'description' => 'A placeholder for literature, literary analysis, storytelling, essays, and other writing-centered projects.'
            ],
        ],
    ],
    [
        'title' => '900 — History & Geography',
        'anchor' => '900',
        'intro' => 'History, geography, biography, travel, place, memory, and civilizational context.',
        'items' => [
            [
                'name' => '900 Placeholder',
                'url' => '#',
                'links' => [
                    ['label' => 'Coming Soon', 'url' => '#'],
                ],
                'description' => 'A placeholder for history, geography, place-based work, timelines, biography, and archival context.'
            ],
        ],
    ],
];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo htmlspecialchars($pageTitle); ?> — MoribundMurdoch</title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>" />

  <link rel="stylesheet" href="/css/looks.css" />
  <link rel="stylesheet" href="/css/components.css" />
  <link rel="stylesheet" href="/css/header.css" />
  <link rel="stylesheet" href="/css/footer.css" />

  <style>
    .deweyverse-hero {
      padding-top: 1rem;
    }

    .deweyverse-hero p {
      max-width: 58rem;
    }

    .deweyverse-nav {
      display: flex;
      flex-wrap: wrap;
      gap: 0.6rem;
      margin-top: 1.25rem;
    }

    .deweyverse-item-links {
      display: flex;
      flex-wrap: wrap;
      gap: 0.45rem;
      margin-top: 0.9rem;
    }

    .deweyverse-item-links a {
      display: inline-block;
      padding: 0.34rem 0.65rem;
      border: 1px solid var(--line-strong);
      border-radius: 999px;
      background: var(--accent-bg);
      color: var(--accent-soft);
      font-size: 0.82rem;
      line-height: 1.2;
      text-decoration: none;
      transition:
        background var(--dur-mid) var(--ease-out),
        border-color var(--dur-mid) var(--ease-out),
        color var(--dur-mid) var(--ease-out),
        transform var(--dur-fast) var(--ease-out);
    }

    .deweyverse-item-links a:hover,
    .deweyverse-item-links a:focus-visible {
      background: var(--accent-bg2);
      border-color: var(--accent);
      color: var(--text);
      transform: translateY(-1px);
      text-shadow: none;
      outline: none;
    }

    .deweyverse-note {
      margin-top: 2rem;
      padding: 1.5rem;
      border: 1px solid var(--line);
      border-left: 4px solid var(--accent);
      border-radius: var(--radius);
      background:
        linear-gradient(180deg, rgba(184,156,255,.06), rgba(255,255,255,.015)),
        var(--card-soft);
      box-shadow: var(--shadow-sm);
    }

    .deweyverse-note p:last-child {
      margin-bottom: 0;
    }
  </style>
</head>
<body>
  <mor-header></mor-header>

  <main class="container">
    <section class="hero deweyverse-hero">
      <div class="label">Knowledge • Classification • Browsing</div>
      <h1><?php echo htmlspecialchars($pageTitle); ?></h1>
      <p>
        The <strong>Deweyverse</strong> is a curated map of my content and the content I like, organized through the broad categories of the Dewey Decimal System. It is a way of browsing subjects not merely as isolated posts or projects, but as parts of a larger knowledge-world.
      </p>
      <p>
        Some sections will eventually contain my own work. Others may include references, inspirations, or projects I find useful, interesting, or worth preserving. The goal is not strict library science purity, but a readable and expandable structure for organizing a wide range of intellectual and creative material.
      </p>

      <nav class="deweyverse-nav" aria-label="Section navigation">
        <a class="pill" href="#000">000</a>
        <a class="pill" href="#100">100</a>
        <a class="pill" href="#200">200</a>
        <a class="pill" href="#300">300</a>
        <a class="pill" href="#400">400</a>
        <a class="pill" href="#500">500</a>
        <a class="pill" href="#600">600</a>
        <a class="pill" href="#700">700</a>
        <a class="pill" href="#800">800</a>
        <a class="pill" href="#900">900</a>
      </nav>
    </section>

    <?php foreach ($sections as $section): ?>
      <section class="section" id="<?php echo htmlspecialchars($section['anchor']); ?>">
        <div class="section-header">
          <div class="label">Dewey Category</div>
          <h2><?php echo htmlspecialchars($section['title']); ?></h2>
          <p><?php echo htmlspecialchars($section['intro']); ?></p>
        </div>

        <card-grid>
          <?php foreach ($section['items'] as $item): ?>
            <card-item>
              <h3>
                <?php if (!empty($item['url']) && $item['url'] !== '#'): ?>
                  <a href="<?php echo htmlspecialchars($item['url']); ?>" target="_blank" rel="noopener noreferrer">
                    <?php echo htmlspecialchars($item['name']); ?>
                  </a>
                <?php else: ?>
                  <?php echo htmlspecialchars($item['name']); ?>
                <?php endif; ?>
              </h3>

              <p><?php echo htmlspecialchars($item['description']); ?></p>

              <?php if (!empty($item['links'])): ?>
                <div class="deweyverse-item-links" aria-label="Links for <?php echo htmlspecialchars($item['name']); ?>">
                  <?php foreach ($item['links'] as $link): ?>
                    <a href="<?php echo htmlspecialchars($link['url']); ?>" target="_blank" rel="noopener noreferrer">
                      <?php echo htmlspecialchars($link['label']); ?>
                    </a>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
            </card-item>
          <?php endforeach; ?>
        </card-grid>
      </section>
    <?php endforeach; ?>

    <section class="deweyverse-note" aria-labelledby="deweyverse-note-heading">
      <h2 id="deweyverse-note-heading">Why the Deweyverse Exists</h2>
      <p>
        A website can be more than a pile of pages. The Deweyverse is an attempt to organize content through a broad civilizational map of knowledge, using the Dewey Decimal System as a guiding structure rather than merely as a library convention.
      </p>
      <p>
        This makes it easier to browse by subject, discover unexpected connections, and gradually expand an ecosystem of essays, links, projects, references, and archives. Over time, each section can grow into its own little province within a larger intellectual world.
      </p>
    </section>
  </main>

  <mor-footer></mor-footer>

  <script type="module" src="/components/mor-header.js"></script>
  <script type="module" src="/components/mor-footer.js"></script>
  <script type="module" src="/components/mor-ui-cards.js"></script>
</body>
</html>
