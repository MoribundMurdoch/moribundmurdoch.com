/**
 * nav-sidebar web component
 * Usage: <nav-sidebar brand="MySite" theme="dark" width="260px"></nav-sidebar>
 *
 * Attributes:
 *   brand       — Brand name text
 *   brand-icon  — Emoji or character for the logo box
 *   theme       — "dark" (default) or "light"
 *   width       — CSS width, e.g. "260px" or "18rem"
 *
 * Methods:
 *   setData(array)  — Load custom nav data (see format below)
 *
 * Events:
 *   nav-select  — Fired on item click, detail: { label, href }
 *
 * setData() format:
 *   [
 *     {
 *       section: "Wiki",       // null for no heading
 *       collapsible: true,
 *       items: [
 *         { icon: "🏠", label: "Home", href: "/", active: true }
 *       ]
 *     }
 *   ]
 */

(function () {

  const DEFAULT_DATA = [
    {
      section: null,
      items: [
        { icon: "📋", label: "Beginners Guide", href: "#" },
        { icon: "📝", label: "Posts",           href: "#" },
        { icon: "💡", label: "Contribute",      href: "#" },
      ]
    },
    {
      section: "Wiki",
      collapsible: true,
      items: [
        { icon: "🛡️", label: "Adblocking / Privacy",    href: "#" },
        { icon: "🤖", label: "Artificial Intelligence", href: "#" },
        { icon: "🎬", label: "Movies / TV / Anime",     href: "#", active: true },
        { icon: "🎵", label: "Music / Podcasts / Radio",href: "#" },
        { icon: "🎮", label: "Gaming / Emulation",      href: "#" },
        { icon: "📚", label: "Books / Comics / Manga",  href: "#" },
        { icon: "⬇️", label: "Downloading",             href: "#" },
        { icon: "🌊", label: "Torrenting",              href: "#" },
        { icon: "🎓", label: "Educational",             href: "#" },
        { icon: "📱", label: "Android / iOS",           href: "#" },
        { icon: "🐧", label: "Linux / macOS",           href: "#" },
        { icon: "🌐", label: "Non-English",             href: "#" },
        { icon: "📁", label: "Miscellaneous",           href: "#" },
      ]
    },
    {
      section: "Tools",
      collapsible: true,
      items: [
        { icon: "🖥️", label: "System Tools",      href: "#" },
        { icon: "🗂️", label: "File Tools",         href: "#" },
        { icon: "🌐", label: "Internet Tools",     href: "#" },
        { icon: "💬", label: "Social Media Tools", href: "#" },
        { icon: "📄", label: "Text Tools",         href: "#" },
        { icon: "🎮", label: "Gaming Tools",       href: "#" },
      ]
    }
  ];

  const STYLE = `
    :host {
      --sb-bg:        #13151f;
      --sb-surface:   #1a1d2e;
      --sb-border:    #252840;
      --sb-accent:    #5b6cf9;
      --sb-accent-bg: rgba(91,108,249,0.12);
      --sb-text:      #c8cbdd;
      --sb-muted:     #5c6080;
      --sb-hover:     rgba(255,255,255,0.05);
      --sb-width:     260px;
      display: flex;
      flex-direction: column;
      width: var(--sb-width);
      min-width: var(--sb-width);
      height: 100vh;
      position: sticky;
      top: 0;
      background: var(--sb-bg);
      border-right: 1px solid var(--sb-border);
      overflow: hidden;
      font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
      font-size: 14px;
      color: var(--sb-text);
      transition: width 0.25s ease, min-width 0.25s ease;
    }

    :host([theme="light"]) {
      --sb-bg:        #f8f9fc;
      --sb-surface:   #ffffff;
      --sb-border:    #e2e5f0;
      --sb-accent:    #4a5cf0;
      --sb-accent-bg: rgba(74,92,240,0.08);
      --sb-text:      #2d3155;
      --sb-muted:     #9096b8;
      --sb-hover:     rgba(0,0,0,0.04);
    }

    :host(.mini) {
      width: 52px;
      min-width: 52px;
    }
    :host(.mini) .sb-search-wrap,
    :host(.mini) .sb-section-label,
    :host(.mini) .sb-chevron,
    :host(.mini) .sb-item-label,
    :host(.mini) .sb-brand-name,
    :host(.mini) .sb-footer-text { display: none; }
    :host(.mini) .sb-item { justify-content: center; padding: 0.55rem; margin: 2px 0.35rem; }
    :host(.mini) .sb-item-icon { width: auto; font-size: 16px; }
    :host(.mini) .sb-header { justify-content: center; padding: 1rem 0.5rem; }
    :host(.mini) .sb-collapse-btn { display: none; }
    :host(.mini) .sb-items { max-height: 9999px !important; opacity: 1 !important; }

    .sb-header {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 1.1rem 1rem 1rem;
      border-bottom: 1px solid var(--sb-border);
      flex-shrink: 0;
    }
    .sb-brand-icon {
      width: 28px; height: 28px;
      background: var(--sb-accent);
      border-radius: 7px;
      display: flex; align-items: center; justify-content: center;
      font-size: 13px; color: #fff; font-weight: 700; flex-shrink: 0;
    }
    .sb-brand-name {
      font-size: 15px; font-weight: 700;
      color: #f0f2f8; letter-spacing: -0.02em;
      white-space: nowrap; overflow: hidden;
    }
    :host([theme="light"]) .sb-brand-name { color: #1a1d2e; }

    .sb-collapse-btn {
      margin-left: auto;
      background: none; border: none; cursor: pointer;
      color: var(--sb-muted); padding: 4px; border-radius: 5px;
      display: flex; align-items: center; justify-content: center;
      transition: color 0.15s, background 0.15s;
    }
    .sb-collapse-btn:hover { background: var(--sb-hover); color: var(--sb-text); }

    .sb-search-wrap {
      padding: 0.75rem 0.85rem;
      border-bottom: 1px solid var(--sb-border);
      flex-shrink: 0;
    }
    .sb-search-container { position: relative; }
    .sb-search-icon {
      position: absolute; left: 0.65rem; top: 50%;
      transform: translateY(-50%);
      color: var(--sb-muted); font-size: 13px; pointer-events: none;
    }
    .sb-search {
      width: 100%;
      background: var(--sb-surface);
      border: 1px solid var(--sb-border);
      border-radius: 8px;
      padding: 0.45rem 0.7rem 0.45rem 2rem;
      color: var(--sb-text); font-size: 13px; outline: none;
      transition: border-color 0.15s, box-shadow 0.15s;
    }
    .sb-search::placeholder { color: var(--sb-muted); }
    .sb-search:focus {
      border-color: var(--sb-accent);
      box-shadow: 0 0 0 3px rgba(91,108,249,0.15);
    }

    .sb-nav {
      overflow-y: auto; overflow-x: hidden;
      flex: 1; padding: 0.5rem 0 1rem;
      scrollbar-width: thin;
      scrollbar-color: var(--sb-border) transparent;
    }
    .sb-nav::-webkit-scrollbar { width: 4px; }
    .sb-nav::-webkit-scrollbar-track { background: transparent; }
    .sb-nav::-webkit-scrollbar-thumb { background: var(--sb-border); border-radius: 99px; }

    .sb-section-header {
      display: flex; align-items: center; justify-content: space-between;
      padding: 0.9rem 1rem 0.3rem;
      cursor: pointer; user-select: none;
    }
    .sb-section-label {
      font-size: 11px; font-weight: 700;
      letter-spacing: 0.08em; text-transform: uppercase;
      color: var(--sb-muted);
    }
    .sb-chevron {
      color: var(--sb-muted); font-size: 10px;
      transition: transform 0.2s ease;
    }
    .sb-group.collapsed .sb-chevron { transform: rotate(-90deg); }

    .sb-items {
      overflow: hidden;
      max-height: 9999px;
      transition: max-height 0.28s ease, opacity 0.2s ease;
      opacity: 1;
    }
    .sb-group.collapsed .sb-items { max-height: 0; opacity: 0; }

    .sb-item {
      display: flex; align-items: center; gap: 9px;
      padding: 0.42rem 1rem; margin: 1px 0.5rem;
      border-radius: 7px; cursor: pointer;
      text-decoration: none; color: var(--sb-text);
      transition: background 0.12s, color 0.12s;
      position: relative;
    }
    .sb-item:hover { background: var(--sb-hover); }
    .sb-item.active {
      background: var(--sb-accent-bg);
      color: var(--sb-accent);
    }
    .sb-item.active::before {
      content: '';
      position: absolute; left: -0.5rem; top: 50%;
      transform: translateY(-50%);
      width: 3px; height: 60%;
      background: var(--sb-accent);
      border-radius: 0 2px 2px 0;
    }
    .sb-item-icon { font-size: 14px; flex-shrink: 0; width: 18px; text-align: center; }
    .sb-item-label { font-size: 13px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
    .sb-item.hidden { display: none; }

    .sb-no-results {
      padding: 1.5rem 1rem; text-align: center;
      color: var(--sb-muted); font-size: 13px; display: none;
    }
    .sb-no-results.visible { display: block; }

    .sb-footer {
      border-top: 1px solid var(--sb-border);
      padding: 0.75rem 1rem; flex-shrink: 0;
    }
    .sb-footer-text { font-size: 11px; color: var(--sb-muted); }
  `;

  class NavSidebar extends HTMLElement {
    static get observedAttributes() {
      return ['brand', 'brand-icon', 'theme', 'width'];
    }

    constructor() {
      super();
      this.attachShadow({ mode: 'open' });
      this._data = DEFAULT_DATA;
      this._mini = false;
    }

    connectedCallback() {
      this._render();
      this._bindEvents();
    }

    attributeChangedCallback() {
      if (this.shadowRoot.innerHTML) {
        this._render();
        this._bindEvents();
      }
    }

    /** Replace nav data with a custom structure */
    setData(data) {
      this._data = data;
      this._render();
      this._bindEvents();
    }

    _render() {
      const brand = this.getAttribute('brand') || 'MySite';
      const icon  = this.getAttribute('brand-icon') || '◆';
      const width = this.getAttribute('width');
      if (width) this.style.setProperty('--sb-width', width);

      const groupsHTML = this._data.map((group, gi) => {
        const itemsHTML = group.items.map(item => `
          <a class="sb-item${item.active ? ' active' : ''}"
             href="${item.href || '#'}"
             data-label="${item.label.toLowerCase()}"
             data-gi="${gi}">
            <span class="sb-item-icon">${item.icon || '•'}</span>
            <span class="sb-item-label">${item.label}</span>
          </a>
        `).join('');

        if (!group.section) {
          return `<div class="sb-group" data-gi="${gi}">
            <div class="sb-items">${itemsHTML}</div>
          </div>`;
        }

        return `
          <div class="sb-group" data-gi="${gi}">
            <div class="sb-section-header" data-gi="${gi}">
              <span class="sb-section-label">${group.section}</span>
              ${group.collapsible ? '<span class="sb-chevron">▾</span>' : ''}
            </div>
            <div class="sb-items">${itemsHTML}</div>
          </div>
        `;
      }).join('');

      this.shadowRoot.innerHTML = `
        <style>${STYLE}</style>

        <div class="sb-header">
          <div class="sb-brand-icon">${icon}</div>
          <span class="sb-brand-name">${brand}</span>
          <button class="sb-collapse-btn" title="Collapse sidebar" aria-label="Collapse sidebar">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path d="M10 4L6 8l4 4" stroke="currentColor" stroke-width="1.5"
                    stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
        </div>

        <div class="sb-search-wrap">
          <div class="sb-search-container">
            <span class="sb-search-icon">⌕</span>
            <input class="sb-search" type="search" placeholder="Search…" aria-label="Search navigation" />
          </div>
        </div>

        <nav class="sb-nav" role="navigation" aria-label="Site navigation">
          ${groupsHTML}
          <div class="sb-no-results">No results found</div>
        </nav>

        <div class="sb-footer">
          <span class="sb-footer-text">${brand}</span>
        </div>
      `;
    }

    _bindEvents() {
      const root = this.shadowRoot;

      // Collapsible section headers
      root.querySelectorAll('.sb-section-header[data-gi]').forEach(header => {
        header.addEventListener('click', () => {
          root.querySelector(`.sb-group[data-gi="${header.dataset.gi}"]`)
              .classList.toggle('collapsed');
        });
      });

      // Nav item clicks
      root.querySelectorAll('.sb-item').forEach(item => {
        item.addEventListener('click', e => {
          if (item.getAttribute('href') === '#') e.preventDefault();
          root.querySelectorAll('.sb-item').forEach(i => i.classList.remove('active'));
          item.classList.add('active');
          this.dispatchEvent(new CustomEvent('nav-select', {
            detail: {
              label: item.querySelector('.sb-item-label').textContent,
              href:  item.getAttribute('href')
            },
            bubbles: true
          }));
        });
      });

      // Live search filter
      const searchInput = root.querySelector('.sb-search');
      const noResults   = root.querySelector('.sb-no-results');
      searchInput.addEventListener('input', () => {
        const q = searchInput.value.trim().toLowerCase();
        let anyVisible = false;

        root.querySelectorAll('.sb-item').forEach(item => {
          const match = !q || item.dataset.label.includes(q);
          item.classList.toggle('hidden', !match);
          if (match) anyVisible = true;
        });

        root.querySelectorAll('.sb-group').forEach(group => {
          const visible = group.querySelectorAll('.sb-item:not(.hidden)').length;
          group.style.display = visible ? '' : 'none';
          if (q) group.classList.remove('collapsed');
        });

        noResults.classList.toggle('visible', !anyVisible);
      });

      // Collapse to icon rail
      root.querySelector('.sb-collapse-btn').addEventListener('click', () => {
        this._mini = !this._mini;
        this.classList.toggle('mini', this._mini);
      });
    }
  }

  customElements.define('nav-sidebar', NavSidebar);

})();