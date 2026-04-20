class MorHeader extends HTMLElement {
  connectedCallback() {
    // prevent re-render if already initialized
    if (this.dataset.initialized === "true") return;
    this.dataset.initialized = "true";

    const links = [
      { href: "/", label: "Home" },
      { href: "/Murdoverse.php", label: "Murdoverse" },
      { href: "/Lexicosphere.php", label: "Lexicosphere" },
      { href: "/projects.php", label: "Projects" },
      { href: "/wiki/", label: "Wiki" },
         { href: "/Deweyverse/", label: "The Deweyverse" },
      {
        href: "https://moribundmurdoch.bearblog.dev/",
        label: "Meta",
        external: true
      },
      {
        href: "https://mammonistmurdo.neocities.org/",
        label: "Money-making",
        external: true
      },
      {
        href: "https://sites.google.com/view/moribundmurdoch/about-mormurdoch",
        label: "About",
        external: true
      }
    ];

    const currentPath = window.location.pathname;

    const navLinks = links.map(link => {
      const isActive =
        !link.external && currentPath === link.href;

      return `
        <a
          class="pill ${isActive ? "active" : ""}"
          href="${link.href}"
          ${link.external ? 'target="_blank" rel="noopener noreferrer"' : ""}
          ${isActive ? 'aria-current="page"' : ""}
        >
          ${link.label}
        </a>
      `;
    }).join("");

    this.innerHTML = `
      <header class="topbar">
        <a class="brand" href="/" aria-label="Home">
          <img
            src="/images/MoribundMurdochLogo.jpg"
            alt="MoribundMurdoch logo"
            class="brand-logo"
          />
        </a>

        <nav class="nav" aria-label="Primary navigation">
          ${navLinks}
        </nav>
      </header>
    `;
  }
}

if (!customElements.get("mor-header")) {
  customElements.define("mor-header", MorHeader);
}