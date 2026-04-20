/* ============================================================
   mor-ui-cards.js — UI web components
   CardGrid · CardItem · LinkCard · TagList · TagPill
   ============================================================ */


/* ============================================================
   HELPERS
   ============================================================ */

/**
 * Wraps all current child nodes inside a new element.
 * Avoids innerHTML re-serialisation, preserving event listeners.
 */
function wrapChildren(host, wrapperTag, className) {
  const wrapper = document.createElement(wrapperTag);
  if (className) wrapper.className = className;
  wrapper.append(...host.childNodes);
  host.appendChild(wrapper);
}

/**
 * Ensures an href is safe to use in an anchor.
 * Blocks javascript: and data: URLs.
 */
function sanitizeHref(href) {
  const safe = ['/', '#', 'https://', 'http://', 'mailto:'];
  return safe.some(prefix => href.startsWith(prefix)) ? href : '#';
}

/**
 * Returns a rel attribute value that always includes noopener/noreferrer
 * when target="_blank" is set.
 */
function buildRel(target, rel) {
  if (target !== '_blank') return rel || null;
  const parts = new Set((rel || '').split(/\s+/).filter(Boolean));
  parts.add('noopener');
  parts.add('noreferrer');
  return [...parts].join(' ');
}


/* ============================================================
   CARD-GRID
   Wraps children in a .grid div.
   Deferred so children are parsed before we wrap them.
   ============================================================ */

class CardGrid extends HTMLElement {
  connectedCallback() {
    if (this._upgraded) return;
    this._upgraded = true;

    // Defer to allow child elements to finish parsing
    Promise.resolve().then(() => {
      wrapChildren(this, 'div', 'grid');
    });
  }
}


/* ============================================================
   CARD-ITEM
   Wraps content in an <article class="card">.
   ============================================================ */

class CardItem extends HTMLElement {
  connectedCallback() {
    if (this._upgraded) return;
    this._upgraded = true;

    Promise.resolve().then(() => {
      wrapChildren(this, 'article', 'card');
    });
  }
}


/* ============================================================
   LINK-CARD
   Renders a card wrapped in a sanitised anchor.
   Attributes: href, target, rel
   ============================================================ */

class LinkCard extends HTMLElement {
  connectedCallback() {
    if (this._upgraded) return;
    this._upgraded = true;

    Promise.resolve().then(() => {
      const rawHref = this.getAttribute('href') || '#';
      const href    = sanitizeHref(rawHref);
      const target  = this.getAttribute('target') || null;
      const rel     = buildRel(target, this.getAttribute('rel'));

      const anchor = document.createElement('a');
      anchor.href = href;
      anchor.className = 'card-link';
      if (target) anchor.setAttribute('target', target);
      if (rel)    anchor.setAttribute('rel', rel);

      const article = document.createElement('article');
      article.className = 'card';
      article.append(...this.childNodes);

      anchor.appendChild(article);
      this.appendChild(anchor);
    });
  }
}


/* ============================================================
   TAG-LIST
   Wraps children in a .tag-list div.
   ============================================================ */

class TagList extends HTMLElement {
  connectedCallback() {
    if (this._upgraded) return;
    this._upgraded = true;

    Promise.resolve().then(() => {
      wrapChildren(this, 'div', 'tag-list');
    });
  }
}


/* ============================================================
   TAG-PILL
   Wraps text content in a .tag span.
   No children to wait for — can run immediately.
   ============================================================ */

class TagPill extends HTMLElement {
  connectedCallback() {
    if (this._upgraded) return;
    this._upgraded = true;

    const span = document.createElement('span');
    span.className = 'tag';
    span.append(...this.childNodes);
    this.appendChild(span);
  }
}


/* ============================================================
   REGISTRATION
   ============================================================ */

customElements.define('card-grid',  CardGrid);
customElements.define('card-item',  CardItem);
customElements.define('link-card',  LinkCard);
customElements.define('tag-list',   TagList);
customElements.define('tag-pill',   TagPill);