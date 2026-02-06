function changerMode() {
    const body = document.body; // Récupère l'élément <body> de la page

    const bouton = document.getElementById("modeButton"); // Récupère le bouton avec l'ID "modeButton"

    body.classList.toggle("dark-mode"); // Ajoute la classe "dark-mode" si elle n'existe pas, ou la supprime si elle existe déjà

    if (body.classList.contains("dark-mode")) {
        // Si le mode sombre est activé

        bouton.innerText = "☀️"; //  // Change le texte du bouton en "Mode jour" avec une icône de soleil
    } // Si le mode sombre est désactivé
    else {
        bouton.innerText = "🌙"; // Change le texte du bouton en "Mode nuit" avec une icône de lune
    }
}

//page A propos

document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");
    const speed = 25;

    const startCount = (el) => {
        const target = +el.getAttribute("data-target");
        const update = () => {
            const current = +el.innerText;
            const inc = Math.ceil(target / 80);
            if (current < target) {
                el.innerText = current + inc;
                requestAnimationFrame(update);
            } else {
                el.innerText = target + (el.dataset.suffix || "");
            }
        };
        update();
    };

    const io = new IntersectionObserver(
        (entries) => {
            entries.forEach((e) => {
                if (e.isIntersecting) {
                    startCount(e.target);
                    io.unobserve(e.target);
                }
            });
        },
        { threshold: 0.5 },
    );

    counters.forEach((c) => io.observe(c));
});

//page Articles - Filtrage et recherche page articles.html

document.addEventListener("DOMContentLoaded", () => {
    const filterBtns = document.querySelectorAll(".filter-btn");
    const cards = document.querySelectorAll(".article-card");
    const searchInput = document.getElementById("search-articles");
    const articlesSection = document.getElementById("articles-section");
    let hasScrolledOnce = false; // عشان ما يكرر السْكرول كثير

    function applyFilters(options = {}) {
        //  const { scroll = false } = options;

        const activeFilterBtn = document.querySelector(".filter-btn.active");
        const categoryFilter = activeFilterBtn
            ? activeFilterBtn.getAttribute("data-filter")
            : "all";

        const term = searchInput ? searchInput.value.trim().toLowerCase() : "";

        cards.forEach((card) => {
            const cardCategory = card.getAttribute("data-category");
            const title = card.querySelector("h3").textContent.toLowerCase();
            const keywords = (
                card.getAttribute("data-keywords") || ""
            ).toLowerCase();

            const matchCategory =
                categoryFilter === "all" || cardCategory === categoryFilter;

            const matchSearch =
                term === "" || title.includes(term) || keywords.includes(term);

            if (matchCategory && matchSearch) {
                card.classList.remove("d-none");
            } else {
                card.classList.add("d-none");
            }
        });

        if (term === "") {
            hasScrolledOnce = false;
        }
    }

    filterBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            filterBtns.forEach((b) => b.classList.remove("active"));
            btn.classList.add("active");
            applyFilters({ scroll: true });
        });
    });

    if (searchInput) {
        searchInput.addEventListener("input", () => {
            applyFilters({ scroll: true });
        });
    }

    applyFilters();
});

// page FAQ - Recherche dans la FAQ
document.addEventListener("DOMContentLoaded", () => {
    const faqSearch = document.getElementById("faq-search");
    const faqItems = document.querySelectorAll(".faq-item");

    if (faqSearch && faqItems.length) {
        faqSearch.addEventListener("input", () => {
            const term = faqSearch.value.trim().toLowerCase();

            faqItems.forEach((item) => {
                const text = item.innerText.toLowerCase();
                if (term === "" || text.includes(term)) {
                    item.classList.remove("d-none");
                } else {
                    item.classList.add("d-none");
                }
            });
        });
    }
});

//page Livres - Filtrage et recherche page livres_informatique.html

document.addEventListener("DOMContentLoaded", () => {
    const livreSearch = document.getElementById("livres-search");
    const livreCards = document.querySelectorAll(".livre-card");
    const filterBtns = document.querySelectorAll(".livre-filter-btn");

    function applyLivreFilters() {
        const activeFilterBtn = document.querySelector(
            ".livre-filter-btn.active",
        );
        const categoryFilter = activeFilterBtn
            ? activeFilterBtn.getAttribute("data-filter")
            : "all";

        const term = livreSearch ? livreSearch.value.trim().toLowerCase() : "";

        livreCards.forEach((card) => {
            const cat = card.getAttribute("data-category");
            const text =
                card.innerText.toLowerCase() +
                " " +
                (card.getAttribute("data-keywords") || "").toLowerCase();

            const matchCategory =
                categoryFilter === "all" || cat === categoryFilter;

            const matchSearch = term === "" || text.includes(term);

            if (matchCategory && matchSearch) {
                card.classList.remove("d-none");
            } else {
                card.classList.add("d-none");
            }
        });
    }

    filterBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            filterBtns.forEach((b) => b.classList.remove("active"));
            btn.classList.add("active");
            applyLivreFilters();
        });
    });

    if (livreSearch) {
        livreSearch.addEventListener("input", () => {
            applyLivreFilters();
        });
    }

    applyLivreFilters();
});

// recherche et filtrage dans  la page tous les cours

document.addEventListener("DOMContentLoaded", () => {
    const tousSearch = document.getElementById("tous-cours-search");
    const tousFilterBtns = document.querySelectorAll(".tous-cours-filter-btn");
    const tousCards = document.querySelectorAll(".tous-cours-card");

    if (tousSearch && tousFilterBtns.length && tousCards.length) {
        function applyTousCoursFilters() {
            const activeBtn = document.querySelector(
                ".tous-cours-filter-btn.active",
            );
            const filterRaw = activeBtn
                ? activeBtn.getAttribute("data-filter")
                : "all";

            // filters array (e.g. ["5g","coeur-reseau"])
            const filters =
                !filterRaw || filterRaw === "all"
                    ? ["all"]
                    : filterRaw
                          .split(",")
                          .map((s) => s.trim())
                          .filter(Boolean);

            const term = tousSearch.value.trim().toLowerCase();

            tousCards.forEach((card) => {
                // card categories array (supports "cat1,cat2" too)
                const cardCatRaw = card.getAttribute("data-category") || "";
                const cardCats = cardCatRaw
                    .split(",")
                    .map((s) => s.trim())
                    .filter(Boolean);

                const text = (
                    card.innerText +
                    " " +
                    (card.getAttribute("data-keywords") || "")
                ).toLowerCase();

                const matchCategory =
                    filters.includes("all") ||
                    cardCats.some((c) => filters.includes(c));

                const matchSearch = term === "" || text.includes(term);

                card.classList.toggle(
                    "d-none",
                    !(matchCategory && matchSearch),
                );
            });
        }

        // clicks
        tousFilterBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                tousFilterBtns.forEach((b) => b.classList.remove("active"));
                btn.classList.add("active");
                applyTousCoursFilters();
            });
        });

        // search typing
        tousSearch.addEventListener("input", applyTousCoursFilters);
        const params = new URLSearchParams(window.location.search);
        const q = params.get("q");

        if (tousSearch && q) {
            tousSearch.value = q;
        }

        // initial
        applyTousCoursFilters();
    }
});






document.querySelectorAll(".tous-cours-card").forEach((card) => {
    const slug = card.dataset.slug;
    const button = card.querySelector(".button_commence");

    if (slug && button) {
        button.href = `/lecon/${slug}`;
    }
});

document.addEventListener("click", async (e) => {
    const btn = e.target.closest(".js-add-to-panier");
    if (!btn) return;

    e.preventDefault();

    const url = btn.dataset.url;

    try {
        const res = await fetch(url, {
            method: "POST",
            headers: {
                "X-Requested-With": "XMLHttpRequest",
            },
        });

        if (!res.ok) return;

        const data = await res.json();
        btn.classList.add("added");
        btn.textContent = "✔ Ajouté";

        // تحديث العداد
        const badge = document.getElementById("panier-count-badge");
        const countEl = document.getElementById("panier-count");

        if (countEl) {
            countEl.textContent = data.count;
            badge.style.display = data.count > 0 ? "inline-block" : "none";
        }

        // ✅ رسالة النجاح
        showToast(data.message);
    } catch (err) {
        console.error(err);
    }
});


//ajouter un message success

function showToast(message) {
    const container = document.getElementById("toast-container");
    if (!container) return;

    const toastEl = document.createElement("div");
    toastEl.className = "toast align-items-center text-bg-success border-0";
    toastEl.setAttribute("role", "alert");
    toastEl.setAttribute("aria-live", "assertive");
    toastEl.setAttribute("aria-atomic", "true");

    toastEl.innerHTML = `
    <div class="d-flex">
      <div class="toast-body">${message}</div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
    </div>
  `;

    container.appendChild(toastEl);

    const toast = new bootstrap.Toast(toastEl, {
        delay: 2000,
    });

    toast.show();

    toastEl.addEventListener("hidden.bs.toast", () => {
        toastEl.remove();
    });
}

console.count("PANIER_HANDLER");
