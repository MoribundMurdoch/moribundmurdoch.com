<?php
$pageTitle = 'Lexicosphere';
$pageDescription = 'A curated ecosystem of dictionaries, tools, and communities devoted to lexicography, etymology, and collaborative wordcraft.';

$sections = [
    [
        'title' => 'Core Lexicography Projects',
        'anchor' => 'core',
        'intro' => 'Reference engines, etymological tools, and foundational dictionary projects.',
        'items' => [
            [
                'name' => 'Mor Dictionary',
                'url' => 'https://mordictionary.org/',
                'links' => [
                    ['label' => 'Website', 'url' => 'https://mordictionary.org/'],
                    ['label' => 'Twitch', 'url' => 'https://www.twitch.tv/mordictionary'],
                    ['label' => 'YouTube', 'url' => 'https://www.youtube.com/@MorDictionaryVODS'],
                    ['label' => 'Blogspot', 'url' => 'https://mordictionary.blogspot.com/'],
                    ['label' => 'Neocities', 'url' => 'https://mordictionary.neocities.org/'],
                    ['label' => 'GitHub', 'url' => 'https://github.com/MorDictionary'],
                ],
                'description' => 'A human-centered dictionary project focused on clarity, structure, and curated definitions.'
            ],
            [
                'name' => 'MorWordParts',
                'url' => '#',
                'links' => [
                    ['label' => 'Project Page', 'url' => '#'],
                ],
                'description' => 'A project centered on prefixes, suffixes, roots, and the building blocks of words.'
            ],
            [
                'name' => 'Sloptionary',
                'url' => 'https://sloptionary.org/',
                'links' => [
                    ['label' => 'Website', 'url' => 'https://sloptionary.org/'],
                ],
                'description' => 'An experimental lexicographic project that can be contrasted with more human-centered dictionary approaches.'
            ],
            [
                'name' => 'Etymonline',
                'url' => 'https://www.etymonline.com/',
                'links' => [
                    ['label' => 'Website', 'url' => 'https://www.etymonline.com/'],
                ],
                'description' => 'A widely used etymological reference for tracing the historical development of words.'
            ],
        ],
    ],
    [
        'title' => 'Collaborative Lexicography',
        'anchor' => 'collaborative',
        'intro' => 'Forum-based or community-driven spaces where particular dimensions of lexicography are explored collectively.',
        'items' => [
            [
                'name' => 'Lexical Faces',
                'url' => 'https://www.reddit.com/r/LexicalFaces/',
                'links' => [
                    ['label' => 'Reddit', 'url' => 'https://www.reddit.com/r/LexicalFaces/'],
                ],
                'description' => 'A community where faces are paired with dictionary entries that fit their vibe in a particular photo.'
            ],
            [
                'name' => 'Lexical Soundtrack',
                'url' => 'https://www.reddit.com/r/LexicalSoundtrack/',
                'links' => [
                    ['label' => 'Reddit', 'url' => 'https://www.reddit.com/r/LexicalSoundtrack/'],
                ],
                'description' => 'Pairing songs with dictionary entries. Words with vibes, definitions with soundtracks.'
            ],
            [
    'name' => 'Hackterms',
    'url' => 'https://www.hackterms.com/',
    'links' => [
        ['label' => 'Website', 'url' => 'https://www.hackterms.com/'],
    ],
    'description' => 'A crowdsourced dictionary of coding terms'
],
            [
                'name' => 'Sentence Miners',
                'url' => 'https://www.reddit.com/r/SentenceMiners/',
                'links' => [
                    ['label' => 'Reddit', 'url' => 'https://www.reddit.com/r/SentenceMiners/'],
                ],
                'description' => 'A community for learning vocabulary through memorable example sentences and showing how words actually live in context.'
            ],
            [
                'name' => 'Neologism Help',
                'url' => 'https://www.reddit.com/r/NeologismsHelp/',
                'links' => [
                    ['label' => 'Reddit', 'url' => 'https://www.reddit.com/r/NeologismsHelp/'],
                ],
                'description' => 'A subreddit where people can collaborate on coined words and community-built neologisms.'
            ],
            [
                'name' => 'Lexicon Archive',
                'url' => 'https://www.reddit.com/r/LexiconArchive/',
                'links' => [
                    ['label' => 'Reddit', 'url' => 'https://www.reddit.com/r/LexiconArchive/'],
                ],
                'description' => 'A communal space for preserving, cataloging, and refining lexical material across contributors.'
            ],
            [
                'name' => 'Urban Dictionary',
                'url' => 'https://www.urbandictionary.com/',
                'links' => [
                    ['label' => 'Website', 'url' => 'https://www.urbandictionary.com/'],
                ],
                'description' => 'A crowdsourced English-language online dictionary for slang words and phrases.'
            ],
        ],
    ],
    [
        'title' => 'Lexical Layers (Conceptual Model)',
        'anchor' => 'model',
        'intro' => 'Words are not singular objects but multi-layered entities that can be approached through form, meaning, history, usage, imagery, and interpretation.',
        'items' => [
            [
                'name' => 'Form & Identity',
                'url' => '#',
                'links' => [
                    ['label' => 'MorWordParts', 'url' => '#'],
                    ['label' => 'Mor Dictionary', 'url' => 'https://mordictionary.org/'],
                ],
                'description' => 'Pronunciation, part of speech, variants, and morphology establish the formal identity of a word before deeper interpretation begins.'
            ],
            [
                'name' => 'Meaning',
                'url' => '#',
                'links' => [
                    ['label' => 'Mor Dictionary', 'url' => 'https://mordictionary.org/'],
                    ['label' => 'Urban Dictionary', 'url' => 'https://www.urbandictionary.com/'],
                ],
                'description' => 'Definitions state what a word means, but different lexicographic projects can frame meaning with different levels of rigor, tone, and formality.'
            ],
            [
                'name' => 'Origin',
                'url' => '#',
                'links' => [
                    ['label' => 'Etymonline', 'url' => 'https://www.etymonline.com/'],
                    ['label' => 'MorWordParts', 'url' => '#'],
                ],
                'description' => 'Etymology and word parts reveal where a term comes from, how it developed, and what older forms still echo inside it.'
            ],
            [
                'name' => 'Usage',
                'url' => '#',
                'links' => [
                    ['label' => 'Sentence Miners', 'url' => 'https://www.reddit.com/r/SentenceMiners/'],
                    ['label' => 'Mor Dictionary', 'url' => 'https://mordictionary.org/'],
                ],
                'description' => 'Example sentences, collocations, and contextual usage show how words actually live in speech, writing, and memory.'
            ],
            [
                'name' => 'Association',
                'url' => '#',
                'links' => [
                    ['label' => 'Lexical Soundtrack', 'url' => 'https://www.reddit.com/r/LexicalSoundtrack/'],
                    ['label' => 'Lexical Faces', 'url' => 'https://www.reddit.com/r/LexicalFaces/'],
                ],
                'description' => 'Words also carry tone, emotional color, imagery, and aesthetic resonance that go beyond a strict dictionary definition.'
            ],
            [
                'name' => 'Interpretation',
                'url' => '#',
                'links' => [
                    ['label' => 'Mor Dictionary YouTube', 'url' => 'https://www.youtube.com/@MorDictionaryVODS'],
                    ['label' => 'Mor Dictionary Twitch', 'url' => 'https://www.twitch.tv/mordictionary'],
                    ['label' => 'Lexical Soundtrack', 'url' => 'https://www.reddit.com/r/LexicalSoundtrack/'],
                ],
                'description' => 'Walkthroughs, commentary, and reflective explanation allow words to be explored as interpretive objects rather than static entries.'
            ],
            [
                'name' => 'Creation',
                'url' => '#',
                'links' => [
                    ['label' => 'Neologism Help', 'url' => 'https://www.reddit.com/r/NeologismsHelp/'],
                    ['label' => 'Sloptionary', 'url' => 'https://sloptionary.org/'],
                    ['label' => 'MorWordParts', 'url' => '#'],
                ],
                'description' => 'Lexicography is not only about documenting old words. It also includes inventing, testing, and socially negotiating new ones.'
            ],
            [
                'name' => 'Preservation',
                'url' => '#',
                'links' => [
                    ['label' => 'Lexicon Archive', 'url' => 'https://www.reddit.com/r/LexiconArchive/'],
                    ['label' => 'Mor Dictionary Blogspot', 'url' => 'https://mordictionary.blogspot.com/'],
                ],
                'description' => 'Words, drafts, examples, and interpretations benefit from preservation, indexing, and archival care rather than being left to disappear into platform churn.'
            ],
        ],
    ],
    [
        'title' => 'Why These Matter',
        'anchor' => 'layers',
        'intro' => 'A dictionary is not one thing. It is a convergence of several interpretive layers.',
        'items' => [
            [
                'name' => 'Definition',
                'url' => '#',
                'links' => [
                    ['label' => 'Mor Dictionary', 'url' => 'https://mordictionary.org/'],
                    ['label' => 'Urban Dictionary', 'url' => 'https://www.urbandictionary.com/'],
                ],
                'description' => 'Projects like Mor Dictionary focus on the explicit statement of meaning, while other dictionaries show how definitions can vary across tone and purpose.'
            ],
            [
                'name' => 'Etymology',
                'url' => '#',
                'links' => [
                    ['label' => 'Etymonline', 'url' => 'https://www.etymonline.com/'],
                    ['label' => 'MorWordParts', 'url' => '#'],
                ],
                'description' => 'Resources like Etymonline trace where words come from and how they change over time, while root-based projects help expose their internal structure.'
            ],
            [
                'name' => 'Usage',
                'url' => '#',
                'links' => [
                    ['label' => 'Sentence Miners', 'url' => 'https://www.reddit.com/r/SentenceMiners/'],
                    ['label' => 'Mor Dictionary', 'url' => 'https://mordictionary.org/'],
                ],
                'description' => 'Projects like Sentence Miners help show how words actually live in sentences and how meaning sharpens through context.'
            ],
            [
                'name' => 'Connotation',
                'url' => '#',
                'links' => [
                    ['label' => 'Lexical Soundtrack', 'url' => 'https://www.reddit.com/r/LexicalSoundtrack/'],
                    ['label' => 'Lexical Faces', 'url' => 'https://www.reddit.com/r/LexicalFaces/'],
                ],
                'description' => 'Projects like Lexical Soundtrack highlight tone, emotional resonance, and associative meaning, while visual communities explore comparable dimensions through imagery.'
            ],
            [
                'name' => 'Visualization',
                'url' => '#',
                'links' => [
                    ['label' => 'Lexical Faces', 'url' => 'https://www.reddit.com/r/LexicalFaces/'],
                    ['label' => 'Mor Dictionary YouTube', 'url' => 'https://www.youtube.com/@MorDictionaryVODS'],
                ],
                'description' => 'Projects like Lexical Faces investigate how meaning can be pictured or embodied, and visual walkthrough formats can reinforce that process.'
            ],
            [
                'name' => 'Form & Identity',
                'url' => '#',
                'links' => [
                    ['label' => 'MorWordParts', 'url' => '#'],
                    ['label' => 'Mor Dictionary', 'url' => 'https://mordictionary.org/'],
                ],
                'description' => 'Pronunciation, part of speech, and morphological composition help define what a word is before one even reaches its interpretation.'
            ],
            [
                'name' => 'Lexical Network',
                'url' => '#',
                'links' => [
                    ['label' => 'Mor Dictionary', 'url' => 'https://mordictionary.org/'],
                    ['label' => 'Lexicon Archive', 'url' => 'https://www.reddit.com/r/LexiconArchive/'],
                ],
                'description' => 'Words exist in relation to other words through synonymy, antonymy, family resemblance, thematic grouping, and archival clustering.'
            ],
            [
                'name' => 'Interpretation',
                'url' => '#',
                'links' => [
                    ['label' => 'Mor Dictionary YouTube', 'url' => 'https://www.youtube.com/@MorDictionaryVODS'],
                    ['label' => 'Mor Dictionary Twitch', 'url' => 'https://www.twitch.tv/mordictionary'],
                    ['label' => 'Lexical Soundtrack', 'url' => 'https://www.reddit.com/r/LexicalSoundtrack/'],
                ],
                'description' => 'Walkthrough videos, commentary, and live discussion explore how a word can be explained, staged, and interpreted beyond the surface of a single entry.'
            ],
            [
                'name' => 'Word Creation',
                'url' => '#',
                'links' => [
                    ['label' => 'Neologism Help', 'url' => 'https://www.reddit.com/r/NeologismsHelp/'],
                    ['label' => 'Sloptionary', 'url' => 'https://sloptionary.org/'],
                ],
                'description' => 'Lexicography also includes the creation and testing of new words, not merely the documentation of already established ones.'
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
    .lexicosphere-hero {
      padding-top: 1rem;
    }

    .lexicosphere-hero p {
      max-width: 58rem;
    }

    .lexicosphere-nav {
      display: flex;
      flex-wrap: wrap;
      gap: 0.6rem;
      margin-top: 1.25rem;
    }

    .lexicosphere-item-links {
      display: flex;
      flex-wrap: wrap;
      gap: 0.45rem;
      margin-top: 0.9rem;
    }

    .lexicosphere-item-links a {
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

    .lexicosphere-item-links a:hover,
    .lexicosphere-item-links a:focus-visible {
      background: var(--accent-bg2);
      border-color: var(--accent);
      color: var(--text);
      transform: translateY(-1px);
      text-shadow: none;
      outline: none;
    }

    .lexicosphere-note {
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

    .lexicosphere-note p:last-child {
      margin-bottom: 0;
    }
  </style>
</head>
<body>
  <mor-header></mor-header>

  <main class="container">
    <section class="hero lexicosphere-hero">
      <div class="label">Lexicography • Etymology • Wordcraft</div>
      <h1><?php echo htmlspecialchars($pageTitle); ?></h1>
      <p>
        The <strong>Lexicosphere</strong> is a curated ecosystem of lexicographic projects, reference tools, and collaborative word communities. Some of these projects define words directly. Others explore etymology, usage, connotation, imagery, interpretation, and word creation. Together, they form a broader world of dictionary writing.
      </p>
      <p>
        This page is a selective map of projects I like, use, or find philosophically interesting. Some are formal references. Some are social spaces where people help one another with particular aspects of dictionary writing. Taken together, they suggest that lexicography is not merely a finished product, but a layered practice.
      </p>

      <nav class="lexicosphere-nav" aria-label="Section navigation">
        <a class="pill" href="#core">Core Projects</a>
        <a class="pill" href="#collaborative">Collaborative</a>
        <a class="pill" href="#model">Conceptual Model</a>
        <a class="pill" href="#layers">Lexical Layers</a>
      </nav>
    </section>

    <?php foreach ($sections as $section): ?>
      <section class="section" id="<?php echo htmlspecialchars($section['anchor']); ?>">
        <div class="section-header">
          <div class="label">Section</div>
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
                <div class="lexicosphere-item-links" aria-label="Links for <?php echo htmlspecialchars($item['name']); ?>">
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

    <section class="lexicosphere-note" aria-labelledby="philosophy-heading">
      <h2 id="philosophy-heading">Why the Lexicosphere Exists</h2>
      <p>
        Traditional dictionaries often present the finished product of lexicography. The Lexicosphere is interested in the wider process behind that product: defining, tracing, testing, illustrating, interpreting, and socially negotiating meaning.
      </p>
      <p>
        Some projects are reference works. Some are experimental. Some are communities where people help each other build better entries, sharper example sentences, richer associations, stronger visualizations, or clearer etymological pathways. Taken together, they show that lexicography is not merely a product on a shelf. It is a living practice.
      </p>
    </section>
  </main>

  <mor-footer></mor-footer>

  <script type="module" src="/components/mor-header.js"></script>
  <script type="module" src="/components/mor-footer.js"></script>
  <script type="module" src="/components/mor-ui-cards.js"></script>
</body>
</html>
