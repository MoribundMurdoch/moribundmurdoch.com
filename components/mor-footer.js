class MorFooter extends HTMLElement {
  connectedCallback() {
    if (this.dataset.initialized === "true") return;
    this.dataset.initialized = "true";

    const audioSrc = this.getAttribute("audio-src") || "";
    const trackLabel =
      this.getAttribute("track-label") || "Now Playing: MoribundMurdoch Theme";
    const trackHref = this.getAttribute("track-href") || "";
    const hasAudio = audioSrc.trim() !== "";

    const columns = [
      {
        title: "Projects",
        links: [
          { href: "/Murdoverse.php", label: "Murdoverse" },
          { href: "/Lexicosphere.php", label: "Lexicosphere" },
          { href: "/projects.php", label: "Projects" },
          { href: "/wiki/", label: "Wiki" }
        ]
      },
      {
        title: "Elsewhere",
        links: [
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
        ]
      }
    ];

    const columnHtml = columns
      .map(
        (column) => `
          <section class="mor-footer__column">
            <h2 class="mor-footer__heading">${column.title}</h2>
            <div class="mor-footer__links">
              ${column.links
                .map(
                  (link) => `
                    <a
                      class="mor-footer__link"
                      href="${link.href}"
                      ${link.external ? 'target="_blank" rel="noopener noreferrer"' : ""}
                    >
                      ${link.label}
                    </a>
                  `
                )
                .join("")}
            </div>
          </section>
        `
      )
      .join("");

    const musicHtml = hasAudio
      ? `
        <div class="mor-footer__music">
          <button
            type="button"
            class="mor-footer__audio-button"
            data-action="play"
            aria-label="Play footer theme"
          >
            Play
          </button>
          <button
            type="button"
            class="mor-footer__audio-button"
            data-action="pause"
            aria-label="Pause footer theme"
          >
            Pause
          </button>
          ${
            trackHref
              ? `<a class="mor-footer__track" href="${trackHref}" target="_blank" rel="noopener noreferrer">${trackLabel}</a>`
              : `<span class="mor-footer__track">${trackLabel}</span>`
          }
          <audio preload="none" src="${audioSrc}"></audio>
        </div>
      `
      : `
        <div class="mor-footer__music">
          ${
            trackHref
              ? `<a class="mor-footer__track" href="${trackHref}" target="_blank" rel="noopener noreferrer">${trackLabel}</a>`
              : `<span class="mor-footer__track">${trackLabel}</span>`
          }
        </div>
      `;

    this.innerHTML = `
      <footer class="mor-footer">
        <div class="mor-footer__inner">
          <div class="mor-footer__top">
            <div class="mor-footer__columns">
              ${columnHtml}
            </div>

            <aside class="mor-footer__side">
              <p class="mor-footer__copyright">
                © ${new Date().getFullYear()} MoribundMurdoch
              </p>

              <div class="mor-footer__meta">
                <p>
                  A hub for words, worlds, and wandering projects.
                </p>
                <p class="mor-footer__powered">
                  Built with chalkboard gloom, lexical obsession, and too many tabs.
                </p>
              </div>
            </aside>
          </div>

          <div class="mor-footer__utility">
            <button type="button" class="mor-footer__back-to-top">
              Back to top
            </button>
          </div>

          <hr class="mor-footer__divider" />

          ${musicHtml}
        </div>
      </footer>
    `;

    const backToTopButton = this.querySelector(".mor-footer__back-to-top");
    backToTopButton?.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });

    if (hasAudio) {
      const audio = this.querySelector("audio");
      const playButton = this.querySelector('[data-action="play"]');
      const pauseButton = this.querySelector('[data-action="pause"]');

      playButton?.addEventListener("click", async () => {
        try {
          await audio.play();
        } catch (error) {
          console.error("Audio playback failed:", error);
        }
      });

      pauseButton?.addEventListener("click", () => {
        audio.pause();
      });
    }
  }
}

if (!customElements.get("mor-footer")) {
  customElements.define("mor-footer", MorFooter);
}